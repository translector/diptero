<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/MediaTypeInterface.php-1594234425',
   'data' => 
  array (
    '41d2dcf01c823dfa952ece606a96bb0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a media type entity.
 *
 * Media types are bundles for media items. They are used to group media with
 * the same semantics. Media types are not about where media comes from. They
 * are about the semantics that media has in the context of a given Drupal site.
 *
 * Media sources, on the other hand, are aware where media comes from and know
 * how to represent and handle it in Drupal\'s context. They are aware of the low
 * level details, while the media types don\'t care about them at all. That said,
 * media types can not exist without media sources.
 *
 * Consider the following examples:
 * - oEmbed media source which can represent any oEmbed resource. Media types
 *   that could be used with this source are "Videos", "Charts", "Music", etc.
 *   All of them are retrieved using the same protocol, but they represent very
 *   different things.
 * - Media sources that represent files could be used with media types like
 *   "Invoices", "Subtitles", "Meeting notes", etc. They are all files stored on
 *   some kind of storage, but their meaning and uses in a Drupal site are
 *   different.
 *
 * @see \\Drupal\\media\\MediaSourceInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\media\\MediaTypeInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37dbf5693277cf4890ab0baf3d924c92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether thumbnail downloads are queued.
   *
   * When using remote media sources, the thumbnail generation could be a slow
   * process. Using a queue allows for this process to be handled in the
   * background.
   *
   * @return bool
   *   TRUE if thumbnails are queued for download later, FALSE if they should be
   *   downloaded now.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\media\\MediaTypeInterface',
         'functionName' => 'thumbnailDownloadsAreQueued',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '160a1dc58647750896e897895bb8e6e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a flag to indicate that thumbnails should be downloaded via a queue.
   *
   * @param bool $queue_thumbnail_downloads
   *   The queue downloads flag.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\media\\MediaTypeInterface',
         'functionName' => 'setQueueThumbnailDownloadsStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05ca790c726e8d9a0c9e7fa9bf4cd0e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the media source plugin.
   *
   * @return \\Drupal\\media\\MediaSourceInterface
   *   The media source.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\media\\MediaTypeInterface',
         'functionName' => 'getSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09f88de35e7faeb9d278d956e6b3646f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether new revisions should be created by default.
   *
   * @param bool $new_revision
   *   TRUE if media items of this type should create new revisions by default.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\media\\MediaTypeInterface',
         'functionName' => 'setNewRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff8be40d22d984930323077ff9ece4e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the metadata field map.
   *
   * Field mapping allows site builders to map media item-related metadata to
   * entity fields. This information will be used when saving a given media item
   * and if metadata values will be available they are going to be automatically
   * copied to the corresponding entity fields.
   *
   * @return array
   *   Field mapping array provided by media source with metadata attribute
   *   names as keys and entity field names as values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\media\\MediaTypeInterface',
         'functionName' => 'getFieldMap',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '684ed0cd8ee5fb40dbb34d0a0bea547a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the metadata field map.
   *
   * @param array $map
   *   Field mapping array with metadata attribute names as keys and entity
   *   field names as values.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\media\\MediaTypeInterface',
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