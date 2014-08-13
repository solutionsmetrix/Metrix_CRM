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
  'ERR_DELETE_RECORD' => 'Musisz podać numer rekordu, aby usunąć ofertę.',
  'LBL_ACCOUNT_ID' => 'ID Kontrahenta',
  'LBL_ACCOUNT_NAME' => 'Nazwa kontrahenta:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Wydarzenia',
  'LBL_ADDRESS_INFORMATION' => 'Adres',
  'LBL_ADD_COMMENT' => 'Dodaj komentarz',
  'LBL_ADD_GROUP' => 'Dodaj grupę produktów',
  'LBL_ADD_ROW' => 'Dodaj wiersz',
  'LBL_AMOUNT' => 'Kwota oferty:',
  'LBL_AMOUNT_USDOLLAR' => 'Kwota:',
  'LBL_ANY_ADDRESS' => 'Dowolny adres:',
  'LBL_ASSIGNED_TO_ID' => 'Przydzielono do:',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielono do',
  'LBL_ATTACHMENT' => 'Załącznik',
  'LBL_BILLING_ACCOUNT' => 'Kontrahent:',
  'LBL_BILLING_ACCOUNT_NAME' => 'Nazwa kontrahenta (faktura)',
  'LBL_BILLING_ADDRESS' => 'Adres faktur:',
  'LBL_BILLING_ADDRESS_CITY' => 'Miasto',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'Kraj',
  'LBL_BILLING_ADDRESS_POSTAL_CODE' => 'Kod pocztowy',
  'LBL_BILLING_ADDRESS_STATE' => 'Województwo',
  'LBL_BILLING_ADDRESS_STREET' => 'Ulica',
  'LBL_BILLING_CONTACT' => 'Kontakt:',
  'LBL_BILLING_CONTACT_ID' => 'ID kontaktu (faktura)',
  'LBL_BILLING_CONTACT_NAME' => 'Nazwa kontaktu (faktura)',
  'LBL_BILL_TO' => 'Wyślij fakturę do',
  'LBL_BUNDLE_DISCOUNT' => 'Kwota rabatu:',
  'LBL_BUNDLE_NAME' => 'Nazwa grupy produktów:',
  'LBL_BUNDLE_STAGE' => 'Status:',
  'LBL_CALC_GRAND' => 'Wyświetl kwotę całkowitą:',
  'LBL_CHECK_DATA' => 'Nieprawidłowe dane: Pole może zawierać tylko cyfry (0-9 lub &#39;.&#39;)',
  'LBL_CITY' => 'Miasto:',
  'LBL_CONTACT_NAME' => 'Nazwa kontaktu:',
  'LBL_CONTACT_QUOTE_FORM_TITLE' => 'Nazwa kontaktu (oferta):',
  'LBL_CONTACT_ROLE' => 'Rola kontaktu:',
  'LBL_CONTRACTS' => 'Umowy',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Umowy',
  'LBL_COUNTRY' => 'Kraj:',
  'LBL_CREATED_BY' => 'Utworzono przez',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_CURRENCY_RATE' => 'Stawka waluty',
  'LBL_DATE_QUOTE_CLOSED' => 'Data zamknięcia:',
  'LBL_DATE_QUOTE_EXPECTED_CLOSED' => 'Obowiązuje do:',
  'LBL_DEAL_TOT' => 'kwota rabatu razem',
  'LBL_DEAL_TOT_USDOLLAR' => 'kwota rabatu razem (PLN)',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oferty',
  'LBL_DELETE_GROUP' => 'Usuń grupę',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informacje opisowe',
  'LBL_DISCOUNT_TOTAL' => 'Kwota rabatu:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
  'LBL_DUPLICATE' => 'Duplikacja',
  'LBL_EDITLAYOUT' => 'Edytuj widok',
  'LBL_EMAIL_ATTACHMENT' => 'Załącznik wiadomości:',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'W załączniku przesyłam ofertę (Możesz zmienić ten tekst)',
  'LBL_EMAIL_QUOTE_FOR' => 'Oferta dla:',
  'LBL_HISOTRY_SUBPANEL_TITLE' => 'Historia',
  'LBL_INVITEE' => 'Kontakty',
  'LBL_INVOICE' => 'Faktura',
  'LBL_LEAD_SOURCE' => 'Źródło namiaru:',
  'LBL_LINE_ITEM_INFORMATION' => 'Pozycje',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa kontrahenta',
  'LBL_LIST_AMOUNT' => 'Kwota oferty',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Łączna kwota',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielono do',
  'LBL_LIST_COST_PRICE' => 'Koszt',
  'LBL_LIST_DATE_QUOTE_CLOSED' => 'Data zamknięcia',
  'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED' => 'Obowiązuje do',
  'LBL_LIST_DEAL_TOT' => 'Kwota rabatu',
  'LBL_LIST_DISCOUNT_PRICE' => 'Cena ustalona',
  'LBL_LIST_FORM_TITLE' => 'Oferty',
  'LBL_LIST_GRAND_TOTAL' => 'Podsumowanie',
  'LBL_LIST_LIST_PRICE' => 'Cena katalogowa',
  'LBL_LIST_MANUFACTURER_PART_NUM' => 'Kod producenta',
  'LBL_LIST_MY_QUOTES' => 'Moje oferty',
  'LBL_LIST_PRICING_FACTOR' => 'Czynnik',
  'LBL_LIST_PRICING_FORMULA' => 'Formuła wyceny',
  'LBL_LIST_PRODUCT_NAME' => 'Produkt',
  'LBL_LIST_QUANTITY' => 'Ilość',
  'LBL_LIST_QUOTE_NAME' => 'Temat',
  'LBL_LIST_QUOTE_NUM' => 'Numer',
  'LBL_LIST_QUOTE_STAGE' => 'Etap',
  'LBL_LIST_TAXCLASS' => 'Obowiązek podatkowy',
  'LBL_MODIFIED_BY' => 'Zmodyfikowano przez',
  'LBL_MODULE_NAME' => 'Oferty',
  'LBL_MODULE_NAME_SINGULAR' => 'Oferta',
  'LBL_MODULE_TITLE' => 'Oferty: Strona główna',
  'LBL_NAME' => 'Nazwa oferty',
  'LBL_NEW_FORM_TITLE' => 'Utwórz ofertę',
  'LBL_NEW_SUB' => 'Razem po rabacie:',
  'LBL_NEXT_STEP' => 'Następny krok:',
  'LBL_NON_TAXABLE' => 'Niepodlegający opodatkowaniu',
  'LBL_OPPORTUNITY_NAME' => 'Nazwa szansy:',
  'LBL_ORDER_STAGE' => 'Status zamówienia',
  'LBL_ORIGINAL_PO_DATE' => 'Oryginalna data zamówienia:',
  'LBL_PAYMENT_TERMS' => 'Warunki platności:',
  'LBL_PDF_BILLING_ADDRESS' => 'Adres faktury',
  'LBL_PDF_CURRENCY' => 'Waluta:',
  'LBL_PDF_DISCOUNT' => 'Kwota rabatu:',
  'LBL_PDF_GRAND_TOTAL' => 'Podsumowanie',
  'LBL_PDF_INVOICE_NUMBER' => 'Numer faktury',
  'LBL_PDF_INVOICE_TITLE' => 'Faktura',
  'LBL_PDF_ITEM_DISCOUNT' => 'Kwota rabatu',
  'LBL_PDF_ITEM_EXT_PRICE' => 'Kwota calkowita',
  'LBL_PDF_ITEM_LIST_PRICE' => 'Cennik',
  'LBL_PDF_ITEM_PRODUCT' => 'Produkt',
  'LBL_PDF_ITEM_QUANTITY' => 'Ilosc',
  'LBL_PDF_ITEM_SELECT_DISCOUNT' => ' ',
  'LBL_PDF_ITEM_UNIT_PRICE' => 'Cena rabatowa',
  'LBL_PDF_NEW_SUB' => 'Razem po rabacie:',
  'LBL_PDF_PART_NUMBER' => 'Numer partii:',
  'LBL_PDF_QUOTE_CLOSE' => 'Obowiazuje do:',
  'LBL_PDF_QUOTE_DATE' => 'Data:',
  'LBL_PDF_QUOTE_NUMBER' => 'Numer oferty:',
  'LBL_PDF_QUOTE_TITLE' => 'Oferta',
  'LBL_PDF_SALES_PERSON' => 'Przedstawiciel handlowy:',
  'LBL_PDF_SHIPPING' => 'Dostawa:',
  'LBL_PDF_SHIPPING_ADDRESS' => 'Adres dostawy',
  'LBL_PDF_SHIPPING_COMPANY' => 'Spedytor:',
  'LBL_PDF_SUBTOTAL' => 'Razem:',
  'LBL_PDF_TAX' => 'Podatek:',
  'LBL_PDF_TAX_RATE' => 'Obowiązek podatkowy:',
  'LBL_PDF_TOTAL' => 'Podsumowanie:',
  'LBL_POSTAL_CODE' => 'Kod pocztowy:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
  'LBL_PROPOSAL' => 'Oferta',
  'LBL_PURCHASE_ORDER_NUM' => 'Numer zamówienia:',
  'LBL_QUOTE' => 'Oferta:',
  'LBL_QUOTE_INFORMATION' => 'Informacje ogólne',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'szablon oferty nie istnieje: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'szablon oferty nie został dodany do modules/Quotes/Layouts.php',
  'LBL_QUOTE_NAME' => 'Nazwa oferty:',
  'LBL_QUOTE_NUM' => 'Numer oferty:',
  'LBL_QUOTE_STAGE' => 'Status oferty:',
  'LBL_QUOTE_TYPE' => 'Typ oferty',
  'LBL_REMOVE_COMMENT' => 'Usuń komentarz',
  'LBL_REMOVE_ROW' => 'Usuń wiersz',
  'LBL_RENAME_ERROR' => 'BŁĄD: nie można przenieść pliku do wskazanej lokalizacji. Należy spróbować zmienić katalog na zapisywalny przez webserwer',
  'LBL_SALES_STAGE' => 'Etap sprzedaży:',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie',
  'LBL_SHIPPING' => 'Dostawa:',
  'LBL_SHIPPING_ACCOUNT' => 'Dostawca:',
  'LBL_SHIPPING_ACCOUNT_NAME' => 'Nazwa kontrahenta (dostawa):',
  'LBL_SHIPPING_ADDRESS' => 'Adres dostawy:',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Miasto',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Kraj',
  'LBL_SHIPPING_ADDRESS_POSTAL_CODE' => 'Kod pocztowy',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Województwo',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Ulica',
  'LBL_SHIPPING_CONTACT' => 'Kontakt:',
  'LBL_SHIPPING_CONTACT_ID' => 'ID kontaktu (dostawa):',
  'LBL_SHIPPING_CONTACT_NAME' => 'Nazwa kontaktu (dostawa):',
  'LBL_SHIPPING_PROVIDER' => 'Spedytor:',
  'LBL_SHIPPING_USDOLLAR' => 'Dostawa (PLN)',
  'LBL_SHIP_TO' => 'Wyślij do',
  'LBL_SHOW_LINE_NUMS' => 'Wyświetl numery pozycji:',
  'LBL_STATE' => 'Województwo',
  'LBL_SUBTOTAL' => 'Razem:',
  'LBL_SUBTOTAL_USDOLLAR' => 'Razem (PLN)',
  'LBL_SYSTEM_ID' => 'ID systemu',
  'LBL_TAX' => 'Kwota podatku:',
  'LBL_TAXABLE' => 'Podlegający opodatkowaniu',
  'LBL_TAXRATE' => 'Obowiązek podatkowy:',
  'LBL_TAX_USDOLLAR' => 'Kwota podatku (PLN)',
  'LBL_TOTAL' => 'Podsumowanie:',
  'LBL_TOTAL_USDOLLAR' => 'Podsumowanie (PLN)',
  'LBL_TYPE' => 'Typ:',
  'LNK_NEW_QUOTE' => 'Utwórz ofertę',
  'LNK_QUOTE_LIST' => 'Oferty',
  'LNK_QUOTE_REPORTS' => 'Raporty ofert',
  'MSG_DUPLICATE' => 'Istnieje już oferta o podanej nazwie. Możesz wybrać ofertę z listy poniżej lub kliknąć Zapisz, aby pomimo to utworzyć ofertę.',
  'NTC_COPY_BILLING_ADDRESS' => 'Kopiuj adres na fakturze do adresu dostawy',
  'NTC_COPY_BILLING_ADDRESS2' => 'Kopiuj do adresu dostawy',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Kopiuj adres dostawy do adresu na fakturze',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Kopiuj do adresu na fakturze',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Ten rekord zawiera wartości w polach adresu. Jeżeli chcesz nadpisać te wartości adresem kontrahenta, którego wybrałeś, kliknij "OK". Aby zachować obecne wartości, kliknij "Anuluj".',
  'NTC_REMOVE_COMMENT_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten komentarz z oferty?',
  'NTC_REMOVE_GROUP_CONFIRMATION' => 'Czy na pewno chcesz usunąć tę grupę z oferty?',
  'NTC_REMOVE_PRODUCT_CONFIRMATION' => 'Czy na pewno chcesz usunąć tę pozycję z oferty?',
  'NTC_REMOVE_QUOTE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten kontakt z oferty?',
  'QUOTE_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć tę ofertę z projektu?',
);

