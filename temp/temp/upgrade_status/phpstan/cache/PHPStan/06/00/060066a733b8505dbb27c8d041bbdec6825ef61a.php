<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/Entity/MediaType.php-1594234425',
   'data' => 
  array (
    'fe027abe0a3c6376bc850fbd94377074' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the Media type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "media_type",
 *   label = @Translation("Media type"),
 *   label_collection = @Translation("Media types"),
 *   label_singular = @Translation("media type"),
 *   label_plural = @Translation("media types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count media type",
 *     plural = "@count media types"
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\media\\MediaTypeAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\\media\\MediaTypeForm",
 *       "edit" = "Drupal\\media\\MediaTypeForm",
 *       "delete" = "Drupal\\media\\Form\\MediaTypeDeleteConfirmForm"
 *     },
 *     "list_builder" = "Drupal\\media\\MediaTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer media types",
 *   config_prefix = "type",
 *   bundle_of = "media",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "status" = "status",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "description",
 *     "source",
 *     "queue_thumbnail_downloads",
 *     "new_revision",
 *     "source_configuration",
 *     "field_map",
 *     "status",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/media/add",
 *     "edit-form" = "/admin/structure/media/manage/{media_type}",
 *     "delete-form" = "/admin/structure/media/manage/{media_type}/delete",
 *     "collection" = "/admin/structure/media",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb6ce45198d6c61e4cb8cb7b773d87d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The machine name of this media type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'debded82579a64907cb0abd95178d572' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The human-readable name of the media type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a159ec8237d03fc913a1eac5d45bad2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A brief description of this media type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd198ff487c215feca8beeca65f6783ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The media source ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71d2f5306be3eb1aa7a656082a3b5645' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether media items should be published by default.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f628916bf3098adf45e1e148d70c146' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether thumbnail downloads are queued.
   *
   * @var bool
   *
   * @see \\Drupal\\media\\MediaTypeInterface::thumbnailDownloadsAreQueued()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4582f7d49b7c1e39ec7041429cd6bd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value of the \'Create new revision\' checkbox of this media type.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '195c3ad42c4c5ae18086bfaefecdb3b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The media source configuration.
   *
   * A media source can provide a configuration form with source plugin-specific
   * configuration settings, which must at least include a source_field element
   * containing a the name of the source field for the media type. The source
   * configuration is defined by, and used to load, the source plugin. See
   * \\Drupal\\media\\MediaTypeInterface for an explanation of media sources.
   *
   * @var array
   *
   * @see \\Drupal\\media\\MediaTypeInterface::getSource()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'deca308417669f6d95377779daa282fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Lazy collection for the media source.
   *
   * @var \\Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af0b52f7dc799f035971392377746a1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The metadata field map.
   *
   * @var array
   *
   * @see \\Drupal\\media\\MediaTypeInterface::getFieldMap()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bddd81494cdb50779a061075836d7fd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'getPluginCollections',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31a215158937b0f6eacf9cf258909940' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69bd64e042cf420c37a5eccc3d66ee31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'setDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e9fee95f1fadd14f98f322bc2dbf776' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'thumbnailDownloadsAreQueued',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28b15e4d28143059ec692559d63cae27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'setQueueThumbnailDownloadsStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a708f3d880a015ba2e2aec213f653fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'getSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0503a829ee87feb956b7762c20b3bdc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns media source lazy plugin collection.
   *
   * @return \\Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection|null
   *   The tag plugin collection or NULL if the plugin ID was not set yet.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'sourcePluginCollection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b32798007f090d6b62bbdcd7b05f01b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'getStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43ea69889df88787e3b3425b7fce7ed2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'shouldCreateNewRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19037769fdfc2ee7135eec76747b0877' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'setNewRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '931f0182af69aa69747efb4c2700d86d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'getFieldMap',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e957f78b3b761b0f850c8d1d6c83e22b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'defaultsinglelazyplugincollection' => 'Drupal\\Core\\Plugin\\DefaultSingleLazyPluginCollection',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
        ),
         'className' => 'Drupal\\media\\Entity\\MediaType',
         'functionName' => 'setFieldMap',
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