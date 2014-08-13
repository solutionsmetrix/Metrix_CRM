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

	

$mod_strings = array (
  'ERR_FIX_MESSAGES' => '実行する前に以下のエラーを修正してください。',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'バッチごとの送信メール数の値は整数である必要があります',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'このターゲットリストには複数のEメールマーケティングメッセージが設定されています。',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'このターゲットリストのEメールマーケティングメッセージが見つかりません。',
  'ERR_NO_EMAIL_MARKETING' => 'キャンペーンに関連付けた有効なEメールマーケティングメッセージが少なくとも１つ必要です。',
  'ERR_NO_MAILBOX' => '以下のマーケティングメッセージはEメールアカウントと関連付けられていません。<BR>実行前に修正してください。',
  'ERR_NO_OPTS_SAVED' => 'あなたのインバウンドメールアカウントに最適な条件は１つも保存されませんでした。',
  'ERR_NO_TARGET_LISTS' => 'キャンペーンに関連付けたターゲットリストが少なくとも１つ必要です。',
  'ERR_NO_TEST_TARGET_LISTS' => 'キャンペーンに関連付けたテストターゲットリストが少なくとも１つ必要です。',
  'ERR_REVIEW_EMAIL_SETTINGS' => 'インバウンドメール設定を見直してください。',
  'ERR_SENDING_NOW' => 'メッセージを配信中です。後で再度実行してください。',
  'LBL_ACCOUNTS' => '取引先',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
  'LBL_ADD_TARGET' => '追加',
  'LBL_ADD_TRACKER' => 'トラッカー作成',
  'LBL_ALERT' => 'アラート',
  'LBL_ALL_PROSPECT_LISTS' => 'キャンペーンの中のすべてのターゲットリスト',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => '購読ニュースレター',
  'LBL_AMOUNT_IN' => '次の通貨での合計',
  'LBL_ASSIGNED_TO' => 'アサイン先:',
  'LBL_ASSIGNED_TO_ID' => 'アサイン先:',
  'LBL_ASSIGNED_TO_NAME' => 'アサイン先:',
  'LBL_AVALAIBLE_FIELDS_HEADER' => '使用可能なフィールド',
  'LBL_BACK_TO_CAMPAIGNS' => 'キャンペーンに戻る',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'ブロック',
  'LBL_CAMPAIGN' => 'キャンペーン:',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'コスト実績:',
  'LBL_CAMPAIGN_BUDGET' => '予算:',
  'LBL_CAMPAIGN_CONTENT' => '詳細:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'クリックあたりのコスト:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'インプレッションあたりのコスト:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => '残日数',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'キャンペーン診断',
  'LBL_CAMPAIGN_END_DATE' => '終了日:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'コスト見込み:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => '売上見込み:',
  'LBL_CAMPAIGN_FREQUENCY' => '頻度:',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'ページインプレッション:',
  'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => 'キャンペーン &#39;{0}&#39; は&#39;アクティブではない&#39;状態です。 キャンペーンを&#39;アクティブ&#39;に設定してください。',
  'LBL_CAMPAIGN_INFORMATION' => 'キャンペーンの概要',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'リード',
  'LBL_CAMPAIGN_NAME' => '名前:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'キャンペーンを選択して関連付けを行ってください。:',
  'LBL_CAMPAIGN_OBJECTIVE' => '目的:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => '獲得商談:',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => '受信者のアクション別反応',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'キャンペーン対投資効果',
  'LBL_CAMPAIGN_START_DATE' => '開始日:',
  'LBL_CAMPAIGN_STATUS' => 'ステータス:',
  'LBL_CAMPAIGN_TYPE' => 'タイプ:',
  'LBL_CAMPAIGN_WIZARD' => 'キャンペーンウィザード',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'キャンペーンの編集:',
  'LBL_CAMP_MESSAGE_COPY' => 'キャンペーンメッセージのコピーを保存:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'すべてのキャンペーンで送った<bold>すべての</bold>Eメールメッセージについて完全なコピーを保存しますか？<bold>いいえを推奨します。</bold> いいえを選ぶと使用したテンプレートのみが保存され、個々のメッセージは変数によって再生成されます。',
  'LBL_CHARSET_NOTICE' => '注: Web To Leadフォームの<head>セクションに以下の行が含まれていることを確認してください:',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'キャンペーンタイプ',
  'LBL_CHOOSE_NEXT_STEP' => '次のステップを選択してください。',
  'LBL_CONFIRM' => '開始',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => '作業を保存してマーケティングメールに進む',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => '情報を保存して終了しますか？',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'オプションの保存',
  'LBL_CONFIRM_SEND_SAVE' => 'キャンペーンメールを送信するページに移動します。保存して継続しますか？',
  'LBL_CONTACTS' => '取引先担当者',
  'LBL_CONTACT_SUBPANEL_TITLE' => '取引先担当者',
  'LBL_COPY_AND_PASTE_CODE' => 'もしくは以下のHTMLをコピーして既存ページに貼り付けてください。',
  'LBL_COPY_OF' => '複製',
  'LBL_CREATED' => '作成者:',
  'LBL_CREATED_BY' => '作成者:',
  'LBL_CREATED_USER' => '作成者',
  'LBL_CREATE_EMAIL_TEMPLATE' => '作成',
  'LBL_CREATE_MAILBOX' => '新たなメールアカウントを作成',
  'LBL_CREATE_NEWSLETTER' => 'ニュースレター作成',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => '新たなマーケティングメールを作成',
  'LBL_CREATE_TARGET' => '作成',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'Web To Leadフォームを作成',
  'LBL_CURRENCY' => '通貨:',
  'LBL_CURRENCY_ID' => '通貨ID',
  'LBL_CUSTOM_LOCATION' => '選択を許可',
  'LBL_DATE_CREATED' => '作成日:',
  'LBL_DATE_ENTERED' => '作成日',
  'LBL_DATE_LAST_MODIFIED' => '更新日:',
  'LBL_DATE_MODIFIED' => '更新日',
  'LBL_DATE_START' => '実施日',
  'LBL_DAY' => '日',
  'LBL_DEFAULT' => 'すべてのターゲットリスト',
  'LBL_DEFAULT_FROM_ADDR' => 'デフォルト:',
  'LBL_DEFAULT_LEAD_SUBMIT' => '送信',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'エントリがありません',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'エントリが処理されました',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'デフォルトタイプのターゲットリストが見つかりません',
  'LBL_DEFAULT_LOCATION' => '自動生成',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'キャンペーン',
  'LBL_DEFINE_LEAD_HEADER' => 'ヘッダの設定:',
  'LBL_DEFINE_LEAD_POST_URL' => '送信URL:',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'リダイレクトURL:',
  'LBL_DEFINE_LEAD_SUBMIT' => '送信ボタンのラベル:',
  'LBL_DELETE' => 'はずす',
  'LBL_DELETE_INLINE' => '削除',
  'LBL_DESCRIPTION_LEAD_FORM' => '詳細情報の設定:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'このフォームを送信するとキャンペーンに紐付けられたリードが生成されます。',
  'LBL_DIAGNOSTIC' => '分析',
  'LBL_DIAGNOSTIC_WIZARD' => '分析',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Web To Leadフォームをダウンロードしてください。',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Web To Leadフォーム',
  'LBL_DRAG_DROP_COLUMNS' => 'フィールドを第一、第二カラムにドラッグ＆ドロップしてください。',
  'LBL_EDIT_EMAIL_TEMPLATE' => '編集',
  'LBL_EDIT_EXISTING' => 'キャンペーンの編集',
  'LBL_EDIT_INLINE' => '編集',
  'LBL_EDIT_LAYOUT' => 'レイアウト編集',
  'LBL_EDIT_LEAD_POST_URL' => '送信URLを編集？',
  'LBL_EDIT_OPT_OUT' => '解約リンク:',
  'LBL_EDIT_OPT_OUT_' => '解約リンク',
  'LBL_EDIT_TARGET_LIST' => 'ターゲットリストの編集',
  'LBL_EDIT_TRACKER_NAME' => 'トラッカー名:',
  'LBL_EDIT_TRACKER_URL' => 'トラッカーURL:',
  'LBL_ELECTED_TO_OPTOUT' => 'あなたはEメールの受信リストから除かれました。',
  'LBL_EMAIL' => 'Eメール',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'Eメールマーケティング',
  'LBL_EMAILS_PER_RUN' => '１回のバッチで送信されるメール数:',
  'LBL_EMAILS_SCHEDULED' => 'スケジュール済みEメール',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'Eメールキャンペーン',
  'LBL_EMAIL_COMPONENTS' => 'Eメールコンポーネント',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Eメールマーケティング',
  'LBL_EMAIL_SETUP_DESC' => '以下のフォームに入力し、システム設定を更新することでEメールの送信が可能になります。',
  'LBL_EMAIL_SETUP_WIZ' => 'Eメール設定の開始',
  'LBL_EMAIL_SETUP_WIZARD' => 'Eメールの設定',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'キャンペーンメールのセットアップ',
  'LBL_FILTER_CHART_BY' => 'チャートの絞込み:',
  'LBL_FINISH' => '完了',
  'LBL_FROM_ADDR' => '送信元（From）のアドレス',
  'LBL_FROM_MAILBOX_NAME' => '使用受信箱:',
  'LBL_FROM_NAME' => '送信元（From）の名前:',
  'LBL_HOME_START_MESSAGE' => 'キャンペーンのタイプを指定してください。',
  'LBL_IMPORT_PROSPECTS' => 'ターゲットのインポート',
  'LBL_INVALID' => '無効',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => '無効なEメール',
  'LBL_INVITEE' => '取引先担当者',
  'LBL_LEADS' => 'リード',
  'LBL_LEADS_DELETED_SINCE_CREATED' => 'このキャンペーンから作成された{0} リードが削除されました。',
  'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
  'LBL_LEAD_DEFAULT_HEADER' => 'キャンペーン用Web To Leadフォーム',
  'LBL_LEAD_FOOTER' => 'フッタの設定:',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'リードフォーム（第一カラム）',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'リードフォーム（第二カラム）',
  'LBL_LEAD_FORM_WIZARD' => 'リードフォームウィザード',
  'LBL_LEAD_MODULE' => 'リード',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => '関連キャンペーン:',
  'LBL_LEAD_SUBPANEL_TITLE' => 'リード',
  'LBL_LINK_SUBPANEL_TITLE' => 'リンク',
  'LBL_LIST_CAMPAIGN_NAME' => 'キャンペーン',
  'LBL_LIST_END_DATE' => '終了日',
  'LBL_LIST_FORM_TITLE' => 'キャンペーン一覧',
  'LBL_LIST_NAME' => '名前',
  'LBL_LIST_START_DATE' => '開始日',
  'LBL_LIST_STATUS' => 'ステータス',
  'LBL_LIST_TO_ACTIVITY' => 'ステータスを見る',
  'LBL_LIST_TYPE' => 'タイプ',
  'LBL_LOCATION_TRACK' => 'キャンペーントラッキングファイルの場所（例: campaign_tracker.php）',
  'LBL_LOGIN' => 'ユーザ名',
  'LBL_LOG_ENTRIES' => 'ログエントリ',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Eメールアドレスまたはドメインによって抑止',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => '取引先担当者作成済み',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => '送信エラー: 無効アドレス',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'リード作成済み',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'リンクからクリック',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'メール不可',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => '送信エラー: 他',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => '送信実行済み',
  'LBL_LOG_ENTRIES_TITLE' => 'レスポンス',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => '閲覧済み',
  'LBL_MAILBOX' => '監視フォルダ',
  'LBL_MAILBOX_CHECK1_BAD' => 'バウンス処理用のメールアカウントが見つかりません。',
  'LBL_MAILBOX_CHECK1_GOOD' => 'バウンス処理用のメールアカウントが見つかりました:',
  'LBL_MAILBOX_CHECK2_BAD' => 'システムメールアドレスを設定してください。Eメール設定が実施されていないか、設定が正しくありません。',
  'LBL_MAILBOX_CHECK2_GOOD' => 'Eメールの設定が完了しています:',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'バウンス処理用のメールアカウントが検出されませんでした。以下で作成してください。',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'バウンス処理用のメールアカウントが検出されました。新たに作成する必要はありませんが、以下で作成することも可能です。',
  'LBL_MAILBOX_DEFAULT' => '受信箱',
  'LBL_MAILBOX_NAME' => 'メールアカウント名:',
  'LBL_MAIL_SENDTYPE' => 'メール送信エージェント:',
  'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を使用？',
  'LBL_MAIL_SMTPPASS' => 'SMTPパスワード:',
  'LBL_MAIL_SMTPPORT' => 'SMTPポート',
  'LBL_MAIL_SMTPSERVER' => 'SMTPサーバ',
  'LBL_MAIL_SMTPUSER' => 'SMTPユーザ名',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'サブスクリプションの管理',
  'LBL_MARKETING_CHECK1_BAD' => 'Eメールマーケティング用の設定が１つも見つかりませんでした。少なくとも１つは必要です。',
  'LBL_MARKETING_CHECK1_GOOD' => 'Eメールマーケティング用の設定が見つかりました。',
  'LBL_MARKETING_CHECK2_BAD' => 'ターゲットリストが見つかりません。キャンペーン画面から作成する必要があります。',
  'LBL_MARKETING_CHECK2_GOOD' => 'ターゲットリストが見つかりました。',
  'LBL_MARK_AS_SENT' => '送付済みとマーク',
  'LBL_MASS_MAILING_TITLE' => '一括メールオプション',
  'LBL_MESSAGE_FOR' => 'メッセージ宛先:',
  'LBL_MESSAGE_QUEUE_TITLE' => 'メッセージキュー',
  'LBL_MODIFIED' => '更新者:',
  'LBL_MODIFIED_BY' => '更新者:',
  'LBL_MODIFIED_USER' => '更新者',
  'LBL_MODULE_NAME' => 'キャンペーン',
  'LBL_MODULE_NAME_SINGULAR' => 'キャンペーン',
  'LBL_MODULE_TITLE' => 'キャンペーン: ホーム',
  'LBL_MONTH' => '月',
  'LBL_MORE_DETAILS' => '詳細情報',
  'LBL_MRKT_NAME' => '名前',
  'LBL_NAME' => '名前:',
  'LBL_NAVIGATION_MENU_GEN1' => 'キャンペーンヘッダ',
  'LBL_NAVIGATION_MENU_GEN2' => '予算',
  'LBL_NAVIGATION_MENU_MARKETING' => 'マーケティング',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => '新たな受信箱',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Eメール送信',
  'LBL_NAVIGATION_MENU_SETUP' => 'Eメールの設定',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => '購読',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'キャンペーンの概要',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'トラッカー',
  'LBL_NEWSLETTER' => 'ニュースレター',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'ニュースレター:',
  'LBL_NEWSLETTERS' => 'ニュースレター一覧',
  'LBL_NEWSLETTER_FORENTRY' => 'ニュースレター',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'ニュースレター一覧',
  'LBL_NEWSLETTER_TITLE' => 'キャンペーン: ニュースレター',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'ニュースレターの編集:',
  'LBL_NEW_FORM_TITLE' => 'キャンペーン作成',
  'LBL_NO' => 'いいえ',
  'LBL_NONE' => '１つも作成されていません',
  'LBL_NON_ADMIN_ERROR_MSG' => 'この問題を修復するためにはシステム管理者に連絡してください。',
  'LBL_NOTIFY_TITLE' => 'Eメール通知の設定',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => '有効なメールアドレスではありません',
  'LBL_NO_SUBS_ENTRIES_WARNING' => '購読リストに少なくとも1人のエントリが追加されるまでキャンペーンメールを送信することはできません。完了後に追加してください。',
  'LBL_NO_TARGETS_WARNING' => 'キャンペーンに少なくとも1人のターゲットが追加されるまでキャンペーンメールを送信することはできません。',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'ターゲットリストに少なくとも1人のエントリが追加されるまでキャンペーンメールを送信することはできません。完了後に追加してください。',
  'LBL_OPPORTUNITIES' => '商談',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商談',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商談',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Eメール以外のキャンペーン',
  'LBL_PASSWORD' => 'パスワード',
  'LBL_PORT' => 'メールサーバのポート',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'ターゲットリスト',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'ターゲットリスト',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => '必須情報を入力してください。',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_QUEUE_BUTTON_LABEL' => 'Eメール送信',
  'LBL_QUEUE_BUTTON_TITLE' => 'Eメール送信',
  'LBL_RECHECK_BTN' => '再確認',
  'LBL_REFER_URL' => 'リダイレクトURL:',
  'LBL_REMOVE' => 'はずす',
  'LBL_REMOVED_SUBPANEL_TITLE' => '削除済み',
  'LBL_REPLY_ADDR' => '返信先(Reply-To)のアドレス:',
  'LBL_REPLY_NAME' => '返信先(Reply-To)の名前:',
  'LBL_ROI_CHART_BUDGET' => '予算',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => '売上予算',
  'LBL_ROI_CHART_INVESTMENT' => '投資',
  'LBL_ROI_CHART_REVENUE' => '売上',
  'LBL_ROLLOVER_VIEW' => '棒グラフにマウスを重ねると詳細を参照できます。',
  'LBL_SAVED_SEARCH' => 'レイアウトオプション',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => '保存して継続',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => '完了',
  'LBL_SCHEDULER_CHECK1_BAD' => 'キャンペーンメールのバウンス処理を行うスケジュールが設定されていません。',
  'LBL_SCHEDULER_CHECK2_BAD' => 'キャンペーンメールの送信を行うスケジュールが設定されていません。',
  'LBL_SCHEDULER_CHECK_BAD' => 'スケジューラーが見つかりません',
  'LBL_SCHEDULER_CHECK_GOOD' => 'スケジューラーが見つかりました',
  'LBL_SCHEDULER_COMPONENTS' => 'スケジューラーコンポーネント',
  'LBL_SCHEDULER_LINK' => 'スケジューラー管理画面へ進む',
  'LBL_SCHEDULER_NAME' => 'スケジューラー',
  'LBL_SCHEDULER_STATUS' => 'ステータス',
  'LBL_SEARCH_FORM_TITLE' => 'キャンペーン検索',
  'LBL_SELECT_LEAD_FIELDS' => '利用可能フィールドから選択してください。',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => '必要なフィールドを選択してください。:',
  'LBL_SELECT_TARGET' => '既存のターゲットリストの利用',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => '送信エラー',
  'LBL_SEND_AS_TEST' => 'マーケティングメールのテスト送信',
  'LBL_SEND_EMAIL' => 'Eメールのスケジュール',
  'LBL_SERVER_TYPE' => 'メールサーバプロトコル',
  'LBL_SERVER_URL' => '受信メールサーバ',
  'LBL_SSL' => 'SSL利用',
  'LBL_SSL_DESC' => 'メールサーバがSSLをサポートする場合、SSLを利用してメールをインポートします。',
  'LBL_START' => '開始',
  'LBL_START_DATE_TIME' => '開始日時:',
  'LBL_STATUS_TEXT' => 'ステータス:',
  'LBL_SUBSCRIPTION_LIST' => '購読リスト',
  'LBL_SUBSCRIPTION_LIST_NAME' => '購読リスト名:',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'これは、このキャンペーン用の購読タイプのターゲットリストを定義します。<br>このターゲットリストは、このキャンペーン用のEメールを送信するために使用されます。<br>リストを準備しない場合は、空のリストが作成されます。',
  'LBL_SUBSCRIPTION_TYPE_NAME' => '購読',
  'LBL_TARGETED' => 'ターゲット',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'ターゲット先',
  'LBL_TARGET_LIST' => 'ターゲットリスト',
  'LBL_TARGET_LISTS' => 'ターゲットリスト',
  'LBL_TARGET_NAME' => 'ターゲットリスト名',
  'LBL_TARGET_TYPE' => 'ターゲットリストタイプ',
  'LBL_TEAM' => 'チーム:',
  'LBL_TEMPLATE' => 'Eメールテンプレート:',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TEST_BUTTON_LABEL' => 'テスト送信',
  'LBL_TEST_BUTTON_TITLE' => 'テスト送信',
  'LBL_TEST_EMAILS_SENT' => 'テスト送信済み',
  'LBL_TEST_LIST' => 'テストリスト',
  'LBL_TEST_LIST_NAME' => 'テストリスト名:',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'これは、このキャンペーン用のテストタイプのターゲットリストを定義します。<br>このターゲットリストは、このキャンペーン用のテストEメールを送信するために使用されます。<br>リストを準備しない場合は、空のリストが作成されます。',
  'LBL_TEST_TYPE_NAME' => 'テスト',
  'LBL_TIME_START' => '開始時間',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TODETAIL_BUTTON_LABEL' => '詳細を見る',
  'LBL_TODETAIL_BUTTON_TITLE' => '詳細を見る',
  'LBL_TOP_CAMPAIGNS' => 'トップキャンペーン',
  'LBL_TOP_CAMPAIGNS_DESCRIPTION' => '収益トップのキャンペーン',
  'LBL_TOP_CAMPAIGNS_NAME' => 'キャンペーン名',
  'LBL_TOP_CAMPAIGNS_REVENUE' => '売上',
  'LBL_TOTAL_ENTRIES' => 'エントリ',
  'LBL_TOTAL_TARGETED' => 'ターゲットの合計',
  'LBL_TO_WIZARD' => '開始',
  'LBL_TO_WIZARD_TITLE' => 'ウィザードの開始',
  'LBL_TRACKED_URLS' => 'トラッカーURL',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'トラッカーURL',
  'LBL_TRACKERS' => 'トラッカー',
  'LBL_TRACKER_COUNT' => 'トラッカーカウント:',
  'LBL_TRACKER_KEY' => 'トラッカー:',
  'LBL_TRACKER_TEXT' => 'トラッカーリンクテキスト:',
  'LBL_TRACKER_URL' => 'トラッカーURL:',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_TRACK_BUTTON_LABEL' => 'ステータスを見る',
  'LBL_TRACK_BUTTON_TITLE' => 'ステータスを見る',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'テストエントリを削除',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'テストエントリを削除',
  'LBL_TRACK_DELETE_CONFIRM' => 'このオプションによってテスト実行によって作成されたログエントリが削除されます。続けますか？',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'トラックキュー',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'ROIを見る',
  'LBL_UNSUBSCRIBED_HEADER' => '購読解除',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => '購読解除に移動することで、取引先担当者をこのニュースレターの解約リストに追加します。これにより、元の購読リストもしくはターゲットリストから取引先担当者を削除することはありません。',
  'LBL_UNSUBSCRIPTION_LIST' => '解約リスト',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => '解約リスト名:',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'これは、このキャンペーン用の解約タイプのターゲットリストを定義します。<br>このターゲットリストは、このキャンペーンを解約し、Eメールを送信してはならない人の名前を含んでいます。<br>リストを準備しない場合は、空のリストが作成されます。',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => '解約',
  'LBL_USERS_CANNOT_OPTOUT' => 'システムユーザはEメールの受信を拒否できません。',
  'LBL_USE_EXISTING' => '既存リストを使用',
  'LBL_VALID' => '有効',
  'LBL_VIEWED_SUBPANEL_TITLE' => '閲覧済み',
  'LBL_VIEW_INLINE' => '閲覧',
  'LBL_WEB_TO_LEAD' => 'リードフォーム作成',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'リードフォーム作成: フィールドの選択',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'リードフォーム作成: プロパティの設定',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'ROIを計算するための予算を入力してください。',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'これは最初のステップなので前には戻れません。',
  'LBL_WIZARD_HEADER_MESSAGE' => 'キャンペーンを指定するため、必須項目を入力してください。',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'これは最後のステップなので次には進めません。',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'ニュースレターを配信するためのEメールインスタンスを作成するには以下を入力してください。このフォームでいつどのようにニュースレターを配信するかを設定できます。',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'これが最終ステップです。テストメールを送信するかどうかを指定し、配信スケジュールを決めて保存し、概要ページに進んでください。',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => '個々のニュースレターは３つのターゲットリストを持つ必要があります（購読、解約、テスト）。既存のターゲットリストを適用することも可能ですが、リストが存在しない場合は、ニュースレターの保存時に空のリストが作成されます。',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'キャンペーンに使用するターゲットリストを作成または選択してください。このリストはニュースレターを送信する宛先になります。',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'もしくは、以下を使用して新しく作成してください。:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'キャンペーンに使用するトラッカーURLを定義してください。名前とURLの両方を指定する必要があります。',
  'LBL_WIZ_FROM_ADDRESS' => '送信元（From）のアドレス:',
  'LBL_WIZ_FROM_NAME' => '送信元（From）の名前:',
  'LBL_WIZ_MARKETING_TITLE' => 'マーケティングEメール',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'キャンペーンヘッダ',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'キャンペーン予算',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'キャンペーントラッカーURL',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => '購読情報',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'キャンペーンの概要',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Eメール送信',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Eメールテスト',
  'LBL_YEAR' => '年',
  'LBL_YES' => 'はい',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => '以下の理由でキャンペーンが正常に動作せず、メールが送信されない可能性があります。:',
  'LNK_CAMPAIGN_LIST' => 'キャンペーン一覧',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Eメールテンプレート一覧',
  'LNK_NEW_CAMPAIGN' => 'キャンペーン作成（通常）',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Eメールテンプレート作成',
  'LNK_NEW_PROSPECT' => 'ターゲット作成',
  'LNK_NEW_PROSPECT_LIST' => 'ターゲットリスト作成',
  'LNK_PROSPECT_LIST' => 'ターゲット一覧',
  'LNK_PROSPECT_LIST_LIST' => 'ターゲットリスト一覧',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'キャンペーン作成（ウィザード）',
  'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除してよいですか?',
  'NTC_NO_LEGENDS' => 'なし',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'config.phpで設定されたサイトURL',
);

