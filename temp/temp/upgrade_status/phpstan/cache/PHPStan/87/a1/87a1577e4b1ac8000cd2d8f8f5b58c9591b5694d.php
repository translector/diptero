<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/EntityFieldDefinitionTrait.php-1594234425',
   'data' => 
  array (
    '12ebbcc4a26ecd0db5327369c82e7339' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The entity field definition trait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '581e2d7c6027f46c348dc0bcb9e25cfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the field definition from a specific entity base field.
   *
   * The method takes the field ID as an argument and returns the field storage
   * definition to be used in getIds() by querying the destination entity base
   * field definition.
   *
   * @param string $key
   *   The field ID key.
   *
   * @return array
   *   An associative array with a structure that contains the field type, keyed
   *   as \'type\', together with field storage settings as they are returned by
   *   FieldStorageDefinitionInterface::getSettings().
   *
   * @see \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface::getSettings()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
         'functionName' => 'getDefinitionFromEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5ab957f73a15ccd6563df7eb38bacca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $definitions */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
         'functionName' => 'getDefinitionFromEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31665c248cdbef901bc451e6bb75dbeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds the entity type from configuration or plugin ID.
   *
   * @param string $plugin_id
   *   The plugin ID.
   *
   * @return string
   *   The entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\EntityFieldDefinitionTrait',
         'functionName' => 'getEntityTypeId',
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