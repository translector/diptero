<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/OEmbed/ResourceFetcher.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Cache/UseCacheBackendTrait.php-1594234425',
   'data' => 
  array (
    '0df4a9b2ba2d9e0fa2556b220f50de0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Fetches and caches oEmbed resources.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96b04ca003a3efaaaa7c407f8f068de2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to use a cache backend while respecting a \'use caches\' flag.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ef4fd77f85b41d4d2149ba102234a39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache backend instance.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f83a31bf2add7e651533a1a66ebaf6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag whether caches should be used or skipped.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '676ca186da4221b421ff7e44b112f8bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fetches from the cache backend, respecting the use caches flag.
   *
   * @param string $cid
   *   The cache ID of the data to retrieve.
   *
   * @return object|false
   *   The cache item or FALSE on failure.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::get()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => 'cacheGet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7050b0b1e1b651f1465bfeee5fd55c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores data in the persistent cache, respecting the use caches flag.
   *
   * @param string $cid
   *   The cache ID of the data to store.
   * @param mixed $data
   *   The data to store in the cache.
   *   Some storage engines only allow objects up to a maximum of 1MB in size to
   *   be stored by default. When caching large arrays or similar, take care to
   *   ensure $data does not exceed this size.
   * @param int $expire
   *   One of the following values:
   *   - CacheBackendInterface::CACHE_PERMANENT: Indicates that the item should
   *     not be removed unless it is deleted explicitly.
   *   - A Unix timestamp: Indicates that the item will be considered invalid
   *     after this time, i.e. it will not be returned by get() unless
   *     $allow_invalid has been set to TRUE. When the item has expired, it may
   *     be permanently deleted by the garbage collector at any time.
   * @param array $tags
   *   An array of tags to be stored with the cache item. These should normally
   *   identify objects used to build the cache item, which should trigger
   *   cache invalidation when updated. For example if a cached item represents
   *   a node, both the node ID and the author\'s user ID might be passed in as
   *   tags. For example array(\'node\' => array(123), \'user\' => array(92)).
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::set()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => 'cacheSet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '634fdc744e9d3c1c630fdac135a2e1fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The HTTP client.
   *
   * @var \\GuzzleHttp\\Client
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0dcb803526f69fc902354e88c07cbebe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The oEmbed provider repository service.
   *
   * @var \\Drupal\\media\\OEmbed\\ProviderRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69bf5e80d096d58f8adbf7a339479384' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a ResourceFetcher object.
   *
   * @param \\GuzzleHttp\\ClientInterface $http_client
   *   The HTTP client.
   * @param \\Drupal\\media\\OEmbed\\ProviderRepositoryInterface $providers
   *   The oEmbed provider repository service.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   (optional) The cache backend.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8fa400d2cd3c364749c157412dc6aba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => 'fetchResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '303db38842160deb2cc8a35b08ae8cfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a Resource object from raw resource data.
   *
   * @param array $data
   *   The resource data returned by the provider.
   * @param string $url
   *   The URL of the resource.
   *
   * @return \\Drupal\\media\\OEmbed\\Resource
   *   A value object representing the resource.
   *
   * @throws \\Drupal\\media\\OEmbed\\ResourceException
   *   If the resource cannot be created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => 'createResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5577644ebee9ebbe7e1e898265a6e70c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parses XML resource data.
   *
   * @param string $data
   *   The raw XML for the resource.
   * @param string $url
   *   The resource URL.
   *
   * @return array
   *   The parsed resource data.
   *
   * @throws \\Drupal\\media\\OEmbed\\ResourceException
   *   If the resource data could not be parsed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcher',
         'functionName' => 'parseResourceXml',
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