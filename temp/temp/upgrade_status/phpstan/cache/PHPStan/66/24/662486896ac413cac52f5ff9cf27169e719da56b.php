<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/FunctionalJavascript/WebformWebDriverTestBase.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/Test/AssertMailTrait.php-1594234425,/var/www/html/web/modules/contrib/webform/tests/src/Traits/WebformBrowserTestTrait.php-1594690523,/var/www/html/web/modules/contrib/webform/tests/src/Traits/WebformAssertLegacyTrait.php-1594690523',
   'data' => 
  array (
    'c027345340162850c7a482ffeeda08a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an abstract test base for webform JavaScript tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\FunctionalJavascript',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6484d9e0a14a965c962dc24678a04ba6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods for testing emails sent during test runs.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6495ee9090b4e5f89b74823555bbb87a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array containing all emails sent during this test case.
   *
   * @param array $filter
   *   An array containing key/value pairs used to filter the emails that are
   *   returned.
   *
   * @return array
   *   An array containing email messages captured during the current test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getMails',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fe08cbfa65b933f58be89d3d2df4d50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the most recently sent email message has the given value.
   *
   * The field in $name must have the content described in $value.
   *
   * @param string $name
   *   Name of field or message property to assert. Examples: subject, body,
   *   id, ...
   * @param string $value
   *   Value of the field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Email\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2ee79223ccd26b7858721e38b010dc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the most recently sent email message has the string in it.
   *
   * @param string $field_name
   *   Name of field or message property to assert: subject, body, id, ...
   * @param string $string
   *   String to search for.
   * @param int $email_depth
   *   Number of emails to search for string, starting with most recent.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertMailString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70f7747e9061f48f250848b3cd7a85d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the most recently sent email message has the pattern in it.
   *
   * @param string $field_name
   *   Name of field or message property to assert: subject, body, id, ...
   * @param string $regex
   *   Pattern to search for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertMailPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e8d76a8672122c4353e15989f3eb294' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Outputs to verbose the most recent $count emails sent.
   *
   * @param int $count
   *   Optional number of emails to output.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'verboseEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93853faebddbdf96c1cbedec1e866fb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides convenience methods for webform assertions in browser tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e357347ce9e1c3a73b661f9f752fba1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Place breadcrumb page, tasks, and actions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'placeBlocks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6bfaf1610cb943454f8bcd990188fdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Place webform test module blocks.
   *
   * @param string $module_name
   *   Test module name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'placeWebformBlocks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6b4f7b03ae6c3c45cc8394fe544cee2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Basic HTML filter format.
   *
   * @var \\Drupal\\filter\\FilterFormatInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b385b50f7da95c524c5894c0a1609ed9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Full HTML filter format.
   *
   * @var \\Drupal\\filter\\FilterFormatInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0250bbb000c63e3166d80d856525b9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create basic HTML filter format.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'createFilters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ec04200aac39ca7b0b14f28c0b7f75b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create the \'tags\' taxonomy vocabulary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'createTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67ef671fcaf38088b92b1a150be2de33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Lazy load a test webforms.
   *
   * @param array $ids
   *   Webform ids.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'loadWebforms',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7ad2dd01e896b7955accc9beb2339a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Lazy load a test webform.
   *
   * @param string $id
   *   Webform id.
   *
   * @return \\Drupal\\webform\\WebformInterface|null
   *   A webform.
   *
   * @see \\Drupal\\views\\Tests\\ViewTestData::createTestViews
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'loadWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '842eea04ebcbcd755a6f9dce5ea45692' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a webform.
   *
   * @param array|null $values
   *   (optional) Array of values.
   * @param array|null $elements
   *   (optional) Array of elements.
   * @param array $settings
   *   (optional) Webform settings.
   *
   * @return \\Drupal\\webform\\WebformInterface
   *   A webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'createWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b762168c01002a46e39c15fa6cd1b71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reload a test webform.
   *
   * @param string $id
   *   Webform id.
   *
   * @return \\Drupal\\webform\\WebformInterface|null
   *   A webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'reloadWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df007d0586cfbc56e3abfe55148e437a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Post a new submission to a webform.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param array $edit
   *   Submission values.
   * @param string $submit
   *   Value of the submit button whose click is to be emulated.
   * @param array $options
   *   Options to be forwarded to the url generator.
   *
   * @return int
   *   The created submission\'s sid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'postSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0389de092f3a29587b2e7b843691058' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Post a new test submission to a webform.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param array $edit
   *   Submission values.
   * @param string $submit
   *   Value of the submit button whose click is to be emulated.
   * @param array $options
   *   Options to be forwarded to the url generator.
   *
   * @return int
   *   The created test submission\'s sid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'postSubmissionTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd21d3c7a5348a7b45d0601bfd21adf09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Load the specified webform submission from the storage.
   *
   * @param int $sid
   *   The submission identifier.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface
   *   The loaded webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'loadSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '313bb800b8840236188b8cada7ccb22a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionStorage $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'loadSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4eb687ecd2d874404d2a5cb855d080a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Purge all submission before the webform.module is uninstalled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'purgeSubmissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1c3d32125d430019eb03128454b45e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a webform\'s submit button label.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param string $submit
   *   Value of the submit button whose click is to be emulated.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup|string
   *   The webform\'s submit button label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getWebformSubmitButtonLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5242620501bd9f2d92ae2403a125d5c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the last submission id.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return int|null
   *   The last submission id. NULL if saving of results is disabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getLastSubmissionId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cd0859ed86481740b53ef9a24147330' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Request a webform results export CSV.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param array $options
   *   An associative array of export options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getExport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83cabaa831265f22895f4cbbc71c9c79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionExporterInterface $exporter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getExport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '020133455130c3cba3716b0525533ab6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform export columns.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return array
   *   An array of exportable columns.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getExportColumns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c5a6da248d3a01f3cbed75c4f2a7aac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionStorageInterface $submission_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getExportColumns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec5de7a3f8646cdca1e478c4d631503b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets that last email sent during the currently running test case.
   *
   * @return array
   *   An array containing the last email message captured during the
   *   current test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getLastEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'caf642ceb7fffa6d6d8e9ff42fea262b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the CSS selector IS found on the loaded page, fail otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertCssSelect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7370bba667fb7509a486f67e4ac4031' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the CSS selector IS NOT found on the loaded page, fail otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoCssSelect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '362fbae42fd63f15525c2d3d07ec4bf3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the element with the given CSS selector is visible.
   *
   * @param string $css_selector
   *   The CSS selector identifying the element to check.
   * @param string $message
   *   Optional message to show alongside the assertion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertElementVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e54792e2216e0717cc78b22a4553f62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the element with the given CSS selector is not visible.
   *
   * @param string $css_selector
   *   The CSS selector identifying the element to check.
   * @param string $message
   *   Optional message to show alongside the assertion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertElementNotVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a83580974541be35c6ee6bf1b8edf0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logs verbose (debug) message in a text file.
   *
   * @param mixed $data
   *   Data to be output.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'debug',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '183f469c394034e407958df7712e6eab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides convenience methods for assertions in browser tests.
 *
 * Copies of legacy traits without deprecated warnings.
 *
 * @see \\Drupal\\KernelTests\\AssertLegacyTrait
 * @see \\Drupal\\FunctionalTests\\AssertLegacyTrait
 * @see http://blog.fclement.info/convert-simpletest-to-phpunit
 * @see https://www.drupal.org/node/2735005
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a67f1544b77995e8c210f9754323a19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertEqual()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b51c8e63b5cec34005b941e6b15a35e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertNotEqual()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNotEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f777d547b59724a83cecc5b7cc7416e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertIdentical()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertIdentical',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c37a0ea2bba6b2095d49a328a464bf01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertNotIdentical()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNotIdentical',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30b97391c3bc4e198416b01bba27d880' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertIdenticalObject()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertIdenticalObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c110253a4f6e474740386ea8c7b0dcb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::pass()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'pass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac4b1f2e00d911f2f9486788eac197fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::verbose()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'verbose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc2a49f2848d52022707c73d427d5cbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the element with the given CSS selector is present.
   *
   * @param string $css_selector
   *   The CSS selector identifying the element to check.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertElementPresent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0269f5abb22daeeefb3263dc2dfe9cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the element with the given CSS selector is not present.
   *
   * @param string $css_selector
   *   The CSS selector identifying the element to check.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertElementNotPresent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2875b9cc70c8c27e2cd9c950863e6ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the page (with HTML stripped) contains the text.
   *
   * Note that stripping HTML tags also removes their attributes, such as
   * the values of text fields.
   *
   * @param string $text
   *   Plain text to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24ee0601dbf86d9b312c489143a68f98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the page (with HTML stripped) does not contains the text.
   *
   * Note that stripping HTML tags also removes their attributes, such as
   * the values of text fields.
   *
   * @param string $text
   *   Plain text to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d80251c5c82b67cbf70fa13aff8bb7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper for assertText and assertNoText.
   *
   * @param string $text
   *   Plain text to look for.
   * @param bool $not_exists
   *   (optional) TRUE if this text should not exist, FALSE if it should.
   *   Defaults to TRUE.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertTextHelper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7b4b3f7fd1d5fbe078f8e6f089ca4fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the text is found ONLY ONCE on the text version of the page.
   *
   * The text version is the equivalent of what a user would see when viewing
   * through a web browser. In other words the HTML has been filtered out of
   * the contents.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t(). If left blank, a default message will be displayed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertUniqueText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bab832a425d66e9870f1c4149a3df7a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the text is found MORE THAN ONCE on the text version of the page.
   *
   * The text version is the equivalent of what a user would see when viewing
   * through a web browser. In other words the HTML has been filtered out of
   * the contents.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t(). If left blank, a default message will be displayed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoUniqueText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '182879ed93dd80caeefb9f44e59e8094' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the page responds with the specified response code.
   *
   * @param int $code
   *   Response code. For example 200 is a successful page request. For a list
   *   of all codes see http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ae47893f1426c1eb8d4b5ce04cf3097' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given name and value.
   *
   * @param string $name
   *   Name of field to assert.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default)
   *   to skip checking the actual value, while still checking that the field
   *   exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertFieldByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83899e89de238477aec8d0c304963f8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given name and value.
   *
   * @param string $name
   *   Name of field to assert.
   * @param string $value
   *   (optional) Value for the field, to assert that the field\'s value on the
   *   page does not match it. You may pass in NULL to skip checking the
   *   value, while still checking that the field does not exist. However, the
   *   default value (\'\') asserts that the field value is not an empty string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoFieldByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b79df09c8afebf72a07eee62b4542ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given ID and value.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $value
   *   (optional) Value for the field to assert. You may pass in NULL to skip
   *   checking the value, while still checking that the field exists.
   *   However, the default value (\'\') asserts that the field value is an empty
   *   string.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertFieldById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0abb704b8fde422b867472db3dfef276' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given name or ID.
   *
   * @param string $field
   *   Name or ID of field to assert.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f56feb0f72af877c8c472a99d2c2ebb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does NOT exist with the given name or ID.
   *
   * @param string $field
   *   Name or ID of field to assert.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b77b0f0b405457dbc4b958f346d533f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS found on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e945d2856fdd2c86f41601ce943cb990' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS not found on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01e0ecbc1780179c36f30d08de590834' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pass if the page title is the given string.
   *
   * @param string $expected_title
   *   The string the page title should be.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56901ba396a71375c0e48a5f6d287751' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is found.
   *
   * An optional link index may be passed.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   * @param int $index
   *   Link position counting from zero.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffa07f3b0ea7d87840223738245eca4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is not found.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13b8e29ce50875dfa2d8533206ef80b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param int $index
   *   Link position counting from zero.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertLinkByHref',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3b3ff90e615c7b341f0ec37a7900aba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is not found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoLinkByHref',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57bdac3c920a4ec8bdb70a803b13d7b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given ID and value.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string $value
   *   (optional) Value for the field, to assert that the field\'s value on the
   *   page doesn\'t match it. You may pass in NULL to skip checking the value,
   *   while still checking that the field doesn\'t exist. However, the default
   *   value (\'\') asserts that the field value is not an empty string.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoFieldById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a2338b2664fa4dbab73a3a2de6d69ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the internal browser\'s URL matches the given path.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   The expected system path or URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc51d4079eba28ce81e6a6523b2a6d7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page exists.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac9db3b92a66f985c6b8ffeacafe39f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option with the visible text exists.
   *
   * @param string $id
   *   The ID of the select field to assert.
   * @param string $text
   *   The text for the option tag to assert.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertOptionByText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4adf0f1358295a9889b21aed1a04694c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option does NOT exist in the current page.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a0863e56cd7afeafdc59f9d0972b0c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page is checked.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t(). If left blank, a default message will be displayed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertOptionSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '375a07cf5b237a0729a556ce294f31a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a checkbox field in the current page is checked.
   *
   * @param string $id
   *   ID of field to assert.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertFieldChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '792344f47d9995334be94237bf3c9e0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a checkbox field in the current page is not checked.
   *
   * @param string $id
   *   ID of field to assert.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoFieldChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5650768a2c63be8e2dcda9b703b958c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists in the current page by the given XPath.
   *
   * @param string $xpath
   *   XPath used to find the field.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default)
   *   to skip checking the actual value, while still checking that the field
   *   exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertFieldByXPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db745378922da20b4ea806968c1f4d05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist or its value does not match, by XPath.
   *
   * @param string $xpath
   *   XPath used to find the field.
   * @param string $value
   *   (optional) Value of the field, to assert that the field\'s value on the
   *   page does not match it.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t().
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoFieldByXPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbedbc09c93e6a9857a31d24dfb6a120' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists in the current page with a given Xpath result.
   *
   * @param \\Behat\\Mink\\Element\\NodeElement[] $fields
   *   Xml elements.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default) to skip
   *   checking the actual value, while still checking that the field exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertFieldsByValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '478e3f70fa2799d8a6b265f3e95de52b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS found escaped on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e30fd0a22386619a2a9a01201a5184b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text is not found escaped on the loaded page.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8417634131bba3ef41ca7ae329bef662' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Triggers a pass if the Perl regex pattern is found in the raw content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '594a9164cb6fef67a9bcc2c9d04d2c69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Triggers a pass if the Perl regex pattern is not found in the raw content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   *
   * @see https://www.drupal.org/node/2864262
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60f41045387a9776943f8ccf07b2ea2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts whether an expected cache tag was present in the last response.
   *
   * @param string $expected_cache_tag
   *   The expected cache tag.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertCacheTag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36482bc4ee06b571f7b5bfb659c6ba53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts whether an expected cache tag was absent in the last response.
   *
   * @param string $cache_tag
   *   The cache tag to check.
   *
   * @see https://www.drupal.org/node/2864029
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertNoCacheTag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e67c26737cecc3c41c1ca5021494ba3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that current response header equals value.
   *
   * @param string $name
   *   Name of header to assert.
   * @param string $value
   *   Value of the header to assert.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29725a95cb3b422595f1ffe46760b059' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns WebAssert object.
   *
   * @param string $name
   *   (optional) Name of the session. Defaults to the active session.
   *
   * @return \\Drupal\\Tests\\WebAssert|\\Drupal\\FunctionalJavascriptTests\\WebDriverWebAssert
   *   A new web-assert option for asserting the presence of elements with.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'assertSession',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fa65e60e9eec74ebc680589d7593b9a' => 
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
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'buildXPathQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9ed75db7292317fc873990e43787613' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper: Constructs an XPath for the given set of attributes and value.
   *
   * @param string $attribute
   *   Field attributes.
   * @param string $value
   *   Value of field.
   *
   * @return string
   *   XPath for specified values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'constructFieldXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '351c18d0b185d1ad86405428bc6c8754' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current raw content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getRawContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e34b4b87c653f339982fa16b77dea404' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all option elements, including nested options, in a select.
   *
   * @param \\Behat\\Mink\\Element\\NodeElement $element
   *   The element for which to get the options.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement[]
   *   Option elements in select.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Traits',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'getAllOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd35983735c6a23c2d2402dd3ddee7297' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set default theme to classy.
   *
   * @var string
   * @see https://www.drupal.org/node/3083055
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\FunctionalJavascript',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a31fd79ddec499bd6831f738318847e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\FunctionalJavascript',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8dd3ee00a41327a3c9f56a7799d1d0ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webforms to load.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\FunctionalJavascript',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c448d04c155805fd4cf5f9cdc3fd6248' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\FunctionalJavascript',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd94eb1ea438c008e2d65427bb89151fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\FunctionalJavascript',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\FunctionalJavascript\\WebformWebDriverTestBase',
         'functionName' => 'tearDown',
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