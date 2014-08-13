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

require_once('include/SugarSearchEngine/SugarSearchEngineFullIndexer.php');
require_once('include/SugarSearchEngine/SugarSearchEngineMetadataHelper.php');

class AdministrationViewGlobalsearchsettings extends SugarView
{
 	/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;

    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
    	   $mod_strings['LBL_GLOBAL_SEARCH_SETTINGS']
    	   );
    }

    /**
	 * @see SugarView::_getModuleTab()
	 */
	protected function _getModuleTab()
    {
        return 'Administration';
    }

    /**
	 * @see SugarView::display()
	 */
	public function display()
    {
    	require_once('modules/Home/UnifiedSearchAdvanced.php');
		$usa = new UnifiedSearchAdvanced();
        global $mod_strings, $app_strings, $app_list_strings;

        $sugar_smarty = new Sugar_Smarty();
        $sugar_smarty->assign('APP', $app_strings);
        $sugar_smarty->assign('MOD', $mod_strings);
        $sugar_smarty->assign('moduleTitle', $this->getModuleTitle(false));

        $modules = $usa->retrieveEnabledAndDisabledModules();

        $sugar_smarty->assign('enabled_modules', json_encode($modules['enabled']));
        $sugar_smarty->assign('disabled_modules', json_encode($modules['disabled']));
        //FTS Options
        $schedulerID = SugarSearchEngineFullIndexer::isFTSIndexScheduled();
        if(isset($GLOBALS['sugar_config']['full_text_engine']) &&
           is_array($GLOBALS['sugar_config']['full_text_engine']))
        {
            $defaultEngine = SugarSearchEngineFactory::getFTSEngineNameFromConfig();
            $config = $GLOBALS['sugar_config']['full_text_engine'][$defaultEngine];
        }
        else
        {
            $defaultEngine = '';
            $config = array('host' => '','port' => '');
        }

        $justRequestedAScheduledIndex = !empty($_REQUEST['sched']) ? TRUE : FALSE;

        $scheduleDisableButton = empty($defaultEngine) ? 'disabled' : '';
        $schedulerID = SugarSearchEngineFullIndexer::isFTSIndexScheduled();
        $schedulerCompleted = SugarSearchEngineFullIndexer::isFTSIndexScheduleCompleted($schedulerID);
        $hide_fts_config = isset( $GLOBALS['sugar_config']['hide_full_text_engine_config'] ) ? $GLOBALS['sugar_config']['hide_full_text_engine_config'] : FALSE;

        $showSchedButton = ($defaultEngine != '' && $this->isFTSConnectionValid()) ? TRUE : FALSE;

        $sugar_smarty->assign("showSchedButton", $showSchedButton);
        $sugar_smarty->assign("hide_fts_config", $hide_fts_config);
        $sugar_smarty->assign("fts_type", get_select_options_with_id($app_list_strings['fts_type'], $defaultEngine));
        $sugar_smarty->assign("fts_host", empty($config['host']) ? 'localhost' : $config['host']);
        $sugar_smarty->assign("fts_port", empty($config['port']) ? '9200' : $config['port']);
        $sugar_smarty->assign("scheduleDisableButton", $scheduleDisableButton);
        $sugar_smarty->assign("fts_scheduled", !empty($schedulerID) && !$schedulerCompleted);
        $sugar_smarty->assign('justRequestedAScheduledIndex', $justRequestedAScheduledIndex);
        //End FTS
        $tpl = 'modules/Administration/templates/GlobalSearchSettings.tpl';
        if(file_exists('custom/' . $tpl))
        {
           $tpl = 'custom/' . $tpl;
        }
        echo $sugar_smarty->fetch($tpl);

    }

    protected function isFTSConnectionValid()
    {
        require_once('include/SugarSearchEngine/SugarSearchEngineFactory.php');
        $searchEngine = SugarSearchEngineFactory::getInstance();
        $result = $searchEngine->getServerStatus();
        if($result['valid'])
            return TRUE;
        else
            return FALSE;
    }
}