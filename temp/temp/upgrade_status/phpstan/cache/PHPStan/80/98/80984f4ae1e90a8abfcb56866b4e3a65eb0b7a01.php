<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Plugin/Field/FieldWidget/EntityReferenceBrowserWidget.php-1588013888',
   'data' => 
  array (
    '5c36b26885aad4d0266afdcca38acae2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'entity_reference\' widget for entity browser.
 *
 * @FieldWidget(
 *   id = "entity_browser_entity_reference",
 *   label = @Translation("Entity browser"),
 *   description = @Translation("Uses entity browser to select entities."),
 *   multiple_values = TRUE,
 *   field_types = {
 *     "entity_reference"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47b88531fe0edbdf4a944bd6b48781e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Entity type manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3653fe98775bdcdab0ef0957fca4882' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Field widget display plugin manager.
   *
   * @var \\Drupal\\entity_browser\\FieldWidgetDisplayManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f1c1b62298d0d8ac75c8140c0cb9d85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The depth of the delete button.
   *
   * This property exists so it can be changed if subclasses.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4928f0ee4fde78a27d60ef9084e9c05b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler interface.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa76750ca11d19fe8ad04e1e232d5168' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '244b576d5a769251908cc05f0203b04d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs widget plugin.
   *
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the widget is associated.
   * @param array $settings
   *   The widget settings.
   * @param array $third_party_settings
   *   Any third party settings.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   Entity type manager service.
   * @param \\Drupal\\entity_browser\\FieldWidgetDisplayManager $field_display_manager
   *   Field widget display plugin manager.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler service.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c39f88495881b9aaf81f59958dc680e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b4444e4e72468906f7a93f94fdb23ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'defaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b63b9e38b5d53e89b09e6c40a540129' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c5602beba079e7307b80e43ee1aef15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\entity_browser\\EntityBrowserInterface $browser */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c50c4c20753eb00b7e9616e8251dfb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate the settings form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'validateSettingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '362a2aeb9b67137876adfa5bb00def46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\entity_browser\\Entity\\EntityBrowser $entity_browser */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'validateSettingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ae229c662254052ab49105276f71719' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback that updates field widget display settings fieldset.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'updateFieldWidgetDisplaySettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '269c116b16b741c489920abfa619d6c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f1fd1ea95d3e64ee0e598cb548c4a96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'flagErrors',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24865ede35c2712dcd7436f78b62f0db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Symfony\\Component\\Validator\\ConstraintViolation $violation */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'flagErrors',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ec0f93b2090f5bf77cb7b57462ea962' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a key used to store the previously loaded entity.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
   *   The field items.
   *
   * @return string
   *   A key for form state storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'getFormStateKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39eb0f44235d0a829d5e1dec48560c3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'formElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e019a426e2c8dee1f704d68810fa52f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render API callback: Processes the entity browser element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'processEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2c3b6999994e2443332935d8ab94635' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'massageFormValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b95db7f5b45fb2c9fdee5c824d6e8a36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * AJAX form callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'updateWidgetCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e38d2665c3d91be8ecd66a6d4325b540' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'errorElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73a75257a58ea9188f70c65c69c51fc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit callback for remove buttons.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'removeItemSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '400cb73fd6a19c631583eb7cc53dfb33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the render array for displaying the current results.
   *
   * @param string $details_id
   *   The ID for the details element.
   * @param string[] $field_parents
   *   Field parents.
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface[] $entities
   *   Array of referenced entities.
   *
   * @return array
   *   The render array for the current selection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'displayCurrentSelection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18e649658788aab961cccdbfa7629da5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a message informing the user how many more items they can choose.
   *
   * @param array|int $selected
   *   The current selections, or how many items are selected.
   *
   * @return string
   *   A message informing the user who many more items they can select.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'getCardinalityMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '177899c64829961ab918ef4a86f00fad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets data that should persist across Entity Browser renders.
   *
   * @return array
   *   Data that should persist after the Entity Browser is rendered.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'getPersistentData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e28be041c482797e249929134d7362a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets options that define where newly added entities are inserted.
   *
   * @return array
   *   Mode labels indexed by key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'selectionModeOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e5fefa61235adbcb963b14dc0b37c3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides base for settings summary shared by all EB widgets.
   *
   * @return array
   *   A short summary of the widget settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'summaryBase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc33d407b998cc91fbad0b42f12bcdab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the entities used for the form element.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
   *   The field item to extract the entities from.
   * @param array $element
   *   The form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface[]
   *   The list of entities for the form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'formElementEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '904197b35ab531ac132c8f34173a98ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc656c1f68e0a95c0d2f2f00a67b9d69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get selected elements from target_id element on form.
   *
   * @param array $element
   *   The form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface[]|false
   *   Return list of entities if they are available or false.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'url' => 'Drupal\\Core\\Url',
          'notnullconstraint' => 'Drupal\\Core\\Validation\\Plugin\\Validation\\Constraint\\NotNullConstraint',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\EntityReferenceBrowserWidget',
         'functionName' => 'getEntitiesByTargetId',
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