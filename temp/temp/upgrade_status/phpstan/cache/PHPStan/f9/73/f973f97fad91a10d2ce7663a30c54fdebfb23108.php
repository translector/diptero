<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/migrate/destination/DestinationBase.php-1594234425',
   'data' => 
  array (
    '2cf31180c409a7bac4fa22e7df988780' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for migrate destination classes.
 *
 * Migrate destination plugins perform the import operation of the migration.
 * Destination plugins extend this abstract base class. A destination plugin
 * must implement at least fields(), getIds() and import() methods. Destination
 * plugins can also support rollback operations. For more
 * information, refer to \\Drupal\\migrate\\Plugin\\MigrateDestinationInterface.
 *
 * @see \\Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager
 * @see \\Drupal\\migrate\\Annotation\\MigrateDestination
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2e233fa91974b8bc1d69f17e302a6d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether the destination can be rolled back.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6fbc0664483711909f50ac6d7612d2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The rollback action to be saved for the last imported item.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f55332efb57ad1c2bccb1e6484263f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The migration.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bcd33fa1e19180ea154e8d3e779292c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an entity destination plugin.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\migrate\\Plugin\\MigrationInterface $migration
   *   The migration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b550a9f9c52387ef583b014394675b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => 'rollbackAction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2d42d6272280b9b48caf3baf974960e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => 'checkRequirements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc3a580f1d10964cd3dd1a6dfe3d0273' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => 'rollback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2623dfa828e86102344654170836e838' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => 'supportsRollback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4912619173e05e6f0589f59af243ef81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * For a destination item being updated, set the appropriate rollback action.
   *
   * @param array $id_map
   *   The map row data for the item.
   * @param int $update_action
   *   The rollback action to take if we are updating an existing item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => 'setRollbackAction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97054847727c4014c52e9489e36200cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migratedestinationinterface' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase',
         'functionName' => 'getDestinationModule',
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