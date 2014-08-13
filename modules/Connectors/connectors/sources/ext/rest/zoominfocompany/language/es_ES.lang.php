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
        'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfocompany/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'ZoomInfo&#169; provee extensa información sobre 45 millones de gente de negocio en unas 5 millones de compañías.  Sepa más.  <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',    
    
    'LBL_SEARCH_FIELDS_INFO' => 'Los siguientes campos están soportados por el API de Zoominfo&#169; para Compañías: Nombre de Compañía, Ciudad, Estado/Provincia y País.',
        
    
    	'LBL_COMPANY_ID' => 'ID',
	'LBL_COMPANY_NAME' => 'Nombre de Compañía',
    'LBL_STREET' => 'Calle',
	'LBL_CITY' => 'Ciudad',
	'LBL_ZIP' => 'Código Postal',
	'LBL_STATE' => 'Estado/Provincia',
	'LBL_COUNTRY' => 'País',
	'LBL_INDUSTRY' => 'Industria',
	'LBL_WEBSITE' => 'Sitio Web',
	'LBL_DESCRIPTION' => 'Descripción',
    'LBL_PHONE' => 'Teléfono',
	'LBL_COMPANY_TICKER' => 'Ticker de la Compañía',
	'LBL_ZOOMINFO_COMPANY_URL' => 'URL con el Perfil de la Compañía',
	'LBL_REVENUE' => 'Volumen de Negocio Anual',
	'LBL_EMPLOYEES' => 'Empleados',

		'company_search_url' => 'URL de Búsqueda de Compañía',
	'company_detail_url' => 'URL de Detalle de Compañía',
    'partner_code' => 'Código del API del Partner',
	'api_key' => 'CLAVE API',
	
		'ERROR_LBL_CONNECTION_PROBLEM' => 'Error: No ha sido posible realizar la conexión al servidor de Zoominfo - Conector para compañías.',
);

?>
