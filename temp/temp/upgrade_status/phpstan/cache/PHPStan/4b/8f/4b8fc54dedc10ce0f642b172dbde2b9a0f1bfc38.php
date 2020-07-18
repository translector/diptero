<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/views/src/Tests/ViewResultAssertionTrait.php-1594234425',
   'data' => 
  array (
    'd5a6391ccc232e9f494445942dcbda73' => 
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
         'className' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7f1cb22b9a5000093160f1cb6135f42' => 
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
         'className' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
         'functionName' => 'assertIdenticalResultset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2080913ca68dc050a80b55d99147030' => 
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
         'className' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
         'functionName' => 'assertNotIdenticalResultset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05c4c3879bdd2256164cabdf10f88a71' => 
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
         'className' => 'Drupal\\views\\Tests\\ViewResultAssertionTrait',
         'functionName' => 'assertIdenticalResultsetHelper',
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