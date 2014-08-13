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
  'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att radera produkten.',
  'LBL_ACCOUNT_ID' => 'Organisations ID',
  'LBL_ACCOUNT_NAME' => 'Organisationsnamn:',
  'LBL_ASSET_NUMBER' => 'Inventarienummer:',
  'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
  'LBL_BOOK_VALUE' => 'Bokfört värde:',
  'LBL_BOOK_VALUE_DATE' => 'Datum för bokfört värde:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Bokat värde (US Dollar',
  'LBL_CATEGORY' => 'Kategori:',
  'LBL_CATEGORY_NAME' => 'Kategorinamn:',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACT_ID' => 'Kontakt ID',
  'LBL_CONTACT_NAME' => 'Kontaktnamn:',
  'LBL_CONTRACTS' => 'Kontrakt',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakt',
  'LBL_COST_PRICE' => 'Kostnad',
  'LBL_COST_USDOLLAR' => 'Kostnad',
  'LBL_CREATED_USER' => 'Skapad användare',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_CURRENCY_ID' => 'Valuta ID:',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Valutasymbol:',
  'LBL_DATE_PURCHASED' => 'Köpt:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Support upphör:',
  'LBL_DATE_SUPPORT_STARTS' => 'Supporten startar:',
  'LBL_DEAL_TOT' => 'Rabatt:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Produkter',
  'LBL_DESCRIPTION' => 'Beskrivning:',
  'LBL_DISCOUNT_AMOUNT' => 'Rabatt belopp',
  'LBL_DISCOUNT_PRICE' => 'Enhetspris:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Datum för rabatterat pris:',
  'LBL_DISCOUNT_RATE' => 'Rabatt kurs',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Rabatt kurs (US dollar)',
  'LBL_DISCOUNT_TOTAL' => 'Rabatt totalt:',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Rabatt (US Dollar)',
  'LBL_DISCOUNT_USDOLLAR' => 'Rabatt',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokument',
  'LBL_EDITLAYOUT' => 'Redigera layout',
  'LBL_EXPORT_CURRENCY_ID' => 'Valuta ID',
  'LBL_EXT_PRICE' => 'Externt pris',
  'LBL_LIST_ACCOUNT_NAME' => 'Organisationsnamn',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktnamn',
  'LBL_LIST_COST_PRICE' => 'Kostnad',
  'LBL_LIST_DATE_PURCHASED' => 'Köpt',
  'LBL_LIST_DISCOUNT_PRICE' => 'Pris',
  'LBL_LIST_FORM_TITLE' => 'Lista produkt',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Tillverkningsnummer',
  'LBL_LIST_LIST_PRICE' => 'Lista',
  'LBL_LIST_MANUFACTURER' => 'Tillverkare',
  'LBL_LIST_NAME' => 'Produkt',
  'LBL_LIST_PRICE' => 'Listpris:',
  'LBL_LIST_QUANTITY' => 'Kvantitet',
  'LBL_LIST_QUOTE_NAME' => 'Offertnamn',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Utgår',
  'LBL_LIST_USDOLLAR' => 'Listpris',
  'LBL_MANUFACTURER' => 'Tillverkare:',
  'LBL_MEMBER_OF' => 'Medlem av:',
  'LBL_MFT_PART_NUM' => 'Tillverkarens artikelnummer:',
  'LBL_MODIFIED_USER' => 'Ändrad användare',
  'LBL_MODULE_NAME' => 'Produkter',
  'LBL_MODULE_TITLE' => 'Produkter: Hem',
  'LBL_NAME' => 'Produkt:',
  'LBL_NEW_FORM_TITLE' => 'Skapa produkt',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Anteckningar',
  'LBL_PRICING_FACTOR' => 'Prisfaktor',
  'LBL_PRICING_FORMULA' => 'Prisberäkningsformel:',
  'LBL_PRODUCT' => 'Produkt:',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkter',
  'LBL_PRODUCT_CATEGORIES' => 'Produktkategorier',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Produkt mall ID:',
  'LBL_PRODUCT_TYPES' => 'Produkttyper',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
  'LBL_QUANTITY' => 'Kvantitet:',
  'LBL_QUOTE' => 'Offert',
  'LBL_QUOTE_ID' => 'Offert ID:',
  'LBL_QUOTE_NAME' => 'Offertnamn:',
  'LBL_RELATED_PRODUCTS' => 'Relaterade produkter',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Relaterade produkter',
  'LBL_SEARCH_FORM_TITLE' => 'Sök produkt',
  'LBL_SELECT_DISCOUNT' => 'Rabatt i %',
  'LBL_SERIAL_NUMBER' => 'Serienummer:',
  'LBL_STATUS' => 'Status:',
  'LBL_SUPPORT_CONTACT' => 'Support kontakt:',
  'LBL_SUPPORT_DESCRIPTION' => 'Support beskrivning:',
  'LBL_SUPPORT_NAME' => 'Supporttitel:',
  'LBL_SUPPORT_TERM' => 'Supportteam:',
  'LBL_TAX_CLASS' => 'Momsklass:',
  'LBL_TYPE' => 'Typ:',
  'LBL_URL' => 'Produkt URL:',
  'LBL_VENDOR_PART_NUM' => 'Leverantörens artikelnummer:',
  'LBL_WEBSITE' => 'Webbsida',
  'LBL_WEIGHT' => 'Vikt:',
  'LNK_IMPORT_PRODUCTS' => 'Importera produkter',
  'LNK_NEW_PRODUCT' => 'Skapa produkt',
  'LNK_PRODUCT_LIST' => 'Produkter',
  'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill radera posten?',
  'NTC_REMOVE_CONFIRMATION' => 'Är du säker på att du vill ta bort produktens relationer?',
);

