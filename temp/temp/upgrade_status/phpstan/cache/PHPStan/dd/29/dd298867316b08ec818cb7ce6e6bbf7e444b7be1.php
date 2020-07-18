<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Entity/Schema/EntityStorageSchemaInterface.php-1594234425',
   'data' => 
  array (
    '03d8b0efa137df7b6d88e5e1b574f821' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for entity storage schema handler classes.
 *
 * An entity type\'s storage schema handler is responsible for creating the
 * storage backend\'s schema that the entity type\'s storage handler needs for
 * storing its entities. For example, if the storage handler is for a SQL
 * backend, then the storage schema handler is responsible for creating the
 * needed tables. During the application lifetime, an entity type\'s definition
 * can change in a way that requires changes to the storage schema, so this
 * interface defines methods for that as well.
 *
 * @see \\Drupal\\Core\\Entity\\EntityStorageInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Schema',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypelistenerinterface' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '013f69551c9eaaedabf0be062c8037e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the changes to the entity type requires storage schema changes.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The updated entity type definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
   *   The original entity type definition.
   *
   * @return bool
   *   TRUE if storage schema changes are required, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Schema',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypelistenerinterface' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
         'functionName' => 'requiresEntityStorageSchemaChanges',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7b6f3d71c17afe21d3113a51d61fc98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if existing data would be lost if the schema changes were applied.
   *
   * If there are no schema changes needed, then no data needs to be migrated,
   * but it is not the responsibility of this function to recheck what
   * requiresEntityStorageSchemaChanges() checks. Rather, the meaning of what
   * this function returns when requiresEntityStorageSchemaChanges() returns
   * FALSE is undefined. Callers are expected to only call this function when
   * requiresEntityStorageSchemaChanges() is TRUE.
   *
   * This function can return FALSE if any of these conditions apply:
   * - There are no existing entities for the entity type.
   * - There are existing entities, but the schema changes can be applied
   *   without losing their data (e.g., if the schema changes can be performed
   *   by altering tables rather than dropping and recreating them).
   * - The only entity data that would be lost are ones that are not valid for
   *   the new definition (e.g., if changing an entity type from revisionable
   *   to non-revisionable, then it\'s okay to drop data for the non-default
   *   revision).
   *
   * When this function returns FALSE, site administrators will be unable to
   * perform an automated update, and will instead need to perform a site
   * migration or invoke some custom update process.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The updated entity type definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
   *   The original entity type definition.
   *
   * @return bool
   *   TRUE if data migration is required, FALSE otherwise.
   *
   * @see self::requiresEntityStorageSchemaChanges()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Schema',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypelistenerinterface' => 'Drupal\\Core\\Entity\\EntityTypeListenerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface',
         'functionName' => 'requiresEntityDataMigration',
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