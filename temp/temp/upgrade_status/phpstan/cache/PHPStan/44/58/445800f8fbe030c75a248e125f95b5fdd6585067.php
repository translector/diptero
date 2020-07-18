<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/BlazyEntityInterface.php-1588969110',
   'data' => 
  array (
    '2f124abad03676d98cf4a41e47d2bf22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common entity utilities to work with field details.
 *
 * This is alternative to Drupal\\blazy\\BlazyFormatter used outside
 * field managers, such as Views field, or Slick/Entity Browser displays, etc.
 *
 * @see Drupal\\blazy\\Dejavu\\BlazyEntityReferenceBase
 * @see Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyMediaFormatterBase
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyEntityInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f92fed2ca714cc19e2dacc61ab5c78c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build image/video preview either using theme_blazy(), or view builder.
   *
   * @param array $data
   *   An array of data containing settings, and image item.
   * @param object $entity
   *   The media entity, else file entity to be associated to media if any.
   * @param string $fallback
   *   The fallback string to display such as file name or entity label.
   *
   * @return array
   *   The renderable array of theme_blazy(), or view builder, else empty array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyEntityInterface',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9d79716ad147a7ab92bba1d96232bac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity view, if available.
   *
   * @param object $entity
   *   The entity being rendered.
   * @param array $settings
   *   The settings containing view_mode.
   * @param string $fallback
   *   The fallback content when all fails, probably just entity label.
   *
   * @return array|bool
   *   The renderable array of the view builder, or false if not applicable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyEntityInterface',
         'functionName' => 'getEntityView',
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