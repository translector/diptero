<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/block_content/src/BlockContentInterface.php-1594234425',
   'data' => 
  array (
    'c8a5c6a1409bcae9a182c380600d6e0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a custom block entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5472ba50ba1fcce6ac9e24f318b68548' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the block revision log message.
   *
   * @return string
   *   The revision log message.
   *
   * @deprecated in drupal:8.2.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\Entity\\RevisionLogInterface::getRevisionLogMessage() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => 'getRevisionLog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '848ac3c5ddfc0dc5e8533a4928fad3ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the block description.
   *
   * @param string $info
   *   The block description.
   *
   * @return $this
   *   The class instance that this method is called on.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => 'setInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc9baf189f181604105d84ac74bd5890' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the block revision log message.
   *
   * @param string $revision_log
   *   The revision log message.
   *
   * @return $this
   *   The class instance that this method is called on.
   *
   * @deprecated in drupal:8.2.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\Entity\\RevisionLogInterface::setRevisionLogMessage() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => 'setRevisionLog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90a1f2cd7eed756832b5711f965978c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the block is reusable or not.
   *
   * @return bool
   *   Returns TRUE if reusable and FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => 'isReusable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '572b6c55a8f6357146c96903a416a1db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the block to be reusable.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => 'setReusable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0044ac4010c56e090ab9ef25f24a8cf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the block to be non-reusable.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => 'setNonReusable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e60d27f1f1c7f184ac2c244a4c32847' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the theme value.
   *
   * When creating a new block content block from the block library, the user is
   * redirected to the configure form for that block in the given theme. The
   * theme is stored against the block when the block content add form is shown.
   *
   * @param string $theme
   *   The theme name.
   *
   * @return $this
   *   The class instance that this method is called on.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => 'setTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '417200ddae06cd0f32843db49eeabe5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the theme value.
   *
   * When creating a new block content block from the block library, the user is
   * redirected to the configure form for that block in the given theme. The
   * theme is stored against the block when the block content add form is shown.
   *
   * @return string
   *   The theme name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => 'getTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11337b7543aec96b26c9edd5e9265a05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the configured instances of this custom block.
   *
   * @return array
   *   Array of Drupal\\block\\Core\\Plugin\\Entity\\Block entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content',
         'uses' => 
        array (
          'refinabledependentaccessinterface' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
        ),
         'className' => 'Drupal\\block_content\\BlockContentInterface',
         'functionName' => 'getInstances',
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