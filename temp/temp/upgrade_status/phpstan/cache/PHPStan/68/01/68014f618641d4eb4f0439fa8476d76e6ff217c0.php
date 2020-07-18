<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/WidgetSelectorInterface.php-1588013888',
   'data' => 
  array (
    'a6fe068be65a45dea5db428a79f03274' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for entity browser widget selectors.
 *
 * This plugin type is responsible for providing ways for users to select the
 * current widget used for selecting entities in an entity browser. For example,
 * if the user wants to tab between widgets, the tab set will be created and
 * managed by the widget selector.
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
         'className' => 'Drupal\\entity_browser\\WidgetSelectorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '332789737777dee9e6c8b483f28d4b4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the widget selector label.
   *
   * @return string
   *   The widget label.
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
         'className' => 'Drupal\\entity_browser\\WidgetSelectorInterface',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a48bad9489ed63142d7c60147f5709df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns widget selector form.
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
         'className' => 'Drupal\\entity_browser\\WidgetSelectorInterface',
         'functionName' => 'getForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4890f4507e3a1188ed544662d7b693c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the default widget.
   *
   * @param string $widget
   *   Id of widget to set as the current widget.
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
         'className' => 'Drupal\\entity_browser\\WidgetSelectorInterface',
         'functionName' => 'setDefaultWidget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68fc1e389fc814eeb601dcdd16b3470a' => 
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
         'className' => 'Drupal\\entity_browser\\WidgetSelectorInterface',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f693d67061034f80e032dff33e259ede' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submits form.
   *
   * @param array $form
   *   Form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state object.
   *
   * @return string
   *   The selected widget ID.
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
         'className' => 'Drupal\\entity_browser\\WidgetSelectorInterface',
         'functionName' => 'submit',
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