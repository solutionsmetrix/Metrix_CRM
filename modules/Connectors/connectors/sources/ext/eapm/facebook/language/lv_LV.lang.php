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

	

$connector_strings = array (
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Iegūstiet API atslēgu un programmas paroli no Facebook&#169;, izveidojot programmu jūsu Sugar instancei.<br/><br>Lai izveidotu programmu jūsu instancei, jāizpilda sekojoši soļi:<br/><br/><ol><li>Dodieties uz sekojošu Facebook&#169; vietni programmas izveidošanai: <a href="http://www.facebook.com/developers/createapp.php" target="_blank">http://www.facebook.com/developers/createapp.php</a>.</li><li>Piesakieties  Facebook&#169; ar lietotājaa vārdu ar kuru vēlaties veidot programmu.</li><li>"Create Application" lapā ievadiet programmas nosaukumu. Tas būs nosaukums, kuru lietotāji redzēs, kad autentificēs  savu Facebook&#169; kontu Sugar programmā.</li><li>Atzīmējiet "Agree", lai apliecinātu piekrišanu   Facebook&#169; noteikumiem.</li><li>Spiediet "Create App"</li><li>Ievadiet un apstipriniet slepenos vārdus, lai izietu drošības pārbaudi.</li><li>Pieteikuma lapā dodieties uz sadaļu "Web Site"  (saite kreisās puses izvēlnē) un ievadiet Sugar instances lokālo URL parametrā "Site URL."</li><li>Spiediet  "Save Changes"</li><li>Dodieties uz "Facebook Integration" sadaļu (saite kreisās puses izvēlnē) un sameklējiet API atslēgu un programmas paroli. Ievadiet tos Application ID un Application Secret laukos.</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'API atslēga',
  'oauth_consumer_secret' => 'Slepenā atslēga',
);

