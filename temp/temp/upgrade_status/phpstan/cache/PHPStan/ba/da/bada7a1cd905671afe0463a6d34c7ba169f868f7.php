<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/system/tests/src/Functional/Cache/AssertPageCacheContextsAndTagsTrait.php-1594234425',
   'data' => 
  array (
    'e63f6dfed1c5ed00cb54ef9943eaac53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides test assertions for testing page-level cache contexts & tags.
 *
 * Can be used by test classes that extend \\Drupal\\Tests\\BrowserTestBase.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\system\\Functional\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9ad36d0dc8f666585c63fd21577585c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enables page caching.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\system\\Functional\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'enablePageCaching',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc04d71096bb0d1157f85b54a4d9a9f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific header value as array.
   *
   * @param string $header_name
   *   The header name.
   *
   * @return string[]
   *   The header value, potentially exploded by spaces.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\system\\Functional\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'getCacheHeaderValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92a6d6461529a9724ffd4f9f08925ee9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts whether an expected cache context was present in the last response.
   *
   * @param string $expected_cache_context
   *   The expected cache context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\system\\Functional\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertCacheContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abc8ff38dd45c5c137594943788ff5cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a cache context was not present in the last response.
   *
   * @param string $not_expected_cache_context
   *   The expected cache context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\system\\Functional\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertNoCacheContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '094ff1e0ff2f0fd15cb0e9fad9a286ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts page cache miss, then hit for the given URL; checks cache headers.
   *
   * @param \\Drupal\\Core\\Url $url
   *   The URL to test.
   * @param string[] $expected_contexts
   *   The expected cache contexts for the given URL.
   * @param string[] $expected_tags
   *   The expected cache tags for the given URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\system\\Functional\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertPageCacheContextsAndTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35f7b613608fefc6d258d9739db2eab7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures that some cache tags are present in the current response.
   *
   * @param string[] $expected_tags
   *   The expected tags.
   * @param bool $include_default_tags
   *   (optional) Whether the default cache tags should be included.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\system\\Functional\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8e6eb428a1ffeabfd1adcd0810af261' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures that some cache contexts are present in the current response.
   *
   * @param string[] $expected_contexts
   *   The expected cache contexts.
   * @param string $message
   *   (optional) A verbose message to output.
   * @param bool $include_default_contexts
   *   (optional) Whether the default contexts should automatically be included.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\system\\Functional\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertCacheContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12bd279f662c677ce5de167577b2b967' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the max age header.
   *
   * @param int $max_age
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\system\\Functional\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertCacheMaxAge',
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