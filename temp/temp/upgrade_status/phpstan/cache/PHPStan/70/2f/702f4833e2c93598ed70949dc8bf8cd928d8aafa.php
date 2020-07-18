<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/WebformEntitySelect.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Element/WebformEntityTrait.php-1594241402',
   'data' => 
  array (
    '0d8ccf3c7a9aae7bdbe80ac2f2b258f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform element for a entity select menu.
 *
 * @FormElement("webform_entity_select")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'select' => 'Drupal\\Core\\Render\\Element\\Select',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEntitySelect',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d6cb2c8429741b2fdc87713fd224df3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for entity reference elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEntitySelect',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46e87f4b915db8a4f5e11fd415c471ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEntitySelect',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb327ce607b5b602172fcea93470a81d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set referencable entities as options for an element.
   *
   * @param array $element
   *   An element.
   * @param array $settings
   *   An array of settings used to limit and randomize options.
   *
   * @throws \\Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException
   *   Thrown when the current user doesn\'t have access to the specified entity.
   *
   * @see \\Drupal\\system\\Controller\\EntityAutocompleteController
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEntitySelect',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e875eee6268612f145e308008686c803' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface $selection_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEntitySelect',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55f547aa023af14f556d427298195a18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translate the select options.
   *
   * @param array $options
   *   Untranslated options.
   * @param array $element
   *   An element.
   *
   * @return array
   *   Translated options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEntitySelect',
         'functionName' => 'translateOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '869683106018cd063f3b6d6b853f3bd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEntitySelect',
         'functionName' => 'translateOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6739f469de3bdb0b20e052a069d6e6e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'select' => 'Drupal\\Core\\Render\\Element\\Select',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEntitySelect',
         'functionName' => 'processSelect',
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