<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/DisplayInterface.php-1588013888',
   'data' => 
  array (
    '637862d4869c8e52cc99185420316ad3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for entity browser displays.
 *
 * Display plugins determine how a complete entity browser is delivered to the
 * user. They wrap around and encapsulate the entity browser. Examples include:
 *
 * - Displaying the entity browser on its own standalone page.
 * - Displaying the entity browser in an iframe.
 * - Displaying the entity browser in a modal dialog box.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3ff64e92fe227460154dbf6c23bd9b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the display label.
   *
   * @return string
   *   The display label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayInterface',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59cf0ae048e3adef782f80f189ed0a97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Displays entity browser.
   *
   * This is the "entry point" for every non-entity browser code to interact
   * with it. It will take care about displaying entity browser in one way or
   * another.
   *
   * @param array $element
   *   A form element array containing basic properties for the entity browser
   *   element:
   *   - #eb_parents: The \'parents\' space for the field in the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state object.
   * @param array $complete_form
   *   The form structure where entity browser is being attached to.
   * @param array $persistent_data
   *   (optional) Extra information to send to the Entity Browser Widget. This
   *   is needed as the widget may display after a new bootstrap, which would
   *   discard the current form state. Arbitrary values can be added and used
   *   by widgets, if needed.
   *   The expected array keys are "selected_entities" and "validators".
   *     - Drupal\\Core\\Entity\\EntityInterface[] selected_entities
   *        An array of currently selected entities.
   *     - array validators
   *        An associative array mapping EntityBrowserWidgetValidation IDs to
   *        an array of options to pass to the plugin\'s validate method.
   *
   * @return array
   *   A render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayInterface',
         'functionName' => 'displayEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd11098c11b25766ff88136e4ba8a8012' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates completed selection.
   *
   * Entity browser will call this function when selection is done. Display
   * plugin is responsible for fetching selected entities and sending them to
   * the initiating code.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   Array of selected entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayInterface',
         'functionName' => 'selectionCompleted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56336274cfc62071fbd8f17bdbe7f005' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the uuid for this display.
   *
   * @return string
   *   The uuid string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayInterface',
         'functionName' => 'getUuid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae4ddeee3180c8f42b7814c80be40c89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the uuid for this display.
   *
   * @param string $uuid
   *   The uuid string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\DisplayInterface',
         'functionName' => 'setUuid',
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