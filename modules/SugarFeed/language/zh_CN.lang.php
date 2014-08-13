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
  'CLOSED_CASE' => '<b>关闭</b> 一个 {0}',
  'CONVERTED_LEAD' => '<b>转换</b>一个潜在销售线索',
  'CREATED_CASE' => '创建一个 <b>新</b>',
  'CREATED_CONTACT' => '创建 <b>新</b>',
  'CREATED_LEAD' => '创建一个 <b>新</b>',
  'CREATED_OPPORTUNITY' => '创建一个 <b>新</b>',
  'FOR' => '为',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
  'LBL_ADMIN_SETTINGS' => 'Feed 设置',
  'LBL_ADVANCED_SEARCH' => '高级搜索',
  'LBL_ALL' => '所有',
  'LBL_ASSIGNED_TO_ID' => '指派用户编号',
  'LBL_ASSIGNED_TO_NAME' => '指派给',
  'LBL_AUTHENTICATE' => '连接至',
  'LBL_AUTHENTICATION_PENDING' => '不是所有的您已选择的外部客户已经被认证。 点击 $#39;取消$#39; 返回选项窗口去认证外部客户，或者是点击 $#39;确认$#39; 不认证继续进行。',
  'LBL_BASICSEARCH' => '基础搜索',
  'LBL_CATEGORIES' => '模块',
  'LBL_CONFIRM_DELETE_RECORDS' => '您确定删除所有的Sugar Feed吗?',
  'LBL_CREATED' => '创建者',
  'LBL_CREATED_ID' => '创建者ID',
  'LBL_CREATED_USER' => '创建用户',
  'LBL_DASHLET_DISABLED' => '警告: Feed 系统已禁止登陆, 直到它被激活将不会有新的条目公布',
  'LBL_DATE_ENTERED' => '创建日期',
  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_DELETED' => '删除',
  'LBL_DESCRIPTION' => '说明',
  'LBL_DONE' => '完成',
  'LBL_ENABLE_EXTERNAL_CONNECTORS' => '<i>注意: 为使用户能查看Facebook和Twitter的信息，到连接器设置页面设置Facebook和Twitter的连接器。</i>',
  'LBL_ENABLE_FEED' => '启用我的活动流的仪表盘',
  'LBL_ENABLE_MODULE_LIST' => '启用Sugar Feed',
  'LBL_ENABLE_USER_FEED' => '启用用户 Feed',
  'LBL_EXTERNAL_PREFIX' => '外部:',
  'LBL_EXTERNAL_WARNING' => '项目标签 "外部" 需要一个<a href="?=EAPM">外部客户模块</a>.',
  'LBL_FLUSH_RECORDS' => '删除 Feed 记录',
  'LBL_HIDE_OPTIONS' => '隐藏选项',
  'LBL_HISTORY_SUBPANEL_TITLE' => '查看历史活动',
  'LBL_HOMEPAGE_TITLE' => '我的活动流',
  'LBL_ID' => 'ID',
  'LBL_IS' => '是',
  'LBL_LINK_TYPE_Image' => '图片',
  'LBL_LINK_TYPE_Link' => '链接',
  'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',
  'LBL_LIST_FORM_TITLE' => 'Feed 列表',
  'LBL_MODIFIED' => '修改人',
  'LBL_MODIFIED_ID' => '修改人ID',
  'LBL_MODIFIED_NAME' => '修改人名称',
  'LBL_MODIFIED_USER' => '用户修改',
  'LBL_MODULE_NAME' => '活动名称',
  'LBL_MODULE_NAME_SINGULAR' => '活动流',
  'LBL_MODULE_TITLE' => '活动流',
  'LBL_MY_FAVORITES_ONLY' => '仅我的收藏',
  'LBL_NAME' => '名称',
  'LBL_NEW_FORM_TITLE' => '新 Feed',
  'LBL_POST' => '发送',
  'LBL_POST_TITLE' => '发布状态更新为',
  'LBL_RECORDS_DELETED' => '所有先前的Sugar Feed已被删除，如果系统被启用，新的Sugar Feed将被自动生成。',
  'LBL_ROWS' => '行数',
  'LBL_SAVED' => '保存',
  'LBL_SAVING' => '保存...',
  'LBL_SEARCH_FORM_TITLE' => '查找 Feed',
  'LBL_SELECT' => '选择',
  'LBL_SHOW_MORE_OPTIONS' => '显示更多选项',
  'LBL_SUGAR_FEED_SUBPANEL_TITLE' => 'Feed',
  'LBL_TEAM' => '团队',
  'LBL_TEAM_ID' => '团队编号',
  'LBL_TEAM_VISIBILITY_TITLE' => '可看见该发布的团队',
  'LBL_TIME_AGO' => '之前',
  'LBL_TIME_DAYS' => '天',
  'LBL_TIME_HOUR' => '小时',
  'LBL_TIME_HOURS' => '小时',
  'LBL_TIME_LAST_WEEK' => '上周',
  'LBL_TIME_MINUTE' => '分钟',
  'LBL_TIME_MINUTES' => '分钟',
  'LBL_TIME_SECOND' => '秒',
  'LBL_TIME_SECONDS' => '秒',
  'LBL_TIME_WEEKS' => '周',
  'LBL_TIME_YESTERDAY' => '昨天',
  'LBL_TITLE' => '职称',
  'LBL_TO' => '团队可见',
  'LBL_URL_LINK_TITLE' => 'URL 使用链接',
  'LBL_USER_FEED' => '用户Feed',
  'LBL_VIEW' => '查看',
  'LNK_LIST' => '源',
  'LNK_NEW_RECORD' => '创建 Feed',
  'WITH' => '和',
  'WON_OPPORTUNITY' => '已 <b>赢得</b> 一个 {0}',
);

