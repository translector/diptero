<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/tests/src/Kernel/MigrateSqlSourceTestBase.php-1594234425',
   'data' => 
  array (
    '9525ab33e4349b4d792f6ad56bd20e5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for tests of Migrate source plugins that use a database.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSqlSourceTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4e17b2917feced8a4ac4d2282417859' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an in-memory SQLite database from a set of source data.
   *
   * @param array $source_data
   *   The source data, keyed by table name. Each table is an array containing
   *   the rows in that table.
   *
   * @return \\Drupal\\Core\\Database\\Driver\\sqlite\\Connection
   *   The SQLite database connection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSqlSourceTestBase',
         'functionName' => 'getDatabase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58a6eeff1bce780895133a929b611d28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the source plugin against a particular data set.
   *
   * @param array $source_data
   *   The source data that the plugin will read. See getDatabase() for the
   *   expected format.
   * @param array $expected_data
   *   The result rows the plugin is expected to return.
   * @param int $expected_count
   *   (optional) How many rows the source plugin is expected to return.
   * @param array $configuration
   *   (optional) Configuration for the source plugin.
   * @param mixed $high_water
   *   (optional) The value of the high water field.
   *
   * @dataProvider providerSource
   *
   * @requires extension pdo_sqlite
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSqlSourceTestBase',
         'functionName' => 'testSource',
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