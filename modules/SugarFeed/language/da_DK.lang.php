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
  'CLOSED_CASE' => '<b>LUKKET</b> en sag',
  'CONVERTED_LEAD' => '<b>KONVERTERET</b> et kundeemne',
  'CREATED_CASE' => 'oprettet en <b>NY</b> sag',
  'CREATED_CONTACT' => 'oprettet en <b>NY</b> kontakt',
  'CREATED_LEAD' => 'oprettet et <b>NYT</b> kundeemne',
  'CREATED_OPPORTUNITY' => 'oprettet en <b>NY</b> salgsmulighed',
  'FOR' => 'for',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
  'LBL_ADMIN_SETTINGS' => 'Sugar Feed-indstillinger',
  'LBL_ADVANCED_SEARCH' => 'Avanceret søgning',
  'LBL_ALL' => 'Alle',
  'LBL_ASSIGNED_TO_ID' => 'Tildelt bruger-id',
  'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
  'LBL_AUTHENTICATE' => 'Godkend',
  'LBL_AUTHENTICATION_PENDING' => 'Ikke alle af de eksterne konti, du har valgt, er blevet godkendt. Klik på &#39;Annuller&#39; for at vende tilbage til vinduet for at godkende de eksterne konti eller klik på &#39;Ok&#39; for at fortsætte uden godkendelse.',
  'LBL_BASICSEARCH' => 'Simpel søgning',
  'LBL_CATEGORIES' => 'Moduler',
  'LBL_CONFIRM_DELETE_RECORDS' => 'Er du sikker på, at du vil slette alle Sugar Feed-posterne?',
  'LBL_CREATED' => 'Oprettet af',
  'LBL_CREATED_ID' => 'Oprettet af id',
  'LBL_CREATED_USER' => 'Oprettet af bruger',
  'LBL_DASHLET_DISABLED' => 'Advarsel: Sugar Feed-systemet er deaktiveret. Der anbringes ingen nye feedposter, før det er aktiveret',
  'LBL_DATE_ENTERED' => 'Oprettet den',
  'LBL_DATE_MODIFIED' => 'Ændret den',
  'LBL_DELETED' => 'Slettet',
  'LBL_DESCRIPTION' => 'Beskrivelse',
  'LBL_DONE' => 'Udført',
  'LBL_ENABLE_EXTERNAL_CONNECTORS' => '<i>Bemærk: For at give brugerne mulighed for at se Facebook og Twitter feeds, skal du gå til connectors indstillinger for at konfigurere Facebook- og Twitter connectors.</i>',
  'LBL_ENABLE_FEED' => 'Aktivér Sugar Feed',
  'LBL_ENABLE_MODULE_LIST' => 'Aktivér feeds for',
  'LBL_ENABLE_USER_FEED' => 'Aktivér brugerfeed',
  'LBL_EXTERNAL_PREFIX' => 'Ekstern:',
  'LBL_EXTERNAL_WARNING' => 'Poster mærket "eksterne" kræver en ekstern konto.',
  'LBL_FLUSH_RECORDS' => 'Slet feedposter',
  'LBL_HIDE_OPTIONS' => 'Skjul valgmuligheder',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Vis historik',
  'LBL_HOMEPAGE_TITLE' => 'Min Sugar Feed',
  'LBL_ID' => 'Id',
  'LBL_IS' => 'er',
  'LBL_LINK_TYPE_Image' => 'Billede',
  'LBL_LINK_TYPE_Link' => 'Link',
  'LBL_LINK_TYPE_YouTube' => 'YouTube',
  'LBL_LIST_FORM_TITLE' => 'Sugar Feed-liste',
  'LBL_MODIFIED' => 'Ændret af',
  'LBL_MODIFIED_ID' => 'Ændret af id',
  'LBL_MODIFIED_NAME' => 'Ændret af navn',
  'LBL_MODIFIED_USER' => 'Ændret af bruger',
  'LBL_MODULE_NAME' => 'Sugar Feed',
  'LBL_MODULE_TITLE' => 'Sugar Feed',
  'LBL_MY_FAVORITES_ONLY' => 'Kun mine favoritter',
  'LBL_NAME' => 'Navn',
  'LBL_NEW_FORM_TITLE' => 'Ny Sugar Feed',
  'LBL_POST' => 'Send',
  'LBL_POST_TITLE' => 'Send status opdatering for',
  'LBL_RECORDS_DELETED' => 'Alle tidligere Sugar Feed-poster er fjernet. Hvis Sugar Feed-systemet aktiveres, genereres der automatisk nye poster.',
  'LBL_ROWS' => 'Rækker',
  'LBL_SAVED' => 'Gemt',
  'LBL_SAVING' => 'Gemmer...',
  'LBL_SEARCH_FORM_TITLE' => 'Søg efter Sugar Feed',
  'LBL_SELECT' => 'Vælg',
  'LBL_SHOW_MORE_OPTIONS' => 'Vis flere valgmuligheder',
  'LBL_SUGAR_FEED_SUBPANEL_TITLE' => 'Sugar Feed',
  'LBL_TEAM' => 'Team',
  'LBL_TEAM_ID' => 'Team-id',
  'LBL_TEAM_VISIBILITY_TITLE' => 'team som kan se denne post',
  'LBL_TIME_AGO' => 'siden',
  'LBL_TIME_DAYS' => 'Dage',
  'LBL_TIME_HOUR' => 'Timer',
  'LBL_TIME_HOURS' => 'Timer',
  'LBL_TIME_LAST_WEEK' => 'Sidste uge',
  'LBL_TIME_MINUTE' => 'Minut',
  'LBL_TIME_MINUTES' => 'Minutter',
  'LBL_TIME_SECOND' => 'Sekund',
  'LBL_TIME_SECONDS' => 'Sekunder',
  'LBL_TIME_WEEKS' => 'Uger',
  'LBL_TIME_YESTERDAY' => 'I går',
  'LBL_TITLE' => 'Titel',
  'LBL_TO' => 'Send til',
  'LBL_URL_LINK_TITLE' => 'Brug dette URL link',
  'LBL_USER_FEED' => 'Brugerfeed',
  'LBL_VIEW' => 'Vis',
  'LNK_LIST' => 'Sugar Feed',
  'LNK_NEW_RECORD' => 'Opret Sugar Feed',
  'WITH' => 'med',
  'WON_OPPORTUNITY' => 'har <b>VUNDET</b> en salgsmulighed',
);

