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
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el empleado.',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'El nombre del empleado',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'ya existe.  No se permiten empleados duplicados.  Cambie el nombre del empleado para que sea único.',
  'ERR_LAST_ADMIN_1' => 'El nombre del empleado "',
  'ERR_LAST_ADMIN_2' => '" es el último empleado con permisos de administrador.  Al menos un empleado debe ser un administrador.',
  'LBL_ADDRESS' => 'Dirección:',
  'LBL_ADDRESS_CITY' => 'Ciudad',
  'LBL_ADDRESS_COUNTRY' => 'País',
  'LBL_ADDRESS_INFORMATION' => 'Información de Dirección',
  'LBL_ADDRESS_POSTALCODE' => 'Código Postal',
  'LBL_ADDRESS_STATE' => 'Estado/Provincia',
  'LBL_ADDRESS_STREET' => 'Dirección',
  'LBL_ADMIN' => 'Administrador:',
  'LBL_ANY_ADDRESS' => 'Dirección Alternativa:',
  'LBL_ANY_EMAIL' => 'Email Alternativo:',
  'LBL_ANY_PHONE' => 'Tel. Alternativo:',
  'LBL_AUTHENTICATE_ID' => 'Id Autenticación',
  'LBL_CITY' => 'Ciudad:',
  'LBL_COUNTRY' => 'País:',
  'LBL_CREATED_BY_NAME' => 'Creado por',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Crear Usuario',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Crear Usuario [Alt+N]',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_DATE_ENTERED' => 'Fecha de Creación',
  'LBL_DATE_FORMAT' => 'Formato Fecha:',
  'LBL_DATE_MODIFIED' => 'Fecha de Modificación',
  'LBL_DEFAULT_TEAM' => 'Equipo por Defecto:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Selecciona el equipo por defecto para nuevos registros',
  'LBL_DELETED' => 'Eliminado',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => '¿Está seguro que desea eliminar este Empleado?',
  'LBL_DELETE_USER_CONFIRM' => 'Este Empleado es un Usuario. Eliminando este Empleado también se eliminara el Usuario y el Usuario no podrá seguir accediendo a la aplicación. ¿Desea continuar con la eliminación de este registro?',
  'LBL_DEPARTMENT' => 'Departamento:',
  'LBL_DESCRIPTION' => 'Descripción',
  'LBL_EMAIL' => 'Correo Electrónico:',
  'LBL_EMAIL_ADDRESS' => 'Dirección de Correo',
  'LBL_EMAIL_LINK_TYPE' => 'Cliente de Correo',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Cliente de Correo Sugar:</b> Enviar correos usando el cliente de correo de la aplicación Sugar.<br><b>Cliente de Correo Externo:</b> Enviar correo usando un cliente de correo externo a la aplicación Sugar, como Microsoft Outlook.',
  'LBL_EMPLOYEE' => 'Empleado:',
  'LBL_EMPLOYEE_INFORMATION' => 'Información del Empleado',
  'LBL_EMPLOYEE_NAME' => 'Nombre de Empleado:',
  'LBL_EMPLOYEE_SETTINGS' => 'Preferencias del Empleado',
  'LBL_EMPLOYEE_STATUS' => 'Estado del Empleado:',
  'LBL_ERROR' => 'Error:',
  'LBL_EXT_AUTHENTICATE' => 'Autenticación Externa',
  'LBL_FAVORITE_COLOR' => 'Color Favorito:',
  'LBL_FAX' => 'Fax:',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_FF_CLEAR' => 'Borrar',
  'LBL_FIRST_NAME' => 'Nombre:',
  'LBL_GROUP' => 'Usuario de Grupo',
  'LBL_GROUP_USER' => 'Usuario del Grupo',
  'LBL_HOME_PHONE' => 'Tel. Casa:',
  'LBL_IS_ADMIN' => 'Es Administrador',
  'LBL_LANGUAGE' => 'Idioma:',
  'LBL_LAST_NAME' => 'Apellido:',
  'LBL_LIST_ACCEPT_STATUS' => 'Aceptar Estato',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_LIST_DEPARTMENT' => 'Departamento',
  'LBL_LIST_DESCRIPTION' => 'Descripción',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_EMPLOYEE_NAME' => 'Nombre del Empleado',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Estado del Empleado',
  'LBL_LIST_FORM_TITLE' => 'Empleados',
  'LBL_LIST_LAST_NAME' => 'Apellido',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_PRIMARY_PHONE' => 'Teléfono Principal',
  'LBL_LIST_REPORTS_TO_NAME' => 'Informa a',
  'LBL_LIST_USER_NAME' => 'Nombre de Usuario',
  'LBL_LOGIN' => 'Nombre de Usuario',
  'LBL_MESSENGER_ID' => 'Nombre MI:',
  'LBL_MESSENGER_TYPE' => 'Tipo MI:',
  'LBL_MOBILE_PHONE' => 'Móvil:',
  'LBL_MODIFIED_BY' => 'Modificado Por',
  'LBL_MODIFIED_BY_ID' => 'Modificado por Id',
  'LBL_MODULE_NAME' => 'Empleados',
  'LBL_MODULE_NAME_SINGULAR' => 'Empleado',
  'LBL_MODULE_TITLE' => 'Empleados: Inicio',
  'LBL_MY_TEAMS' => 'Mis Equipos',
  'LBL_NAME' => 'Nombre:',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Nuevo Empleado',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Nuevo Empleado [Alt+N]',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Empleado',
  'LBL_NOTES' => 'Notas:',
  'LBL_OFFICE_PHONE' => 'Tel. Oficina:',
  'LBL_ONLY_ACTIVE' => 'Empleados Activos',
  'LBL_OTHER' => 'Otro:',
  'LBL_OTHER_EMAIL' => 'Email Alternativo:',
  'LBL_OTHER_PHONE' => 'Otro:',
  'LBL_PASSWORD' => 'Contraseña:',
  'LBL_PHOTO' => 'Foto',
  'LBL_PICTURE_FILE' => 'Foto',
  'LBL_PORTAL_ONLY' => 'Usuario Sólo de Portal',
  'LBL_PORTAL_ONLY_USER' => 'Usuario de la API del Portal',
  'LBL_POSTAL_CODE' => 'Código Postal:',
  'LBL_PRIMARY_ADDRESS' => 'Dirección Principal:',
  'LBL_PSW_MODIFIED' => 'Último Cambio de la Contraseña',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notificar al ser Asignado',
  'LBL_REPORTS_TO' => 'Informa a Id:',
  'LBL_REPORTS_TO_NAME' => 'Informa a:',
  'LBL_RESET_PREFERENCES' => 'Restablecer Preferencias Por Defecto',
  'LBL_SAVED_SEARCH' => 'Opciones de Diseño',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Empleados',
  'LBL_SELECT' => 'Seleccionar',
  'LBL_SHOW_ON_EMPLOYEES' => 'Visualización del Registro de Empleados',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_STATUS' => 'Estado',
  'LBL_SUGAR_LOGIN' => 'Es Usuario de Sugar',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Contraseña Generada por el Sistema',
  'LBL_THEME' => 'Tema:',
  'LBL_TIMEZONE' => 'Zona Horaria:',
  'LBL_TIME_FORMAT' => 'Formato Hora:',
  'LBL_TITLE' => 'Título:',
  'LBL_USER_HASH' => 'Contraseña:',
  'LBL_USER_NAME' => 'Nombre de Usuario:',
  'LBL_USER_TYPE' => 'Tipo de Usuario',
  'LBL_WORK_PHONE' => 'Tel. Trabajo:',
  'LNK_EDIT_TABS' => 'Editar Pestañas',
  'LNK_EMPLOYEE_LIST' => 'Ver Empleados',
  'LNK_NEW_EMPLOYEE' => 'Crear Empleado',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => '¿Está seguro de que desea quitar a este empleado del equipo?',
);

