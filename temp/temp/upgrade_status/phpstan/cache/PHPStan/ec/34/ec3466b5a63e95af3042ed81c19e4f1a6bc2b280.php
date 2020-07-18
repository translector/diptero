<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/src/Functional/UrlTest.php-1586203134,/var/www/html/web/core/modules/system/tests/src/Functional/Cache/AssertPageCacheContextsAndTagsTrait.php-1594234425',
   'data' => 
  array (
    '5d81065ef4b4e2adee04a93160366f1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests URL tokens.
 *
 * @group token
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7de8a2ce07b7d8f3f983de4c3d9e533' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1eb15a615be0a9d1fa397d39b01e5d42' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'enablePageCaching',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e4c35a3aadec817956eaa8ef408ebad' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'getCacheHeaderValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae2935368e580e3e92095cfdcb26c475' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'assertCacheContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8923f18d7a22e20a7787f42dd535de6' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'assertNoCacheContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '009bc7d8cd0a9f0d76e88660eb147d3d' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'assertPageCacheContextsAndTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ceb3a361ee170a77cf1a2c0008320b9' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'assertCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8632ca7982d52443eb3b5573acd9fe02' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'assertCacheContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd0b13f57df5cc23c01a877dce398431' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'assertCacheMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38df355140f1d1888128a2e166ae9428' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The first testing node.
   *
   * @var \\Drupal\\node\\NodeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f583b9e0e155f9fb6f75e2ad336a95e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The second testing node.
   *
   * @var \\Drupal\\node\\NodeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '982c7011791aacf7b8b14032e6e7681f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to install.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0048b515e84d55440118f3999e65d279' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ab4c14c96b0a90bb00d90b91caa16dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '881fb27118e56cddbb7ed932c5ce22dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a block with token for title and tests cache contexts.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementHtmlException
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\UrlTest',
         'functionName' => 'testBlockUrlTokenReplacement',
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