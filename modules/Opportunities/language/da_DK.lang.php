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
  'ERR_DELETE_RECORD' => 'Der skal angives et postnummer for at slette salgsmuligheden.',
  'LABEL_PANEL_ASSIGNMENT' => 'Tildeling',
  'LBL_ACCOUNT_ID' => 'Virksomheds-id',
  'LBL_ACCOUNT_NAME' => 'Virksomhedsnavn:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
  'LBL_AMOUNT' => 'Beløb:',
  'LBL_AMOUNT_USDOLLAR' => 'Beløb i USD:',
  'LBL_ASSIGNED_TO_ID' => 'Tildelt til id',
  'LBL_ASSIGNED_TO_NAME' => 'Tildelt til:',
  'LBL_CAMPAIGN' => 'Kampagne:',
  'LBL_CAMPAIGN_LINK' => 'Kampagne link',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampagner',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lukkede vundne salgsmuligheder',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Relaterede kontakters e-mail-adresser',
  'LBL_CONTRACTS' => 'Kontrakter',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakter',
  'LBL_CREATED_ID' => 'Oprettet af id',
  'LBL_CREATED_USER' => 'Oprettet bruger',
  'LBL_CURRENCIES' => 'Valutaer',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_CURRENCY_ID' => 'Valuta-id',
  'LBL_CURRENCY_NAME' => 'Valutanavn',
  'LBL_CURRENCY_SYMBOL' => 'Valutasymbol',
  'LBL_DATE_CLOSED' => 'Forventet lukkedato:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Salgsmuligheder',
  'LBL_DESCRIPTION' => 'Beskrivelse:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
  'LBL_DUPLICATE' => 'Mulig identisk salgsmulighed',
  'LBL_EDITLAYOUT' => 'Rediger layout',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt bruger-id',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tildelt brugernavn',
  'LBL_EXPORT_CAMPAIGN_ID' => 'Kampagne-id',
  'LBL_EXPORT_CREATED_BY' => 'Oprettet af id',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Ændret af id',
  'LBL_EXPORT_NAME' => 'Navn',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
  'LBL_INVITEE' => 'Kontakter',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Kundeemner',
  'LBL_LEAD_SOURCE' => 'Kilde til kundeemne:',
  'LBL_LIST_ACCOUNT_NAME' => 'Virksomhedsnavn',
  'LBL_LIST_AMOUNT' => 'Beløb',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Beløb',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
  'LBL_LIST_DATE_CLOSED' => 'Luk',
  'LBL_LIST_FORM_TITLE' => 'Salgsmulighedsliste',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Navn',
  'LBL_LIST_SALES_STAGE' => 'Salgsfase',
  'LBL_MODIFIED_ID' => 'Ændret af id',
  'LBL_MODIFIED_NAME' => 'Ændret af brugernavn',
  'LBL_MODIFIED_USER' => 'Ændret bruger',
  'LBL_MODULE_NAME' => 'Salgsmuligheder',
  'LBL_MODULE_TITLE' => 'Salgsmuligheder: Startside',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mine lukkede salgsmuligheder',
  'LBL_NAME' => 'Salgsmulighedsnavn',
  'LBL_NEW_FORM_TITLE' => 'Opret salgsmulighed',
  'LBL_NEXT_STEP' => 'Næste trin:',
  'LBL_OPPORTUNITY' => 'Salgsmulighed:',
  'LBL_OPPORTUNITY_NAME' => 'Salgsmulighedsnavn:',
  'LBL_OPPORTUNITY_TYPE' => 'Salgsmulighedstype',
  'LBL_PROBABILITY' => 'Sandsynlighed "%":',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekter',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekter',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Tilbud',
  'LBL_RAW_AMOUNT' => 'Bruttobeløb',
  'LBL_SALES_STAGE' => 'Salgsfase:',
  'LBL_SEARCH_FORM_TITLE' => 'Søg efter salgsmulighed',
  'LBL_TEAM_ID' => 'Team-id',
  'LBL_TOP_OPPORTUNITIES' => 'Mine bedste åbne salgsmuligheder',
  'LBL_TOTAL_OPPORTUNITIES' => 'Samlede salgsmuligheder',
  'LBL_TYPE' => 'Type:',
  'LBL_VIEW_FORM_TITLE' => 'Vis salgsmulighed',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importér salgsmuligheder',
  'LNK_NEW_OPPORTUNITY' => 'Opret salgsmulighed',
  'LNK_OPPORTUNITY_LIST' => 'Salgsmuligheder',
  'LNK_OPPORTUNITY_REPORTS' => 'Salgsmulighedsrapporter',
  'MSG_DUPLICATE' => 'Den salgsmulighedspost, du er ved at oprette, kan være en dublet af en salgsmulighedspost, der allerede findes. Salgsmulighedsposter, der indeholder lignende navne, er angivet nedenfor.<br>Klik på Gem for at fortsætte med at oprette denne nye salgsmulighed, eller klik på Annuller for at vende tilbage til modulet uden at oprette salgsmuligheden.',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Er du sikker på, at du vil fjerne denne kontakt fra salgsmuligheden?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på, at du vil fjerne denne salgsmulighed fra projektet?',
  'UPDATE' => 'Salgsmulighed - valutaopdatering',
  'UPDATE_BUGFOUND_COUNT' => 'Der blev fundet fejl:',
  'UPDATE_BUG_COUNT' => 'Der blev fundet fejl og gjort forsøg på at løse dem:',
  'UPDATE_COUNT' => 'Poster opdateret:',
  'UPDATE_CREATE_CURRENCY' => 'Opretter ny valuta:',
  'UPDATE_DOLLARAMOUNTS' => 'Opdater USD-beløb',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Opdater USD-beløb for salgsmuligheder baseret på de aktuelle valutakurser. Denne værdi bruges til at beregne diagrammer og vise valutabeløb.',
  'UPDATE_DONE' => 'Udført',
  'UPDATE_FAIL' => 'Kunne ikke opdatere -',
  'UPDATE_FIX' => 'Ret beløb',
  'UPDATE_FIX_TXT' => 'Forsøg på at rette ugyldige beløb ved at oprette en gyldig decimal ud fra det nuværende beløb. Ændrede beløb sikkerhedskopieres i databasefeltet amount_backup. Hvis du kører denne og får fejl, skal du ikke køre den igen uden at gendanne sikkerhedskopien, da det kan overskrive sikkerhedskopien med nye ugyldige data.',
  'UPDATE_INCLUDE_CLOSE' => 'Medtag lukkede poster',
  'UPDATE_MERGE' => 'Flet valutaer',
  'UPDATE_MERGE_TXT' => 'Fletter flere valutaer til en fælles valuta. Hvis der er flere valutaposter for samme valuta, skal du flette dem. Derved flettes også valutaerne for alle andre moduler.',
  'UPDATE_NULL_VALUE' => 'Beløbet er NULL. Angiver det til 0 -',
  'UPDATE_RESTORE' => 'Gendan beløb',
  'UPDATE_RESTORE_COUNT' => 'Postbeløb gendannet:',
  'UPDATE_RESTORE_TXT' => 'Gendanner beløbsværdier ud fra de sikkerhedskopier, der blev oprettet under rettelsen.',
  'UPDATE_VERIFY' => 'Bekræft beløb',
  'UPDATE_VERIFY_CURAMOUNT' => 'Aktuelt beløb:',
  'UPDATE_VERIFY_FAIL' => 'Registrer mislykket verifikation:',
  'UPDATE_VERIFY_FIX' => 'Kørsel af rettelse vil give',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nyt beløb:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Ny valuta:',
  'UPDATE_VERIFY_TXT' => 'Kontrollerer, at beløbsværdierne i salgsmuligheder er gyldige decimaltal med kun numeriske tegn "0-9" og decimaler "."',
);

