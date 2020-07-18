<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/views/tests/src/Kernel/ViewsKernelTestBase.php-1594234425,/var/www/html/web/core/modules/views/src/Tests/ViewResultAssertionTrait.php-1594234425',
   'data' => 
  array (
    '8ad204b3140f34347d0bc72c8e1b8c7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a base class for Views kernel testing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92752250ea4ca6887c64d389f324482e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a class for assertions to check for the expected result of a View.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Tests',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityfield' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd62655b7a78e875da4e4cf14f7371233' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Verifies that a result set returned by a View matches expected values.
   *
   * The comparison is done on the string representation of the columns of the
   * column map, taking the order of the rows into account, but not the order
   * of the columns.
   *
   * @param \\Drupal\\views\\ViewExecutable $view
   *   An executed View.
   * @param array $expected_result
   *   An expected result set.
   * @param array $column_map
   *   (optional) An associative array mapping the columns of the result set
   *   from the view (as keys) and the expected result set (as values).
   * @param string $message
   *   (optional) A custom message to display with the assertion. Defaults to
   *   \'Identical result set.\'
   *
   * @return bool
   *   TRUE if the assertion succeeded, or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Tests',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityfield' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'assertIdenticalResultset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6634ef2b634522dcb1721c7c80301239' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Verifies that a result set returned by a View differs from certain values.
   *
   * Inverse of ViewsTestCase::assertIdenticalResultset().
   *
   * @param \\Drupal\\views\\ViewExecutable $view
   *   An executed View.
   * @param array $expected_result
   *   An expected result set.
   * @param array $column_map
   *   (optional) An associative array mapping the columns of the result set
   *   from the view (as keys) and the expected result set (as values).
   * @param string $message
   *   (optional) A custom message to display with the assertion. Defaults to
   *   \'Non-identical result set.\'
   *
   * @return bool
   *   TRUE if the assertion succeeded, or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Tests',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityfield' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'assertNotIdenticalResultset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '567adb33422b0e3e7593be54dc24edba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs View result assertions.
   *
   * This is a helper method for ViewTestBase::assertIdenticalResultset() and
   * ViewTestBase::assertNotIdenticalResultset().
   *
   * @param \\Drupal\\views\\ViewExecutable $view
   *   An executed View.
   * @param array $expected_result
   *   An expected result set.
   * @param array $column_map
   *   An associative array mapping the columns of the result set
   *   from the view (as keys) and the expected result set (as values).
   * @param string $assert_method
   *   The TestBase assertion method to use (either \'assertIdentical\' or
   *   \'assertNotIdentical\').
   * @param string $message
   *   (optional) The message to display with the assertion.
   *
   * @return bool
   *   TRUE if the assertion succeeded, or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Tests',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityfield' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'assertIdenticalResultsetHelper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae607580692f4719f76f8af8c45b5a57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Views to be enabled.
   *
   * Test classes should override this property and provide the list of testing
   * views.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6a3f8bc45a96c3e8e59efc0680a8eb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec96451207fb73dbdd95b8489c448aca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @param bool $import_test_views
   *   Should the views specified on the test class be imported. If you need
   *   to setup some additional stuff, like fields, you need to call false and
   *   then call createTestViews for your own.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c654916d3159a0efd6eea478649c6b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets up the configuration and schema of views and views_test_data modules.
   *
   * Because the schema of views_test_data.module is dependent on the test
   * using it, it cannot be enabled normally.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'setUpFixtures',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '317dfdc4b31406e2c83abb4756f07eb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\State\\StateInterface $state */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'setUpFixtures',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '444e14e9b0f04afd4cd76ea0a32dcd64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Orders a nested array containing a result set based on a given column.
   *
   * @param array $result_set
   *   An array of rows from a result set, with each row as an associative
   *   array keyed by column name.
   * @param string $column
   *   The column name by which to sort the result set.
   * @param bool $reverse
   *   (optional) Boolean indicating whether to sort the result set in reverse
   *   order. Defaults to FALSE.
   *
   * @return array
   *   The sorted result set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'orderResultSet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24163b9b6b6996e6f0aa9c81273068b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes a view with debugging.
   *
   * @param \\Drupal\\views\\ViewExecutable $view
   *   The view object.
   * @param array $args
   *   (optional) An array of the view arguments to use for the view.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'executeView',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b99681f43a3d5864a05fb1e4d1743b1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the schema definition.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'schemaDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6343fb829b68b678f4e5fa9be54eb92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the views data definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'viewsData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d4b5e166a65543511e6228d62e2e583' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a very simple test dataset.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\views\\Kernel',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'viewresultassertiontrait' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
          'viewtestdata' => 'Drupal\\views\\Tests\\ViewTestData',
        ),
         'className' => 'Drupal\\Tests\\views\\Kernel\\ViewsKernelTestBase',
         'functionName' => 'dataSet',
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