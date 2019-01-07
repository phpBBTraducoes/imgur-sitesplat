<?php
/**
*
* @package BBembed
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2019 [ver 1.0.8] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore não existe!<br />Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore na sua pasta de extensão de sitesplat.',
	'IMGUR_NOTICE'				=> '<div style="width:80%;margin:20px auto;"><p>As configurações para esta extensão está em <strong>%1$s » %2$s » %3$s.</strong><br />Por favor, note que você precisará registrar Imgur app para obter o Client ID necessário para que esta extensão funcione.<br />Para criar um novo App, acesse <a href="https://api.imgur.com/oauth2/addclient" target="_blank">https://api.imgur.com/oauth2/addclient</a> e registre-o seguindo as instruções fornecidas.<br />Em seguida, use o client ID em <strong>ACP &#187; Mensagem &#187; Configurações de anexos: Imgur Client ID</strong><br />Opção de avatar em: Geral &#187; Configuração geral &#187; Configurações de avatars.<br />Opção de assinatura em: Geral &#187; Configuração geral &#187; Configurações de assinatura.</p></div>',
	
));