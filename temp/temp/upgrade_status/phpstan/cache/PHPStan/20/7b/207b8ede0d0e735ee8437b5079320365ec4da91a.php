<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/Entity/Paragraph.php-1590060906,/var/www/html/web/modules/contrib/entity_reference_revisions/src/EntityNeedsSaveTrait.php-1583961090,/var/www/html/web/core/lib/Drupal/Core/Entity/EntityPublishedTrait.php-1594234425',
   'data' => 
  array (
    'e2320d7e3600389ef4cd710f373a1292' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the Paragraph entity.
 *
 * @ingroup paragraphs
 *
 * @ContentEntityType(
 *   id = "paragraph",
 *   label = @Translation("Paragraph"),
 *   label_collection = @Translation("Paragraphs"),
 *   label_singular = @Translation("Paragraph"),
 *   label_plural = @Translation("Paragraphs"),
 *   label_count = @PluralTranslation(
 *     singular = "@count Paragraph",
 *     plural = "@count Paragraphs",
 *   ),
 *   bundle_label = @Translation("Paragraph type"),
 *   handlers = {
 *     "view_builder" = "Drupal\\paragraphs\\ParagraphViewBuilder",
 *     "access" = "Drupal\\paragraphs\\ParagraphAccessControlHandler",
 *     "storage_schema" = "Drupal\\paragraphs\\ParagraphStorageSchema",
 *     "form" = {
 *       "default" = "Drupal\\Core\\Entity\\ContentEntityForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm",
 *       "edit" = "Drupal\\Core\\Entity\\ContentEntityForm"
 *     },
 *     "views_data" = "Drupal\\views\\EntityViewsData",
 *   },
 *   base_table = "paragraphs_item",
 *   data_table = "paragraphs_item_field_data",
 *   revision_table = "paragraphs_item_revision",
 *   revision_data_table = "paragraphs_item_revision_field_data",
 *   translatable = TRUE,
 *   entity_revision_parent_type_field = "parent_type",
 *   entity_revision_parent_id_field = "parent_id",
 *   entity_revision_parent_field_name_field = "parent_field_name",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "bundle" = "type",
 *     "langcode" = "langcode",
 *     "revision" = "revision_id",
 *     "published" = "status"
 *   },
 *   bundle_entity_type = "paragraphs_type",
 *   field_ui_base_route = "entity.paragraphs_type.edit_form",
 *   common_reference_revisions_target = TRUE,
 *   content_translation_ui_skip = TRUE,
 *   render_cache = FALSE,
 *   default_reference_revision_settings = {
 *     "field_storage_config" = {
 *       "cardinality" = -1,
 *       "settings" = {
 *         "target_type" = "paragraph"
 *       }
 *     },
 *     "field_config" = {
 *       "settings" = {
 *         "handler" = "default:paragraph"
 *       }
 *     },
 *     "entity_form_display" = {
 *       "type" = "entity_reference_paragraphs"
 *     },
 *     "entity_view_display" = {
 *       "type" = "entity_reference_revisions_entity_view"
 *     }
 *   },
 *   serialized_field_property_names = {
 *     "behavior_settings" = {
 *       "value"
 *     }
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecce365e1b493f38d13a2f503246ea2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for EntityNeedsSaveInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c26a3c5da16a5a7671b7aaf5a03ddb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the entity needs to be saved or not.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9202324cf6407bea4ddf3ce38b32729' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'needsSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ce427fbea102804fbb96966455df94a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setNeedsSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70b3903d769c8850cb15484623bae72c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2360c9995af215339e2eaa132f94e275' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for published status.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '892f02d3ed0c79b7853ce47a44945ff1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of base field definitions for publishing status.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type to add the publishing status field to.
   *
   * @return \\Drupal\\Core\\Field\\BaseFieldDefinition[]
   *   An array of base field definitions.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException
   *   Thrown when the entity type does not implement EntityPublishedInterface
   *   or if it does not have a "published" entity key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'publishedBaseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab92687989f7d9511ada58fe1412ef76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'isPublished',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d89899e7497d97c59e6a1ce89034a87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setPublished',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd7ff29d025c7f5fa5a72a7083a3e929' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setUnpublished',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d741ec64d843076a83dab2fded67985' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The behavior plugin data for the paragraph entity.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa227f0b5f577e91542ed41383eaad81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Number of summaries.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6e75886b52a889aabd6f9b5586dcbdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getParentEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccbdc008c31a3e06b1f32b92d9035dc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setParentEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5636140c22fe46c64a2642013b5d671e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4f1e3adcf0f7a879f347ac357eff65b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '050ac44f66be577425d171de660e05f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getAllBehaviorSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01911041856ab3aa30ecbcb1f703f395' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getBehaviorSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40088430266f2f6cf373f8b340281c3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setAllBehaviorSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c744a4ecf507584c0390e4d72768c6e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setBehaviorSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60cf54bbdcfb4451a0998f0e32beb656' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56a20d3086a45e03e863f3a39389d0c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'preSaveRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eda3682096141c66342e85b3db3ac162' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '523210f7523406fafc8e1c4d68a793b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @deprecated Paragraphs no longer have their own author,
   *  check the parent entity instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '494dd0307894eb7c3a6e63230656a45b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @deprecated Paragraphs no longer have their own author,
   *  check the parent entity instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c05cab51473afd7b9c1779ab22c2e16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @deprecated Paragraphs no longer have their own author,
   *  check the parent entity instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9baf769ad85efe017657e8dc65644002' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @deprecated Paragraphs no longer have their own author,
   *  check the parent entity instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4968c334cf580947cfb8a86240e6cf9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6aae30347df61eeeca1d65f65916b947' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getParagraphType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ca5fd3ed449740629a0eee81a19071d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @deprecated Paragraphs no longer have their own author,
   *  check the parent entity instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getRevisionAuthor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '803424410a9436d797bb7dbabf8758a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @deprecated Paragraphs no longer have their own author,
   *  check the parent entity instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setRevisionAuthorId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf00ee44177361171be1f8f19e4bb126' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getRevisionLog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b882efd329c529f8129e73684e358ff9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'setRevisionLog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd10b360a348a72683e5cbf556faed1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8702abd6facb29e7680b465b8c9d6496' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
  * {@inheritdoc}
  */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'createDuplicate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9baec29bc2ba6aef17ec27911426750' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '984d2cb313f8b61b3d7406568e934ace' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getSummaryItems',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '067adf4cdab9fcafc5cb9b34b5d80658' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityInterface[] $referenced_entities */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getSummaryItems',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86f94a45405a387d60555be5d7362458' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getIcons',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad0adba5e1c7363ba7bbb1d50a7081cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of field names to skip in ::isChanged.
   *
   * @return array
   *   An array of field names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getFieldsToSkipFromChangedCheck',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4df14f9c051cf8146b28d3a6e2e499a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'isChanged',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30f2be742e66ef628a6b54b6aa08bea6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\paragraphs\\ParagraphInterface $original */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'isChanged',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4abae7c32e43465a9a2aa437effa4071' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns summary for file paragraph.
   *
   * @param string $field_name
   *   Field name from field definition.
   *
   * @return string
   *   Summary for image.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getFileSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13bab68cdc75a58cd470712c5a7161d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns summary items for nested paragraphs.
   *
   * @param string $field_name
   *   Field definition id for paragraph.
   * @param array $options
   *   (optional) An associative array of additional options.
   *   See \\Drupal\\paragraphs\\ParagraphInterface::getSummary() for all of the
   *   available options.
   *
   * @return array
   *   List of content summary items for nested elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getNestedSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cc18c6447ca06fc17b297971c19114f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns summary for all text type paragraph.
   *
   * @param string $field_name
   *   Field definition id for paragraph.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   Field definition for paragraph.
   *
   * @return string
   *   Short summary for text paragraph.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'changedfielditemlist' => 'Drupal\\Core\\Field\\ChangedFieldItemList',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\Paragraph',
         'functionName' => 'getTextSummary',
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