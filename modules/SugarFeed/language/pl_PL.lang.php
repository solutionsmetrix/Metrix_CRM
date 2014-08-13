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

	

$mod_strings = array (
  'CLOSED_CASE' => '<b>zamknął(a)</b> zgłoszenie',
  'CONVERTED_LEAD' => '<b>przekształcił(a)</b> namiar',
  'CREATED_CASE' => 'utworzył(a)  <b>nowe</b> zgłoszenie',
  'CREATED_CONTACT' => 'utworzył(a)  <b>nowy</b> kontakt',
  'CREATED_LEAD' => 'utworzył(a)  <b>nowy</b> namiar',
  'CREATED_OPPORTUNITY' => 'utworzył(a)  <b>nową</b> szansę',
  'FOR' => 'za',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktywności',
  'LBL_ADMIN_SETTINGS' => 'Ustawienia Aktywności',
  'LBL_ADVANCED_SEARCH' => 'Wyszukiwanie zaawansowane',
  'LBL_ALL' => 'Wszystko',
  'LBL_ASSIGNED_TO_ID' => 'Przydzielono do',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielono do',
  'LBL_AUTHENTICATE' => 'Połącz z',
  'LBL_AUTHENTICATION_PENDING' => 'Nie wszystkie z wybranych przez Ciebie kont zostały autoryzowane. Kliknij &#39;Anuluj&#39;, aby powrócić do okna Opcje i autoryzować zewnętrzne konta lub kliknij &#39;OK&#39;, aby kontynuować bez autoryzacji.',
  'LBL_BASICSEARCH' => 'Wyszukiwanie podstawowe',
  'LBL_CATEGORIES' => 'Moduły',
  'LBL_CONFIRM_DELETE_RECORDS' => 'Czy na pewno chcesz usunąć wszystkie wpisy?',
  'LBL_CREATED' => 'Utworzone przez',
  'LBL_CREATED_ID' => 'Utworzone przez',
  'LBL_CREATED_USER' => 'Utworzone przez',
  'LBL_DASHLET_DISABLED' => 'Uwaga: System aktywności jest wyłączony, nie będą się wyświetlać żadne nowe wpisy, dopóki system nie zostanie włączony',
  'LBL_DATE_ENTERED' => 'Data utworzenia',
  'LBL_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_DELETED' => 'Usunięto',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_DONE' => 'Zrobione',
  'LBL_ENABLE_EXTERNAL_CONNECTORS' => '<i>Uwaga: Aby umożliwić użytkownikom dostęp do informacji z Facebook i Twitter, przejdź do ustawień Konektora i skonfiguruj konektory Facebook i Twitter.</i>',
  'LBL_ENABLE_FEED' => 'Włącz dashlet Aktywności',
  'LBL_ENABLE_MODULE_LIST' => 'Aktywuj powiadomienia dla',
  'LBL_ENABLE_USER_FEED' => 'Aktywuj powiadomienia użytkownika',
  'LBL_EXTERNAL_PREFIX' => 'Zewnętrzne:',
  'LBL_EXTERNAL_WARNING' => 'Elementy oznaczone jako "zewnętrzne" wymagają <a href="?module=EAPM">zewnętrznego konta</a>.',
  'LBL_FLUSH_RECORDS' => 'Usuń wpisy',
  'LBL_HIDE_OPTIONS' => 'Ukryj opcje',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Zobacz historię',
  'LBL_HOMEPAGE_TITLE' => 'Aktywności',
  'LBL_ID' => 'ID',
  'LBL_IS' => 'jest',
  'LBL_LINK_TYPE_Image' => 'Obraz',
  'LBL_LINK_TYPE_Link' => 'Link',
  'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',
  'LBL_LIST_FORM_TITLE' => 'Lista aktywności',
  'LBL_MODIFIED' => 'Zmodyfikowane przez',
  'LBL_MODIFIED_ID' => 'Zmodyfikowane przez',
  'LBL_MODIFIED_NAME' => 'Zmodyfikowane przez',
  'LBL_MODIFIED_USER' => 'Zmodyfikowane przez',
  'LBL_MODULE_NAME' => 'Aktywności',
  'LBL_MODULE_NAME_SINGULAR' => 'Aktywność',
  'LBL_MODULE_TITLE' => 'Aktywności',
  'LBL_MY_FAVORITES_ONLY' => 'Tylko Moje ulubione',
  'LBL_NAME' => 'Nazwa',
  'LBL_NEW_FORM_TITLE' => 'Nowe powiadomienie',
  'LBL_POST' => 'Prześlij',
  'LBL_POST_TITLE' => 'Zamieść aktualizacje statusu dla',
  'LBL_RECORDS_DELETED' => 'Jeśli system aktywności zostanie włączony, nowe wpisy zostaną wygenerowane automatycznie, a wszystkie wcześniejsze zostaną usunięte.',
  'LBL_ROWS' => 'Wiersze',
  'LBL_SAVED' => 'Zapisano',
  'LBL_SAVING' => 'Zapisywanie...',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie powiadomień',
  'LBL_SELECT' => 'Wybierz',
  'LBL_SHOW_MORE_OPTIONS' => 'Pokaż więcejo opcji',
  'LBL_SUGAR_FEED_SUBPANEL_TITLE' => 'Powiadomienie',
  'LBL_TEAM' => 'Zespół',
  'LBL_TEAM_ID' => 'ID zespołu',
  'LBL_TEAM_VISIBILITY_TITLE' => 'zespołu, który może widzieć ten wpis',
  'LBL_TIME_AGO' => 'temu',
  'LBL_TIME_DAYS' => 'Dni',
  'LBL_TIME_HOUR' => 'Godzina',
  'LBL_TIME_HOURS' => 'Godzin',
  'LBL_TIME_LAST_WEEK' => 'Miniony tydzień',
  'LBL_TIME_MINUTE' => 'Minuta',
  'LBL_TIME_MINUTES' => 'Minut',
  'LBL_TIME_SECOND' => 'Sekunda',
  'LBL_TIME_SECONDS' => 'Sekund',
  'LBL_TIME_WEEKS' => 'Tygodni',
  'LBL_TIME_YESTERDAY' => 'Wczoraj',
  'LBL_TITLE' => 'Tytuł',
  'LBL_TO' => 'Widoczne dla zespołu',
  'LBL_URL_LINK_TITLE' => 'Łącze URL do użycia',
  'LBL_USER_FEED' => 'Powiadomienia użytkownika',
  'LBL_VIEW' => 'Pokaż',
  'LNK_LIST' => 'Powiadomienia',
  'LNK_NEW_RECORD' => 'Utwórz powiadomienie',
  'WITH' => 'z',
  'WON_OPPORTUNITY' => '<b>zakończył(a) SUKCESEM</b> szansę',
);

