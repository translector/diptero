<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Cache/CacheCollectorInterface.php-1594234425',
   'data' => 
  array (
    '4283b9884c5f5a4f798681e70bd279ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a caching wrapper to be used in place of large structures.
 *
 * This should be extended by systems that need to cache large amounts of data
 * to calling functions. These structures can become very large, so this
 * class is used to allow different strategies to be used for caching internally
 * (lazy loading, building caches over time etc.). This can dramatically reduce
 * the amount of data that needs to be loaded from cache backends on each
 * request, and memory usage from static caches of that same data.
 *
 * The default implementation is \\Drupal\\Core\\Cache\\CacheCollector.
 *
 * @ingroup cache
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '983d70d77b0ef0d17e9eae14d0f7cf8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets value from the cache.
   *
   * @param string $key
   *   Key that identifies the data.
   *
   * @return mixed
   *   The corresponding cache data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '535b1e695e502783a286d0180bd8d1c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets cache data.
   *
   * It depends on the specific case and implementation whether this has a
   * permanent effect or if it just affects the current request.
   *
   * @param string $key
   *   Key that identifies the data.
   * @param mixed $value
   *   The data to be set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '356622ce78d3b7f27b80a03bbd2700cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the element.
   *
   * It depends on the specific case and implementation whether this has a
   * permanent effect or if it just affects the current request.
   *
   * @param string $key
   *   Key that identifies the data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29adf268682b6ca3c3d60deee147d514' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether data exists for this key.
   *
   * @param string $key
   *   Key that identifies the data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
         'functionName' => 'has',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a26eef77f850aaca185a05a8434a11c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the local cache.
   *
   * Does not clear the persistent cache.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '373bcaa293fb3dd60757bf37e5034cfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears the collected cache entry.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
         'functionName' => 'clear',
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