<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/behat/mink/src/Exception/ElementNotFoundException.php-1583174818',
   'data' => 
  array (
    '98c60728493af2a84e748fe5d468dae4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Exception thrown when an expected element is not found.
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
         'className' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6ccbd4e12e2cf7893bd5e2e1bb27bea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes exception.
     *
     * @param DriverInterface|Session $driver   driver instance
     * @param string                  $type     element type
     * @param string                  $selector element selector type
     * @param string                  $locator  element locator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
         'functionName' => '__construct',
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