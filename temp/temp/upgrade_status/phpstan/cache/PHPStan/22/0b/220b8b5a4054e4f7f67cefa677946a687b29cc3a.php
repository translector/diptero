<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Plugin/Field/FieldWidget/FileBrowserWidget.php-1588013888',
   'data' => 
  array (
    'cbd26d497cac7811f68af50847bb3a53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Entity browser file widget.
 *
 * @FieldWidget(
 *   id = "entity_browser_file",
 *   label = @Translation("Entity browser"),
 *   provider = "entity_browser",
 *   multiple_values = TRUE,
 *   field_types = {
 *     "file",
 *     "image"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '730eedc2ad063a14ac9f17803b90faaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Due to the table structure, this widget has a different depth.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25dfc9b07fc8e701a2111d42009a947b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A list of currently edited items. Used to determine alt/title values.
   *
   * @var \\Drupal\\Core\\Field\\FieldItemListInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa6b6ddd2dd8d74c5662a8494effd3d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config factory service.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50d95f95b5d976e168e1f76111d304b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The display repository service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7415244978a0326ca752244516aa3199' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The mime type guesser service.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f910bb6152c57cb40aa56e12ab272af' => 
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
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The config factory.
   * @param \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface $display_repository
   *   The entity display repository service.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler service.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   * @param \\Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface $mime_type_guesser
   *   The mime type guesser service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b340b342e9114324da8e700e889f6a29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84dd8669d085d6bcb76e73563c865ce3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'defaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6529c2abc36807d3a7eedb336caa9fdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1541b28e8f2955c42fc610b9cc2a1401' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bbf6772d044bace597b9ea280401fe08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'formElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c6d8879109de30338fbcb6ad33be56d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'displayCurrentSelection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35e6f1f007eaf176235909c51a81e384' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileInterface[] $entities */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'displayCurrentSelection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fe9652f4d2726377e0d6719c01dc1b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'massageFormValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40b0c8b2eee2f9019f13d7aa5d34e479' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the upload validators for a file field.
   *
   * This is a combination of logic shared between the File and Image widgets.
   *
   * @param bool $upload
   *   Whether or not upload-specific validators should be returned.
   *
   * @return array
   *   An array suitable for passing to file_save_upload() or the file field
   *   element\'s \'#upload_validators\' property.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'getFileValidators',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03076f22dfa55ce32e036fe62f2069d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'url' => 'Drupal\\Core\\Url',
          'fieldwidgetdisplaymanager' => 'Drupal\\entity_browser\\FieldWidgetDisplayManager',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'mimetypeguesserinterface' => 'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\Field\\FieldWidget\\FileBrowserWidget',
         'functionName' => 'getPersistentData',
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