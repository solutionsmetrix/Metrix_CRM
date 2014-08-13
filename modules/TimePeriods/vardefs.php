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

$dictionary['TimePeriod'] = array('table' => 'timeperiods'
                               ,'fields' => array (
  'id' =>
  array (
    'name' => 'id',
    'vname' => 'LBL_NAME',
    'type' => 'varchar',
    'len' => '36',
    'required'=>true,
    'reportable'=>false,
  ),
  'name' =>
  array (
    'name' => 'name',
    'vname' => 'LBL_TP_NAME',
    'type' => 'varchar',
    'len' => '36',
    'isnull' => 'false',
    'importable' => 'required',
  ),
  'parent_id' =>
  array (
    'name' => 'parent_id',
    'vname' => 'LBL_PARENT_ID',
    'type' => 'id',
    'id_name' => 'id',
    'table' => 'timeperiods',
    'reportable'=>false,
  ),
  'start_date' =>
  array (
    'name' => 'start_date',
    'vname' => 'LBL_TP_START_DATE',
    'type' => 'date',
    'isnull' => 'false',
    'importable' => 'required',
  ),
  'end_date' =>
  array (
    'name' => 'end_date',
    'vname' => 'LBL_TP_END_DATE',
    'type' => 'date',
    'isnull' => 'false',
    'importable' => 'required',
  ),
  'created_by' =>
  array (
    'name' => 'created_by',
    'vname' => 'LBL_CREATED_BY',
    'type' => 'varchar',
    'len' => '36',
  ),
  'date_entered' =>
  array (
    'name' => 'date_entered',
    'vname' => 'LBL_DATE_ENTERED',
    'type' => 'datetime',
  ),
'date_modified' =>
  array (
    'name' => 'date_modified',
    'vname' => 'LBL_DATE_MODIFIED',
    'type' => 'datetime',
  ),
'deleted' =>
  array (
    'name' => 'deleted',
    'vname' => 'LBL_DELETED',
    'type' => 'bool',
    'reportable'=>false,
  ),
 'is_fiscal_year' =>
  array (
    'name' => 'is_fiscal_year',
    'vname' => 'LBL_TP_IS_FISCAL_YEAR',
    'type' => 'bool',
  ),
  'forecast_schedules' =>
  array (
  	'name' => 'forecast_schedules',
    'type' => 'link',
    'relationship' => 'timeperiod_forecast_schedules',
    'source'=>'non-db',
  ),
  'related_timeperiods' =>
  array (
  	'name' => 'related_timeperiods',
    'type' => 'link',
    'relationship' => 'related_timeperiods',
    'source'=>'non-db',
  ),

 )
, 'indices' => array (
       array('name' =>'timeperiodspk', 'type' =>'primary', 'fields'=>array('id'))
  )
, 'relationships' => array (
	'timeperiod_forecast_schedules' => array('lhs_module'=> 'TimePeriods', 'lhs_table'=> 'timeperiods', 'lhs_key' => 'id',
							  'rhs_module'=> 'Forecasts', 'rhs_table'=> 'forecast_schedule', 'rhs_key' => 'timeperiod_id',
							  'relationship_type'=>'one-to-many'),
	'related_timeperiods' => array('lhs_module'=> 'TimePeriods', 'lhs_table'=> 'timeperiods', 'lhs_key' => 'id',
							  'rhs_module'=> 'TimePeriods', 'rhs_table'=> 'timeperiods', 'rhs_key' => 'parent_id',
							  'relationship_type'=>'one-to-many')


  )
);
?>
