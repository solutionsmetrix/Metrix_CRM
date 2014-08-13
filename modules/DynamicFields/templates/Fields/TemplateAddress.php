<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry) die ( 'Not A Valid Entry Point' ) ;
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

require_once ('modules/DynamicFields/templates/Fields/TemplateField.php') ;
require_once ('modules/DynamicFields/templates/Fields/TemplateAddressCountry.php') ;

class TemplateAddress extends TemplateField
{
    var $type = 'varchar';
    var $supports_unified_search = true;

    function save ($df)
    {
        $this->type = 'varchar' ;

        require_once 'modules/ModuleBuilder/parsers/parser.label.php' ;
        $parser = new ParserLabel ( $df->getModuleName() , $df->getPackageName() ) ;
        foreach ( array ( 'City' , 'State' , 'PostalCode' , 'Country' ) as $addressFieldName )
        {
            $systemLabel = strtoupper( "LBL_" . $this->name . '_' . $addressFieldName );
            $parser->handleSave ( array( "label_" . $systemLabel => $this->label_value . ' ' . $addressFieldName ) , $GLOBALS [ 'current_language' ] ) ;
            $addressField = new TemplateField ( ) ;
            $addressField->len = ($addressFieldName == 'PostalCode') ? 20 : 100 ;
            $addressField->name = $this->name . '_' . strtolower ( $addressFieldName ) ;
            $addressField->label = $addressField->vname = $systemLabel ;
            $addressField->save ( $df ) ;
        }
        // finally save the base street address field
        parent::save($df);      
        
    }
}

?>
