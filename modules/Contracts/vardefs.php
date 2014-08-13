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




$dictionary['Contract'] = array(
	'table' => 'contracts',
	'audited' => true,
    'unified_search' => true,
	'comment' => 'A contract collects information about important legal and contractural obligations',
	'fields' => array (
		'name' => array (
			'name' => 'name',
			'vname' => 'LBL_CONTRACT_NAME',
			'dbType' => 'varchar', 
			'type' => 'name', 			
			'len' => '255',
			'required' => true,
			'comment' => 'The name of the contract',
			'importable' => 'required',
			'unified_search' => true,
		),
		'reference_code' => array (
			'name' => 'reference_code',
			'vname' => 'LBL_REFERENCE_CODE',
			'type' => 'varchar',
			'len' => '255',
			'required' => false,
			'comment' => 'The reference code used by the organization to refer to this contract'
		),
		'quotes' => array (
			'name' => 'quotes',
			'type' => 'link',
			'vname' => 'LBL_QUOTES',
			'relationship' => 'contracts_quotes',
			'link_type' => 'one',
			'source' => 'non-db',
		),
		'products' => array (
			'name' => 'products',
			'type' => 'link',
			'vname' => 'LBL_PRODUCTS',
			'relationship' => 'contracts_products',
			'link_type' => 'one',
			'source' => 'non-db',
		),
		'opportunities' => array (
			'name' => 'opportunities',
			'type' => 'link',
			'vname' => 'LBL_OPPORTUNITY',
			'relationship' => 'contracts_opportunities',
			'link_type' => 'one',
			'source' => 'non-db',
		),
		'opportunity_name' => array (
			'name' => 'opportunity_name',
			'rname' => 'name',
			'id_name' => 'opportunity_id',
			'vname' => 'LBL_OPPORTUNITY_NAME',
			'type' => 'relate',
			'table' => 'opportunities',
			'isnull' => 'true',
			'module' => 'Opportunities',
			'dbType' => 'varchar',
			'link' => 'opportunities',
			'len' => '255',
			'source' => 'non-db',
			'massupdate' => false,
			'unified_search' => true,
		),
		'opportunity_id' => array(
		    'name'=>'opportunity_id',
			'type'=>'id',
			'vname'=>'LBL_OPPORTUNITY_NAME',
			'source'=>'non-db',
		),
		'account_name' => array (
			'name' => 'account_name',
			'rname' => 'name',
			'id_name' => 'account_id',
			'vname' => 'LBL_ACCOUNT_NAME',
			'type' => 'relate',
			'table' => 'accounts',
			'isnull' => 'true',
            'join_name'=>'accounts',
			'module' => 'Accounts',
			'dbType' => 'varchar',
			'link' => 'accounts',
			'len' => '255',
			'source' => 'non-db',
			'required' => true,
			'unified_search' => true,
		),

		'account_id' => array (
			'name' => 'account_id',
			'vname' => 'LBL_ACCOUNT_ID',
			'type' => 'id',
			'audited' => true,
			'importable' => 'required',
			'reportable' => false,
			'comment' => 'The account ID to which the contract is associated'
		),
		'accounts' => array (
			'name' => 'accounts',
			'type' => 'link',
			'relationship' => 'account_contracts',
			'source' => 'non-db',
			'link_type' => 'one',
			'module' => 'Accounts',
			'bean_name' => 'Account',
			'vname' => 'LBL_ACCOUNTS',
		),
		'start_date' => array (
			'name' => 'start_date',
			'vname' => 'LBL_START_DATE',
			'type' => 'date',
			'validation' => array('type' => 'isbefore', 'compareto' => 'end_date', 'blank' => true),
			'audited' => true,
			'comment' => 'The effective date of the contract',
		    'enable_range_search' => true,
		    'options' => 'date_range_search_dom',
		),
		'end_date' => array (
			'name' => 'end_date',
			'vname' => 'LBL_END_DATE',
			'type' => 'date',
			'audited' => true,
			'comment' => 'The date in which the contract is no longer effective',
		    'enable_range_search' => true,
		    'options' => 'date_range_search_dom',
		),

		'currency_id' => array (
	    	'name' => 'currency_id',
	    	'dbType' => 'id',
	    	'vname'=>'LBL_CURRENCY_ID',
	    	'type' => 'varchar',
	    	'group'=>'currency_id',
			'function'=>array('name'=>'getCurrencyDropDown', 'returns'=>'html'),
	    	'required'=>false,
	    	'reportable'=>false,
	    	'comment' => 'The currency in use for the contract'
	  	),

        'currency_name' => array (
            'name' => 'currency_name',
            'type' => 'enum',
            'vname'=>'LBL_CURRENCY',
            'function'=>'getCurrencyDropDown',
            'source' => 'non-db',
            'studio' => 'false',
            'comment' => 'Currency name used for Meta-data framework',
        ),

		'total_contract_value' => array (
			'name' => 'total_contract_value',
			'vname' => 'LBL_TOTAL_CONTRACT_VALUE',
			'dbType' => 'decimal',
			'type' => 'currency',
			'len' => '26,6',
			'comment' => 'The overall value of the contract'
		),
		'total_contract_value_usdollar' => array (
			'name' => 'total_contract_value_usdollar',
			'vname' => 'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR',
			'dbType' => 'decimal',
			'type' => 'currency',
			'len' => '26,6',
			'comment' => 'The overall contract value expressed in USD'
		),
		'status' => array (
			'name' => 'status',
			'vname' => 'LBL_STATUS',
			'type' => 'enum',
			'len' => 100,
			'required' => true,
			'options' => 'contract_status_dom',
			'audited' => true,
			'comment' => 'The contract status',
			'importable' => 'required',
		),
		'customer_signed_date' => array (
			'name' => 'customer_signed_date',
			'vname' => 'LBL_CUSTOMER_SIGNED_DATE',
			'type' => 'date',
			'comment' => 'Date in which the ultimate customer signed the contract',
		    'enable_range_search' => true,
		    'options' => 'date_range_search_dom',
		),
		'company_signed_date' => array (
			'name' => 'company_signed_date',
			'vname' => 'LBL_COMPANY_SIGNED_DATE',
			'type' => 'date',
			'comment' => 'Date in which the company using Sugar signed the contract',
		    'enable_range_search' => true,
		    'options' => 'date_range_search_dom',
		),
		'contract_term' => array (
			'name' => 'contract_term',
			'vname' => 'LBL_CONTRACT_TERM',
			'type' => 'int',
			'len' => 5,
			'source' => 'non-db',
		),
		'expiration_notice' => array (
			'name' => 'expiration_notice',
			'vname' => 'LBL_EXPIRATION_NOTICE',
			'type' => 'datetimecombo',
			'reportable' => false,
			'massupdate' => false,
			'comment' => 'Date to issue an expiration notice (useful for workflow rules)'
		),
		'time_to_expiry' => array (
			'name' => 'time_to_expiry',
			'vname' => 'LBL_TIME_TO_EXPIRY',
			'type' => 'int',
			'len' => 5,
			'source' => 'non-db',
		),
		'type_name' => array (
			'name' => 'type_name',
			'vname' => 'LBL_TYPE',
			'rname' => 'name',
            'id_name' => 'type',
    		'type' => 'relate',
    		'studio' => 'false', //C.L. - Use type, not type_name; the QuickSearch is not implemented for type_name
    		'table' => 'contract_types',
    		'module' => 'ContractTypes',
			'len' => '36',
            'reportable' => false,
            'source'=>'non-db',
            'link' => 'contract_types',
			'comment' => 'The contract type'
		),
		'contract_types' => array (
			'name' => 'contract_types',
			'type' => 'link',
			'vname' => 'LBL_TYPE',
			'relationship' => 'contracts_contract_types',
			'link_type' => 'one',
			'source' => 'non-db',
		),
		'type' => array (
		    'name' => 'type',
		    'vname' => 'LBL_TYPE',
			'type' => 'enum',
			'function' => 'getContractTypesDropDown',
		    'merge_filter' => 'enabled',
		    'duplicate_merge' => 'disabled',
		    'comment' => 'The dropdown options for Contract types',
		),
		'contracts_documents' =>	array (
			'name' => 'contracts_documents',
			'type' => 'link',
			'relationship' => 'contracts_documents',
			'source' => 'non-db',
			'vname' => 'LBL_DOCUMENTS',
		),
		'parent_name' =>
		  array (
		    'name' => 'parent_name',
		    'vname' => 'LBL_MEMBER_OF',
		    'type' => 'relate',
		    'required'=>false,
		    'reportable'=>false,
		    'audited'=>true,
		    'source'=>'non-db',
		    'comment' => 'parent_name of contract, added to prevent ability to add flex relate field to module because of relationship in linked_documentsMetaData.php',
		),	
		'contacts' =>	array (
			'name' => 'contacts',
			'type' => 'link',
			'relationship' => 'contracts_contacts',
			'source' => 'non-db',
			'vname' => 'LBL_CONTACTS',
		),
		'notes' =>	array (
			'name' => 'notes',
			'type' => 'link',
			'relationship' => 'contract_notes',
			'source' => 'non-db',
			'vname' => 'LBL_NOTES',
		),
	),
	'relationships' => array(
		'contracts_contract_types' => array(
			'lhs_module' => 'Contracts',
			'lhs_table' => 'contracts',
			'lhs_key' => 'type',
			'rhs_module' => 'ContractTypes',
			'rhs_table' => 'contract_types',
			'rhs_key' => 'id',
			'relationship_type' => 'one-to-many',
		),
		'contract_notes' => array(
			'lhs_module' => 'Contracts',
			'lhs_table' => 'contracts',
			'lhs_key' => 'id',
			'rhs_module' => 'Notes',
			'rhs_table' => 'notes',
			'rhs_key' => 'parent_id',
			'relationship_role_column' => 'parent_type',
			'relationship_role_column_value' => 'Contracts',
			'relationship_type' => 'one-to-many',
		),
		'account_contracts' => array(
			'lhs_module' => 'Accounts',
			'lhs_table' => 'accounts',
			'lhs_key' => 'id',
			'rhs_module' => 'Contracts',
			'rhs_table' => 'contracts',
			'rhs_key' => 'account_id',
			'relationship_type' => 'one-to-many',
		),
		'contracts_assigned_user' => array(
			'lhs_module' => 'Users',
			'lhs_table' => 'users',
			'lhs_key' => 'id',
			'rhs_module' => 'Contracts',
			'rhs_table' => 'contracts',
			'rhs_key' => 'assigned_user_id',
			'relationship_type' => 'one-to-many',
		),
		'contracts_created_by' => array(
			'lhs_module' => 'Users',
			'lhs_table' => 'users',
			'lhs_key' => 'id',
			'rhs_module' => 'Contracts',
			'rhs_table' => 'contracts',
			'rhs_key' => 'created_by',
			'relationship_type' => 'one-to-many',
		),
		'contracts_modified_user' => array(
			'lhs_module' => 'Users',
			'lhs_table' => 'users',
			'lhs_key' => 'id',
			'rhs_module' => 'Contracts',
			'rhs_table' => 'contracts',
			'rhs_key' => 'modified_user_id',
			'relationship_type' => 'one-to-many',
		),
	),
);
VardefManager::createVardef('Contracts','Contract', array('default', 'assignable',
'team_security',
));
?>
