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
  'LBL_COMPANY_ID' => 'ID',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfocompany/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' . 'ZoomInfo&#169; は500万以上の会社の4,500万人以上のビジネスパーソンについての詳細情報をご提供します。詳しくは<a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a>（英語）を参照してください。</td></tr></table>',
  'LBL_SEARCH_FIELDS_INFO' => 'Zoominfo&#169 CompanyのAPI によってサポートされています。（API: 会社名、国、都道府県、市区町村フィールド）',
  'LBL_COMPANY_NAME' => '会社名',
  'LBL_STREET' => '番地',
  'LBL_CITY' => '市区町村',
  'LBL_ZIP' => '郵便番号',
  'LBL_STATE' => '都道府県',
  'LBL_COUNTRY' => '国',
  'LBL_INDUSTRY' => '業種',
  'LBL_WEBSITE' => 'Webサイト',
  'LBL_DESCRIPTION' => '詳細',
  'LBL_PHONE' => '電話',
  'LBL_COMPANY_TICKER' => '会社ティッカー',
  'LBL_ZOOMINFO_COMPANY_URL' => '会社概要URL',
  'LBL_REVENUE' => '歳入',
  'LBL_EMPLOYEES' => '従業員',
  'company_search_url' => '会社検索URL',
  'company_detail_url' => '会社詳細URL',
  'partner_code' => 'パートナーAPIコード',
  'api_key' => 'APIキー',
  'ERROR_LBL_CONNECTION_PROBLEM' => 'エラー: Zoominfo -Company コネクタのサーバに接続することができません。',
);

