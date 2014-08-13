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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Obtener una clave de API y el código secreto de Facebook&#169; para crear una aplicación en la instancia de Sugar.<br/><br>Pasos para crear una aplicación para la instancia:<br/><br/><ol><li>Ir a la siguiente URL de Facebook&#169; para crear la aplicación: <a href="http://www.facebook.com/developers/createapp.php" target="_blank">http://www.facebook.com/developers/createapp.php</a>.</li><li>Iniciar sesión en Facebook&#169; utilizando la cuenta con la que desea crear la aplicación.</li><li>Dentro de la "creación de aplicaciones" de la página, escriba un nombre para la aplicación. Este es el nombre que verán los usuarios cuando se autentican las cuentas de Facebook&#169; dentro de Sugar.</li><li>Seleccione "Aceptar" para aceptar los términos Facebook&#169;.</li><li>Haz clic en "Crear aplicación"</li><li>Introducir y enviar las palabras de seguridad para pasar los controles de seguridad.</li><li>Dentro de la página de su solicitud, vaya a la zona "Web"(enlace en el menú de la izquierda) e introduzca la URL local de la instancia de Sugar para "URL del sitio."</li><li>Haz clic en "Guardar cambios"</li><li>Ir a la pagina de  "Intragración de Facebook" (enlace en el menú de la izquierda) y encontra la clave del API y el código secreto de la aplicación. Introduzca el identificador de la aplicación y el código secreto de la aplicación a continuación.</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'Clave API',
  'oauth_consumer_secret' => 'Código secreto',
);

