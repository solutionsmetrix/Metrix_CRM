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


if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


//Custom plugins
//Search through the plugins to include any custom_utils.php files
	$dir_path = "./custom/workflow/plugins";	

	if(is_dir($dir_path)){
		if ($dir = opendir($dir_path)) {
			while (($file = readdir($dir)) !== false) {

			   if($file != "." && $file != ".." ) {
     				if(is_dir($dir_path."/".$file) == true) {
			   			
     					
     					if(file_exists($dir_path."/".$file."/custom_utils.php")){
     					
     						include_once($dir_path."/".$file."/custom_utils.php");
     						
     					//end if custom_utils file exists	
     					}
				   	
     				//end if is dir
     				}
				//confirm not . or ..
			   }	   	
			//end while
			}
		//end if can open dir
		}
	//end if is dir
	}
?>
