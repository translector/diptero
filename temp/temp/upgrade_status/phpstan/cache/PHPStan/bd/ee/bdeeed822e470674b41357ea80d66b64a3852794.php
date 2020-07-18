<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/slick/src/Entity/SlickBaseInterface.php-1588418758',
   'data' => 
  array (
    '11c49b9c64cf1afc6fdd6ab4d4ea2c44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a Slick entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\slick\\Entity\\SlickBaseInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98645d75a502b31810b547a24a956cbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the Slick options by group, or property.
   *
   * @param string $group
   *   The name of setting group: settings, responsives.
   * @param string $property
   *   The name of specific property: prevArrow, nexArrow.
   *
   * @return mixed|array|null
   *   Available options by $group, $property, all, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\slick\\Entity\\SlickBaseInterface',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00513032634c647cad33440f5572f4bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the array of slick settings.
   *
   * @param string $ansich
   *   Whether to return the settings as is.
   *
   * @return array
   *   The array of settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\slick\\Entity\\SlickBaseInterface',
         'functionName' => 'getSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ed19a2503e8bca72c4561ea128763a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the array of slick settings.
   *
   * @param array $settings
   *   The new array of settings.
   *
   * @return $this
   *   The class instance that this method is called on.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\slick\\Entity\\SlickBaseInterface',
         'functionName' => 'setSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41f8c41b2eafaa14bc1b3ea2bf4f3086' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the value of a slick setting.
   *
   * @param string $setting_name
   *   The setting name.
   *
   * @return mixed
   *   The setting value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\slick\\Entity\\SlickBaseInterface',
         'functionName' => 'getSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5437e65ffdb25cfcb815d45ac20ae30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value of a slick setting.
   *
   * @param string $setting_name
   *   The setting name.
   * @param string $value
   *   The setting value.
   *
   * @return $this
   *   The class instance that this method is called on.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\slick\\Entity\\SlickBaseInterface',
         'functionName' => 'setSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7a953e6fc6fbb6c69fa1d7d3406cfb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available slick default options under group \'settings\'.
   *
   * @param string $group
   *   The name of group: settings, responsives.
   *
   * @return array
   *   The default settings under options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\slick\\Entity\\SlickBaseInterface',
         'functionName' => 'defaultSettings',
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