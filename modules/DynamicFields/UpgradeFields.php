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

require_once('modules/DynamicFields/FieldCases.php');
require_once('modules/DynamicFields/DynamicField.php');
 global $db;
 if(!isset($db)){
 	$db = DBManagerFactory::getInstance();
 }
 $result = $db->query( 'SELECT * FROM fields_meta_data WHERE deleted = 0 ORDER BY custom_module');
 $modules = array();
 /*
  * get the real field_meta_data
  */
 while($row = $db->fetchByAssoc($result)){
 	$the_modules = $row['custom_module'];
 	if(!isset($modules[$the_modules])){
 		$modules[$the_modules] = array();	
 	}
 	$modules[$the_modules][$row['name']] = $row['name'];
 }
 	
 $simulate = false;
 if(!isset($_REQUEST['run'])){
 	$simulate = true;
 	echo "SIMULATION MODE - NO CHANGES WILL BE MADE EXCEPT CLEARING CACHE";
 }	

 foreach($modules as $the_module=>$fields){
         if(isset($beanList[$the_module]))
         {
 	$class_name = $beanList[$the_module];
 	echo "<br><br>Scanning $the_module <br>";
		
		require_once($beanFiles[$class_name]);
		$mod = new $class_name();
		if(!$db->tableExists($mod->table_name . "_cstm")){
			$mod->custom_fields = new DynamicField();
			$mod->custom_fields->setup($mod);
		$mod->custom_fields->createCustomTable();
		}

		$result = $db->query("DESCRIBE $mod->table_name" . "_cstm");
		
		while($row = $db->fetchByAssoc($result)){
			
			
			$col = $row['Field'];
			$type = $row['Type'];
			$fieldDef = $mod->getFieldDefinition($col);
			$the_field = get_widget($fieldDef['type']);
			$the_field->set($fieldDef);
				
				if(!isset($fields[$col]) && $col != 'id_c'){
					if(!$simulate)$db->query("ALTER TABLE $mod->table_name" . "_cstm DROP COLUMN $col");
					unset($fields[$col]);
					echo "Dropping Column $col from $mod->table_name" . "_cstm for module $the_module<br>";
				}	else{
					if($col != 'id_c'){
					if(trim($the_field->get_db_type()) != trim($type)){
						
					echo "Fixing Column Type for $col changing $type to ". $the_field->get_db_type() . "<br>";
					if(!$simulate)$db->query($the_field->get_db_modify_alter_table($mod->table_name . '_cstm'));		
					}
					}
					
					unset($fields[$col]);
				}
			
		}
			
			echo sizeof($fields) . " field(s) missing from $mod->table_name" . "_cstm<br>";
			foreach($fields as $field){
				echo "Adding Column $field to $mod->table_name" . "_cstm<br>";
				if(!$simulate){
					$the_field = $mod->getFieldDefinition($field);
					$field = get_widget($the_field['type']);
					$field->set($the_field);
					$query = $field->get_db_add_alter_table($mod->table_name . '_cstm');
					echo $query;
            		if(!empty($query)){
                		$mod->db->query($query);
            		}
				}
			}
         }
	}
	
	
	DynamicField::deleteCache();	
	echo '<br>Done<br>';
	if($simulate){
		echo '<a href="index.php?module=Administration&action=UpgradeFields&run=true">Execute non-simulation mode</a>';	
	}
		
		
 
 
 	
 
 
 
 ?>