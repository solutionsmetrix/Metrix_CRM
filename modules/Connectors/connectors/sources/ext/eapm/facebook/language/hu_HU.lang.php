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
  'LBL_LICENSING_INFO' => 'Egy Facebook alkalmazás létrehozásához kérjük adja meg az API Key és App Secret karaktersorozatokat. <br /><br />Az alkalmazás létrehozásának lépései:<br /><br />1.  Menjen a következő Facebook oldalra: http://www.facebook.com/developers/createapp.php<br />2.  Jelentkezzen be saját felhasználó nevével és jelszavával.<br />3.  Az "Alkalmazás létrehozása" oldalon belül adjon meg egy nevet az alkalmazáshoz. Ezzel a névvel lesz azonosítva Facebook alkalmazása a Sugar alkalmazáson belül.<br />4.  Fogadja el a Facebook Felhasználási feltételeket az "Egyetért" gombbal.<br />5.  Kattintson az "Alkalmazás létrehozása" gombra.<br />6.  Adja meg a biztonsági szavakat a továbblépéshez.<br />7.  Az alkalmazás oldalon belül menjen a "Weboldal" területre (bal oldali menü) és adja meg azt az URL címet, amelyet szeretne megjeleníteni az alkalmazásban (Site URL).<br />8.  Mentse el az alkalmazást.<br />9.  Menjen a "Facebook integráció" oldalra (bal oldali menü), ahol megtalálja az API Key és App Secret karaktersorozatokat. Alább adja meg ezeket az adatokat.',
  'oauth_consumer_key' => 'API kulcs',
  'oauth_consumer_secret' => 'App titok',
);

