<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/field/tests/src/Functional/FieldTestBase.php-1594234425',
   'data' => 
  array (
    '34e5f1494f0526456deb78b10ef3a5b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parent class for Field API tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Functional',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Functional\\FieldTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b1f760837672febf78ff1dae84cb238' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generate random values for a field_test field.
   *
   * @param $cardinality
   *   Number of values to generate.
   *
   * @return
   *   An array of random values, in the format expected for field values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Functional',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Functional\\FieldTestBase',
         'functionName' => '_generateTestFieldValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8348d91a3561145ba6116d0be8cb7f65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert that a field has the expected values in an entity.
   *
   * This function only checks a single column in the field values.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to test.
   * @param $field_name
   *   The name of the field to test
   * @param $expected_values
   *   The array of expected values.
   * @param $langcode
   *   (Optional) The language code for the values. Defaults to
   *   \\Drupal\\Core\\Language\\LanguageInterface::LANGCODE_DEFAULT.
   * @param $column
   *   (Optional) The name of the column to check. Defaults to \'value\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Functional',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Functional\\FieldTestBase',
         'functionName' => 'assertFieldValues',
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