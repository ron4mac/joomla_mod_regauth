<?php
/**
* @package		mod_regauth
* @copyright	Copyright (C) 2024 RJCreations. All rights reserved.
* @license		GNU General Public License version 3 or later; see LICENSE.txt
* @since		1.0.0
*/
\defined('_JEXEC') or die;

use Joomla\CMS\Extension\Service\Provider\Module as ModuleServiceProvider;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory as ModuleDispatcherFactoryServiceProvider;
use Joomla\CMS\Extension\Service\Provider\HelperFactory as HelperFactoryServiceProvider;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

return new class () implements ServiceProviderInterface {

	public function register(Container $container): void
	{
		$container->registerServiceProvider(new ModuleDispatcherFactoryServiceProvider('\\RJCreations\\Module\\Regauth'));
		$container->registerServiceProvider(new HelperFactoryServiceProvider('\\RJCreations\\Module\\Regauth\\Site\\Helper'));
		$container->registerServiceProvider(new ModuleServiceProvider());
	}

};
