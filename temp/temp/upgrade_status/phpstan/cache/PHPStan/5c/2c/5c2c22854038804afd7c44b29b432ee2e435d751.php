<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/tests/src/Functional/ProfileAdminTest.php-1586214306,/var/www/html/web/modules/contrib/linkit/src/Tests/ProfileCreationTrait.php-1586214306',
   'data' => 
  array (
    '585a6cc6eab635bf5f889945c5d669aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests creating, loading and deleting profiles.
 *
 * @group linkit
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Functional',
         'uses' => 
        array (
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Functional\\ProfileAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60ad4ed5b3f7aff224f3cd958883e25a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create profiles based on default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Tests',
         'uses' => 
        array (
          'profile' => 'Drupal\\linkit\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Functional\\ProfileAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b3537c7ff06778bbdaa46f7ac64ab40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a profile based on default settings.
   *
   * @param array $settings
   *   (optional) An associative array of settings for the profile, as used in
   *   entity_create(). Override the defaults by specifying the key and value
   *   in the array.
   *   The following defaults are provided:
   *   - id: Random string.
   *   - label: Random string.
   *
   * @return \\Drupal\\linkit\\ProfileInterface
   *   The created profile entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Tests',
         'uses' => 
        array (
          'profile' => 'Drupal\\linkit\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Functional\\ProfileAdminTest',
         'functionName' => 'createProfile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82c0826cd4f2cb4d54da4b9bd1abbc34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the overview page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Functional',
         'uses' => 
        array (
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Functional\\ProfileAdminTest',
         'functionName' => 'testOverview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3dfc59879357e48a596605055bbc87da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates profile.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Functional',
         'uses' => 
        array (
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Functional\\ProfileAdminTest',
         'functionName' => 'testProfileCreation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20b0e5a38fcaa4c756cfd42967d0478e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates a profile.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Functional',
         'uses' => 
        array (
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Functional\\ProfileAdminTest',
         'functionName' => 'testProfileUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '617956fb9201bc2b3e9eeedfb9a48c4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Delete a profile.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Functional',
         'uses' => 
        array (
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Functional\\ProfileAdminTest',
         'functionName' => 'testProfileDelete',
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