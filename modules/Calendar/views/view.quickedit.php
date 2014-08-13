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

require_once('include/MVC/View/views/view.ajax.php');
require_once('include/EditView/EditView2.php');


class CalendarViewQuickEdit extends SugarView {

	var $ev;
	protected $editable;	
	
	public function preDisplay()
	{	
		$this->bean = $this->view_object_map['currentBean'];
		
		if ($this->bean->ACLAccess('Save')) {
			$this->editable = 1;
		} else {
			$this->editable = 0;
		}
	}
	
	public function display(){
		require_once("modules/Calendar/CalendarUtils.php");
		
		$module = $this->view_object_map['currentModule'];
		
		$_REQUEST['module'] = $module;
				
		$base = 'modules/' . $module . '/metadata/';
		$source = 'custom/'.$base.'quickcreatedefs.php';
		if (!file_exists($source)){
			$source = $base . 'quickcreatedefs.php';
			if (!file_exists($source)){
				$source = 'custom/' . $base . 'editviewdefs.php';
				if (!file_exists($source)){
					$source = $base . 'editviewdefs.php';
				}
			}
		}
		
		$GLOBALS['mod_strings'] = return_module_language($GLOBALS['current_language'], $module);
        $tpl = $this->getCustomFilePathIfExists('include/EditView/EditView.tpl');

		$this->ev = new EditView();
		$this->ev->view = "QuickCreate";
		$this->ev->ss = new Sugar_Smarty();
		$this->ev->formName = "CalendarEditView";
		$this->ev->setup($module,$this->bean,$source,$tpl);
		$this->ev->defs['templateMeta']['form']['headerTpl'] = "modules/Calendar/tpls/editHeader.tpl";
		$this->ev->defs['templateMeta']['form']['footerTpl'] = "modules/Calendar/tpls/empty.tpl";						
		$this->ev->process(false, "CalendarEditView");		
		
		if(!empty($this->bean->id)){
			require_once('include/json_config.php');
			global $json;
			$json = getJSONobj();
			$json_config = new json_config();
			$GRjavascript = $json_config->getFocusData($module, $this->bean->id);
        	}else{
        		$GRjavascript = "";
        	}	
	
		$json_arr = array(
				'access' => 'yes',
				'module_name' => $this->bean->module_dir,
				'record' => $this->bean->id,
				'edit' => $this->editable,
				'html'=> $this->ev->display(false, true),
				'gr' => $GRjavascript,
		);
		
		if($repeat_arr = CalendarUtils::get_sendback_repeat_data($this->bean)){
			$json_arr = array_merge($json_arr,array("repeat" => $repeat_arr));
		}
			
		ob_clean();		
		echo json_encode($json_arr);
	}
}

?>
