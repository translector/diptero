<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/Kernel/migrate/ParagraphsMigrationTestBase.php-1590060906',
   'data' => 
  array (
    'dc3be652ef262ba8e18a9be7a1a2b948' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for the paragraph migrations tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2f7ad53d5e91a2c43a941feff5644a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce280ae357167f6072292ad07c5f7105' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if paragraph types were created.
   *
   * @param string $bundle_machine_name
   *   The bundle to test for.
   * @param string $bundle_label
   *   The bundle\'s label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => 'assertParagraphBundleExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '717511709d24b8d4c2d0262730e18c5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if a field storage config entity was created for the paragraph.
   *
   * @param string $field_name
   *   The field to test for.
   * @param string $field_type
   *   The expected field type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => 'assertParagraphEntityFieldExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c959f98a8c949b92060595b23c99da1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if a field storage entity was created for the paragraph fields.
   *
   * @param string $entity_type
   *   The entity type to check on.
   * @param string $field_name
   *   The field name to check for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => 'assertParagraphFieldExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e150ff34e93732a0e07268d74d426f25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test if the given field instance was created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => 'assertFieldInstanceExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd87c098b7a295e89c3b316a64f06ca5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Execute a migration\'s dependencies followed by the migration.
   *
   * @param string $plugin_id
   *   The migration id to execute.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => 'executeMigrationWithDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9c84aab3492fda84dc129c3fc711d00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface $manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => 'executeMigrationWithDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bb57c17333e743b94ba2590e3754bc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Find and execute a migration\'s dependencies.
   *
   * @param \\Drupal\\migrate\\Plugin\\MigrationInterface $migration
   *   The Migration from which to execute dependencies.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => 'executeMigrationDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93fb0832cad842ff3c60f785c22a58b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\migrate\\ParagraphsMigrationTestBase',
         'functionName' => 'prepareMigration',
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