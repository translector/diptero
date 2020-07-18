<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Functional/WebformBrowserTestBase.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/Test/AssertMailTrait.php-1594234425,/var/www/html/web/modules/contrib/webform/tests/src/Traits/WebformBrowserTestTrait.php-1594690523,/var/www/html/web/modules/contrib/webform/tests/src/Traits/WebformAssertLegacyTrait.php-1594690523',
   'data' => 
  array (
    '841ceb88441bd6ec4d904c99817f7c10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an abstract test base for webform tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47e7eb7e85f2e08dab2562150598c29c' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9dae7780ad27ece2a36c71c958e9d785' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getMails',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1e6f54d87c1de04324579c58eebdf61' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd212b6376239291fdaec22730a56143d' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertMailString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05f977867866cf85093d0492fb682c18' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertMailPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4f9eccb67f684d52460e42e1143e2d9' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'verboseEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85398ead5d0f3f8d06ff39ca579bad9a' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7da79df8d4faf144b3a099d7b359d8f' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'placeBlocks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6bb5d851ca965c445c18fea071ba6f35' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'placeWebformBlocks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74b73ad829452b2ab5c9bd289228d118' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e508ed398bc6d586398840cad5db7f1' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e61000de740b2605a888d2f3b137be2e' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'createFilters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd023884c13622063442d2b3f01844f4' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'createTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23593694b321d3b52fc64fc5663646d1' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'loadWebforms',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd70599bef1fe32459df9fef5d280148f' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'loadWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e72fd28e7420c8f9df2c8b1a07490df6' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'createWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12983553927fac3596ecafed71676feb' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'reloadWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f21f15d1daf39e5bf40db50488b03b9d' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'postSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fd22a5ecbf4b498822153009199955e' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'postSubmissionTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1abe9915a4996c54671e1be6070091d6' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'loadSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ba0fee50251c45f34bfcc7e22703cf3' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'loadSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1a8c5bc1264f7be9726530615c5fa41' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'purgeSubmissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa75001310963a741527814641b0457a' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getWebformSubmitButtonLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '704259b5b05111f4f9344f6682d0ba4f' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getLastSubmissionId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ffd7ecd03b9c7c9db5a0e4ffa8326ac' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getExport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01a598f48cb3282bc35160a7efb259df' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getExport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '982002c8c0690be1cdd2e24f6b99bec1' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getExportColumns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77e5c96e70b0f5528d0fb02ca836f87f' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getExportColumns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1c3889de1d0ab15f36f1af87a6eec3e' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getLastEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1d38aed149cdcd1d2c1fe4ffc2d4c8d' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertCssSelect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3db1f935d6fc8e2580aa8885a17dfc7' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoCssSelect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15b2ed83567d4d8d36434ac887537a3a' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertElementVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '994878eab12d874876bf952c6478f32a' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertElementNotVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fc08259947436a9d8723b77f4880379' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'debug',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f38f2c74126cca854c8481d27330ca50' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b316f700f2ca0a0cfbf0547b903e275' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dfe8dc19a00d0b9af871c3f02bf36a67' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNotEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7569b3c8d34dbfd162c0be546c02709' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertIdentical',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8440b714337aa13b36f882f9cfe2cf82' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNotIdentical',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fbbc81edac83071b2c2293cda7fcc773' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertIdenticalObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5ed596d36b5e9ec928c83b4cd681058' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'pass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b173ba406330dfd8c502016a0f5d88bb' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'verbose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc35043a70fcc8826e30cf51f3186e8d' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertElementPresent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3b40f3d059e09e9bac58fa00c378120' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertElementNotPresent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb514905465a1d6b1b347d3d40e661ca' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3a9507d6f6888c1ec3c2dfb5d1f87ee' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f659efb34ef9b50e3c901708fcb203b6' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertTextHelper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bd684047624bd2da0b3cbf4b74a5d35' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertUniqueText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4691f70ec4ab1711d49addab1889752' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoUniqueText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74f1c00558f8d3bb8e905bb146d0e214' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a5d1932a772c6c0358c317498e33f41' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertFieldByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79c4b020d3e5132ee4915bd342400464' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoFieldByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25bcd292b978411745e5758a6c7b365e' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertFieldById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3bf02a9d92a70e86fcbec0c177d17b0' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d082b9e5f970798e2549136c28785d3' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a3b67fd9a259743e15fada3592d7ac6' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c987740a2ba7ecbf65fe94ad1eec323' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89feaf2499b807b87553a14b8b1f1bb2' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d80a74cba3f9597f72680aab67a3ea3' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a7b0e720e1df9ae9a4d29624420501b' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65109afcb5cc03cf0adc671dcd890188' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertLinkByHref',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea0f4ff37a53e238ba411805f0ddbb84' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoLinkByHref',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2376819fe86829b92acf8fdade0ca3fc' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoFieldById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3752dc0d459c69f0545966c42bcb6e65' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bed0a60739c7b7f5ecf3dbc02f199df' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac2e09764cc5d469e322b67865ed97e5' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertOptionByText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88d5d260bd9327abe8f6a14cad41ab1c' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e40b3a5b9033e39b77eb8f8b50af5cb' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertOptionSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6af6982e0ef4bf3fb543cec89b0f4c4' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertFieldChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f4a081005d5662f782444c58c9fd365' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoFieldChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e708c3844c1daad0a6687a73b8e06e5' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertFieldByXPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95b8286e835f7d9ae312bf32c8e1d964' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoFieldByXPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9de37179fa0df74a1fbd6299cc91ffa3' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertFieldsByValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0000235fa054661b9d87bd829ec0e056' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a439d5c853a094aecef339859b7e0c59' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce111da6c1aeeeb0538e2cc0838c7b18' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32d6e4de7ca2d94ead4cf1506084525e' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6be0bc07312d2466b13a75ebe43ef8f8' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertCacheTag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a29b08c1ac7059fd0949b20a3a6be552' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertNoCacheTag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d815bbca842cfca91ceb6d057dcf233' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8771d22d12a1a5a79c286a85333b250f' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'assertSession',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20b8fc1b9c3610676c0cce6cbe4de41f' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'buildXPathQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfdacfb736c3f2690eda4a14fc7968db' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'constructFieldXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '676783dc34cd98c4abdfeb492b227067' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getRawContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0307f8ca0489770d0f4d3e22864ce7f2' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'getAllOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '428036af2f4c90b426b87c0e1e2535dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set default theme to classy.
   *
   * @var string
   * @see https://www.drupal.org/node/3083055
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f6f8eafc96ea7cee5bfa8f746d9e21c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1042c4f68725981245a97980cbc236a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webforms to load.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ad83b6f161ead55be0c1848ee86556d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff9eb9c44c04d704c79f9dd13ef6f30d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'webformbrowsertesttrait' => 'Drupal\\Tests\\webform\\Traits\\WebformBrowserTestTrait',
          'webformassertlegacytrait' => 'Drupal\\Tests\\webform\\Traits\\WebformAssertLegacyTrait',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformBrowserTestBase',
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