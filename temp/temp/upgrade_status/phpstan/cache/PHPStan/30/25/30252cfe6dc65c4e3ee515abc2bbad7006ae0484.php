<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/modules/entity_form/entity_browser_entity_form.module-1588013888',
   'data' => 
  array (
    '74fcf8fda3f25939fa81a4a460253aeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_inline_entity_form_reference_form_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetinterface' => 'Drupal\\Core\\Field\\WidgetInterface',
          'url' => 'Drupal\\Core\\Url',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'inlineentityformcomplex' => 'Drupal\\inline_entity_form\\Plugin\\Field\\FieldWidget\\InlineEntityFormComplex',
        ),
         'className' => NULL,
         'functionName' => 'entity_browser_entity_form_inline_entity_form_reference_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca121edb37e0161bd9bf82eafa59de09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\field\\FieldConfigInterface $instance */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetinterface' => 'Drupal\\Core\\Field\\WidgetInterface',
          'url' => 'Drupal\\Core\\Url',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'inlineentityformcomplex' => 'Drupal\\inline_entity_form\\Plugin\\Field\\FieldWidget\\InlineEntityFormComplex',
        ),
         'className' => NULL,
         'functionName' => 'entity_browser_entity_form_inline_entity_form_reference_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '299f2ec1479508ac35016622f746069b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $form_display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetinterface' => 'Drupal\\Core\\Field\\WidgetInterface',
          'url' => 'Drupal\\Core\\Url',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'inlineentityformcomplex' => 'Drupal\\inline_entity_form\\Plugin\\Field\\FieldWidget\\InlineEntityFormComplex',
        ),
         'className' => NULL,
         'functionName' => 'entity_browser_entity_form_inline_entity_form_reference_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5268551e9fdf98ce6271ec20926ddfa6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Validates the form for adding existing entities.
 *
 * TODO see if we can get away without overriding entire IEF function.
 *
 * @param array $reference_form
 *   The reference entity form.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The form state of the parent form.
 *
 * @see inline_entity_form_reference_form_validate()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetinterface' => 'Drupal\\Core\\Field\\WidgetInterface',
          'url' => 'Drupal\\Core\\Url',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'inlineentityformcomplex' => 'Drupal\\inline_entity_form\\Plugin\\Field\\FieldWidget\\InlineEntityFormComplex',
        ),
         'className' => NULL,
         'functionName' => 'entity_browser_entity_form_reference_form_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '563bd073930f1773c05cff0dda0d8b35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Submits the form for adding existing entities.
 *
 * Adds the specified entity to the IEF form state.
 *
 * TODO see if we can get away without overriding entire IEF function.
 *
 * @param array $reference_form
 *   The reference entity form.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The form state of the parent form.
 *
 * @see inline_entity_form_reference_form_submit()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetinterface' => 'Drupal\\Core\\Field\\WidgetInterface',
          'url' => 'Drupal\\Core\\Url',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'inlineentityformcomplex' => 'Drupal\\inline_entity_form\\Plugin\\Field\\FieldWidget\\InlineEntityFormComplex',
        ),
         'className' => NULL,
         'functionName' => 'entity_browser_entity_form_reference_form_submit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '338c5045d9a661bf26042a936e5da286' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_field_widget_third_party_settings_form().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetinterface' => 'Drupal\\Core\\Field\\WidgetInterface',
          'url' => 'Drupal\\Core\\Url',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'inlineentityformcomplex' => 'Drupal\\inline_entity_form\\Plugin\\Field\\FieldWidget\\InlineEntityFormComplex',
        ),
         'className' => NULL,
         'functionName' => 'entity_browser_entity_form_field_widget_third_party_settings_form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f4d1c55cda07dd91be8d8237b5613d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_field_widget_settings_summary_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetinterface' => 'Drupal\\Core\\Field\\WidgetInterface',
          'url' => 'Drupal\\Core\\Url',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'inlineentityformcomplex' => 'Drupal\\inline_entity_form\\Plugin\\Field\\FieldWidget\\InlineEntityFormComplex',
        ),
         'className' => NULL,
         'functionName' => 'entity_browser_entity_form_field_widget_settings_summary_alter',
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