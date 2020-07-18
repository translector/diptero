<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/FieldWidgetDisplayInterface.php-1588013888',
   'data' => 
  array (
    '0f960184ebbdfe1b8c6330c89f1d7aa1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for entity browser field widget display plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\FieldWidgetDisplayInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40f23dd6c126abcda5946a7ca523bbc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds and gets render array for the entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   Entity to be displayed.
   *
   * @return array
   *   Render array that is to be used to display the entity in field widget.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\FieldWidgetDisplayInterface',
         'functionName' => 'view',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7a16f3289b2cb2e1c5ab17deaa8c5fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a form to configure settings for the plugin.
   *
   * @param array $form
   *   The form where the settings form is being included in.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form definition for the widget settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\FieldWidgetDisplayInterface',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f56ae942ee5a4cebd66a30f30b4ac014' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns if the FieldWidgetDisplay can be used for the provided field.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type that should be checked.
   *
   * @return bool
   *   TRUE if the FieldWidgetDisplay can be used, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\entity_browser\\FieldWidgetDisplayInterface',
         'functionName' => 'isApplicable',
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