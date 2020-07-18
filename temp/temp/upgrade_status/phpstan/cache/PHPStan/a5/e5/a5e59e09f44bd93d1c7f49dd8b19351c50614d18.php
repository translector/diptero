<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/src/Functional/Tree/TreeTest.php-1586203134,/var/www/html/web/modules/contrib/token/tests/src/Functional/Tree/TokenTreeTestTrait.php-1586203134',
   'data' => 
  array (
    '8e17c1b319f4b9ecdc9412b6dfd742ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests token tree page.
 *
 * @group token
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '439ce282a6a87d05ade5f4b58f26ed57' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d75d7b67b27c9359932b460ccfc87ee' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'getTokenGroups',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba497a2b694a96e5978ef83a151b88cf' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'assertTokenGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ca2dd3ff4b285278dd68bddbc9c810c' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'assertTokenNotGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d419f317a50925d4170753e8a605e7d' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'assertTokenInTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65c44d337b99a912c3b9aaf225278b18' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'assertTokenNotInTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ef9155855bf4847c4c2ae8a746c28f1' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'getXpathForTokenInTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff88915d4b0607d80ecaa5d6cb0369ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb2b79ea8f48216761b43869328f1e2d' => 
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
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05c19fdd46b52351550246603ee251e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test various tokens that are possible on the site.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'testAllTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1ab87b833daa278ed9327724e233852' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test various tokens that are possible on the site.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'testGlobalTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1990a6c10330ab2b58bb9173c9a181b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests if the token browser displays the user tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'testUserTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc1cfa39d9cb6698d47e5bc597131e3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests if the token browser displays the node tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'testNodeTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6094dd3478cd76f7bc0710c5614295f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the URL for the token tree based on the specified options.
   *
   * The token tree route\'s URL requires CSRF and cannot be generated in the
   * test code. The CSRF token generated using the test runner\'s session is
   * different from the session inside the test environment. This is why the
   * link has to be generated inside the environment.
   *
   * This function calls a page in token_module_test module which generates the
   * link and the token. This then replaces the options query parameter with the
   * specified options.
   *
   * The page also uses a title callback to set title to a render array, which
   * allows us to test if [current-page:title] works properly.
   *
   * @param array $options
   *   The options for the token tree browser.
   *
   * @return string
   *   The complete URL of the token tree browser with the CSRF token.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional\\Tree',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'tokentestbase' => 'Drupal\\Tests\\token\\Functional\\TokenTestBase',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TreeTest',
         'functionName' => 'getTokenTreeUrl',
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