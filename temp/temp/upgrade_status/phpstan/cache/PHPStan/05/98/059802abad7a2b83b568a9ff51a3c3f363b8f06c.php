<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Functional/WebformRenderingTest.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/Test/AssertMailTrait.php-1594234425',
   'data' => 
  array (
    '7e7002d42589e61cb8b9b734ad816236' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests for webform token submission value.
 *
 * @group webform
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3235c3f36ba72b927a4b6c1173a64485' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9493b576ae3c901ac7042b3ea8dd3bb8' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => 'getMails',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9706da4fdc41cf84ed740b2cfe1127b' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => 'assertMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57659502184ad65d02029b9d17c1ace4' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => 'assertMailString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6d9a5b3ed7bb91d4e55b8bdaff5dc26' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => 'assertMailPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf6b3c8cf5a9ebdb33e7a938fec06751' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => 'verboseEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd86fcbaf04fedd865746c93fa5a7826' => 
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
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b77cda918f7eb343d0c4c2829179b1d' => 
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
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b80c62b78264484eaa2903ee56570cb2' => 
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
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22fdd80c72b5eb4cfd4dd6bc980f066e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test text format element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformRenderingTest',
         'functionName' => 'testRendering',
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