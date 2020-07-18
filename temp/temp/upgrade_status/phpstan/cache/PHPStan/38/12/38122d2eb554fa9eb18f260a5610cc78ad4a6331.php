<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/phpunit/phpunit/src/Framework/MockObject/Builder/Identity.php-1578473145',
   'data' => 
  array (
    'cdc5a1da79e5858507128fa281211c77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Builder interface for unique identifiers.
 *
 * Defines the interface for recording unique identifiers. The identifiers
 * can be used to define the invocation order of expectations. The expectation
 * is recorded using id() and then defined in order using
 * PHPUnit\\Framework\\MockObject\\Builder\\Match::after().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework\\MockObject\\Builder',
         'uses' => 
        array (
        ),
         'className' => 'PHPUnit\\Framework\\MockObject\\Builder\\Identity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e8c0784c545191c0140829db1b7f7df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the identification of the expectation to $id.
     *
     * @note The identifier is unique per mock object.
     *
     * @param string $id unique identification of expectation
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework\\MockObject\\Builder',
         'uses' => 
        array (
        ),
         'className' => 'PHPUnit\\Framework\\MockObject\\Builder\\Identity',
         'functionName' => 'id',
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