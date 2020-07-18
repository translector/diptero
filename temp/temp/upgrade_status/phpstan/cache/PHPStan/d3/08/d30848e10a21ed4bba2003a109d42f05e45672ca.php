<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/responsive_image/src/Entity/ResponsiveImageStyle.php-1594234425',
   'data' => 
  array (
    '0015510d8024cc3499ea8eab9fc4673c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the responsive image style entity.
 *
 * @ConfigEntityType(
 *   id = "responsive_image_style",
 *   label = @Translation("Responsive image style"),
 *   label_collection = @Translation("Responsive image styles"),
 *   label_singular = @Translation("responsive image style"),
 *   label_plural = @Translation("responsive image styles"),
 *   label_count = @PluralTranslation(
 *     singular = "@count responsive image style",
 *     plural = "@count responsive image styles",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\\responsive_image\\ResponsiveImageStyleListBuilder",
 *     "form" = {
 *       "edit" = "Drupal\\responsive_image\\ResponsiveImageStyleForm",
 *       "add" = "Drupal\\responsive_image\\ResponsiveImageStyleForm",
 *       "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm",
 *       "duplicate" = "Drupal\\responsive_image\\ResponsiveImageStyleForm"
 *     }
 *   },
 *   admin_permission = "administer responsive images",
 *   config_prefix = "styles",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "image_style_mappings",
 *     "breakpoint_group",
 *     "fallback_image_style",
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/media/responsive-image-style/{responsive_image_style}",
 *     "duplicate-form" = "/admin/config/media/responsive-image-style/{responsive_image_style}/duplicate",
 *     "delete-form" = "/admin/config/media/responsive-image-style/{responsive_image_style}/delete",
 *     "collection" = "/admin/config/media/responsive-image-style",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9635bbe4cc5e4c84a7418e9d811bd97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The responsive image ID (machine name).
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e66ed34a9c2582e6190fabe62fc125ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The responsive image label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe05d31a6d0c73f55fb4bd96e92148e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The image style mappings.
   *
   * Each image style mapping array contains the following keys:
   *   - image_mapping_type: Either \'image_style\' or \'sizes\'.
   *   - image_mapping:
   *     - If image_mapping_type is \'image_style\', the image style ID (a
   *       string).
   *     - If image_mapping_type is \'sizes\', an array with following keys:
   *       - sizes: The value for the \'sizes\' attribute.
   *       - sizes_image_styles: The image styles to use for the \'srcset\'
   *         attribute.
   *   - breakpoint_id: The breakpoint ID for this image style mapping.
   *   - multiplier: The multiplier for this image style mapping.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f53a0219ec08ab47822fe83e89e7ce0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd70143992d64d849a5c94d2a9321083d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The responsive image breakpoint group.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '751e1c19462a831b41ea6c7fe426a3c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The fallback image style.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2aee330604bc925521df45992856b838' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5cb45dcf4535f0596f61efee61fd486b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'addImageStyleMapping',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c8064ec947c59428900971a0a1cb563' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'hasImageStyleMappings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8e4e1e4983ed5570e5f0abff060dc5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'getKeyedImageStyleMappings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cdb4d315860d81fd8c0813330338429' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'getImageStyleMappings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58a8a970bdce50191c86ff4e25f8885e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'setBreakpointGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '520e9957e4d690b584a0bef4a4eb9b7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'getBreakpointGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7441659ccc80000f0d627efe1b059396' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'setFallbackImageStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77b3d9d0037ee9a393619e0087775aa9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'getFallbackImageStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96b7e1b8ee862cd72939fd14f04aa5b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'removeImageStyleMappings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b27b2410fea849be22a32c5db0eb1a8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92b666c28a74a535aa54e73b29887473' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'isEmptyImageStyleMapping',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57bbc4da8c2441dc5be958e1ad1d7ad9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'getImageStyleMapping',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9927cb49cfc0ea6abe8e43752a8b77c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
        ),
         'className' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
         'functionName' => 'getImageStyleIds',
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