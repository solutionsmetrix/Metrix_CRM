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
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Obter uma Chave API e um Segredo da App através do Facebook&#169; criando uma aplicação para a sua instância do Sugar.<br/><br>Passos para criar uma aplicação para a sua instância:<br/><br/><ol><li>Ir ao seguinte Facebook&#169; para criar a aplicação: <a href=\'http://www.facebook.com/developers/createapp.php\' target=\'_blank\'>http://www.facebook.com/developers/createapp.php</a>.</li><li>Autenticar-se no Facebook&#169; utilizando a conta sob a qual será para criar a aplicação.</li><li>Dentro da página "Criar Aplicação", inserir um nome para a aplicação. Este é o nome que os utilizadores irão ver quando se autenticarem nas suas contas do Facebook de dentro do Sugar.</li><li>Seleccionar "Aceito" para aceitar os Termos do Facebook&#169;.</li><li>Clicar em "Criar App"</li><li>Inserir e submeter as palavras de segurança para passar na Verificação de Segurança.</li><li>Dentro da página da aplicação, ir à área "Web Site" (link no menu da esquerda) e inserir o URL local da instância do Sugar para "Site URL".</li><li>Carregar "Gravar Alterações"</li><li>Ir à página "Integração do Facebook" (link no menu da esquerda) e encontrar a Chave API e o Segredo da App. Inserir o ID da Aplicação e o Segredo da Aplicação em baixo.</li></ol></td></tr></table>',
  'oauth_consumer_key' => 'Chave API',
  'oauth_consumer_secret' => 'Segredo da App',
);


