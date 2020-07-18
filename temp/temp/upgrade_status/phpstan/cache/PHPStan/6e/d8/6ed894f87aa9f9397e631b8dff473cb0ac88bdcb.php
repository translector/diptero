<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/MigrateDestinationInterface.php-1594234425',
   'data' => 
  array (
    '7c50099a18b22db0d6c242923af91815' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for Migration Destination classes.
 *
 * Destinations are responsible for persisting source data into the destination
 * Drupal.
 *
 * @see \\Drupal\\migrate\\Plugin\\migrate\\destination\\DestinationBase
 * @see \\Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager
 * @see \\Drupal\\migrate\\Annotation\\MigrateDestination
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fdfa01b0a38698489184fce35cd1632f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the destination IDs.
   *
   * To support MigrateIdMap maps, derived destination classes should return
   * field definition(s) corresponding to the primary key of the destination
   * being implemented. These are used to construct the destination key fields
   * of the map table for a migration using this destination.
   *
   * @return array[]
   *   An associative array of field definitions keyed by field ID. Values are
   *   associative arrays with a structure that contains the field type (\'type\'
   *   key). The other keys are the field storage settings as they are returned
   *   by FieldStorageDefinitionInterface::getSettings(). As an example, for a
   *   composite destination primary key that is defined by an integer and a
   *   string, the returned value might look like:
   *   @code
   *     return [
   *       \'id\' => [
   *         \'type\' => \'integer\',
   *         \'unsigned\' => FALSE,
   *         \'size\' => \'big\',
   *       ],
   *       \'version\' => [
   *         \'type\' => \'string\',
   *         \'max_length\' => 64,
   *         \'is_ascii\' => TRUE,
   *       ],
   *     ];
   *   @endcode
   *   If \'type\' points to a field plugin with multiple columns and needs to
   *   refer to a column different than \'value\', the key of that column will be
   *   appended as a suffix to the plugin name, separated by dot (\'.\'). Example:
   *   @code
   *     return [
   *       \'format\' => [
   *         \'type\' => \'text.format\',
   *       ],
   *     ];
   *   @endcode
   *   Additional custom keys/values, that are not part of field storage
   *   definition, can be passed in definitions:
   *   @code
   *     return [
   *       \'nid\' => [
   *         \'type\' => \'integer\',
   *         \'custom_setting\' => \'some_value\',
   *       ],
   *     ];
   *   @endcode
   *
   * @see \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface::getSettings()
   * @see \\Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\IntegerItem
   * @see \\Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\StringItem
   * @see \\Drupal\\text\\Plugin\\Field\\FieldType\\TextItem
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
         'functionName' => 'getIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8403b886c8de0f8096b451ca7797fb27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of destination fields.
   *
   * Derived classes must implement fields(), returning a list of available
   * destination fields.
   *
   * @param \\Drupal\\migrate\\Plugin\\MigrationInterface $migration
   *   Unused, will be removed before Drupal 9.0.x. Defaults to NULL.
   *
   * @return array
   *   - Keys: machine names of the fields
   *   - Values: Human-friendly descriptions of the fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
         'functionName' => 'fields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c5706aacfd7832279848d7ec51790e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Import the row.
   *
   * Derived classes must implement import(), to construct one new object
   * (pre-populated) using ID mappings in the Migration.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The row object.
   * @param array $old_destination_id_values
   *   (optional) The old destination IDs. Defaults to an empty array.
   *
   * @return array|bool
   *   An indexed array of destination IDs in the same order as defined in the
   *   plugin\'s getIds() method if the plugin wants to save the IDs to the ID
   *   map, TRUE to indicate success without saving IDs to the ID map, or
   *   FALSE to indicate a failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
         'functionName' => 'import',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbdc8d90ec4a21a34ebaf8b06ca35220' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Delete the specified destination object from the target Drupal.
   *
   * @param array $destination_identifier
   *   The ID of the destination object to delete.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
         'functionName' => 'rollback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34902e200a0fb519da7a5fdf4fc72989' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the destination can be rolled back or not.
   *
   * @return bool
   *   TRUE if rollback is supported, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
         'functionName' => 'supportsRollback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '314b355b2534d914dc39b4d7e09e01f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The rollback action for the last imported item.
   *
   * @return int
   *   The MigrateIdMapInterface::ROLLBACK_ constant indicating how an imported
   *   item should be handled on rollback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
         'functionName' => 'rollbackAction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c564d75566fd87a05db39a746517c56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the destination module handling the destination data.
   *
   * @return string|null
   *   The destination module or NULL if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateDestinationInterface',
         'functionName' => 'getDestinationModule',
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