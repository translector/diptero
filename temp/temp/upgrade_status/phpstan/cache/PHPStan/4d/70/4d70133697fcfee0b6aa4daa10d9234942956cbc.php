<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Theme/ThemeInitializationInterface.php-1594234425',
   'data' => 
  array (
    'e24a740728910c9fd85c614ed904979f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface which contain theme initialization logic.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'extension' => 'Drupal\\Core\\Extension\\Extension',
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66da6cfc347a203713de84c93478ece5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes a given theme.
   *
   * This loads the active theme, for example include its engine file.
   *
   * @param string $theme_name
   *   The machine name of the theme.
   *
   * @return \\Drupal\\Core\\Theme\\ActiveTheme
   *   An active theme object instance for the given theme.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'extension' => 'Drupal\\Core\\Extension\\Extension',
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
         'functionName' => 'initTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9a6a201f30b9a338d71bc7765bead6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an active theme object.
   *
   * @param string $theme_name
   *   The machine name of the theme.
   *
   * @return \\Drupal\\Core\\Theme\\ActiveTheme
   *   An active theme object instance for the given theme.
   *
   * @throws \\Drupal\\Core\\Theme\\MissingThemeDependencyException
   *   Thrown when base theme for installed theme is not installed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'extension' => 'Drupal\\Core\\Extension\\Extension',
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
         'functionName' => 'getActiveThemeByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9fd019a5a7ca06dc6d57c14e7ea2d5d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads a theme, so it is ready to be used.
   *
   * Loading a theme includes loading and initializing the engine,
   * each base theme and its engines.
   *
   * @param \\Drupal\\Core\\Theme\\ActiveTheme $active_theme
   *   The theme to load.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'extension' => 'Drupal\\Core\\Extension\\Extension',
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
         'functionName' => 'loadActiveTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fff01cce42d233644072d486fe791d69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds up the active theme object from extensions.
   *
   * @param \\Drupal\\Core\\Extension\\Extension $theme
   *   The theme extension object.
   * @param \\Drupal\\Core\\Extension\\Extension[] $base_themes
   *   An array of extension objects of base theme and its bases. It is ordered
   *   by \'next parent first\', meaning the top level of the chain will be first.
   *
   * @return \\Drupal\\Core\\Theme\\ActiveTheme
   *   The active theme instance for the passed in $theme.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'extension' => 'Drupal\\Core\\Extension\\Extension',
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
         'functionName' => 'getActiveTheme',
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