<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/tests/src/Unit/MigrateTestCase.php-1594234425',
   'data' => 
  array (
    'c210061bfa9682fa394844a3a780cf00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides setup and helper methods for Migrate module tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fde7d8762c2dc13bbe75bcb6745b3fee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of migration configuration values.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8adedbdfe0f04c6e90b430118fbee308' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The migration ID map.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrateIdMapInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67135dc6fd5f322174d561d1fc944c66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Local store for mocking setStatus()/getStatus().
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd36a17558bbe4c7d832d188b3bcb0156' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a mocked migration.
   *
   * @return \\Drupal\\migrate\\Plugin\\MigrationInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
   *   The mocked migration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => 'getMigration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c96149282a7195cfb5d65d5dcfe4adf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an SQLite database connection object for use in tests.
   *
   * @param array $database_contents
   *   The database contents faked as an array. Each key is a table name, each
   *   value is a list of table rows, an associative array of field => value.
   * @param array $connection_options
   *   (optional) Options for the database connection. Defaults to an empty
   *   array.
   *
   * @return \\Drupal\\Core\\Database\\Driver\\sqlite\\Connection
   *   The database connection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => 'getDatabase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bcd2f8028bd12090bded39ffe784374' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a table schema from a row.
   *
   * @param array $row
   *   The reference row on which to base the schema.
   *
   * @return array
   *   The Schema API-ready table schema.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => 'createSchemaFromRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c011b2ab7f5ef7f34b74a908c81cd292' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests a query.
   *
   * @param array|\\Traversable $iter
   *   The countable. foreach-able actual results if a query is being run.
   * @param array $expected_results
   *   An array of expected results.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => 'queryResultTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c38ad3baf0bfdaf770c9618445f7fb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value on a row for a given key.
   *
   * @param array $row
   *   The row information.
   * @param string $key
   *   The key identifier.
   *
   * @return mixed
   *   The value on a row for a given key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => 'getValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf333f8ec2d104f4ac594743594288c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts tested values during test retrieval.
   *
   * @param mixed $expected_value
   *   The incoming expected value to test.
   * @param mixed $actual_value
   *   The incoming value itself.
   * @param string $message
   *   The tested result as a formatted string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Unit',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Driver\\sqlite\\Connection',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Unit\\MigrateTestCase',
         'functionName' => 'retrievalAssertHelper',
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