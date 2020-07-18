<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/field_group/src/FieldGroupFormatterInterface.php-1591739040',
   'data' => 
  array (
    'd10a67baf36a72db4e6848a7ef1cbec0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface definition for fieldgroup formatter plugins.
 *
 * @ingroup field_group_formatter
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6b7cf999b11695add2aec287d37f4f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows the field group formatter to manipulate the field group array and attach the formatters elements.
   * The process method is called in the #process part of theme layer, and is currently used for forms.
   * The preRender method is called in the #pre_render part of the theme layer, and is currently used for entity displays.
   *
   * @param array $element
   *   The field group render array.
   * @param object $processed_object
   *   The object / entity beïng processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterInterface',
         'functionName' => 'process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5d5d38538fb4de4dd8b66455d28d806' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows the field group formatter to manipulate the field group array and attach the formatters rendering element.
   *
   * @param array $element
   *   The field group render array.
   * @param object $rendering_object
   *   The object / entity beïng rendered.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterInterface',
         'functionName' => 'preRender',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b11be1703e3862d3d9915185538051b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a form to configure settings for the formatter.
   *
   * Invoked in field_group_field_ui_display_form_alter to allow
   * administrators to configure the formatter. The field_group module takes care
   * of handling submitted form values.
   *
   * @return array
   *   The form elements for the formatter settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterInterface',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd0a3ce3783f821ef7646ff9f423ed81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a short summary for the current formatter settings.
   *
   * If an empty result is returned, a UI can still be provided to display
   * a settings form in case the formatter has configurable settings.
   *
   * @return array
   *   A short summary of the formatter settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterInterface',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72b34438afc1ffaca0d80c967f2db525' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines the default settings for this plugin.
   *
   * @param string $context
   *   The context to get the default settings for.
   *
   * @return array
   *   A list of default settings, keyed by the setting name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterInterface',
         'functionName' => 'defaultContextSettings',
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