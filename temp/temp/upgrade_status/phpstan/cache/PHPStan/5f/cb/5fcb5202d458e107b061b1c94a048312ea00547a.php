<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/comment/src/Entity/CommentType.php-1594234425',
   'data' => 
  array (
    'e42149bef24e4b0d2fb2e2036f6b2c00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the comment type entity.
 *
 * @ConfigEntityType(
 *   id = "comment_type",
 *   label = @Translation("Comment type"),
 *   label_singular = @Translation("comment type"),
 *   label_plural = @Translation("comment types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count comment type",
 *     plural = "@count comment types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "default" = "Drupal\\comment\\CommentTypeForm",
 *       "add" = "Drupal\\comment\\CommentTypeForm",
 *       "edit" = "Drupal\\comment\\CommentTypeForm",
 *       "delete" = "Drupal\\comment\\Form\\CommentTypeDeleteForm"
 *     },
 *     "list_builder" = "Drupal\\comment\\CommentTypeListBuilder"
 *   },
 *   admin_permission = "administer comment types",
 *   config_prefix = "type",
 *   bundle_of = "comment",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   links = {
 *     "delete-form" = "/admin/structure/comment/manage/{comment_type}/delete",
 *     "edit-form" = "/admin/structure/comment/manage/{comment_type}",
 *     "add-form" = "/admin/structure/comment/types/add",
 *     "collection" = "/admin/structure/comment",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "target_entity_type_id",
 *     "description",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'commenttypeinterface' => 'Drupal\\comment\\CommentTypeInterface',
        ),
         'className' => 'Drupal\\comment\\Entity\\CommentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a7d3c762e0a133b3b51141c33e991d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The comment type ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'commenttypeinterface' => 'Drupal\\comment\\CommentTypeInterface',
        ),
         'className' => 'Drupal\\comment\\Entity\\CommentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d925b56e5b95bc1cdac3b7fa896fcf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The comment type label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'commenttypeinterface' => 'Drupal\\comment\\CommentTypeInterface',
        ),
         'className' => 'Drupal\\comment\\Entity\\CommentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0513cf0b963ae6d7af828c1d06731d40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The description of the comment type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'commenttypeinterface' => 'Drupal\\comment\\CommentTypeInterface',
        ),
         'className' => 'Drupal\\comment\\Entity\\CommentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86be0e13348b747244811a8360b08c8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The target entity type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'commenttypeinterface' => 'Drupal\\comment\\CommentTypeInterface',
        ),
         'className' => 'Drupal\\comment\\Entity\\CommentType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8baa694046cdf8fb07c888919cf2eaec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'commenttypeinterface' => 'Drupal\\comment\\CommentTypeInterface',
        ),
         'className' => 'Drupal\\comment\\Entity\\CommentType',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4cb550b79aad0fbc193d0967b3805443' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'commenttypeinterface' => 'Drupal\\comment\\CommentTypeInterface',
        ),
         'className' => 'Drupal\\comment\\Entity\\CommentType',
         'functionName' => 'setDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1544decdebade6552332b24881d67c2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'commenttypeinterface' => 'Drupal\\comment\\CommentTypeInterface',
        ),
         'className' => 'Drupal\\comment\\Entity\\CommentType',
         'functionName' => 'getTargetEntityTypeId',
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