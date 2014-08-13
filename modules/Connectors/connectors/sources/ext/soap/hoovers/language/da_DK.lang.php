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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif" border="0"></td><td width="65%" valign="top" class="dataLabel">Hoovers&#169; levere gratis up-to-date information om virksomheder for brugere af SugarCRM prodkter. For at få mere uddybende information og rapporter på virksomheder, industrier og ledere gå til <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',
  'LBL_DUNS' => 'DUNS',
  'LBL_SYNOPSIS' => 'Synopsis',
  'hoovers_wsdl' => 'WSDL URL',
  'LBL_ID' => 'Id',
  'LBL_NAME' => 'Firmanavn',
  'LBL_PARENT_DUNS' => 'Overordnet DUNS',
  'LBL_STREET' => 'Gade',
  'LBL_ADDRESS_STREET1' => 'Vej adresse 1',
  'LBL_ADDRESS_STREET2' => 'Vej adresse 2',
  'LBL_CITY' => 'By',
  'LBL_STATE' => 'Stat',
  'LBL_COUNTRY' => 'Land',
  'LBL_ZIP' => 'Postnummer',
  'LBL_FINSALES' => 'Årligt salg',
  'LBL_HQPHONE' => 'Telefon "arbejde":',
  'LBL_TOTAL_EMPLOYEES' => 'Total antal medarbejdere',
  'LBL_PRIMARY_URL' => 'Primær URL',
  'LBL_DESCRIPTION' => 'Beskrivelse',
  'LBL_LOCATION_TYPE' => 'Location type',
  'LBL_COMPANY_TYPE' => 'Virksomhedstype',
  'ERROR_NULL_CLIENT' => 'Kunne ikke få SoapClient til at oprette forbindelse til Hoovers. Denne service kan være utilgængelig, eller din licensnøgle kan være udløbet eller har nået en daglig brugsgrænse.',
  'ERROR_MISSING_SOAP_LIBRARIES' => 'Fejl: Kunne ikke indlæse SOAP bibliotekerne (SoapClient, SoapHeader).',
  'hoovers_endpoint' => 'Slut URL',
  'hoovers_api_key' => 'API nøgle',
);

