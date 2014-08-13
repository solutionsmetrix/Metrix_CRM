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
{* FG - Bug 41467 - Let Home module have Shortcuts *}
{if count($SHORTCUT_MENU) > 0}
<div id="shortcuts" class="headerList">
    <b style="white-space:nowrap;">{$APP.LBL_LINK_ACTIONS}:&nbsp;&nbsp;</b>
    <span>
    {foreach from=$SHORTCUT_MENU item=item}
    <span style="white-space:nowrap;">
        {if $item.URL == "-"}
          <a></a><span>&nbsp;</span>
        {else}
          <a href="{$item.URL}">{$item.IMAGE}&nbsp;<span>{$item.LABEL}</span></a>
        {/if}
    </span>
    {/foreach}
    </span>
</div>
{/if}
