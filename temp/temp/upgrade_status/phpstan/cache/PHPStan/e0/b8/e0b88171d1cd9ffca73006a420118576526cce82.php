<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Plugin/EntityBrowser/SelectionDisplay/MultiStepDisplay.php-1588013888',
   'data' => 
  array (
    'e364e9e270925c1bcf1d841242490f28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Show current selection and delivers selected entities.
 *
 * @EntityBrowserSelectionDisplay(
 *   id = "multi_step_display",
 *   label = @Translation("Multi step selection display"),
 *   description = @Translation("Shows the current selection display, allowing to mix elements selected through different widgets in several steps."),
 *   acceptPreselection = TRUE,
 *   js_commands = TRUE
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a1436cdb978fe61cfd2ced516bf6c6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Field widget display plugin manager.
   *
   * @var \\Drupal\\entity_browser\\FieldWidgetDisplayManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb25cde606b126f55315ce37d8b73406' => 
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
   * @param \\Drupal\\entity_browser\\FieldWidgetDisplayManager $field_display_manager
   *   Field widget display plugin manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '450e1d531799056e0724d4e7fac3adf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '626852005e6d97aff5e3088274fffbf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90aaca3e3888d72f08619e6d5950d78d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'getForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4336c8fcbe70d74b74ebce1b00634a3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Execute command generated by front-end.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'executeJsCommand',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b97795bf3e17d68149649ccee539e5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handler to generate Ajax response, after command is executed.
   *
   * @param array $form
   *   Form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state object.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   Return Ajax response with commands.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'handleAjaxCommand',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e4f5816845d7c5e78b62c83f5e09d62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Render\\RendererInterface $renderer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'handleAjaxCommand',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f75837aa3fd5ffaa3290602cf4f8d500' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Make HTML with single tag suitable for Ajax response.
   *
   * Comments will be removed and also whitespace characters, because Ajax JS
   * "insert" command handling checks number of base elements in response and
   * wraps it in a "div" tag if there are more then one base element.
   *
   * @param string $html
   *   HTML content.
   *
   * @return string
   *   Returns cleaner HTML content, suitable for Ajax responses.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'trimSingleHtmlTag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fb53ecd5b159362544827cbbe4fbe11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit callback for remove buttons.
   *
   * @param array $form
   *   Form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'removeItemSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '786d9568b4d72da78439e559f56deeda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'submit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b7adcd8e338a36b0259ca0d14961bfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves new ordering of entities based on weight.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'saveNewOrder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e4bf8a2beafb88c6e4de4f231321f5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b2c5f86eb19e2e4c8ebf33160fedc39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '196ee2fb915f4f609d1c37327799567e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback that updates multi-step plugin configuration form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay',
         'uses' => 
        array (
          'aftercommand' => 'Drupal\\Core\\Ajax\\AfterCommand',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'invokecommand' => 'Drupal\\Core\\Ajax\\InvokeCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'selectiondisplaybase' => 'Drupal\\entity_browser\\SelectionDisplayBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\SelectionDisplay\\MultiStepDisplay',
         'functionName' => 'updateSettingsAjax',
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