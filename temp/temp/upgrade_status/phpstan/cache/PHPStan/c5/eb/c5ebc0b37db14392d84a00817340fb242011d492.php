<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/SelectionDisplayInterface.php-1588013888',
   'data' => 
  array (
    '3f581af27285f5e71bc64770d831baec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for entity browser selection displays.
 *
 * This plugin type is responsible for displaying the currently selected
 * entities in an entity browser and delivering them upstream. The selections
 * are displayed in a form which delivers the selected entities on submit.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '312f5298534c9e0ecfe7a8b7ef672fc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the selection display label.
   *
   * @return string
   *   The selection display label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayInterface',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6b48d3519ac11c0ff2072336b59a5f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns selection display form.
   *
   * @param array $original_form
   *   Entire form built up to this point. Form elements for selection display
   *   should generally not be added directly to it but returned from function
   *   as a separated unit.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state object.
   *
   * @return array
   *   Form structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayInterface',
         'functionName' => 'getForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20d326208e5b1df48afc3714c4755feb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates form.
   *
   * @param array $form
   *   Form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayInterface',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29ea8a5882b6751b123adeb671d714c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submits form.
   *
   * @param array $form
   *   Form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayInterface',
         'functionName' => 'submit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd36c078ed729270065fb0755bfdda743' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check does selection display support preselection.
   *
   * If preselection is not allowed by entity browser selection display, then
   * exception will be thrown.
   *
   * @deprecated Use ::supportsPreselection instead.
   *
   * @throws \\Drupal\\Core\\Config\\ConfigException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayInterface',
         'functionName' => 'checkPreselectionSupport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f4f75c702e7cc317ec61315cb631e8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if the plugin supports preselection.
   *
   * @returns bool
   *   Returns TRUE if preselection is supported.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayInterface',
         'functionName' => 'supportsPreselection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '939970b972768e57727b63cc4f80686d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns true if selection display supports selection over javascript.
   *
   * @return bool
   *   True if javascript add/remove events are supported.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\entity_browser\\SelectionDisplayInterface',
         'functionName' => 'supportsJsCommands',
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