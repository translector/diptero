<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/migrate/destination/EntityContentBase.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/DependencyInjection/DeprecatedServicePropertyTrait.php-1594234425',
   'data' => 
  array (
    '789caf9e18ed11220d07c1814cb98018' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides destination class for all content entities lacking a specific class.
 *
 * Available configuration keys:
 * - translations: (optional) Boolean, indicates if the entity is translatable,
 *   defaults to FALSE.
 * - overwrite_properties: (optional) A list of properties that will be
 *   overwritten if an entity with the same ID already exists. Any properties
 *   that are not listed will not be overwritten.
 * - validate: (optional) Boolean, indicates whether an entity should be
 *   validated, defaults to FALSE.
 *
 * Example:
 *
 * The example below will create a \'node\' entity of content type \'article\'.
 *
 * The language of the source will be used because the configuration
 * \'translations: true\' was set. Without this configuration option the site\'s
 * default language would be used.
 *
 * The example content type has fields \'title\', \'body\' and \'field_example\'.
 * The text format of the body field is defaulted to \'basic_html\'. The example
 * uses the EmbeddedDataSource source plugin for the sake of simplicity.
 *
 * If the migration is executed again in an update mode, any updates done in the
 * destination Drupal site to the \'title\' and \'body\' fields would be overwritten
 * with the original source values. Updates done to \'field_example\' would be
 * preserved because \'field_example\' is not included in \'overwrite_properties\'
 * configuration.
 * @code
 * id: custom_article_migration
 * label: Custom article migration
 * source:
 *   plugin: embedded_data
 *   data_rows:
 *     -
 *       id: 1
 *       langcode: \'fi\'
 *       title: \'Sivun otsikko\'
 *       field_example: \'Huhuu\'
 *       content: \'<p>Hoi maailma</p>\'
 *   ids:
 *     id:
 *       type: integer
 * process:
 *   nid: id
 *   langcode: langcode
 *   title: title
 *   field_example: field_example
 *   \'body/0/value\': content
 *   \'body/0/format\':
 *     plugin: default_value
 *     default_value: basic_html
 * destination:
 *   plugin: entity:node
 *   default_bundle: article
 *   translations: true
 *   overwrite_properties:
 *     - title
 *     - body
 *   # Run entity and fields validation before saving an entity.
 *   # @see \\Drupal\\Core\\Entity\\FieldableEntityInterface::validate()
 *   validate: true
 * @endcode
 *
 * @see \\Drupal\\migrate\\Plugin\\migrate\\destination\\EntityRevision
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd2d9eb959dec4050a61aaf3a5fe2013' => 
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
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b514cec8aaf339a4acf92f4312fea1f' => 
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
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => '__get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a60f47ff7dda98bbe8a2c0120229f44d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c5c5946777a08cda53837a35ea004b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Entity field manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8ebdfa868246bf492614efa831c93db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Field type plugin manager.
   *
   * @var \\Drupal\\Core\\Field\\FieldTypePluginManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd629dc3bf58887c40eb2e95e0bd1bef4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a content entity.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\migrate\\Plugin\\MigrationInterface $migration
   *   The migration entity.
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The storage for this entity type.
   * @param array $bundles
   *   The list of bundles this entity type has.
   * @param \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager
   *   The entity field manager.
   * @param \\Drupal\\Core\\Field\\FieldTypePluginManagerInterface $field_type_manager
   *   The field type plugin manager service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f45e3e7894203e570fb2dc420743488d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7cd0f00a1d43fa03ce11b55fb9b967c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @throws \\Drupal\\migrate\\MigrateException
   *   When an entity cannot be looked up.
   * @throws \\Drupal\\migrate\\Exception\\EntityValidationException
   *   When an entity validation hasn\'t been passed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'import',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a54c8a31b2d97dd527bc1888d6a9ee89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'isEntityValidationRequired',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a78e7c597ca3943fa680557676436c0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'validateEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bbc7f5ccdc71141f292fb7fe371c868' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves the entity.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
   *   The content entity.
   * @param array $old_destination_id_values
   *   (optional) An array of destination ID values. Defaults to an empty array.
   *
   * @return array
   *   An array containing the entity ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'save',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3757ddbb06a22e0fc46e5480608124d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'isTranslationDestination',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41e99d1278bc0a016f41ddd75454ac58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'getIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9140766bbdb5fa0843ae5fea521e8043' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates an entity with the new values from row.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to update.
   * @param \\Drupal\\migrate\\Row $row
   *   The row object to update from.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   An updated entity from row values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'updateEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94919b42fd47747f02136630789488c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Populates as much of the stub row as possible.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The row of data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'processStubRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5361d30a57ed09a6b2c823c68450e0fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\FieldItemInterface $field_type_class */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'processStubRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bf83c743a5663f63805e1c6ddcb2b0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'rollback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6649c9b408485473c78a8ad4f5026f93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'highestidinterface' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
          'entityvalidationexception' => 'Drupal\\migrate\\Exception\\EntityValidationException',
          'migratevalidatableentityinterface' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase',
         'functionName' => 'getHighestId',
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