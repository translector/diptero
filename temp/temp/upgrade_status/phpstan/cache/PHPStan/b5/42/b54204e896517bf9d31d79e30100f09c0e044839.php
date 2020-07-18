<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/admin_toolbar/tests/src/Functional/AdminToolbarToolsSortTest.php-1589829602',
   'data' => 
  array (
    '16876380227cccd3330f9e5ad9851ff7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests Admin Toolbar tools functionality.
 *
 * @group admin_toolbar
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar\\Functional',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'menu' => 'Drupal\\system\\Entity\\Menu',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar\\Functional\\AdminToolbarToolsSortTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86e927fe1f32dd1e67f82ffbcb410a17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar\\Functional',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'menu' => 'Drupal\\system\\Entity\\Menu',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar\\Functional\\AdminToolbarToolsSortTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '672cb84e285d1dc7b4e9b5f00c853cd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar\\Functional',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'menu' => 'Drupal\\system\\Entity\\Menu',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar\\Functional\\AdminToolbarToolsSortTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc0a7e2cd9d932c1189edc1c383d8698' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A test user with permission to access the administrative toolbar.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar\\Functional',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'menu' => 'Drupal\\system\\Entity\\Menu',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar\\Functional\\AdminToolbarToolsSortTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1203ce2cc4d5cbce5cf9c345ad0833a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that menu updates on entity add/update/delete.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar\\Functional',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'menu' => 'Drupal\\system\\Entity\\Menu',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar\\Functional\\AdminToolbarToolsSortTest',
         'functionName' => 'testMenuUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82c7e04e84394b5aef47d1bcad48deea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests sorting of menus by label rather than machine name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar\\Functional',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'menu' => 'Drupal\\system\\Entity\\Menu',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar\\Functional\\AdminToolbarToolsSortTest',
         'functionName' => 'testMenuSorting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0db05aa98e3e8a39091a5ce707d678c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that there is a link with the specified url in the admin toolbar.
   *
   * @param string $url
   *   The url to assert exists in the admin menu.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar\\Functional',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'menu' => 'Drupal\\system\\Entity\\Menu',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar\\Functional\\AdminToolbarToolsSortTest',
         'functionName' => 'assertMenuHasHref',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed13e2f5d55ff8107fffc0e7413403f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that there is no link with the specified url in the admin toolbar.
   *
   * @param string $url
   *   The url to assert exists in the admin menu.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar\\Functional',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'menu' => 'Drupal\\system\\Entity\\Menu',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar\\Functional\\AdminToolbarToolsSortTest',
         'functionName' => 'assertMenuDoesNotHaveHref',
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