<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/DisplayBase.php-1588013888,/var/www/html/web/modules/contrib/entity_browser/src/PluginConfigurationFormTrait.php-1588013888',
   'data' => 
  array (
    '543d780f0c4152b584ca97606d087361' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base implementation for display plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04ef3cc7f48cd197ef261e092f6a583a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides base form methods for configurable plugins entity browser.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8bbac2e1eb0c8d5da59f642918dea53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements PluginFormInterface::buildConfigurationForm().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb00916a3eea9c267efb75d18ca90d08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements PluginFormInterface::validateConfigurationForm().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49e38f32c8be862110374cbca308446d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements PluginFormInterface::submitConfigurationForm().
   *
   * This is the default implementation for the most common cases where the form
   * element names match keys in configuration array. Plugins can override this
   * if they need more complex logic.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc7d0e1d4efbf9b811aa8c9a42232849' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Plugin label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b410f8e2143dc0c49f0d5ad5e5cbaf01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selected entities.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e958d70160a93d84a7934a2c4fc33d7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Event dispatcher service.
   *
   * @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7889e618effcbcfb5d772c9bb4e55194' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * UUID generator interface.
   *
   * @var \\Drupal\\Component\\Uuid\\UuidInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58f81c109c34b8d479848e47f63a336d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Instance UUID string.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0390072d98b4016d8b38c57df6364c3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The selection storage.
   *
   * @var \\Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5372f79e3d81f2df2c58247e7609beb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs display plugin.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   Event dispatcher service.
   * @param \\Drupal\\Component\\Uuid\\UuidInterface $uuid_generator
   *   UUID generator interface.
   * @param \\Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface $selection_storage
   *   The selection storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91d52b63a473035755845292537b340a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cdb94cb1f0f6e2d4570cfcb294ec839' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67754c38da1cfae6b71a66e576f30b21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'getConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e270e041d4e1d7b0fbeb5fd46e263f11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'setConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f68f803cacd7c6f886f6b5a48aa75977' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d37aa354031f2f6353de29f72540c00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03ab4f2149446436dcc44558abe186b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'getUuid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '483e9760ff73bb4334ba7a4ebcdefde8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'setUuid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f978ff3e7a3e04e7f2c5fbd971990164' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'displayEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40105c9dc5d3afc07d37ed4f18dbc086' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayBase',
         'functionName' => 'selectionCompleted',
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