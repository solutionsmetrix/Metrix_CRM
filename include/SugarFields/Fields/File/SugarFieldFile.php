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

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldFile extends SugarFieldBase {
    private function fillInOptions(&$vardef,&$displayParams) {
        if ( isset($vardef['allowEapm']) && $vardef['allowEapm'] == true ) {
            if ( empty($vardef['docType']) ) {
                $vardef['docType'] = 'doc_type';
            }
            if ( empty($vardef['docId']) ) {
                $vardef['docId'] = 'doc_id';
            }
            if ( empty($vardef['docUrl']) ) {
                $vardef['docUrl'] = 'doc_url';
            }
        } else {
            $vardef['allowEapm'] = false;
        }

        // Override the default module
        if ( isset($vardef['linkModuleOverride']) ) {
            $vardef['linkModule'] = $vardef['linkModuleOverride'];
        } else {
            $vardef['linkModule'] = '{$module}';
        }

        // This is needed because these aren't always filled out in the edit/detailview defs
        if ( !isset($vardef['fileId']) ) {
            if ( isset($displayParams['id']) ) {
                $vardef['fileId'] = $displayParams['id'];
            } else {
                $vardef['fileId'] = 'id';
            }
        }
    }


	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
        $this->fillInOptions($vardef,$displayParams);
        return parent::getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
    
	function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
        $this->fillInOptions($vardef,$displayParams);

        $keys = $this->getAccessKey($vardef,'FILE',$vardef['module']);
        $displayParams['accessKeySelect'] = $keys['accessKeySelect'];
        $displayParams['accessKeySelectLabel'] = $keys['accessKeySelectLabel'];
        $displayParams['accessKeySelectTitle'] = $keys['accessKeySelectTitle'];
        $displayParams['accessKeyClear'] = $keys['accessKeyClear'];
        $displayParams['accessKeyClearLabel'] = $keys['accessKeyClearLabel'];
        $displayParams['accessKeyClearTitle'] = $keys['accessKeyClearTitle'];
        
        return parent::getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
    
    function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
    	return $this->getSmartyView($parentFieldArray, $vardef, $displayParams, $tabindex, 'SearchView');
    }
    
    public function save(&$bean, $params, $field, $vardef, $prefix = ''){
        $fakeDisplayParams = array();
        $this->fillInOptions($vardef,$fakeDisplayParams);

		require_once('include/upload_file.php');
		$upload_file = new UploadFile($prefix . $field . '_file');

		//remove file
		if (isset($_REQUEST['remove_file_' . $field]) && $params['remove_file_' . $field] == 1) {
			$upload_file->unlink_file($bean->$field);
			$bean->$field="";
		}
		
		$move=false;
		if (isset($_FILES[$prefix . $field . '_file']) && $upload_file->confirm_upload())
		{
    		$bean->$field = $upload_file->get_stored_file_name();
    		$bean->file_mime_type = $upload_file->mime_type;
			$bean->file_ext = $upload_file->file_ext;
			$move=true;
		}

        if (!empty($params['isDuplicate']) && $params['isDuplicate'] == 'true' ) {
            // This way of detecting duplicates is used in Notes
            $old_id = $params['relate_id'];
        }
        if (!empty($params['duplicateSave']) && !empty($params['duplicateId']) ) {
            // It's a duplicate
            $old_id = $params['duplicateId'];
        }

        // Backwards compatibility for fields that still use customCode to handle the file uploads
        if ( !$move && empty($old_id) && isset($_FILES['uploadfile']) ) {
            $upload_file = new UploadFile('uploadfile');
            if ( $upload_file->confirm_upload() ) {
                $bean->$field = $upload_file->get_stored_file_name();
                $bean->file_mime_type = $upload_file->mime_type;
                $bean->file_ext = $upload_file->file_ext;
                $move=true;
                
            }
        } else if ( !$move && !empty($old_id) && isset($_REQUEST['uploadfile']) && !isset($_REQUEST[$prefix . $field . '_file']) ) {
            // I think we are duplicating a backwards compatibility module.
            $upload_file = new UploadFile('uploadfile');
        }


        if (empty($bean->id)) { 
            $bean->id = create_guid();
            $bean->new_with_id = true;
        }

		if ($move) {
            $upload_file->final_move($bean->id);
            $upload_file->upload_doc($bean, $bean->id, $params[$prefix . $vardef['docType']], $bean->$field, $upload_file->mime_type);
        } else if ( ! empty($old_id) ) {
            // It's a duplicate, I think

            if ( empty($params[$prefix . $vardef['docUrl'] ]) ) {
                $upload_file->duplicate_file($old_id, $bean->id, $bean->$field);
            } else {
                $docType = $vardef['docType'];
                $bean->$docType = $params[$prefix . $field . '_old_doctype'];
            }
		} else if ( !empty($params[$prefix . $field . '_remoteName']) ) {
            // We aren't moving, we might need to do some remote linking
            $displayParams = array();
            $this->fillInOptions($vardef,$displayParams);
            
            if ( isset($params[$prefix . $vardef['docId']])
                 && ! empty($params[$prefix . $vardef['docId']])
                 && isset($params[$prefix . $vardef['docType']]) 
                 && ! empty($params[$prefix . $vardef['docType']])
                ) {
                $bean->$field = $params[$prefix . $field . '_remoteName'];
                
                require_once('include/utils/file_utils.php');
                $extension = get_file_extension($bean->$field);
                if(!empty($extension))
                {
                	$bean->file_ext = $extension;
                	$bean->file_mime_type = get_mime_content_type_from_filename($bean->$field);
                }
            }
        }
        
        if ( $vardef['allowEapm'] == true && empty($bean->$field) ) {
            $GLOBALS['log']->info("The $field is empty, clearing out the lot");
            // Looks like we are emptying this out
            $clearFields = array('docId', 'docType', 'docUrl', 'docDirectUrl');
            foreach ( $clearFields as $clearMe ) {
                if ( ! isset($vardef[$clearMe]) ) {
                    continue;
                }
                $clearField = $vardef[$clearMe];
                $bean->$clearField = '';
            }
        }
    }
}
