<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/Plugin/EntityReferenceSelection/ParagraphSelection.php-1590060906',
   'data' => 
  array (
    'f8f8a14c1b1146fd9832699f28b95c46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default plugin implementation of the Entity Reference Selection plugin.
 *
 * @EntityReferenceSelection(
 *   id = "default:paragraph",
 *   label = @Translation("Paragraphs"),
 *   group = "default",
 *   entity_types = {"paragraph"},
 *   weight = 0
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection',
         'uses' => 
        array (
          'defaultselection' => 'Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\DefaultSelection',
          'url' => 'Drupal\\Core\\Url',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '650fff4bc77b0c717530bdaa6b469c8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritDoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection',
         'uses' => 
        array (
          'defaultselection' => 'Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\DefaultSelection',
          'url' => 'Drupal\\Core\\Url',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76b34bc86df9512aaf9fe333b713fab0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection',
         'uses' => 
        array (
          'defaultselection' => 'Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\DefaultSelection',
          'url' => 'Drupal\\Core\\Url',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c0ed9d4044c7fdfba0f047c077f2f3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate helper to have support for other entity reference widgets.
   *
   * @param $element
   * @param FormStateInterface $form_state
   * @param $form
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection',
         'uses' => 
        array (
          'defaultselection' => 'Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\DefaultSelection',
          'url' => 'Drupal\\Core\\Url',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
         'functionName' => 'targetTypeValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd01cc90efa7a316f3535787d453ec045' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the sorted allowed types for the field.
   *
   * @return array
   *   A list of arrays keyed by the paragraph type machine name
   *   with the following properties.
   *     - label: The label of the paragraph type.
   *     - weight: The weight of the paragraph type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection',
         'uses' => 
        array (
          'defaultselection' => 'Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\DefaultSelection',
          'url' => 'Drupal\\Core\\Url',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
         'functionName' => 'getSortedAllowedTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d2f0cfad4974e9d05f2d7a8e072f0ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection',
         'uses' => 
        array (
          'defaultselection' => 'Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\DefaultSelection',
          'url' => 'Drupal\\Core\\Url',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
         'functionName' => 'validateReferenceableNewEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13c8ca815ad77be89833d7c3d1417918' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection',
         'uses' => 
        array (
          'defaultselection' => 'Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\DefaultSelection',
          'url' => 'Drupal\\Core\\Url',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
         'functionName' => 'buildEntityQuery',
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