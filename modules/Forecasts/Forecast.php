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

/*********************************************************************************

 * Description: TODO:  To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/






// User is used to store Forecast information.
class Forecast extends SugarBean {

	var $id;
	var $user_id;
	var $forecast_type;
	var $opp_count;
	var $opp_weigh_value;
	var $likely_case;
	var $current;
	var $timeperiod_id;
	var $name;
	var $start_date;
	var $end_date;
	var $date_modified;
	var $best_case;
	var $worst_case;
	
	var $currency;
	var $currencysymbol;
	var $currency_id;

	var $table_name = "forecasts";
	
	var $object_name = "Forecast";
	var $user_preferences;

	var $encodeFields = Array();

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array('');

	

	var $new_schema = true;
	var $module_dir = 'Forecasts';
	function Forecast() {
		global $current_user;
		parent::SugarBean();
		$this->setupCustomFields('Forecasts');  //parameter is module name
		$this->disable_row_level_security =true;
		
		
		$this->currency = new Currency();
		if (isset($current_user)) {
			$this->currency->retrieve($current_user->getPreference('currency'));
		}else{
			$this->currency->retrieve('-99');
		}		
		$this->currencysymbol= $this->currency->symbol;
	}

	function get_summary_text()
	{
		return "$this->name";
	}

	function retrieve($id, $encode=false, $deleted=true){
		$ret = parent::retrieve($id, $encode, $deleted);	
		
		return $ret;
	}

	function is_authenticated()
	{
		return $this->authenticated;
	}

	function fill_in_additional_list_fields() {
        if(isset($this->best_case) && !empty($this->best_case)){
            $this->best_case=$this->currency->convertFromDollar($this->best_case);
        }
        if(isset($this->worst_case) && !empty($this->worst_case)){
            $this->worst_case=$this->currency->convertFromDollar($this->worst_case);
        }
        if(isset($this->likely_case) && !empty($this->likely_case)){
            $this->likely_case=$this->currency->convertFromDollar($this->likely_case);
        }$this->weigh_value = ' ';
        if(isset($this->weigh_value) &&!empty($this->weigh_value )){
            $this->weigh_value=$this->currency->convertFromDollar($this->weigh_value);
        }
    }
	function fill_in_additional_detail_fields()
	{
	}

	function list_view_parse_additional_sections(&$list_form, $xTemplateSection){
		return $list_form;
	}

	function create_export_query($order_by, $where)
	{
	$query = "SELECT
				forecasts.*";
		$query .= " FROM forecasts ";
		$where_auto = '1=1';
		if(empty($show_deleted)){
			$where_auto = " forecasts.deleted = 0";
		}else if($show_deleted == 1){
			$where_auto = " forecasts.deleted = 1";
		}
		

		if($where != "")
			$query .= " WHERE $where AND " . $where_auto;
		else
			$query .= " WHERE " . $where_auto;

		if($order_by != "")
			$query .= " ORDER BY $order_by";
		else
			$query .= " ORDER BY forecasts.date_entered desc";

		return $query;		
	}

    function create_new_list_query($order_by, $where,$filter=array(),$params=array(), $show_deleted = 0,$join_type='', $return_array = false,$parentbean=null, $singleSelect = false)
    {
        global $current_user;
        $ret_array=array();
        $ret_array['select'] = "SELECT  tp.name timeperiod_name, tp.start_date start_date, tp.end_date end_date, forecasts.* "; 
        $ret_array['from'] = " FROM forecasts LEFT JOIN timeperiods tp on forecasts.timeperiod_id = tp.id  ";
        $ret_array['where'] = ' WHERE '. $where;

        //if order by just has asc or des
        $temp_order = trim($order_by);
        $temp_order = strtolower($temp_order);
        if($temp_order == 'asc'  ||  $temp_order == 'desc'){$order_by = '';}

        $ret_array['order_by'] = !empty($order_by) ? ' ORDER BY '. $order_by : '  ORDER BY forecasts.date_entered';

        if($return_array)
    	{
    		return $ret_array;
    	}

    	return  $ret_array['select'] . $ret_array['from'] . $ret_array['where']. $ret_array['order_by'];
    	
    }
    
    
	function get_list_view_data(){
		$forecast_fields = $this->get_list_view_array();
	
		
		global $timedate;
		$forecast_fields['START_DATE'] = $forecast_fields['START_DATE'];
		$forecast_fields['END_DATE'] = $forecast_fields['END_DATE'];
		$forecast_fields['LIKELY_CASE'] = format_number($forecast_fields['LIKELY_CASE'], 0, 0);
		$forecast_fields['BEST_CASE'] = format_number($forecast_fields['BEST_CASE'], 0, 0);
		$forecast_fields['WORST_CASE'] = format_number($forecast_fields['WORST_CASE'], 0, 0);		
		$forecast_fields['OPP_WEIGH_VALUE'] = format_number($forecast_fields['OPP_WEIGH_VALUE'], 0, 0);
		
		return $forecast_fields;
	}
	
	 function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}
	
}
?>