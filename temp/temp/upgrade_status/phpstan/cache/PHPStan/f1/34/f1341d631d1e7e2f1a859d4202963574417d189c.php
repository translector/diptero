<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/TempStore/PrivateTempStore.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/DependencyInjection/DependencySerializationTrait.php-1594234425',
   'data' => 
  array (
    '1aef3a14f5d5216f5187c218e7f29b5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Stores and retrieves temporary data for a given owner.
 *
 * A PrivateTempStore can be used to make temporary, non-cache data available
 * across requests. The data for the PrivateTempStore is stored in one
 * key/value collection. PrivateTempStore data expires automatically after a
 * given timeframe.
 *
 * The PrivateTempStore is different from a cache, because the data in it is not
 * yet saved permanently and so it cannot be rebuilt. Typically, the
 * PrivateTempStore might be used to store work in progress that is later saved
 * permanently elsewhere, e.g. autosave data, multistep forms, or in-progress
 * changes to complex configuration that are not ready to be saved.
 *
 * The PrivateTempStore differs from the SharedTempStore in that all keys are
 * ensured to be unique for a particular user and users can never share data. If
 * you want to be able to share data between users or use it for locking, use
 * \\Drupal\\Core\\TempStore\\SharedTempStore.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f7e8ec446d4a27cd237fb54501fa68f' => 
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
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35cd343591bd15baf94eb0b1ca104db8' => 
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
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb378c4e4036c6ac6c9b9e1853cde236' => 
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
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6421223880d772ea0d591e9b1a04d3dc' => 
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
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => '__sleep',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99df6e33bfe41ad76d317000969ad9d0' => 
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
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => '__wakeup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae27d66e5bf93603170f0b45d67205f2' => 
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
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => '__wakeup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcd7cbc47500d25480c5bf8f217074f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The key/value storage object used for this data.
   *
   * @var \\Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ef2760a8244b3ae644be090f1936d4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The lock object used for this data.
   *
   * @var \\Drupal\\Core\\Lock\\LockBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1c09f9031d0eda08761d2c57e798bfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountProxyInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb3f3e8e40818f6ccefd15ba9a034e67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request stack.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99cff7a1a4e0e265e4c6687e05bc0d06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The time to live for items in seconds.
   *
   * By default, data is stored for one week (604800 seconds) before expiring.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eaf145326a8fb71f5447ad047b6a6e8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new object for accessing data from a key/value store.
   *
   * @param \\Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface $storage
   *   The key/value storage object used for this data. Each storage object
   *   represents a particular collection of data and will contain any number
   *   of key/value pairs.
   * @param \\Drupal\\Core\\Lock\\LockBackendInterface $lock_backend
   *   The lock object used for this data.
   * @param \\Drupal\\Core\\Session\\AccountProxyInterface $current_user
   *   The current user account.
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   The request stack.
   * @param int $expire
   *   The time to live for items, in seconds.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '238a2da031ca7d7230715dd95c18ec2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a value from this PrivateTempStore for a given key.
   *
   * @param string $key
   *   The key of the data to retrieve.
   *
   * @return mixed
   *   The data associated with the key, or NULL if the key does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85ad5bf338cb84208582a1e7e31c9a4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores a particular key/value pair in this PrivateTempStore.
   *
   * @param string $key
   *   The key of the data to store.
   * @param mixed $value
   *   The data to store.
   *
   * @throws \\Drupal\\Core\\TempStore\\TempStoreException
   *   Thrown when a lock for the backend storage could not be acquired.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1651449efb202cf5d35c1222ed273d32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the metadata associated with a particular key/value pair.
   *
   * @param string $key
   *   The key of the data to store.
   *
   * @return \\Drupal\\Core\\TempStore\\Lock|null
   *   An object with the owner and updated time if the key has a value, or
   *   NULL otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => 'getMetadata',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd48159cac9876ffeba45f3714dbb66e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes data from the store for a given key and releases the lock on it.
   *
   * @param string $key
   *   The key of the data to delete.
   *
   * @return bool
   *   TRUE if the object was deleted or does not exist, FALSE if it exists but
   *   is not owned by $this->owner.
   *
   * @throws \\Drupal\\Core\\TempStore\\TempStoreException
   *   Thrown when a lock for the backend storage could not be acquired.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4436cd8e542c559f2f3a70eb1b305c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures that the key is unique for a user.
   *
   * @param string $key
   *   The key.
   *
   * @return string
   *   The unique key for the user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => 'createkey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4d2f50299b72406b79aafd54ee61393' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current owner based on the current user or the session ID.
   *
   * @return string
   *   The owner.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => 'getOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '906fd31abb1c081f4820483423919a45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Start session because it is required for a private temp store.
   *
   * Ensures that an anonymous user has a session created for them, as
   * otherwise subsequent page loads will not be able to retrieve their
   * tempstore data.
   *
   * @todo when https://www.drupal.org/node/2865991 is resolved, use force
   * start session API.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => 'startSession',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '580916f00d97795d8d54d4af85be20ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Symfony\\Component\\HttpFoundation\\Session\\SessionInterface $session */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TempStore',
         'uses' => 
        array (
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\TempStore\\PrivateTempStore',
         'functionName' => 'startSession',
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