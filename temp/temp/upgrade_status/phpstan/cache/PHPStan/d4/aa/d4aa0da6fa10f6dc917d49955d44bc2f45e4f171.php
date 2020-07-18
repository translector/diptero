<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/block_content/src/Entity/BlockContentType.php-1594234425',
   'data' => 
  array (
    'cac79eb82330c8e4afc6894f51ddda1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom block type entity.
 *
 * @ConfigEntityType(
 *   id = "block_content_type",
 *   label = @Translation("Custom block type"),
 *   label_collection = @Translation("Custom block library"),
 *   label_singular = @Translation("custom block type"),
 *   label_plural = @Translation("custom block types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count custom block type",
 *     plural = "@count custom block types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "default" = "Drupal\\block_content\\BlockContentTypeForm",
 *       "add" = "Drupal\\block_content\\BlockContentTypeForm",
 *       "edit" = "Drupal\\block_content\\BlockContentTypeForm",
 *       "delete" = "Drupal\\block_content\\Form\\BlockContentTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\\Core\\Entity\\Routing\\AdminHtmlRouteProvider"
 *     },
 *     "list_builder" = "Drupal\\block_content\\BlockContentTypeListBuilder"
 *   },
 *   admin_permission = "administer blocks",
 *   config_prefix = "type",
 *   bundle_of = "block_content",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   links = {
 *     "delete-form" = "/admin/structure/block/block-content/manage/{block_content_type}/delete",
 *     "edit-form" = "/admin/structure/block/block-content/manage/{block_content_type}",
 *     "collection" = "/admin/structure/block/block-content/types",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "revision",
 *     "description",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'blockcontenttypeinterface' => 'Drupal\\block_content\\BlockContentTypeInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e21762c383ded82aaa85dc6c911aede' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom block type ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'blockcontenttypeinterface' => 'Drupal\\block_content\\BlockContentTypeInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4928ba8a99079cbe4d88c53f7ce58493' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom block type label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'blockcontenttypeinterface' => 'Drupal\\block_content\\BlockContentTypeInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6155267aba308603b26b67c72436fbc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default revision setting for custom blocks of this type.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'blockcontenttypeinterface' => 'Drupal\\block_content\\BlockContentTypeInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4cc0dc9f89c4839218eefcc9b26596fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The description of the block type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'blockcontenttypeinterface' => 'Drupal\\block_content\\BlockContentTypeInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3af9481e9ce9c03e8359495b162c5a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'blockcontenttypeinterface' => 'Drupal\\block_content\\BlockContentTypeInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContentType',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ea69624f18bb841b6a6eed02446ccee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'blockcontenttypeinterface' => 'Drupal\\block_content\\BlockContentTypeInterface',
        ),
         'className' => 'Drupal\\block_content\\Entity\\BlockContentType',
         'functionName' => 'shouldCreateNewRevision',
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