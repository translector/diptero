<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/Entity/ParagraphsType.php-1590060906',
   'data' => 
  array (
    '3f7add335674f189825430cdda833cbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the ParagraphsType entity.
 *
 * @ConfigEntityType(
 *   id = "paragraphs_type",
 *   label = @Translation("Paragraphs type"),
 *   label_collection = @Translation("Paragraphs types"),
 *   label_singular = @Translation("Paragraphs type"),
 *   label_plural = @Translation("Paragraphs types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count Paragraphs type",
 *     plural = "@count Paragraphs types",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\paragraphs\\ParagraphsTypeAccessControlHandler",
 *     "list_builder" = "Drupal\\paragraphs\\Controller\\ParagraphsTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\paragraphs\\Form\\ParagraphsTypeForm",
 *       "edit" = "Drupal\\paragraphs\\Form\\ParagraphsTypeForm",
 *       "delete" = "Drupal\\paragraphs\\Form\\ParagraphsTypeDeleteConfirm"
 *     }
 *   },
 *   config_prefix = "paragraphs_type",
 *   admin_permission = "administer paragraphs types",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "icon_uuid",
 *     "icon_default",
 *     "description",
 *     "behavior_plugins",
 *   },
 *   bundle_of = "paragraph",
 *   links = {
 *     "edit-form" = "/admin/structure/paragraphs_type/{paragraphs_type}",
 *     "delete-form" = "/admin/structure/paragraphs_type/{paragraphs_type}/delete",
 *     "collection" = "/admin/structure/paragraphs_type",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bcbb26d7ff6d7a7fb718a920937861ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ParagraphsType ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f4da495fa9f5299714625cf574660ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ParagraphsType label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83d63b1ba1610e11e9784c9e201d7bbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A brief description of this paragraph type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb872e6ed35711165fe58c8917217970' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * UUID of the Paragraphs type icon file.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f697001a194826eee1fb965517c8b9d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default icon encoded as data URL scheme (RFC 2397).
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd51d907da6cf90ac6d8506ea14376ac7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The Paragraphs type behavior plugins configuration keyed by their id.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72fb9c8483570353c3026c355c43dca2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the collection of behavior plugins that are attached to this
   * Paragraphs type.
   *
   * @var \\Drupal\\paragraphs\\ParagraphsBehaviorCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94d53765f688c3e53492ff4f770b8479' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Restores the icon file from the default icon value.
   *
   * @return \\Drupal\\file\\FileInterface|bool
   *   The icon\'s file entity or FALSE if no default icon set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'restoreDefaultIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b7cc4a555922cc860720d64614a2f52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'getIconFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de4f8a7534fe73c7c8c6cc06ee8e27e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'getBehaviorPlugins',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b585bd7b363b7e81877373b4b675000d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'getIconUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b6d396be2e1adf2504228b02ad1c26d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'getBehaviorPlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6259ffea1fbec1d8163bb77e2e106f61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61c616690a981528e5dd5f0f01d8babd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cd191a1b8f6993973246d2c39660b87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Component\\Plugin\\PluginInspectionInterface $plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '343ca820006f24c8b2d044f3ec51ef4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'getEnabledBehaviorPlugins',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1936d932cdcfdcaad9366fb258069598' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'getPluginCollections',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '395f19ce668a52cd63fea83d907f1ee5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e3369ca6576dc78b99a181b067b5b5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'hasEnabledBehaviorPlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83feb9258adfc9c926b1f7e6ad041a6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\paragraphs\\ParagraphsBehaviorInterface $plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'hasEnabledBehaviorPlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f81ae529b0821b9fe3bded93b8e94c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bc74985840784a304215882f3151b8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the file entity defined by the UUID.
   *
   * @param string $uuid
   *   The file entity\'s UUID.
   *
   * @return \\Drupal\\file\\FileInterface|null
   *   The file entity. NULL if the UUID is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'getFileByUuid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33ae1ada8b8fc0f1199ff575af0fe80a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the icon file usage information.
   *
   * @param \\Drupal\\file\\FileInterface|mixed $new_icon
   *   The new icon file, FALSE on deletion.
   * @param \\Drupal\\file\\FileInterface|mixed $old_icon
   *   (optional) Old icon, on update or deletion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'updateFileIconUsage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6013f2ece61d4480311e00554703cbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileUsage\\FileUsageInterface $file_usage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'paragraphsbehaviorcollection' => 'Drupal\\paragraphs\\ParagraphsBehaviorCollection',
          'paragraphstypeinterface' => 'Drupal\\paragraphs\\ParagraphsTypeInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
        ),
         'className' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
         'functionName' => 'updateFileIconUsage',
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