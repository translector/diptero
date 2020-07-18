<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/MigratePluginManager.php-1594234425',
   'data' => 
  array (
    '2f2753a3cddca539a4d1520b38cf6512' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages migrate plugins.
 *
 * @see hook_migrate_info_alter()
 * @see \\Drupal\\migrate\\Annotation\\MigrateSource
 * @see \\Drupal\\migrate\\Plugin\\MigrateSourceInterface
 * @see \\Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase
 * @see \\Drupal\\migrate\\Annotation\\MigrateProcessPlugin
 * @see \\Drupal\\migrate\\Plugin\\MigrateProcessInterface
 * @see \\Drupal\\migrate\\Plugin\\migrate\\process\\ProcessPluginBase
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'defaultfactory' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8b93dee1b589705993c85e20787c149' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a MigratePluginManager object.
   *
   * @param string $type
   *   The type of the plugin: row, source, process, destination, entity_field,
   *   id_map.
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   * @param string $annotation
   *   (optional) The annotation class name. Defaults to
   *   \'Drupal\\Component\\Annotation\\PluginID\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'defaultfactory' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fd7a9c5d10c27c86c4ba84674db45a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'defaultfactory' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
         'functionName' => 'createInstance',
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