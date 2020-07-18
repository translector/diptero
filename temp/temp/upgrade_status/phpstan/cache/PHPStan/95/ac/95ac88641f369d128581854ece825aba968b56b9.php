<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/src/Functional/Tree/TokenTreeTestTrait.php-1586203134',
   'data' => 
  array (
    '09418c0fdd5d9afd3e76cb868d82d5e2' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TokenTreeTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '958256a3e7e3c8e8b622d6f8d3940bd0' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TokenTreeTestTrait',
         'functionName' => 'getTokenGroups',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e1de5720c9689d193fa3acec73f30db' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TokenTreeTestTrait',
         'functionName' => 'assertTokenGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fdc487e5c4304c8224694f8049088b4f' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TokenTreeTestTrait',
         'functionName' => 'assertTokenNotGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '303dad52471bf211214b0c33bcbec659' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TokenTreeTestTrait',
         'functionName' => 'assertTokenInTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4521295d6b4e08896b9070a4edad0c30' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TokenTreeTestTrait',
         'functionName' => 'assertTokenNotInTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9108120843e2fc303541558db09467b' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\Tree\\TokenTreeTestTrait',
         'functionName' => 'getXpathForTokenInTree',
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