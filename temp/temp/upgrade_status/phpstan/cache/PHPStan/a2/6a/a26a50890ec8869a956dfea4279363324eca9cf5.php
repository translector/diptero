<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/modules/entity_form/src/Plugin/EntityBrowser/Widget/EntityForm.php-1588013888',
   'data' => 
  array (
    '0d560bca7febc69b7d919ce251f0435b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides entity form widget.
 *
 * @EntityBrowserWidget(
 *   id = "entity_form",
 *   label = @Translation("Entity form"),
 *   description = @Translation("Provides entity form widget."),
 *   auto_select = FALSE
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4144663a737c83e342d3b05465436198' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type bundle info service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a28cd4a0ab0ac38ed9ac86df6ad2e407' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity display repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7f360b8e048813e38918fc1b28f007d' => 
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
   *   The entity type manager service.
   * @param \\Drupal\\entity_browser\\WidgetValidationManager $validation_manager
   *   The Widget Validation Manager service.
   * @param \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface $entity_type_bundle_info
   *   The entity type bundle info service.
   * @param \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface $entity_display_repository
   *   The entity display repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd9edf3fbf144f8e37d0bfce8bf2017c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'babdbaa17e901619c39630b453cada08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f50d0541604e2d238243e21d6913046c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'getForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec155227cbe9c0270939653482297687' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'prepareEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71340832cf32304571307a8e7b5aaec8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'submit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a511a4743c752ccc5f258328eb0477b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c69932f0ab4f6bc8d3cb5769d95e4a3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * AJAX callback for bundle dropdown update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'updateBundle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f38548d434591503cd6ee58172ec4ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * AJAX callback for the Form Mode dropdown update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'updateFormMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '238dc91a268998333040f22ecd35022f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * AJAX callback to update the two form elements: bundle and form_mode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'updateFormElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a59501cf07496b4e7a24eb3f16f074e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed78ffbc7f533f5d4c49b1004498556e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'widgetbase' => 'Drupal\\entity_browser\\WidgetBase',
          'widgetvalidationmanager' => 'Drupal\\entity_browser\\WidgetValidationManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
        ),
         'className' => 'Drupal\\entity_browser_entity_form\\Plugin\\EntityBrowser\\Widget\\EntityForm',
         'functionName' => 'access',
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