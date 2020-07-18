<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/behat/mink/src/Session.php-1583174818',
   'data' => 
  array (
    'd2fa567f2884a94532bdd3a014f896b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Mink session.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a613dc654f269552e73b388ba8e7c285' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes session.
     *
     * @param DriverInterface  $driver
     * @param SelectorsHandler $selectorsHandler
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78bee47dd52120e2b11bab9a239f9984' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether session (driver) was started.
     *
     * @return boolean
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'isStarted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '561125429ed728738c5fc2c03250b7e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Starts session driver.
     *
     * Calling any action before visiting a page is an undefined behavior.
     * The only supported method calls on a fresh driver are
     * - visit()
     * - setRequestHeader()
     * - setBasicAuth()
     * - reset()
     * - stop()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'start',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ddfc09aab2752670abb5c7d15b53036' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Stops session driver.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'stop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2f155047a532688f079e972c1250c90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Restart session driver.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'restart',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d49bb95bbefc3fadf6e72965c5b120b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reset session driver state.
     *
     * Calling any action before visiting a page is an undefined behavior.
     * The only supported method calls on a fresh driver are
     * - visit()
     * - setRequestHeader()
     * - setBasicAuth()
     * - reset()
     * - stop()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e2038cdd0ec654915e52270cbb7f334' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns session driver.
     *
     * @return DriverInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getDriver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd88aa22c707fecbc450d189955540f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns page element.
     *
     * @return DocumentElement
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77390159c0a5dd54463eeb867886e02a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns selectors handler.
     *
     * @return SelectorsHandler
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getSelectorsHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fb83ca4955d770e2983c817f34ebb99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Visit specified URL and automatically start session if not already running.
     *
     * @param string $url url of the page
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'visit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8ef33c7757ab2cbdc5d8be757ee9a3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets HTTP Basic authentication parameters.
     *
     * @param string|boolean $user     user name or false to disable authentication
     * @param string         $password password
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'setBasicAuth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f24732f09f86810cd8b6f9434a60364b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets specific request header.
     *
     * @param string $name
     * @param string $value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'setRequestHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '005821c1e340a075ceb0582a0bf35165' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all response headers.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getResponseHeaders',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fae4eb5db6b5d76b1cddcec3acc3ff95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns specific response header.
     *
     * @param string $name
     *
     * @return string|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getResponseHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63aa42849b1d63d94f62e87e0c5b1f53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets cookie.
     *
     * @param string $name
     * @param string $value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'setCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf8e8504814cde6407cff5caaa739039' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns cookie by name.
     *
     * @param string $name
     *
     * @return string|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1e672ef9cf576ce18b2beaf8cd5254c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns response status code.
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getStatusCode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62632d65acdb2164966b10ec4e1fda60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns current URL address.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getCurrentUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a11f69c52269648852669e0c58f1285' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Capture a screenshot of the current window.
     *
     * @return string screenshot of MIME type image/* depending
     *                on driver (e.g., image/png, image/jpeg)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getScreenshot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5718a9cc2181dbec7063d5e918b892a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the names of all open windows.
     *
     * @return array Array of all open window\'s names.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getWindowNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85aec08f0c950253a12098458ddb18ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the name of the currently active window.
     *
     * @return string The name of the current window.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'getWindowName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '987665058e3e223e357e54c96b6eb1ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reloads current session page.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'reload',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3725003e7a2d333598885a4a67ea36c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Moves backward 1 page in history.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'back',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c38a611624ea83c583070e4ad138732d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Moves forward 1 page in history.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'forward',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34dedff6164e652363852416450b7f14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Switches to specific browser window.
     *
     * @param string $name window name (null for switching back to main window)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'switchToWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f817fed8ba878ce9587ba21995372d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Switches to specific iFrame.
     *
     * @param string $name iframe name (null for switching back)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'switchToIFrame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a11c292711f47d00753f03324a33e90c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Execute JS in browser.
     *
     * @param string $script javascript
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'executeScript',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c6b18c57710c51d8de3be25157c6fad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Execute JS in browser and return it\'s response.
     *
     * @param string $script javascript
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'evaluateScript',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d1387f6a6224be8b9fffb4f32f76889' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Waits some time or until JS condition turns true.
     *
     * @param int    $time      time in milliseconds
     * @param string $condition JS condition
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'wait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa68abb6d5ee1d7616ac379d4c7f14b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the dimensions of the window.
     *
     * @param int    $width  set the window width, measured in pixels
     * @param int    $height set the window height, measured in pixels
     * @param string $name   window name (null for the main window)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'resizeWindow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '349904ab8a9960b0eb35a020177490c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Maximize the window if it is not maximized already.
     *
     * @param string $name window name (null for the main window)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'driverinterface' => 'Behat\\Mink\\Driver\\DriverInterface',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'documentelement' => 'Behat\\Mink\\Element\\DocumentElement',
        ),
         'className' => 'Behat\\Mink\\Session',
         'functionName' => 'maximizeWindow',
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