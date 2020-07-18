<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Utility/ThemeRegistry.php-1594234425',
   'data' => 
  array (
    '71bef7caa44e2b7b114be50b052d4dd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Builds the run-time theme registry.
 *
 * A cache collector to allow the theme registry to be accessed as a
 * complete registry, while internally caching only the parts of the registry
 * that are actually in use on the site. On cache misses the complete
 * theme registry is loaded and used to update the run-time cache.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachecollector' => 'Drupal\\Core\\Cache\\CacheCollector',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\ThemeRegistry',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '918a116ed624d04451ba1fad5bccb05f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the partial registry can be persisted to the cache.
   *
   * This is only allowed if all modules and the request method is GET. _theme()
   * should be very rarely called on POST requests and this avoids polluting
   * the runtime cache.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachecollector' => 'Drupal\\Core\\Cache\\CacheCollector',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\ThemeRegistry',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c90e7e46effbaeaa7a37d5fcf9113ba8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The complete theme registry array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachecollector' => 'Drupal\\Core\\Cache\\CacheCollector',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\ThemeRegistry',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0799c5e90ceded7e131a4de9e963660e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a ThemeRegistry object.
   *
   * @param string $cid
   *   The cid for the array being cached.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
   *   The cache backend.
   * @param \\Drupal\\Core\\Lock\\LockBackendInterface $lock
   *   The lock backend.
   * @param array $tags
   *   (optional) The tags to specify for the cache item.
   * @param bool $modules_loaded
   *   Whether all modules have already been loaded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachecollector' => 'Drupal\\Core\\Cache\\CacheCollector',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\ThemeRegistry',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce0cdb1666b794cdd28ce8c16e8aee87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes the full theme registry.
   *
   * @return
   *   An array with the keys of the full theme registry, but the values
   *   initialized to NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachecollector' => 'Drupal\\Core\\Cache\\CacheCollector',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\ThemeRegistry',
         'functionName' => 'initializeRegistry',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02d33d6f5744632af71dd46c41723b40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachecollector' => 'Drupal\\Core\\Cache\\CacheCollector',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\ThemeRegistry',
         'functionName' => 'has',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6539d1ea0812d73a9183f2aae1133ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachecollector' => 'Drupal\\Core\\Cache\\CacheCollector',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\ThemeRegistry',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b88a002dbb4f342aefa392cee9c828f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachecollector' => 'Drupal\\Core\\Cache\\CacheCollector',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\ThemeRegistry',
         'functionName' => 'resolveCacheMiss',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f17ac5d16ccc55780cbf0ce3c827c4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Utility',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachecollector' => 'Drupal\\Core\\Cache\\CacheCollector',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Utility\\ThemeRegistry',
         'functionName' => 'updateCache',
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