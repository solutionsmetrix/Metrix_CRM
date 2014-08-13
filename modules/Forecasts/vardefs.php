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


$dictionary['ForecastOpportunities'] = array( 'table'=>'does_not_exist',
'acl_fields' =>false,
'fields' => array (
  'id' =>
  array (
    'name' => 'id',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
    'reportable'=>true,
  ),
  'name' =>
  array (
    'name' => 'name',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'revenue' =>
  array (
    'name' => 'revenue',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'date_entered' =>
  array (
    'name' => 'date_entered',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'weighted_value' =>
  array (
    'name' => 'weighted_value',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),

  'account_name' =>
  array (
    'name' => 'account_name',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'probability' =>
  array (
    'name' => 'probability',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'worksheet_id' =>
  array (
    'name' => 'worksheet_id',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  //used to store worksheet values.
 'wk_likely_case' =>
  array (
    'name' => 'wk_likely_case',
    'vname' => 'LB_FS_LIKELY_CASE',
    'type' => 'id',
	'source'=>'non-db',
  ),
  //used to store worksheet values.
  'wk_worst_case' =>
  array (
    'name' => 'wk_worst_case',
    'vname' => 'LB_FS_WORST_CASE',
    'type' => 'int',
	'source'=>'non-db',
    ) ,
   //used to store worksheet values.
  'wk_best_case' =>
  array (
    'name' => 'wk_best_case',
    'vname' => 'LB_FS_BEST_CASE',
    'type' => 'int',
	'source'=>'non-db',
    ),
  'next_step' =>
  array (
    'name' => 'next_step',
    'vname' => 'LB_FS_KEY',
    'type' => 'varchar',
    'source'=>'non-db',
  ),
  'opportunity_type' =>
  array (
    'name' => 'opportunity_type',
    'vname' => 'LB_FS_KEY',
    'type' => 'varchar',
    'source'=>'non-db',
  ),
  'description' =>
  array (
    'name' => 'descrfiption',
    'vname' => 'LB_FS_KEY',
    'type' => 'varchar',
    'source'=>'non-db',
  ),
  //represent's a value committed by forecast user.
  'best_case' =>
  array (
    'name' => 'best_case',
    'vname' => 'LB_BEST_CASE_VALUE',
    'type' => 'long',
	'source'=>'non-db',
  ),
  //represent's a value committed by forecast user.
  'likely_case' =>
  array (
    'name' => 'likely_case',
    'vname' => 'LB_LIKELY_VALUE',
    'type' => 'long',
    'source'=>'non-db',
  ),
  //represent's a value committed by forecast user.
  'worst_case' =>
  array (
    'name' => 'worst_case',
    'vname' => 'LB_WORST_CASE_VALUE',
    'type' => 'long',
    'source'=>'non-db',
  ),

  ),
);

$dictionary['ForecastDirectReports'] = array( 'table'=>'does_not_exist',
'acl_fields' =>false,
'fields' => array (
  'id' =>
  array (
    'name' => 'id',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'user_id' =>
  array (
    'name' => 'user_id',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'user_name' =>
  array (
    'name' => 'user_name',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'first_name' =>
  array (
    'name' => 'first_name',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'last_name' =>
  array (
    'name' => 'last_name',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),

  'opp_count' =>
  array (
    'name' => 'opp_count',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  'opp_weigh_value' =>
  array (
    'name' => 'opp_weigh_value',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
  //represent's a value committed by forecast user.
  'best_case' =>
  array (
    'name' => 'best_case',
    'vname' => 'LB_BEST_CASE_VALUE',
    'type' => 'long',
	'source'=>'non-db',
  ),
  //represent's a value committed by forecast user.
  'likely_case' =>
  array (
    'name' => 'likely_case',
    'vname' => 'LB_LIKELY_VALUE',
    'type' => 'long',
    'source'=>'non-db',
  ),
  //represent's a value committed by forecast user.
  'worst_case' =>
  array (
    'name' => 'worst_case',
    'vname' => 'LB_WORST_CASE_VALUE',
    'type' => 'long',
    'source'=>'non-db',
  ),
  //used to store worksheet values.
 'wk_likely_case' =>
  array (
    'name' => 'wk_likely_case',
    'vname' => 'LB_FS_LIKELY_CASE',
    'type' => 'id',
	'source'=>'non-db',
  ),
  //used to store worksheet values.
  'wk_worst_case' =>
  array (
    'name' => 'wk_worst_case',
    'vname' => 'LB_FS_WORST_CASE',
    'type' => 'int',
	'source'=>'non-db',
    ) ,
   //used to store worksheet values.
  'wk_best_case' =>
  array (
    'name' => 'wk_worst_case',
    'vname' => 'LB_FS_BEST_CASE',
    'type' => 'int',
	'source'=>'non-db',
    ) ,
  'ref_timeperiod_id' =>
  array (
    'name' => 'ref_timeperiod_id',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
   'ref_user_id' =>
  array (
    'name' => 'ref_user_id',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
   'forecast_type' =>
  array (
    'name' => 'forecast_type',
    'vname' => 'LB_FS_KEY',
    'type' => 'id',
	'source'=>'non-db',
  ),
   'date_entered' =>
  array (
    'name' => 'date_entered',
    'vname' => 'LBL_FDR_DATE_COMMIT',
    'type' => 'datetime',
    'source'=>'non-db',
  ),
   'date_comitted' =>
  array (
    'name' => 'date_comitted',
    'vname' => 'LBL_FDR_DATE_COMMIT',
    'type' => 'date',
    'source'=>'non-db',
  ),

  ),
);
$dictionary['Forecast'] = array('table' => 'forecasts'
,'acl_fields' =>false,
   'fields' => array (
  'id' =>
  array (
    'name' => 'id',
    'vname' => 'LBL_FORECAST_ID',
    'type' => 'id',
    'required'=>true,
    'reportable'=>true,
    'comment' => 'Unique identifier',
  ),

 'timeperiod_id' =>
  array (
    'name' => 'timeperiod_id',
    'vname' => 'LBL_FORECAST_TIME_ID',
    'type' => 'id',
    'reportable'=>false,
	'comment' => 'ID of the associated time period for this forecast',
   ),

  'forecast_type' =>
  array (
    'name' => 'forecast_type',
    'vname' => 'LBL_FORECAST_TYPE',
    'type' => 'enum',
    'len' => 100,
    'massupdate' => false,
    'options' => 'forecast_type_dom',
	'comment' => 'Indicator of whether forecast is direct or rollup',
  ),
  'opp_count' =>
  array (
    'name' => 'opp_count',
    'vname' => 'LBL_FORECAST_OPP_COUNT',
    'type' => 'int',
    'len' => '5',
    'comment' => 'Number of opportunities represented by this forecast',
  ),
  'opp_weigh_value' =>
  array (
    'name' => 'opp_weigh_value',
    'vname' => 'LBL_FORECAST_OPP_WEIGH',
    'type' => 'int',
    'comment' => 'Weighted amount of all opportunities represented by this forecast',
  ),
  'best_case' =>
  array (
    'name' => 'best_case',
    'vname' => 'LBL_FORECAST_OPP_BEST_CASE',
    'type' => 'long',
    'comment' => 'Best case forecast amount',
  ),
  //renamed commit_value to likely_case
  'likely_case' =>
  array (
    'name' => 'likely_case',
    'vname' => 'LBL_FORECAST_OPP_COMMIT',
    'type' => 'long',
    'comment' => 'Likely case forecast amount',
  ),
  'worst_case' =>
  array (
    'name' => 'worst_case',
    'vname' => 'LBL_FORECAST_OPP_WORST',
    'type' => 'long',
    'comment' => 'Worst case likely amount',
  ),
'user_id' =>
  array (
    'name' => 'user_id',
    'vname' => 'LBL_FORECAST_USER',
    'type' => 'id',
    'reportable'=>false,
    'comment' => 'User to which this forecast pertains',
  ),
'date_entered' =>
  array (
    'name' => 'date_entered',
    'vname' => 'LBL_DATE_ENTERED',
    'type' => 'datetime',
    'required'=>true,
    'comment' => 'Date record created',
  ),
'date_modified' =>
  array (
    'name' => 'date_modified',
    'vname' => 'LBL_DATE_MODIFIED',
    'type' => 'datetime',
    'required'=>true,
    'comment' => 'Date record modified',
  ),
 'deleted' =>
  array (
    'name' => 'deleted',
    'vname' => 'LBL_DELETED',
    'type' => 'bool',
    'required' => false,
    'reportable'=>false,
    'comment' => 'Record deletion indicator',
  ),

 'timeperiod_name'=>
   array(
		'name'=>'timeperiod_name',
		'rname'=>'name',
		'id_name'=>'timeperiod_id',
		'vname'=>'LBL_TIMEPERIOD_NAME',
		'type'=>'relate',
		'table'=>'timeperiods',
		'isnull'=>'true',
		'module'=>'TimePeriods',
		'massupdate'=>false,
		'source'=>'non-db'
		),
 'user_name'=>
   array(
		'name'=>'user_name',
		'rname'=>'user_name',
		'id_name'=>'user_id',
		'vname'=>'LBL_USER_NAME',
		'type'=>'relate',
		'table'=>'users',
		'isnull'=>'true',
		'module'=>'Users',
		'massupdate'=>false,
		'source'=>'non-db'
		),
 'reports_to_user_name'=>
   array(
		'name'=>'reports_to_user_name',
		'rname'=>'user_name',
		'id_name'=>'reports_to_user_name',
		'vname'=>'LBL_REPORTS_TO_USER_NAME',
		'type'=>'relate',
		'table'=>'reports_to',
		'isnull'=>'true',
		'module'=>'Users',
		'massupdate'=>false,
		'source'=>'non-db'
		),
//timeperiod's start date
 'start_date' =>
	array (
		'name' => 'start_date',
    	'type' => 'date',
		'source'=>'non-db',
		'table' => 'timeperiods',
  	),
//timeperiod's end date
 'end_date' =>
	array (
		'name' => 'end_date',
    	'type' => 'date',
		'source'=>'non-db',
		'table' => 'timeperiods',
  	),
//timeperiod's name
 'name' =>
	array (
		'name' => 'name',
    	'type' => 'varchar',
		'source'=>'non-db'
  	),
  'created_by_link' =>
  array (
        'name' => 'created_by_link',
    'type' => 'link',
    'relationship' => 'forecasts_created_by',
    'vname' => 'LBL_CREATED_BY_USER',
    'link_type' => 'one',
    'module'=>'Users',
    'bean_name'=>'User',
    'source'=>'non-db',
  ),

  ),

 'relationships' => array (

   'forecasts_created_by' =>
   array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
   'rhs_module'=> 'Forecasts', 'rhs_table'=> 'forecasts', 'rhs_key' => 'user_id',
   'relationship_type'=>'one-to-many')

),
 'indices' => array (
       array('name' =>'forecastspk', 'type' =>'primary', 'fields'=>array('id'))
       )
);

$dictionary['Worksheet'] =  array('table' => 'worksheet', 'fields' => array (
  'id' =>
  array (
    'name' => 'id',
    'vname' => 'LBL_WK_ID',
    'type' => 'id',
    'reportable'=>false,
    'comment' => 'Unique identifier',
  ),
//worsheet owner/creator's id
  'user_id' =>
  array (
    'name' => 'user_id',
    'vname' => 'LBL_WK_USER_ID',
    'type' => 'id',
    'reportable'=>false,
    'comment' => 'User to which this worksheet pertains',
  ),
  //worsheet is for this timeperiod.
  'timeperiod_id' =>
  array (
    'name' => 'timeperiod_id',
    'vname' => 'LBL_WK_TIMEPERIOD_ID',
    'type' => 'id',
    'reportable'=>false,
    'comment' => 'ID of the associated time period for this worksheet',
  ),
  //worksheet is for this forecast type.
  //valid values are Direct/Rollup.
   'forecast_type'=>
  array(
  	'name'=>'forecast_type',
  	'vname'=>'LBL_WK_FORECAST_TYPE',
  	'type'=>'varchar',
  	'len' => 100,
  	'comment' => 'Indicator of whether worksheet is direct or rollup',
  ),
  //Worsheet entry
  //can be userid or opportunity it
  'related_id' =>
  array (
    'name' => 'related_id',
    'vname' => 'LBL_WK_RELATED_ID',
    'type' => 'id',
    'reportable'=>false,
    'comment' => 'User ID or Opportunity ID for this worksheet',
  ),
  //forecast type for related_id, null if related_id represents an opportunity.
   'related_forecast_type'=>
  array(
  	'name'=>'related_forecast_type',
  	'vname'=>'LBL_WK_FORECAST_TYPE',
  	'type'=>'varchar',
  	'len' => 100,
  	'comment' => 'Direct or rollup, or null if related_id is an Opportunity',
  ),
  'best_case' =>
  array (
    'name' => 'best_case',
    'vname' => 'LB_BEST_CASE_VALUE',
    'type' => 'long',
    'comment' => 'Best case worksheet amount',
  ),
  'likely_case' =>
  array (
    'name' => 'likely_case',
    'vname' => 'LB_LIKELY_VALUE',
    'type' => 'long',
    'comment' => 'Likely case worksheet amount',
  ),
  'worst_case' =>
  array (
    'name' => 'worst_case',
    'vname' => 'LB_WORST_CASE_VALUE',
    'type' => 'long',
    'comment' => 'Worst case worksheet amount',
  ),
  'date_modified' =>
  array (
    'name' => 'date_modified',
    'vname' => 'LBL_DATE_MODIFIED',
    'type' => 'datetime',
    'comment' => 'Date record modified',
  ),
  'modified_user_id' =>
  array (
    'name' => 'modified_user_id',
    'vname' => 'LBL_MODIFIED_USER_ID',
    'type' => 'id',
    'len' => 36,
    'comment' => 'User ID that last modified record',
  ),

 ),
 'indices' => array (
       array('name' =>'worksheetpk', 'type' =>'primary', 'fields'=>array('id'))
      )

);
?>
