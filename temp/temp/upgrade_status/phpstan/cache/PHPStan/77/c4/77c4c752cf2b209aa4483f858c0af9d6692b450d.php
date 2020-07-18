<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/SelectionDisplayManager.php-1588013888',
   'data' => 
  array (
    'c376eefb02b83e5fc5dad66b448e196a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages entity browser selection display plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b422a322bb4c062dc54c8203ddffca92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new SelectionDisplayManager.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayManager',
         'functionName' => '__construct',
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