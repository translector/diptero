<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/ParagraphInterface.php-1590060906',
   'data' => 
  array (
    'dddbd2b35cd97bc08bdf83904e194e72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a paragraphs entity.
 * @ingroup paragraphs
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7460701960a3f9f1ae264cad26e60d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the parent entity of the paragraph.
   *
   * Preserves language context with translated entities.
   *
   * @return ContentEntityInterface
   *   The parent entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'getParentEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0459e75151f25da783085b3ac6b1a232' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set the parent entity of the paragraph.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $parent
   *   The parent entity.
   * @param string $parent_field_name
   *   The parent field name.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'setParentEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87a07335cf145b9c779c3397956eeeb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a short summary for the Paragraph.
   *
   * @param array $options
   *   (optional) Array of additional options, with the following elements:
   *   - \'show_behavior_summary\': Whether the summary should contain the
   *     behavior settings. Defaults to TRUE to show behavior settings in the
   *     summary.
   *   - \'depth_limit\': Depth limit of how many nested paragraph summaries are
   *     allowed. Defaults to 1 to show nested paragraphs only on top level.
   *
   * @return string
   *   The template based summary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bdb87d00f75651b1f0462beb72be52a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the summary items of the Paragraph.
   *
   * @param array $options
   *   (optional) Array of additional options, with the following elements:
   *   - \'show_behavior_summary\': Whether the summary should contain the
   *     behavior settings. Defaults to TRUE to show behavior settings in the
   *     summary.
   *   - \'depth_limit\': Depth limit of how many nested paragraph summaries are
   *     allowed. Defaults to 1 to show nested paragraphs only on top level.
   *
   * @return array
   *   A list of summary items, grouped into the keys \'content\' and \'behaviors\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'getSummaryItems',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e542b8ccdd6c4f9f3d127cd2513deaa9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns info icons render array for a paragraph.
   *
   * @param array $options
   *   (optional) Array of additional options, with the following elements:
   *   - \'show_behavior_icon\': Whether the icons should contain the
   *     behavior settings. Defaults to TRUE to show behavior icons in the
   *     summary.
   *
   * @return array
   *   A list of render arrays that will be rendered as icons.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'getIcons',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82d8e74f4039e4553a3d9e54749a3250' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a flag whether a current revision has been changed.
   *
   * The current instance is being compared with the latest saved revision.
   *
   * @return bool
   *   TRUE in case the current revision changed. Otherwise, FALSE.
   *
   * @see \\Drupal\\Core\\Entity\\ContentEntityBase::hasTranslationChanges()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'isChanged',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c5dae79851ae107610f9046a32752c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the paragraph type / bundle name as string.
   *
   * @return string
   *   The Paragraph bundle name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'getType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2f63e002ba0682ca3f28ec4e92519b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the paragraph type.
   *
   * @return ParagraphsTypeInterface
   *   The Paragraph Type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'getParagraphType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fdf34b31a77e8f736c1d8132d5d44e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all the behavior settings.
   *
   * @return array
   *   The array of behavior settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'getAllBehaviorSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28b3f3d1e8a88cbd784785ca1655d8c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the behavior setting of an specific plugin.
   *
   * @param string $plugin_id
   *   The plugin ID for which to get the settings.
   * @param string|array $key
   *   Values are stored as a multi-dimensional associative array. If $key is a
   *   string, it will return $values[$key]. If $key is an array, each element
   *   of the array will be used as a nested key. If $key = array(\'foo\', \'bar\')
   *   it will return $values[\'foo\'][\'bar\'].
   * @param mixed $default
   *   (optional) The default value if the specified key does not exist.
   *
   * @return mixed
   *   The value for the given key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'getBehaviorSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f189fd72926ecf17873bef1273b1b29f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets all the behavior settings of a plugin.
   *
   * @param array $settings
   *   The behavior settings from the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'setAllBehaviorSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1465b970114c9e47fc96452b91ab0af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the behavior settings of a plugin.
   *
   * @param string $plugin_id
   *   The plugin ID for which to set the settings.
   * @param array $settings
   *   The behavior settings from the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs',
         'uses' => 
        array (
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\paragraphs\\ParagraphInterface',
         'functionName' => 'setBehaviorSettings',
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