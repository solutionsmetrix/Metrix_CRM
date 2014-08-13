<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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


$connector_strings = array(
    'LBL_LICENSING_INFO' =>
'<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">
Obtain API Key from Citrix Online GoToMeeting by registering a new application.<br>
&nbsp;<br>
Steps to register your instance:<br>
&nbsp;<br>
<ol>
<li>Log in to your Citrix Online developer account: https://developer.citrixonline.com/</li>
<li>Click on Apply for Developer Key</li>
<li>In Product API select GoToMeeting, and enter your instance URL in Application URL</li>
<li>You will see a column called API Key under Your Applications</li>
<li>Copy it below.</li>
</ol>
</td></tr></table>',
    'oauth_consumer_key' => 'API Key',
);
