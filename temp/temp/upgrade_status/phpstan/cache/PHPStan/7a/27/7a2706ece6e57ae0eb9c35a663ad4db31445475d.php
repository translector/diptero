<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/behat/mink/src/WebAssert.php-1583174818',
   'data' => 
  array (
    '2b2cdcb17342fb214e0531db9e4e1b4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Mink web assertions tool.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa75f429ab3b0fec5d1de1b8b4c89d15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes assertion engine.
     *
     * @param Session $session
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8aac05e913bc05c5238fc5f5752967be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current session address is equals to provided one.
     *
     * @param string $page
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'addressEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99d5a991898387068d3a0e4fe1fbdfae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current session address is not equals to provided one.
     *
     * @param string $page
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'addressNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29fe2026bdba0da21343766349fd3b5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current session address matches regex.
     *
     * @param string $regex
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'addressMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac83f765a5d5aed8c8e71a5373c7887a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specified cookie exists and its value equals to a given one.
     *
     * @param string $name  cookie name
     * @param string $value cookie value
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'cookieEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac23ddd90494d4e2aa752d344ac89a71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specified cookie exists.
     *
     * @param string $name cookie name
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'cookieExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ac8da3c29bfb36c3114489f3bf6eaee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current response code equals to provided one.
     *
     * @param int $code
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'statusCodeEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ca8cc9cbe079df3e0d842167faf8ea5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current response code not equals to provided one.
     *
     * @param int $code
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'statusCodeNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c9b2acb8c0e00b1da7b38b87e2b493a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current response header equals value.
     *
     * @param string $name
     * @param string $value
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseHeaderEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '424e4e1da42ccf215864c3655f9f8182' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current response header does not equal value.
     *
     * @param string $name
     * @param string $value
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseHeaderNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f30dca2c2d4be83c1d39ab03b5a88aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current response header contains value.
     *
     * @param string $name
     * @param string $value
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseHeaderContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85a0072e56986fedfd330f0858e311ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current response header does not contain value.
     *
     * @param string $name
     * @param string $value
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseHeaderNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea66c20d5bdb82de72fa444595c1662a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current response header matches regex.
     *
     * @param string $name
     * @param string $regex
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseHeaderMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80a9e967e412d1f568f327e0b65e2183' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current response header does not match regex.
     *
     * @param string $name
     * @param string $regex
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseHeaderNotMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de9265733ac084a854d9314d5eec5081' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current page contains text.
     *
     * @param string $text
     *
     * @throws ResponseTextException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'pageTextContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71268e0ebc881c08fc325412e418aa10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current page does not contains text.
     *
     * @param string $text
     *
     * @throws ResponseTextException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'pageTextNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0773dc2303983232337c30addf88f5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current page text matches regex.
     *
     * @param string $regex
     *
     * @throws ResponseTextException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'pageTextMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02792aba0255a6b368b1d31de0e811aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that current page text does not matches regex.
     *
     * @param string $regex
     *
     * @throws ResponseTextException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'pageTextNotMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78134b6528aa90d13d706e061946dd60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that page HTML (response content) contains text.
     *
     * @param string $text
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17bc6cc51df9238f76a4e5eb68b5258f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that page HTML (response content) does not contains text.
     *
     * @param string $text
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38e48dd823bd7e2783866f8609727a6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that page HTML (response content) matches regex.
     *
     * @param string $regex
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1476f42217461e3c1a8710eb1ab2bd17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that page HTML (response content) does not matches regex.
     *
     * @param $regex
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'responseNotMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4607e8541502e9bca8c83c6866fa1ea2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that there is specified number of specific elements on the page.
     *
     * @param string           $selectorType element selector type (css, xpath)
     * @param string|array     $selector     element selector
     * @param int              $count        expected count
     * @param ElementInterface $container    document to check against
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementsCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '631a8a9da8fb3c35702c93cbc0a2fe1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific element exists on the current page.
     *
     * @param string           $selectorType element selector type (css, xpath)
     * @param string|array     $selector     element selector
     * @param ElementInterface $container    document to check against
     *
     * @return NodeElement
     *
     * @throws ElementNotFoundException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0adbdc3c257ac7038a1eb88a23f5afb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific element does not exists on the current page.
     *
     * @param string           $selectorType element selector type (css, xpath)
     * @param string|array     $selector     element selector
     * @param ElementInterface $container    document to check against
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6caaf2042a15371e729bbdbc84aa58d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific element contains text.
     *
     * @param string       $selectorType element selector type (css, xpath)
     * @param string|array $selector     element selector
     * @param string       $text         expected text
     *
     * @throws ElementTextException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementTextContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '929703e6591211d814ef554083888d72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific element does not contains text.
     *
     * @param string       $selectorType element selector type (css, xpath)
     * @param string|array $selector     element selector
     * @param string       $text         expected text
     *
     * @throws ElementTextException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementTextNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bbab9e443cdb1eb44e4eea58918fd6bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific element contains HTML.
     *
     * @param string       $selectorType element selector type (css, xpath)
     * @param string|array $selector     element selector
     * @param string       $html         expected text
     *
     * @throws ElementHtmlException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a5c7b833bec41315c6e9a067a2369b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific element does not contains HTML.
     *
     * @param string       $selectorType element selector type (css, xpath)
     * @param string|array $selector     element selector
     * @param string       $html         expected text
     *
     * @throws ElementHtmlException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b404f63d9d1f1e8165a95d76e1fca08f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that an attribute exists in an element.
     *
     * @param string       $selectorType
     * @param string|array $selector
     * @param string       $attribute
     *
     * @return NodeElement
     *
     * @throws ElementHtmlException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementAttributeExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f373017375dd0f3cbcb15696a122f1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that an attribute of a specific elements contains text.
     *
     * @param string       $selectorType
     * @param string|array $selector
     * @param string       $attribute
     * @param string       $text
     *
     * @throws ElementHtmlException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementAttributeContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68ac62f8d117a9fdb3dfd6b2f9a3c127' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that an attribute of a specific elements does not contain text.
     *
     * @param string       $selectorType
     * @param string|array $selector
     * @param string       $attribute
     * @param string       $text
     *
     * @throws ElementHtmlException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'elementAttributeNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c6c24f5e55dab6f63f89a042a8ce531' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific field exists on the current page.
     *
     * @param string             $field     field id|name|label|value
     * @param TraversableElement $container document to check against
     *
     * @return NodeElement
     *
     * @throws ElementNotFoundException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'fieldExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa9bab5f481af56e47d6efcf553d69c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific field does not exists on the current page.
     *
     * @param string             $field     field id|name|label|value
     * @param TraversableElement $container document to check against
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'fieldNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c60320f4c70fd37e94bcc4930f0b6bf6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific field have provided value.
     *
     * @param string             $field     field id|name|label|value
     * @param string             $value     field value
     * @param TraversableElement $container document to check against
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'fieldValueEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8af76258f8db018d2e48c8197ae7eecf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific field have provided value.
     *
     * @param string             $field     field id|name|label|value
     * @param string             $value     field value
     * @param TraversableElement $container document to check against
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'fieldValueNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bb205ee76c2fc13ca5beb5f8667cad0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific checkbox is checked.
     *
     * @param string             $field     field id|name|label|value
     * @param TraversableElement $container document to check against
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'checkboxChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd245e12fdfbb741aab853a60b2f6a16c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks that specific checkbox is unchecked.
     *
     * @param string             $field     field id|name|label|value
     * @param TraversableElement $container document to check against
     *
     * @throws ExpectationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'checkboxNotChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc7fc0209ae4103e1626fa84ad1f65a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets current url of the page.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'getCurrentUrlPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc4d43d3bf4e456f58aa9b02c6f11a26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Trims scriptname from the URL.
     *
     * @param string $url
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'cleanUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a5ec95976351520218eadc3ff2a213e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts a condition.
     *
     * @param bool   $condition
     * @param string $message   Failure message
     *
     * @throws ExpectationException when the condition is not fulfilled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'assert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '472a582c213128b2b056ee4191d31d1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts a condition involving the response text.
     *
     * @param bool   $condition
     * @param string $message   Failure message
     *
     * @throws ResponseTextException when the condition is not fulfilled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'assertResponseText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e28df89dc53502890b3bbc8c9ad54f11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts a condition on an element.
     *
     * @param bool    $condition
     * @param string  $message   Failure message
     * @param Element $element
     *
     * @throws ElementHtmlException when the condition is not fulfilled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'assertElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7cc6df4ffb333b62f32fb234a2e8668' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts a condition involving the text of an element.
     *
     * @param bool    $condition
     * @param string  $message   Failure message
     * @param Element $element
     *
     * @throws ElementTextException when the condition is not fulfilled
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'assertElementText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3c0d2fd626ec273aa5066c25b7a827e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string       $selectorType
     * @param string|array $selector
     * @param bool         $plural
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Behat\\Mink',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'elementinterface' => 'Behat\\Mink\\Element\\ElementInterface',
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'elementhtmlexception' => 'Behat\\Mink\\Exception\\ElementHtmlException',
          'elementtextexception' => 'Behat\\Mink\\Exception\\ElementTextException',
        ),
         'className' => 'Behat\\Mink\\WebAssert',
         'functionName' => 'getMatchingElementRepresentation',
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