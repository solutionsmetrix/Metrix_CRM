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
 * pl_pl.lang.php for SugarCRM 6.5.0
 * Translator: eVolpe
 * All Rights Reserved.
 * Any bugs report welcome: support@evolpe.pl
 * Contributor(s): ______________________________________..
 ********************************************************************************/


$connector_strings = array (
    //licensing information shown in config screen
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'Hoovers&#169; dostarcza za darmo aktualnych informacji o przedsiębiorstwach dla użytkowników produktów SugarCRM.  Aby zasięgnąć pełniejszych informacji i raportów na temat firm, fabryk  i ich kierownictwa, wejdź na stronę <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',
							
    //vardef labels
	'LBL_ID' => 'ID',
	'LBL_NAME' => 'Nazwa kontrahenta',
	'LBL_DUNS' => 'DUNS',
	'LBL_PARENT_DUNS' => 'Nadrzędne DUNS',
	'LBL_STREET' => 'Ulica',
        'LBL_ADDRESS_STREET1' => 'Dodatkowa ulica 1',
	'LBL_ADDRESS_STREET2' => 'Dodatkowa ulica 2',
	'LBL_CITY' => 'Miejscowość',
	'LBL_STATE' => 'Województwo',
	'LBL_COUNTRY' => 'Kraj',
	'LBL_ZIP' => 'Kod pocztowy',
	'LBL_FINSALES' => 'Roczna sprzedaż',
	'LBL_HQPHONE' => 'Telefon do biura',
    'LBL_TOTAL_EMPLOYEES' => 'Liczba zatrudnionych',
	'LBL_PRIMARY_URL' => 'Podstawowy URL',
	'LBL_DESCRIPTION' => 'Opis',
	'LBL_SYNOPSIS' => 'Zestawienie',
	'LBL_LOCATION_TYPE' => 'Typ lokalizacji',
        'LBL_COMPANY_TYPE' => 'Typ kontrahenta',
		
		//error messages
    'ERROR_NULL_CLIENT' => 'Nie można utworzyć obiektu klasy SoapClient do połączenia z Hoovers.  Usługa może być niedostępna lub Twój klucz licencyjny wygasł lub osiągnął dzienny limit użycia. ',
    'ERROR_MISSING_SOAP_LIBRARIES' => 'Błąd: Nie można załadować bibliotek SOAP (SoapClient, SoapHeader).',

	//Configuration labels
	'hoovers_endpoint' => 'Endpoint URL',
	'hoovers_wsdl' => 'Adres WSDL URL',
	'hoovers_api_key' => 'Klucz API',
);
