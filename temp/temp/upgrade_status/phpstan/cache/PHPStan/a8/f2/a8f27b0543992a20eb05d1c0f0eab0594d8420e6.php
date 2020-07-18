<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/ckeditor/src/CKEditorPluginBase.php-1594234425',
   'data' => 
  array (
    'c9e97734ab48d1142407c89a3c75cea2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a base CKEditor plugin implementation.
 *
 * No other CKEditor plugins can be internal, unless a different CKEditor build
 * than the one provided by Drupal core is used. Most CKEditor plugins don\'t
 * need to provide additional settings forms.
 *
 * This base class assumes that your plugin has buttons that you want to be
 * enabled through the toolbar builder UI. It is still possible to also
 * implement the CKEditorPluginContextualInterface (for contextual enabling) and
 * CKEditorPluginConfigurableInterface interfaces (for configuring plugin
 * settings).
 *
 * NOTE: the Drupal plugin ID should correspond to the CKEditor plugin name.
 *
 * @see \\Drupal\\ckeditor\\CKEditorPluginInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginButtonsInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginContextualInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginConfigurableInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginManager
 * @see \\Drupal\\ckeditor\\Annotation\\CKEditorPlugin
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e07e169bf28ca9439da1bd92e87be543' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginBase',
         'functionName' => 'isInternal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf6ce888106e9fabe04e6067c2d08263' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginBase',
         'functionName' => 'getDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8915696d64a24295fedc988593599c36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginBase',
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