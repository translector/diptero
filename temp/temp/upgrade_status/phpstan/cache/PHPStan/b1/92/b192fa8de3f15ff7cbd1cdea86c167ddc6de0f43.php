<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Config/ConfigEvents.php-1594234425',
   'data' => 
  array (
    'e9518495862a0214aa67d0248e301d06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines events for the configuration system.
 *
 * @see \\Drupal\\Core\\Config\\ConfigCrudEvent
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a28539b75685ceb5a9a1e741f0eeb131' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when saving a configuration object.
   *
   * This event allows modules to perform an action whenever a configuration
   * object is saved. The event listener method receives a
   * \\Drupal\\Core\\Config\\ConfigCrudEvent instance.
   *
   * See hook_update_N() documentation for safe configuration API usage and
   * restrictions as this event will be fired when configuration is saved by
   * hook_update_N().
   *
   * @Event
   *
   * @see \\Drupal\\Core\\Config\\ConfigCrudEvent
   * @see \\Drupal\\Core\\Config\\Config::save()
   * @see \\Drupal\\Core\\Config\\ConfigFactory::onConfigSave()
   * @see hook_update_N()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9edfd1ecd41f9413a8a79fa9db0b2d39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when deleting a configuration object.
   *
   * This event allows modules to perform an action whenever a configuration
   * object is deleted. The event listener method receives a
   * \\Drupal\\Core\\Config\\ConfigCrudEvent instance.
   *
   * See hook_update_N() documentation for safe configuration API usage and
   * restrictions as this event will be fired when configuration is deleted by
   * hook_update_N().
   *
   * @Event
   *
   * @see \\Drupal\\Core\\Config\\ConfigCrudEvent
   * @see \\Drupal\\Core\\Config\\Config::delete()
   * @see \\Drupal\\Core\\Config\\ConfigFactory::onConfigDelete()
   * @see hook_update_N()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2143a02065247c0bcdbcc45e236d21c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when renaming a configuration object.
   *
   * This event allows modules to perform an action whenever a configuration
   * object\'s name is changed. The event listener method receives a
   * \\Drupal\\Core\\Config\\ConfigRenameEvent instance.
   *
   * See hook_update_N() documentation for safe configuration API usage and
   * restrictions as this event will be fired when configuration is renamed by
   * hook_update_N().
   *
   * @Event
   *
   * @see \\Drupal\\Core\\Config\\ConfigRenameEvent
   * @see \\Drupal\\Core\\Config\\ConfigFactoryInterface::rename()
   * @see hook_update_N()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3ac2b8f20d9621eae81690f556411a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when validating imported configuration.
   *
   * This event allows modules to perform additional validation operations when
   * configuration is being imported. The event listener method receives a
   * \\Drupal\\Core\\Config\\ConfigImporterEvent instance.
   *
   * @Event
   *
   * @see \\Drupal\\Core\\Config\\ConfigImporterEvent
   * @see \\Drupal\\Core\\Config\\ConfigImporter::validate().
   * @see \\Drupal\\Core\\EventSubscriber\\ConfigImportSubscriber::onConfigImporterValidate().
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '181953325e671c833da9dccbaa71d92b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when importing configuration to target storage.
   *
   * This event allows modules to perform additional actions when configuration
   * is imported. The event listener method receives a
   * \\Drupal\\Core\\Config\\ConfigImporterEvent instance.
   *
   * @Event
   *
   * @see \\Drupal\\Core\\Config\\ConfigImporterEvent
   * @see \\Drupal\\Core\\Config\\ConfigImporter::import().
   * @see \\Drupal\\Core\\EventSubscriber\\ConfigSnapshotSubscriber::onConfigImporterImport().
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0ecaba09765a488d6eefce21c536ad1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of event fired when missing content dependencies are detected.
   *
   * Events subscribers are fired as part of the configuration import batch.
   * Each subscribe should call
   * \\Drupal\\Core\\Config\\MissingContentEvent::resolveMissingContent() when they
   * address a missing dependency. To address large amounts of dependencies
   * subscribers can call
   * \\Drupal\\Core\\Config\\MissingContentEvent::stopPropagation() which will stop
   * calling other events and guarantee that the configuration import batch will
   * fire the event again to continue processing missing content dependencies.
   *
   * @see \\Drupal\\Core\\Config\\ConfigImporter::processMissingContent()
   * @see \\Drupal\\Core\\Config\\MissingContentEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e12b575401c42ea24335647174ac838' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of event fired to collect information on all config collections.
   *
   * This event allows modules to add to the list of configuration collections
   * retrieved by \\Drupal\\Core\\Config\\ConfigManager::getConfigCollectionInfo().
   * The event listener method receives a
   * \\Drupal\\Core\\Config\\ConfigCollectionInfo instance.
   *
   * @Event
   *
   * @see \\Drupal\\Core\\Config\\ConfigCollectionInfo
   * @see \\Drupal\\Core\\Config\\ConfigManager::getConfigCollectionInfo()
   * @see \\Drupal\\Core\\Config\\ConfigFactoryOverrideBase
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6acb9eed2ea120da81a9eb04c0253c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired just before importing configuration.
   *
   * This event allows subscribers to modify the configuration which is about to
   * be imported. The event listener method receives a
   * \\Drupal\\Core\\Config\\StorageTransformEvent instance. This event contains a
   * config storage which subscribers can interact with and which will finally
   * be used to import the configuration from.
   * Together with \\Drupal\\Core\\Config\\ConfigEvents::STORAGE_TRANSFORM_EXPORT
   * subscribers can alter the active configuration in a config sync workflow
   * instead of just overriding at runtime via the config-override system.
   * This allows a complete customization of the workflow including additional
   * modules and editable configuration in different environments.
   *
   * @code
   *   $storage = $event->getStorage();
   * @endcode
   *
   * This event is also fired when just viewing the difference of configuration
   * to be imported independently of whether the import takes place or not.
   * Use the \\Drupal\\Core\\Config\\ConfigEvents::IMPORT event to subscribe to the
   * import having taken place.
   *
   * @Event
   *
   * @see \\Drupal\\Core\\Config\\StorageTransformEvent
   * @see \\Drupal\\Core\\Config\\ConfigEvents::STORAGE_TRANSFORM_EXPORT
   * @see \\Drupal\\Core\\Config\\ImportStorageTransformer::transform
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ea375af880cd1510d1d62653ecc2d71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when the export storage is used.
   *
   * This event allows subscribers to modify the configuration which is about to
   * be exported. The event listener method receives a
   * \\Drupal\\Core\\Config\\StorageTransformEvent instance. This event contains a
   * config storage which subscribers can interact with and which will finally
   * be used to export the configuration from.
   *
   * @code
   *   $storage = $event->getStorage();
   * @endcode
   *
   * Typically subscribers will want to perform the reverse operation on the
   * storage than for \\Drupal\\Core\\Config\\ConfigEvents::STORAGE_TRANSFORM_IMPORT
   * to make sure successive exports and imports yield no difference.
   *
   * @Event
   *
   * @see \\Drupal\\Core\\Config\\StorageTransformEvent
   * @see \\Drupal\\Core\\Config\\ConfigEvents::STORAGE_TRANSFORM_IMPORT
   * @see \\Drupal\\Core\\Config\\ExportStorageManager::getStorage
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigEvents',
         'functionName' => NULL,
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