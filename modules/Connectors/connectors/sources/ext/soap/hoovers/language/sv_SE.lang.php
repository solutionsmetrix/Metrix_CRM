<?php

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





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$connector_strings = array (
  'LBL_LICENSING_INFO' => '<img src="http://translate.sugarcrm.com/latest/modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif"> Hoovers© provides free up-to-date information on companies to users of SugarCRM products. To get more comprehensive information and reports on companies, industries, and executives go to http://www.hoovers.com.',
  'LBL_ID' => 'ID',
  'LBL_NAME' => 'Företagsnamn',
  'LBL_DUNS' => 'DUNS',
  'LBL_PARENT_DUNS' => 'Huvud DUNS',
  'LBL_STREET' => 'Gata',
  'LBL_ADDRESS_STREET1' => 'Gatuadress1',
  'LBL_ADDRESS_STREET2' => 'Gatuadress2',
  'LBL_CITY' => 'Stad',
  'LBL_STATE' => 'Region',
  'LBL_COUNTRY' => 'Land',
  'LBL_ZIP' => 'Postnummer',
  'LBL_FINSALES' => 'Årlig försäljning',
  'LBL_HQPHONE' => 'Kontorstelefon',
  'LBL_TOTAL_EMPLOYEES' => 'Totalt antal anställda',
  'LBL_PRIMARY_URL' => 'Primär URL',
  'LBL_DESCRIPTION' => 'Beskrivning',
  'LBL_SYNOPSIS' => 'Översikt',
  'LBL_LOCATION_TYPE' => 'Platstyp',
  'LBL_COMPANY_TYPE' => 'Företagstyp',
  'ERROR_NULL_CLIENT' => 'SoapClient kan ej koppla till Hoovers. Servicen är antingen inte tillgänglig eller så är din licens nyckel inte längre giltig eller har nått sin dagliga limit.',
  'ERROR_MISSING_SOAP_LIBRARIES' => 'Fel: Kunde ej ladda SOAP biblioteken (SoapClient, SoapHeader).',
  'hoovers_endpoint' => 'Ändpunkt URL',
  'hoovers_wsdl' => 'WSDL URL',
  'hoovers_api_key' => 'API nyckel',
);

