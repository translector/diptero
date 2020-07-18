<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/editor/src/Plugin/EditorPluginInterface.php-1594234425',
   'data' => 
  array (
    '339b11d3dcd8e9c24d2aea0082e76335' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for configurable text editors.
 *
 * Modules implementing this interface may want to extend the EditorBase class,
 * which provides default implementations of each method where appropriate.
 *
 * If the editor\'s behavior depends on extensive options and/or external data,
 * then the implementing module can choose to provide a separate, global
 * configuration page rather than per-text-format settings. In that case, this
 * form should provide a link to the separate settings page.
 *
 * @see \\Drupal\\editor\\Annotation\\Editor
 * @see \\Drupal\\editor\\Plugin\\EditorBase
 * @see \\Drupal\\editor\\Plugin\\EditorManager
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\editor\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\editor\\Plugin\\EditorPluginInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38100504c115702342a0f4e6de44cf11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default settings for this configurable text editor.
   *
   * @return array
   *   An array of settings as they would be stored by a configured text editor
   *   entity (\\Drupal\\editor\\Entity\\Editor).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\editor\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\editor\\Plugin\\EditorPluginInterface',
         'functionName' => 'getDefaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9588d9f2f05391fe554864008a179bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns JavaScript settings to be attached.
   *
   * Most text editors use JavaScript to provide a WYSIWYG or toolbar on the
   * client-side interface. This method can be used to convert internal settings
   * of the text editor into JavaScript variables that will be accessible when
   * the text editor is loaded.
   *
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   *
   * @return array
   *   An array of settings that will be added to the page for use by this text
   *   editor\'s JavaScript integration.
   *
   * @see \\Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface::processAttachments()
   * @see EditorManager::getAttachments()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\editor\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\editor\\Plugin\\EditorPluginInterface',
         'functionName' => 'getJSSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3660b8a1d18aaa32ee15c00d82e17c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns libraries to be attached.
   *
   * Because this is a method, plugins can dynamically choose to attach a
   * different library for different configurations, instead of being forced to
   * always use the same method.
   *
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   *
   * @return array
   *   An array of libraries that will be added to the page for use by this text
   *   editor.
   *
   * @see \\Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface::processAttachments()
   * @see EditorManager::getAttachments()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\editor\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\editor\\Plugin\\EditorPluginInterface',
         'functionName' => 'getLibraries',
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