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

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 *********************************************************************************/

/**
 * Stub class to allow Link class easily use SugarEmailAddress
 */
global $dictionary;
if(file_exists('custom/metadata/email_addressesMetaData.php')) {
  include('custom/metadata/email_addressesMetaData.php');
} else {
  include('metadata/email_addressesMetaData.php');
}

if(file_exists('custom/metadata/emails_beansMetaData.php')) {
  include('custom/metadata/emails_beansMetaData.php');
} else {
  include('metadata/emails_beansMetaData.php');
}