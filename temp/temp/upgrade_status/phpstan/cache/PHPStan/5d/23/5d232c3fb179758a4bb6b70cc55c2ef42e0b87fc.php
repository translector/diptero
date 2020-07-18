<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Config/CachedStorage.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/DependencyInjection/DependencySerializationTrait.php-1594234425',
   'data' => 
  array (
    '5b721889fc751ceb160c690f379b99ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the cached storage.
 *
 * The class gets another storage and a cache backend injected. It reads from
 * the cache and delegates the read to the storage on a cache miss. It also
 * handles cache invalidation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a96119de0a484464a7e5f758afc8418d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides dependency injection friendly methods for serialization.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c92c9a80c4e6c23a224f506b9881198' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of service IDs keyed by property name used for serialization.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3310be399070a8ab28eeb61f1e33c08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of entity type IDs keyed by the property name of their storages.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b4e7d884915d397b33c73166fdd5bcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => '__sleep',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c41dd239bd4c1b98303ae926ecdce1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => '__wakeup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c858db3e2bddbd8bff9263414ad23b56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => '__wakeup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '857b4216494f650191c68cadfaa5025e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration storage to be cached.
   *
   * @var \\Drupal\\Core\\Config\\StorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3e454f1a8f793b5f24cf64cce4aa04c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The instantiated Cache backend.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51bfdc61856622ee92bf4e7814ecaeb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of listAll() prefixes with their results.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2dedc53e1df9fdf45751b225ca331fa0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CachedStorage.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $storage
   *   A configuration storage to be cached.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
   *   A cache backend used to store configuration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c10cbfa89670c206b44b602617901bdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'exists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d36b2ed87b5cae325c2d0529e13dc69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'read',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e57b7a95b558ffc0c13cf9839c88070' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'readMultiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'deb90890a27a813663c335810bf76a03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'write',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bbb8c4ab742b91be3c482e2f77aeb29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd73614700dbabcb2c216871656c15884' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'rename',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3023ee3e0a583de285a28619a5dd5629' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'encode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4bf3d988e977e368afd878e7339b219' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'decode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd33ec1fef6e1e9e86fa89de68340236b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'listAll',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9359547be78f2c56e982130d65298d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds configuration object names starting with a given prefix.
   *
   * Given the following configuration objects:
   * - node.type.article
   * - node.type.page
   *
   * Passing the prefix \'node.type.\' will return an array containing the above
   * names.
   *
   * @param string $prefix
   *   The prefix to search for
   *
   * @return array
   *   An array containing matching configuration object names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'findByPrefix',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c25806e9841e33e0818e04e66c549b75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'deleteAll',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d2ad9a42b02ab6b565710180c851c6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears the static list cache.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'resetListCache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '423df6ab67365c7d6ac8460cd1f91a4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'createCollection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4a7e4387391211f9ffe5c5fcd8fa354' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'getAllCollectionNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd65e54f043152201db2954a7169e24d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'getCollectionName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd7822760eae625047794c768a5903b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a cache key for a configuration name using the collection.
   *
   * @param string $name
   *   The configuration name.
   *
   * @return string
   *   The cache key for the configuration name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'getCacheKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '729b3a013b835703d4eda5b904ac521a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a cache key map for an array of configuration names.
   *
   * @param array $names
   *   The configuration names.
   *
   * @return array
   *   An array of cache keys keyed by configuration names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'getCacheKeys',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21c18132bd623e7b653b98afc3e9eb1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a cache ID prefix to use for the collection.
   *
   * @return string
   *   The cache ID prefix.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\CachedStorage',
         'functionName' => 'getCollectionPrefix',
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