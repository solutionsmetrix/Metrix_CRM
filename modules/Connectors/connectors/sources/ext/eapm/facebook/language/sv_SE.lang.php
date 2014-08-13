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

	

$connector_strings = array (
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Få en API Nyckel och App Secret från Facebook&#169; genom att skapa en applikation för din Sugar instans.<br/><br>Använd följande steg för att skapa en applikation för din instans:<br/><br/><ol><li>Gå till följande Facebook&#169; för att skapa applikationen: <a href=&#39;http://www.facebook.com/developers/createapp.php&#39; target=&#39;_blank&#39;>http://www.facebook.com/developers/createapp.php</a>.</li><li>Logga in på Facebook&#169; genom att använda kontot under vilket du vill skapa applikationen.</li><li>Under "Create Application" sidan, skriv in namnet för applikationen. Det är det här namnet användarna kommer att se när de autentiserar deras Facebook&#169; konton inifrån Sugar.</li><li>Välj "Agree" för att acceptera Facebooks&#169; villkor.</li><li>Klicka på "Create App"</li><li>Fyll i säkerhetsorden och klicka Submit för att genomföra säkerhetskontrollen.</li><li>På sidan för din applikation, gå till "Web site" området (länk i vänstra menyn) och skriv in den lokala URL för din Sugar instans under "Site URL".</li><li>Klicka på "Save Changes".</li><li>Gå till "Facebook Integration" sidan (länk i vänstra menyn) och hitta API Nyckeln och App Secret. Skriv in Application ID och Application Secret nedanför.</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'API Nyckel',
  'oauth_consumer_secret' => 'App Secret',
);

