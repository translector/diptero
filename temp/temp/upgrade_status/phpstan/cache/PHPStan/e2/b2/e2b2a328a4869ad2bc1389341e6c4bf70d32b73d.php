<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/crop/src/Entity/Crop.php-1585251611',
   'data' => 
  array (
    'aa7cf75a3adce3e8b3705dd143c60dcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the crop entity class.
 *
 * @ContentEntityType(
 *   id = "crop",
 *   label = @Translation("Crop"),
 *   bundle_label = @Translation("Crop type"),
 *   handlers = {
 *     "storage" = "Drupal\\crop\\CropStorage",
 *     "storage_schema" = "Drupal\\crop\\CropStorageSchema",
 *     "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
 *     "access" = "Drupal\\Core\\Entity\\EntityAccessControlHandler",
 *     "form" = {
 *       "default" = "Drupal\\Core\\Entity\\ContentEntityForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityConfirmFormBase",
 *       "edit" = "Drupal\\Core\\Entity\\ContentEntityForm"
 *     }
 *   },
 *   base_table = "crop",
 *   data_table = "crop_field_data",
 *   revision_table = "crop_revision",
 *   revision_data_table = "crop_field_revision",
 *   fieldable = TRUE,
 *   translatable = TRUE,
 *   render_cache = FALSE,
 *   entity_keys = {
 *     "id" = "cid",
 *     "bundle" = "type",
 *     "revision" = "vid",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid"
 *   },
 *   revision_metadata_keys = {
 *     "revision_timestamp" = "revision_timestamp",
 *     "revision_uid" = "revision_uid",
 *     "revision_log" = "revision_log"
 *   },
 *   bundle_entity_type = "crop_type",
 *   permission_granularity = "entity_type",
 *   admin_permission = "administer crop",
 *   links = {
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4474a630d3e96be4f6ebfe3be1be30a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of effects per image style.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '040745bd0780eefe14cd8d1f8dde1a18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'position',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c4301138d7cc080c68a959310a6d91c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'setPosition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f308ea5de73ef7ad792abe70dfc6d7c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'anchor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00830ffd07a6953a74e5bb2142d237af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'size',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fa932a79ab50ce092c344677aa4ae4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'setSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11d4c547e1893bb84f739616e377c797' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'provider',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '447333d9f88cb3c6292a30d51d5b6f52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\crop\\EntityProviderManager $plugin_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'provider',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7884a6d794762d7aeaecd3dfd1f9b853' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'cropExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c339e09c547263abcacb96b23d23ecc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'findCrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c0d8902b74d2c5df1cd7a07b5a93fb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'getCropFromImageStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f8e92079007286e0f59f38e6821cdb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'getCropFromImageStyleId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5f7c8f711838d430420a9bdfbf372af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the effects for an image style.
   *
   * @param string $image_style_id
   *   The image style ID.
   *
   * @return array[]
   *   A list of effects, keyed by plugin ID, each effect has a uuid, provider
   *   and in case of crop_crop, the type key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'getEffectsFromImageStyleId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d5fde893a7a9c179abf79f801d212e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageEffectInterface $effect */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'getEffectsFromImageStyleId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa6f012dd109e304f76cad35399b6a2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ce24e8bb884ea84a014d5e870996c73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'preSaveRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '44a0c98585211f6d00128f45915e4d5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '843ab5944de3df4116f2bdd21f536a15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
          'entityprovidernotfoundexception' => 'Drupal\\crop\\EntityProviderNotFoundException',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\Entity\\Crop',
         'functionName' => 'baseFieldDefinitions',
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