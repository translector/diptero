<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate_drupal/src/Plugin/migrate/source/d7/FieldableEntity.php-1594234425',
   'data' => 
  array (
    '3cf4574f468c032729a3525af7d63980' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for D7 source plugins which need to collect field values from
 * the Field API.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'drupalsqlbase' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7\\FieldableEntity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bd03b612e93fa4151cda320770da52b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns all non-deleted field instances attached to a specific entity type.
   *
   * @param string $entity_type
   *   The entity type ID.
   * @param string|null $bundle
   *   (optional) The bundle.
   *
   * @return array[]
   *   The field instances, keyed by field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'drupalsqlbase' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7\\FieldableEntity',
         'functionName' => 'getFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc23e0bb2bd7f91a82b2bca1e6447c39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves field values for a single field of a single entity.
   *
   * @param string $entity_type
   *   The entity type.
   * @param string $field
   *   The field name.
   * @param int $entity_id
   *   The entity ID.
   * @param int|null $revision_id
   *   (optional) The entity revision ID.
   * @param string $language
   *   (optional) The field language.
   *
   * @return array
   *   The raw field values, keyed by delta.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'drupalsqlbase' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7\\FieldableEntity',
         'functionName' => 'getFieldValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff22b4e7caac8ccf96a17e641982ac29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if an entity type uses Entity Translation.
   *
   * @param string $entity_type
   *   The entity type.
   *
   * @return bool
   *   Whether the entity type uses entity translation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'drupalsqlbase' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7\\FieldableEntity',
         'functionName' => 'isEntityTranslatable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b1bf785d030a38ce79368ac668ed333' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an entity source language from the \'entity_translation\' table.
   *
   * @param string $entity_type
   *   The entity type.
   * @param int $entity_id
   *   The entity ID.
   *
   * @return string|bool
   *   The entity source language or FALSE if no source language was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7',
         'uses' => 
        array (
          'drupalsqlbase' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\d7\\FieldableEntity',
         'functionName' => 'getEntityTranslationSourceLanguage',
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