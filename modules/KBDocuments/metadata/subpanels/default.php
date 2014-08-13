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


$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
    ),

    'where' => '',

    'list_fields' => array(
        'kbdocument_name' => array(
            'name'          => 'kbdocument_name',
            'width'         => '25%',
            'vname'         => 'LBL_LIST_DOCUMENT_NAME',
            'widget_class'  => 'SubPanelDetailViewLink',
        ),
        'status_id' => array(
            'name'  => 'status_id',
            'vname' => 'LBL_LIST_STATUS',
            'width' => '20%',
        ),
        'kbdoc_approver_name' => array(
            'name'    => 'kbdoc_approver_name',
            'width'   => '20%',
            'vname'   => 'LBL_LIST_APPROVED_BY',
            'default' => true,
        ),
        'date_modified' => array(
            'name'  => 'date_modified',
            'vname' => 'LBL_DATE_MODIFIED',
            'width' => '20%',
        ),
        'edit_button' => array(
            'widget_class' => 'SubPanelEditButton',
            'module'       => 'KBDocuments',
            'width'        => '5%',
        ),
        'remove_button' => array(
            'widget_class' => 'SubPanelRemoveButton',
            'module'       => 'KBDocuments',
            'width'        => '5%',
        ),
    ),
);

?>
