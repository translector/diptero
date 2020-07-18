<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Entity/EntityBrowser.php-1588013888',
   'data' => 
  array (
    '0ea8cbe48966c49ef99572dcf3cc6093' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an entity browser configuration entity.
 *
 * @ConfigEntityType(
 *   id = "entity_browser",
 *   label = @Translation("Entity browser"),
 *   handlers = {
 *     "form" = {
 *       "entity_browser" = "Drupal\\entity_browser\\Form\\EntityBrowserForm",
 *       "default" = "Drupal\\entity_browser\\Form\\EntityBrowserEditForm",
 *       "edit" = "Drupal\\entity_browser\\Form\\EntityBrowserEditForm",
 *       "delete" = "Drupal\\entity_browser\\Form\\EntityBrowserDeleteForm",
 *       "edit_widgets" = "Drupal\\entity_browser\\Form\\WidgetsConfig",
 *     },
 *     "access" = "Drupal\\Core\\Entity\\EntityAccessControlHandler",
 *     "list_builder" = "Drupal\\entity_browser\\Controllers\\EntityBrowserListBuilder",
 *   },
 *   links = {
 *     "canonical" = "/admin/config/content/entity_browser/{entity_browser}",
 *     "collection" = "/admin/config/content/entity_browser",
 *     "edit-form" = "/admin/config/content/entity_browser/{entity_browser}/edit",
 *     "edit-widgets" = "/admin/config/content/entity_browser/{entity_browser}/edit_widgets",
 *     "delete-form" = "/admin/config/content/entity_browser/{entity_browser}/delete",
 *   },
 *   admin_permission = "administer entity browsers",
 *   config_prefix = "browser",
 *   entity_keys = {
 *     "id" = "name",
 *     "label" = "label"
 *   },
 *   config_export = {
 *     "name",
 *     "label",
 *     "display",
 *     "display_configuration",
 *     "selection_display",
 *     "selection_display_configuration",
 *     "widget_selector",
 *     "widget_selector_configuration",
 *     "widgets",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28100657360b2cbfed6cc030c326765f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the entity browser.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b58397d491a885629e62ed5e1b94f69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity browser label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '224c3f39adf32a15047b1529c7eb7d29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The display plugin id.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bba7f612f90178a14de55aba70167b85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The display plugin configuration.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89177b31fcc901820d9ca6ae365894a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Display lazy plugin collection.
   *
   * @var \\Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ae28325bea39f146a029bbd580c43b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The array of widgets for this entity browser.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c00f27f50249494148ca22c407b3ad3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the collection of widgets that are used by this entity browser.
   *
   * @var \\Drupal\\entity_browser\\WidgetsCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abe9d32ac256bfb8dcdaf3b023157f4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The selection display plugin ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '045cb3c3e9d1ad259dc8b590869e6b13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The selection display plugin configuration.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '831223bba77359df4b6f61f402e7a33b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selection display plugin collection.
   *
   * @var \\Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eff5daaaaabe928b1563625ca0a95342' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The widget selector plugin ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1be5981b501c0156530d13e2a45e54c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The widget selector plugin configuration.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65e5e90feffd9c9e83861c4234df0b8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Widget selector plugin collection.
   *
   * @var \\Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd40a4716086a8c7c258ab5cf18890ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Additional widget parameters.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8943997575c6bbfacd8afcd32a282d0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the form class.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb37b3cbd9e30f583ebd5451347651f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'id',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b77e400696e462a0ad6b86a29705097' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6df6082fe6b5ca454f6202ddecc1e0f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'setName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf29069f4eb0e9dd27a88f85708706d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getDisplay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09e263b45f05241c29b76eb5c52d2dbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'setLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fad7a0c9187305c15f9ae5c24cc86668' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'setDisplay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7effe2f9bf6ac989f60473e3c8528221' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'setWidgetSelector',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85c726266bac1dc9f524131b6e57b3a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'setSelectionDisplay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fc65407096e1c109353209b7a0c2853' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns display plugin collection.
   *
   * @return \\Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection
   *   The tag plugin collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'displayPluginCollection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c131be810adfde7b7f96a2f5295c554a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the plugin collections used by this entity.
   *
   * @return \\Drupal\\Component\\Plugin\\LazyPluginCollection[]
   *   An array of plugin collections, keyed by the property name they use to
   *   store their configuration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getPluginCollections',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bce366f5a5e748ee16e618bdbda59bdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getWidget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd0134eef32cc1fc9be0ef897acc2a44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getWidgets',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecbba8d7799fcc2e9e994cd93ab9ec95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'addWidget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39f742123cec4910094500f61fea877b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'deleteWidget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30f28695029f2f3c0c203304880d5702' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getFirstWidget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9884d564db990ad838ecef2d1bd052ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'addAdditionalWidgetParameters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad3dba0e356a80d37e3a4350d88f0237' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getAdditionalWidgetParameters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d30f626725fa4fc9d721ed57c7d3301' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns selection display plugin collection.
   *
   * @return \\Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection
   *   The tag plugin collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'selectionDisplayPluginCollection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b7a4befc74099cd156c0faf800c7f49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getSelectionDisplay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '145756bbc6d33d17e8b63926b728e23e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns widget selector plugin collection.
   *
   * @return \\Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection
   *   The tag plugin collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'widgetSelectorPluginCollection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51968ebd1bd2906d79274d53f0c03b0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getWidgetSelector',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31e107a1a132aa2a9f7c93bbc712de50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'route',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bb69b548aa8bd3c92b7ade4fecd7a7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c87998a0165001388c08b68918001eeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sleep method.
   *
   * Prevents plugin collections from being serialized and correctly serializes
   * selected entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => '__sleep',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'deddd562c11d5280516210564a8849d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45260383c4df2f36c6b9013c4ebbe04c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ab3fb8da9104622ea8b9ea80f19c582' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'getFormObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8eca1ca5e729b3df47b35dd660f7e646' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'entitybrowserinterface' => 'Drupal\\entity_browser\\EntityBrowserInterface',
          'widgetinterface' => 'Drupal\\entity_browser\\WidgetInterface',
          'displayrouterinterface' => 'Drupal\\entity_browser\\DisplayRouterInterface',
          'widgetscollection' => 'Drupal\\entity_browser\\WidgetsCollection',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
         'functionName' => 'urlRouteParameters',
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