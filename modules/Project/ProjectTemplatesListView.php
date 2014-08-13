<?php
if(!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
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




require_once('include/ListView/ListViewSmarty.php');
require_once('modules/Project/metadata/listviewdefs.php'); // always load this as the listviewdefs for ProjectTemplates are currently only found in this file, not in any customized version
if(file_exists('custom/modules/Project/metadata/listviewdefs.php')){
    require_once('custom/modules/Project/metadata/listviewdefs.php');  
}

require_once('include/SearchForm/SearchForm.php');

echo getClassicModuleTitle($mod_strings['LBL_MODULE_NAME'], array($mod_strings['LBL_PROJECT_TEMPLATES_TITLE']), true);

$header_text = '';

global $app_strings, $mod_strings;
global $app_list_strings;
global $current_language;
$current_module_strings = return_module_language($current_language, 'Project');

$current_module_strings['LBL_LIST_FORM_TITLE'] = $mod_strings['LBL_PROJECT_TEMPLATES_LIST'];

global $urlPrefix;
global $currentModule;
global $theme;
global $current_user;
// focus_list is the means of passing data to a ListView.
global $focus_list;

// clear the display columns back to default when clear query is called
if(!empty($_REQUEST['clear_query']) && $_REQUEST['clear_query'] == 'true')  
    $current_user->setPreference('ListViewDisplayColumns', array(), 0, $currentModule);

//$savedDisplayColumns = $current_user->getPreference('ListViewDisplayColumns', $currentModule); // get user defined display columns

$json = getJSONobj();

$seedProject = new Project(); // seed bean
$searchForm = new SearchForm('Project', $seedProject); // new searchform instance

// setup listview smarty
$lv = new ListViewSmarty();

$displayColumns = array();
// check $_REQUEST if new display columns from post
if(!empty($_REQUEST['displayColumns'])) {
    foreach(explode('|', $_REQUEST['displayColumns']) as $num => $col) {
        if(!empty($listViewDefs['ProjectTemplates'][$col])) 
            $displayColumns[$col] = $listViewDefs['ProjectTemplates'][$col];
    }    
}
/*elseif(!empty($savedDisplayColumns)) { // use user defined display columns from preferences 
    $displayColumns = $savedDisplayColumns;
}*/
else { // use columns defined in listviewdefs for default display columns
	foreach($listViewDefs['ProjectTemplates'] as $col => $params) {
        if(!empty($params['default']) && $params['default'])
            $displayColumns[$col] = $params;
    }
} 
$params = array('massupdate' => true); // setup ListViewSmarty params
if(!empty($_REQUEST['orderBy'])) { // order by coming from $_REQUEST
    $params['orderBy'] = $_REQUEST['orderBy'];
    $params['overrideOrder'] = true;
    if(!empty($_REQUEST['sortOrder'])) $params['sortOrder'] = $_REQUEST['sortOrder'];
}

$lv->displayColumns = $displayColumns;

if(!empty($_REQUEST['search_form_only']) && $_REQUEST['search_form_only']) { // handle ajax requests for search forms only
    switch($_REQUEST['search_form_view']) {
        case 'basic_search':
            $searchForm->setup();
            $searchForm->displayBasic(false);
            break;
        case 'advanced_search':
            $searchForm->setup();
            $searchForm->displayAdvanced(false);
            break;
        case 'saved_views':
            echo $searchForm->displaySavedViews($listViewDefs, $lv, false);
            break;
    }
    return;
}

// use the stored query if there is one
if (!isset($where)) $where = "";

// list only the Project Templates
$where .= 'is_template = 1 ';

// awu: Bug 11452 - removing export for non-admin users without a mass update form
if (!is_admin($current_user)){
	$params = array( 'massupdate' => false );
	$lv->export = false;
}
else{
	$params = array( 'massupdate' => true, 'export' => true);
}
$lv->setup($seedProject, 'include/ListView/ListViewGeneric.tpl', $where, $params);

// Bug 49610 
for ($i = 0; $i < count($lv->data['data']); $i++) {
    $lv->data['data'][$i]['OFFSET'] = $i + 1;
}

$lv->ss->assign('act','pte');

$savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
echo get_form_header($current_module_strings['LBL_LIST_FORM_TITLE'] . $savedSearchName, '', false);

echo $lv->display();

$savedSearch = new SavedSearch();
$json = getJSONobj();
// fills in saved views select box on shortcut menu
$savedSearchSelects = $json->encode(array($GLOBALS['app_strings']['LBL_SAVED_SEARCH_SHORTCUT'] . '<br>' . $savedSearch->getSelect('Project')));
$str = "<script>
YAHOO.util.Event.addListener(window, 'load', SUGAR.util.fillShortcuts, $savedSearchSelects);
</script>";
echo $str;

// awu: Bug 11452 - removing export for non-admin users without a mass update form
// faking a massupdate form, which is expected on page load
if (!is_admin($current_user)){    
$form = "<form action='index.php' id='MassUpdate' method='post' name='MassUpdate'><textarea id='uid' name='uid'></textarea><input name='action' value='index' /><input name='module' value='Project'></form>";
echo $form;   
$hide_form = "<script>
document.getElementById('MassUpdate').style.display = 'none';
</script>";
echo $hide_form;
}
?>