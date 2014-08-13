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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Les "Clé API" et "Code secret API" sont les paramètres que vous obtenez depuis Facebook&#169; lorsque vous créez une nouvelle application. Pour commencer, allez sur : <a href=\'http://www.facebook.com/developers/createapp.php\'>http://www.facebook.com/developers/createapp.php</a>.<br><ol><li>Saisir le nom de votre appplication, il s&#39;agit du nom que l&#39;utilisateur verra apparaitre lorsqu&#39;il s&#39;authentifira depuis SugarCRM</li><li>Cliquer sur Site Web et saisir l&#39;URL de votre instance SugarCRM dans "Site URL"</li><li>Sauvegarder les modificatioins</li><li>Copier les "Clé API" et "Code secret API" dans les champs correspondants dans les paramètrers de connexions</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'Clé API',
  'oauth_consumer_secret' => 'Code secret API',
);

