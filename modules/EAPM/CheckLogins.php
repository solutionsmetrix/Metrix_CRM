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


// This file checks if the external accounts for the logged in user are still valid or not.
// We only check oAuth logins right now, because usernames/passwords shouldn't really expire.

require_once('include/externalAPI/ExternalAPIFactory.php');

global $app_strings;

$checkList = ExternalAPIFactory::listAPI('',true);

if ( !empty($_REQUEST['api']) ) {
    // Check just one login type
    $newCheckList = array();
    if ( isset($checkList[$_REQUEST['api']]) ) {
        $newCheckList[$_REQUEST['api']] = $checkList[$_REQUEST['api']];
    }
    
    $checkList = $newCheckList;
}

$failList = array();

if ( is_array($checkList) ) {
    foreach ( $checkList as $apiName => $apiOpts ) {
        if ( $apiOpts['authMethod'] == 'oauth' ) {
            $api = ExternalAPIFactory::loadAPI($apiName);
            if ( is_object($api) ) {
                $loginCheck = $api->quickCheckLogin();
            } else {
                $loginCheck['success'] = false;
            }
            if ( ! $loginCheck['success'] ) {
                $thisFail = array();
                
                $thisFail['checkURL'] = 'index.php?module=EAPM&closeWhenDone=1&action=QuickSave&application='.$apiName;

                $translateKey = 'LBL_EXTAPI_'.strtoupper($apiName);
                if ( ! empty($app_strings[$translateKey]) ) {
                    $apiLabel = $app_strings[$translateKey];
                } else {
                    $apiLabel = $apiName;
                }

                $thisFail['label'] = str_replace('{0}',$apiLabel,translate('LBL_ERR_FAILED_QUICKCHECK','EAPM'));
                
                $failList[$apiName] = $thisFail;
            }
        }
    }
}

$json = new JSON();
echo($json->encode($failList));
