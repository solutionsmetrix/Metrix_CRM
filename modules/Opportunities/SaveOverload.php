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


function perform_save(&$focus){
    // Bug49495: amount may be a calculated field
    $focus->updateCalculatedFields();
	//US DOLLAR
	if(isset($focus->amount) && !number_empty($focus->amount)){
		$currency = new Currency();
		$currency->retrieve($focus->currency_id);
		$focus->amount_usdollar = $currency->convertToDollar($focus->amount);
	}	
}
?>