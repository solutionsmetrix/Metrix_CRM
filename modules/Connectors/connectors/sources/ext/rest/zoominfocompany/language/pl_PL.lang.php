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
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfocompany/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'ZoomInfo&#169; dostarcza informacji o ponad 45 milionach zatrudnionych w ponad 5 milionach przedsiębiorstw. Zobacz więcej na <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',

    'LBL_SEARCH_FIELDS_INFO' => 'Następujące pola są wspierane przez Zoominfo&#169 Company; API: Nazwa kontrahenta, Miejscowość, Wokjewództwo (stan) i kraj.',


    //vardef labels
        'LBL_COMPANY_ID' => 'ID',
        'LBL_COMPANY_NAME' => 'Nazwa kontrahenta',
    'LBL_STREET' => 'Ulica',
        'LBL_CITY' => 'Miejscowość',
        'LBL_ZIP' => 'Kod pocztowy',
        'LBL_STATE' => 'Województwo',
        'LBL_COUNTRY' => 'Kraj',
        'LBL_INDUSTRY' => 'Branża',
        'LBL_WEBSITE' => 'Strona www',
        'LBL_DESCRIPTION' => 'Opis',
		'LBL_PHONE' => 'Telefon',
	'LBL_COMPANY_TICKER' => 'NIP',
	'LBL_ZOOMINFO_COMPANY_URL' => 'Adres URL profilu firmy',
	'LBL_REVENUE' => 'Roczne przychody',
	'LBL_EMPLOYEES' => 'Liczba pracowników',

        //Configuration labels
        'company_search_url' => 'Adres URL kontrahenta',
        'company_detail_url' => 'Adres URL szczegółów o kontrahencie',
		'partner_code' => 'Klucz partnerski API',
        'api_key' => 'Klucz API',

        //Other labels
        'ERROR_LBL_CONNECTION_PROBLEM' => 'Błąd: Nie można połączyć się z serwerem Zoominfo - Company connector.',
);

?>