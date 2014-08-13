<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/


/**
 * Filter factory
 * @api
 */
class FilterFactory{

	static $filter_map = array();

	public static function getInstance($source_name, $filter_name=''){
		require_once('include/connectors/filters/default/filter.php');
		$key = $source_name . $filter_name;
		if(empty(self::$filter_map[$key])) {

			if(empty($filter_name)){
			   $filter_name = $source_name;
			}

			//split the wrapper name to find the path to the file.
			$dir = str_replace('_','/',$filter_name);
			$parts = explode("/", $dir);
			$file = $parts[count($parts)-1];

			//check if this override wrapper file exists.
		    require_once('include/connectors/ConnectorFactory.php');
			if(file_exists("modules/Connectors/connectors/filters/{$dir}/{$file}.php") ||
			   file_exists("custom/modules/Connectors/connectors/filters/{$dir}/{$file}.php")) {
				ConnectorFactory::load($filter_name, 'filters');
				try{
					$filter_name .= '_filter';
				}catch(Exception $ex){
					return null;
				}
			}else{
				//if there is no override wrapper, use the default.
				$filter_name = 'default_filter';
			}

			$component = ConnectorFactory::getInstance($source_name);
			$filter = new $filter_name();
			$filter->setComponent($component);
			self::$filter_map[$key] = $filter;
		} //if
		return self::$filter_map[$key];
	}

}
?>