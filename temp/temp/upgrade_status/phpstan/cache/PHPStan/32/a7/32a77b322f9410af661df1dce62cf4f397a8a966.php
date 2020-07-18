<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate_drupal/tests/src/Kernel/d7/MigrateDrupal7TestBase.php-1594234425,/var/www/html/web/core/modules/migrate_drupal/tests/src/Traits/NodeMigrateTypeTestTrait.php-1594234425',
   'data' => 
  array (
    '864a9079e41065e2f4d9d899480fe770' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for Drupal 7 migration tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '134eeaca9348c8211ba08a1fb4fc43cb' => 
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
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a70f306d64ea78c266f9a4ad019223ed' => 
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
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '607bbb76efb4d3564b7e2c89ec8a40d2' => 
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
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'nodeMigrateMapTableCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3522bc4e94201cb36205e1664053742' => 
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
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'removeNodeMigrateMapTable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a47acebdf2158651fb71ef6501a8e85b' => 
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
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'getTableName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2497b06455eb7d108a4ddf796365954' => 
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
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'makeNodeMigrateMapTable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65e214b6d80ae098a19a914664ae79e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc1d0f4b6101fc14a8c4d774bbb2f2ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the path to the fixture file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'getFixtureFilePath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93c54e66bc9d2cc630773c7fde106b56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes all field migrations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'migrateFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7dd857164e342dbec94c9067cb80c7a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes all user migrations.
   *
   * @param bool $include_pictures
   *   (optional) If TRUE, migrates user pictures. Defaults to TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'migrateUsers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea965a956056f59a23f62cb87317e0b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Migrates node types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'migrateContentTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a6d15288c5fe0d2812827d6db69ff21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Migrates comment types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'migrateCommentTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2ce2b4a93a653d2d1588ca001a948d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes all content migrations.
   *
   * @param bool $include_revisions
   *   (optional) If TRUE, migrates node revisions. Defaults to FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'migrateContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ddc35b7d5a620e4c8348960fc42ffe9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes all taxonomy term migrations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7',
         'uses' => 
        array (
          'nodemigratetype' => 'Drupal\\migrate_drupal\\NodeMigrateType',
          'migratedrupaltestbase' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\MigrateDrupalTestBase',
          'nodemigratetypetesttrait' => 'Drupal\\Tests\\migrate_drupal\\Traits\\NodeMigrateTypeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\migrate_drupal\\Kernel\\d7\\MigrateDrupal7TestBase',
         'functionName' => 'migrateTaxonomyTerms',
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