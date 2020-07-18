<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Unit/Utility/WebformOptionsHelperTest.php-1594690523',
   'data' => 
  array (
    '7a331bf333251eed77c3823951fc6c71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests webform options utility.
 *
 * @group webform
 *
 * @coversDefaultClass \\Drupal\\webform\\Utility\\WebformOptionsHelper
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c057c8130c0476cad48fc1ad3997596c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformOptionsHelper::hasOption().
   *
   * @param string $value
   *   The value to run through WebformOptionsHelper::hasOption().
   * @param array $options
   *   The array to run through WebformOptionsHelper::hasOption().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformOptionsHelper::hasOption()
   *
   * @dataProvider providerHasOption
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'testHasOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f294ddb78bcf20d8d79a7251cc0a9ecc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testHasOption().
   *
   * @see testHasOption()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'providerHasOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a8b61d4b8a560e2ef07b4a4d64bffe6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformOptionsHelper::getOptionsText().
   *
   * @param array $values
   *   The array to run through WebformOptionsHelper::getOptionsText().
   * @param array $options
   *   The array to run through WebformOptionsHelper::getOptionsText().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformOptionsHelper::getOptionsText()
   *
   * @dataProvider providerGetOptionsText
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'testGetOptionsText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc2b360dac54d11340474c8adc05a7dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testGetOptionsText().
   *
   * @see testGetOptionsText()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'providerGetOptionsText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8622e9fe93b24aa64f8f659fde3f9c33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformOptionsHelper::convertOptionsToString().
   *
   * @param array $options
   *   The array to run through WebformOptionsHelper::range().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformOptionsHelper::convertOptionsToString()
   *
   * @dataProvider providerConvertOptionsToString
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'testConvertOptionsToString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e64066e52bb3a84bb78c843425aceea5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testConvertOptionsToString().
   *
   * @see testConvertOptionsToString()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'providerConvertOptionsToString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '521a7cd3997dc9efdc36403191bd810a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformOptionsHelper::range().
   *
   * @param array $element
   *   The array to run through WebformOptionsHelper::range().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformOptionsHelper::range()
   *
   * @dataProvider providerRange
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'testRange',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b869eb98ecfef0914ac0da1c048cf6f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testRange().
   *
   * @see testRange()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'providerRange',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9142ec5ff42fd68ba6d8c5bd4bfcc45c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformOptionsHelper::encodeConfig().
   *
   * @param array $options
   *   The options array to run through WebformOptionsHelper::encodeConfig().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformOptionsHelper::encodeConfig()
   *
   * @dataProvider providerEncodeConfig
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'testEncodeConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2abb539777d356a00e65729c8ddb1b3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testEncodeConfig().
   *
   * @see testEncodeConfig()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'providerEncodeConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab3880ec72e8548e54846cfc19cd572a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformOptionsHelper::decodeConfig().
   *
   * @param array $options
   *   The options array to run through WebformOptionsHelper::decodeConfig().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformOptionsHelper::decodeConfig()
   *
   * @dataProvider providerDecodeConfig
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'testDecodeConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27e3f0caa601e78ae88ef4cc53d95f2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testDecodeConfig().
   *
   * @see testDecodeConfig()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformOptionsHelperTest',
         'functionName' => 'providerDecodeConfig',
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