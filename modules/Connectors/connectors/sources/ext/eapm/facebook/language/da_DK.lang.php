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
  'oauth_consumer_secret' => 'App Secret',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Anskaf en API nøgle and App Secret fra Facebook&#169; ved at oprette en applikation til din Sugar løsning.<br/><br>Punkter for at oprette en applikation <br />for din løsning:<br/><br/><ol><li>Gå til følgende Facebook&#169; side for at oprette en applikation: <a href=\'http://www.facebook.com/developers/createapp.php\' target=\'_blank\'>http://www.facebook.com/developers/createapp.php</a>.</li><li><br />Log på Facebook&#169; ved at bruge den konto, under hvilken du ønsker at oprette<br />            applikationen.</li><li>På "Create Application" siden, skriv navet på applikationen. Dette er navnet brugere vil se når de authorisere deres Facebook&#169; konto inden fra Sugar.</li><li>Vælg "Agree" for at acceptere betingelserne for <br />Facebook©.</li><li>Klik "Create App"</li><li>Indtast og Send sikkerheds ordet for at passere sikkerheds tjekket.</li><li>På siden for din applikation, gå til "Web Site" området (link i venstre menu) og skriv den lokale URL for din Sugar løsning i "Site URL."</li><li>Klik "Save Changes"</li><li>Gå til "Facebook Integration" siden (link i venstre menu) og find API Key and App Secret. Indtast Application ID og Application Secret nedenfor.</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'API nøgle',
);

