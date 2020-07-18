<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Plugin/EntityBrowser/Widget/Upload.php-1588013888',
   'data' => 
  array (
    'a39930eb713a97e9481cd4e4f9835652' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds an upload field browser\'s widget.
 *
 * @EntityBrowserWidget(
 *   id = "upload",
 *   label = @Translation("Upload"),
 *   description = @Translation("Adds an upload field browser\'s widget."),
 *   auto_select = FALSE
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd38b95ca76ec7a1d4065a9585c4cfd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler service.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5faad7a4e07767773c6dfe5264815fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The token service.
   *
   * @var \\Drupal\\Core\\Utility\\Token
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f557f849c2cf595bc2f915c3cf2702f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Upload constructor.
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
   *   The entity type manager service.
   * @param \\Drupal\\entity_browser\\WidgetValidationManager $validation_manager
   *   The Widget Validation Manager service.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Utility\\Token $token
   *   The token service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c98ceec0e52be077d38b75f7790052b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3445e0b900a37de6b126feb8409af7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52d0070b6379105d364701455a3e253d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => 'getForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b030cdef4de823a35632393f146b215' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => 'prepareEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c95803d3d0d37d38981f5b0ac4bb7926' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => 'submit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd79152b31d01b8baa82b7c16421b4da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clear values from upload form element.
   *
   * @param array $element
   *   Upload form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => 'clearFormValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a4fb4bc945d786edd66a4fdd4e820ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca316927508be5260ef33dab4f6f9bdb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates a list of file extensions.
   *
   * @See \\Drupal\\file\\Plugin\\Field\\FieldType\\FileItem::validateExtensions
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Widget\\Upload',
         'functionName' => 'validateExtensions',
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