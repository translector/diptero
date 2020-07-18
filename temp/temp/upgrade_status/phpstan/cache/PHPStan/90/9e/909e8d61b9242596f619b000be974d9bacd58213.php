<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Extension/ThemeInstallerInterface.php-1594234425',
   'data' => 
  array (
    '4b041304c8abcbadb2af7ef7a7c3648a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages theme installation/uninstallation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeInstallerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3350eb3932eff0359c2d4542d4fdd2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs a given list of themes.
   *
   * @param array $theme_list
   *   An array of theme names.
   * @param bool $install_dependencies
   *   (optional) If TRUE, dependencies will automatically be installed in the
   *   correct order. This incurs a significant performance cost, so use FALSE
   *   if you know $theme_list is already complete and in the correct order.
   *
   * @return bool
   *   Whether any of the given themes have been installed.
   *
   * @throws \\Drupal\\Core\\Extension\\ExtensionNameLengthException
   *   Thrown when the theme name is to long.
   *
   * @throws \\Drupal\\Core\\Extension\\Exception\\UnknownExtensionException
   *   Thrown when the theme does not exist.
   *
   * @throws \\Drupal\\Core\\Extension\\MissingDependencyException
   *   Thrown when a requested dependency can\'t be found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeInstallerInterface',
         'functionName' => 'install',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c75d8cde02956e7bb86bc8d50870cf28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Uninstalls a given list of themes.
   *
   * Uninstalling a theme removes all related configuration (like blocks) and
   * invokes the \'themes_uninstalled\' hook.
   *
   * @param array $theme_list
   *   The themes to uninstall.
   *
   * @throws \\Drupal\\Core\\Extension\\Exception\\UnknownExtensionException
   *   Thrown when trying to uninstall a theme that was not installed.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when trying to uninstall the default theme or the admin theme.
   *
   * @see hook_themes_uninstalled()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeInstallerInterface',
         'functionName' => 'uninstall',
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