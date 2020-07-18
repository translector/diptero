<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformThemeManagerInterface.php-1594241402',
   'data' => 
  array (
    'e3abe6b1d07ceae470ccbf7dafd8d6da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for theme manager classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a70dd7b7746523034f3c6394d876e3d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a theme\'s name.
   *
   * @return string
   *   A theme\'s name
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => 'getThemeName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6bd7b50f7e5e3ea4a2760f888886e264' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get themes as associative array.
   *
   * @return array
   *   An associative array containing theme name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => 'getThemeNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f89aa45ee50e8dcfe6ff0251ef52670' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all active theme names.
   *
   * @return array
   *   An array containing the active theme and base theme names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => 'getActiveThemeNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9605c8535deca935f3368f69d1676d9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the current request has an active theme.
   *
   * @return bool
   *   TRUE if the current request has an active theme.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => 'hasActiveTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '212e11270a038c1f0518c32769d27279' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if a theme name is being used the active or base theme.
   *
   * @param string $theme_name
   *   A theme name.
   *
   * @return bool
   *   TRUE if a theme name is being used the active or base theme.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => 'isActiveTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea14dd609252731ed037955e4bb68db8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the current theme the theme.
   *
   * @param string $theme_name
   *   (optional) A theme name. Defaults the default theme.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => 'setCurrentTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70c437ce6ab12275e7d4ad4b56da0420' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the current theme the active theme.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => 'setActiveTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51249b9bf9fe9abb6fb92dadd7e7b829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders HTML given a structured array tree.
   *
   * @param array $elements
   *   The structured array describing the data to be rendered.
   * @param bool $default_theme
   *   Render using the default theme. Defaults to TRUE.
   *
   * @return \\Drupal\\Component\\Render\\MarkupInterface
   *   The rendered HTML.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => 'render',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a33214c973d3c26e27653271693f1922' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders using the default theme final HTML in situations where no assets are needed.
   *
   * @param array $elements
   *   The structured array describing the data to be rendered.
   * @param bool $default_theme
   *   Render using the default theme. Defaults to TRUE.
   *
   * @return \\Drupal\\Component\\Render\\MarkupInterface
   *   The rendered HTML.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformThemeManagerInterface',
         'functionName' => 'renderPlain',
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