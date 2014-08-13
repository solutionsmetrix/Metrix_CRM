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


require_once('include/SugarFields/Fields/Float/SugarFieldFloat.php');

class SugarFieldCurrency extends SugarFieldFloat 
{

    public function getListViewSmarty($parentFieldArray, $vardef, $displayParams, $col)
    {
        global $locale, $current_user;
        $tabindex = 1;
        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex, false);

        $currencyUSD = '-99';

        $amount = $parentFieldArray[strtoupper($vardef['name'])];
        $currencyId = isset($parentFieldArray['CURRENCY_ID']) ? $parentFieldArray['CURRENCY_ID'] : "";
        $currencySymbol = isset($parentFieldArray['CURRENCY_SYMBOL']) ? $parentFieldArray['CURRENCY_SYMBOL'] : "";

        if (empty($currencyId)) {
            $currencyId = $locale->getPrecedentPreference('currency');
        }

        if (empty($currencySymbol)) {
            $currencySymbol = $locale->getPrecedentPreference('default_currency_symbol');
        }
        
        if (stripos($vardef['name'], '_USD')) {
            $userCurrencyId = $current_user->getPreference('currency');
            if (!empty($userCurrencyId) && $currencyUSD !== $userCurrencyId) {
                $userCurrency = BeanFactory::getBean('Currencies', $userCurrencyId);
                $currencyId = $userCurrency->id;
                $currencySymbol = $userCurrency->symbol;
                $amount = $userCurrency->convertFromDollar($amount, 6);
            } else {
                $currencyId = $currencyUSD;
                $currencySymbol = $locale->getPrecedentPreference('default_currency_symbol');
            }
        }

        $this->ss->assign('currency_id', $currencyId);
        $this->ss->assign('currency_symbol', $currencySymbol);
        $this->ss->assign('amount', $amount);

        return $this->fetch($this->findTemplate('ListView'));
    }

    /**
     * @see SugarFieldBase::importSanitize()
     */
    public function importSanitize(
        $value,
        $vardef,
        $focus,
        ImportFieldSanitize $settings
        )
    {
        $value = str_replace($settings->currency_symbol,"",$value);
        
        return $settings->float($value,$vardef,$focus);
    }

    /**
     * format the currency field based on system locale values for currency
     * Note that this may be different from the precision specified in the vardefs.
     * @param string $rawfield value of the field
     * @param string $somewhere vardef for the field being processed
     * @return number formatted according to currency settings
     */
    public function formatField($rawField, $vardef)
    {
        // for currency fields, use the user or system precision, not the precision in the vardef
        //this is achived by passing in $precision as null
        $precision = null;
        if ( $rawField === '' || $rawField === NULL ) {
            return '';
        }
        return format_number($rawField, $precision, $precision);
    }
}

