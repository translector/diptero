<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/block_content/src/Entity/BlockContent.php-1594234425,/var/www/html/web/core/modules/block_content/src/Access/RefinableDependentAccessTrait.php-1594234425',
   'data' => 
  array (
    '50449c01aac07902a32671bc97598c56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom block entity class.
 *
 * @ContentEntityType(
 *   id = "block_content",
 *   label = @Translation("Custom block"),
 *   label_collection = @Translation("Custom blocks"),
 *   label_singular = @Translation("custom block"),
 *   label_plural = @Translation("custom blocks"),
 *   label_count = @PluralTranslation(
 *     singular = "@count custom block",
 *     plural = "@count custom blocks",
 *   ),
 *   bundle_label = @Translation("Custom block type"),
 *   handlers = {
 *     "storage" = "Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage",
 *     "access" = "Drupal\\block_content\\BlockContentAccessControlHandler",
 *     "list_builder" = "Drupal\\block_content\\BlockContentListBuilder",
 *     "view_builder" = "Drupal\\block_content\\BlockContentViewBuilder",
 *     "views_data" = "Drupal\\block_content\\BlockContentViewsData",
 *     "form" = {
 *       "add" = "Drupal\\block_content\\BlockContentForm",
 *       "edit" = "Drupal\\block_content\\BlockContentForm",
 *       "delete" = "Drupal\\block_content\\Form\\BlockContentDeleteForm",
 *       "default" = "Drupal\\block_content\\BlockContentForm"
 *     },
 *     "translation" = "Drupal\\block_content\\BlockContentTranslationHandler"
 *   },
 *   admin_permission = "administer blocks",
 *   base_table = "block_content",
 *   revision_table = "block_content_revision",
 *   data_table = "block_content_field_data",
 *   revision_data_table = "block_content_field_revision",
 *   show_revision_ui = TRUE,
 *   links = {
 *     "canonical" = "/block/{block_content}",
 *     "delete-form" = "/block/{block_content}/delete",
 *     "edit-form" = "/block/{block_content}",
 *     "collection" = "/admin/structure/block/block-content",
 *     "create" = "/block",
 *   },
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "revision" = "revision_id",
 *     "bundle" = "type",
 *     "label" = "info",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid",
 *     "published" = "status",
 *   },
 *   revision_metadata_keys = {
 *     "revision_user" = "revision_user",
 *     "revision_created" = "revision_created",
 *     "revision_log_message" = "revision_log"
 *   },
 *   bundle_entity_type = "block_content_type",
 *   field_ui_base_route = "entity.block_content_type.edit_form",
 *   render_cache = FALSE,
 * )
 *
 * Note that render caching of block_content entities is disabled because they
 * are always rendered as blocks, and blocks already have their own render
 * caching.
 * See https://www.drupal.org/node/2284917#comment-9132521 for more information.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0b45017d0e3751cdcfccead0a6c1d92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for \\Drupal\\block_content\\Access\\RefinableDependentAccessInterface.
 *
 * @internal
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d7c0330656a1ba0fd66c96b7ffc0e67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The access dependency.
   *
   * @var \\Drupal\\Core\\Access\\AccessibleInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '858a24b5a3dde7c9fd586111f73fb14d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'setAccessDependency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7d3fef8c5aea31df64ad2f34524691d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'getAccessDependency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f30a4e06e43fd91de2a10fcf9fb8ff0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'addAccessDependency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ba5a7c8a730d3019fe9088faefc9cfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme the block is being created in.
   *
   * When creating a new custom block from the block library, the user is
   * redirected to the configure form for that block in the given theme. The
   * theme is stored against the block when the custom block add form is shown.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4d05b4bcfffd867a0971daabdc30801' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'createDuplicate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0bc19bbe692862a151a0c44e797e59d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'setTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af68fa62444e79bf138555360e8e0f92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'getTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c95956ff7da7f1b131e1a3bcb64a2d58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '893e9842491c288d0f7e5fc8ec86a687' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5894488d889b261dc62d799ae94f8663' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\block_content\\BlockContentInterface $block */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acd0ce063fe6a723c4c464740a26709f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'getInstances',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f40f74fead3523fd4ee2bcbb82ae8473' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'preSaveRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c50f580fe2d36a47526950d59c899297' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c3b9a6daa90b9cf8eb1be13735e7441' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86d52a2c8e45df1c450e0746a1e6c6b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\BaseFieldDefinition[] $fields */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da172f69f5fff72150d3dd22f8fead64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'getRevisionLog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd44ea956079f1b279b410af2424c4d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'setInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '654e1013c6176be4561cc9647fdfbe91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'setRevisionLog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78bb9785a8fe47716ab7ea7870836984' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'getRevisionCreationTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92d8cfefd9449dcd9ead02c368f2b992' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'setRevisionCreationTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '954a0c529dd2c89b9e1731b570565d79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'getRevisionUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da8a90a8d1a58d8ccde84d2033114f03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'getRevisionUserId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f1cfd857b72a7ebf7a3ec7322af8966' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'setRevisionUserId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5352d36648dfb2ce6ef094e630f63a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'getRevisionLogMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '44528be5d74b0e023157316cd88d88c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'setRevisionLogMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2e5d2f79f466fc23b0df4ef0fef9810' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'isReusable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '003957c700105cd4ded2e2cb49bec247' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'setReusable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e424f32c484ee71ecc326cff9ad7c2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'setNonReusable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e41bc949c16677544ea4d1b4e1508259' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invalidates the block plugin cache after changes and deletions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'refinabledependentaccesstrait' => 'Drupal\\block_content\\Access\\RefinableDependentAccessTrait',
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'blockcontentinterface' => 'Drupal\\block_content\\BlockContentInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContent',
         'functionName' => 'invalidateBlockPluginCache',
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