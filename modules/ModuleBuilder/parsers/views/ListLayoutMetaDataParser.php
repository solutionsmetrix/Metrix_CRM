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


require_once 'modules/ModuleBuilder/parsers/views/AbstractMetaDataParser.php' ;
require_once 'modules/ModuleBuilder/parsers/views/MetaDataParserInterface.php' ;

class ListLayoutMetaDataParser extends AbstractMetaDataParser implements MetaDataParserInterface
{

    // Columns is used by the view to construct the listview - each column is built by calling the named function
    public $columns = array ( 'LBL_DEFAULT' => 'getDefaultFields' , 'LBL_AVAILABLE' => 'getAdditionalFields' , 'LBL_HIDDEN' => 'getAvailableFields' ) ;
    protected $labelIdentifier = 'label' ; // labels in the listviewdefs.php are tagged 'label' =>
    protected $allowParent = false;

    /*
     * Simple function for array_udiff_assoc function call in getAvailableFields()
     */
    static function getArrayDiff ($one , $two)
    {
        $retArray = array();
        foreach($one as $key => $value)
        {
            if (!isset($two[$key]))
            {
                $retArray[$key] = $value;
            }
        }
        return $retArray;
    }

    /*
     * Constructor
     * @param string view          The view type, that is, editview, searchview etc
     * @param string moduleName     The name of the module to which this listview belongs
     * @param string packageName    If not empty, the name of the package to which this listview belongs
     */
    function __construct ($view , $moduleName , $packageName = '')
    {
        $GLOBALS [ 'log' ]->debug ( get_class ( $this ) . ": __construct()" ) ;

        // BEGIN ASSERTIONS
        $views = array ( MB_LISTVIEW, MB_DASHLET, MB_DASHLETSEARCH, MB_POPUPLIST, MB_POPUPSEARCH ) ;
    	$views [] = MB_WIRELESSLISTVIEW ;
        if (! in_array ( $view , $views ) )
        {
            sugar_die ( "ListLayoutMetaDataParser: View $view is not supported" ) ;
        }
        // END ASSERTIONS

        if (empty ( $packageName ))
        {
            require_once 'modules/ModuleBuilder/parsers/views/DeployedMetaDataImplementation.php' ;
            $this->implementation = new DeployedMetaDataImplementation ( $view, $moduleName ) ;
        } else
        {
            require_once 'modules/ModuleBuilder/parsers/views/UndeployedMetaDataImplementation.php' ;
            $this->implementation = new UndeployedMetaDataImplementation ( $view, $moduleName, $packageName ) ;
        }
        $this->view = $view;

        $this->_fielddefs = $this->implementation->getFielddefs () ;
        $this->_standardizeFieldLabels( $this->_fielddefs );
        $this->_viewdefs = array_change_key_case ( $this->implementation->getViewdefs () ) ; // force to lower case so don't have problems with case mismatches later

    }

    /*
     * Deploy the layout
     * @param boolean $populate If true (default), then update the layout first with new layout information from the $_REQUEST array
     */
    function handleSave ($populate = true)
    {
        if ($populate)
            $this->_populateFromRequest () ;
        $this->implementation->deploy ( array_change_key_case ( $this->_viewdefs, CASE_UPPER ) ) ; // force the field names back to upper case so the list view will work correctly
    }

    function getLayout ()
    {
        return $this->_viewdefs ;
    }

    /**
     * Return a list of the default fields for a listview
     * @return array    List of default fields as an array, where key = value = <field name>
     */
    function getDefaultFields ()
    {
        $defaultFields = array ( ) ;
        foreach ( $this->_viewdefs as $key => $def )
        {
            // add in the default fields from the listviewdefs but hide fields disabled in the listviewdefs.
            if (! empty ( $def [ 'default' ] ) && (!isset($def['enabled']) || $def['enabled'] != false)
            	&& (!isset($def [ 'studio' ]) || ($def [ 'studio' ] !== false && $def [ 'studio' ] != "false")))
            {
                if (isset($this->_fielddefs [ $key ] )) {
					$defaultFields [ $key ] = self::_trimFieldDefs ( $this->_fielddefs [ $key ] ) ;
					if (!empty($def['label']))
					   $defaultFields [ $key ]['label'] = $def['label'];
                }
				else {
					$defaultFields [ $key ] = $def;
				}
            }
        }

        return $defaultFields ;
    }

    /**
     * Returns additional fields available for users to create fields
      @return array    List of additional fields as an array, where key = value = <field name>
     */
    function getAdditionalFields ()
    {
        $additionalFields = array ( ) ;
        foreach ( $this->_viewdefs as $key => $def )
        {
        	//#25322 
        	if(strtolower ( $key ) == 'email_opt_out'){
        		continue;
        	}
        	
            if (empty ( $def [ 'default' ] ))
            {
                if (isset($this->_fielddefs [ $key ] ))
					$additionalFields [ $key ] = self::_trimFieldDefs ( $this->_fielddefs [ $key ] ) ;
				else
					$additionalFields [ $key ] = $def;
            }
        }
        return $additionalFields ;
    }

    /**
     * Returns unused fields that are available for use in either default or additional list views
     * @return array    List of available fields as an array, where key = value = <field name>
     */
    function getAvailableFields ()
    {
        $availableFields = array ( ) ;
        // Select available fields from the field definitions - don't need to worry about checking if ok to include as the Implementation has done that already in its constructor
        foreach ( $this->_fielddefs as $key => $def )
        {
            if ($this->isValidField($key, $def) && !isset($this->_viewdefs[$key]))
        	    $availableFields [ $key ] = self::_trimFieldDefs( $this->_fielddefs [ $key ] ) ;
        }
    	$origDefs = $this->getOriginalViewDefs();
        foreach($origDefs as $key => $def)
        {
        	if (!isset($this->_viewdefs[$key]) || 
        		(isset($this->_viewdefs[$key]['enabled']) && $this->_viewdefs[$key]['enabled'] == false))
        	$availableFields [ $key ] = $def;
        }

        return $availableFields;
    }

    public function isValidField($key, $def)
    {
        if (isset($def['studio']))
        {
            if (is_array($def['studio']))
            {
                $view = !empty($_REQUEST['view']) ? $_REQUEST['view'] : $this->view;
                
            	// fix for removing email1 field from studio popup searchview - bug 42902
                if($view == 'popupsearch' && $key == 'email1')
                {	
            		return false;
            	} //end bug 42902
           
            	if (!empty($view) && isset($def['studio'][$view]) && ($def['studio'][$view] !== false && (string)$def['studio'][$view] != 'false' && (string)$def['studio'][$view] != 'hidden'))
                {
					return true;
                }

                if (isset($def['studio']['listview']) && ($def['studio']['listview'] !== false && (string)$def['studio']['listview'] != 'false' && (string)$def['studio']['listview'] != 'hidden'))
                {
					return true;
                }
                
                if (isset($def ['studio']['visible']))
                {
                    return $def['studio']['visible'];
                }
            } else if(is_string($def['studio'])) {
            	return $def['studio'] != 'false' && $def['studio'] != 'hidden';
            } else if(is_bool($def['studio'])) {
                return $def['studio'];
            }

        }
        
    	//Bug 32520. We need to dissalow currency_id fields on list views. 
    	//This should be removed once array based studio definitions are in.
    	if (isset($def['type']) && $def['type'] == "id" && $def['name'] == 'currency_id')
        {
    	   return false;
        }
    	
    	//Check fields types
    	if (isset($def['dbType']) && $def['dbType'] == "id")
    	{
            return false;
    	}
    	
    	if (isset($def['type']))
        {
            if ($def['type'] == 'html' || ($def['type'] == 'parent' && !$this->allowParent) 
             || $def['type'] == "id" || $def['type'] == "link" || $def['type'] == 'image')
                return false;
        }

    	//hide currency_id, deleted, and _name fields by key-name
        if(strcmp ( $key, 'deleted' ) == 0 ) {
            return false;
        }

        //if all the tests failed, the field is probably ok
        return true;
    }

    protected function _populateFromRequest ()
    {
        $GLOBALS [ 'log' ]->debug ( get_class ( $this ) . "->populateFromRequest() - fielddefs = ".print_r($this->_fielddefs, true));
        // Transfer across any reserved fields, that is, any where studio !== true, which are not editable but must be preserved
        $newViewdefs = array ( ) ;

        $originalViewDefs = $this->getOriginalViewDefs();

    	foreach ( $this->_viewdefs as $key => $def )
        {
            //If the field is on the layout, but studio disabled, put it back on the layout at the front
        	if (isset ($def['studio']) && (
        		(is_array($def['studio']) && isset($def['studio']['listview']) && 
            		($def['studio']['listview'] === false || strtolower($def['studio']['listview']) == 'false' 
            		|| strtolower($def['studio']['listview']) == 'required')
            	)
         		|| (!is_array($def['studio']) && 
         			($def [ 'studio' ] === false || strtolower($def['studio']) == 'false' || strtolower($def['studio']) == 'required'))
         		))
         	{
                $newViewdefs [ $key ] = $def ;
         	}
        }
        // only take items from group_0 for searchviews (basic_search or advanced_search) and subpanels (which both are missing the Available column) - take group_0, _1 and _2 for all other list views
        $lastGroup = (isset ( $this->columns [ 'LBL_AVAILABLE' ] )) ? 2 : 1 ;

        for ( $i = 0 ; isset ( $_POST [ 'group_' . $i ] ) && $i < $lastGroup ; $i ++ )
        {
            foreach ( $_POST [ 'group_' . $i ] as $fieldname )
            {
                $fieldname = strtolower ( $fieldname ) ;
                //Check if the field was previously on the layout
                if (isset ($this->_viewdefs[$fieldname])) {
                	$newViewdefs [ $fieldname ] = $this->_viewdefs[$fieldname];
                   // print_r($this->_viewdefs[ $fieldname ]);
				}
                //Next check if the original view def contained it
                else if (isset($originalViewDefs[ $fieldname ]))
                {
                	$newViewdefs [ $fieldname ] =  $originalViewDefs[ $fieldname ];
                }
                //create a definition from the fielddefs
                else
                {
	                // if we don't have a valid fieldname then just ignore it and move on...
					if ( ! isset ( $this->_fielddefs [ $fieldname ] ) )
						continue ;

                    $newViewdefs[$fieldname] = self::createViewDefsByFieldDefs($this->_fielddefs[$fieldname], get_class($this));
                }
                if (isset($newViewdefs [ $fieldname ]['enabled']))
                		$newViewdefs [ $fieldname ]['enabled'] = true;

                if (isset ( $_REQUEST [ strtolower ( $fieldname ) . 'width' ] ))
                {
                    $width = substr ( $_REQUEST [ $fieldname . 'width' ], 6, 3 ) ;
                    if (strpos ( $width, "%" ) != false)
                    {
                        $width = substr ( $width, 0, 2 ) ;
                    }
					if (!($width < 101 && $width > 0))
                    {
                        $width = 10;
                    }
                    $newViewdefs [ $fieldname ] [ 'width' ] = $width."%" ;
                } else if (isset ( $this->_viewdefs [ $fieldname ] [ 'width' ] ))
                {
                    $newViewdefs [ $fieldname ] [ 'width' ] = $this->_viewdefs [ $fieldname ] [ 'width' ] ;
                }
                else {
                	$newViewdefs [ $fieldname ] [ 'width' ] = "10%";
                }

                $newViewdefs [ $fieldname ] [ 'default' ] = ($i == 0) ;
            }
        }
        $this->_viewdefs = $newViewdefs ;

    }

    /**
     * Method returns viewDefs by fieldDefs
     *
     * @param array $fieldDefs
     * @return array
     */
    public static function createViewDefsByFieldDefs(array $fieldDefs, $class = __CLASS__)
    {
        $rejectTypes = array(
            'html'=>'html',
            'text'=>'text',
            'encrypt'=>'encrypt'
        );
        $viewDefs = call_user_func(array(
                $class,
                '_trimFieldDefs'
            ), $fieldDefs);

        // fixing bug #25640: Value of "Relate" custom field is not displayed as a link in list view
        // we should set additional params such as 'link' and 'id' to be stored in custom listviewdefs.php
        if (isset($fieldDefs['type']) && $fieldDefs['type'] == 'relate') {
            $viewDefs['id'] = strtoupper($fieldDefs['id_name']);
            $viewDefs['link'] = true;
        }

        // sorting fields of certain types will cause a database engine problems
        if (isset($fieldDefs['type']) && isset($rejectTypes[$fieldDefs['type']])) {
            $viewDefs['sortable'] = false;
        }

        // Bug 23728 - Make adding a currency type field default to setting the 'currency_format' to true
        if (isset($fieldDefs['type']) && $fieldDefs['type'] == 'currency') {
            $viewDefs['currency_format'] = true;
        }

        if ($fieldDefs['type'] == 'parent') {
            $viewDefs['link'] = true;
            $viewDefs['sortable'] = false;
            $viewDefs['ACLTag' ] = 'PARENT';
            $viewDefs['dynamic_module'] = strtoupper($fieldDefs['type_name']);
            $viewDefs['id'] = strtoupper($fieldDefs['id_name']);
            $viewDefs['related_fields'] = array('parent_id', 'parent_type');
        }

        return $viewDefs;
    }

    /*
     * Remove all instances of a field from the layout
     * @param string $fieldName Name of the field to remove
     * @return boolean True if the field was removed; false otherwise
     */
    function removeField ($fieldName)
    {
        if (isset ( $this->_viewdefs [ $fieldName ] ))
        {
            unset( $this->_viewdefs [ $fieldName ] )  ;
            return true ;
        }
        return false ;
    }

    function getOriginalViewDefs() {
    	$defs = $this->implementation->getOriginalViewdefs ();
    	$out = array();
    	foreach ($defs as $field => $def)
    	{
    		$out[strtolower($field)] = $def;
    	}

    	return $out;
    }

   static function _trimFieldDefs ( $def )
	{
		if ( isset ( $def [ 'vname' ] ) )
			$def [ 'label' ] = $def [ 'vname' ] ;
		return array_intersect_key ( $def , array ( 'type' => true, 'studio' => true , 'label' => true , 'width' => true , 'sortable' => true , 'related_fields' => true , 'default' => true , 'link' => true , 'align' => true , 'orderBy' => true ,'hideLabel' => true, 'customLable' => true , 'currency_format' => true ) ) ;
	}

}
