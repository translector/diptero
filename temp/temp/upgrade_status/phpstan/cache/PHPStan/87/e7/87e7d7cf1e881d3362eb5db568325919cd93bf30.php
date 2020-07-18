<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/tests/src/Kernel/Entity/ProfileTest.php-1586214306,/var/www/html/web/modules/contrib/linkit/src/Tests/ProfileCreationTrait.php-1586214306',
   'data' => 
  array (
    'a093a4891d1b41536b4403bfd2d420b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the Profile entity.
 *
 * @coversDefaultClass \\Drupal\\linkit\\Entity\\Profile
 *
 * @group linkit
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel\\Entity',
         'uses' => 
        array (
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'linkitkerneltestbase' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\Entity\\ProfileTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c14fca9a651b244579a55c536c9b819' => 
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
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\Entity\\ProfileTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c8763c0df86ddc05630481b73827ede' => 
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
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\Entity\\ProfileTest',
         'functionName' => 'createProfile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd8945321a1f6ca85aef63f2c1ea32fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the profile description.
   *
   * @covers ::getDescription
   * @covers ::setDescription
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\linkit\\Kernel\\Entity',
         'uses' => 
        array (
          'profilecreationtrait' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
          'linkitkerneltestbase' => 'Drupal\\Tests\\linkit\\Kernel\\LinkitKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\linkit\\Kernel\\Entity\\ProfileTest',
         'functionName' => 'testDescription',
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