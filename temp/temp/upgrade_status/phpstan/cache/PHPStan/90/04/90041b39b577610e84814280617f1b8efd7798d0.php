<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Plugin/EntityBrowser/Display/IFrame.php-1588013888',
   'data' => 
  array (
    'db62bf5ae331b815a046b796e6d0e67f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Presents entity browser in an iFrame.
 *
 * @EntityBrowserDisplay(
 *   id = "iframe",
 *   label = @Translation("iFrame"),
 *   description = @Translation("Displays the entity browser in an iFrame container embedded into the main page."),
 *   uses_route = TRUE
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc10a8136f8c32a53ccf5e82900e0ae1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Current route match service.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30bb5dfcb3637b2b20cb8b4fa7222ef8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Current path.
   *
   * @var \\Drupal\\Core\\Path\\CurrentPathStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8be2977bcf38e0f31e0a96957050c9f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Current request.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\Request
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c252dfed49cb2c8f7d1219f3110406ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer service.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8235057a7e6a4b3607df6ddba5e2aace' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The bare HTML page renderer.
   *
   * @var \\Drupal\\Core\\Render\\BareHtmlPageRendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aac479ea56ed14f5c076be49c2b767d0' => 
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
   * @param \\Drupal\\Component\\Uuid\\UuidInterface $uuid
   *   UUID generator interface.
   * @param \\Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface $selection_storage
   *   The selection storage.
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $current_route_match
   *   The currently active route match object.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   Current request.
   * @param \\Drupal\\Core\\Path\\CurrentPathStack $current_path
   *   The current path.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer service.
   * @param \\Drupal\\Core\\Render\\BareHtmlPageRendererInterface $bare_html_page_renderer
   *   The bare HTML page renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a41d7dfac348188da366cf4164b9e17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74ab030da655911218b79fb3064bb3a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ff0216ed8c5ca24f277dd389be75b4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => 'displayEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82dd03cdc232290a40860146e8226bdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\entity_browser\\Events\\RegisterJSCallbacks $event */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => 'displayEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6bf5163cf8c69a8ba0c418ed8bdab281' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * KernelEvents::RESPONSE listener.
   *
   * Intercepts default response and injects response that will trigger JS to
   * propagate selected entities upstream.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent $event
   *   Response event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => 'propagateSelection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7df459c175c926cb60ea4d9f4d0812b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => 'path',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1d0c2958b06568073cabd7f77ee6ebf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc4107f4c6f9ebb68ac977cc4531d778' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'keyvaluestoreexpirableinterface' => 'Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'barehtmlpagerendererinterface' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\IFrame',
         'functionName' => 'validateConfigurationForm',
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