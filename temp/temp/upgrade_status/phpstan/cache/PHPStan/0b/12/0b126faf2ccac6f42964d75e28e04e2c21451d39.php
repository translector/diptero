<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/tests/src/Kernel/MigrateSourceTestBase.php-1594234425',
   'data' => 
  array (
    '0e62a60df6b938a24b8d3213868eab88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for tests of Migrate source plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f2b6f2f2e8123c78fb9257d5fa0bff5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd553cf41bc61ec8011801e27c8ea39d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The mocked migration.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrationInterface|\\Prophecy\\Prophecy\\ObjectProphecy
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4adb9a54dc9dfc72297a30aad9bd01e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source plugin under test.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrateSourceInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb266da10742e9028bf1298e84ee0749' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The data provider.
   *
   * @see \\Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase::testSource
   *
   * @return array
   *   Array of data sets to test, each of which is a numerically indexed array
   *   with the following elements:
   *   - An array of source data, which can be optionally processed and set up
   *     by subclasses.
   *   - An array of expected result rows.
   *   - (optional) The number of result rows the plugin under test is expected
   *     to return. If this is not a numeric value, the plugin will not be
   *     counted.
   *   - (optional) Array of configuration options for the plugin under test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => 'providerSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a225c08efd16ff876af3f85eb206e99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec6c23b3e222dd3a3f7c54744f62790a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the plugin to be tested by reading the class @covers annotation.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => 'getPluginClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa61050ac93f19845a1140f7960174c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Instantiates the source plugin under test.
   *
   * @param array $configuration
   *   The source plugin configuration.
   *
   * @return \\Drupal\\migrate\\Plugin\\MigrateSourceInterface|object
   *   The fully configured source plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => 'getPlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00ae3de7c2c5833f59e163b1193d8382' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\migrate\\Plugin\\MigratePluginManager $plugin_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => 'getPlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7a37068c684b906b3ecd6f4eeb9700f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the source plugin against a particular data set.
   *
   * @param array $source_data
   *   The source data that the source plugin will read.
   * @param array $expected_data
   *   The result rows the source plugin is expected to return.
   * @param mixed $expected_count
   *   (optional) How many rows the source plugin is expected to return.
   *   Defaults to count($expected_data). If set to a non-null, non-numeric
   *   value (like FALSE or \'nope\'), the source plugin will not be counted.
   * @param array $configuration
   *   (optional) Configuration for the source plugin.
   * @param mixed $high_water
   *   (optional) The value of the high water field.
   *
   * @dataProvider providerSource
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
         'functionName' => 'testSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eeac7bd992a64255a43aa93a1f573b01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\migrate\\Row $row */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\migrate\\Kernel',
         'uses' => 
        array (
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\Tests\\migrate\\Kernel\\MigrateSourceTestBase',
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