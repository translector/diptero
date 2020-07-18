<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/Tests/WebAssert.php-1594234425',
   'data' => 
  array (
    'b5ce40809de593cf0b3ad0112a750a85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a class with methods for asserting presence of elements during tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7448dedaf8f29459c88de4ad7635ede2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The absolute URL of the site under test.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e0d46b0f9b4d347d2c1522978ead79f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructor.
   *
   * @param \\Behat\\Mink\\Session $session
   *   The Behat session object;
   * @param string $base_url
   *   The base URL of the site under test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf986de9b76fbc70b2859818705d2989' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'cleanUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ebd075fb3c992055a547303a96364c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that specific button exists on the current page.
   *
   * @param string $button
   *   One of id|name|label|value for the button.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement
   *   The matching element.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   *   When the element doesn\'t exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'buttonExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0cd9b00069f5d3c29ac91db2741f63d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that the specific button does NOT exist on the current page.
   *
   * @param string $button
   *   One of id|name|label|value for the button.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *   When the button exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'buttonNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f38a00829ed7ec3b7584682f0dee65f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that specific select field exists on the current page.
   *
   * @param string $select
   *   One of id|name|label|value for the select field.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement
   *   The matching element
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   *   When the element doesn\'t exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'selectExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be7484cf4720b91acede6e9a8ef6612a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that specific option in a select field exists on the current page.
   *
   * @param string $select
   *   One of id|name|label|value for the select field.
   * @param string $option
   *   The option value.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement
   *   The matching option element
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   *   When the element doesn\'t exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'optionExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7e8f752177a43959980aa2810432caf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that an option in a select field does NOT exist on the current page.
   *
   * @param string $select
   *   One of id|name|label|value for the select field.
   * @param string $option
   *   The option value that should not exist.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   *   When the select element doesn\'t exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'optionNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f93da41ad19af6876c93a07316dcd97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pass if the page title is the given string.
   *
   * @param string $expected_title
   *   The string the page title should be.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *   Thrown when element doesn\'t exist, or the title is a different one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'titleEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4c70cf368926e86a99b9e21e0c29bb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is found.
   *
   * An optional link index may be passed.
   *
   * @param string $label
   *   Text between the anchor tags.
   * @param int $index
   *   Link position counting from zero.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use strtr() to embed variables in the message text, not
   *   t(). If left blank, a default message will be displayed.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *   Thrown when element doesn\'t exist, or the link label is a different one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'linkExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8a39cdffa31af6fc67c77c850e07676' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the exactly specified label is found.
   *
   * An optional link index may be passed.
   *
   * @param string $label
   *   Text between the anchor tags.
   * @param int $index
   *   Link position counting from zero.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use strtr() to embed variables in the message text, not
   *   t(). If left blank, a default message will be displayed.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *   Thrown when element doesn\'t exist, or the link label is a different one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'linkExistsExact',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3997e60f820929586151c530f1d5c73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is not found.
   *
   * An optional link index may be passed.
   *
   * @param string $label
   *   Text between the anchor tags.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use strtr() to embed variables in the message text, not
   *   t(). If left blank, a default message will be displayed.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *   Thrown when element doesn\'t exist, or the link label is a different one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'linkNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a9e6faa7d613b3915468c99f08541b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the exactly specified label is not found.
   *
   * An optional link index may be passed.
   *
   * @param string $label
   *   Text between the anchor tags.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use strtr() to embed variables in the message text, not
   *   t(). If left blank, a default message will be displayed.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *   Thrown when element doesn\'t exist, or the link label is a different one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'linkNotExistsExact',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '284fba4b4fa6fe394dd37e5881d87899' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param int $index
   *   Link position counting from zero.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *   Thrown when element doesn\'t exist, or the link label is a different one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'linkByHrefExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a52ac9e8b982800753540001402c412' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is not found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *   Thrown when element doesn\'t exist, or the link label is a different one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'linkByHrefNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '827cb20e303cb4cce5613bce351477a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an XPath query.
   *
   * Builds an XPath query by replacing placeholders in the query by the value
   * of the arguments.
   *
   * XPath 1.0 (the version supported by libxml2, the underlying XML library
   * used by PHP) doesn\'t support any form of quotation. This function
   * simplifies the building of XPath expression.
   *
   * @param string $xpath
   *   An XPath query, possibly with placeholders in the form \':name\'.
   * @param array $args
   *   An array of arguments with keys in the form \':name\' matching the
   *   placeholders in the query. The values may be either strings or numeric
   *   values.
   *
   * @return string
   *   An XPath query with arguments replaced.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'buildXPathQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9164ab31c8bc7ae1c6de68bc17bf1a69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS NOT found escaped on the loaded page.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'assertNoEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a825e5b2cfc5bb65fac076a964e436c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS found escaped on the loaded page.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'assertEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4650921da0a244bc5528fb59ac142ebd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that page HTML (response content) contains text.
   *
   * @param string|object $text
   *   Text value. Any non-string value will be cast to string.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'responseContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '847ec8fa13806a9ff17d558cdd267cbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that page HTML (response content) does not contains text.
   *
   * @param string|object $text
   *   Text value. Any non-string value will be cast to string.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'responseNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b89f8cbcae06363ae8dc16d2894a31c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts a condition.
   *
   * The parent method is overridden because it is a private method.
   *
   * @param bool $condition
   *   The condition.
   * @param string $message
   *   The success message.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *   When the condition is not fulfilled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'assert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '696af9aa8e16a736d57947c10413ddf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that a given form field element is disabled.
   *
   * @param string $field
   *   One of id|name|label|value for the field.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement
   *   The matching element.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'fieldDisabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fb9d8c7f8d02d96a5778c03cbd6979d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that a given form field element is enabled.
   *
   * @param string $field
   *   One of id|name|label|value for the field.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement
   *   The matching element.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'fieldEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '919a37976ebef557c375e93551faef16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that specific hidden field exists.
   *
   * @param string $field
   *   One of id|name|value for the hidden field.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement
   *   The matching element.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'hiddenFieldExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e081cef5ab3e050523972f41792c301' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that specific hidden field does not exist.
   *
   * @param string $field
   *   One of id|name|value for the hidden field.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'hiddenFieldNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84d034799b3ffa9e5e41330b4e5228b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that specific hidden field have provided value.
   *
   * @param string $field
   *   One of id|name|value for the hidden field.
   * @param string $value
   *   The hidden field value that needs to be checked.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'hiddenFieldValueEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbbb5f34544ca0ca5dd01c73c34583c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that specific hidden field doesn\'t have the provided value.
   *
   * @param string $field
   *   One of id|name|value for the hidden field.
   * @param string $value
   *   The hidden field value that needs to be checked.
   * @param \\Behat\\Mink\\Element\\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'hiddenFieldValueNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc3f550aa09d30656e9cfba1c1d64482' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that current page contains text only once.
   *
   * @param string $text
   *   The string to look for.
   *
   * @see \\Behat\\Mink\\WebAssert::pageTextContains()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'responsetextexception' => 'Behat\\Mink\\Exception\\ResponseTextException',
          'minkwebassert' => 'Behat\\Mink\\WebAssert',
          'traversableelement' => 'Behat\\Mink\\Element\\TraversableElement',
          'elementnotfoundexception' => 'Behat\\Mink\\Exception\\ElementNotFoundException',
          'session' => 'Behat\\Mink\\Session',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\WebAssert',
         'functionName' => 'pageTextContainsOnce',
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