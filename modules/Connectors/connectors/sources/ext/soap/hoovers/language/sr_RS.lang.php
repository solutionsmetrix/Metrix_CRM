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
  'LBL_DUNS' => 'DUNS',
  'hoovers_wsdl' => 'WSDL URL',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif" border="0"></td><td width="65%" valign="top" class="dataLabel">Hoovers&#169;pruža besplatne ažurirane informacije o kompanijama korisnicima SugarCRM proizvoda. Da biste dobili više informacija i izveštaje o kompanijama, industrijama, i rukovodiocima idite na <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',
  'LBL_ID' => 'ID broj',
  'LBL_NAME' => 'Naziv kompanije',
  'LBL_PARENT_DUNS' => 'Matični DUNS',
  'LBL_STREET' => 'Ulica',
  'LBL_ADDRESS_STREET1' => 'Ulica1',
  'LBL_ADDRESS_STREET2' => 'Ulica2',
  'LBL_CITY' => 'Grad',
  'LBL_STATE' => 'Opština',
  'LBL_COUNTRY' => 'Država',
  'LBL_ZIP' => 'Poštanski broj',
  'LBL_FINSALES' => 'Godišnja prodaja',
  'LBL_HQPHONE' => 'Poslovni telefon',
  'LBL_TOTAL_EMPLOYEES' => 'Ukupno zaposlenih',
  'LBL_PRIMARY_URL' => 'Primarni URL',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_SYNOPSIS' => 'Sinopsis',
  'LBL_LOCATION_TYPE' => 'Tip lokacije',
  'LBL_COMPANY_TYPE' => 'Tip kompanije',
  'ERROR_NULL_CLIENT' => 'Nije moguće kreirati SoapClient-a za konekciju sa Hoovers. Servis je možda nedostupan ili Vam je istekla licenca ili ste dostigli dnevni limit korišćenja.',
  'ERROR_MISSING_SOAP_LIBRARIES' => 'Greška: Nije moguće učitati SOAP biblioteke (SoapClient, SoapHeader).',
  'hoovers_endpoint' => 'Krajnji URL',
  'hoovers_api_key' => 'API Ključ',
);

