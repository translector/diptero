<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/console/Input/InputInterface.php-1590865085',
   'data' => 
  array (
    '000eb9bbfdc7291f44ca549a3f54306a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * InputInterface is the interface implemented by all input classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c35c3c3938bb782d7abc61869ae54368' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the first argument from the raw parameters (not parsed).
     *
     * @return string|null The value of the first argument or null otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'getFirstArgument',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '442a7c73616c85d4ef26c09380ecaae1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the raw parameters (not parsed) contain a value.
     *
     * This method is to be used to introspect the input parameters
     * before they have been validated. It must be used carefully.
     * Does not necessarily return the correct result for short options
     * when multiple flags are combined in the same option.
     *
     * @param string|array $values     The values to look for in the raw parameters (can be an array)
     * @param bool         $onlyParams Only check real parameters, skip those following an end of options (--) signal
     *
     * @return bool true if the value is contained in the raw parameters
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'hasParameterOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce1b78e03034a40b0e26ef10450c19d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value of a raw option (not parsed).
     *
     * This method is to be used to introspect the input parameters
     * before they have been validated. It must be used carefully.
     * Does not necessarily return the correct result for short options
     * when multiple flags are combined in the same option.
     *
     * @param string|array $values     The value(s) to look for in the raw parameters (can be an array)
     * @param mixed        $default    The default value to return if no result is found
     * @param bool         $onlyParams Only check real parameters, skip those following an end of options (--) signal
     *
     * @return mixed The option value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'getParameterOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c3562213f33033202ea09ef882e0914' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Binds the current Input instance with the given arguments and options.
     *
     * @throws RuntimeException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'bind',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3e9d22baa507642efd3affef9fc1f4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Validates the input.
     *
     * @throws RuntimeException When not enough arguments are given
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8aedae9af0d33b1f09033b1e925b8e88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all the given arguments merged with the default values.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'getArguments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd664ddea41525d422d9f0b3c5e9f46b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the argument value for a given argument name.
     *
     * @param string $name The argument name
     *
     * @return string|string[]|null The argument value
     *
     * @throws InvalidArgumentException When argument given doesn\'t exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'getArgument',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccb3c93d1d649b8cda87254a1903b5c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets an argument value by name.
     *
     * @param string               $name  The argument name
     * @param string|string[]|null $value The argument value
     *
     * @throws InvalidArgumentException When argument given doesn\'t exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'setArgument',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91e868baf99c3eb159bb4817b264a4a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if an InputArgument object exists by name or position.
     *
     * @param string|int $name The InputArgument name or position
     *
     * @return bool true if the InputArgument object exists, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'hasArgument',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c837b566aed9351e7543192a8fcd5010' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all the given options merged with the default values.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8b5a9fa3315e0a8c93c8810722731f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the option value for a given option name.
     *
     * @param string $name The option name
     *
     * @return string|string[]|bool|null The option value
     *
     * @throws InvalidArgumentException When option given doesn\'t exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'getOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1ac637d4d765a57f374451bb2526154' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets an option value by name.
     *
     * @param string                    $name  The option name
     * @param string|string[]|bool|null $value The option value
     *
     * @throws InvalidArgumentException When option given doesn\'t exist
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'setOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a14ea6393d661839810eab8385dd043e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if an InputOption object exists by name.
     *
     * @param string $name The InputOption name
     *
     * @return bool true if the InputOption object exists, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'hasOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2394586393bc37651e45cdcb8b87f6c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Is this input means interactive?
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'isInteractive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '959c9ada0ab3a3925400ae345270e469' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the input interactivity.
     *
     * @param bool $interactive If the input should be interactive
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Input',
         'uses' => 
        array (
          'invalidargumentexception' => 'Symfony\\Component\\Console\\Exception\\InvalidArgumentException',
          'runtimeexception' => 'Symfony\\Component\\Console\\Exception\\RuntimeException',
        ),
         'className' => 'Symfony\\Component\\Console\\Input\\InputInterface',
         'functionName' => 'setInteractive',
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