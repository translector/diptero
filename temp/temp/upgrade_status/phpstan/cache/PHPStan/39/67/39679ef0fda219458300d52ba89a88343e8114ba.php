<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Entity/Element/EntityAutocomplete.php-1594234425',
   'data' => 
  array (
    '807ad1d0b08ba5c7c8a9efa64c89130c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an entity autocomplete form element.
 *
 * The #default_value accepted by this element is either an entity object or an
 * array of entity objects.
 *
 * @FormElement("entity_autocomplete")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1bd06844430b569727ad98c13131994' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4eb8aa7605b7329a6f2b3e9fe6a3b5ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '598f47adf004fddacc38eb63484a92af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds entity autocomplete functionality to a form element.
   *
   * @param array $element
   *   The form element to process. Properties used:
   *   - #target_type: The ID of the target entity type.
   *   - #selection_handler: The plugin ID of the entity reference selection
   *     handler.
   *   - #selection_settings: An array of settings that will be passed to the
   *     selection handler.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The form element.
   *
   * @throws \\InvalidArgumentException
   *   Exception thrown when the #target_type or #autocreate[\'bundle\'] are
   *   missing.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'processEntityAutocomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d0111b3efb28194d9f50446ac6940a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form element validation handler for entity_autocomplete elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'validateEntityAutocomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d62fd6e5265524021d13f14336d378e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var /Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'validateEntityAutocomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bb58d1f00eb050a231fc5a3481f7c50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'validateEntityAutocomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2677f5e1abd1766bf1b0ea6fd5c43ab8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'validateEntityAutocomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f95bd636217cfdcd992c5af8bdca6efd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds an entity from an autocomplete input without an explicit ID.
   *
   * The method will return an entity ID if one single entity unambiguously
   * matches the incoming input, and assign form errors otherwise.
   *
   * @param \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface $handler
   *   Entity reference selection plugin.
   * @param string $input
   *   Single string from autocomplete element.
   * @param array $element
   *   The form element to set a form error.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current form state.
   * @param bool $strict
   *   Whether to trigger a form error if an element from $input (eg. an entity)
   *   is not found.
   *
   * @return int|null
   *   Value of a matching entity ID, or NULL if none.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'matchEntityByTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05d51e936348b50a150487c568dc25d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts an array of entity objects into a string of entity labels.
   *
   * This method is also responsible for checking the \'view label\' access on the
   * passed-in entities.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   An array of entity objects.
   *
   * @return string
   *   A string of entity labels separated by commas.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'getEntityLabels',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e187f9e3216e30840435b80266aec8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'getEntityLabels',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5274f7a6d926d4a05c9fbe61707be02e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extracts the entity ID from the autocompletion result.
   *
   * @param string $input
   *   The input coming from the autocompletion result.
   *
   * @return mixed|null
   *   An entity ID or NULL if the input does not contain one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'tags' => 'Drupal\\Component\\Utility\\Tags',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'selectioninterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
          'selectionwithautocreateinterface' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'textfield' => 'Drupal\\Core\\Render\\Element\\Textfield',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Element\\EntityAutocomplete',
         'functionName' => 'extractEntityIdFromAutocompleteInput',
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