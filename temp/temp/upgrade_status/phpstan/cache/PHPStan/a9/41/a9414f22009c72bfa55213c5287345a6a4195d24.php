<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/laminas/laminas-stdlib/src/ArrayUtils.php-1577814675',
   'data' => 
  array (
    '71e3d8ad66b720a38687c8bae4ee5f4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Utility class for testing and manipulation of PHP arrays.
 *
 * Declared abstract, as we have no need for instantiation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d23213f643551d1ed1ac70f57d5c954' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Compatibility Flag for ArrayUtils::filter
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8784890de0a1405f2e8f03722ff0fdcd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Test whether an array contains one or more string keys
     *
     * @param  mixed $value
     * @param  bool  $allowEmpty    Should an empty array() return true
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => 'hasStringKeys',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fdeb97e0420be1421d22f3c6a45fda39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Test whether an array contains one or more integer keys
     *
     * @param  mixed $value
     * @param  bool  $allowEmpty    Should an empty array() return true
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => 'hasIntegerKeys',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75da0eaf89c0206e818ac7df78be2ea2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Test whether an array contains one or more numeric keys.
     *
     * A numeric key can be one of the following:
     * - an integer 1,
     * - a string with a number \'20\'
     * - a string with negative number: \'-1000\'
     * - a float: 2.2120, -78.150999
     * - a string with float:  \'4000.99999\', \'-10.10\'
     *
     * @param  mixed $value
     * @param  bool  $allowEmpty    Should an empty array() return true
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => 'hasNumericKeys',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c08c4acd01171821a823341525d7a6de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Test whether an array is a list
     *
     * A list is a collection of values assigned to continuous integer keys
     * starting at 0 and ending at count() - 1.
     *
     * For example:
     * <code>
     * $list = array(\'a\', \'b\', \'c\', \'d\');
     * $list = array(
     *     0 => \'foo\',
     *     1 => \'bar\',
     *     2 => array(\'foo\' => \'baz\'),
     * );
     * </code>
     *
     * @param  mixed $value
     * @param  bool  $allowEmpty    Is an empty list a valid list?
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => 'isList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '191c8d100f31e6ff58e42e13e36001ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Test whether an array is a hash table.
     *
     * An array is a hash table if:
     *
     * 1. Contains one or more non-integer keys, or
     * 2. Integer keys are non-continuous or misaligned (not starting with 0)
     *
     * For example:
     * <code>
     * $hash = array(
     *     \'foo\' => 15,
     *     \'bar\' => false,
     * );
     * $hash = array(
     *     1995  => \'Birth of PHP\',
     *     2009  => \'PHP 5.3.0\',
     *     2012  => \'PHP 5.4.0\',
     * );
     * $hash = array(
     *     \'formElement,
     *     \'options\' => array( \'debug\' => true ),
     * );
     * </code>
     *
     * @param  mixed $value
     * @param  bool  $allowEmpty    Is an empty array() a valid hash table?
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => 'isHashTable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4fc0a73b2c1297848977d635453d7b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if a value exists in an array.
     *
     * Due to "foo" == 0 === TRUE with in_array when strict = false, an option
     * has been added to prevent this. When $strict = 0/false, the most secure
     * non-strict check is implemented. if $strict = -1, the default in_array
     * non-strict behaviour is used.
     *
     * @param mixed $needle
     * @param array $haystack
     * @param int|bool $strict
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => 'inArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '053dc3607d36aebc7949eb635864b32c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Convert an iterator to an array.
     *
     * Converts an iterator to an array. The $recursive flag, on by default,
     * hints whether or not you want to do so recursively.
     *
     * @param  array|Traversable  $iterator     The array or Traversable object to convert
     * @param  bool               $recursive    Recursively check all nested structures
     * @throws Exception\\InvalidArgumentException if $iterator is not an array or a Traversable object
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => 'iteratorToArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '502712706f6e4225bc94d32265b0fd88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Merge two arrays together.
     *
     * If an integer key exists in both arrays and preserveNumericKeys is false, the value
     * from the second array will be appended to the first array. If both values are arrays, they
     * are merged together, else the value of the second array overwrites the one of the first array.
     *
     * @param  array $a
     * @param  array $b
     * @param  bool  $preserveNumericKeys
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e696a3d77ba3a66a9f77535be9196e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @deprecated Since 3.2.0; use the native array_filter methods
     *
     * @param array $data
     * @param callable $callback
     * @param null|int $flag
     * @return array
     * @throws Exception\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Laminas\\Stdlib',
         'uses' => 
        array (
          'mergeremovekey' => 'Laminas\\Stdlib\\ArrayUtils\\MergeRemoveKey',
          'mergereplacekeyinterface' => 'Laminas\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface',
          'traversable' => 'Traversable',
        ),
         'className' => 'Laminas\\Stdlib\\ArrayUtils',
         'functionName' => 'filter',
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