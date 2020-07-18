<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/behat/mink/src/Exception/UnsupportedDriverActionException.php-1583174818',
   'data' => 
  array (
    '3a084a55fbcb5d648af7e899406840d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Exception thrown by drivers when they don\'t support the requested action.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
        ),
         'className' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12b4b0cf22582e60b494b2ce1f93620f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes exception.
     *
     * @param string          $template what is unsupported?
     * @param DriverInterface $driver   driver instance
     * @param \\Exception      $previous previous exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Exception',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
        ),
         'className' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
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