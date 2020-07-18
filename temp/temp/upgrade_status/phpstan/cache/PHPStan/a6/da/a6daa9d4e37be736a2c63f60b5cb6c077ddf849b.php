<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/migrate/destination/EntityRevision.php-1594234425',
   'data' => 
  array (
    'b43df53149b17b033401a41f00f2e40e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides entity revision destination plugin.
 *
 * Refer to the parent class for configuration keys:
 * \\Drupal\\migrate\\Plugin\\migrate\\destination\\EntityContentBase
 *
 * Entity revisions can only be migrated after the entity to which the revisions
 * belong has been migrated. For example, revisions of a given content type can
 * be migrated only after the nodes of that content type have been migrated.
 *
 * In order to avoid revision ID conflicts, make sure that the entity migration
 * also includes the revision ID. If the entity migration did not include the
 * revision ID, the entity would get the next available revision ID (1 when
 * migrating to a clean database). Then, when revisions are migrated after the
 * entities, the revision IDs would almost certainly collide.
 *
 * The examples below contain simple node and node revision migrations. The
 * examples use the EmbeddedDataSource source plugin for the sake of
 * simplicity. The important part of both examples is the \'vid\' property, which
 * is the revision ID for nodes.
 *
 * Example of \'article\' node migration, which must be executed before the
 * \'article\' revisions.
 * @code
 * id: custom_article_migration
 * label: \'Custom article migration\'
 * source:
 *   plugin: embedded_data
 *   data_rows:
 *     -
 *       nid: 1
 *       vid: 2
 *       revision_timestamp: 1514661000
 *       revision_log: \'Second revision\'
 *       title: \'Current title\'
 *       content: \'<p>Current content</p>\'
 *   ids:
 *     nid:
 *       type: integer
 * process:
 *   nid: nid
 *   vid: vid
 *   revision_timestamp: revision_timestamp
 *   revision_log: revision_log
 *   title: title
 *   \'body/0/value\': content
 *   \'body/0/format\':
 *      plugin: default_value
 *      default_value: basic_html
 * destination:
 *   plugin: entity:node
 *   default_bundle: article
 * @endcode
 *
 * Example of the corresponding node revision migration, which must be executed
 * after the above migration.
 * @code
 * id: custom_article_revision_migration
 * label: \'Custom article revision migration\'
 * source:
 *   plugin: embedded_data
 *   data_rows:
 *     -
 *       nid: 1
 *       vid: 1
 *       revision_timestamp: 1514660000
 *       revision_log: \'First revision\'
 *       title: \'Previous title\'
 *       content: \'<p>Previous content</p>\'
 *   ids:
 *     nid:
 *       type: integer
 * process:
 *   nid:
 *     plugin: migration_lookup
 *     migration: custom_article_migration
 *     source: nid
 *   vid: vid
 *   revision_timestamp: revision_timestamp
 *   revision_log: revision_log
 *   title: title
 *   \'body/0/value\': content
 *   \'body/0/format\':
 *      plugin: default_value
 *      default_value: basic_html
 * destination:
 *   plugin: entity_revision:node
 *   default_bundle: article
 * migration_dependencies:
 *   required:
 *     - custom_article_migration
 * @endcode
 *
 * @MigrateDestination(
 *   id = "entity_revision",
 *   deriver = "Drupal\\migrate\\Plugin\\Derivative\\MigrateEntityRevision"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityRevision',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd324104e0db25c5d856d318cbbabc855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityRevision',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '304b1d885f1dcc03b9eeb7e810704cb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The row object.
   * @param array $old_destination_id_values
   *   The old destination IDs.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface|false
   *   The entity or false if it can not be created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityRevision',
         'functionName' => 'getEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8210c38d070d33fbebb7aa8acd9545a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityRevision',
         'functionName' => 'save',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c4b1ce596402d8bf77535e1195bfdca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityRevision',
         'functionName' => 'getIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4ebc712b1554efbf5b7c04e0b2c740e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\EntityRevision',
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