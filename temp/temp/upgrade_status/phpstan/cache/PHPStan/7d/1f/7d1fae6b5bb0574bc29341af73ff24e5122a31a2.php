<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/behat/mink/src/Driver/DriverInterface.php-1583174818',
   'data' => 
  array (
    'd7edfc2c40788d1c60ccb31064b5d801' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Driver interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb541d915ef659a9d5118a15c7deb5b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets driver\'s current session.
     *
     * @param Session $session
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'setSession',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c3fb95e5c226c73ccb7684ebc294334' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Starts driver.
     *
     * Once started, the driver should be ready to visit a page.
     *
     * Calling any action before visiting a page is an undefined behavior.
     * The only supported method calls on a fresh driver are
     * - visit()
     * - setRequestHeader()
     * - setBasicAuth()
     * - reset()
     * - stop()
     *
     * Calling start on a started driver is an undefined behavior. Driver
     * implementations are free to handle it silently or to fail with an
     * exception.
     *
     * @throws DriverException When the driver cannot be started
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'start',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7b9036b4307537ddc52745abe8c751f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether driver is started.
     *
     * @return boolean
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'isStarted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '157ff148de7cf174ecc478ba8fa23117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Stops driver.
     *
     * Once stopped, the driver should be started again before using it again.
     *
     * Calling any action on a stopped driver is an undefined behavior.
     * The only supported method call after stopping a driver is starting it again.
     *
     * Calling stop on a stopped driver is an undefined behavior. Driver
     * implementations are free to handle it silently or to fail with an
     * exception.
     *
     * @throws DriverException When the driver cannot be closed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'stop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e102095e3b24f408f88371622bafba2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets driver state.
     *
     * This should reset cookies, request headers and basic authentication.
     * When possible, the history should be reset as well, but this is not enforced
     * as some implementations may not be able to reset it without restarting the
     * driver entirely. Consumers requiring a clean history should restart the driver
     * to enforce it.
     *
     * Once reset, the driver should be ready to visit a page.
     * Calling any action before visiting a page is an undefined behavior.
     * The only supported method calls on a fresh driver are
     * - visit()
     * - setRequestHeader()
     * - setBasicAuth()
     * - reset()
     * - stop()
     *
     * Calling reset on a stopped driver is an undefined behavior.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f2f0e5006a574de38b7393cff5666a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Visit specified URL.
     *
     * @param string $url url of the page
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'visit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '198e2fd17b93f338f9c733edee1f6754' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns current URL address.
     *
     * @return string
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd749a968a13c8dd805591bd4c837a927' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reloads current page.
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'reload',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '664f14605348d196cdefe1994300c6b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Moves browser forward 1 page.
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'forward',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1049c048be1095f9654d545890b3ad0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Moves browser backward 1 page.
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'back',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9de9221008a3a7beb87a2094355fb1bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets HTTP Basic authentication parameters.
     *
     * @param string|boolean $user     user name or false to disable authentication
     * @param string         $password password
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'setBasicAuth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e46686c111c4be4657073e64c084dede' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Switches to specific browser window.
     *
     * @param string $name window name (null for switching back to main window)
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'switchToWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4b6b5b593e6e53b056b2384661cb512' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Switches to specific iFrame.
     *
     * @param string $name iframe name (null for switching back)
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'switchToIFrame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec5b4b871f2b4ef9e9351d60ab830056' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets specific request header on client.
     *
     * @param string $name
     * @param string $value
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'setRequestHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c18bcf83537089b2f4efc77bd28390ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns last response headers.
     *
     * @return array
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getResponseHeaders',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6d26c578458ae8390f8d41f95098f9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets cookie.
     *
     * @param string $name
     * @param string $value
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'setCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46090e00c382e6befbbbe9c03987d196' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns cookie by name.
     *
     * @param string $name
     *
     * @return string|null
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0dcc19c819423d4310d8ec0fb6a4f093' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns last response status code.
     *
     * @return int
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getStatusCode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40271d6c63fdd9818f451fa3b5dfa45e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns last response content.
     *
     * @return string
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd57bd247c61c8800d09ba6ac1297422' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Capture a screenshot of the current window.
     *
     * @return string screenshot of MIME type image/* depending
     *                on driver (e.g., image/png, image/jpeg)
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getScreenshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd579e3f2b704b368a912270907b4cda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the names of all open windows.
     *
     * @return array array of all open windows
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getWindowNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '571306dab81d9e6cd5326dad5b36227e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the name of the currently active window.
     *
     * @return string the name of the current window
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getWindowName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd71bdfa1928fb17a5403aa0ee3ffec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds elements with specified XPath query.
     *
     * @param string $xpath
     *
     * @return NodeElement[]
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'find',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13150d61c0556f16c42b3c74acfdd576' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns element\'s tag name by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @return string
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getTagName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7454d495cd0d110818a3423278f1ecef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns element\'s text by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @return string
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a168cb9edc0a4ddf00d85a0171c44aee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns element\'s inner html by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @return string
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7eb2656d403ec5c519ee8abea330e2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns element\'s outer html by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @return string
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getOuterHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc2aa11242d8c04b49ce4b60ad17c4c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns element\'s attribute by it\'s XPath query.
     *
     * @param string $xpath
     * @param string $name
     *
     * @return string|null
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '556acff31e82eec94b7c1040682f4163' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns element\'s value by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @return string|bool|array|null
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     *
     * @see \\Behat\\Mink\\Element\\NodeElement::getValue
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'getValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '284bd1bdc7907bf2298b59a4043cd197' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets element\'s value by it\'s XPath query.
     *
     * @param string            $xpath
     * @param string|bool|array $value
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     *
     * @see \\Behat\\Mink\\Element\\NodeElement::setValue
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'setValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'deb8097d7fe4f111035f4f33d4913dea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks checkbox by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     *
     * @see \\Behat\\Mink\\Element\\NodeElement::check
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'check',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cb86eab8cf94649e75f8e746537d89b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Unchecks checkbox by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     *
     * @see \\Behat\\Mink\\Element\\NodeElement::uncheck
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'uncheck',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f4fc7a3ba9a7ac41455b53f0d2dca80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether checkbox or radio button located by it\'s XPath query is checked.
     *
     * @param string $xpath
     *
     * @return boolean
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     *
     * @see \\Behat\\Mink\\Element\\NodeElement::isChecked
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'isChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '058f166e79cdbd9b3c6c61b23837c14d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Selects option from select field or value in radio group located by it\'s XPath query.
     *
     * @param string  $xpath
     * @param string  $value
     * @param boolean $multiple
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     *
     * @see \\Behat\\Mink\\Element\\NodeElement::selectOption
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'selectOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b4ca55419f857df31294f4730ecbb69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether select option, located by it\'s XPath query, is selected.
     *
     * @param string $xpath
     *
     * @return boolean
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     *
     * @see \\Behat\\Mink\\Element\\NodeElement::isSelected
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'isSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dea120c009a76a240f4814a21c69ba1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clicks button or link located by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'click',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3f6713d9be0271956e18a06c0e62ee3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Double-clicks button or link located by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'doubleClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '146b4d8898859266f02c4d1be2f9a445' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Right-clicks button or link located by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'rightClick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25df8bd2e6a7ebb009dbc9d1de60f90e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Attaches file path to file field located by it\'s XPath query.
     *
     * @param string $xpath
     * @param string $path
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     *
     * @see \\Behat\\Mink\\Element\\NodeElement::attachFile
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'attachFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73687fa7a27d6bbf46712569dbdaa623' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether element visible located by it\'s XPath query.
     *
     * @param string $xpath
     *
     * @return boolean
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'isVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6227a5041c0b0279553fc6e7f39816c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Simulates a mouse over on the element.
     *
     * @param string $xpath
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'mouseOver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '055a2b2721bf98a3916e6c4cc4116a92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Brings focus to element.
     *
     * @param string $xpath
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'focus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fed1e7bb729af27eb6dc3241dfab8fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes focus from element.
     *
     * @param string $xpath
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'blur',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19c087212d250d7a9a92cb12c716a106' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Presses specific keyboard key.
     *
     * @param string     $xpath
     * @param string|int $char     could be either char (\'b\') or char-code (98)
     * @param string     $modifier keyboard modifier (could be \'ctrl\', \'alt\', \'shift\' or \'meta\')
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'keyPress',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63475b8ac5f64f7cd5b4688542e14438' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Pressed down specific keyboard key.
     *
     * @param string     $xpath
     * @param string|int $char     could be either char (\'b\') or char-code (98)
     * @param string     $modifier keyboard modifier (could be \'ctrl\', \'alt\', \'shift\' or \'meta\')
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'keyDown',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e99018121755bafd90935b022b929d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Pressed up specific keyboard key.
     *
     * @param string     $xpath
     * @param string|int $char     could be either char (\'b\') or char-code (98)
     * @param string     $modifier keyboard modifier (could be \'ctrl\', \'alt\', \'shift\' or \'meta\')
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'keyUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45cee6b37d78acdffb0897c1ee43a516' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Drag one element onto another.
     *
     * @param string $sourceXpath
     * @param string $destinationXpath
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'dragTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a43b3757651cf3e6eee2fb302dc25389' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Executes JS script.
     *
     * @param string $script
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'executeScript',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b1d5176507dae4c18a67bf01824fbf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Evaluates JS script.
     *
     * The "return" keyword is optional in the script passed as argument. Driver implementations
     * must accept the expression both with and without the keyword.
     *
     * @param string $script
     *
     * @return mixed
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'evaluateScript',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b05331a5116c3eecc706236a0c13866' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Waits some time or until JS condition turns true.
     *
     * @param int    $timeout   timeout in milliseconds
     * @param string $condition JS condition
     *
     * @return bool
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'wait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '445b6225a57f1f6bc403d0f3fa929fb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the dimensions of the window.
     *
     * @param int    $width  set the window width, measured in pixels
     * @param int    $height set the window height, measured in pixels
     * @param string $name   window name (null for the main window)
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'resizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e924aca6784635ab8e9fe2132c69b1f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Maximizes the window if it is not maximized already.
     *
     * @param string $name window name (null for the main window)
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'maximizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e6795c4b2144c7d9ea0c3f961751ff9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Submits the form.
     *
     * @param string $xpath Xpath.
     *
     * @throws UnsupportedDriverActionException When operation not supported by the driver
     * @throws DriverException                  When the operation cannot be done
     *
     * @see \\Behat\\Mink\\Element\\NodeElement::submitForm
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Driver',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'driverexception' => 'Behat\\Mink\\Exception\\DriverException',
          'unsupporteddriveractionexception' => 'Behat\\Mink\\Exception\\UnsupportedDriverActionException',
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Driver\\DriverInterface',
         'functionName' => 'submitForm',
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