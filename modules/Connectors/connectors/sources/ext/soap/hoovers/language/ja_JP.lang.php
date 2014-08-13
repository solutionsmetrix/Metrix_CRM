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
  'LBL_ID' => 'ID',
  'hoovers_wsdl' => 'WSDL URL',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' . 'Hoovers&#169;はSugarCRMのユーザーに企業の最新情報を無料でお届けします。各企業、業界、経営者に関してのより包括的な情報や報告をご覧になりたい場合<a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>（英語）を参照してください。</td></tr></table>',
  'LBL_NAME' => '会社名',
  'LBL_DUNS' => 'DUNS(企業識別コード)',
  'LBL_PARENT_DUNS' => '親DUNS(企業識別コード)',
  'LBL_STREET' => '番地',
  'LBL_ADDRESS_STREET1' => '番地1',
  'LBL_ADDRESS_STREET2' => '番地2',
  'LBL_CITY' => '市区町村',
  'LBL_STATE' => '都道府県',
  'LBL_COUNTRY' => '国',
  'LBL_ZIP' => '郵便番号',
  'LBL_FINSALES' => '年間売上',
  'LBL_HQPHONE' => '電話番号',
  'LBL_TOTAL_EMPLOYEES' => '総従業員数',
  'LBL_PRIMARY_URL' => '主URL',
  'LBL_DESCRIPTION' => '詳細',
  'LBL_SYNOPSIS' => '概要',
  'LBL_LOCATION_TYPE' => 'ロケーションタイプ',
  'LBL_COMPANY_TYPE' => '会社タイプ',
  'ERROR_NULL_CLIENT' => 'Hooversに接続するためのSOAPクライアントが生成できません。サービスが利用不可になっているか、ライセンスキーが期限切れになっているか、一日あたり利用量制限に達している可能性があります。',
  'ERROR_MISSING_SOAP_LIBRARIES' => 'エラー: SOAPライブラリ（SoapClient、SoapHeader）が読み込みできません。',
  'hoovers_endpoint' => 'エンドポイントURL',
  'hoovers_api_key' => 'APIキー',
);

