<?php
/**
 * Copyright (C) 2013-2023 Combodo SARL
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 */

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
	'Combodo\\iTop\\Portal\\Brick\\AbstractBrick' => $baseDir . '/src/Brick/AbstractBrick.php',
	'Combodo\\iTop\\Portal\\Brick\\AggregatePageBrick' => $baseDir . '/src/Brick/AggregatePageBrick.php',
	'Combodo\\iTop\\Portal\\Brick\\BrickCollection' => $baseDir . '/src/Brick/BrickCollection.php',
	'Combodo\\iTop\\Portal\\Brick\\BrickNotFoundException' => $baseDir . '/src/Brick/BrickNotFoundException.php',
	'Combodo\\iTop\\Portal\\Brick\\BrowseBrick' => $baseDir . '/src/Brick/BrowseBrick.php',
	'Combodo\\iTop\\Portal\\Brick\\CreateBrick' => $baseDir . '/src/Brick/CreateBrick.php',
	'Combodo\\iTop\\Portal\\Brick\\FilterBrick' => $baseDir . '/src/Brick/FilterBrick.php',
	'Combodo\\iTop\\Portal\\Brick\\ManageBrick' => $baseDir . '/src/Brick/ManageBrick.php',
	'Combodo\\iTop\\Portal\\Brick\\PortalBrick' => $baseDir . '/src/Brick/PortalBrick.php',
	'Combodo\\iTop\\Portal\\Brick\\PropertyNotFoundException' => $baseDir . '/src/Brick/PropertyNotFoundException.php',
	'Combodo\\iTop\\Portal\\Brick\\UserProfileBrick' => $baseDir . '/src/Brick/UserProfileBrick.php',
	'Combodo\\iTop\\Portal\\Controller\\AbstractController' => $baseDir . '/src/Controller/AbstractController.php',
	'Combodo\\iTop\\Portal\\Controller\\AggregatePageBrickController' => $baseDir . '/src/Controller/AggregatePageBrickController.class.inc.php',
	'Combodo\\iTop\\Portal\\Controller\\BrickController' => $baseDir . '/src/Controller/BrickController.php',
	'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController' => $baseDir . '/src/Controller/BrowseBrickController.php',
	'Combodo\\iTop\\Portal\\Controller\\CreateBrickController' => $baseDir . '/src/Controller/CreateBrickController.php',
	'Combodo\\iTop\\Portal\\Controller\\DefaultController' => $baseDir . '/src/Controller/DefaultController.php',
	'Combodo\\iTop\\Portal\\Controller\\ManageBrickController' => $baseDir . '/src/Controller/ManageBrickController.php',
	'Combodo\\iTop\\Portal\\Controller\\ObjectController' => $baseDir . '/src/Controller/ObjectController.php',
	'Combodo\\iTop\\Portal\\Controller\\SessionMessageController' => $baseDir . '/src/Controller/SessionMessageController.php',
	'Combodo\\iTop\\Portal\\Controller\\UserProfileBrickController' => $baseDir . '/src/Controller/UserProfileBrickController.php',
	'Combodo\\iTop\\Portal\\DependencyInjection\\SilexCompatBootstrap\\PortalXmlConfiguration\\AbstractConfiguration' => $baseDir . '/src/DependencyInjection/SilexCompatBootstrap/PortalXmlConfiguration/AbstractConfiguration.php',
	'Combodo\\iTop\\Portal\\DependencyInjection\\SilexCompatBootstrap\\PortalXmlConfiguration\\Basic' => $baseDir . '/src/DependencyInjection/SilexCompatBootstrap/PortalXmlConfiguration/Basic.php',
	'Combodo\\iTop\\Portal\\DependencyInjection\\SilexCompatBootstrap\\PortalXmlConfiguration\\Forms' => $baseDir . '/src/DependencyInjection/SilexCompatBootstrap/PortalXmlConfiguration/Forms.php',
	'Combodo\\iTop\\Portal\\DependencyInjection\\SilexCompatBootstrap\\PortalXmlConfiguration\\Lists' => $baseDir . '/src/DependencyInjection/SilexCompatBootstrap/PortalXmlConfiguration/Lists.php',
	'Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetPluginPropertyClass' => $baseDir . '/src/EventListener/ApplicationContextSetPluginPropertyClass.php',
	'Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetUrlMakerClass' => $baseDir . '/src/EventListener/ApplicationContextSetUrlMakerClass.php',
	'Combodo\\iTop\\Portal\\EventListener\\CssFromSassCompiler' => $baseDir . '/src/EventListener/CssFromSassCompiler.php',
	'Combodo\\iTop\\Portal\\EventListener\\ExceptionListener' => $baseDir . '/src/EventListener/ExceptionListener.php',
	'Combodo\\iTop\\Portal\\EventListener\\UserProvider' => $baseDir . '/src/EventListener/UserProvider.php',
	'Combodo\\iTop\\Portal\\Form\\ObjectFormManager'                          => $baseDir . '/src/Form/ObjectFormManager.php',
	'Combodo\\iTop\\Portal\\Form\\PasswordFormManager'                        => $baseDir . '/src/Form/PasswordFormManager.php',
	'Combodo\\iTop\\Portal\\Form\\PreferencesFormManager'                     => $baseDir . '/src/Form/PreferencesFormManager.php',
	'Combodo\\iTop\\Portal\\Helper\\ApplicationHelper'                        => $baseDir . '/src/Helper/ApplicationHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\BrickControllerHelper'                    => $baseDir . '/src/Helper/BrickControllerHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\BrowseBrickHelper'                        => $baseDir . '/src/Helper/BrowseBrickHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\ContextManipulatorHelper'                 => $baseDir . '/src/Helper/ContextManipulatorHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\LifecycleValidatorHelper'                 => $baseDir . '/src/Helper/LifecycleValidatorHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\NavigationRuleHelper'                     => $baseDir . '/src/Helper/NavigationRuleHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\ObjectFormHandlerHelper'                  => $baseDir . '/src/Helper/ObjectFormHandlerHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\RequestManipulatorHelper'                 => $baseDir.'/src/Helper/RequestManipulatorHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\ScopeValidatorHelper'                     => $baseDir.'/src/Helper/ScopeValidatorHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\SecurityHelper'                           => $baseDir.'/src/Helper/SecurityHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\SessionMessageHelper'                     => $baseDir.'/src/Helper/SessionMessageHelper.php',
	'Combodo\\iTop\\Portal\\Helper\\UIExtensionsHelper'                       => $baseDir.'/src/Helper/UIExtensionsHelper.php',
	'Combodo\\iTop\\Portal\\Kernel'                                           => $baseDir.'/src/Kernel.php',
	'Combodo\\iTop\\Portal\\Routing\\ItopExtensionsExtraRoutes'               => $baseDir.'/src/Routing/ItopExtensionsExtraRoutes.php',
	'Combodo\\iTop\\Portal\\Routing\\UrlGenerator'                            => $baseDir.'/src/Routing/UrlGenerator.php',
	'Combodo\\iTop\\Portal\\Twig\\AppExtension'                               => $baseDir.'/src/Twig/AppExtension.php',
	'Combodo\\iTop\\Portal\\Twig\\AppVariable'                                => $baseDir.'/src/Twig/AppVariable.php',
	'Combodo\\iTop\\Portal\\Twig\\CurrentUserAccessor'                        => $baseDir.'/src/Twig/CurrentUserAccessor.php',
	'Combodo\\iTop\\Portal\\Twig\\AppGlobal'                                  => $baseDir.'/src/Twig/AppGlobal.php',
	'Combodo\\iTop\\Portal\\UrlMaker\\AbstractPortalUrlMaker'                 => $baseDir.'/src/UrlMaker/AbstractPortalUrlMaker.php',
	'Combodo\\iTop\\Portal\\VariableAccessor\\AbstractStringVariableAccessor' => $baseDir.'/src/VariableAccessor/AbstractStringVariableAccessor.php',
	'Combodo\\iTop\\Portal\\VariableAccessor\\AbstractVariableAccessor'       => $baseDir.'/src/VariableAccessor/AbstractVariableAccessor.php',
	'Combodo\\iTop\\Portal\\VariableAccessor\\CombodoCurrentContactPhotoUrl'  => $baseDir.'/src/VariableAccessor/CombodoCurrentContactPhotoUrl.php',
	'Combodo\\iTop\\Portal\\VariableAccessor\\CombodoPortalInstanceConf'      => $baseDir.'/src/VariableAccessor/CombodoPortalInstanceConf.php',
);
