<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/MediaSourceFieldConstraintsInterface.php-1594234425',
   'data' => 
  array (
    '9ee391e2cb6b642f81cf78d892d2cf9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for a media source with source field constraints.
 *
 * This allows a media source to optionally add source field validation
 * constraints for media items. To add constraints at the entity level, a
 * media source can also implement MediaSourceEntityConstraintsInterface.
 *
 * @see \\Drupal\\media\\MediaSourceInterface
 * @see \\Drupal\\media\\MediaSourceEntityConstraintsInterface
 * @see \\Drupal\\media\\MediaSourceBase
 * @see \\Drupal\\media\\Entity\\Media
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c386f9a3a2499af6525c3c6e0d4a4e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets media source-specific validation constraints for a source field.
   *
   * @return \\Symfony\\Component\\Validator\\Constraint[]
   *   An array of validation constraint definitions, keyed by constraint name.
   *   Each constraint definition can be used for instantiating
   *   \\Symfony\\Component\\Validator\\Constraint objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
         'functionName' => 'getSourceFieldConstraints',
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