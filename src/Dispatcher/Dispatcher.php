<?php
/**
* @package		mod_regauth
* @copyright	Copyright (C) 2024 RJCreations. All rights reserved.
* @license		GNU General Public License version 3 or later; see LICENSE.txt
* @since		1.0.0
*/
namespace RJCreations\Module\Regauth\Site\Dispatcher;

\defined('_JEXEC') or die;

use Joomla\CMS\Dispatcher\DispatcherInterface;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Factory;
use Joomla\Registry\Registry;
use RJCreations\Module\Regauth\Site\Helper\RegauthHelper;

class Dispatcher implements DispatcherInterface
{
	protected $module;
	protected $params;
	protected $app;

	public function __construct ($module, $app, $input)
	{
		$this->module = $module;
		$this->params = new Registry($module->params);
		$this->app = $app;
	}

	public function dispatch ()
	{
		$lang = Factory::getApplication()->getLanguage();
		$lang->load('mod_regauth', JPATH_BASE . '/modules/mod_regauth');

		$authcode = $this->params->get('authcode', '');
		$expires = (int) $this->params->get('expires', 4);
		$linktext = $this->params->get('linktext', TEXT::_('MOD_REGAUTH_LINKTEXT_DEFAULT'));

		$lineone = RegauthHelper::inviteLink($authcode, $expires, $linktext);

		$tmpl = strpos($this->module->position, 'regauth')===false ? 'default' : 'inarticle';

		require ModuleHelper::getLayoutPath('mod_regauth', $tmpl);
	}

}
