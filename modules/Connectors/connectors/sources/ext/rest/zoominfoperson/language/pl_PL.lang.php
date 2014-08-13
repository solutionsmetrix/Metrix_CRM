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

/*********************************************************************************

* Description:  Defines the English language pack for the base application.
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
* All Rights Reserved.
* Contributor(s): ______________________________________..
********************************************************************************/

/*********************************************************************************
 * pl_pl.lang.php for SugarCRM 6.5.0
 * Translator: eVolpe
 * All Rights Reserved.
 * Any bugs report welcome: support@evolpe.pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$connector_strings = array (
    //licensing information shown in config screen
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfoperson/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'ZoomInfo&#169; dostarcza informacji o ponad 45 milionach przedsiębiorcach w ponad 5 milionach firm. Zobacz więcej na  <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',

    'LBL_SEARCH_FIELDS_INFO' => 'Następujące pola są wspierane przez  Zoominfo&#169 Person; API: Imię, Nazwisko i adres e-mail.',

    //vardef labels
        'LBL_ID' => 'ID',
        'LBL_EMAIL' => 'Adres e-mail',
        'LBL_FIRST_NAME' => 'Imię',
        'LBL_LAST_NAME' => 'Nazwisko',
        'LBL_JOB_TITLE' => 'Stanowisko',
        'LBL_IMAGE_URL' => 'Adres URL zdjęcia',
        'LBL_SUMMARY_URL' => 'Adres URL podsumowania',
        'LBL_COMPANY_NAME' => 'Nazwa kontrahenta',
		'LBL_ZOOMPERSON_URL' => 'Adres URL Zoominfo Person',
	'LBL_DIRECT_PHONE' => 'Bezpośredni telefon',
	'LBL_COMPANY_PHONE' => 'Telefon firmowy',
	'LBL_FAX' => 'Faks',

    'LBL_CURRENT_JOB_TITLE' => 'Aktualne stanowisko',
    'LBL_CURRENT_JOB_START_DATE' => 'Data rozpoczęcia pracy',
	'LBL_CURRENT_JOB_COMPANY_NAME' => 'Nazwa firmy',
	'LBL_CURRENT_JOB_COMPANY_STREET' => 'Adres firmy - ulica',
	'LBL_CURRENT_JOB_COMPANY_CITY' => 'Adres firmy - miejscowość',
	'LBL_CURRENT_JOB_COMPANY_STATE' => 'Adres firmy - województwo',
	'LBL_CURRENT_JOB_COMPANY_ZIP' => 'Adres firmy - kod pocztowy',
	'LBL_CURRENT_JOB_COMPANY_COUNTRY_CODE' => 'Adres firmy - państwo',
	'LBL_CURRENT_INDUSTRY' => 'Branża',
	'LBL_BIOGRAPHY' => 'Biografia',
	'LBL_EDUCATION_SCHOOL' => 'Uczelnia wyższa',                       	
    'LBL_AFFILIATION_TITLE' => 'Powiązane stanowisko',
    'LBL_AFFILIATION_COMPANY_PHONE' => 'Powiązany numer telefonu',
    'LBL_AFFILIATION_COMPANY_NAME' => 'Powiązana nazwa firmy',
    'LBL_AFFILIATION_COMPANY_WEBSITE' => 'Powiązana strona WWW',

    //Configuration labels
    'person_search_url' => 'URL zapytania wyszukiwania osoby',
    'person_detail_url' => 'URL zapytania informacji szczegółowych o osobie',
	'partner_code' => 'Kod partnerski API',
        'api_key' => 'Klucz API',

        //Other labels
        'ERROR_LBL_CONNECTION_PROBLEM' => 'Błąd: Nie można połączyć się z serwerem Zoominfo - Person connector.',
);

?>
