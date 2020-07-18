<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElementManagerInterface.php-1594241402',
   'data' => 
  array (
    '1dac9b2db38f89412226ba0ea2d86638' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Collects available webform elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '955e24d0ed8ccd00d1e51a3169bdbb7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all available webform element plugin instances.
   *
   * @return \\Drupal\\webform\\Plugin\\WebformElementInterface[]
   *   An array of all available webform element plugin instances.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'getInstances',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26c45f784e67d386df04b0d8710276b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build a Webform element.
   *
   * @param array $element
   *   An associative array containing an element with a #type property.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'initializeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdc6a22deddcbb962d2597a18721d9b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build a Webform element.
   *
   * @param array $element
   *   An associative array containing an element with a #type property.
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @see hook_webform_element_alter()
   * @see hook_webform_element_ELEMENT_TYPE_alter()
   * @see \\Drupal\\webform\\WebformSubmissionForm::prepareElements
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'buildElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7a3a2d078ca64139bb9cb2a282ef6af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process a form element and apply webform element specific enhancements.
   *
   * This method allows any form API element to be enhanced using webform
   * specific features include custom validation, external libraries,
   * accessibility improvements, etc…
   *
   * @param array $element
   *   An associative array containing an element with a #type property.
   *
   * @return array
   *   The processed form element with webform element specific enhancements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'processElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '292db00f2738d49d8a8d1f91f4dd8b5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process form elements and apply webform element specific enhancements.
   *
   * This method allows any form API elements to be enhanced using webform
   * specific features include custom validation, external libraries,
   * accessibility improvements, etc…
   *
   * @param array $elements
   *   An associative array containing form elements.
   *
   * @return array
   *   The processed form elements with webform element specific enhancements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'processElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ddd8244d087e53317c3cb03e5d5a5d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invoke a method for a Webform element.
   *
   * @param string $method
   *   The method name.
   * @param array $element
   *   An associative array containing an element with a #type property.
   * @param mixed $context1
   *   (optional) An additional variable that is passed by reference.
   * @param mixed $context2
   *   (optional) An additional variable that is passed by reference. If more
   *   context needs to be provided to implementations, then this should be an
   *   associative array as described above.
   *
   * @return mixed|null
   *   Return result of the invoked method. NULL will be returned if the
   *   element and/or method name does not exist.
   *
   * @see \\Drupal\\webform\\WebformSubmissionForm::prepareElements
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'invokeMethod',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '861c9eaaccb7721fd33581626ced6630' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Is an element\'s plugin id.
   *
   * @param array $element
   *   A element.
   *
   * @return string
   *   An element\'s $type has a corresponding plugin id, else
   *   fallback \'element\' plugin id.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'getElementPluginId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c77fbccc9b9a182967671cd5c444fba0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a webform element plugin instance for an element.
   *
   * @param array $element
   *   An associative array containing an element with a #type property.
   * @param \\Drupal\\webform\\WebformInterface|\\Drupal\\webform\\WebformSubmissionInterface $entity
   *   A webform or webform submission entity.
   *
   * @return \\Drupal\\webform\\Plugin\\WebformElementInterface
   *   A webform element plugin instance
   *
   * @throws \\Exception
   *   Throw exception if entity type is not a webform or webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'getElementInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bc63fdff1e7c37b9bbb3341ab9fc8c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets sorted plugin definitions.
   *
   * @param array[]|null $definitions
   *   (optional) The plugin definitions to sort. If omitted, all plugin
   *   definitions are used.
   * @param string $sort_by
   *   The property to sort plugin definitions by. Only \'label\' and \'category\'
   *   are supported. Defaults to label.
   *
   * @return array[]
   *   An array of plugin definitions, sorted by category and label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e3ec63b02dd6537a43cf94e28943f17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all translatable properties from all elements.
   *
   * @return array
   *   An array of translatable properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'getTranslatableProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6acc6e06741c6e067d6c00631b10722c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all properties for all elements.
   *
   * @return array
   *   An array of all properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'getAllProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd74cd761a12dd4a70df90554ec0f1c7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if an element type is excluded.
   *
   * @param string $type
   *   The element type.
   *
   * @return bool
   *   TRUE if the element is excluded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
         'functionName' => 'isExcluded',
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