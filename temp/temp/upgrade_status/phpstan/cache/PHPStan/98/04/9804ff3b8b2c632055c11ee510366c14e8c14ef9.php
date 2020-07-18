<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate_drupal/tests/src/Kernel/d6/MigrateDrupal6TestBase.php-1594234425,/var/www/html/web/core/modules/migrate_drupal/tests/src/Traits/NodeMigrateTypeTestTrait.php-1594234425',
   'data' => 
  array (
    'fa30ddd9b3b5cb93a83ed780b58d18cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for Drupal 6 migration tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd4e249cdcbb1f4e3c5b6b947f8e9db9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper functions to test complete and classic node migrations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Traits',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87e3206253d59b98aeb70c8608ef8595' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The migrate_map table name.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Traits',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c587ac19b878f6c8171bcccf63704502' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the numbers of complete and classic node migrate_map tables.
   *
   * @param string $version
   *   The source database version.
   *
   * @return array
   *   An associative array with the total number of complete and classic
   *   node migrate_map tables.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Traits',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'nodeMigrateMapTableCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85b171fb82842ac49c827009283904a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Remove the node migrate map table.
   *
   * @param string $type
   *   The type of node migration, \'complete\' or \'classic\'.
   * @param string $version
   *   The source database version.
   *
   * @throws \\Exception
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Traits',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'removeNodeMigrateMapTable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1221d26571f99a9a3f7670a070a8024d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the migrate_map table name.
   *
   * @param string $type
   *   The type of node migration, \'complete\' or \'classic\'.
   * @param string $version
   *   The source database version.
   *
   * @return string
   *   The migrate_map table name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Traits',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'getTableName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9127ca21475556971057d277f8ec0208' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a node migrate_map table.
   *
   * @param string $type
   *   The type of node migration, \'complete\' or \'classic\'.
   * @param string $version
   *   The source database version.
   *
   * @throws \\Exception
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Traits',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'makeNodeMigrateMapTable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7af80ca1fd474cf4e4fd2688280029b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '102bcb5a379981336345e5214d925ab3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '320139e0bcb7c6771f870f706aa6ba38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the path to the fixture file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'getFixtureFilePath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1999714ff1503d83e1f56ed10e805b60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes all user migrations.
   *
   * @param bool $include_pictures
   *   If TRUE, migrates user pictures.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'migrateUsers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25a9893c19cf7cd63e674bb1533b5366' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Migrates node types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'migrateContentTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '788731624339fdd85ac50057831d4bec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes all field migrations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'migrateFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccbdb447985a95eaac97e148f3f9858e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes all content migrations.
   *
   * @param array $include
   *   Extra things to include as part of the migrations. Values may be
   *   \'revisions\' or \'translations\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'migrateContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71312982a57f9d836c9d29fdf61c7b0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes all taxonomy migrations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d6\\MigrateDrupal6TestBase',
         'functionName' => 'migrateTaxonomy',
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