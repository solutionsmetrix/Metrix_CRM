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
  'CLOSED_CASE' => '<b>Приключен</b> е казус',
  'CONVERTED_LEAD' => '<b>Преобразуван</b> е потенциален клиент',
  'CREATED_CASE' => 'създаден <b>Нов</b> казус',
  'CREATED_CONTACT' => 'създаден <b>Нов</b> контакт',
  'CREATED_LEAD' => 'създаден <b>Нов</b> потенциален клиент',
  'CREATED_OPPORTUNITY' => 'създадена <b>Нова</b> възможност',
  'FOR' => 'за',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
  'LBL_ADMIN_SETTINGS' => 'Ленти с новини на Sugar',
  'LBL_ADVANCED_SEARCH' => 'Разширено търсене',
  'LBL_ALL' => 'Всички записи',
  'LBL_ASSIGNED_TO_ID' => 'Отговорник',
  'LBL_ASSIGNED_TO_NAME' => 'Отговорник',
  'LBL_AUTHENTICATE' => 'Authenticate',
  'LBL_AUTHENTICATION_PENDING' => 'Не всички маркирани външни потребители са се идентифицирали пред системата. Натиснете &#39;Отмени&#39; за да се върнете в прозореца за идентификация на външните потребители, или натиснете &#39;Ок&#39; за да продължите без идентификация.',
  'LBL_BASICSEARCH' => 'Основно търсене',
  'LBL_CATEGORIES' => 'Модули',
  'LBL_CONFIRM_DELETE_RECORDS' => 'Сигурни ли сте че искате да изтриете всички въведени записи?',
  'LBL_CREATED' => 'Създадено от',
  'LBL_CREATED_ID' => 'Създадено от',
  'LBL_CREATED_USER' => 'Създадено от потребител',
  'LBL_DASHLET_DISABLED' => 'Внимание: Sugar новините са изключени, никакви нови новини няма да бъдат публикувани, докато не бъдат активирани',
  'LBL_DATE_ENTERED' => 'Създадено на',
  'LBL_DATE_MODIFIED' => 'Модифицирано на',
  'LBL_DELETED' => 'Изтрити',
  'LBL_DESCRIPTION' => 'Описание',
  'LBL_DONE' => 'Добави',
  'LBL_ENABLE_EXTERNAL_CONNECTORS' => 'За да разрешите на потребителите да получават новини от Facebook и Twitter, трябва връзките с тези социални мрежи да конфигурирани през секция Параметри на връзките.',
  'LBL_ENABLE_FEED' => 'Давам възможност за Sugar новини',
  'LBL_ENABLE_MODULE_LIST' => 'Активни новини за:',
  'LBL_ENABLE_USER_FEED' => 'Активни новини за потребителя',
  'LBL_EXTERNAL_PREFIX' => 'Външен:',
  'LBL_EXTERNAL_WARNING' => 'Новините маркирани като "външни" изискват външен потребител.',
  'LBL_FLUSH_RECORDS' => 'Изтрий',
  'LBL_HIDE_OPTIONS' => 'Скриване на опции',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
  'LBL_HOMEPAGE_TITLE' => 'Моите ленти с новини',
  'LBL_ID' => 'Идентификатор',
  'LBL_IS' => 'е',
  'LBL_LINK_TYPE_Image' => 'Изображение',
  'LBL_LINK_TYPE_Link' => 'Препратка',
  'LBL_LINK_TYPE_YouTube' => 'YouTube&#153',
  'LBL_LIST_FORM_TITLE' => 'Списък с новини на Sugar',
  'LBL_MODIFIED' => 'Модифицирано от',
  'LBL_MODIFIED_ID' => 'Модифицирано от',
  'LBL_MODIFIED_NAME' => 'Модифицирано от',
  'LBL_MODIFIED_USER' => 'Модифицирано от потребител',
  'LBL_MODULE_NAME' => 'Sugar новини',
  'LBL_MODULE_NAME_SINGULAR' => 'Активност',
  'LBL_MODULE_TITLE' => 'Sugar новини',
  'LBL_MY_FAVORITES_ONLY' => 'Само предпочитаните от мен',
  'LBL_NAME' => 'Име',
  'LBL_NEW_FORM_TITLE' => 'Нова SugarCRM новина',
  'LBL_POST' => 'Публикувай',
  'LBL_POST_TITLE' => 'Post Status Update for',
  'LBL_RECORDS_DELETED' => 'Всички предишни Sugar новини са отстранени, ако Suagr новините се активират то новите ще излязат автоматично.',
  'LBL_ROWS' => 'Редове',
  'LBL_SAVED' => 'Запазено',
  'LBL_SAVING' => 'Запазване...',
  'LBL_SEARCH_FORM_TITLE' => 'Търсене в ленти с новини',
  'LBL_SELECT' => 'Избери',
  'LBL_SHOW_MORE_OPTIONS' => 'Допълнителни опции',
  'LBL_SUGAR_FEED_SUBPANEL_TITLE' => 'Sugar новини',
  'LBL_TEAM' => 'Екип',
  'LBL_TEAM_ID' => 'Екип',
  'LBL_TEAM_VISIBILITY_TITLE' => 'team that can see this post',
  'LBL_TIME_AGO' => 'преди',
  'LBL_TIME_DAYS' => 'Дни',
  'LBL_TIME_HOUR' => 'Часа',
  'LBL_TIME_HOURS' => 'Часа',
  'LBL_TIME_LAST_WEEK' => 'Миналата седмица',
  'LBL_TIME_MINUTE' => 'Минута',
  'LBL_TIME_MINUTES' => 'Минути',
  'LBL_TIME_SECOND' => 'Секунда',
  'LBL_TIME_SECONDS' => 'Секунди',
  'LBL_TIME_WEEKS' => 'Седмици',
  'LBL_TIME_YESTERDAY' => 'Вчера',
  'LBL_TITLE' => 'Заглавие',
  'LBL_TO' => 'Send To',
  'LBL_URL_LINK_TITLE' => 'URL Link to use',
  'LBL_USER_FEED' => 'User Feed',
  'LBL_VIEW' => 'Разгледай',
  'LNK_LIST' => 'Sugar новини',
  'LNK_NEW_RECORD' => 'Създайте Sugar новина',
  'WITH' => 'с',
  'WON_OPPORTUNITY' => '<b>Реализирана</b> е възможност',
);

