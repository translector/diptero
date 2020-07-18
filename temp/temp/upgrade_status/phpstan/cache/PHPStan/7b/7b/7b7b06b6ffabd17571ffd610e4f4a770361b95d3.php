<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/crop/src/Entity/CropType.php-1585251611',
   'data' => 
  array (
    '3cf1d3e64acdcd02924e866298140153' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the Crop type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "crop_type",
 *   label = @Translation("Crop type"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\\crop\\Form\\CropTypeForm",
 *       "edit" = "Drupal\\crop\\Form\\CropTypeForm",
 *       "delete" = "Drupal\\crop\\Form\\CropTypeDeleteForm"
 *     },
 *     "list_builder" = "Drupal\\crop\\CropTypeListBuilder",
 *   },
 *   admin_permission = "administer crop types",
 *   config_prefix = "type",
 *   bundle_of = "crop",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/media/crop/manage/{crop_type}",
 *     "delete-form" = "/admin/config/media/crop/manage/{crop_type}/delete",
 *   },
 *   constraints = {
 *     "CropTypeMachineNameValidation" = {},
 *     "CropTypeAspectRatioValidation" = {},
 *   },
 *    config_export = {
 *     "id",
 *     "label",
 *     "description",
 *     "aspect_ratio",
 *     "soft_limit_width",
 *     "soft_limit_height",
 *     "hard_limit_width",
 *     "hard_limit_height",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81ff627321f4c5472b856f8be9631cd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The machine name of this crop type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1c8b156a3929d844053a4acd0dff478' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The human-readable name of the crop type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9bc4d973b8db5a4b8bc19d57e754669' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A brief description of this crop type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0371bf5d7fc7503a53844b8c485b6360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ratio of the image of this crop type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23481052cf23997ed314e960e8b41893' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Soft limit width in px.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12e1e70feed70a85f8ee8462c89352c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Soft limit height in px.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b574b63fd4c0fa5b0c890b61b6664f6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Hard limit width in px.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a810f6e77a902f1018511213df8d5d84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Hard limit height in px.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6dfd8e265ae8115a7ca62a780d263810' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => 'id',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41dcd95e3eb698388cfd759ee1bce0c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => 'getAspectRatio',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da03a284ad246893a49b0a92ce7e31ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1da584152417f7f650f492c54f33106' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => 'getIterator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '896b1d9c7dd332190bd38db4ca7f9193' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => 'getCropTypeNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46061cc2f0099ea7270d48621eb842b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => 'getSoftLimit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2b86c9590f02804762daffcab9a31c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'croptypeinterface' => 'Drupal\\crop\\CropTypeInterface',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\crop\\Entity\\CropType',
         'functionName' => 'getHardLimit',
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