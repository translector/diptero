<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/migrate/destination/Entity.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Entity/DependencyTrait.php-1594234425,/var/www/html/web/core/modules/migrate/src/EntityFieldDefinitionTrait.php-1594234425',
   'data' => 
  array (
    '8a205317159e5dbe07c42c167cd83870' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a generic destination to import entities.
 *
 * Examples:
 *
 * @code
 * source:
 *   plugin: d7_node
 * process:
 *   nid: tnid
 *   vid: vid
 *   langcode: language
 *   title: title
 *   ...
 *   revision_timestamp: timestamp
 * destination:
 *   plugin: entity:node
 * @endcode
 *
 * This will save the processed, migrated row as a node.
 *
 * @code
 * source:
 *   plugin: d7_node
 * process:
 *   nid: tnid
 *   vid: vid
 *   langcode: language
 *   title: title
 *   ...
 *   revision_timestamp: timestamp
 * destination:
 *   plugin: entity:node
 * @endcode
 *
 * @MigrateDestination(
 *   id = "entity",
 *   deriver = "Drupal\\migrate\\Plugin\\Derivative\\MigrateEntity"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3662c50ae0e9b6ec1ff68c1cd2953e0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for managing an object\'s dependencies.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8541d5ffbe8b2e4bf1384337943e3da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The object\'s dependencies.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79ac7e472f132d334e42b88fe59aae01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a dependency.
   *
   * @param string $type
   *   Type of dependency being added: \'module\', \'theme\', \'config\', \'content\'.
   * @param string $name
   *   If $type is \'module\' or \'theme\', the name of the module or theme. If
   *   $type is \'config\' or \'content\', the result of
   *   EntityInterface::getConfigDependencyName().
   *
   * @see \\Drupal\\Core\\Entity\\EntityInterface::getConfigDependencyName()
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'addDependency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49d065684b4091d247438e1d48103520' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds multiple dependencies.
   *
   * @param array $dependencies
   *   An array of dependencies keyed by the type of dependency. One example:
   *   @code
   *   array(
   *     \'module\' => array(
   *       \'node\',
   *       \'field\',
   *       \'image\',
   *     ),
   *   );
   *   @endcode
   *
   * @see \\Drupal\\Core\\Entity\\DependencyTrait::addDependency
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'addDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cd2bc888f7115d328426f2c22599364' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The entity field definition trait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '718cf34414b06776b00f75cd318de6ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the field definition from a specific entity base field.
   *
   * The method takes the field ID as an argument and returns the field storage
   * definition to be used in getIds() by querying the destination entity base
   * field definition.
   *
   * @param string $key
   *   The field ID key.
   *
   * @return array
   *   An associative array with a structure that contains the field type, keyed
   *   as \'type\', together with field storage settings as they are returned by
   *   FieldStorageDefinitionInterface::getSettings().
   *
   * @see \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface::getSettings()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'getDefinitionFromEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2fe56d4859ef94884726714b72f1fa0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $definitions */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'getDefinitionFromEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31623a9cc2fd813dd0592ebc8b6da86b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds the entity type from configuration or plugin ID.
   *
   * @param string $plugin_id
   *   The plugin ID.
   *
   * @return string
   *   The entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'getEntityTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '631763324750cf37d439bf6dfbca4d23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7c33c1b1a01acfc32a75bd3bf4f3d87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The list of the bundles of this entity type.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18f9535dc3e741d11b519b81b64b7409' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Construct a new entity.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\migrate\\Plugin\\MigrationInterface $migration
   *   The migration.
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The storage for this entity type.
   * @param array $bundles
   *   The list of bundles this entity type has.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ece5df4a3041604e954e6b873a5d1629' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f22706126a0bac78b8b16c0b4f4d2a13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the bundle for the row taking into account the default.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The current row we\'re importing.
   *
   * @return string
   *   The bundle for this row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'getBundle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75e453387d319ab10e1ccefd60386548' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'fields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20bd7986811b9b33d5dea7ec895725e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates or loads an entity.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The row object.
   * @param array $old_destination_id_values
   *   The old destination IDs.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The entity we are importing into.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'getEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef59162ac7aa678e225ccb10ab27497e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity ID of the row.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The row of data.
   *
   * @return string
   *   The entity ID for the row that we are importing.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'getEntityId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9a90b48770311b05f8d391a7fa27ae6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a specific entity key.
   *
   * @param string $key
   *   The name of the entity key to return.
   *
   * @return string|bool
   *   The entity key, or FALSE if it does not exist.
   *
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::getKeys()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'getKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4387f34718b9577d239faa512b740ffb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'rollback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b591a5599f765cbfc8fd5ff9cae13efa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'entityfielddefinitiontrait' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\Entity',
         'functionName' => 'calculateDependencies',
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