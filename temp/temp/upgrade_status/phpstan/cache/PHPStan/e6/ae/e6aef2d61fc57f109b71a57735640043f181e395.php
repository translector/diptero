<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Unit/Utility/WebformElementHelperTest.php-1594690523',
   'data' => 
  array (
    'bb36a9e0f0ad4fa6f4fb6f73abf35be4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests webform element utility.
 *
 * @group webform
 *
 * @coversDefaultClass \\Drupal\\webform\\Utility\\WebformElementHelper
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cae5021ecde76e541114385dc241f2f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformElementHelper::isTitleDisplayed().
   *
   * @param array $element
   *   The element to run through WebformElementHelper::IsTitleDisplayed().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformElementHelper::isTitleDisplayed()
   *
   * @dataProvider providerIsTitleDisplayed
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'testIsTitleDisplayed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc1acec14449f5b2c696e42e38f9fe1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testIsTitleDisplayed().
   *
   * @see testIsTitleDisplayed()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'providerIsTitleDisplayed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21af6f4675ab33174b6f048e94f12185' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformElementHelper::GetIgnoredProperties().
   *
   * @param array $element
   *   The array to run through WebformElementHelper::GetIgnoredProperties().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformElementHelper::GetIgnoredProperties()
   *
   * @dataProvider providerGetIgnoredProperties
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'testGetIgnoredProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a8ca0279db27c0ad8e3449d6d8e4ff9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testGetIgnoredProperties().
   *
   * @see testGetIgnoredProperties()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'providerGetIgnoredProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4cedfac8859d5ccd7fe4237776f932c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformElementHelper::removeIgnoredProperties().
   *
   * @param array $element
   *   The array to run through WebformElementHelper::removeIgnoredProperties().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformElementHelper::removeIgnoredProperties()
   *
   * @dataProvider providerRemoveIgnoredProperties
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'testRemoveIgnoredProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a38142c8ec6fd5a8a3f4218fa220481e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testRemoveIgnoredProperties().
   *
   * @see testRemoveIgnoredProperties()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'providerRemoveIgnoredProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5edb3595ddb2ae5ae72885701d7389c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformElementHelper::convertRenderMarkupToStrings().
   *
   * @param array $elements
   *   The array to run through WebformElementHelper::convertRenderMarkupToStrings().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformElementHelper::convertRenderMarkupToStrings()
   *
   * @dataProvider providerConvertRenderMarkupToStrings
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'testConvertRenderMarkupToStrings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f586c0430a1755bbb2f349a88430733a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testConvertRenderMarkupToStrings().
   *
   * @see testConvertRenderMarkupToStrings()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'providerConvertRenderMarkupToStrings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c37f4c0bffa6f37fe756b64b7806e95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformElementHelper::hasProperty().
   *
   * @param array $elements
   *   The array to run through WebformElementHelper::convertRenderMarkupToStrings().
   * @param bool $expected
   *   The expected result from calling the function.
   *
   * @see WebformElementHelper::HasProperty()
   *
   * @dataProvider providerHasProperty
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'testHasProperty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4de4a46868d29f0420f17cc909e2e87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testConvertRenderMarkupToStrings().
   *
   * @see testHasProperty()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformElementHelperTest',
         'functionName' => 'providerHasProperty',
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