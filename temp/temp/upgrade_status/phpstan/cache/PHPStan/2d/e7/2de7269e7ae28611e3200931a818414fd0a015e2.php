<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/modules/paragraphs_library/src/LibraryItemInterface.php-1590060906',
   'data' => 
  array (
    'c2974b8eba0f01f3972dca1a3ced78f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a paragraphs entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01d057428098741ed25fb0901524180b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a library entity from a paragraph entity.
   *
   * @param \\Drupal\\paragraphs\\ParagraphInterface $paragraph
   *   The paragraph entity.
   *
   * @throws \\Exception
   *   If a conversion is attempted for bundles that don\'t support it.
   *
   * @return \\Drupal\\paragraphs_library\\LibraryItemInterface
   *   The library item entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
         'functionName' => 'createFromParagraph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb7be2f17b9b04d4b12d597d9a560a8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the library item creation timestamp.
   *
   * @return int
   *   Creation timestamp of the library item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
         'functionName' => 'getCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96e5b9ebf3128573de0d607146d65118' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the library item creation timestamp.
   *
   * @param int $timestamp
   *   The library item creation timestamp.
   *
   * @return \\Drupal\\paragraphs_library\\LibraryItemInterface
   *   The called library item entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs_library',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'paragraphinterface' => 'Drupal\\paragraphs\\ParagraphInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\paragraphs_library\\LibraryItemInterface',
         'functionName' => 'setCreatedTime',
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