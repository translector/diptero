<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_options_custom/src/WebformOptionsCustomStorageInterface.php-1594690523',
   'data' => 
  array (
    '4b1887c887ed44984775dbf15b68ea63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for webform options custom storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\WebformOptionsCustomStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd784d3170ad6308c330d2c868758f427' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the names of all categories.
   *
   * @return string[]
   *   An array of translated categories, sorted alphabetically.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\WebformOptionsCustomStorageInterface',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ebf0ce55a183a04e374eb64b37633d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all webform options custom grouped by category.
   *
   * @return string[]
   *   An array of webform options custom grouped by category.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\WebformOptionsCustomStorageInterface',
         'functionName' => 'getOptionsCustom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b29d9efbeca2e510ec5425b10bf56eeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get list of webform that use the specified webform custom options.
   *
   * @param \\Drupal\\webform_options_custom\\WebformOptionsCustomInterface $webform_options_custom
   *   A webform options custom entity.
   *
   * @return array
   *   A list of webform that use the specified webform custom options
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\WebformOptionsCustomStorageInterface',
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