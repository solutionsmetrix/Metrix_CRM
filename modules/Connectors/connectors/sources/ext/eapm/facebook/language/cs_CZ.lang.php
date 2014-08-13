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
  'LBL_LICENSING_INFO' => 'Získejte klíč a secret z Twitteru registrací vaší Sugar instance jako nové aplikace.<br /><br />Kroky k registraci instance:<br />1. Přejít na Facebook© stránky: http://www.facebook.com/developers/createapp.php.<br />2. Přihlásit se pomocí účtu Facebook, pod který chcete zaregistrovat aplikaci.<br />3. V rámci registračního formuláře Aplikace, zadejte název aplikace. Toto je název se uživatelům zobrazí při ověřování jejich Facebook účtů v Sugar.<br />4. Potvrdte Váš souhlas s podmínkami.<br />5. Klikněte Vytvořit aplikaci<br />6. Zadejte bezpečnostní slovo.<br />7. V rámci aplikace, jdete na oblast "Web Site" (menu nalevo) and vložte URL Vaší Sugar instance pro "Site URL."<br />8. Uložte<br />9. Na stránce "Integrace s Facebook" / "Facebook Integration" (menu nalevo) naleznete API Klíč a Secret. Zadejte klíč a secret níže.',
  'oauth_consumer_key' => 'API klíč',
  'oauth_consumer_secret' => 'App Tajné',
);

