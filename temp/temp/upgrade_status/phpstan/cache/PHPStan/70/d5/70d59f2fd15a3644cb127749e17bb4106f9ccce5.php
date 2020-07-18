<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/workflows/src/Entity/Workflow.php-1594234425',
   'data' => 
  array (
    '0abc9be8ba07692a052d3b3d8ff7339d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the workflow entity.
 *
 * @ConfigEntityType(
 *   id = "workflow",
 *   label = @Translation("Workflow"),
 *   label_collection = @Translation("Workflows"),
 *   label_singular = @Translation("workflow"),
 *   label_plural = @Translation("workflows"),
 *   label_count = @PluralTranslation(
 *     singular = "@count workflow",
 *     plural = "@count workflows",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\workflows\\WorkflowAccessControlHandler",
 *     "list_builder" = "Drupal\\workflows\\WorkflowListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\workflows\\Form\\WorkflowAddForm",
 *       "edit" = "Drupal\\workflows\\Form\\WorkflowEditForm",
 *       "delete" = "Drupal\\workflows\\Form\\WorkflowDeleteForm",
 *       "add-state" = "Drupal\\workflows\\Form\\WorkflowStateAddForm",
 *       "edit-state" = "Drupal\\workflows\\Form\\WorkflowStateEditForm",
 *       "delete-state" = "Drupal\\workflows\\Form\\WorkflowStateDeleteForm",
 *       "add-transition" = "Drupal\\workflows\\Form\\WorkflowTransitionAddForm",
 *       "edit-transition" = "Drupal\\workflows\\Form\\WorkflowTransitionEditForm",
 *       "delete-transition" = "Drupal\\workflows\\Form\\WorkflowTransitionDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\\Core\\Entity\\Routing\\AdminHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "workflow",
 *   admin_permission = "administer workflows",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "add-form" = "/admin/config/workflow/workflows/add",
 *     "edit-form" = "/admin/config/workflow/workflows/manage/{workflow}",
 *     "delete-form" = "/admin/config/workflow/workflows/manage/{workflow}/delete",
 *     "add-state-form" = "/admin/config/workflow/workflows/manage/{workflow}/add_state",
 *     "add-transition-form" = "/admin/config/workflow/workflows/manage/{workflow}/add_transition",
 *     "collection" = "/admin/config/workflow/workflows",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "type",
 *     "type_settings",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dde9ff302021579f2a202a3ff13aaa29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The Workflow ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37c3c2b941c5bbbd92de5017570e23fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The workflow label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ba8cd2b831d074819f3c26474d4f7a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The workflow type plugin ID.
   *
   * @see \\Drupal\\workflows\\WorkflowTypeManager
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '366aca75c2556ddd4a72646a7f3ac616' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration for the workflow type plugin.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce1c46b2a1dbd885046822396068fb13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The workflow type plugin collection.
   *
   * @var \\Drupal\\Component\\Plugin\\LazyPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a52eb0f2ac75ad0b3c71c61a1d6c4715' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17884759f71699f10db5461310f24ccf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => 'getTypePlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd9819cfe8032438274a150883ef4690' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => 'getPluginCollections',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7442eb35b3a631d80c82b584389ec34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Encapsulates the creation of the workflow\'s plugin collection.
   *
   * @return \\Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection
   *   The workflow\'s plugin collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => 'getPluginCollection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '742fc20e5a57abe15084b128aad41ff2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads all workflows of the provided type.
   *
   * @param string $type
   *   The workflow type to load all workflows for.
   *
   * @return static[]
   *   An array of workflow objects of the provided workflow type, indexed by
   *   their IDs.
   *
   *  @see \\Drupal\\workflows\\Annotation\\WorkflowType
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => 'loadMultipleByType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92316441f46a3248ccccfbb60080b2e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => 'status',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0e6299559471a9ea34a2f993be23cdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\workflows\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'requiredstatemissingexception' => 'Drupal\\workflows\\Exception\\RequiredStateMissingException',
          'workflowinterface' => 'Drupal\\workflows\\WorkflowInterface',
        ),
         'className' => 'Drupal\\workflows\\Entity\\Workflow',
         'functionName' => 'onDependencyRemoval',
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