<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/WidgetValidationInterface.php-1588013888',
   'data' => 
  array (
    'a63edded4e913e74bcab811cf6945f63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for entity browser widget validations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\entity_browser\\WidgetValidationInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '539d5cdd82bab595b4aeec0378b6024c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the widget validation label.
   *
   * @return string
   *   The widget validation label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\entity_browser\\WidgetValidationInterface',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bb88acc45fbd4e3e2de0d11dab76f5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the widget.
   *
   * @param array $entities
   *   Array of selected entities.
   * @param array $options
   *   (Optional) Array of options needed by the constraint validator.
   *
   * @return \\Symfony\\Component\\Validator\\ConstraintViolationListInterface
   *   A list of constraint violations. If the list is empty, validation
   *   succeeded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\entity_browser\\WidgetValidationInterface',
         'functionName' => 'validate',
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