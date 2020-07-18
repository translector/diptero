<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/ckeditor/src/CKEditorPluginManager.php-1594234425',
   'data' => 
  array (
    'ad6cb2c7013c1260fd5e520ad53ed11f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a CKEditor Plugin plugin manager.
 *
 * @see \\Drupal\\ckeditor\\CKEditorPluginInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginButtonsInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginContextualInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginConfigurableInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginCssInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginBase
 * @see \\Drupal\\ckeditor\\Annotation\\CKEditorPlugin
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd55abff9b88213b943571927efd9e458' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a CKEditorPluginManager object.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a58dd10317fc63d14cf85c689c1b61a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves enabled plugins\' files, keyed by plugin ID.
   *
   * For CKEditor plugins that implement:
   *  - CKEditorPluginButtonsInterface, not CKEditorPluginContextualInterface,
   *     a plugin is enabled if at least one of its buttons is in the toolbar;
   *  - CKEditorPluginContextualInterface, not CKEditorPluginButtonsInterface,
   *     a plugin is enabled if its isEnabled() method returns TRUE
   *  - both of these interfaces, a plugin is enabled if either is the case.
   *
   * Internal plugins (those that are part of the bundled build of CKEditor) are
   * excluded by default, since they are loaded implicitly. If you need to know
   * even implicitly loaded (i.e. internal) plugins, then set the optional
   * second parameter.
   *
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   * @param bool $include_internal_plugins
   *   Defaults to FALSE. When set to TRUE, plugins whose isInternal() method
   *   returns TRUE will also be included.
   *
   * @return array
   *   A list of the enabled CKEditor plugins, with the plugin IDs as keys and
   *   the Drupal root-relative plugin files as values.
   *   For internal plugins, the value is NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginManager',
         'functionName' => 'getEnabledPluginFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72b9bb0fd2bd92f6e7905ea4f423db16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the enabled toolbar buttons in the given text editor instance.
   *
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   *
   * @return string[]
   *   A list of the toolbar buttons enabled in the given text editor instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginManager',
         'functionName' => 'getEnabledButtons',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5239e37986026ac8a2757122cf78ba4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves all available CKEditor buttons, keyed by plugin ID.
   *
   * @return array
   *   All available CKEditor buttons, with plugin IDs as keys and button
   *   metadata (as implemented by getButtons()) as values.
   *
   * @see \\Drupal\\ckeditor\\CKEditorPluginButtonsInterface::getButtons()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginManager',
         'functionName' => 'getButtons',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34bce3562f5708a6eb6f2eade44c8f8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Injects the CKEditor plugins settings forms as a vertical tabs subform.
   *
   * @param array &$form
   *   A reference to an associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginManager',
         'functionName' => 'injectPluginSettingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9e0cb99e056bc8c7974ae7af8f1c865' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves enabled plugins\' iframe instance CSS files, keyed by plugin ID.
   *
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   *
   * @return string[]
   *   Enabled plugins CKEditor CSS files, with plugin IDs as keys and CSS file
   *   paths relative to the Drupal root (as implemented by getCssFiles()) as
   *   values.
   *
   * @see \\Drupal\\ckeditor\\CKEditorPluginCssInterface::getCssFiles()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginManager',
         'functionName' => 'getCssFiles',
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