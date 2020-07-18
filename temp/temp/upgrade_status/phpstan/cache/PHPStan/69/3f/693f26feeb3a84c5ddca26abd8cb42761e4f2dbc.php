<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/behat/mink/src/Exception/ExpectationException.php-1583174818',
   'data' => 
  array (
    'fb60e5fc5de8503d266e675a242c6b06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Exception thrown for failed expectations.
 *
 * Some specialized child classes are available to customize the error rendering.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '596def6a49f71bc3b6952a63703e504d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes exception.
     *
     * @param string                  $message   optional message
     * @param DriverInterface|Session $driver    driver instance (or session for BC)
     * @param \\Exception|null         $exception expectation exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8529bd22cbacc8e72e45d21df955717' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns exception message with additional context info.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => '__toString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '937ef4511d8d0627a678ea6158dc8da7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the context rendered for this exception.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => 'getContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3016fac948f5bd11ecde4aa3d4a54d69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns driver.
     *
     * @return DriverInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => 'getDriver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdd12bf4accc4890079e0eb09e53d36a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns exception session.
     *
     * @return Session
     *
     * @deprecated since 1.7, to be removed in 2.0. Use getDriver and the driver API instead.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => 'getSession',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e52caff2f5a99e7d634a0ae9e008898' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Prepends every line in a string with pipe (|).
     *
     * @param string $string
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => 'pipeString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e417cb28611285d3b93cc966b1e5941' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes response header/footer, letting only <body /> content.
     *
     * @param string $string response content
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => 'trimBody',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24f90acb81c12ca1362f9da09faef2a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Trims string to specified number of chars.
     *
     * @param string $string response content
     * @param int    $count  trim count
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => 'trimString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23b90440caf7392d5d3ad4089538b61a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns response information string.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ExpectationException',
         'functionName' => 'getResponseInfo',
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