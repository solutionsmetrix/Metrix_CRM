{*
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

*}
{if $AUTHENTICATED}
<div id="search">
    <form name='UnifiedSearch' action='index.php' onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
        <input type="hidden" name="action" value="UnifiedSearch">
        <input type="hidden" name="module" value="Home">
        <input type="hidden" name="search_form" value="false">
        <input type="hidden" name="advanced" value="false">
        {sugar_getimage name="searchMore" ext=".gif" alt=$APP.LBL_SEARCH other_attributes='border="0" id="unified_search_advanced_img" '}&nbsp;
        <input type="text" name="query_string" id="query_string" size="20" value="{$SEARCH}">&nbsp;
        <input type="submit" class="button" value="{$APP.LBL_SEARCH}">
    </form><br />
    <div id="unified_search_advanced_div"> </div>
</div>
<div id="sitemapLink">
    <span id="sitemapLinkSpan">
        {$APP.LBL_SITEMAP}
        {sugar_getimage name="MoreDetail" alt=$app_strings.LBL_MOREDETAIL ext=".png" other_attributes=''}
    </span>
</div>
<span id='sm_holder'></span>
{/if}
