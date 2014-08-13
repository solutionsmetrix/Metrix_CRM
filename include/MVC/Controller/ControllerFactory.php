<?php
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

require_once('include/MVC/Controller/SugarController.php');
/**
 * MVC Controller Factory
 * @api
 */
class ControllerFactory
{
	/**
	 * Obtain an instance of the correct controller.
	 *
	 * @return an instance of SugarController
	 */
	function getController($module){
		$class = ucfirst($module).'Controller';
		$customClass = 'Custom' . $class;
		if(file_exists('custom/modules/'.$module.'/controller.php')){
			$customClass = 'Custom' . $class;
			require_once('custom/modules/'.$module.'/controller.php');
			if(class_exists($customClass)){
				$controller = new $customClass();
			}else if(class_exists($class)){
				$controller = new $class();
			}
		}elseif(file_exists('modules/'.$module.'/controller.php')){
			require_once('modules/'.$module.'/controller.php');
			if(class_exists($customClass)){
				$controller = new $customClass();
			}else if(class_exists($class)){
				$controller = new $class();
			}
		}else{
			if(file_exists('custom/include/MVC/Controller/SugarController.php')){
				require_once('custom/include/MVC/Controller/SugarController.php');
			}
			if(class_exists('CustomSugarController')){
				$controller = new CustomSugarController();
			}else{
			$controller = new SugarController();
			}
		}
		//setup the controller
		$controller->setup($module);
		return $controller;
	}

}
?>