<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/Plugin/Field/FieldWidget/InlineParagraphsWidget.php-1590060906',
   'data' => 
  array (
    '17981fb80f9cd6db10ca6fa087c67d19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'entity_reference paragraphs\' widget.
 *
 * We hide add / remove buttons when translating to avoid accidental loss of
 * data because these actions effect all languages.
 *
 * @FieldWidget(
 *   id = "entity_reference_paragraphs",
 *   label = @Translation("Paragraphs Classic"),
 *   description = @Translation("A paragraphs inline form widget."),
 *   field_types = {
 *     "entity_reference_revisions"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99d5da644d6e20aa4ca7a5add45f7d1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether the current widget instance is in translation.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7cdd96c5faad5d338e4d2d6a633cd55c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Id to name ajax buttons that includes field parents and field name.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a85f93958dddde53be0947f2bb20d2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wrapper id to identify the paragraphs.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0a7bc84ffca8dd43a3196a9b085df8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Number of paragraphs item on form.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b35b33b599b7f3378618690b964ac071' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parents for the current paragraph.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6701c3b91317d07701fa85ef8b0125c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Accessible paragraphs types.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea788bc60373460da640a9d2d39d941d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'defaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f442e3d8aefd4a84882d0b6d08049f9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c96a2c59b80f61796270236ee22dbb39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afa326f86dc4e498a747c94e0d57e340' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\content_translation\\Controller\\ContentTranslationController::prepareTranslation()
   *   Uses a similar approach to populate a new translation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'formElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80a2e0956384340304958db65e519388' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\paragraphs\\ParagraphInterface $paragraphs_entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'formElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7acb09238eadd027c180a8aa50d9ab88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the sorted allowed types for a entity reference field.
   *
   * @return array
   *   A list of arrays keyed by the paragraph type machine name with the following properties.
   *     - label: The label of the paragraph type.
   *     - weight: The weight of the paragraph type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'getAllowedTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6faf2495c1d87c38e744b859eede523' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface $selection_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'getAllowedTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ec5cbe72183133b1ba5e647a1a4263f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6029245c0c6f085b2f21acc38bccdaab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add \'add more\' button, if not working with a programmed form.
   *
   * @return array
   *    The form element array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'buildAddActions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2018e0cb8ebd7298326dc0fe094a7c38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the available paragraphs type.
   *
   * @return array
   *   Available paragraphs types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'getAccessibleOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e831cfddbc6e61012b9cc4f5b154e280' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds dropdown button for adding new paragraph.
   *
   * @return array
   *   The form element array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'buildButtonsAddMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7151638d0a64b03920d67ed8dd2f0a22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds list of actions based on paragraphs type.
   *
   * @return array
   *   The form element array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'buildSelectAddMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea59ec1aec79fd8696dfcd77b8c52173' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets current language code from the form state or item.
   *
   * Since the paragraph field is not set as translatable, the item language
   * code is set to the source language. The intended translation language
   * is only accessibly through the form state.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'getCurrentLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0d92e4f0782bc7c6f58e1dae594b5c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'addMoreAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb7d525eeafd8eb36764f0051f3d3dc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'addMoreSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65d1f8662005820bc7bb6000d97865c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'errorElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0616dbfac0607cf9670ebcb799660959' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the value of a setting for the entity reference selection handler.
   *
   * @param string $setting_name
   *   The setting name.
   *
   * @return mixed
   *   The setting value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'getSelectionHandlerSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13652574839032d5e216b6177b558d2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a content entity is referenced.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'isContentReferenced',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35188c72564b306dc7bfdd854d05c518' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'elementValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f763a41d4e724eb0aced74e326d854e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'elementValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35d68ce6746a20dc7321f8f7ed9e461b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Special handling to validate form elements with multiple values.
   *
   * @param array $elements
   *   An associative array containing the substructure of the form to be
   *   validated in this call.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $form
   *   The complete form array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'multipleElementValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0c18d2d43c0c0d45fe45cf6e6f41819' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'massageFormValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e545243d92f8d1446b487c721ecc74a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'massageFormValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95619bdcb07c4bad0213333a3d4a3f4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'extractFormValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1a7774caa5e173664bead97991c4aca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes the translation form state.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   * @param \\Drupal\\Core\\Entity\\EntityInterface $host
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'initIsTranslating',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e68755fe181afdb818b4f5b9d29c0728' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * After-build callback for adding the translatability clue from the widget.
   *
   * ContentTranslationHandler::addTranslatabilityClue() adds an
   * "(all languages)" suffix to the widget title, replicate that here.
   *
   * @param array $element
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'addTranslatabilityClue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40d48485fad299573c5e86baecd912eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default paragraph type.
   *
   * @return string $default_paragraph_type
   *   Label name for default paragraph type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'getDefaultParagraphTypeLabelName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c939f61db35b4613ccd933e29c27d12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the machine name for default paragraph type.
   *
   * @return string
   *   Machine name for default paragraph type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'getDefaultParagraphTypeMachineName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88dd5bebbe012fdc1b988c6d6a1be87c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Counts the number of paragraphs in a certain mode in a form substructure.
   *
   * @param array $widget_state
   *   The widget state for the form substructure containing information about
   *   the paragraphs within.
   * @param string $mode
   *   The mode to look for.
   *
   * @return int
   *   The number of paragraphs is the given mode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
         'functionName' => 'getNumberOfParagraphsInMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b16090603ecc5f5cb657ac0e8eb48645' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldfilteredmarkup' => 'Drupal\\Core\\Field\\FieldFilteredMarkup',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formatterhelper' => 'Drupal\\field_group\\FormatterHelper',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'paragraphselection' => 'Drupal\\paragraphs\\Plugin\\EntityReferenceSelection\\ParagraphSelection',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\Field\\FieldWidget\\InlineParagraphsWidget',
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