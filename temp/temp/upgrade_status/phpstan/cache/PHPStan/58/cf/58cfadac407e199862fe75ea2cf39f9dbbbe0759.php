<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Unit/Utility/WebformYamlTest.php-1594690523',
   'data' => 
  array (
    '8e134234321ced08671ba08806e4690c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests webform tidy utility.
 *
 * @group webform
 *
 * @coversDefaultClass \\Drupal\\webform\\Utility\\WebformYaml
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformYamlTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '948d9c5c2e4a63f5e9292f8ae261fe0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformYaml tidy with WebformYaml::tidy().
   *
   * @param array $data
   *   The array to run through WebformYaml::tidy().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformYaml::tidy()
   *
   * @dataProvider providerTidy
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformYamlTest',
         'functionName' => 'testTidy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0e9ab2d59328be0e0fa4c91b63008d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testTidy().
   *
   * @see testTidy()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformYamlTest',
         'functionName' => 'providerTidy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '075f0db71bf07da9b116fe68385c0be4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests WebformYaml tidy with WebformYaml::decode().
   *
   * @param string $yaml
   *   The string to run through WebformYaml::decode().
   * @param string $expected
   *   The expected result from calling the function.
   *
   * @see WebformYaml::decode()
   *
   * @dataProvider providerDecode
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformYamlTest',
         'functionName' => 'testDecode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72b163126ac4429f022357a26d685307' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testDecode().
   *
   * @see testDecode()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Utility',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Utility\\WebformYamlTest',
         'functionName' => 'providerDecode',
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