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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Nabavite API ključ i App tajnu sa Facebook&#169; kreiranjem aplikacije za Vašu Sugar instancu.<br/><br>Koraci da kreirate aplikaciju za Vašu Sugar instancu:<br/><br/><ol><li>Idite na sledeći Facebook&#169; da bi ste kreirali aplikaciju: <a href="http://www.facebook.com/developers/createapp.php" target="_blank">http://www.facebook.com/developers/createapp.php</a>.</li><li>Prijavite se na Facebook&#169; koristeći nalog pod kojim želite da kreirate aplikaciju.</li><li>U okviru "Create Application" strane, unesite naziv aplikacije. Ovaj je naziv koji će korisnici videti kada se autentikuju sa svojim Facebook&#169; nalozima u okviru Sugar-a.</li><li>Odaberite "Agree" da bi ste se složili sa Facebook&#169; Uslovima.</li><li>Kliknite na "Create App"</li><li>Unesite i potvrdite tajne reči da bi ste prošli Sigurnosne Provere.</li><li>U okviru strane za Vašu aplikaciju, idite na "Web Site" oblast (link na levoj strani menija) i unesite URL Vaše Sugar instance kao "Site URL."</li><li>Kliknite na "Save Changes"</li><li>idite na "Facebook Integration" stranu (link na levoj strani menija) i nađite API ključ i App tajnu. Unesite ID aplikacije i tajnu aplikacije ispod.</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'API ključ',
  'oauth_consumer_secret' => 'App Tajna',
);

