<?php
/**
*
* Imgur - forum images uploader
*
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2019 [ver 1.0.8] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'IMGUR_CLIENT_ID'			=> 'IMGUR Client ID',
	'IMGUR_CLIENT_ID_EXPLAIN'	=> 'Você precisa registrar um Imgur app para obter o <strong>Client ID</strong>.<br /> Para criar um novo App, acesse <a href="https://api.imgur.com/oauth2/addclient">esta página</a>. Em seguida, insira o Client ID aqui.',
	
	'IMGUR_UPLOAD_TITLE'		=> 'Enviar uma imagem',
	'IMGUR_UPLOAD_MAIN'			=> 'Envie uma imagem para usar no tópico através do serviço Imgur. A imagem é inserida automaticamente no campo de postagens acima, uma vez submetida',
	'IMGUR_UPLOAD'				=> 'Enviar imagem agora',
	'IMGUR_SELECT'				=> 'Selecione a imagem',
    'IMGUR_COPY'				=> 'Copiar',
       
	'IMGUR_OUTPUT_LINK'			=> 'Link direto',
	'IMGUR_OUTPUT_IMAGE'		=> 'BBcode tag',
	'IMGUR_OUTPUT_IMAGE_DELETE'	=> 'Link de Exclusão',
	'IMGUR_OUTPUT_PLACEHOLDER'	=> 'Aguardando upload de imagem ...',

	'IMGUR_SIGNATURE'	=> 'Permitir o uso do envio de imagens IMGUR em assinaturas de usuários',

	'ALLOW_IMGUR'					=> 'Permitir avatares IMGUR',
	'AVATAR_DRIVER_IMGUR_TITLE'		=> 'Avatar IMGUR',
	'AVATAR_DRIVER_IMGUR_EXPLAIN'	=> '',
	'IMGUR_AVATAR'					=> 'Avatar IMGUR',

	'IMGUR_QUICKREPLY'	=> 'Permitir IMGUR na Snappy Smart Reply',

));
