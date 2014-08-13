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
  'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Da li ste sigurni da želite da uklonite ovaj kontakt iz ovog projekta?',
  'ERR_DATE' => 'Navedeni datum je neradni dan.',
  'ERR_DURATION' => 'Trajanje mora biti ceo broj.',
  'ERR_FINISH_DATE' => 'Datum završetka ne može biti pre datuma početka.',
  'ERR_IS_EMPTY' => 'ne može biti prazno.',
  'ERR_PERCENT_COMPLETE' => '% završenog  mora imati vrednost između 0 i 100.',
  'ERR_PREDECESSORS_INPUT' => 'Vrednosti unete u polje Predhodnici moraju biti u obliku "1" ili "1,2"',
  'ERR_PREDECESSORS_OUT_OF_RANGE' => 'Vrednost koja je navedena u polju Prethodnikci je veća od broja redova.',
  'ERR_PREDECESSOR_CYCLE_FAIL' => 'Izabrani prethodnik izaziva zavisnu petlju.',
  'ERR_PREDECESSOR_IS_PARENT_OR_CHILD_FAIL' => 'Navedeni prethodnik je ili matični zadatak ili podzadatak.',
  'ERR_TASK_NAME_FOR_ROW' => 'Naziv zadatka za Red',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kompanije',
  'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Kompanije',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
  'LBL_ACTIVITIES_TITLE' => 'Aktivnosti',
  'LBL_ACTUAL_DURATION' => 'Stvarno trajanje',
  'LBL_ASSIGNED_USER_ID' => 'Dodeljeno:',
  'LBL_ASSIGNED_USER_NAME' => 'Dodeljeno:',
  'LBL_BIWEEK_BUTTON' => '2 Nedelje',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Defekti',
  'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
  'LBL_COLLAPSE_ALL_BUTTON' => 'Suzi sve',
  'LBL_CONTACTS_RESOURCE' => 'Resurs kontakt',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontakti',
  'LBL_COPY_BUTTON' => 'Kopiraj',
  'LBL_CREATED_BY' => 'Autor:',
  'LBL_CUT_BUTTON' => 'Iseci',
  'LBL_DAILY_REPORT' => 'Dnevni izveštaj',
  'LBL_DATE' => 'Datum',
  'LBL_DATE_END' => 'Datum završetka:',
  'LBL_DATE_ENTERED' => 'Datum kreiranja:',
  'LBL_DATE_MODIFIED' => 'Datum izmene:',
  'LBL_DATE_START' => 'Datum početka:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekti',
  'LBL_DELETED' => 'Obrisan:',
  'LBL_DELETE_BUTTON' => 'Obriši',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DURATION' => 'Trajanje',
  'LBL_DURATION_WIDGET' => 'trajanje',
  'LBL_EDITLAYOUT' => 'Izmeni raspored',
  'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Izmeni projektne zadatke',
  'LBL_EXPAND_ALL_BUTTON' => 'Proširi sve',
  'LBL_EXPORT_TO_MS_PROJECT' => 'Izvezi u MS Project',
  'LBL_EXPORT_TO_PDF' => 'Izvezi u  PDF',
  'LBL_FILTER_ALL_TASKS' => 'Svi zadaci',
  'LBL_FILTER_COMPLETED_TASKS' => 'Završeni zadaci',
  'LBL_FILTER_DATE_RANGE' => 'Zadaci u vremenskom opsegu',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'I pre',
  'LBL_FILTER_DATE_RANGE_START' => 'Zadaci koji počinju ili se završavaju posle',
  'LBL_FILTER_INCOMPLETE_TASKS' => 'Nezavršeni zadaci',
  'LBL_FILTER_MILESTONES' => 'Etape projekta',
  'LBL_FILTER_MY_OVERDUE_TASKS' => 'Moji prekoračeni zadaci',
  'LBL_FILTER_MY_TASKS' => 'Moji zadaci',
  'LBL_FILTER_MY_UPCOMING_TASKS' => 'Moji predstojeći zadaci (1 Nedelja)',
  'LBL_FILTER_RESOURCE' => 'Zadaci koji koriste resurse',
  'LBL_FILTER_VIEW' => 'Pregled',
  'LBL_FINISH' => 'Kraj',
  'LBL_FINISH_WIDGET' => 'date_finish',
  'LBL_GANTT_ONLY' => 'Gantogram',
  'LBL_GRID_GANTT' => 'Mreža/Gantogram',
  'LBL_GRID_ONLY' => 'Mreža',
  'LBL_HIDE_OPTIONAL_COLUMNS_BUTTON' => 'Sakrij opcione kolone',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
  'LBL_HISTORY_TITLE' => 'Istorija',
  'LBL_HOLIDAY' => 'Praznik',
  'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Praznici',
  'LBL_HOLIDAYS_TITLE' => 'Praznici',
  'LBL_ID' => 'Id broj:',
  'LBL_INDENT_BUTTON' => 'Uvuci',
  'LBL_INSERTROWS' => 'Unesi redove',
  'LBL_INSERT_BUTTON' => 'Unesi redove',
  'LBL_IS_TEMPLATE' => 'Je šablon',
  'LBL_LAST_WEEK' => 'Prethodni',
  'LBL_LIST_ASSIGNED_USER_ID' => 'Dodeljeno',
  'LBL_LIST_DAYS' => 'dana',
  'LBL_LIST_END_DATE' => 'Datum završetka',
  'LBL_LIST_FILTER_VIEW' => 'Pregled:',
  'LBL_LIST_FORM_TITLE' => 'Lista projekata',
  'LBL_LIST_NAME' => 'Naziv',
  'LBL_LIST_OPEN_CASES' => 'Aktuelni slučajevi',
  'LBL_LIST_OVERDUE_TASKS' => 'Prekoračeni zadaci',
  'LBL_LIST_RESOURCE' => 'Resurs:',
  'LBL_LIST_TEAM_ID' => 'Tim',
  'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Ukupan broj utrošenih radnih sati',
  'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Ukupan broj procenjenih radnih sati',
  'LBL_LIST_UPCOMING_TASKS' => 'Predstojeći zadaci (1 Nedelja)',
  'LBL_MARK_AS_MILESTONE_BUTTON' => 'Označi kao etapu projekta',
  'LBL_MODIFIED_USER_ID' => 'ID broj korisnika koji je izvršio izmene:',
  'LBL_MODULE_NAME' => 'Projekat',
  'LBL_MODULE_NAME_SINGULAR' => 'Projekat',
  'LBL_MODULE_TITLE' => 'Projekti: Početna strana',
  'LBL_MONTH_BUTTON' => 'Mesec',
  'LBL_MORE' => 'Više...',
  'LBL_MY_PROJECTS' => 'Moji projekti',
  'LBL_MY_PROJECTS_DASHBOARD' => 'Kontrolna tabla mojih projekata',
  'LBL_MY_PROJECT_TASKS' => 'Moji Projektni zadaci',
  'LBL_NAME' => 'Naziv:',
  'LBL_NEW_FORM_TITLE' => 'Novi Projekat',
  'LBL_NEXT_WEEK' => 'Sledeći',
  'LBL_OPPORTUNITIES' => 'Prodajne prilike',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Prodajne prilike',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Prodajne prilike',
  'LBL_OUTDENT_BUTTON' => 'Izvuci',
  'LBL_PASTE_BUTTON' => 'Nalepi',
  'LBL_PDF_PROJECT_NAME' => 'Naziv projekta:',
  'LBL_PERCENT_BUSY' => '% zauzeto',
  'LBL_PERCENT_COMPLETE' => '% Završeno',
  'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
  'LBL_PERSONAL_HOLIDAY' => '-- Lični praznik --',
  'LBL_POPUP_DATE_FINISH' => 'Datum završetka:',
  'LBL_POPUP_DATE_START' => 'Datum početka:',
  'LBL_POPUP_PERCENT_COMPLETE' => '% Završeno:',
  'LBL_POPUP_RESOURCE_NAME' => 'Ime resursa:',
  'LBL_PREDECESSORS' => 'Prethodnici',
  'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
  'LBL_PRIORITY' => 'Prioritet:',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Proizvodi',
  'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Resursi projekta',
  'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Projektni Zadatak',
  'LBL_PROJECT_HOLIDAYS' => 'Praznik',
  'LBL_PROJECT_HOLIDAYS_TITLE' => 'Projekat praznici',
  'LBL_PROJECT_INFORMATION' => 'Pregled projekta',
  'LBL_PROJECT_NAME' => 'Naziv projekta:',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
  'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektni zadaci',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektni zadaci',
  'LBL_PROJECT_TEMPLATE' => 'Projektni šablon',
  'LBL_PROJECT_TEMPLATES_LIST' => 'Lista projektnih šablona',
  'LBL_PROJECT_TEMPLATES_TITLE' => 'Projektni šabloni: Početna strana',
  'LBL_PROJECT_TEMPLATE_NAME' => 'Naziv šablona:',
  'LBL_QUICK_NEW_PROJECT' => 'Novi projekat',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Ponude',
  'LBL_QUOTE_SUBPANEL_TITLE' => 'Ponude',
  'LBL_RECALCULATE_DATES_BUTTON' => 'Preračunajte datume',
  'LBL_REPORT' => 'Izveštaj',
  'LBL_RESOURCES_SUBPANEL_TITLE' => 'Resursi',
  'LBL_RESOURCE_NAME' => 'Naziv',
  'LBL_RESOURCE_NAMES' => 'Resurs',
  'LBL_RESOURCE_NAMES_WIDGET' => 'resurs',
  'LBL_RESOURCE_REPORT' => 'Izveštaj resursa',
  'LBL_RESOURCE_TYPE' => 'Tip',
  'LBL_SAVE_AS_NEW_PROJECT_BUTTON' => 'Sačuvaj kao novi projekat',
  'LBL_SAVE_AS_NEW_TEMPLATE_BUTTON' => 'Sačuvaj kao novi šablon',
  'LBL_SAVE_AS_PROJECT' => 'Sačuvaj kao projekat',
  'LBL_SAVE_AS_TEMPLATE' => 'Sačuvaj kao šablon',
  'LBL_SAVE_BUTTON' => 'Sačuvaj',
  'LBL_SAVE_TEMPLATE_BUTTON_LABEL' => 'Sačuvaj kao šablon',
  'LBL_SAVE_TEMPLATE_BUTTON_TITLE' => 'Sačuvaj kao šablon',
  'LBL_SEARCH_FORM_TITLE' => 'Pretraga projekata',
  'LBL_SHOW_OPTIONAL_COLUMNS_BUTTON' => 'Prikaži opcione kolone',
  'LBL_START' => 'Početak',
  'LBL_START_WIDGET' => 'date_start',
  'LBL_STATUS' => 'Status:',
  'LBL_TASK_ID' => 'ID broj',
  'LBL_TASK_ID_WIDGET' => 'ID broj',
  'LBL_TASK_NAME' => 'Naziv zadatka',
  'LBL_TASK_NAME_WIDGET' => 'opis',
  'LBL_TEAM_ID' => 'Tim:',
  'LBL_TEMPLATE_NAME' => 'Naziv šablona:',
  'LBL_TOTAL_ACTUAL_EFFORT' => 'Ukupan broj utrošenih radnih sati:',
  'LBL_TOTAL_ESTIMATED_EFFORT' => 'Ukupan broj procenjenih radnih sati:',
  'LBL_UNMARK_AS_MILESTONE_BUTTON' => 'Skini oznaku etape projekta',
  'LBL_USER_RESOURCE' => 'Resurs korisnik',
  'LBL_VIEW_GANTT_TITLE' => 'Pogledaj Gantogram',
  'LBL_VIEW_TASK_DETAILS_BUTTON' => 'Pregled detalja o zadatku',
  'LBL_WEEK_BUTTON' => 'Nedelja',
  'LNK_NEW_PROJECT' => 'Kreiraj projekat',
  'LNK_NEW_PROJECT_TASK' => 'Kreiraj Projektni zadatak',
  'LNK_NEW_PROJECT_TEMPLATES' => 'Kreiraj projektni šablon',
  'LNK_PROJECT_DASHBOARD' => 'Prikaži kontrolnu tablu mojih projekata',
  'LNK_PROJECT_LIST' => 'Pregled liste projekata',
  'LNK_PROJECT_RESOURCE_REPORT' => 'Izveštaj resursa',
  'LNK_PROJECT_TASKS_DASHBOARD' => 'Kontrolna tabla mojih projektnih zadataka',
  'LNK_PROJECT_TASK_LIST' => 'Pregled projektnih zadataka',
  'LNK_PROJECT_TEMPLATES_LIST' => 'Prikaži projektne šablone',
  'NTC_ASSIGN_RIGHT_TEAM' => 'Proverite da li su svi resursi projekta članovi tima.',
  'NTC_DELETE_TASK_AND_SUBTASKS' => 'Da li ste sigurni da želite da obrišete ovaj zadatak i sve njegove podzadatke?',
  'NTC_NO_ACTIVE_PROJECTS' => 'Nemate aktivne projekte ili projektne zadatke.',
);

