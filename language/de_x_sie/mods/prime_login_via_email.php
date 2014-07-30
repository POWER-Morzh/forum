<?php
/**
*
* prime_login_via_email [English]
*
* @package language
* @version $Id: prime_login_via_email.php,v 1.3.1 2010/09/22 00:33:00 primehalo Exp $
* @copyright (c) 2008-2010 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
	'USERNAME_OR_EMAIL'					=> 'Benutzername oder E-Mail',
	'LOGIN_ERROR_USERNAME_OR_EMAIL'		=> 'Sie haben einen fehlerhaften Benutzernamen oder e-mail Adresse angegeben. Bitte prüfen Sie Ihren Benutzernamen und versuchen Sie es erneut. Wenn Sie weiterhin auf Probleme stoßen, wenden Sie sich bitte an die %sBoard-Administration%s.',
	'LOGIN_ERROR_EMAIL'					=> 'Sie haben eine fehlerhafte e-mail Adresse angegeben. Bitte prüfen Sie Ihren Benutzernamen und versuchen Sie es erneut. Wenn Sie weiterhin auf Probleme stoßen, wenden Sie sich bitte an die %sBoard-Administration%s.',

	// ACP
	'LOGIN_VIA_EMAIL_ENABLE'			=> 'Login via E-Mail',
	'LOGIN_VIA_EMAIL_ENABLE_EXPLAIN'	=> 'Allow users to login using either their username or e-mail address. With the silent option, there will be no text indicating that this is possible.',
	'LOGIN_VIA_EMAIL_SILENT'			=> 'Yes, silently',
	'LOGIN_VIA_EMAIL_ONLY'				=> 'E-Mail only',
	'EMAIL_REUSE_DISABLED'				=> 'This is disabled while <em>Login via Email</em> is enabled.',
));

?>