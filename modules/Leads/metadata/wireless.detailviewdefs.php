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

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$viewdefs['Leads']['DetailView'] = array(
	'templateMeta' => array(
                            'maxColumns' => '1', 
                            'widths' => array(
								array('label' => '10', 'field' => '30'), 
                            ),                                  
                           ),
    'panels' => array(
    	array (
	    	array (
		        'name' => 'first_name',
		        'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
		        'displayParams'=>array('wireless_edit_only'=>true,),
	      	),
	    ),
	    array (
	      	array('name'=>'last_name',
	            'displayParams'=>array('wireless_edit_only'=>true,),
	      	),  
	    ),
		array('title'),
	    array('account_name'),			          
		array('phone_work'),
		array('phone_mobile'),
		array('email1'),
		array('primary_address_street'),
		array('primary_address_city'),
		array('primary_address_state'),
		array('primary_address_postalcode'),
		array('primary_address_country'),			    			    
	    array('status'),
		array('assigned_user_name'),
		array('team_name'),
	),
);
?>