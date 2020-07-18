<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_image_select/src/WebformImageSelectImagesStorageInterface.php-1594690523',
   'data' => 
  array (
    '8cb9a3d7e360e56f24fa0068f1eb9e87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for webform image select images storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\WebformImageSelectImagesStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce0f90f6e0057644ac431069f3e6c1fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the names of all categories.
   *
   * @return string[]
   *   An array of translated categories, sorted alphabetically.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\WebformImageSelectImagesStorageInterface',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2c6813bfa967f1015a392bf63b8c1a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all webform image select images grouped by category.
   *
   * @return string[]
   *   An array of webform image select images grouped by category.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\WebformImageSelectImagesStorageInterface',
         'functionName' => 'getImages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49b1f6d37e3fb4c6ab172e9e34ecccba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get list of webform that use the specified webform images.
   *
   * @param \\Drupal\\webform_image_select\\WebformImageSelectImagesInterface $webform_images
   *   A webform image select images entity.
   *
   * @return array
   *   A list of webform that use the specified webform images.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\WebformImageSelectImagesStorageInterface',
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