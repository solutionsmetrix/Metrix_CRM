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




require_once('include/utils/activity_utils.php');

class CalendarActivity {
	var $sugar_bean;
	var $start_time;
	var $end_time;

	function __construct($args){
		// if we've passed in an array, then this is a free/busy slot
		// and does not have a sugarbean associated to it
		global $timedate;

		if ( is_array ( $args )){
			$this->start_time = clone $args[0];
			$this->end_time = clone $args[1];
			$this->sugar_bean = null;
			$timedate->tzGMT($this->start_time);
			$timedate->tzGMT($this->end_time);
			return;
		}

	    // else do regular constructor..

	    	$sugar_bean = $args;
		$this->sugar_bean = $sugar_bean;


        if ($sugar_bean->object_name == 'Task'){
            if (!empty($this->sugar_bean->date_start))
            {
                $this->start_time = $timedate->fromUser($this->sugar_bean->date_start);
            }
            else {
                $this->start_time = $timedate->fromUser($this->sugar_bean->date_due);
            }
            if ( empty($this->start_time)){
                return;
            }
            $this->end_time = $timedate->fromUser($this->sugar_bean->date_due);
        }else{
            $this->start_time = $timedate->fromUser($this->sugar_bean->date_start);
            if ( empty($this->start_time)){
                return;
            }
			$hours = $this->sugar_bean->duration_hours;
			if(empty($hours)){
			    $hours = 0;
			}
			$mins = $this->sugar_bean->duration_minutes;
			if(empty($mins)){
			    $mins = 0;
			}
			$this->end_time = $this->start_time->get("+$hours hours $mins minutes");
		}
		// Convert it back to database time so we can properly manage it for getting the proper start and end dates
		$timedate->tzGMT($this->start_time);
		$timedate->tzGMT($this->end_time);
	}

	/**
	 * Get where clause for fetching entries from DB for within two dates timespan
	 * @param string $table_name t
	 * @param string $rel_table table for accept status, not used in Tasks
	 * @param SugarDateTime $start_ts_obj start date
	 * @param SugarDateTime $end_ts_obj end date
	 * @param string $field_name date field in table
	 * @param string $view view; not used for now, left for compatibility
	 * @return string
	 */
    function get_occurs_within_where_clause($table_name, $rel_table, $start_ts_obj, $end_ts_obj, $field_name = 'date_start', $view)
    {
        return self::getOccursWhereClauseGeneral($table_name, $rel_table, $start_ts_obj, $end_ts_obj, $field_name, array('self', 'within'));
	}

    /**
     * Get where clause for fetching entries from DB for until certain date timespan
     * @param string $table_name t
     * @param string $rel_table table for accept status, not used in Tasks
     * @param SugarDateTime $start_ts_obj start date
     * @param SugarDateTime $end_ts_obj end date
     * @param string $field_name date field in table
     * @param string $view view; not used for now, left for compatibility
     * @return string
     */
    public static function get_occurs_until_where_clause($table_name, $rel_table, $start_ts_obj, $end_ts_obj, $field_name = 'date_start', $view)
    {
        return self::getOccursWhereClauseGeneral($table_name, $rel_table, $start_ts_obj, $end_ts_obj, $field_name, array('self', 'until'));
    }

	function get_freebusy_activities($user_focus, $start_date_time, $end_date_time){
		$act_list = array();
		$vcal_focus = new vCal();
		$vcal_str = $vcal_focus->get_vcal_freebusy($user_focus);

		$lines = explode("\n",$vcal_str);
		$utc = new DateTimeZone("UTC");
	 	foreach ($lines as $line){
			if ( preg_match('/^FREEBUSY.*?:([^\/]+)\/([^\/]+)/i',$line,$matches)){
			  $dates_arr = array(SugarDateTime::createFromFormat(vCal::UTC_FORMAT, $matches[1], $utc),
				              SugarDateTime::createFromFormat(vCal::UTC_FORMAT, $matches[2], $utc));
			  $act_list[] = new CalendarActivity($dates_arr);
			}
		}
		return $act_list;
	}

	/**
	 * Get array of activities
	 * @param string $user_id
	 * @param boolean $show_tasks
	 * @param SugarDateTime $view_start_time start date
	 * @param SugarDateTime $view_end_time end date
	 * @param string $view view; not used for now, left for compatibility
	 * @param boolean $show_calls
	 * @param boolean $show_completed use to allow filtering completed events 
	 * @return array
	 */
 	function get_activities($user_id, $show_tasks, $view_start_time, $view_end_time, $view, $show_calls = true, $show_completed = true)
 	{
		global $current_user;
		$act_list = array();
		$seen_ids = array();
		
		$completedCalls = '';
		$completedMeetings = '';
		$completedTasks = '';
		if (!$show_completed)
		{
		    $completedCalls = " AND calls.status = 'Planned' ";
		    $completedMeetings = " AND meetings.status = 'Planned' ";
		    $completedTasks = " AND tasks.status != 'Completed' ";
		}
		
		// get all upcoming meetings, tasks due, and calls for a user
		if(ACLController::checkAccess('Meetings', 'list', $current_user->id == $user_id)) {
			$meeting = new Meeting();

			if($current_user->id  == $user_id) {
				$meeting->disable_row_level_security = true;
			}

            $where = self::get_occurs_until_where_clause($meeting->table_name, $meeting->rel_users_table, $view_start_time, $view_end_time, 'date_start', $view);
			$where .= $completedMeetings;
			$focus_meetings_list = build_related_list_by_user_id($meeting, $user_id, $where);
			foreach($focus_meetings_list as $meeting) {
				if(isset($seen_ids[$meeting->id])) {
					continue;
				}

				$seen_ids[$meeting->id] = 1;
				$act = new CalendarActivity($meeting);

				if(!empty($act)) {
					$act_list[] = $act;
				}
			}
		}

		if($show_calls){
			if(ACLController::checkAccess('Calls', 'list',$current_user->id  == $user_id)) {
				$call = new Call();

				if($current_user->id  == $user_id) {
					$call->disable_row_level_security = true;
				}

				$where = CalendarActivity::get_occurs_within_where_clause($call->table_name, $call->rel_users_table, $view_start_time, $view_end_time, 'date_start', $view);
				$where .= $completedCalls;
				$focus_calls_list = build_related_list_by_user_id($call, $user_id, $where);

				foreach($focus_calls_list as $call) {
					if(isset($seen_ids[$call->id])) {
						continue;
					}
					$seen_ids[$call->id] = 1;

					$act = new CalendarActivity($call);
					if(!empty($act)) {
						$act_list[] = $act;
					}
				}
			}
		}


		if($show_tasks){
			if(ACLController::checkAccess('Tasks', 'list',$current_user->id == $user_id)) {
				$task = new Task();

				$where = CalendarActivity::get_occurs_within_where_clause('tasks', '', $view_start_time, $view_end_time, 'date_due', $view);
				$where .= " AND tasks.assigned_user_id='$user_id' ";
				$where .= $completedTasks;

				$focus_tasks_list = $task->get_full_list("", $where, true);

				if(!isset($focus_tasks_list)) {
					$focus_tasks_list = array();
				}

				foreach($focus_tasks_list as $task) {
					$act = new CalendarActivity($task);
					if(!empty($act)) {
						$act_list[] = $act;
					}
				}
			}
		}
		return $act_list;
	}

    /**
     * Get where clause for fetching entries from DB (is used by certain get_occurs.. methods)
     * @param string $table_name t
     * @param string $rel_table table for accept status, not used in Tasks
     * @param SugarDateTime $start_ts_obj start date
     * @param SugarDateTime $end_ts_obj end date
     * @param string $field_name date field in table
     * @param array $callback callback function to generete specific SQL query-part
     * @return string
     */
    protected static function getOccursWhereClauseGeneral($table_name, $rel_table, $start_ts_obj, $end_ts_obj, $field_name, $callback)
    {
        $start = clone $start_ts_obj;
        $end = clone $end_ts_obj;

        $field_date = $table_name . '.' . $field_name;

        $start_day = $GLOBALS['db']->convert("'{$start->asDb()}'",'datetime');
        $end_day = $GLOBALS['db']->convert("'{$end->asDb()}'",'datetime');

        $where = '(';
        $where .= call_user_func($callback, $field_date, $start_day, $end_day);

        if ($rel_table != ''){
            $where .= " AND $rel_table.accept_status != 'decline'";
        }

        $where .= ")";
        return $where;
    }

    /**
     * Helper-method to generate within two dates sql clause
     * @param $field_date string table_name.field_name to compare
     * @param $start_day string period start date
     * @param $end_day string period end date
     * @return string
     */
    protected static function within($field_date, $start_day, $end_day)
    {
        return "$field_date >= $start_day AND $field_date < $end_day";
    }

    /**
     * Helper-method to generate until some date sql clause
     * @param $field_date string table_name.field_name to compare
     * @param $start_day string period start date
     * @param $end_day string period end date
     * @return string
     */
    protected static function until($field_date, $start_day, $end_day)
    {
        return "$field_date < $end_day";
    }
}

?>
