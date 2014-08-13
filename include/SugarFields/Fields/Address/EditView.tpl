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
<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Address/SugarFieldAddress.js"}'></script>
<fieldset id='{{$displayParams.key}}_address_fieldset'>
    <legend>{sugar_translate label='LBL_{{$displayParams.key|upper}}_ADDRESS' module='{{$module}}'}</legend>
    <table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
    {{foreach from=$displayParams.fields item=field}}
        <tr>
            <td id="{{$field.name}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' scope='row' >
                <label for="{{$field.name}}">{sugar_translate label='{{$field.vname}}' module='{{$module}}'}:</label>
                {{if $field.required || $field.name|lower|in_array:$displayParams.required}}
                    <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                {{/if}}
            </td>
            <td>
                {{if strpos($field.name, 'address_street')}}
                    <textarea id="{{$field.name}}" name="{{$field.name}}" maxlength="{{$field.len|default:$displayParams.maxlength}}" rows="{{$displayParams.rows|default:4}}" cols="{{$displayParams.cols|default:60}}" tabindex="{{$tabindex}}">{$fields.{{$field.name}}.value}</textarea>
                {{else}}
                    <input type="text" name="{{$field.name}}" id="{{$field.name}}" size="{{$displayParams.size|default:30}}" maxlength="{{$field.len|default:$displayParams.maxlength}}" value='{$fields.{{$field.name}}.value}' tabindex="{{$tabindex}}">
                {{/if}}
            </td>
        </tr>
    {{/foreach}}
    {{if $displayParams.copy}}
        <tr>
            <td scope='row' NOWRAP>
                {sugar_translate label='LBL_COPY_ADDRESS_FROM_LEFT' module=''}:
            </td>
            <td>
                <input id="{{$displayParams.key}}_checkbox" name="{{$displayParams.key}}_checkbox" type="checkbox" onclick="{{$displayParams.key}}_address.syncFields();">
            </td>
        </tr>
    {{else}}
        <tr>
            <td colspan='2' NOWRAP>&nbsp;</td>
        </tr>
    {{/if}}
    </table>
</fieldset>
<script type="text/javascript">
   SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function(){ldelim}
		{{$displayParams.key}}_address = new SUGAR.AddressField("{{$displayParams.key}}_checkbox",'{{$displayParams.copy}}', '{{$displayParams.key}}');
	{rdelim});
</script>
