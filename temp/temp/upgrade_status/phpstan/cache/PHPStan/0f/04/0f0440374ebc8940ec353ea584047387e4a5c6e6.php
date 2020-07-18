<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Asset/LibraryDiscovery.php-1594234425',
   'data' => 
  array (
    'a0caed41092e72bcbb0453ae1a8f7a91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Discovers available asset libraries in Drupal.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
          'cachecollectorinterface' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscovery',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7039858374a617af19e9b1cb6b65370a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The library discovery cache collector.
   *
   * @var \\Drupal\\Core\\Cache\\CacheCollectorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
          'cachecollectorinterface' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscovery',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42b4edc5b3eefebf0b7f442f902dc565' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The final library definitions, statically cached.
   *
   * Hooks hook_library_info_alter() and hook_js_settings_alter() allow modules
   * and themes to dynamically alter a library definition (once per request).
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
          'cachecollectorinterface' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscovery',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3f4e47ceaa0d463e5da08d6b5fe597f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new LibraryDiscovery instance.
   *
   * @param \\Drupal\\Core\\Cache\\CacheCollectorInterface $library_discovery_collector
   *   The library discovery cache collector.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
          'cachecollectorinterface' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscovery',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a5c99342df732db9cc2863608b0206d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
          'cachecollectorinterface' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscovery',
         'functionName' => 'getLibrariesByExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91563c1f566e209ccca5442a01dd8ea2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
          'cachecollectorinterface' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscovery',
         'functionName' => 'getLibraryByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c538fd50e5203b8e69791e9e00fcbd4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
          'cachecollectorinterface' => 'Drupal\\Core\\Cache\\CacheCollectorInterface',
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscovery',
         'functionName' => 'clearCachedDefinitions',
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