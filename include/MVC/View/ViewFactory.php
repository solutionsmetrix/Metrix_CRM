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

  /**
  * ViewFactory
  *
  * View factory class. This file is used by the controller along with a view paramter to build the
  * requested view.
  */
require_once('include/MVC/View/SugarView.php');

/**
 * Sugar view factory
 * @api
 */
class ViewFactory{
	/**
	 * load the correct view
	 * @param string $type View Type
	 * @return valid view
	 */
	function loadView($type = 'default', $module, $bean = null, $view_object_map = array(), $target_module=''){
		$type = strtolower($type);

		//first let's check if the module handles this view

		$view = null;

        //Check to see if we should load a custom parent view instance
        loadParentView($type);

		if(!empty($target_module)) {
			if(file_exists('custom/modules/'.$target_module.'/views/view.'.$type.'.php')){
				$view = ViewFactory::_buildFromFile('custom/modules/'.$target_module.'/views/view.'.$type.'.php', $bean, $view_object_map, $type, $target_module);
			}else if(file_exists('modules/'.$target_module.'/views/view.'.$type.'.php')){
				$view = ViewFactory::_buildFromFile('modules/'.$target_module.'/views/view.'.$type.'.php', $bean, $view_object_map, $type, $target_module);
			}
		}

		if(!isset($view)) {
			if(file_exists('custom/modules/'.$module.'/views/view.'.$type.'.php')){
				$view = ViewFactory::_buildFromFile('custom/modules/'.$module.'/views/view.'.$type.'.php', $bean, $view_object_map, $type, $module);
			}else if(file_exists('modules/'.$module.'/views/view.'.$type.'.php')){
				$view = ViewFactory::_buildFromFile('modules/'.$module.'/views/view.'.$type.'.php', $bean, $view_object_map, $type, $module);
			}else if(file_exists('custom/include/MVC/View/views/view.'.$type.'.php')){
				$view = ViewFactory::_buildFromFile('custom/include/MVC/View/views/view.'.$type.'.php', $bean, $view_object_map, $type, $module);
			}else{
				//if the module does not handle this view, then check if Sugar handles it OOTB
				$file = 'include/MVC/View/views/view.'.$type.'.php';
				if(file_exists($file)){
					//it appears Sugar does have the proper logic for this file.
					$view = ViewFactory::_buildFromFile($file, $bean, $view_object_map, $type, $module);
				}
			}
		}
		// Default to SugarView if still nothing found/built
		if (!isset($view))
			$view = new SugarView();
		ViewFactory::_loadConfig($view, $type);
		return $view;
	}

	/**
	 * Load the view_<view>_config.php file which holds options used by the view.
	 */
	function _loadConfig(&$view, $type){
		$view_config_custom = array();
		$view_config_module = array();
		$view_config_root_cstm = array();
		$view_config_root = array();
		$view_config_app = array();
		$config_file_name = 'view.'.$type.'.config.php';
		$view_config = sugar_cache_retrieve("VIEW_CONFIG_FILE_".$view->module."_TYPE_".$type);
		if(!$view_config){
			if(file_exists('custom/modules/'.$view->module.'/views/'.$config_file_name)){
				require_once('custom/modules/'.$view->module.'/views/'.$config_file_name);
				$view_config_custom = $view_config;
			}
			if(file_exists('modules/'.$view->module.'/views/'.$config_file_name)){
				require_once('modules/'.$view->module.'/views/'.$config_file_name);
				$view_config_module = $view_config;
			}
			if(file_exists('custom/include/MVC/View/views/'.$config_file_name)){
				require_once('custom/include/MVC/View/views/'.$config_file_name);
				$view_config_root_cstm = $view_config;
			}
			if(file_exists('include/MVC/View/views/'.$config_file_name)){
				require_once('include/MVC/View/views/'.$config_file_name);
				$view_config_root = $view_config;
			}
			if(file_exists('include/MVC/View/views/view.config.php')){
				require_once('include/MVC/View/views/view.config.php');
				$view_config_app = $view_config;
			}
			$view_config = array('actions' => array(), 'req_params' => array(),);

			//actions
			if(!empty($view_config_app) && !empty($view_config_app['actions']))
				$view_config['actions'] = array_merge($view_config['actions'], $view_config_app['actions']);
			if(!empty($view_config_root) && !empty($view_config_root['actions']))
				$view_config['actions'] = array_merge($view_config['actions'], $view_config_root['actions']);
			if(!empty($view_config_root_cstm) && !empty($view_config_root_cstm['actions']))
				$view_config['actions'] = array_merge($view_config['actions'], $view_config_root_cstm['actions']);
			if(!empty($view_config_module) && !empty($view_config_module['actions']))
				$view_config['actions'] = array_merge($view_config['actions'], $view_config_module['actions']);
			if(!empty($view_config_custom) && !empty($view_config_custom['actions']))
				$view_config['actions'] = array_merge($view_config['actions'], $view_config_custom['actions']);

			//req_params
			if(!empty($view_config_app) && !empty($view_config_app['req_params']))
				$view_config['req_params'] = array_merge($view_config['req_params'], $view_config_app['req_params']);
			if(!empty($view_config_root) && !empty($view_config_root['req_params']))
				$view_config['req_params'] = array_merge($view_config['req_params'], $view_config_root['req_params']);
			if(!empty($view_config_root_cstm) && !empty($view_config_root_cstm['req_params']))
				$view_config['req_params'] = array_merge($view_config['req_params'], $view_config_root_cstm['req_params']);
			if(!empty($view_config_module) && !empty($view_config_module['req_params']))
				$view_config['req_params'] = array_merge($view_config['req_params'], $view_config_module['req_params']);
			if(!empty($view_config_custom) && !empty($view_config_custom['req_params']))
				$view_config['req_params'] = array_merge($view_config['req_params'], $view_config_custom['req_params']);

			sugar_cache_put("VIEW_CONFIG_FILE_".$view->module."_TYPE_".$type, $view_config);
		}
		$action = strtolower($view->action);
		$config = null;
		if(!empty($view_config['req_params'])){
			//try the params first
			foreach($view_config['req_params'] as $key => $value){
			    if(!empty($_REQUEST[$key]) && $_REQUEST[$key] == "false") {
			        $_REQUEST[$key] = false;
			    }
				if(!empty($_REQUEST[$key])){

					if(!is_array($value['param_value'])){
						if($value['param_value'] ==  $_REQUEST[$key]){
							$config = $value['config'];
							break;
						}
					}else{

						foreach($value['param_value'] as $v){
							if($v ==  $_REQUEST[$key]){
								$config = $value['config'];
								break;
							}

						}

					}



				}
			}
		}
		if($config == null && !empty($view_config['actions']) && !empty($view_config['actions'][$action])){
				$config = $view_config['actions'][$action];
		}
		if($config != null)
			$view->options = $config;
	}

	/**
	 * This is a private function which just helps the getView function generate the
	 * proper view object
	 *
	 * @return a valid SugarView
	 */
	function _buildFromFile($file, &$bean, $view_object_map, $type, $module){
		require_once($file);
		//try ModuleViewType first then try ViewType if that fails then use SugarView
		$class = ucfirst($module).'View'.ucfirst($type);
		$customClass = 'Custom' . $class;

		if(class_exists($customClass)){
			return ViewFactory::_buildClass($customClass, $bean, $view_object_map);
		}
		if(class_exists($class)){
			return ViewFactory::_buildClass($class, $bean, $view_object_map);
		}
		//Now try the next set of possibilites if it was none of the above
		$class = 'View'.ucfirst($type);
		$customClass = 'Custom' . $class;
		if(class_exists($customClass)){
			return ViewFactory::_buildClass($customClass, $bean, $view_object_map);
		}
		if(class_exists($class)){
			return ViewFactory::_buildClass($class, $bean, $view_object_map);
		}
		//Now check if there is a custom SugarView for generic handling
		if(file_exists('custom/include/MVC/View/SugarView.php')){
			require_once('custom/include/MVC/View/SugarView.php');
			if(class_exists('CustomSugarView')){
				return new CustomSugarView($bean, $view_object_map);
			}
		}
		//if all else fails return SugarView
		return new SugarView($bean, $view_object_map);

	}

	/**
	 * instantiate the correct view and call init to pass on any obejcts we need to
	 * from the controller.
	 *
	 * @param string class - the name of the class to instantiate
	 * @param object bean = the bean to pass to the view
	 * @param array view_object_map - the array which holds obejcts to pass between the
	 *                                controller and the view.
	 *
	 * @return SugarView
	 */
	function _buildClass($class, $bean, $view_object_map){
		$view = new $class();
		$view->init($bean, $view_object_map);
		if($view instanceof SugarView){
			return $view;
		}else
			return new SugarView($bean, $view_object_map);
	}
}
?>
