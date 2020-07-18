<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/Field/FieldWidget/WebformEntityReferenceAutocompleteWidget.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Plugin/Field/FieldWidget/WebformEntityReferenceWidgetTrait.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Element/WebformAjaxElementTrait.php-1594241402',
   'data' => 
  array (
    '835a7d99b560e5d82cedca96a9bfedfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'webform_entity_reference_autocomplete\' widget.
 *
 * @FieldWidget(
 *   id = "webform_entity_reference_autocomplete",
 *   label = @Translation("Autocomplete"),
 *   description = @Translation("An autocomplete text field."),
 *   field_types = {
 *     "webform"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'entityreferenceautocompletewidget' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldWidget\\EntityReferenceAutocompleteWidget',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55761ce75cd8cebb3e189262c1b290b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for webform entity reference and autocomplete widget.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8310f322b961e4ad915f033bcd736f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for ajax element support.
 *
 * @see \\Drupal\\webform_test_element\\Plugin\\WebformElement\\WebformTestElementProperties
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b1de3c887bd78a0f48de690788a4100' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Ajax element wrapper id.
   *
   * @param string $id
   *   A unique element id.
   *
   * @return string
   *   The element id suffixed with *-wrapper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'getAjaxElementWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '807b209216efd1ffc10fdd7da5a1d959' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Ajax element update name.
   *
   * @param string $id
   *   A unique element id.
   *
   * @return string
   *   The element update name suffixed with *-update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'getAjaxElementUpdateName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7523d6413259f04370b085259428d2a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Ajax element update class.
   *
   * @param string $id
   *   A unique element id.
   *
   * @return string
   *   The element update classes prefixed with js-* and suffixed with *-update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'getAjaxElementUpdateClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69d87997aa47b4075e0069a619464fe7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$wrapper_element
   *   The element to be update via Ajax.
   * @param array &$trigger_element
   *   The element to trigger the Ajax update.
   * @param array|null &$update_element
   *   The element to append the hidden Ajax submit button.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'buildAjaxElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '808a8ed954623674cc0173cadfafc507' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element\'s wrapper.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$element
   *   The element to be update via Ajax.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'buildAjaxElementWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91219864c96de09836d36f2db7511250' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element\'s trigger.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$element
   *   The element to trigger the Ajax update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'buildAjaxElementTrigger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1fa65693d8018c233da12eed5a8e88e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element\'s update (submit) button.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$element
   *   The element to append the hidden Ajax submit button.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'buildAjaxElementUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '670e2f2fd3bcb605af0ccbbb3ad90488' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax element validate callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'validateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db97a865071092139e29718828c75a2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax element submit callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'submitAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b6a29a7ff11c5966a2968e9f73ddf22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax element update callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The properties element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'updateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe1d3c6382be29039355e0d7c0ef7c66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get ajax element wrapper.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array $element
   *   An element or form containing the Ajax wrapper.
   *
   * @return array|null
   *   The Ajax wrapper element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'getAjaxElementWrapperRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8712eae4c4b652e271be9b9e1715a779' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'defaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88e3daba300f8b2e55900e68888534f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8969845b2e1a5879ec3764cdf351fe3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7600b9cec3c56df58e61c31bb0f30eb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the target id element form for a single webform field widget.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
   *   Array of default values for this field.
   * @param int $delta
   *   The order of this item in the array of sub-elements (0, 1, 2, etc.).
   * @param array $element
   *   A form element array containing basic properties for the widget.
   * @param array $form
   *   The form structure where widgets are being attached to. This might be a
   *   full form structure, or a sub-element of a larger form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form elements for a single widget for this field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'getTargetIdElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1504658b55cff4cc3ac01eaaeefd6673' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'formElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fe5d3d34f94b5a4f7591cc890283087' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'formElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a38fda59d81c95f3675e110a55f648e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformTokenManagerInterface $token_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'formElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '239059d37681ca8a7a58b0fd543c39ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'massageFormValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66a2ebc4d79370ccf714fff283408f31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate callback to ensure that the open date <= the close date.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   generic form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @see \\Drupal\\webform\\WebformEntitySettingsForm::validateForm
   * @see \\Drupal\\datetime_range\\Plugin\\Field\\FieldWidget\\DateRangeWidgetBase::validateOpenClose
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'validateOpenClose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98552e9982928e60fb2c7744f0fb1b66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'entityreferenceautocompletewidget' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldWidget\\EntityReferenceAutocompleteWidget',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\Field\\FieldWidget\\WebformEntityReferenceAutocompleteWidget',
         'functionName' => 'getTargetIdElement',
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