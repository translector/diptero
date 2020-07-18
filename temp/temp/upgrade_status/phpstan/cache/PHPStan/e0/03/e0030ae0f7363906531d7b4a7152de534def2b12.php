<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Component/Utility/DiffArray.php-1594234425',
   'data' => 
  array (
    'd1b179f16ae26251dd6185826d27acda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helpers to perform diffs on multi dimensional arrays.
 *
 * @ingroup utility
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\DiffArray',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b58f246fb793d2a03e6633f192c42a7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recursively computes the difference of arrays with additional index check.
   *
   * This is a version of array_diff_assoc() that supports multidimensional
   * arrays.
   *
   * @param array $array1
   *   The array to compare from.
   * @param array $array2
   *   The array to compare to.
   *
   * @return array
   *   Returns an array containing all the values from array1 that are not present
   *   in array2.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\DiffArray',
         'functionName' => 'diffAssocRecursive',
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