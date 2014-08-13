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

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Calls module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.detail.php');

class QuotesViewDetail extends ViewDetail 
{
    /**
 	 * @see SugarView::display()
 	 */
 	public function display() 
 	{
		global $beanFiles;
		require_once($beanFiles['Quote']);
		require_once($beanFiles['TaxRate']);
		require_once($beanFiles['Shipper']);

		$this->bean->load_relationship('product_bundles');
		$product_bundle_list = $this->bean->get_linked_beans('product_bundles','ProductBundle');
		if(is_array($product_bundle_list)){

			$ordered_bundle_list = array();
            foreach ($product_bundle_list as $id => $bean)
            {
                $index = $bean->get_index($this->bean->id);
				$ordered_bundle_list[(int)$index[0]['bundle_index']] = $bean;
			} //for
			ksort($ordered_bundle_list);
		} //if

		$this->ss->assign('ordered_bundle_list', $ordered_bundle_list);
		
		$currency = new Currency();
		$currency->retrieve($this->bean->currency_id);
		$this->ss->assign('CURRENCY_SYMBOL', $currency->symbol);
		$this->ss->assign('CURRENCY', $currency->iso4217);
		$this->ss->assign('CURRENCY_ID', $currency->id);
		require_once('modules/Quotes/Layouts.php');
		$this->ss->assign('LAYOUT_OPTIONS', get_select_options_with_id(get_layouts(), ''));
 		
 		if(!(strpos($_SERVER['HTTP_USER_AGENT'],'Mozilla/5') === false)) {
			$this->ss->assign('PDFMETHOD', 'POST');
		} else {
			$this->ss->assign('PDFMETHOD', 'GET');
		}
		
		global $app_list_strings, $current_user;
		$this->ss->assign('APP_LIST_STRINGS', $app_list_strings);
		$this->ss->assign('gridline', $current_user->getPreference('gridline') == 'on' ? '1' : '0');

 		require_once('include/Sugarpdf/sugarpdf_config.php');
		if(PDF_CLASS == 'TCPDF') {
		    $this->dv->defs['templateMeta']['form']['links'] = array('{$MOD.PDF_FORMAT} <select name="sugarpdf" id="sugarpdf">{$LAYOUT_OPTIONS}</select></form>');
			// Bug 41079 Check User Email Client Type
			$userPref = $current_user->getPreference('email_link_type');
            global $sugar_config;
			$defaultPref = $sugar_config['email_default_client'];
			if($userPref != '') {
				$client = $userPref;
			} else {
				$client = $defaultPref;
			}
			$pdfButtons = '<form action="index.php" method="{$PDFMETHOD}" name="ViewPDF" id="form" onsubmit="this.sugarpdf.value =(document.getElementById(\'sugarpdf\'))? document.getElementById(\'sugarpdf\').value: \'\';"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="{$fields.id.value}"><input type="hidden" name="action" value="sugarpdf"><input type="hidden" name="email_action"><input type="hidden" name="sugarpdf">';
			$pdfButtons .= '{nocache}';
			$pdfButtons .= '{sugar_email_btn}';
			$pdfButtons .= '{/nocache}</form>';

            $pdfViewButton = '<form action="index.php" method="{$PDFMETHOD}" name="ViewPDF" id="form" onsubmit="this.sugarpdf.value =(document.getElementById(\'sugarpdf\'))? document.getElementById(\'sugarpdf\').value: \'\';"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="{$fields.id.value}"><input type="hidden" name="action" value="sugarpdf"><input type="hidden" name="email_action"><input type="hidden" name="sugarpdf">';
            $pdfViewButton .= '<input id="print_as_pdf_button" title="{$APP.LBL_VIEW_PDF_BUTTON_TITLE}" class="button" type="submit" name="button" value="{$APP.LBL_VIEW_PDF_BUTTON_LABEL}"></form>';

		    $this->dv->defs['templateMeta']['form']['buttons'] = array('EDIT', 'DUPLICATE', 'DELETE',
                array('customCode'=>'<form action="index.php" method="POST" name="Quote2Opp" id="form"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="{$fields.id.value}"><input type="hidden" name="user_id" value="{$current_user->id}"><input type="hidden" name="team_id" value="{$fields.team_id.value}"><input type="hidden" name="user_name" value="{$current_user->user_name}"><input type="hidden" name="action" value="QuoteToOpportunity"><input type="hidden" name="opportunity_subject" value="{$fields.name.value}"><input type="hidden" name="opportunity_name" value="{$fields.name.value}"><input type="hidden" name="opportunity_id" value="{$fields.billing_account_id.value}"><input type="hidden" name="amount" value="{$fields.total.value}"><input type="hidden" name="valid_until" value="{$fields.date_quote_expected_closed.value}"><input type="hidden" name="currency_id" value="{$fields.currency_id.value}"><input title="{$APP.LBL_QUOTE_TO_OPPORTUNITY_TITLE}" id="create_opp_from_quote_button" class="button" type="submit" name="opp_to_quote_button" value="{$APP.LBL_QUOTE_TO_OPPORTUNITY_LABEL}"></form>'),
		        array('customCode'=>$pdfButtons),
                array('customCode'=>$pdfViewButton),
		        );
				
		}
        elseif(PDF_CLASS == 'EZPDF')
        {
            $this->dv->defs['templateMeta']['form']['links'] = array('{$MOD.PDF_FORMAT} <select name="layout" id="layout">{$LAYOUT_OPTIONS}</select></form>');

            $this->dv->defs['templateMeta']['form']['buttons'] = array('EDIT', 'DUPLICATE', 'DELETE',
                array('customCode'=>'<form action="index.php" method="POST" name="Quote2Opp" id="form"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="{$fields.id.value}"><input type="hidden" name="user_id" value="{$current_user->id}"><input type="hidden" name="team_id" value="{$fields.team_id.value}"><input type="hidden" name="user_name" value="{$current_user->user_name}"><input type="hidden" name="action" value="QuoteToOpportunity"><input type="hidden" name="opportunity_subject" value="{$fields.name.value}"><input type="hidden" name="opportunity_name" value="{$fields.name.value}"><input type="hidden" name="opportunity_id" value="{$fields.billing_account_id.value}"><input type="hidden" name="amount" value="{$fields.new_sub.value}"><input type="hidden" name="valid_until" value="{$fields.date_quote_expected_closed.value}"><input type="hidden" name="currency_id" value="{$fields.currency_id.value}"><input title="{$APP.LBL_QUOTE_TO_OPPORTUNITY_TITLE}" class="button" type="submit" name="opp_to_quote_button" value="{$APP.LBL_QUOTE_TO_OPPORTUNITY_LABEL}"></form>'),
                array('customCode'=>'<form action="index.php" method="{$PDFMETHOD}" name="ViewPDF" id="form" onsubmit="this.layout.value =(document.getElementById(\'layout\'))? document.getElementById(\'layout\').value: \'\';"><input type="hidden" name="layout" value=""><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="{$fields.id.value}"><input type="hidden" name="action" value="Layouts"><input type="hidden" name="entryPoint" value="pdf"><input type="hidden" name="email_action"><input title="{$APP.LBL_EMAIL_PDF_BUTTON_TITLE}" class="button" type="submit" name="button" value="{$APP.LBL_EMAIL_PDF_BUTTON_LABEL}" onclick="this.form.email_action.value=\'EmailLayout\';"> <input title="{$APP.LBL_VIEW_PDF_BUTTON_TITLE}"  class="button" type="submit" name="button" value="{$APP.LBL_VIEW_PDF_BUTTON_LABEL}"></form>')
            );
        }
		
 		parent::display();
		
 	}
}

