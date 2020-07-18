<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/MigrateDestinationPluginManager.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/DependencyInjection/DeprecatedServicePropertyTrait.php-1594234425',
   'data' => 
  array (
    '0909bcd6ddd2d6462d48d01096146213' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin manager for migrate destination plugins.
 *
 * @see \\Drupal\\migrate\\Plugin\\MigrateDestinationInterface
 * @see \\Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase
 * @see \\Drupal\\migrate\\Annotation\\MigrateDestination
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b02f97734210940bf805ad7e443c508' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a standard way to announce deprecated properties.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd971f7672056ade0b01e9b4607479d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alows to access deprecated/removed properties.
   *
   * This method must be public.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
         'functionName' => '__get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e02e295c21efee4d02ada987a40db96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90fc856cdea447473601c53a482f1efa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba8d6c432c83fbd4159982427f2b2019' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a MigrateDestinationPluginManager object.
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
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param string $annotation
   *   (optional) The annotation class name. Defaults to
   *   \'Drupal\\migrate\\Annotation\\MigrateDestination\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6fc2b7fcd7ca16f25a16944be65523b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * A specific createInstance method is necessary to pass the migration on.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
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