<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformOptionsStorageInterface.php-1594690523',
   'data' => 
  array (
    '7c3fac55d3727387c860d1c368dc52c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for Webform Options storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f98bc6535f1060a0cc4462b3a522281d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the names of all categories.
   *
   * @return string[]
   *   An array of translated categories, sorted alphabetically.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsStorageInterface',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6604569f4dcf99172628f146717ec212' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all options grouped by category.
   *
   * @return string[]
   *   An array of options grouped by category.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsStorageInterface',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32fe3ea98aea4a7c455c83eba5e73190' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all likert options with \'Likert:\' prefix removed.
   *
   * @return string[]
   *   An array of likert options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsStorageInterface',
         'functionName' => 'getLikerts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39b0777e9e9db60e6f42254e41f8f573' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get list of composite elements that use the specified webform options.
   *
   * @param \\Drupal\\webform\\WebformOptionsInterface $webform_options
   *   A webform options entity.
   *
   * @return array
   *   A list of composite elements that use the specified webform options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsStorageInterface',
         'functionName' => 'getUsedByCompositeElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66965ce9a619685c2059581649d88035' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get list of webform that use the specified webform options.
   *
   * @param \\Drupal\\webform\\WebformOptionsInterface $webform_options
   *   A webform options entity.
   *
   * @return array
   *   A list of webform that use the specified webform options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformOptionsStorageInterface',
         'functionName' => 'getUsedByWebforms',
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