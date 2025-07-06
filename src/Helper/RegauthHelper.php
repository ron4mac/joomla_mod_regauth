<?php
/**
* @package		mod_regauth
* @copyright	Copyright (C) 2025 RJCreations. All rights reserved.
* @license		GNU General Public License version 3 or later; see LICENSE.txt
* @since		1.0.5
*/
namespace RJCreations\Module\Regauth\Site\Helper;

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Router\Route;
//use Joomla\CMS\Language\Text;

class RegauthHelper
{
	// create the link to authorized registration
	public static function inviteLink ($authcode, $expires, $uses=1, $txt=null)
	{
		$authcode = base64_encode(self::orca((time()+84600*$expires).chr(0).$authcode.chr(0).$uses));
		$url = Route::_('index.php?option=com_users&view=registration&_rga='.$authcode);
		return '<a href="'.$url.'">'.($txt ?: $url).'</a>';
	}

	// simple but sufficiently effective XOR encrypt/decrypt
	public static function orca ($p)
	{
		$q = Factory::getConfig()->get('secret');
		$l = strlen($q);
		$r = '';
		while ($p) {
			$r .= substr($p, 0, $l) ^ substr($q, 0, strlen($p));
			$p = substr($p, $l);
		}
		return $r;
	}

}
