<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/MigrateIdMapInterface.php-1594234425',
   'data' => 
  array (
    '162ddd83fb9fb5f1ebb92d984c1f6ded' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for migrate ID mappings.
 *
 * Migrate ID mappings maintain a relation between source ID and destination ID
 * for audit and rollback purposes. The keys used in the migrate_map table are
 * of the form sourceidN and destidN for the source and destination values
 * respectively.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '662b434b7ef39482600718377b967dfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Codes reflecting the current status of a map row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb209751df11417e6ee1890062f2d892' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Codes reflecting how to handle the destination item on rollback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50da587df5f429a4d8b9b7d49e052326' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves a mapping from the source identifiers to the destination identifiers.
   *
   * Called upon import of one row, we record a mapping from the source ID to
   * the destination ID. Also may be called, setting the third parameter to
   * NEEDS_UPDATE, to signal an existing record should be re-migrated.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The raw source data. We use the ID map derived from the source object
   *   to get the source identifier values.
   * @param array $destination_id_values
   *   An array of destination identifier values.
   * @param int $status
   *   (optional) Status of the source row in the map. Defaults to
   *   self::STATUS_IMPORTED.
   * @param int $rollback_action
   *   (optional) How to handle the destination object on rollback. Defaults to
   *   self::ROLLBACK_DELETE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'saveIdMapping',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a568eb27a181dd4ce7917717f37df31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves a message related to a source record in the migration message table.
   *
   * @param array $source_id_values
   *   The source identifier keyed values of the record, e.g. [\'nid\' => 5].
   * @param string $message
   *   The message to record.
   * @param int $level
   *   (optional) The message severity. Defaults to
   *   MigrationInterface::MESSAGE_ERROR.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'saveMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd45dbb463d09a7678e9e48e0d62d9b38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a traversable object of messages related to source records.
   *
   * @param array $source_id_values
   *   (optional) The source identifier keyed values of the record, e.g.
   *   [\'nid\' => 5]. If empty (the default), all messages are retrieved.
   * @param int $level
   *   (optional) Message severity. If NULL (the default), retrieve messages of
   *   all severities.
   *
   * @return \\Traversable
   *   Retrieves a traversable object of message objects of unspecified class.
   *   Each object has the following public properties:
   *   - source_row_hash: the hash of the entire serialized source row data.
   *   - message: the text of the message.
   *   - level: one of MigrationInterface::MESSAGE_ERROR,
   *   MigrationInterface::MESSAGE_WARNING, MigrationInterface::MESSAGE_NOTICE,
   *   MigrationInterface::MESSAGE_INFORMATIONAL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'getMessages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e619ef9a604d49c435f8e8ccb106bbb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves an iterator over messages relate to source records.
   *
   * @param array $source_id_values
   *   (optional) The source identifier keyed values of the record, e.g.
   *   [\'nid\' => 5]. If empty (the default), all messages are retrieved.
   * @param int $level
   *   (optional) Message severity. If NULL (the default), retrieve messages of
   *   all severities.
   *
   * @return \\Iterator
   *   Retrieves an iterator over the message rows.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
   *   Use \\Drupal\\migrate\\Plugin\\MigrateIdMapInterface::getMessages() instead.
   *
   * @see https://www.drupal.org/node/3060969
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'getMessageIterator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '340d56ba0b7cc22cf6dc35d28fba2b8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares to run a full update.
   *
   * Prepares this migration to run as an update - that is, in addition to
   * unmigrated content (source records not in the map table) being imported,
   * previously-migrated content will also be updated in place by marking all
   * previously-imported content as ready to be re-imported.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'prepareUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c04dd7efd057dc2f461264df54461f7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of processed items in the map.
   *
   * @return int
   *   The count of records in the map table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'processedCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '176908c4e71aa21bb4a3d9f8da8227f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of imported items in the map.
   *
   * @return int
   *   The number of imported items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'importedCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5e2d59452f7a1d9f32e24c87e7bc948' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a count of items which are marked as needing update.
   *
   * @return int
   *   The number of items which need updating.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'updateCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3c6cd74fc513b8aae2e9f0bb43b2b24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of items that failed to import.
   *
   * @return int
   *   The number of items that errored out.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'errorCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecc58264599efa1cfc6d046d68cba26e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of messages saved.
   *
   * @return int
   *   The number of messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'messageCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e424cd548dab5b67a78933a8feecce8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the map and message entries for a given source record.
   *
   * @param array $source_id_values
   *   The source identifier keyed values of the record, e.g. [\'nid\' => 5].
   * @param bool $messages_only
   *   (optional) TRUE to only delete the migrate messages. Defaults to FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec57d73627417141e72d1f0db04709c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the map and message table entries for a given destination row.
   *
   * @param array $destination_id_values
   *   The destination identifier key value pairs we should do the deletes for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'deleteDestination',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '971d58a207221afaa4133bbfd897c3bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears all messages from the map.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'clearMessages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f27e9d5711a12093099c604c1b053d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a row from the map table based on source identifier values.
   *
   * @param array $source_id_values
   *   The source identifier keyed values of the record, e.g. [\'nid\' => 5].
   *
   * @return array
   *   The raw row data as an associative array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'getRowBySource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '799c58ef8a9a5390ddc219e5d5f204a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a row by the destination identifiers.
   *
   * @param array $destination_id_values
   *   The destination identifier keyed values of the record, e.g. [\'nid\' => 5].
   *
   * @return array
   *   The row(s) of data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'getRowByDestination',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc43ad5711d56553ce853d2c42b5f013' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves an array of map rows marked as needing update.
   *
   * @param int $count
   *   The maximum number of rows to return.
   *
   * @return array
   *   Array of map row objects that need updating.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'getRowsNeedingUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60b022a706633aecc8f3454c3d5cf6f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Looks up the source identifier.
   *
   * Given a (possibly multi-field) destination identifier value, return the
   * (possibly multi-field) source identifier value mapped to it.
   *
   * @param array $destination_id_values
   *   The destination identifier keyed values of the record, e.g. [\'nid\' => 5].
   *
   * @return array
   *   The source identifier keyed values of the record, e.g. [\'nid\' => 5], or
   *   an empty array on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'lookupSourceId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba1030f710f9e5d0194a8fb2d07ff7b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Looks up the destination identifier corresponding to a source key.
   *
   * Given a (possibly multi-field) source identifier value, return the
   * (possibly multi-field) destination identifier value it is mapped to.
   *
   * @param array $source_id_values
   *   The source identifier keyed values of the record, e.g. [\'nid\' => 5].
   *
   * @return array
   *   The destination identifier values of the record, or empty on failure.
   *
   * @deprecated in drupal:8.1.0 and is removed from drupal:9.0.0. Use
   *   lookupDestinationIds() instead.
   *
   * @see https://www.drupal.org/node/2725809
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'lookupDestinationId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b4f190c58a89f5a8ac785e65fa2b323' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Looks up the destination identifiers corresponding to a source key.
   *
   * This can look up a subset of source keys if only some are provided, and
   * will return all destination keys that match.
   *
   * @param array $source_id_values
   *   The source identifier keyed values of the records, e.g. [\'nid\' => 5].
   *   If unkeyed, the first count($source_id_values) keys will be assumed.
   *
   * @return array
   *   An array of arrays of destination identifier values.
   *
   * @throws \\Drupal\\migrate\\MigrateException
   *   Thrown when $source_id_values contains unknown keys, or is the wrong
   *   length.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'lookupDestinationIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '395233f311c2dc7a80d2d992d776d630' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Looks up the destination identifier currently being iterated.
   *
   * @return array
   *   The destination identifier values of the record, or NULL on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'currentDestination',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19b08c43262361d7a10217b6e64b5070' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Looks up the source identifier(s) currently being iterated.
   *
   * @return array
   *   The source identifier values of the record, or NULL on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'currentSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6842152438c1a471b266e7caa888c8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes any persistent storage used by this map.
   *
   * For example, remove the map and message tables.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'destroy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b8114779cc54b7682b9f4d5a2e793a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the qualified map table.
   *
   * @todo Remove this as this is SQL only and so doesn\'t belong to the interface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'getQualifiedMapTableName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6e2c95be0f6353ca94cffc61ea4cb0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the migrate message service.
   *
   * @param \\Drupal\\migrate\\MigrateMessageInterface $message
   *   The migrate message service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'setMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec3b68d3163f9b998e6cc4088cfcf8be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a specified record to be updated, if it exists.
   *
   * @param array $source_id_values
   *   The source identifier values of the record.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migratemessageinterface' => 'Drupal\\migrate\\MigrateMessageInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
         'functionName' => 'setUpdate',
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