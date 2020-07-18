<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Unit/Utility/WebformReflectionHelperTest.php-1594690523',
   'data' => 
  array (
    'e2d63c6ed57c2ccafa5feee32b5a81b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests webform reflection utility.
 *
 * @group webform
 *
 * @coversDefaultClass \\Drupal\\webform\\Utility\\WebformReflectionHelper
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformReflectionHelperTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a241d8bbfa7e7ddeccd8ecfbc7fe082' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformReflectionHelper get parent classes with WebformReflectionHelper::getParentClasses().
   *
   * @param object $object
   *   An object.
   * @param string $base_class_name
   *   (optional) Base class name to use as the root of object\'s class
   *   hierarchy.
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformReflectionHelper::getParentClasses()
   *
   * @dataProvider providerGetParentClasses
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformReflectionHelperTest',
         'functionName' => 'testGetParentClasses',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22ae0209f9be221a9a2e0ec68dd4c8ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testGetParentClasses().
   *
   * @see testGetParentClasses()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformReflectionHelperTest',
         'functionName' => 'providerGetParentClasses',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd97e3de460a74d281d7bdabff9912ef0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Reflection test parent.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformReflectionTestParent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1147cfc684a4f4e57d3768df8e53f8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Reflection test child.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformReflectionTestChild',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6614822bbfca30c91928673cb11191eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Reflection test grandchild.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformReflectionTestGrandChild',
         'functionName' => NULL,
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