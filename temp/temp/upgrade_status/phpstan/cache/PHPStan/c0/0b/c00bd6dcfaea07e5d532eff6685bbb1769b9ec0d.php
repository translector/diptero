<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/comment/src/Entity/Comment.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Entity/EntityChangedTrait.php-1594234425,/var/www/html/web/core/modules/user/src/EntityOwnerTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Entity/EntityPublishedTrait.php-1594234425',
   'data' => 
  array (
    'c506c74bbc0effdafd05142321890066' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the comment entity class.
 *
 * @ContentEntityType(
 *   id = "comment",
 *   label = @Translation("Comment"),
 *   label_singular = @Translation("comment"),
 *   label_plural = @Translation("comments"),
 *   label_count = @PluralTranslation(
 *     singular = "@count comment",
 *     plural = "@count comments",
 *   ),
 *   bundle_label = @Translation("Comment type"),
 *   handlers = {
 *     "storage" = "Drupal\\comment\\CommentStorage",
 *     "storage_schema" = "Drupal\\comment\\CommentStorageSchema",
 *     "access" = "Drupal\\comment\\CommentAccessControlHandler",
 *     "list_builder" = "Drupal\\Core\\Entity\\EntityListBuilder",
 *     "view_builder" = "Drupal\\comment\\CommentViewBuilder",
 *     "views_data" = "Drupal\\comment\\CommentViewsData",
 *     "form" = {
 *       "default" = "Drupal\\comment\\CommentForm",
 *       "delete" = "Drupal\\comment\\Form\\DeleteForm"
 *     },
 *     "translation" = "Drupal\\comment\\CommentTranslationHandler"
 *   },
 *   base_table = "comment",
 *   data_table = "comment_field_data",
 *   uri_callback = "comment_uri",
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "cid",
 *     "bundle" = "comment_type",
 *     "label" = "subject",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid",
 *     "published" = "status",
 *     "owner" = "uid",
 *   },
 *   links = {
 *     "canonical" = "/comment/{comment}",
 *     "delete-form" = "/comment/{comment}/delete",
 *     "delete-multiple-form" = "/admin/content/comment/delete",
 *     "edit-form" = "/comment/{comment}/edit",
 *     "create" = "/comment",
 *   },
 *   bundle_entity_type = "comment_type",
 *   field_ui_base_route  = "entity.comment_type.edit_form",
 *   constraints = {
 *     "CommentName" = {}
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73b01459fd93e9cf396a784431744014' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for accessing changed time.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b633f65c8181657140df4f760777b710' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the timestamp of the last entity change across all translations.
   *
   * @return int
   *   The timestamp of the last entity save operation across all
   *   translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getChangedTimeAcrossTranslations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13d71e10a59f953bd29aaa25ea035689' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the timestamp of the last entity change for the current translation.
   *
   * @return int
   *   The timestamp of the last entity save operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getChangedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '257d6f9e69e525c646d36c5a73b3c5b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the timestamp of the last entity change for the current translation.
   *
   * @param int $timestamp
   *   The timestamp of the last entity save operation.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setChangedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2caedfd428c83394ecfa501297988af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for entities that have an owner.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '728f72ae3acf44569018d97166e63ad7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of base field definitions for entity owners.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type to add the owner field to.
   *
   * @return \\Drupal\\Core\\Field\\BaseFieldDefinition[]
   *   An array of base field definitions.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException
   *   Thrown when the entity type does not implement EntityOwnerInterface or
   *   if it does not have an "owner" entity key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'ownerBaseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e044bf398fa95082a454159811ded9ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64a313434ed49c127f7e7bf08bee58e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1a8fa2e0e287c8c3d8d591712049f3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '240c4e1bd5b9b1c81fd8f32e723e2e8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed9b9b2dc5bd17023af3fbcc86e12eef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'owner\' base field.
   *
   * @return mixed
   *   A default value for the owner field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getDefaultEntityOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b35192205a04b2a48b7421343f050d03' => 
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
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8fc8b5c74c32210c8e601eee74b7c70' => 
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
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'publishedBaseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd158be7540a20430fe88ea35384e4606' => 
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
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'isPublished',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '606faa756b0ecf5b458714e7c688c5be' => 
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
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setPublished',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be29bde6023c36a91593faa9634d1db8' => 
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
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setUnpublished',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42a3c8c8b17c097765b10e3c3cd8c56e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The thread for which a lock was acquired.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7dc4565fd5dbfcc618a062021b09ed03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b29d0de6b1854f41e749caafa55de5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a40f80846c4a1326db015d75d7718b35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Release the lock acquired for the thread in preSave().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'releaseThreadLock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acf9805d29ac830bfb0948d589b443fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c59bbb3518aac45476b8a2323c6a4f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'referencedEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2caf8b73a2ed4d0d52a38667d0d3574e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'permalink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5efb8a8406bfca83a3608e21693ba55d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2632b47d158e41c025228ee65148ee25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\BaseFieldDefinition[] $fields */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0aa5f067f0ed8c06828375d871f39a99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'bundleFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c460e0bd61185c06e7aa760f95d48f4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'hasParentComment',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5f7d1c987f8fad2736a19c9a5bc3442' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getParentComment',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d15443530b55a6aa5d385185c173a6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getCommentedEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6494be540c25987e362d6d4c4ff39e4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getCommentedEntityId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97c9bcc534c7407eb0009850363a14d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getCommentedEntityTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d87cb8591de2a1db5e262310621cd4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setFieldName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f536e7123fbaaada4e7dde91e2af5c57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getFieldName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bcfefca3834e25714e5fa412db96b86b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getSubject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0a6ebc926b7dcfb1862ab7b57a0c96a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setSubject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af007b645d6e582ee603299c4dde3887' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getAuthorName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c324c29d4bc421a21c21897c25e23b40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setAuthorName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0146ff5d70e9db4ce48a5ceb22a76a9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getAuthorEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8e8b0925dc905b6ebbd9fa14abfd146' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getHomepage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ae52c39e74a6b8ec9cd4cc22abb85ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setHomepage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebca3d8749ecc0cd8756cbdf0c93de7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getHostname',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '924ef9d0e89ee1d5fe31748a7b2dc873' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setHostname',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5532516ed6e2dc4154a740f83085fbdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '040122e7cb07ce1c90b92fcf7efd0c01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33f1c95baee8066fed790908dec751e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '048eb2c8b3e58cd4849213caaa8243af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getThread',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d6cbee97858b49858732512699356d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'setThread',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bc28e26fffe3b8d9c970000e47bf7f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48ee2baafe8419bd1c905c3fb3340c5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48e2d43ff3bcb79ee5139c1b1a6b4013' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the comment type ID for this comment.
   *
   * @return string
   *   The ID of the comment type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa77496ff5e690504d7a2f3e8de2d23c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'status\' base field definition.
   *
   * @see ::baseFieldDefinitions()
   *
   * @return bool
   *   TRUE if the comment should be published, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getDefaultStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33fde3ee353ef6473b96bc1aeb724caa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default value for entity hostname base field.
   *
   * @return string
   *   The client host name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'number' => 'Drupal\\Component\\Utility\\Number',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'commentinterface' => 'Drupal\\comment\\CommentInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\comment\\Entity\\Comment',
         'functionName' => 'getDefaultHostname',
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