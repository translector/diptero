<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate_drupal/src/Plugin/migrate/FieldMigration.php-1594234425',
   'data' => 
  array (
    '502bc7392e9235328a47c1e23eed62a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Migration plugin class for migrations dealing with field config and values.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate',
         'uses' => 
        array (
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migratedestinationpluginmanager' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
          'migratepluginmanager' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
          'migration' => 'Drupal\\migrate\\Plugin\\Migration',
          'migrationpluginmanagerinterface' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
          'fielddiscoveryinterface' => 'Drupal\\migrate_drupal\\FieldDiscoveryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\FieldMigration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31b636fc4bed66c16e4dd8be1bdc36b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines which configuration option has the migration processing function.
   *
   * Default method is \'field_plugin_method\'. For backwards compatibility,
   * this constant is overridden in the CckMigration class, in order to
   * fallback to the old \'cck_plugin_method\'.
   *
   * @const string
   * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use the migrate_drupal.field_discovery service instead. See https://www.drupal.org/node/3006076.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate',
         'uses' => 
        array (
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migratedestinationpluginmanager' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
          'migratepluginmanager' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
          'migration' => 'Drupal\\migrate\\Plugin\\Migration',
          'migrationpluginmanagerinterface' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
          'fielddiscoveryinterface' => 'Drupal\\migrate_drupal\\FieldDiscoveryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\FieldMigration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50132d31f5b720f4c544cb0c0f7c39d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag indicating whether the field data has been filled already.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate',
         'uses' => 
        array (
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migratedestinationpluginmanager' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
          'migratepluginmanager' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
          'migration' => 'Drupal\\migrate\\Plugin\\Migration',
          'migrationpluginmanagerinterface' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
          'fielddiscoveryinterface' => 'Drupal\\migrate_drupal\\FieldDiscoveryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\FieldMigration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '030854cf028993c10a6105b27263d6be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The migration field discovery service.
   *
   * @var \\Drupal\\migrate_drupal\\FieldDiscoveryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate',
         'uses' => 
        array (
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migratedestinationpluginmanager' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
          'migratepluginmanager' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
          'migration' => 'Drupal\\migrate\\Plugin\\Migration',
          'migrationpluginmanagerinterface' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
          'fielddiscoveryinterface' => 'Drupal\\migrate_drupal\\FieldDiscoveryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\FieldMigration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db1d91f3b3baea063efd07219491e170' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a FieldMigration.
   *
   * @param array $configuration
   *   Plugin configuration.
   * @param string $plugin_id
   *   The plugin ID.
   * @param mixed $plugin_definition
   *   The plugin definition.
   * @param \\Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface $migration_plugin_manager
   *   The migration plugin manager.
   * @param \\Drupal\\migrate\\Plugin\\MigratePluginManager $source_plugin_manager
   *   The source migration plugin manager.
   * @param \\Drupal\\migrate\\Plugin\\MigratePluginManager $process_plugin_manager
   *   The process migration plugin manager.
   * @param \\Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager $destination_plugin_manager
   *   The destination migration plugin manager.
   * @param \\Drupal\\migrate\\Plugin\\MigratePluginManager $idmap_plugin_manager
   *   The ID map migration plugin manager.
   * @param \\Drupal\\migrate_drupal\\FieldDiscoveryInterface $field_discovery
   *   The migration field discovery service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate',
         'uses' => 
        array (
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migratedestinationpluginmanager' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
          'migratepluginmanager' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
          'migration' => 'Drupal\\migrate\\Plugin\\Migration',
          'migrationpluginmanagerinterface' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
          'fielddiscoveryinterface' => 'Drupal\\migrate_drupal\\FieldDiscoveryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\FieldMigration',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86e6b9f849ec361b2f3adc7e0a3b6043' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate',
         'uses' => 
        array (
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migratedestinationpluginmanager' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
          'migratepluginmanager' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
          'migration' => 'Drupal\\migrate\\Plugin\\Migration',
          'migrationpluginmanagerinterface' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
          'fielddiscoveryinterface' => 'Drupal\\migrate_drupal\\FieldDiscoveryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\FieldMigration',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69d70e2e13e41931ca22de4982b4fc98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate',
         'uses' => 
        array (
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migratedestinationpluginmanager' => 'Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager',
          'migratepluginmanager' => 'Drupal\\migrate\\Plugin\\MigratePluginManager',
          'migration' => 'Drupal\\migrate\\Plugin\\Migration',
          'migrationpluginmanagerinterface' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
          'fielddiscoveryinterface' => 'Drupal\\migrate_drupal\\FieldDiscoveryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\FieldMigration',
         'functionName' => 'getProcess',
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