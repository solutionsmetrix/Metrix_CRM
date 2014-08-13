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
<div id="lastView" class="headerList">
        <b style="white-space:nowrap;">{$APP.LBL_LAST_VIEWED}:&nbsp;&nbsp;</b>
    <span>
    {foreach from=$recentRecords item=item name=lastViewed}
    <span>
        
        <a title="{$item.item_summary}"
            accessKey="{$smarty.foreach.lastViewed.iteration}"
            href="{sugar_link module=$item.module_name action='DetailView' record=$item.item_id link_only=1}">
            {$item.image}&nbsp;<span>{$item.item_summary_short}</span>
        </a>
    </span>
    {foreachelse}
    {$APP.NTC_NO_ITEMS_DISPLAY}
    {/foreach}
    </span>
</div>
