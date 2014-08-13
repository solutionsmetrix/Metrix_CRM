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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Zdobądź klucz API oraz Poufny klucz aplikacji z Facebook&#169; poprzez utworzenie aplikacji dla Twojej instancji Sugar.<br/><br>Kroki tworzenia aplikacji dla Twojej instancji:<br/><br/><ol><li>Aby utworzyć aplikację przejdź do: <a href=&#39;http://www.facebook.com/developers/createapp.php&#39; target=&#39;_blank&#39;>http://www.facebook.com/developers/createapp.php</a>.</li><li>Zaloguj się na konto Facebook&#169;, pod którym chcesz utworzyć aplikację.</li><li>Na stronie tworzenia aplikacji wprowadź nazwę aplikacji. Nazwa ta będzie widoczna dla użytkowników podczas autoryzacji konta Facebook&#169; z poziomu SugarCRM.</li><li>Wybierz "Akceptuję" warunki Facebook&#169;.</li><li>Kliknij "Utwórz aplikację"</li><li>Wprowadź i wyślij słowa zabezpieczające, aby przejść zabezpieczenie.</li><li>Na stronie swojej aplikacji przejdź do "Strona internetowa" (menu po lewej stronie) i wprowadź lokalny URL swojej instancji Sugar w polu "URL strony". </li><li>Kliknij "Zapisz zmiany"</li><li>Przejdź do strony "Integracja z Facebook" (menu po lewej stronie) i znajdź klucz API oraz Poufny klucz aplikacji. Wprowadź ID aplikacji i Poufny klucz aplikacji poniżej.</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'Klucz API',
  'oauth_consumer_secret' => 'Poufny klucz aplikacji',
);

