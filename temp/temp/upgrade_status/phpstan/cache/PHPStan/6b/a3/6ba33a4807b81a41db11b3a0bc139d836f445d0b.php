<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Cache/CacheCollector.php-1594234425',
   'data' => 
  array (
    '63a57da8f1d92a2d2de00037b976ba1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default implementation for CacheCollectorInterface.
 *
 * By default, the class accounts for caches where calling functions might
 * request keys that won\'t exist even after a cache rebuild. This prevents
 * situations where a cache rebuild would be triggered over and over due to a
 * \'missing\' item. These cases are stored internally as a value of NULL. This
 * means that the CacheCollector::get() method must be overridden if caching
 * data where the values can legitimately be NULL, and where
 * CacheCollector->has() needs to correctly return (equivalent to
 * array_key_exists() vs. isset()). This should not be necessary in the majority
 * of cases.
 *
 * @ingroup cache
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28f3911b9c53f4fa3a904a721a79efe0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache id that is used for the cache entry.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75ef43660e1cbcfc79bf5f0dd2896cc2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A list of tags that are used for the cache entry.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7cfb6432dcf2d722642281f651f33d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache backend that should be used.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd47372ec4a2b39f3e4dac2743eb0d7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The lock backend that should be used.
   *
   * @var \\Drupal\\Core\\Lock\\LockBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1a133bd64e2bb60e1bb4d87c81eb46f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of keys to add to the cache on service termination.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2ac69afac556fd56c620f575aa50096' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of keys to remove from the cache on service termination.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ca3d9fc5557b88997081ffd1052587f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Storage for the data itself.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '136c88001f7b77a5fc2d5adb7cc26ddd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the cache creation time.
   *
   * This is used to check if an invalidated cache item has been overwritten in
   * the meantime.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90f39a3584e4d53acae909292f7e1589' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag that indicates of the cache has been invalidated.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0846ba6b7d2fcf25434f0e4e09f4035a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if the collected cache was already loaded.
   *
   * The collected cache is lazy loaded when an entry is set, get or deleted.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f08f0134dbf27e018de6fd5c8434179' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a CacheCollector object.
   *
   * @param string $cid
   *   The cid for the array being cached.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
   *   The cache backend.
   * @param \\Drupal\\Core\\Lock\\LockBackendInterface $lock
   *   The lock backend.
   * @param array $tags
   *   (optional) The tags to specify for the cache item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d531a34f3551c7b5401391e4a7195d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the cache ID.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'getCid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e30f7b548fdb5787612d82ad14984edd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'has',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05858120ae3d0279a95aaa741691624e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c86073765f04d4566b63553ab26ed1b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements \\Drupal\\Core\\Cache\\CacheCollectorInterface::set().
   *
   * This is not persisted by default. In practice this means that setting a
   * value will only apply while the object is in scope and will not be written
   * back to the persistent cache. This follows a similar pattern to static vs.
   * persistent caching in procedural code. Extending classes may wish to alter
   * this behavior, for example by adding a call to persist().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2deb1c34ef10ecc168cd72fdb6d5bf51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14333a61056cf8954aac5cc63e839a0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flags an offset value to be written to the persistent cache.
   *
   * @param string $key
   *   The key that was requested.
   * @param bool $persist
   *   (optional) Whether the offset should be persisted or not, defaults to
   *   TRUE. When called with $persist = FALSE the offset will be unflagged so
   *   that it will not be written at the end of the request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'persist',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46b297fd6d6b3ae684e7e75f6478db25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resolves a cache miss.
   *
   * When an offset is not found in the object, this is treated as a cache
   * miss. This method allows classes using this implementation to look up the
   * actual value and allow it to be cached.
   *
   * @param string $key
   *   The offset that was requested.
   *
   * @return mixed
   *   The value of the offset, or NULL if no value was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'resolveCacheMiss',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bae19044cb26ee49309f9d7a0217d567' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Writes a value to the persistent cache immediately.
   *
   * @param bool $lock
   *   (optional) Whether to acquire a lock before writing to cache. Defaults to
   *   TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'updateCache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f99275c34e0e3de8d3a7f8d8f9c2f636' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Normalizes a cache ID in order to comply with database limitations.
   *
   * @param string $cid
   *   The passed in cache ID.
   *
   * @return string
   *   An ASCII-encoded cache ID that is at most 255 characters long.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'normalizeLockName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8aac16d1b213ace824056ea4683a2f1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb5820e55030033f72e023722d6c2633' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'clear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27fea2ffc86d0fb4bb0a32ec8992c47d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'destruct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98c97aa0b0bbd89ddf832b9521ca8fcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the cache if not already done.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'lazyLoadCache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '226243da5b550b67ad012223236040d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invalidate the cache.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheCollector',
         'functionName' => 'invalidateCache',
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