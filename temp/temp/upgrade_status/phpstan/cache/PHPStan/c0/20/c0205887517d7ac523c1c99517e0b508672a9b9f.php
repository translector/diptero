<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/extlink/src/EventSubscriber/ExtlinkSettingsSaveEventSubscriber.php-1586335961',
   'data' => 
  array (
    '87ea9d2a1f9b210a7efd38c14d4b9f75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Clears JS and asset libraries in response to changes in extlink settings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\extlink\\EventSubscriber',
         'uses' => 
        array (
          'assetcollectionoptimizerinterface' => 'Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface',
          'librarydiscoveryinterface' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\extlink\\EventSubscriber\\ExtlinkSettingsSaveEventSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28dac6c018b36e7205dd7f42d65b8a7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The CSS/JS asset library discovery service.
   *
   * @var \\Drupal\\Core\\Asset\\LibraryDiscoveryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\extlink\\EventSubscriber',
         'uses' => 
        array (
          'assetcollectionoptimizerinterface' => 'Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface',
          'librarydiscoveryinterface' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\extlink\\EventSubscriber\\ExtlinkSettingsSaveEventSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '853db012640ff6c8bdf8717a0e8f7c06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The JS asset optimizer service.
   *
   * @var \\Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\extlink\\EventSubscriber',
         'uses' => 
        array (
          'assetcollectionoptimizerinterface' => 'Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface',
          'librarydiscoveryinterface' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\extlink\\EventSubscriber\\ExtlinkSettingsSaveEventSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b1a0a663358caa8b47f4f65bb7371ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * ExtlinkSettingsSaveEventSubscriber constructor.
   *
   * @param \\Drupal\\Core\\Asset\\LibraryDiscoveryInterface $library_discovery
   *   The CSS/JS asset library discovery service.
   * @param \\Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface $js_optimizer
   *   The JS asset optimizer service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\extlink\\EventSubscriber',
         'uses' => 
        array (
          'assetcollectionoptimizerinterface' => 'Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface',
          'librarydiscoveryinterface' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\extlink\\EventSubscriber\\ExtlinkSettingsSaveEventSubscriber',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3a1c3e60be11e7e88abd7a74f672f13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Acts on changes to extlink.settings to flush JS library and assets.
   *
   * @param \\Drupal\\Core\\Config\\ConfigCrudEvent $event
   *   The configuration event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\extlink\\EventSubscriber',
         'uses' => 
        array (
          'assetcollectionoptimizerinterface' => 'Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface',
          'librarydiscoveryinterface' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\extlink\\EventSubscriber\\ExtlinkSettingsSaveEventSubscriber',
         'functionName' => 'onConfigSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92212a55d18613bde6d36bbe1948e300' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\extlink\\EventSubscriber',
         'uses' => 
        array (
          'assetcollectionoptimizerinterface' => 'Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface',
          'librarydiscoveryinterface' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\extlink\\EventSubscriber\\ExtlinkSettingsSaveEventSubscriber',
         'functionName' => 'getSubscribedEvents',
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