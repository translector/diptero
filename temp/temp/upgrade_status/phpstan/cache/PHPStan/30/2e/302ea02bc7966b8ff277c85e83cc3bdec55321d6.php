<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/src/Functional/Tree/HelpPageTest.php-1586203134,/var/www/html/web/modules/contrib/token/tests/src/Functional/Tree/TokenTreeTestTrait.php-1586203134',
   'data' => 
  array (
    'eb91727fa12b401b5427467937f9ed00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests token tree on help page.
 *
 * @group token
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd7808241c5c3346fabce384b454c29d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper trait to assert tokens in token tree browser.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd92fe15dc4117f2de0357760346caf13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an array of token groups from the last retrieved page.
   *
   * @return array
   *   Array of token group names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => 'getTokenGroups',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df9722133b0240ecde270ec2de5d4297' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if the specified token group is present in the token browser.
   *
   * @param string $token_group
   *   The name of the token group.
   * @param string $message
   *   (optional) A message to display with the assertion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => 'assertTokenGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd40e266a2115231feb19d206276f45e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if the specified token group is not present in the token
   * browser.
   *
   * @param string $token_group
   *   The name of the token group.
   * @param string $message
   *   (optional) A message to display with the assertion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => 'assertTokenNotGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '924411a908de0ad19d8720754cafa1fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if the specified token is present in the token browser.
   *
   * @param $token
   *   The token name with the surrounding square brackets [].
   * @param string $parent
   *   (optional) The parent CSS identifier of this token.
   * @param string $message
   *   (optional) A message to display with the assertion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => 'assertTokenInTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '985f680ac43a9fc8aa8229286ca810ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if the specified token is present in the token browser.
   *
   * @param $token
   *   The token name with the surrounding square brackets [].
   * @param string $parent
   *   (optional) The parent CSS identifier of this token.
   * @param string $message
   *   (optional) A message to display with the assertion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => 'assertTokenNotInTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6d48b75470f483b19bf915417ec0ce1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get xpath to check for token in tree.
   *
   * @param $token
   *   The token name with the surrounding square brackets [].
   * @param string $parent
   *   (optional) The parent CSS identifier of this token.
   *
   * @return string
   *   The xpath to check for the token and parent.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => 'getXpathForTokenInTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd0678321344a253c67c2b7292b9da37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9957afba07319b30d4d8d21880e80cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7133a0d2f2c96f5025381b06c08c9f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the token browser on the token help page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\HelpPageTest',
         'functionName' => 'testHelpPageTree',
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