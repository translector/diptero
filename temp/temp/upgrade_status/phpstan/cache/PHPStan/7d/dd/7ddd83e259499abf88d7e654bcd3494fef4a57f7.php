<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/crop/src/CropStorageInterface.php-1585251611',
   'data' => 
  array (
    'e216f4182402d71da308d9246a932b09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining an crop storage controller.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
        ),
         'className' => 'Drupal\\crop\\CropStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec3df3f619c393617a3c8271bc516532' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieve crop ID based on image URI and crop type.
   *
   * @param string $uri
   *   URI of the image.
   * @param string $type
   *   Crop type.
   *
   * @return \\Drupal\\crop\\CropInterface|null
   *   A Crop object or NULL if nothing matches the search parameters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
        ),
         'className' => 'Drupal\\crop\\CropStorageInterface',
         'functionName' => 'getCrop',
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