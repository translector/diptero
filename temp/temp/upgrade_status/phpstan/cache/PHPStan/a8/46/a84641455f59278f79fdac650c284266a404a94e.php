<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/SelectionDisplayBase.php-1588013888,/var/www/html/web/modules/contrib/entity_browser/src/PluginConfigurationFormTrait.php-1588013888',
   'data' => 
  array (
    '87c9c04ff559a349d9ac9bde66d23410' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base implementation for selection display plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4515ff478fb7d6c1c3a6262d0cabcd75' => 
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
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6aaf55a8bc8f8abfa37e387c8f5ef06e' => 
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
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f29811c910429b22ab8d2e5834d46aa' => 
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
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8099c48ded3b8058124b3e573932acd8' => 
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
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '681e0a80223a03b42a5501336fe19de8' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b15feedeaa5168d3a60d95ede2429de5' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3498ed6c9f2ab67e34ab60e093766606' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Entity manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c66a760940c2c56a5dee6f21c65d9d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs widget plugin.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   Event dispatcher service.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity manager type service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34ec27813814ff047e4e683d6ff7f384' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e050636a14e9aa0812828fd30aa4a25' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df6460297e5f735217a086fc8a8c4483' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'getConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d7d253cf8a524c0e4cc90a043914e9d' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'setConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e76229eabc38061d23ed741c0c6b4471' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5890b6951370c2c91c0c6bb985a622c' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2dcd5ebc5bc923500c645a863f351702' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd65198894ecc5d896d77fce2ca07b985' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'submit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '734c249b58b7c5195196cc3e971e03ff' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'checkPreselectionSupport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfc7865c627131ffd8a57e9af94602fb' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'supportsPreselection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e5a0f4af318f3174a1116fdeaad7854' => 
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
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'supportsJsCommands',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6c1fdfe62520c7e5a7668718f91a3f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Marks selection as done - sets value in form state and dispatches event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configexception' => 'Drupal\\Core\\Config\\ConfigException',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'selectiondoneevent' => 'Drupal\\entity_browser\\Events\\SelectionDoneEvent',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayBase',
         'functionName' => 'selectionDone',
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