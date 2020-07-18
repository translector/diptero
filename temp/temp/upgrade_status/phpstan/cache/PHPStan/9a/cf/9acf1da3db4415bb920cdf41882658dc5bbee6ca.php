<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/behat/mink/src/Element/ElementInterface.php-1583174818',
   'data' => 
  array (
    '80c9db11de35cce03e9442fc3ffeb380' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Element interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fe8329d9b0322257dbcdcceea4447b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns XPath for handled element.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => 'getXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4043e42866e34b7a6fe6b278e4ac5a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns element\'s session.
     *
     * @return Session
     *
     * @deprecated Accessing the session from the element is deprecated as of 1.6 and will be impossible in 2.0.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => 'getSession',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8865333db96db9efd7bf3261d51d6f58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether element with specified selector exists inside the current element.
     *
     * @param string       $selector selector engine name
     * @param string|array $locator  selector locator
     *
     * @return boolean
     *
     * @see ElementInterface::findAll for the supported selectors
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => 'has',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0bb601de5f8b6eaa0e0071e3d12c1a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if an element still exists in the DOM.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => 'isValid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a41771df7a2a13e9d7b88226a0f0756' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Waits for an element(-s) to appear and returns it.
     *
     * @param int|float $timeout  Maximal allowed waiting time in seconds.
     * @param callable  $callback Callback, which result is both used as waiting condition and returned.
     *                            Will receive reference to `this element` as first argument.
     *
     * @return mixed
     *
     * @throws \\InvalidArgumentException When invalid callback given.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => 'waitFor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c088727117af8ddfe00bc57a0ab8c596' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds first element with specified selector inside the current element.
     *
     * @param string       $selector selector engine name
     * @param string|array $locator  selector locator
     *
     * @return NodeElement|null
     *
     * @see ElementInterface::findAll for the supported selectors
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => 'find',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33d28d999774c8903bc20226e4c76431' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds all elements with specified selector inside the current element.
     *
     * Valid selector engines are named, xpath, css, named_partial and named_exact.
     *
     * \'named\' is a pseudo selector engine which prefers an exact match but
     * will return a partial match if no exact match is found.
     * \'xpath\' is a pseudo selector engine supported by SelectorsHandler.
     *
     * More selector engines can be registered in the SelectorsHandler.
     *
     * @param string       $selector selector engine name
     * @param string|array $locator  selector locator
     *
     * @return NodeElement[]
     *
     * @see NamedSelector for the locators supported by the named selectors
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => 'findAll',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54431fa44a2c65bca16de1906dfe09ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns element text (inside tag).
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => 'getText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a3cd8e29c352d9ac7d7ae105716ba3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns element inner html.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink\\Element',
         'uses' => 
        array (
          'session' => 'Behat\\Mink\\Session',
        ),
         'className' => 'Behat\\Mink\\Element\\ElementInterface',
         'functionName' => 'getHtml',
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