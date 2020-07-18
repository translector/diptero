<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/field_group/contrib/field_group_migrate/tests/src/Kernel/Migrate/d7/MigrateFieldGroupTest.php-1591739040',
   'data' => 
  array (
    '93fea726bedd643bd6c53d4fa12c9d79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests field group migration.
 *
 * @group field_group
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7',
         'uses' => 
        array (
          'migratedrupal7testbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
        ),
         'className' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7\\MigrateFieldGroupTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bab2f36442a7c9ce7cbd623df04e27c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7',
         'uses' => 
        array (
          'migratedrupal7testbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
        ),
         'className' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7\\MigrateFieldGroupTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a24e0b0a92571c08fdd57f1c17f2825a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7',
         'uses' => 
        array (
          'migratedrupal7testbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
        ),
         'className' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7\\MigrateFieldGroupTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9329fb263b934f90089e3ef2000330a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts various aspects of a migrated field group.
   *
   * @param $id
   *   The id of the entity display to which the field group applies.
   * @param $type
   *   The destination type.
   * @param $group_name
   *   The name of the field group.
   * @param $expected_label
   *   The expected label.
   * @param int $expected_weight
   *   The expected label.
   * @param array $expected_format_settings
   *   The expected format settings.
   * @param string $expected_format_type
   *   The expected format type.
   * @param array $expected_children
   *   The expected children.
   * @param string $expected_parent_name
   *   The expected parent name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7',
         'uses' => 
        array (
          'migratedrupal7testbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
        ),
         'className' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7\\MigrateFieldGroupTest',
         'functionName' => 'assertEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06c3e492df2ad4ae9a9049a2e4e88961' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityDisplayInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7',
         'uses' => 
        array (
          'migratedrupal7testbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
        ),
         'className' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7\\MigrateFieldGroupTest',
         'functionName' => 'assertEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e993d3e4439704688dbcdb6b3edd3a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test field group migration from Drupal 7 to 8.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7',
         'uses' => 
        array (
          'migratedrupal7testbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
        ),
         'className' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7\\MigrateFieldGroupTest',
         'functionName' => 'testFieldGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c128d25969b736ce3265d844e417057' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityDisplayInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7',
         'uses' => 
        array (
          'migratedrupal7testbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
        ),
         'className' => 'Drupal\\Tests\\field_group_migrate\\Kernel\\Migrate\\d7\\MigrateFieldGroupTest',
         'functionName' => 'testFieldGroup',
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