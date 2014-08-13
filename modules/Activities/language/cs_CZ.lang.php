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
  'ERR_DELETE_RECORD' => 'Pro vymazání záznamu musíte specifikovat číslo záznamu.',
  'LBL_ACCEPT' => 'Přijmout',
  'LBL_ACCEPT_THIS' => 'Přijmout?',
  'LBL_COLON' => ':',
  'LBL_CONTACT_NAME' => 'Kontaktní jméno:',
  'LBL_DATE' => 'Počáteční datum:',
  'LBL_DATE_TIME' => 'Počáteční datum & čas:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Otevřít aktivity',
  'LBL_DELETE_ACTIVITY' => 'Jste si jisti, že chcete smazat tuto aktivitu?',
  'LBL_DESCRIPTION' => 'Popis:',
  'LBL_DESCRIPTION_INFORMATION' => 'Popis',
  'LBL_DIRECTION' => 'Adresa',
  'LBL_DURATION' => 'Doba trvání:',
  'LBL_DURATION_MINUTES' => 'Doba trvání v minutách',
  'LBL_HISTORY' => 'Historie',
  'LBL_HOURS_MINS' => '(hodiny/minuty)',
  'LBL_INVITEE' => 'Pozvaní',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Zodpovědný uživatel',
  'LBL_LIST_CLOSE' => 'Zavřít',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE' => 'Datum',
  'LBL_LIST_DIRECTION' => 'Adresa',
  'LBL_LIST_DUE_DATE' => 'Do data',
  'LBL_LIST_FORM_TITLE' => 'Seznam aktivit',
  'LBL_LIST_LAST_MODIFIED' => 'Poslední úprava',
  'LBL_LIST_RELATED_TO' => 'Týka se',
  'LBL_LIST_STATUS' => 'Stav',
  'LBL_LIST_SUBJECT' => 'Předmět',
  'LBL_LIST_TIME' => 'Počáteční čas',
  'LBL_LOCATION' => 'Umístění:',
  'LBL_MEETING' => 'Schůzka:',
  'LBL_MODULE_NAME' => 'Aktivity',
  'LBL_MODULE_NAME_SINGULAR' => 'Aktivita',
  'LBL_MODULE_TITLE' => 'Aktivity: Úvodní stránka',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Přidat poznámku nebo přílohu',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Přidat poznámku nebo přílohu [Alt+T]',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Přidat úkol',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Přidat úkol [Alt+N]',
  'LBL_OPEN_ACTIVITIES' => 'Otevřít aktivity',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Naplánovat hovor',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Naplánovat hovor [Alt+C]',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Naplánovat schůzku',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Naplánovat schůzku [Alt+M]',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhledat aktivity',
  'LBL_STATUS' => 'Stav:',
  'LBL_SUBJECT' => 'Předmět:',
  'LBL_TIME' => 'Počáteční čas:',
  'LBL_TODAY' => 'Dnes',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivovat emailovou zprávu',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivovat emailovou zprávu [Alt+K]',
  'LBL_UPCOMING' => 'Moje aktuální schůzky',
  'LNK_CALL_LIST' => 'Hovory',
  'LNK_EMAIL_LIST' => 'E-maily',
  'LNK_IMPORT_CALLS' => 'Importovat hovory',
  'LNK_IMPORT_MEETINGS' => 'Importovat schůzky',
  'LNK_IMPORT_NOTES' => 'Importovat poznámky',
  'LNK_IMPORT_TASKS' => 'Importovat úkoly',
  'LNK_MEETING_LIST' => 'Schůzky',
  'LNK_NEW_APPOINTMENT' => 'Nová schůzka',
  'LNK_NEW_CALL' => 'Naplánovat hovor',
  'LNK_NEW_EMAIL' => 'Přidat nový e-mail',
  'LNK_NEW_MEETING' => 'Naplánovat schůzku',
  'LNK_NEW_NOTE' => 'Přidat poznámku nebo přílohu',
  'LNK_NEW_TASK' => 'Přidat úkol',
  'LNK_NOTE_LIST' => 'Poznámky',
  'LNK_TASK_LIST' => 'Úkoly',
  'LNK_VIEW_CALENDAR' => 'Kalendář',
  'NTC_NONE' => 'Žádný',
  'NTC_NONE_SCHEDULED' => 'Nenaplánováno.',
  'NTC_REMOVE_INVITEE' => 'Opravdu chcete odstranit pozvání na schůzku?',
  'appointment_filter_dom' => 
  array (
    'last next_month' => 'příští měsíc',
    'last this_month' => 'tento měsíc',
    'next Saturday' => 'příští týden',
    'this Saturday' => 'tento týden',
    'today' => 'dnes',
    'tomorrow' => 'zítra',
  ),
);

