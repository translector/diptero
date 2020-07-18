<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/ParagraphsBehaviorInterface.php-1590060906',
   'data' => 
  array (
    '6d8c50c4fc2cba91da1ede0225f2d8d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a paragraph behavior.
 *
 * A paragraph behavior plugin adds extra functionality to the paragraph such as
 * adding properties and attributes, it can also add extra classes to the render
 * elements so extra styling can be applied.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59da51f748b0a021b34bcf3206b1b3e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a behavior perspective for each paragraph based on its type.
   *
   * This method is responsible for building the behavior form for each
   * Paragraph so the user can set special attributes and properties.
   *
   * @param \\Drupal\\paragraphs\\ParagraphInterface $paragraph
   *   The paragraph.
   * @param array $form
   *   An associative array containing the initial structure of the plugin form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The fields build array that the plugin creates.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => 'buildBehaviorForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '708fcf56ad6b78d8765a5ce51704e94b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the behavior fields form.
   *
   * This method is responsible for validating the data in the behavior fields
   * form and displaying validation messages.
   *
   * @param \\Drupal\\paragraphs\\ParagraphInterface $paragraph
   *   The paragraph.
   * @param array $form
   *   An associative array containing the initial structure of the plugin form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => 'validateBehaviorForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cae82e6157d3127811498b3d056b1cec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit the values taken from the form to store the values.
   *
   * This method is responsible for submitting the data and saving it in the
   * paragraphs entity.
   *
   * @param \\Drupal\\paragraphs\\ParagraphInterface $paragraph
   *   The paragraph.
   * @param array $form
   *   An associative array containing the initial structure of the plugin form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => 'submitBehaviorForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eebbc40da9e56a00c7620cb82a4d8d3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a default set of helper variables for preprocessors and templates.
   *
   * This preprocess function is the first in the sequence of preprocessing
   * functions that are called when preparing variables of a paragraph.
   *
   * @param array $variables
   *   An associative array containing:
   *   - elements: An array of elements to display in view mode.
   *   - paragraph: The paragraph object.
   *   - view_mode: The view mode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => 'preprocess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cd8d107a85ad72fa9f497b7e28250cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extends the paragraph render array with behavior.
   *
   * @param array &$build
   *   A renderable array representing the paragraph. The module may add
   *   elements to $build prior to rendering. The structure of $build is a
   *   renderable array as expected by drupal_render().
   * @param \\Drupal\\paragraphs\\Entity\\Paragraph $paragraph
   *   The paragraph.
   * @param \\Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface $display
   *   The entity view display holding the display options configured for the
   *   entity components.
   * @param string $view_mode
   *   The view mode the entity is rendered in.
   *
   * @return array
   *   A render array provided by the plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => 'view',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25cf9f3de475468f94685f2ea4b9075c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns if the plugin can be used for the provided Paragraphs type.
   *
   * @param \\Drupal\\paragraphs\\Entity\\ParagraphsType $paragraphs_type
   *   The Paragraphs type entity that should be checked.
   *
   * @return bool
   *   TRUE if the formatter can be used, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => 'isApplicable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be7c61e15e6e61b39f43032274dac27a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a short summary for the current behavior settings.
   *
   * @param \\Drupal\\paragraphs\\Entity\\Paragraph $paragraph
   *   The paragraph.
   *
   * @return string[]
   *   The plugin settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec50d91568b8826c6f4460679ad0bd93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a short info icon for the current behavior settings.
   *
   * Usually the information is in the form of an icon or a badge or some
   * similar graphical representation.
   *
   * @param \\Drupal\\paragraphs\\Entity\\Paragraph $paragraph
   *   The paragraph.
   *
   * @return string[]
   *   The plugin settings.
   *
   * @see ParagraphInterface::getIcons()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => 'settingsIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4df7bc559d01c7be087db46cc51f276' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns list of field names for the given paragraph type and field type.
   *
   * @param \\Drupal\\paragraphs\\Entity\\ParagraphsType $paragraphs_type
   *   The paragraphs type entity.
   * @param string $field_type
   *   (optional) Field type to check for existence. If field type is not
   *   provided, returns all entity fields.
   *
   * @return string[]
   *   The list of field labels keyed by their field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphsBehaviorInterface',
         'functionName' => 'getFieldNameOptions',
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