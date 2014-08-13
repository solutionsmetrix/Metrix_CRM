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

class SugarAutoLoader{

	public static $map = array(
		'XTemplate'=>'XTemplate/xtpl.php',
		'ListView'=>'include/ListView/ListView.php',
		'Sugar_Smarty'=>'include/Sugar_Smarty.php',
		'Javascript'=>'include/javascript/javascript.php',
        'SugarSearchEngineFullIndexer'=>'include/SugarSearchEngine/SugarSearchEngineFullIndexer.php',
        'SugarSearchEngineSyncIndexer'=>'include/SugarSearchEngine/SugarSearchEngineSyncIndexer.php',
	);

	public static $noAutoLoad = array(
		'Tracker'=>true,
	);

	public static $moduleMap = array();

    public static function autoload($class)
	{
		$uclass = ucfirst($class);
		if(!empty(SugarAutoLoader::$noAutoLoad[$class])){
			return false;
		}
		if(!empty(SugarAutoLoader::$map[$uclass])){
			require_once(SugarAutoLoader::$map[$uclass]);
			return true;
		}

		if(empty(SugarAutoLoader::$moduleMap)){
			if(isset($GLOBALS['beanFiles'])){
				SugarAutoLoader::$moduleMap = $GLOBALS['beanFiles'];
			}else{
				include('include/modules.php');
				SugarAutoLoader::$moduleMap = $beanFiles;
			}
		}
		if(!empty(SugarAutoLoader::$moduleMap[$class])){
			require_once(SugarAutoLoader::$moduleMap[$class]);
			return true;
		}
        $viewPath = self::getFilenameForViewClass($class);
        if (!empty($viewPath))
        {
            require_once($viewPath);
            return true;
        }
        $reportWidget = self::getFilenameForSugarWidget($class);
        if (!empty($reportWidget))
        {
            require_once($reportWidget);
            return true;
        }

        $expression = self::getFilenameForExpressionClass($class);
        if (!empty($expression)) {
            require_once($expression);
            return true;
        }

  		return false;
	}

    protected static function getFilenameForViewClass($class)
    {
        $module = false;
        if (!empty($_REQUEST['module']) && substr($class, 0, strlen($_REQUEST['module'])) == $_REQUEST['module'])
        {
            //This is a module view
            $module = $_REQUEST['module'];
            $class = substr($class, strlen($module));
        }

        if (substr($class, 0, 4) == "View")
        {
            $view = strtolower(substr($class, 4));
            if ($module)
            {
                $modulepath = "modules/$module/views/view.$view.php";
                if (file_exists("custom/$modulepath"))
                    return "custom/$modulepath";
                if (file_exists($modulepath))
                    return $modulepath;
            } else {
                $basepath = "include/MVC/View/views/view.$view.php";
                if (file_exists("custom/$basepath")){
                    return "custom/$basepath";
                }
                if (file_exists($basepath)) {
                    return $basepath;
                }
            }
        }
    }

    /**
     * getFilenameForSugarWidget
     * This method attempts to autoload classes starting with name "SugarWidget".  It first checks for the file
     * in custom/include/generic/SugarWidgets directory and if not found defaults to include/generic/SugarWidgets.
     * This method is used so that we can easily customize and extend these SugarWidget classes.
     *
     * @static
     * @param $class String name of the class to load
     * @return String file of the SugarWidget class; false if none found
     */
    protected static function getFilenameForSugarWidget($class)
    {
        //Only bother to check if the class name starts with SugarWidget
        if(strpos($class, 'SugarWidget') !== false)
        {
            if(strpos($class, 'SugarWidgetField') !== false)
            {
                //We need to lowercase the portion after SugarWidgetField
                $name = substr($class, 16);
                if(!empty($name))
                {
                    $class = 'SugarWidgetField' . strtolower($name);
                }
            }

            $file = get_custom_file_if_exists("include/generic/SugarWidgets/{$class}.php");
            if(file_exists($file))
            {
               return $file;
            }
        }
        return false;
    }

    /**
     * getFilenameForExpressionClass
     *
     * Used to autoload classes that end in "Expression". It will check in all directories found in
     * custom/include/Expressions/Expression and include/Expressions/Expression .
     * This method is allows for easy loading of arbitrary expression classes by the SugarLogic Expression parser.
     *
     * @static
     * @param $class String name of the class to load
     * @return String file of the Expression class; false if none found
     */
    protected static function getFilenameForExpressionClass($class)
    {
        if(substr($class, -10) == 'Expression') {
            $file = get_custom_file_if_exists("include/Expressions/Expression/{$class}.php");
            if (file_exists($file))
                return $file;

            $types = array("Boolean", "Date", "Enum", "Generic", "Numeric", "Relationship", "String", "Time");
            foreach($types as $type) {
                $file = get_custom_file_if_exists("include/Expressions/Expression/{$type}/{$class}.php");
                if (file_exists($file))
                    return $file;
            }
        }
        return false;
    }

	public static function loadAll(){
		foreach(SugarAutoLoader::$map as $class=>$file){
			require_once($file);
		}

		if(isset($GLOBALS['beanFiles'])){
			$files = $GLOBALS['beanFiles'];
		}else{
			include('include/modules.php');
			$files = $beanList;
		}
		foreach(SugarAutoLoader::$map as $class=>$file){
			require_once($file);
		}

	}
}
?>
