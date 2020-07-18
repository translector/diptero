<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/MigrateValidatableEntityInterface.php-1594234425',
   'data' => 
  array (
    'c44860542cff8bcd3b338aa134f0061e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * To implement by a destination plugin that should provide entity validation.
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de963ee6dd55cba23c01c33386238c7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a state of whether an entity needs to be validated before saving.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity to check for required validation.
   *
   * @return bool
   *   A state of whether an entity needs to be validated.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
         'functionName' => 'isEntityValidationRequired',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c62e659b6752efe40694320c6447e8a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the entity.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity to validate.
   *
   * @throws \\Drupal\\migrate\\Exception\\EntityValidationException
   *   When the validation didn\'t succeed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateValidatableEntityInterface',
         'functionName' => 'validateEntity',
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