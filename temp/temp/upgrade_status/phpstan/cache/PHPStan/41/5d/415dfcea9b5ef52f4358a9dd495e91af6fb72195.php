<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Unit/Utility/WebformArrayHelperTest.php-1594690523',
   'data' => 
  array (
    '6e93a78976e775faa0855648e068a781' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests webform array utility.
 *
 * @group webform
 *
 * @coversDefaultClass \\Drupal\\webform\\Utility\\WebformArrayHelper
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformArrayHelperTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bed17213787b877d85b8296d20e18bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests converting arrays to readable string with WebformArrayHelper::toString().
   *
   * @param array $array
   *   The array to run through WebformArrayHelper::toString().
   * @param string $conjunction
   *   The $conjunction to run through WebformArrayHelper::toString().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformArrayHelper::toString()
   *
   * @dataProvider providerToString
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformArrayHelperTest',
         'functionName' => 'testToString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ab09e19ae232fa31cf9708ab659d63b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testToString().
   *
   * @see testToString()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformArrayHelperTest',
         'functionName' => 'providerToString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6055095bc37b2d3f62085a80480f8e4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests determining type of array with WebformArrayHelper::IsAssociative().
   *
   * @param array $array
   *   The array to run through WebformArrayHelper::IsAssociative().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformArrayHelper::IsAssociative()
   *
   * @dataProvider providerIsAssociative
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformArrayHelperTest',
         'functionName' => 'testIsAssociative',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc2d035bef9f9901e9167c1f8efc6337' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testIsAssociative().
   *
   * @see testIsAssociative()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformArrayHelperTest',
         'functionName' => 'providerIsAssociative',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b5dec9a99fab5ed12bb18cdb9e9b780' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests determining type of array with WebformArrayHelper::InArray().
   *
   * @param array $needles
   *   The searched values.
   * @param array $haystack
   *   The array.
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformArrayHelper::InArray()
   *
   * @dataProvider providerInArray
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformArrayHelperTest',
         'functionName' => 'testInArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd15eb7770aac9eef73de464dcaac0c6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testInArray().
   *
   * @see testInArray()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformArrayHelperTest',
         'functionName' => 'providerInArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c7be7687c65f843d746edd99ee0ee0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests navigating an associative array\'s keys.
   *
   * @see WebformArrayHelper::getFirstKey()
   * @see WebformArrayHelper::getLastKey()
   * @see WebformArrayHelper::getPreviousKey()
   * @see WebformArrayHelper::getNextKey()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformArrayHelperTest',
         'functionName' => 'testGetKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd81e8d5b53b0dd5fedf07bc92b21ea7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests prefix an associative array.
   *
   * @see WebformArrayHelper::addPrefix()
   * @see WebformArrayHelper::removePrefix()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformArrayHelperTest',
         'functionName' => 'testPrefixing',
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