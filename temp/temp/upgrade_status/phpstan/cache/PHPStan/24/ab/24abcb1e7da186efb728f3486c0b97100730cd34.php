<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformOptionsInterface.php-1594241402',
   'data' => 
  array (
    'ac031c72baed10a97438da829e785f87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a webform options entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1baeefe956b04fc22567220369b27c78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if options should be used as Likert scale.
   *
   * @return bool
   *   TRUE if options should be used as Likert scale.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsInterface',
         'functionName' => 'isLikert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d3df8d15256a423f1d06f711286469b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set options (YAML) value.
   *
   * @param array $options
   *   An renderable array of options.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsInterface',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97eb9556a9425d59c099530c644dcfc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get options (YAML) as an associative array.
   *
   * @return array|bool
   *   Options as an associative array. Returns FALSE if options YAML is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsInterface',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3bdc79ce7b62b0338787abb0ba01bcd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the webform options has alter hooks.
   *
   * @return bool
   *   TRUE if the webform options has alter hooks.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsInterface',
         'functionName' => 'hasAlterHooks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '058a53b346a9c19710b2f468b2ab0608' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform element options.
   *
   * @param array $element
   *   A webform element.
   * @param string $property_name
   *   The element property containing the options. Defaults to #options,
   *   for webform_likert elements it is #answers.
   *
   * @return array
   *   An associative array of options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsInterface',
         'functionName' => 'getElementOptions',
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