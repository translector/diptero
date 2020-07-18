<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/phpunit/phpunit/src/Framework/MockObject/Builder/ParametersMatch.php-1578473145',
   'data' => 
  array (
    'ea745f44a5ae5d124756b3b47019eace' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Builder interface for parameter matchers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework\\MockObject\\Builder',
         'uses' => 
        array (
          'anyparameters' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyParameters',
        ),
         'className' => 'PHPUnit\\Framework\\MockObject\\Builder\\ParametersMatch',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bc14bb75bbba108dd66fd546627fb1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the parameters to match for, each parameter to this function will
     * be part of match. To perform specific matches or constraints create a
     * new PHPUnit\\Framework\\Constraint\\Constraint and use it for the parameter.
     * If the parameter value is not a constraint it will use the
     * PHPUnit\\Framework\\Constraint\\IsEqual for the value.
     *
     * Some examples:
     * <code>
     * // match first parameter with value 2
     * $b->with(2);
     * // match first parameter with value \'smock\' and second identical to 42
     * $b->with(\'smock\', new PHPUnit\\Framework\\Constraint\\IsEqual(42));
     * </code>
     *
     * @return ParametersMatch
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework\\MockObject\\Builder',
         'uses' => 
        array (
          'anyparameters' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyParameters',
        ),
         'className' => 'PHPUnit\\Framework\\MockObject\\Builder\\ParametersMatch',
         'functionName' => 'with',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09527653294b3c5ba5abc298f1d15788' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a matcher which allows any kind of parameters.
     *
     * Some examples:
     * <code>
     * // match any number of parameters
     * $b->withAnyParameters();
     * </code>
     *
     * @return AnyParameters
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework\\MockObject\\Builder',
         'uses' => 
        array (
          'anyparameters' => 'PHPUnit\\Framework\\MockObject\\Matcher\\AnyParameters',
        ),
         'className' => 'PHPUnit\\Framework\\MockObject\\Builder\\ParametersMatch',
         'functionName' => 'withAnyParameters',
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