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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once('include/vCard.php');

class ViewImportvcardsave extends SugarView
{
    var $type = 'save';

    public function __construct()
    {
        parent::SugarView();
    }

    /**
     * @see SugarView::display()
     */
    public function display()
    {
        $redirect = "index.php?action=Importvcard&module={$_REQUEST['module']}";

        if (!empty($_FILES['vcard']) && $_FILES['vcard']['error'] == 0) {
            $vcard = new vCard();
            $record = $vcard->importVCard($_FILES['vcard']['tmp_name'], $_REQUEST['module']);

            if (empty($record)) {
                SugarApplication::redirect($redirect . '&error=vcardErrorRequired');
            }

            SugarApplication::redirect("index.php?action=DetailView&module={$_REQUEST['module']}&record=$record");
        } else {
            switch ($_FILES['vcard']['error'])
            {
                case UPLOAD_ERR_FORM_SIZE:
                    $redirect .= "&error=vcardErrorFilesize";
                break;
                default:
                    $redirect .= "&error=vcardErrorDefault";
                    $GLOBALS['log']->error('Upload error code: ' . $_FILES['vcard']['error'] . '. Please refer to the error codes http://php.net/manual/en/features.file-upload.errors.php');
                break;
            }

            SugarApplication::redirect($redirect);
        }
    }
}
?>
