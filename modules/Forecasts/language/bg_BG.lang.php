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
  'ERR_FORECAST_AMOUNT' => 'При потвърждение сумата е задължителна и следва да е число.',
  'LBL_ACTIONS' => 'Действия',
  'LBL_AMOUNT' => 'Сума',
  'LBL_BASE_RATE' => 'Base Rate',
  'LBL_BEST_CASE' => 'Оптимистичен сценарий:',
  'LBL_BEST_CASE_BASE_CURRENCY' => 'Базова валута на най-добрия сценарий',
  'LBL_BEST_CASE_VALUE' => 'Най-добър сценарий (Коригиран)',
  'LBL_CANCEL' => 'Отмени',
  'LBL_CHANGES_BY' => 'Промени от {0}',
  'LBL_CHART_ADJUSTED' => '(Коригирано)',
  'LBL_CHART_AMOUNT' => 'Сума',
  'LBL_CHART_FOOTER' => 'История на прогнозите<br/>Квота / Прогнозирана сума / Стойност на сключени сделки',
  'LBL_CHART_FORECAST_FOR' => 'Прогноза за {0}',
  'LBL_CHART_INCLUDED' => 'Включени',
  'LBL_CHART_NOT_INCLUDED' => 'Изключени',
  'LBL_CHART_OPTIONS' => 'Опции на графиката',
  'LBL_CHART_TITLE' => 'Квота / Прогноза / Реално',
  'LBL_CHART_TYPE' => 'Тип',
  'LBL_CLOSED' => 'Затворен',
  'LBL_COMMITTED_HISTORY_1_SHOWN' => '{0} {1}',
  'LBL_COMMITTED_HISTORY_2_SHOWN' => '{0} {1}, {2}',
  'LBL_COMMITTED_HISTORY_3_SHOWN' => '{0} {1}, {2}, и {3}',
  'LBL_COMMITTED_HISTORY_BEST_CHANGED' => 'best {0} {1} to {2}',
  'LBL_COMMITTED_HISTORY_BEST_SAME' => 'в най-добрия случай ще остане същата',
  'LBL_COMMITTED_HISTORY_LIKELY_CHANGED' => 'likely {0} {1} to {2}',
  'LBL_COMMITTED_HISTORY_LIKELY_SAME' => 'вероятно ще остане същата',
  'LBL_COMMITTED_HISTORY_SETUP_FORECAST' => 'Настройка на прогнозите',
  'LBL_COMMITTED_HISTORY_UPDATED_FORECAST' => 'Актуализирана прогноза',
  'LBL_COMMITTED_HISTORY_WORST_CHANGED' => 'worst {0} {1} to {2}',
  'LBL_COMMITTED_HISTORY_WORST_SAME' => 'в най-лошия случай ще остане същата',
  'LBL_COMMITTED_MONTHS_AGO' => 'преди {0} месеца на {1}',
  'LBL_COMMITTED_THIS_MONTH' => 'Този месец на {0}',
  'LBL_COMMIT_AMOUNT' => 'Sum of Committed values.',
  'LBL_COMMIT_HEADER' => 'Forecast Commit',
  'LBL_COMMIT_MESSAGE' => 'Искате ли да потвърдите тези суми?',
  'LBL_COMMIT_NOTE' => 'Въведете суми, които да зададете като прогноза за избран период:',
  'LBL_COMMIT_STAGE' => 'Commit Stage',
  'LBL_COPY' => 'Copy Values',
  'LBL_COPY_AMOUNT' => 'Total amount',
  'LBL_COPY_FROM' => 'Copy value from:',
  'LBL_COPY_WEIGH_AMOUNT' => 'Total weighted amount',
  'LBL_CREATED_BY' => 'Създадено от',
  'LBL_CURRENCY' => 'Валута',
  'LBL_CURRENCY_ID' => 'Идентификатор на валутата',
  'LBL_CURRENCY_RATE' => 'Валутен курс',
  'LBL_DATA_SET' => 'Данни',
  'LBL_DATE_CLOSED' => 'Дата на финализиране',
  'LBL_DATE_COMMITTED' => 'Направена на',
  'LBL_DATE_ENTERED' => 'Въведено на',
  'LBL_DATE_MODIFIED' => 'Модифицирано на',
  'LBL_DELETED' => 'Изтрити',
  'LBL_DISTANCE_ABOVE_BEST_FROM_CLOSED' => 'Best above Closed',
  'LBL_DISTANCE_ABOVE_BEST_FROM_QUOTA' => 'Best above Quota',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_CLOSED' => 'Likely above Closed',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_QUOTA' => 'Вероятно над определената квота',
  'LBL_DISTANCE_ABOVE_WORST_FROM_CLOSED' => 'Worst above Closed',
  'LBL_DISTANCE_ABOVE_WORST_FROM_QUOTA' => 'Worst above Quota',
  'LBL_DISTANCE_LEFT_BEST_TO_CLOSED' => 'Best below Closed',
  'LBL_DISTANCE_LEFT_BEST_TO_QUOTA' => 'Best below Quota',
  'LBL_DISTANCE_LEFT_LIKELY_TO_CLOSED' => 'Likely below Closed',
  'LBL_DISTANCE_LEFT_LIKELY_TO_QUOTA' => 'Вероятно под определената квота',
  'LBL_DISTANCE_LEFT_WORST_TO_CLOSED' => 'Worst below Closed',
  'LBL_DISTANCE_LEFT_WORST_TO_QUOTA' => 'Worst below Quota',
  'LBL_DOWN' => 'надолу',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Прогнозирани възможности',
  'LBL_DV_FORECAST_PERIOD' => 'Период',
  'LBL_DV_FORECAST_ROLLUP' => 'Forecast Rollup',
  'LBL_DV_HEADER' => 'Планиране',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Last Commit Amounts:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Потвърдена на:',
  'LBL_DV_MY_FORECASTS' => 'Моите прогнози',
  'LBL_DV_MY_TEAM' => 'Прогнози на моят екип',
  'LBL_DV_TIMEPERIOD' => 'Период:',
  'LBL_DV_TIMEPERIODS' => 'Периоди:',
  'LBL_DV_TIMPERIOD_DATES' => 'Date Range:',
  'LBL_EDITABLE_INVALID' => 'Невалидна стойност за {0}',
  'LBL_EDITABLE_INVALID_RANGE' => 'Стойността трябва да бъде между {0} и {1}',
  'LBL_ERROR_NOT_MANAGER' => 'Грешка: потребителят {0} няма мениджърски права да изисква прогнози за {1}',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Очаквани възможности',
  'LBL_EXPORT_CSV' => 'Експортирай в CSV формат',
  'LBL_FC_START_DATE' => 'Начална дата',
  'LBL_FC_USER' => 'Планиране за',
  'LBL_FDR_ADJ_AMOUNT' => 'Adjusted Amount',
  'LBL_FDR_COMMIT' => 'Прогнозирани суми',
  'LBL_FDR_C_BEST_CASE' => 'Оптимистичен сценарий',
  'LBL_FDR_C_LIKELY_CASE' => 'Вероятен сценарий',
  'LBL_FDR_C_WORST_CASE' => 'Песимистичен сценарий',
  'LBL_FDR_DATE_COMMIT' => 'Дата',
  'LBL_FDR_OPPORTUNITIES' => 'Прогнозирани възможности:',
  'LBL_FDR_USER_NAME' => 'Потребител',
  'LBL_FDR_WEIGH' => 'Претеглена стойност на възможностите:',
  'LBL_FDR_WK_BEST_CASE' => 'Оптимистичен сценарий (∑)',
  'LBL_FDR_WK_LIKELY_CASE' => 'Вероятен сценарий (∑)',
  'LBL_FDR_WK_WORST_CASE' => 'Песимистичен сценарий (∑)',
  'LBL_FILTERS' => 'Филтри',
  'LBL_FMT_DIRECT_FORECAST' => '(Direct)',
  'LBL_FMT_ROLLUP_FORECAST' => '(Rollup)',
  'LBL_FORECAST' => 'Прогноза',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_1' => 'Добре дошли в настройката на модул Прогнози',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_2' => 'This wizard will guide you through the step-by-step setup of the Forecasts module. Default values are provided for each section, so you&#39;ll be on your way in no time!',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_3' => 'You can also do manual setup by clicking',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_RANGES' => 'Ranges',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_SCENARIOS' => 'Сценарии',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_TIMEPERIODS' => 'Периоди',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_VARIABLES' => 'Променливи',
  'LBL_FORECASTS_CONFIG_LEAFPERIOD' => 'Choose the sub period that you want to view your time period over:',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS' => 'Show projected scenarios in the totals',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_BEST' => 'Show Best Case Totals',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_LIKELY' => 'Show Likely Case Totals',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_WORST' => 'Show Worst Case Totals',
  'LBL_FORECASTS_CONFIG_RANGES' => 'Forecast Range Options:',
  'LBL_FORECASTS_CONFIG_RANGES_EXCLUDE_INFO' => 'Всички останали възможноси ще бъдат изключени.',
  'LBL_FORECASTS_CONFIG_RANGES_OPTIONS' => 'Configure default probability Ranges for opportunities in the forecast.',
  'LBL_FORECASTS_CONFIG_RANGES_SETUP_NOTICE' => 'Range settings cannot be changed after first save draft or commit in the Forecasts module. For an upgraded instance however, Range settings cannot be changed after the initial setup as the Forecasts data is already available through the upgrade.',
  'LBL_FORECASTS_CONFIG_SHOW_BINARY_RANGES_DESCRIPTION' => 'Възможности могат да бъдат включвани или изключвани от прогнозата.',
  'LBL_FORECASTS_CONFIG_SHOW_BUCKETS_RANGES_DESCRIPTION' => 'Opportunities can be tagged as Include, Upside, or Exclude in the forecast. Upside is not included in forecasts by default, but allows users to further classify the excluded opportunities based on likelihood to close.',
  'LBL_FORECASTS_CONFIG_SHOW_CUSTOM_BUCKETS_RANGES' => 'Custom Ranges: This option gives a user the ability to categorize their opportunities to be committed into the forecast into a committed range, excluded range and any others that you setup.',
  'LBL_FORECASTS_CONFIG_START_DATE' => 'Изберете начална дата на финансовата година',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD' => 'Choose the type of Time Period',
  'LBL_FORECASTS_CONFIG_TIMEPERIODS_BACKWARD' => 'Choose the number of past Time Periods to view in the worksheet.<br><i>This number applies to the base Time Period selected. For example, choosing 2 with Monthly Time Period will show 6 past Months</i>',
  'LBL_FORECASTS_CONFIG_TIMEPERIODS_FORWARD' => 'Choose the number of future Time Periods to view in the worksheet.<br><i>This number applies to the base Time Period selected. For example, choosing 2 with Yearly Time Period will show 8 future Quarters</i>',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_DESC' => 'Configure the Time Periods used for forecasting.',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_SETUP_NOTICE' => 'Time Period settings cannot be changed after initial setup.',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_TYPE' => 'Select the type of year your organization uses for accounting.',
  'LBL_FORECASTS_CONFIG_TITLE' => 'Настройка на прогнозите',
  'LBL_FORECASTS_CONFIG_USER_SPLASH' => 'Модул прогнози не е конфигуриран. Моля свържете се със системния администратор.',
  'LBL_FORECASTS_CONFIG_VARIABLES' => 'Променливи',
  'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_LOST_STAGE' => 'Please select the Sales Stage that represent closed and lost opportunities:',
  'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_WON_STAGE' => 'Please select the Sales Stage that represent closed and won opportunities:',
  'LBL_FORECASTS_CONFIG_VARIABLES_DESC' => 'The formulas for the Metrics Table rely on the sales stage for opportunities that need to be excluded from the pipleline, i.e., opportunities that are closed and lost.',
  'LBL_FORECASTS_CONFIG_VARIABLES_FORMULA_DESC' => 'Therefore the pipeline formula will be:',
  'LBL_FORECASTS_CONFIG_WORKSHEET_LIKELY_INFO' => 'Likely is based on the amount entered in the Opportunities module.',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS' => 'Choose the Scenarios to include on the forecasting worksheet.',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST' => 'На-добър',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY' => 'Вероятен',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST' => 'Най-лош',
  'LBL_FORECASTS_TABBED_CONFIG_SUCCESS_MESSAGE' => 'The setting has been saved. Please wait while the module reloads.',
  'LBL_FORECASTS_WIZARD_REFRESH_NOTICE' => 'This is your first time using the Forecasts module and your Opportunities need to be loaded. This process may take a few minutes and you may need to refresh the page.',
  'LBL_FORECASTS_WIZARD_SUCCESS_MESSAGE' => 'Вие успешно конфигурирахте модула Прогнози. Моля изчакайте докато модулът се зарежда.',
  'LBL_FORECASTS_WIZARD_SUCCESS_TITLE' => 'Успех:',
  'LBL_FORECAST_FOR' => 'Forecast Worksheet for:',
  'LBL_FORECAST_HISTORY' => 'Направени прогнози',
  'LBL_FORECAST_HISTORY_TITLE' => 'История',
  'LBL_FORECAST_ID' => 'Идентификатор',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Оптимистичен сценарий',
  'LBL_FORECAST_OPP_COMMIT' => 'Вероятен сценарий',
  'LBL_FORECAST_OPP_COUNT' => 'Възможности',
  'LBL_FORECAST_OPP_WEIGH' => 'Претеглена сума',
  'LBL_FORECAST_OPP_WORST' => 'Песимистичен сценарий',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Брой на текущите възможности',
  'LBL_FORECAST_SETTINGS' => 'Настройки',
  'LBL_FORECAST_TIME_ID' => 'Период',
  'LBL_FORECAST_TITLE' => 'Прогноза: {0}',
  'LBL_FORECAST_TYPE' => 'Тип',
  'LBL_FORECAST_USER' => 'Потребител',
  'LBL_FS_CASCADE' => 'Cascade?',
  'LBL_FS_CREATED_BY' => 'Създадено от',
  'LBL_FS_DATE_ENTERED' => 'Въведено на',
  'LBL_FS_DATE_MODIFIED' => 'Модифицирано на',
  'LBL_FS_DELETED' => 'Изтрити',
  'LBL_FS_END_DATE' => 'Крайна дата',
  'LBL_FS_FORECAST_FOR' => 'Планиране за:',
  'LBL_FS_FORECAST_START_DATE' => 'Начална дата',
  'LBL_FS_MODULE_NAME' => 'Планиране',
  'LBL_FS_START_DATE' => 'Начална дата',
  'LBL_FS_STATUS' => 'Статус',
  'LBL_FS_TIMEPERIOD' => 'Период',
  'LBL_FS_TIMEPERIOD_ID' => 'Период',
  'LBL_FS_USER_ID' => 'Потребител',
  'LBL_GRAPH_COMMIT_ALTTEXT' => 'Потвърдена сума за  %s',
  'LBL_GRAPH_COMMIT_LEGEND' => 'Направени прогнози',
  'LBL_GRAPH_OPPS_ALTTEXT' => 'Стойност на сключените сделки в  %s',
  'LBL_GRAPH_OPPS_LEGEND' => 'Сключени сделки',
  'LBL_GRAPH_QUOTA_ALTTEXT' => 'Квота за %s',
  'LBL_GRAPH_QUOTA_LEGEND' => 'Квоти',
  'LBL_GRAPH_TITLE' => 'Направени прогнози',
  'LBL_GROUP_BY' => 'Групиране по',
  'LBL_INCLUDED_TOTAL' => 'Included Total',
  'LBL_LESS' => 'Свии',
  'LBL_LIKELY_CASE' => 'Вероятен сценарий:',
  'LBL_LIKELY_CASE_BASE_CURRENCY' => 'Базова валута на вероятния сценарий',
  'LBL_LIKELY_CASE_VALUE' => 'Вероятен сценарий (Коригиран)',
  'LBL_LIST_FORM_TITLE' => 'Прогнози',
  'LBL_LOADING' => 'Зарежда',
  'LBL_LOADING_COMMIT_HISTORY' => 'Зареждане на история на прогнозите...',
  'LBL_LV_COMMIT' => 'Прогнозирани суми',
  'LBL_LV_COMMIT_DATE' => 'Направена на',
  'LBL_LV_OPPORTUNITIES' => 'Възможности',
  'LBL_LV_TIMPERIOD' => 'Период',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Крайна дата',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Начална дата',
  'LBL_LV_TYPE' => 'Тип',
  'LBL_LV_WEIGH' => 'Претеглена сума',
  'LBL_MODIFIED_USER_ID' => 'Модифицирано от',
  'LBL_MODULE_NAME' => 'Прогнози',
  'LBL_MODULE_NAME_SINGULAR' => 'Прогноза',
  'LBL_MODULE_TITLE' => 'Прогнози',
  'LBL_MORE' => 'Още',
  'LBL_MY_OPPORTUNITIES' => 'Възможности ({0})',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Не са намерени активни периоди за модул прогнози.',
  'LBL_OVERALL_TOTAL' => 'Overall Total',
  'LBL_OW_ACCOUNTNAME' => 'Организация',
  'LBL_OW_DESCRIPTION' => 'Описание',
  'LBL_OW_MODULE_TITLE' => 'Opportunity Worksheet',
  'LBL_OW_NEXT_STEP' => 'Следваща стъпка',
  'LBL_OW_OPPORTUNITIES' => 'Свързан с възможност:',
  'LBL_OW_PROBABILITY' => 'Вероятност',
  'LBL_OW_REVENUE' => 'Сума',
  'LBL_OW_TYPE' => 'Тип',
  'LBL_OW_WEIGHTED' => 'Претеглена сума',
  'LBL_PIPELINE_OPPORTUNITIES' => 'Текущи възможности',
  'LBL_PIPELINE_REVENUE' => 'Постъпления от текущите възможности',
  'LBL_PIPELINE_SIZE' => 'Обем на текущите възможности',
  'LBL_PREVIOUS_COMMIT' => 'Последна актуализация на прогнозата:',
  'LBL_PRODUCT_ID' => 'Идентификатор на продукта',
  'LBL_PROJECTED' => 'Projected',
  'LBL_QC_COMMIT_BEST_CASE' => 'Commit Amount (Best Case):',
  'LBL_QC_COMMIT_BUTTON' => 'Потвърди',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Commit Amount (Likely Case):',
  'LBL_QC_COMMIT_VALUE' => 'Изпрати сума:',
  'LBL_QC_COMMIT_WORST_CASE' => 'Commit Amount (Worst Case):',
  'LBL_QC_DIRECT_FORECAST' => 'Моите директни прогнози:',
  'LBL_QC_HEADER_DELIM' => 'До',
  'LBL_QC_LAST_BEST_CASE' => 'Last Commit Amount (Best Case):',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Последно изпратена сума:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Потвърдена на:',
  'LBL_QC_LAST_LIKELY_CASE' => 'Last Commit Amount (Likely Case):',
  'LBL_QC_LAST_WORST_CASE' => 'Last Commit Amount (Worst Case):',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Брой възможности:',
  'LBL_QC_ROLLUP_FORECAST' => 'Моите групови прогнози:',
  'LBL_QC_ROLL_BEST_VALUE' => 'Rollup Commit Amount (Best Case):',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Rollup Commit Amount:',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Rollup Commit Amount (Likely Case):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Rollup Commit Amount (Worst Case):',
  'LBL_QC_TIME_PERIOD' => 'Период:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Моите прогнози',
  'LBL_QC_WEIGHT_VALUE' => 'Претеглена сума:',
  'LBL_QC_WORKSHEET_BUTTON' => 'План',
  'LBL_QUOTA' => 'Квота',
  'LBL_QUOTA_ID' => 'Идентификатор на квотата',
  'LBL_REPORTS_TO_USER_NAME' => 'Докладва на',
  'LBL_RESET_CHECK' => 'Всички данни за избрания период на текущия потребител ще бъдат изтрити. Желаете ли да продължите?',
  'LBL_RESET_WOKSHEET' => 'Изтрий плана',
  'LBL_REVENUE' => 'Приход',
  'LBL_SALES_STAGE' => 'Етап',
  'LBL_SAVE_DRAFT' => 'Запис като чернова',
  'LBL_SAVE_WOKSHEET' => 'Запази плана',
  'LBL_SEARCH' => 'Избери',
  'LBL_SEARCH_LABEL' => 'Избери',
  'LBL_SHOW_CHART' => 'Графика',
  'LBL_SVFS_CASCADE' => 'Обвържи с модул "Справки"?',
  'LBL_SVFS_FORECASTDATE' => 'Начална дата',
  'LBL_SVFS_HEADER' => 'График на прогнозите:',
  'LBL_SVFS_STATUS' => 'Статус',
  'LBL_SVFS_USER' => 'За',
  'LBL_TIMEPERIOD_NAME' => 'Период',
  'LBL_TOTAL' => 'Общо',
  'LBL_TOTAL_VALUE' => 'Totals:',
  'LBL_TP_QUOTA' => 'Цел:',
  'LBL_TREE_PARENT' => 'Parent',
  'LBL_UNAUTH_FORECASTS' => 'Неразрешен достъп до настройките на модул Прогнози.',
  'LBL_UP' => 'нагоре',
  'LBL_USER_NAME' => 'Потребител',
  'LBL_VERSION' => 'Версия',
  'LBL_WK_REVISION' => 'Ревизия',
  'LBL_WK_VERSION' => 'Версия',
  'LBL_WORKSHEET_AMOUNT' => 'Total estimated Amounts',
  'LBL_WORKSHEET_COMMIT_ALERT' => 'You have committed your Rep view, but not your Manager view; the team&#39;s forecast will not be committed until your Manager view is committed.',
  'LBL_WORKSHEET_COMMIT_CONFIRM' => 'You have saved changes that have not been committed in the rep view. The saved changes will not be visible in the Manager view until you commit.<br>Press OK to commit the changes and continue, or Cancel to not commit the changes and continue.',
  'LBL_WORKSHEET_EXPORT_CONFIRM' => 'Please note that only saved or committed data can be exported. Click OK to continue exporting, or click Cancel to return to the worksheet.',
  'LBL_WORKSHEET_ID' => 'Идентификатор на плана',
  'LBL_WORKSHEET_SAVE_CONFIRM' => 'Има промени във вашия план, които не са запазени. Натиснете ОК, за да запазите промените и да продължите или Откажи, за да продулжите без да запазвате промените',
  'LBL_WORKSHEET_SAVE_CONFIRM_UNLOAD' => 'Имате промени в плана, които не са запазени.',
  'LBL_WORST_CASE' => 'Песимистичен сценарий:',
  'LBL_WORST_CASE_BASE_CURRENCY' => 'Базова валута на най-лошия сценарий',
  'LBL_WORST_CASE_VALUE' => 'Най-лош сценарий (Коригиран)',
  'LB_FS_BEST_CASE' => 'Оптимистичен сценарий',
  'LB_FS_KEY' => 'Идентификатор',
  'LB_FS_LIKELY_CASE' => 'Вероятен сценарий',
  'LB_FS_WORST_CASE' => 'Песимистичен сценарий',
  'LNK_FORECASTS_CONFIG_ADMIN_SPLASH_HERE' => 'тук.',
  'LNK_FORECAST_LIST' => 'Направени прогнози',
  'LNK_NEW_OPPORTUNITY' => 'Създаване на възможност',
  'LNK_NEW_TIMEPERIOD' => 'Създаване на период',
  'LNK_QUOTA' => 'Цели',
  'LNK_TIMEPERIOD_LIST' => 'Периоди',
  'LNK_UPD_FORECAST' => 'Прогнозиране',
);

