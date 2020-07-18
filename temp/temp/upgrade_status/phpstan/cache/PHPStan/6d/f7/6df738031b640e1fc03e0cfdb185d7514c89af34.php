<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/redirect_after_login/tests/src/Functional/AdminTest.php-1587318791',
   'data' => 
  array (
    'ae03d48df5501eb8bd83bf8b2a9ea3e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests for admin-related functionality.
 *
 * @group redirect_after_login
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\redirect_after_login\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\redirect_after_login\\Functional\\AdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f79b8ae78d08121eb6ff059bddc5f28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Various users for the tests.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\redirect_after_login\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\redirect_after_login\\Functional\\AdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '685d1d466c3181782b62da42ce4e7302' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Various roles for the tests.
   *
   * @var \\Drupal\\user\\RoleInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\redirect_after_login\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\redirect_after_login\\Functional\\AdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa4ac7bb8ce0d83a4db1ec797ec0ed59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\redirect_after_login\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\redirect_after_login\\Functional\\AdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab83050f30718206a872de5cb20beec6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\redirect_after_login\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\redirect_after_login\\Functional\\AdminTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a66ff8584cf3e7adffece19466916d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests access control for the admin settings path.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\redirect_after_login\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\redirect_after_login\\Functional\\AdminTest',
         'functionName' => 'testAdminSettingsPathAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '548f0c8c27f14af9e23dc2dd6c5dad22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that the given user gets a given status code.
   *
   * @param \\Drupal\\user\\UserInterface $user
   *   User to login as, before loading the admin path.
   * @param int $status_code
   *   HTTP status code that is expected, e.g. 200.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\redirect_after_login\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\redirect_after_login\\Functional\\AdminTest',
         'functionName' => 'checkUserGetsCode',
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