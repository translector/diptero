<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/KeyValueStore/KeyValueStoreExpirableInterface.php-1594234425',
   'data' => 
  array (
    '6495e818d05aff3d144d6aa0780b4d01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for expiring data in a key/value store.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\KeyValueStore',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '338e0d5e0a32a90bfef6af89a6ed5078' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves a value for a given key with a time to live.
   *
   * @param string $key
   *   The key of the data to store.
   * @param mixed $value
   *   The data to store.
   * @param int $expire
   *   The time to live for items, in seconds.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\KeyValueStore',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
         'functionName' => 'setWithExpire',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0d34967f082b208cb11bb80cb5a3cf6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a value for a given key with a time to live if it does not yet exist.
   *
   * If a key is expired it also does not exists.
   *
   * @param string $key
   *   The key of the data to store.
   * @param mixed $value
   *   The data to store.
   * @param int $expire
   *   The time to live for items, in seconds.
   *
   * @return bool
   *   TRUE if the data was set, or FALSE if it already existed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\KeyValueStore',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
         'functionName' => 'setWithExpireIfNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0913937f3c828ab1f4c912848e53d160' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves an array of values with a time to live.
   *
   * @param array $data
   *   An array of data to store.
   * @param int $expire
   *   The time to live for items, in seconds.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\KeyValueStore',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
         'functionName' => 'setMultipleWithExpire',
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