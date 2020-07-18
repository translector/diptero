<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/ckeditor/src/CKEditorPluginConfigurableInterface.php-1594234425',
   'data' => 
  array (
    '3a064cf7240a5439f8a28ced4745111c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for configurable CKEditor plugins.
 *
 * This allows a CKEditor plugin to define a settings form. These settings can
 * then be automatically passed on to the corresponding CKEditor instance via
 * CKEditorPluginInterface::getConfig().
 *
 * @see \\Drupal\\ckeditor\\CKEditorPluginInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginButtonsInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginContextualInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginCssInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginBase
 * @see \\Drupal\\ckeditor\\CKEditorPluginManager
 * @see \\Drupal\\ckeditor\\Annotation\\CKEditorPlugin
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginConfigurableInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '912be084f124e5aa24c88ba2fa1caa45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a settings form to configure this CKEditor plugin.
   *
   * If the plugin\'s behavior depends on extensive options and/or external data,
   * then the implementing module can choose to provide a separate, global
   * configuration page rather than per-text-editor settings. In that case, this
   * form should provide a link to the separate settings page.
   *
   * @param array $form
   *   An empty form array to be populated with a configuration form, if any.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The state of the entire filter administration form.
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   *
   * @return array
   *   A render array for the settings form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginConfigurableInterface',
         'functionName' => 'settingsForm',
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