<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Utility/WebformTextHelper.php-1594690523',
   'data' => 
  array (
    'd59c39586f2592026ab0e3f56aba3502' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper to operate on strings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'camelcasetosnakecasenameconverter' => 'Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformTextHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28ee818e4d47b8813d5ea14857b787d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * CamelCase to Underscore name converter.
   *
   * @var \\Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'camelcasetosnakecasenameconverter' => 'Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformTextHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd59ccb88c17b4e4c82dcd5ef92b293b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get camel case to snake case converter.
   *
   * @return \\Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface
   *   Camel case to snake case converter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'camelcasetosnakecasenameconverter' => 'Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformTextHelper',
         'functionName' => 'getCamelCaseToSnakeCaseNameConverter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '156ddf363c6bc5a5cd62fa22fdc39c2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts camel case to snake case (i.e. underscores).
   *
   * @param string $string
   *   String to be converted.
   *
   * @return string
   *   String with camel case converted to snake case.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'camelcasetosnakecasenameconverter' => 'Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformTextHelper',
         'functionName' => 'camelToSnake',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f943d5ad9dd2cd5f27f96cbb6f8bdb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts snake case to camel case.
   *
   * @param string $string
   *   String to be converted.
   *
   * @return string
   *   String with snake case converted to camel case.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'camelcasetosnakecasenameconverter' => 'Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformTextHelper',
         'functionName' => 'snakeToCamel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06a10e992ac10c1b55134b09ff4a97fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Counts the number of words inside a string.
   *
   * This counts the number of words by counting the space between the words.
   *
   * str_word_count() is locale dependent and returns varying word counts
   * based on the current language.
   *
   * This approach matches how the jQuery Text Counter Plugin counts words.
   *
   * @param string $string
   *   The string.
   *
   * @return int
   *   The number of words inside the string.
   *
   * @see str_word_count()
   * @see https://github.com/ractoon/jQuery-Text-Counter
   * @see $.textcounter.wordCount
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'camelcasetosnakecasenameconverter' => 'Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformTextHelper',
         'functionName' => 'wordCount',
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