<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/serialization/src/EntityResolver/UuidReferenceInterface.php-1594234425',
   'data' => 
  array (
    'a071e6e90a6108e6ad5f50e4e740669c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for extracting UUID from entity reference data when denormalizing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\EntityResolver',
         'uses' => 
        array (
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66dd71c11266af99691d15dead5b8844' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the uuid from the data array.
   *
   * @param array $data
   *   The data, as was passed into the Normalizer.
   *
   * @return string
   *   A UUID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\EntityResolver',
         'uses' => 
        array (
          'normalizerinterface' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
        ),
         'className' => 'Drupal\\serialization\\EntityResolver\\UuidReferenceInterface',
         'functionName' => 'getUuid',
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