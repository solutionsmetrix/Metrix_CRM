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

	

$connector_strings = array (
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif" border="0"></td><td width="65%" valign="top" class="dataLabel">Hoovers&#169; provides free up-to-date information on companies to users of SugarCRM products.  To get more comprehensive information and reports on companies, industries, and executives go to <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',
  'LBL_ID' => 'ID',
  'LBL_DUNS' => 'DUNS',
  'LBL_PARENT_DUNS' => 'Parent DUNS',
  'LBL_SYNOPSIS' => 'Synopsis',
  'hoovers_wsdl' => 'WSDL URL',
  'LBL_NAME' => 'Firmanavn',
  'LBL_STREET' => 'Gate',
  'LBL_ADDRESS_STREET1' => 'Gateadresse1',
  'LBL_ADDRESS_STREET2' => 'Gateadresse2',
  'LBL_CITY' => 'Poststed',
  'LBL_STATE' => 'Fylke',
  'LBL_COUNTRY' => 'Land',
  'LBL_ZIP' => 'Postnummer',
  'LBL_FINSALES' => 'Årlig omsetning',
  'LBL_HQPHONE' => 'Kontortelefon',
  'LBL_TOTAL_EMPLOYEES' => 'Antall ansatte',
  'LBL_PRIMARY_URL' => 'Primær URL',
  'LBL_DESCRIPTION' => 'Beskrivelse',
  'LBL_LOCATION_TYPE' => 'Beliggenhet type',
  'LBL_COMPANY_TYPE' => 'Selskapstype',
  'ERROR_NULL_CLIENT' => 'Kan ikke opprette SoapClient for knytting til Hoovers. Tjenesten kan være utilgjengelig eller lisensnøkkelen kan være utløpt, eller den har nådd en daglig bruksgrense.',
  'ERROR_MISSING_SOAP_LIBRARIES' => 'Feil: Kan ikke laste inn SOAP bibliotekene (SoapClient, SoapHeader).',
  'hoovers_endpoint' => 'Endepunkt URL',
  'hoovers_api_key' => 'API nøkkel',
);

