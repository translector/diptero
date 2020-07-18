<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Element/EntityBrowserElement.php-1588013888',
   'data' => 
  array (
    'e544e0b97a954ad2ff3019f2a7ffae93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an Entity Browser form element.
 *
 * Properties:
 * - #entity_browser: Entity browser or ID of the Entity browser to be used.
 * - #cardinality: (optional) Maximum number of items that are expected from
 *     the entity browser. Unlimited by default.
 * - #default_value: (optional) Array of entities that Entity browser should be
 *     initialized with. It\'s only applicable when edit selection mode is used.
 * - #entity_browser_validators: (optional) Array of validators that are to be
 *     passed to the entity browser. Array keys are plugin IDs and array values
 *     are plugin configuration values. Cardinality validator will be set
 *     automatically.
 * - #selection_mode: (optional) Determines how selection in entity browser will
 *     be handled. Will selection be appended/prepended or it will be replaced
 *     in case of editing. Defaults to append.
 * - #widget_context: (optional) Widget configuration overrides which enable
 *     use cases where the instance of a widget needs awareness of contextual
 *     configuration like field settings.
 *
 * Return value will be an array of selected entities, which will appear under
 * \'entities\' key on the root level of the element\'s values in the form state.
 *
 * @FormElement("entity_browser")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0869d28c792f316f8e738271f1f8af12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicating an entity browser can return an unlimited number of values.
   *
   * Note: When entity browser is used in Fields, cardinality is directly
   * propagated from Field settings, that\'s why this constant should be equal to
   * FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f6cdacd01c3bb4d4715dfc0ec223ab8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selection from entity browser will be appended to existing list.
   *
   * When this selection mode is used, then entity browser will not be
   * populated with existing selection. Preselected list will be empty.
   *
   * Note: This option is also used by "js/entity_browser.common.js".
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff103a7152269d2227ab7ff95f5ff7f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selection from entity browser will be prepended to existing list.
   *
   * When this selection mode is used, then entity browser will not be
   * populated with existing selection. Preselected list will be empty.
   *
   * Note: This option is also used by "js/entity_browser.common.js".
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e56c07c6be013c8eb40231d00ab2c3eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selection from entity browser will replace existing.
   *
   * When this selection mode is used, then entity browser will be populated
   * with existing selection and returned selected list will replace existing
   * selection. This option requires entity browser selection display with
   * preselection support.
   *
   * Note: This option is also used by "js/entity_browser.common.js".
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49cf32529642ade497dc7939bf26cef6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68c3491e7f37143f8561b81a4a0b4f83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get selection mode options.
   *
   * @return array
   *   Selection mode options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => 'getSelectionModeOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3dc2b3bdaae5b116a7f082f44b0380a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether entity browser should be available for selection of entities.
   *
   * @param string $selection_mode
   *   Used selection mode.
   * @param int $cardinality
   *   Used cardinality.
   * @param int $preselection_size
   *   Preseletion size, if it\'s available.
   *
   * @return bool
   *   Returns positive if entity browser can be used.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => 'isEntityBrowserAvailable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d1b97cf3cfbad3663cf719217283217' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render API callback: Processes the entity browser element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => 'processEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bd6381dc01c3b0b0b50170c49232beb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\entity_browser\\EntityBrowserInterface $entity_browser */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => 'processEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '481c75e8ce5861635f63991ccb64c901' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48305c843fae1ea5fa6aa3ebab7b9508' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes entity IDs and gets array of loaded entities.
   *
   * @param array|string $ids
   *   Processes entity IDs as they are returned from the entity browser. They
   *   are in [entity_type_id]:[entity_id] form. Array of IDs or a
   *   space-delimited string is supported.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface[]
   *   Array of entity objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => 'processEntityIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04a11c2ba244224172b7cf56f39ac7c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes entity IDs and gets array of loaded entities.
   *
   * @param string $id
   *   Processes entity ID as it is returned from the entity browser. ID should
   *   be in [entity_type_id]:[entity_id] form.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   Entity object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'entitybrowser' => 'Drupal\\entity_browser\\Entity\\EntityBrowser',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
         'functionName' => 'processEntityId',
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