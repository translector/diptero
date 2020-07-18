<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/OEmbed/UrlResolver.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Cache/UseCacheBackendTrait.php-1594234425',
   'data' => 
  array (
    'b1e825293b33bec313ed5ee7edbd1226' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts oEmbed media URLs into endpoint-specific resource URLs.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52b024e350cf42581396f0bef98490b2' => 
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
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b4c9a35444c74a5806cf99221e38c57' => 
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
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '533c5930a88d4ca5ca4a033d075c3264' => 
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
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8f1b7288a9d494c16fffeabed30e26f' => 
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
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => 'cacheGet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46c2905c1a83b6995d408008dcd873ca' => 
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
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => 'cacheSet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fef846eede4f1d90939c28f3fccc29c' => 
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
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81124d4749eca68bdf00e9240b281ec4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The OEmbed provider repository service.
   *
   * @var \\Drupal\\media\\OEmbed\\ProviderRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24fdbc08dba505c8d2a3214e332f23de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The OEmbed resource fetcher service.
   *
   * @var \\Drupal\\media\\OEmbed\\ResourceFetcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8e2cdaaa7a021c313a854aaba78434d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler service.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1883ff5449aed4ab57dc2735c91e27a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Static cache of discovered oEmbed resource URLs, keyed by canonical URL.
   *
   * A discovered resource URL is the actual endpoint URL for a specific media
   * object, fetched from its canonical URL.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c23774a28ba18b6ee8088127441751a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a UrlResolver object.
   *
   * @param \\Drupal\\media\\OEmbed\\ProviderRepositoryInterface $providers
   *   The oEmbed provider repository service.
   * @param \\Drupal\\media\\OEmbed\\ResourceFetcherInterface $resource_fetcher
   *   The OEmbed resource fetcher service.
   * @param \\GuzzleHttp\\ClientInterface $http_client
   *   The HTTP client.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler service.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   (optional) The cache backend.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31a549a0dec2ab5b8fd03e138facee28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs oEmbed discovery and returns the endpoint URL if successful.
   *
   * @param string $url
   *   The resource\'s URL.
   *
   * @return string|bool
   *   URL of the oEmbed endpoint, or FALSE if the discovery was unsuccessful.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => 'discoverResourceUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de89daec2c786020be0e59a704215bf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tries to find the oEmbed URL in a DOM.
   *
   * @param \\DOMXPath $xpath
   *   Page HTML as DOMXPath.
   * @param string $format
   *   Format of oEmbed resource. Possible values are \'json\' and \'xml\'.
   *
   * @return bool|string
   *   A URL to an oEmbed resource or FALSE if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => 'findUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bf2292d39195aa7eee3a4c722123d03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => 'getProviderByUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05354fd87a047207f1a1f60aa344be01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'clientinterface' => 'GuzzleHttp\\ClientInterface',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolver',
         'functionName' => 'getResourceUrl',
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