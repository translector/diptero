<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Form/OptGroup.php-1594234425',
   'data' => 
  array (
    '8585ecfd7a680bac2c2f3de5c1f0b020' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helpers for HTML option groups.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\OptGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '616c8e486d9d3531235075ddba4d98ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows PHP array processing of multiple select options with the same value.
   *
   * Used for form select elements which need to validate HTML option groups
   * and multiple options which may return the same value. Associative PHP
   * arrays cannot handle these structures, since they share a common key.
   *
   * @param array $array
   *   The form options array to process.
   *
   * @return array
   *   An array with all hierarchical elements flattened to a single array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\OptGroup',
         'functionName' => 'flattenOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93fbb479ee89b2b33944dd6cf0dac8ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Iterates over an array building a flat array with duplicate keys removed.
   *
   * This function also handles cases where objects are passed as array values.
   *
   * @param array $array
   *   The form options array to process.
   * @param array $options
   *   The array of flattened options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\OptGroup',
         'functionName' => 'doFlattenOptions',
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