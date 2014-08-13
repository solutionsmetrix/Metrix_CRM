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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Facebook&#169;でSugarインスタンス用のアプリを作成するためにAPIキーとAppシークレットを取得します。<br/><br/>取得方法は以下の通りです。<br/><br/><ol><li>アプリケーションを作成するためにFacebook&#169;の以下のページにアクセスしてください。: <a href=&\'http://www.facebook.com/developers/createapp.php\' target=\'_blank\'>http://www.facebook.com/developers/createapp.php</a></li><li>アプリを生成するアカウントでFacebook&#169;にサインインしてください。</li><li>アプリの生成ページでアプリの名称を入力してください。これは、Sugar内部でFacebook&#169;アカウントを認証する際にユーザが使用する名前です。</li><li>Facebook&#169;利用規約に同意してください。</li><li>「アプリの生成」をクリックしてください。</li><li>セキュリティチェックに使用するセキュリティワードを入力してください。</li><li>登録ページで「ウェブサイト」（左側のメニュー）に進み、「サイトURL」にローカルURLまたはSugarインスタンスのURLを入力してください。</li><li>「変更を保存」をクリックしてください。</li><li>「Facebookインテグレーション」（左側のメニュー）に進み、APIキーとシークレットを確認してください。アプリケーションIDとシークレットを以下に入力してください。</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'APIキー',
  'oauth_consumer_secret' => 'Appシークレット',
);

