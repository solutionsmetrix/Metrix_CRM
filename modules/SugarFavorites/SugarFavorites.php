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



class SugarFavorites extends Basic 
{	
	public $new_schema = true;
	public $module_dir = 'SugarFavorites';
	public $object_name = 'SugarFavorites';
	public $table_name = 'sugarfavorites';
	public $importable = false;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $module;
    public $record_id;
    public $tag;
    public $record_name;
    public $disable_row_level_security = true;
	
	public static function generateStar(
	    $on, 
	    $module, 
	    $record
	    )
	{
	global $app_strings;
		if ($on)
			return '<div class="star"><div class="on"   title="'.$app_strings['LBL_REMOVE_FROM_FAVORITES'].'" onclick="DCMenu.removeFromFavorites(this, \''.$module. '\',  \''.$record. '\');">&nbsp;</div></div>';
		else
			return '<div class="star"><div class="off"  title="'.$app_strings['LBL_ADD_TO_FAVORITES'].'" onclick="DCMenu.addToFavorites(this, \''.$module. '\',  \''.$record. '\');">&nbsp;</div></div>';
	}
	
	public static function generateGUID(
	    $module, 
	    $record,
	    $user_id = ''
	    )
	{
	    if(empty($user_id))
	        $user_id = $GLOBALS['current_user']->id;
	    
		return md5($module . $record . $user_id);
	}
	
	public static function isUserFavorite(
	    $module, 
	    $record,
	    $user_id = ''
	    )
	{
		$id = SugarFavorites::generateGUID($module, $record, $user_id);

		$focus = new SugarFavorites;
		$focus->retrieve($id);
		
		return !empty($focus->id);
	}

	public static function getUserFavoritesByModule($module = '', User $user = null, $orderBy = "", $limit = -1)
	{
	    if ( empty($user) )
	        $where = " sugarfavorites.assigned_user_id = '{$GLOBALS['current_user']->id}' ";
	    else
	        $where = " sugarfavorites.assigned_user_id = '{$user->id}' ";
	    
        if ( !empty($module) )
            if ( is_array($module) )
                $where .= " AND sugarfavorites.module IN ('" . implode("','",$module) . "')";
            else
                $where .= " AND sugarfavorites.module = '$module' ";
        
        $focus = new SugarFavorites;
		$response = $focus->get_list($orderBy,$where,0,$limit);
	    
	    return $response['list'];
	}

    public static function markRecordDeletedInFavorites($record_id, $date_modified, $modified_user_id = "")
    {
        $focus = new SugarFavorites();
        $focus->mark_records_deleted_in_favorites($record_id, $date_modified, $modified_user_id);
    }

    public function mark_records_deleted_in_favorites($record_id, $date_modified, $modified_user_id = "")
    {
        if (isset($modified_user))
            $query = "UPDATE $this->table_name set deleted=1 , date_modified = '$date_modified', modified_user_id = '$modified_user_id' where record_id='$record_id'";
        else
            $query = "UPDATE $this->table_name set deleted=1 , date_modified = '$date_modified' where record_id='$record_id'";

        $this->db->query($query, true, "Error marking favorites deleted: ");
    }

	public function fill_in_additional_list_fields()
	{
	    parent::fill_in_additional_list_fields();
	    
	    $focus = loadBean($this->module);
	    if ( $focus instanceOf SugarBean ) {
	        $focus->retrieve($this->record_id);
	        if ( !empty($focus->id) )
	            $this->record_name = $focus->name;
	    }
	}
}