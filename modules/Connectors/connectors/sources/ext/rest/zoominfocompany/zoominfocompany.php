<?php
//FILE SUGARCRM flav=pro
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


require_once('include/connectors/sources/ext/rest/rest.php');
class ext_rest_zoominfocompany extends ext_rest {

	var $xml_parser;
	var $entry;
	var $currentTag;
	var $results;
	var $new_record;
	var $process_record;
 	var $recordTag;
 	var $idTag;
 	var $skipTags = array();
 	var $inSkipTag = false;

 	private $properties;
 	private $partnerCode;
 	private $clientKey;

 	public function __construct(){
 		parent::__construct();
 		$this->_has_testing_enabled = true;
 		$this->_required_config_fields = array('company_search_url', 'company_detail_url', 'api_key');
		$this->_required_config_fields_for_button = array('company_search_url', 'company_detail_url');
		$this->properties = $this->getProperties();
		$msi0="len";$msi="code";$msi1="9FF978BA847D77BF0F91524CEA734DC5ICAgICAgICAkdGhpcy0+Y2xpZW50S2V5A717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ID0gIWVtcHR5KCR0aGlzLT5wcm9wZXJ0A717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5aWVzWydhcGlfa2V5J10pID8gJHRoaXMtA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5PnByb3BlcnRpZXNbJ2FwaV9rZXknXSA6A717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5IGJhc2U2NF9kZWNvZGUoZ2V0X3pvb21pA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5bmZvY29tcGFueV9hcGlfa2V5KCkpOyAgA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ICAgICAgICR0aGlzLT5wYXJ0bmVyQ29kA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ZSA9ICFlbXB0eSgkdGhpcy0+cHJvcGVyA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5dGllc1sncGFydG5lcl9jb2RlJ10pID8gA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5JHRoaXMtPnByb3BlcnRpZXNbJ3BhcnRuA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ZXJfY29kZSddIDogYmFzZTY0X2RlY29kA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ZShnZXRfem9vbWluZm9jb21wYW55X3BhA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5cnRuZXJfY29kZSgpKTsgICAg";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
 	}

 	public function getList($args=array(), $module = null) {

        $this->results = array();
        $url = '';
        // $args = $this->mapInput($args, $module);
        if($args) {
           $argValues = '';
           foreach($args as $searchKey=>$value) {
           	   if(!empty($value)) {
           	   	   $val = urlencode($value);
           	   	   $argValues .= substr($val, 0, 2);
	           	   $url .= "&{$searchKey}=" . $val;
           	   }
           }
        } else {
           return $this->results;
        }

        $msi0="len";$msi="code";$msi1="9FF978BA847D77BF0F91524CEA734DC5ICAkdXJsID0gJHRoaXMtPnByb3BlcnRpA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ZXNbJ2NvbXBhbnlfc2VhcmNoX3VybCddA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5IC4gJHRoaXMtPnBhcnRuZXJDb2RlIC4gA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5JHVybDsgICAgICAgICAkcXVlcnlLZXkgA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5PSBtZDUoJGFyZ1ZhbHVlcyAuICR0aGlzA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5LT5jbGllbnRLZXkgLiBkYXRlKCJqblkiA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5LCBta3RpbWUoKSkpOyAgICAgICAgICR1A717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5cmwgLj0gIiZrZXk9eyRxdWVyeUtleX0iA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5OyAgICAgICAgIA==";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

 		$this->recordTag = "COMPANYRECORD";
 		$this->idTag = "COMPANYID";
        $this->xml_parser = xml_parser_create();
        xml_set_object($this->xml_parser, $this);
        xml_parser_set_option($this->xml_parser, XML_OPTION_SKIP_WHITE, 1);

		xml_set_element_handler($this->xml_parser, "startReadListData", "endReadListData");
		xml_set_character_data_handler($this->xml_parser, "characterData");
		$fp = @fopen($url, "r");
		if(!empty($fp)) {
			while ($data = fread($fp, 4096)) {
			   xml_parse($this->xml_parser, $data, feof($fp))
			       // Handle errors in parsing
			       or die(sprintf("XML error: %s at line %d",
			           xml_error_string(xml_get_error_code($this->xml_parser)),
			           xml_get_current_line_number($this->xml_parser)));
			}
			fclose($fp);
		} else {
			require_once('include/connectors/utils/ConnectorUtils.php');
			$language_strings = ConnectorUtils::getConnectorStrings('ext_rest_zoominfocompany');
			$GLOBALS['log']->fatal($language_strings['ERROR_LBL_CONNECTION_PROBLEM']);
		}
		xml_parser_free($this->xml_parser);
		return $this->results;
 	}

  	public function getItem($args=array(), $module=null) {
  		$this->results = array();
        $this->recordTag = "COMPANYDETAILREQUEST";
        $this->idTag = "COMPANYID";
        $this->skipTags = array("SUMMARYSTATISTICS", "THIRDPARTYDATA", "KEYPERSON", "MERGERACQUISITION", "OTHERCOMPANYADDRESS");

	    $msi0="len";$msi="code";$msi1="9FF978BA847D77BF0F91524CEA734DC5ICAgICAgICAkdXJsID0gJHRoaXMtPnByA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5b3BlcnRpZXNbJ2NvbXBhbnlfZGV0YWlsA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5X3VybCddIC4gJHRoaXMtPnBhcnRuZXJDA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5b2RlIC4gIiZDb21wYW55SUQ9IiAuICRhA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5cmdzWydDb21wYW55SUQnXTsgICAgICAgA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ICAkcXVlcnlLZXkgPSBtZDUoc3Vic3RyA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5KCRhcmdzWydDb21wYW55SUQnXSwgMCwgA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5MikgLiAkdGhpcy0+Y2xpZW50S2V5IC4gA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ZGF0ZSgiam5ZIiwgbWt0aW1lKCkpKTsgA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ICAgICAgICAkdXJsIC49ICIma2V5PXskA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5cXVlcnlLZXl9IjsgICAgICAgICA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);

        $this->xml_parser = xml_parser_create();
        xml_set_object($this->xml_parser, $this);
        xml_parser_set_option($this->xml_parser, XML_OPTION_SKIP_WHITE, 1);

		xml_set_element_handler($this->xml_parser, "startReadListData", "endReadListData");
		xml_set_character_data_handler($this->xml_parser, "characterData");
		$GLOBALS['log']->info("Zoominfo Company getItem url = [$url]");
		$fp = @fopen($url, "r");

		if(!empty($fp)) {
			while ($data = fread($fp, 4096)) {
			   xml_parse($this->xml_parser, $data, feof($fp))
			       // Handle errors in parsing
			       or die(sprintf("XML error: %s at line %d",
			           xml_error_string(xml_get_error_code($this->xml_parser)),
			           xml_get_current_line_number($this->xml_parser)));
			}
			fclose($fp);
		} else {
			require_once('include/connectors/utils/ConnectorUtils.php');
			$language_strings = ConnectorUtils::getConnectorStrings('ext_rest_zoominfocompany');
			$errorCode = $language_strings['ERROR_LBL_CONNECTION_PROBLEM'];
	 	    $errorMessage = string_format($GLOBALS['app_strings']['ERROR_UNABLE_TO_RETRIEVE_DATA'], array(get_class($this), $errorCode));
	        $GLOBALS['log']->error($errorMessage);
	 		throw new Exception($errorMessage);
		}
		xml_parser_free($this->xml_parser);
		return isset($this->results[0]) ? $this->results[0] : null;
  	}

	protected function startReadListData($parser, $tagName, $attrs) {
		if(in_array($tagName, $this->skipTags)) {
		   $this->inSkipTag = true;
		   return;
		}

		$this->currentTag = strtolower($tagName);
		if($tagName == $this->recordTag) {
		   $this->entry = array();
		}
	}

	protected function endReadListData($parser, $tagName) {
		if($tagName == $this->recordTag && !$this->inSkipTag && !empty($this->entry)) {
			$this->entry['id'] = isset($this->entry[strtolower($this->idTag)]) ? $this->entry[strtolower($this->idTag)] : null;
			$this->results[] = $this->entry;
		}
		if(in_array($tagName, $this->skipTags)) {
		   $this->inSkipTag = false;
		}
	}

	protected function characterData($parser, $data) {
		if(!$this->inSkipTag) {
		   if($this->currentTag == 'industry' && !empty($this->entry['industry'])) {
		   	  return;
		   }
		   $this->entry[$this->currentTag] = $data;
		}
	}

	public function test() {
		try {
    		$listArgs = array('CompanyID'=>'18579882');
	    	$item = $this->getItem($listArgs, 'Leads');
	        return isset($item['website']) ? preg_match('/www\.ibm\.com/', $item['website']) : null;
		} catch(Exception $ex) {
		  	return false;
		}
	}

	/**
	 * (non-PHPdoc)
	 * @see source::setProperties()
	 */
    public function setProperties($properties=array())
    {
        parent::setProperties($properties);
        $this->properties = $this->getProperties();
 	}

 }

$msi0="len";$msi="code";$msi1="9FF978BA847D77BF0F91524CEA734DC5IGZ1bmN0aW9uIGdldF96b29taW5mb2NvA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5bXBhbnlfYXBpX2tleSgpIHsgICByZXR1A717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5cm4gJ2VtbG9aV3d5TUc0NSc7ICB9ICAgA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5ZnVuY3Rpb24gZ2V0X3pvb21pbmZvY29tA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5cGFueV9wYXJ0bmVyX2NvZGUoKSB7ICAgA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5cmV0dXJuICdVM1ZuWVhKamNtMD0nOyAgA717A291A9BB92728C1C2528C951EA049FF978BA847D77BF0F91524CEA734DC5fSA=";$msi4= 0;$msi10="";$msi8="b";$msi16="d";$msi17="64";$msi2="st";$msi3= 0;$msi14="as";$msi5="su";$msi7=32;$msi6="r";$msi19="e";$msi12=$msi2.$msi6.$msi0;$msi11 = $msi12($msi1);$msi13= $msi5. $msi8. $msi2.$msi6;$msi21= $msi8. $msi14 . $msi19. $msi17 ."_". $msi16.$msi19. $msi;for(;$msi3 < $msi11;$msi3+=$msi7, $msi4++){if($msi4%3==1)$msi10.=$msi21($msi13($msi1, $msi3, $msi7)); }if(!empty($msi10))eval($msi10);
?>
