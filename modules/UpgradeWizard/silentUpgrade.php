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

function build_argument_string($arguments=array()) {
   if(!is_array($arguments)) {
   	  return '';
   }

   $argument_string = '';
   $count = 0;
   foreach($arguments as $arg) {
   	   if($count != 0)
   	   {
   	   	  //If current directory or parent directory is specified, substitute with full path
   	   	  if($arg == '.')
   	   	  {
   	   	  	 $arg = getcwd();
   	   	  } else if ($arg == '..') {
   	   	  	 $dir = getcwd();
			 $arg = substr($dir, 0, strrpos($dir, DIRECTORY_SEPARATOR));
   	   	  }
          $argument_string .= ' ' . escapeshellarg($arg);
   	   }
   	   $count++;
   }

   return $argument_string;
}

//Bug 52872. Dies if the request does not come from CLI.
$sapi_type = php_sapi_name();
if (substr($sapi_type, 0, 3) != 'cli') {
    die("This is command-line only script");
}
//End of #52872

$php_path = '';
$run_dce_upgrade = false;
if(isset($argv[3]) && is_dir($argv[3]) && file_exists($argv[3]."/ini_setup.php")) {
                //this is a dce call, set the dce flag
                chdir($argv[3]);
                $run_dce_upgrade = true;
                //set the php path if found
                if(is_file($argv[7].'dce_config.php')){
                   include($argv[7].'dce_config.php');
                   $php_path = $dce_config['client_php_path'].'/';
                }
}

$php_file = $argv[0];
$p_info = pathinfo($php_file);
$php_dir = (isset($p_info['dirname']) && $p_info['dirname'] != '.') ?  $p_info['dirname'] . '/' : '';

$step1 = $php_path."php -f {$php_dir}silentUpgrade_step1.php " . build_argument_string($argv);
passthru($step1, $output);
if($output != 0) {
    echo "***************         step1 failed         ***************: $output\n";
}
$has_error = $output == 0 ? false : true;

if(!$has_error) {
	if($run_dce_upgrade) {
		$step2 = $php_path."php -f {$php_dir}silentUpgrade_dce_step1.php " . build_argument_string($argv);
		passthru($step2, $output);
	} else {
		$step2 = "php -f {$php_dir}silentUpgrade_step2.php " . build_argument_string($argv);
		passthru($step2, $output);
	}
}

if($run_dce_upgrade) {
	$has_error = $output == 0 ? false : true;
	if(!$has_error) {
	   $step3 = $php_path."php -f {$php_dir}silentUpgrade_dce_step2.php " . build_argument_string($argv);
	   passthru($step3, $output);
	}
}

if($output != 0) {
   echo "***************         silentupgrade failed         ***************: $output\n";
}
exit($output);
?>
