<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/menu_link_content/src/Entity/MenuLinkContent.php-1594234425',
   'data' => 
  array (
    '69f8c108e4ab3b5f6c25e2b387426d5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the menu link content entity class.
 *
 * @property \\Drupal\\link\\LinkItemInterface link
 * @property \\Drupal\\Core\\Field\\FieldItemList rediscover
 *
 * @ContentEntityType(
 *   id = "menu_link_content",
 *   label = @Translation("Custom menu link"),
 *   label_collection = @Translation("Custom menu links"),
 *   label_singular = @Translation("custom menu link"),
 *   label_plural = @Translation("custom menu links"),
 *   label_count = @PluralTranslation(
 *     singular = "@count custom menu link",
 *     plural = "@count custom menu links",
 *   ),
 *   handlers = {
 *     "storage" = "\\Drupal\\menu_link_content\\MenuLinkContentStorage",
 *     "storage_schema" = "Drupal\\menu_link_content\\MenuLinkContentStorageSchema",
 *     "access" = "Drupal\\menu_link_content\\MenuLinkContentAccessControlHandler",
 *     "form" = {
 *       "default" = "Drupal\\menu_link_content\\Form\\MenuLinkContentForm",
 *       "delete" = "Drupal\\menu_link_content\\Form\\MenuLinkContentDeleteForm"
 *     }
 *   },
 *   admin_permission = "administer menu",
 *   base_table = "menu_link_content",
 *   data_table = "menu_link_content_data",
 *   revision_table = "menu_link_content_revision",
 *   revision_data_table = "menu_link_content_field_revision",
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "revision" = "revision_id",
 *     "label" = "title",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid",
 *     "bundle" = "bundle",
 *     "published" = "enabled",
 *   },
 *   revision_metadata_keys = {
 *     "revision_user" = "revision_user",
 *     "revision_created" = "revision_created",
 *     "revision_log_message" = "revision_log_message",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/menu/item/{menu_link_content}/edit",
 *     "edit-form" = "/admin/structure/menu/item/{menu_link_content}/edit",
 *     "delete-form" = "/admin/structure/menu/item/{menu_link_content}/delete",
 *   },
 *   constraints = {
 *     "MenuTreeHierarchy" = {}
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04d70ec6005db4e2dacbbc9812fd87ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A flag for whether this entity is wrapped in a plugin instance.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a77b7deca13401b1c16b4c0fd752ec8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'setInsidePlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a56d4474cb1f65247d2d615b797992c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'getTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dce076126ffb288f507e5c6d5ef95332' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'getUrlObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e24b627d0ef0cee6b7b9e4cb8acfd0a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'getMenuName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abaed6c54183a3076196e35a849b1561' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69051e5cf1eeb6fb785853fde51c7c2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'getPluginId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f8d741377b30185a7f229b33b7e858f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'isEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c485a82768d2fcde11d42be8d0ace725' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'isExpanded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7073e946d4049eb7637b9652d07c2260' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'getParentId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa8650c82f55e76a22a82baa3c6dd516' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'getWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '599550fc106c6218a9c02b0e5d1308be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'getPluginDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c69de59b1a69274f0b7a8bb9b771c7d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab00b08b5b5cfbac8090c65f4f230bf6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4be78f42b4586daedb65e5d063e003b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a5749a708d726675a3d481ffe568aaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Menu\\MenuLinkManagerInterface $menu_link_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7d0a6263688ba0e7ef4e03f9449ec08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4a8103a838c0d13a00cf22ddb01d26e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Menu\\MenuLinkManagerInterface $menu_link_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '087f76004ea348fb27e7896126007b36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\menu_link_content\\Entity\\MenuLinkContent $menu_link */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ec95fdcafdb64caad4bfb4d714c2323' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\menu_link_content\\Entity\\MenuLinkContent $child */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20f4390c1a023433e827bcaf00303656' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aabe888f55e734e61c4f4da8ba77840c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\BaseFieldDefinition[] $fields */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf7ac9042ae20f86768b0e2cb524d360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'requiresRediscovery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32efa52e50cc77cddc37dbf121cf6a00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\menu_link_content\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'linkiteminterface' => 'Drupal\\link\\LinkItemInterface',
          'menulinkcontentinterface' => 'Drupal\\menu_link_content\\MenuLinkContentInterface',
        ),
         'className' => 'Drupal\\menu_link_content\\Entity\\MenuLinkContent',
         'functionName' => 'setRequiresRediscovery',
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