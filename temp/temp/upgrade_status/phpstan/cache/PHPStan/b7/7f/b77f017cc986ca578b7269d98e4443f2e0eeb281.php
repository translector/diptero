<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Extension/ModuleInstallerInterface.php-1594234425',
   'data' => 
  array (
    'e0f5de982c156212f6ff4f01f071354b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the installation of modules with creating the db schema and more.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstallerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '957b231fb1f921813f10f2fe9266fa3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs a given list of modules.
   *
   * Order of events:
   * - Gather and add module dependencies to $module_list (if applicable).
   * - For each module that is being installed:
   *   - Invoke hook_module_preinstall().
   *   - Install module schema and update system registries and caches.
   *   - Invoke hook_install() and add it to the list of installed modules.
   * - Invoke hook_modules_installed().
   *
   * To install test modules add
   * @code
   * $settings[\'extension_discovery_scan_tests\'] = TRUE;
   * @endcode
   * to your settings.php.
   *
   * @param string[] $module_list
   *   An array of module names.
   * @param bool $enable_dependencies
   *   (optional) If TRUE, dependencies will automatically be installed in the
   *   correct order. This incurs a significant performance cost, so use FALSE
   *   if you know $module_list is already complete.
   *
   * @return bool
   *   TRUE if the modules were successfully installed.
   *
   * @throws \\Drupal\\Core\\Extension\\MissingDependencyException
   *   Thrown when a requested module, or a dependency of one, can not be found.
   *
   * @see hook_module_preinstall()
   * @see hook_install()
   * @see hook_modules_installed()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstallerInterface',
         'functionName' => 'install',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f847b1ad52e9a735852253f92d0e19c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Uninstalls a given list of modules.
   *
   * @param string[] $module_list
   *   The modules to uninstall.
   * @param bool $uninstall_dependents
   *   (optional) If TRUE, dependent modules will automatically be uninstalled
   *   in the correct order. This incurs a significant performance cost, so use
   *   FALSE if you know $module_list is already complete.
   *
   * @return bool
   *   FALSE if one or more dependencies are missing, TRUE otherwise.
   *
   * @see hook_module_preuninstall()
   * @see hook_uninstall()
   * @see hook_modules_uninstalled()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstallerInterface',
         'functionName' => 'uninstall',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98419c6f65e7875438473a45eeb0be36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds module a uninstall validator.
   *
   * @param \\Drupal\\Core\\Extension\\ModuleUninstallValidatorInterface $uninstall_validator
   *   The uninstall validator to add.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstallerInterface',
         'functionName' => 'addUninstallValidator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c30e3585dd2f5124e080e96950dffead' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether a list of modules can be uninstalled.
   *
   * @param string[] $module_list
   *   An array of module names.
   *
   * @return string[]
   *   An array of reasons the module can not be uninstalled, empty if it can.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstallerInterface',
         'functionName' => 'validateUninstall',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));