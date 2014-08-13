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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">为您的Sugar实例创建一个应用来从Facebook&#169; 获得一个API键值和应用秘密：<br/><br/><ol><li>去下面的Facebook&#169; 页面来创建应用： <a href=$#39;http://www.facebook.com/developers/createapp.php$#39; target=$#39;_blank$#39;>http://www.facebook.com/developers/createapp.php</a>.</li><li>使用您希望创建应用的帐号来登陆到Facebook&#169;。</li><li>在"Create Application"页面，为这个应用输入一个名字，当用户验证时他们将在Sugar内看到这个名字。</li><li>选择 "Agree" 来同意Facebook&#169;的条款</li><li>Click "Create App"</li><li>输入并提交安全验证语来通过安全检查。</li><li>在您的应用页面，去到 "Web Site" 区域(链接在左手边菜单) 并输入您SugarCRM的本地URL来作为"Site URL."</li><li>点击 "Save Changes"</li><li>去到 "Facebook Integration" 页面(链接在左手边菜单) 并找到API键值和应用密码，输入您的应用ID和应用密码在下方。</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'API键值',
  'oauth_consumer_secret' => '应用密码',
);

