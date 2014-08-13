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




require_once('include/Dashlets/DashletGenericChart.php');

class MyForecastingChartDashlet extends DashletGenericChart 
{
    /**
     * @see Dashlet::$isConfigurable
     */
    public $isConfigurable = true;
    
    
    /**
     * @see DashletGenericChart::$_seedName
     */
    protected $_seedName = 'Forecasts';
    
    /**
     * @see Dashlet::$isConfigPanelClearShown
     */
    public $isConfigPanelClearShown = false;
    
    
    /**
     * @see DashletGenericChart::display()
     */
    public function display() 
    {
        require_once('modules/Forecasts/Charts.php');
        $forecasting_chart = new forecast_charts();
        
        return $this->getTitle('<div align="center"></div>') . 
            '<div align="center">' . 
            $forecasting_chart->forecast_history($GLOBALS['current_user'],TimeDate::getInstance()->nowDb(),'Direct',5,true,$this->id) . '</div>'
			. $this->processAutoRefresh();
    }  

}

?>