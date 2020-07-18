<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/src/Tests/ProfileCreationTrait.php-1586214306',
   'data' => 
  array (
    '8c6d20f838290fe0c0e02d991143870b' => 
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
         'className' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9eb83cc4f8a6068799710c9cf6d7c19' => 
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
         'className' => 'Drupal\\linkit\\Tests\\ProfileCreationTrait',
         'functionName' => 'createProfile',
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