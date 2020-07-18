<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/modules/paragraphs_library/src/Entity/LibraryItem.php-1590060906',
   'data' => 
  array (
    'e249b033e127b1c3b24fa11779a594d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the LibraryItem entity.
 *
 * @ContentEntityType(
 *   id = "paragraphs_library_item",
 *   label = @Translation("Paragraphs library item"),
 *   label_collection = @Translation("Paragraphs library items"),
 *   label_singular = @Translation("Paragraphs library item"),
 *   label_plural = @Translation("Paragraphs library items"),
 *   label_count = @PluralTranslation(
 *     singular = "@count Paragraphs library item",
 *     plural = "@count Paragraphs library items",
 *   ),
 *   handlers = {
 *     "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
 *     "list_builder" = "Drupal\\Core\\Entity\\EntityListBuilder",
 *     "access" = "Drupal\\paragraphs_library\\LibraryItemAccessControlHandler",
 *     "views_data" = "Drupal\\paragraphs_library\\LibraryItemViewsData",
 *     "form" = {
 *       "default" = "Drupal\\paragraphs_library\\Form\\LibraryItemForm",
 *       "add" = "Drupal\\paragraphs_library\\Form\\LibraryItemForm",
 *       "edit" = "Drupal\\paragraphs_library\\Form\\LibraryItemForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\\paragraphs_library\\Routing\\LibraryItemRouteProvider",
 *     },
 *   },
 *   base_table = "paragraphs_library_item",
 *   data_table = "paragraphs_library_item_field_data",
 *   revision_table = "paragraphs_library_item_revision",
 *   revision_data_table = "paragraphs_library_item_revision_field_data",
 *   show_revision_ui = TRUE,
 *   translatable = TRUE,
 *   admin_permission = "administer paragraphs library",
 *   render_cache = FALSE,
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "revision" = "revision_id",
 *     "uuid" = "uuid",
 *     "langcode" = "langcode",
 *     "published" = "status",
 *   },
 *   revision_metadata_keys = {
 *     "revision_created" = "revision_created",
 *     "revision_user" = "revision_uid",
 *     "revision_log_message" = "revision_log"
 *   },
 *   links = {
 *     "add-form" = "/admin/content/paragraphs/add/default",
 *     "edit-form" = "/admin/content/paragraphs/{paragraphs_library_item}/edit",
 *     "delete-form" = "/admin/content/paragraphs/{paragraphs_library_item}/delete",
 *     "collection" = "/admin/content/paragraphs",
 *     "canonical" = "/admin/content/paragraphs/{paragraphs_library_item}",
 *     "revision" = "/admin/content/paragraphs/{paragraphs_library_item}/revisions/{paragraphs_library_item_revision}/view",
 *     "revision-revert" = "/admin/content/paragraphs/{paragraphs_library_item}/revisions/{paragraphs_library_item_revision}/revert",
 *     "revision-delete" = "/admin/content/paragraphs/{paragraphs_library_item}/revisions/{paragraphs_library_item_revision}/delete"
 *   },
 *   field_ui_base_route = "paragraphs_library_item.settings",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c2954ce4139760aa18d4d890b574bdb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40f7819667917cde734a6111feea40f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'uid\' base field definition.
   *
   * @see ::baseFieldDefinitions()
   *
   * @return array
   *   An array of default values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'getCurrentUserId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6feba4db419ecf382682250c236d1542' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b1ef9ddd9c5427275a6d6d4f1fdf103' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'getOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9417f17d4b22072dda3bce5154d4e008' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'getOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbac47b19e07c6b43ff74004fb37d3e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'setOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa7c9ef13bbf94c658a1067f65ac8f76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'setOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a25fc6f3e984764a1134af1d39dd38f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'preSaveRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e0d174e051a4e8044b3f2be19c5e90e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'createFromParagraph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f34471486aea41c6567b91400bcc766' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a label for the library item.
   *
   * @param \\Drupal\\paragraphs\\ParagraphInterface $paragraph
   *   The paragraph for which the label should be generated.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'buildLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '860e27d798f6b8bd45be4b8a32d1467e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'getCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65a6e8a81af6aeb21e0ec94f52d9bb35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'setCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '736771c9f57e0c468b704786b661e68c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library\\Entity',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'libraryiteminterface' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\Entity\\LibraryItem',
         'functionName' => 'urlRouteParameters',
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