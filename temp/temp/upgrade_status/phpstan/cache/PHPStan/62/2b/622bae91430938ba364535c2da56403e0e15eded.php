<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/Entity/Media.php-1594234425,/var/www/html/web/core/modules/user/src/EntityOwnerTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '85a0597ac8bf43a68220bd5df55b3766' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the media entity class.
 *
 * @todo Remove default/fallback entity form operation when #2006348 is done.
 * @see https://www.drupal.org/node/2006348.
 *
 * @ContentEntityType(
 *   id = "media",
 *   label = @Translation("Media"),
 *   label_singular = @Translation("media item"),
 *   label_plural = @Translation("media items"),
 *   label_count = @PluralTranslation(
 *     singular = "@count media item",
 *     plural = "@count media items"
 *   ),
 *   bundle_label = @Translation("Media type"),
 *   handlers = {
 *     "storage" = "Drupal\\media\\MediaStorage",
 *     "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
 *     "list_builder" = "Drupal\\media\\MediaListBuilder",
 *     "access" = "Drupal\\media\\MediaAccessControlHandler",
 *     "form" = {
 *       "default" = "Drupal\\media\\MediaForm",
 *       "add" = "Drupal\\media\\MediaForm",
 *       "edit" = "Drupal\\media\\MediaForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm",
 *       "delete-multiple-confirm" = "Drupal\\Core\\Entity\\Form\\DeleteMultipleForm",
 *     },
 *     "views_data" = "Drupal\\media\\MediaViewsData",
 *     "route_provider" = {
 *       "html" = "Drupal\\media\\Routing\\MediaRouteProvider",
 *     }
 *   },
 *   base_table = "media",
 *   data_table = "media_field_data",
 *   revision_table = "media_revision",
 *   revision_data_table = "media_field_revision",
 *   translatable = TRUE,
 *   show_revision_ui = TRUE,
 *   entity_keys = {
 *     "id" = "mid",
 *     "revision" = "vid",
 *     "bundle" = "bundle",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid",
 *     "published" = "status",
 *     "owner" = "uid",
 *   },
 *   revision_metadata_keys = {
 *     "revision_user" = "revision_user",
 *     "revision_created" = "revision_created",
 *     "revision_log_message" = "revision_log_message",
 *   },
 *   bundle_entity_type = "media_type",
 *   permission_granularity = "bundle",
 *   admin_permission = "administer media",
 *   field_ui_base_route = "entity.media_type.edit_form",
 *   common_reference_target = TRUE,
 *   links = {
 *     "add-page" = "/media/add",
 *     "add-form" = "/media/add/{media_type}",
 *     "canonical" = "/media/{media}/edit",
 *     "collection" = "/admin/content/media",
 *     "delete-form" = "/media/{media}/delete",
 *     "delete-multiple-form" = "/media/delete",
 *     "edit-form" = "/media/{media}/edit",
 *     "revision" = "/media/{media}/revisions/{media_revision}/view",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bad7fdf35e5c4789e938a7a9fcef2866' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for entities that have an owner.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '687b5ad3440e922198d6c66f494baa29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of base field definitions for entity owners.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type to add the owner field to.
   *
   * @return \\Drupal\\Core\\Field\\BaseFieldDefinition[]
   *   An array of base field definitions.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException
   *   Thrown when the entity type does not implement EntityOwnerInterface or
   *   if it does not have an "owner" entity key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'ownerBaseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f21897d3926d3b0515e93c009d21f39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de1b9ba6f0c87174eb7f7f12cca20269' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'setOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '950420dd5b55307d2ab7d31460919d08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '869c7c99fcc85ee08b166e8f3f6bf390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'setOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca2724ec82b52edea50ae4ee25a34036' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'owner\' base field.
   *
   * @return mixed
   *   A default value for the owner field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getDefaultEntityOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85a680d5ff61de5ad50c18d92633c3a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for \\Drupal\\Core\\StringTranslation\\TranslationInterface.
 *
 * Using this trait will add t() and formatPlural() methods to the class. These
 * must be used for every translatable string, similar to how procedural code
 * must use the global functions t() and \\Drupal::translation()->formatPlural().
 * This allows string extractor tools to find translatable strings.
 *
 * If the class is capable of injecting services from the container, it should
 * inject the \'string_translation\' service and assign it to
 * $this->stringTranslation.
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface
 * @see container
 *
 * @ingroup i18n
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da8f72e1ada5840094578fca5e140641' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string translation service.
   *
   * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0263cb6fd51756eaaa25fcb2eac7e67b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a string to the current language or to a given language.
   *
   * See \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct() for
   * important security information and usage guidelines.
   *
   * In order for strings to be localized, make them available in one of the
   * ways supported by the
   * @link https://www.drupal.org/node/322729 Localization API @endlink. When
   * possible, use the \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
   * $this->t(). Otherwise create a new
   * \\Drupal\\Core\\StringTranslation\\TranslatableMarkup object.
   *
   * @param string $string
   *   A string containing the English text to translate.
   * @param array $args
   *   (optional) An associative array of replacements to make after
   *   translation. Based on the first character of the key, the value is
   *   escaped and/or themed. See
   *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
   *   details.
   * @param array $options
   *   (optional) An associative array of additional options, with the following
   *   elements:
   *   - \'langcode\' (defaults to the current language): A language code, to
   *     translate to a language other than what is used to display the page.
   *   - \'context\' (defaults to the empty context): The context the source
   *     string belongs to. See the
   *     @link i18n Internationalization topic @endlink for more information
   *     about string contexts.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   An object that, when cast to a string, returns the translated string.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct()
   *
   * @ingroup sanitization
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86fb743861c32bf142dfe558d7bef62e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a string containing a count of items.
   *
   * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface::formatPlural()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed2290a0905779816590937995f2b079' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of plurals supported by a given language.
   *
   * @see \\Drupal\\locale\\PluralFormulaInterface::getNumberOfPlurals()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fabb9b789cb6e25d2867c371975726b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the string translation service.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslationInterface
   *   The string translation service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d07a62e9bc7fa9bdce68759bbaaa889' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the string translation service to use.
   *
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $translation
   *   The string translation service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f25d3913f1074620a5b925b616e4fa1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95c5647c080ea7b2bb0dc7e21723c340' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f74ddb03d08260c0e2f03b7c8af5f03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'setName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd45a5cc7b65016e113a4508fe516722a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8299b989b702cdd06757d159eb1365ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'setCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3251c94350f2877764ce0d278a568ce2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ede9235b8ac41984ec0250f58979087' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Update the thumbnail for the media item.
   *
   * @param bool $from_queue
   *   Specifies whether the thumbnail update is triggered from the queue.
   *
   * @return \\Drupal\\media\\MediaInterface
   *   The updated media item.
   *
   * @internal
   *
   * @todo There has been some disagreement about how to handle updates to
   *   thumbnails. We need to decide on what the API will be for this.
   *   https://www.drupal.org/node/2878119
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'updateThumbnail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8cc4860b42b29bd7f4ff588a024ec46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the file entity for the thumbnail.
   *
   * If the file entity does not exist, it will be created.
   *
   * @param string $thumbnail_uri
   *   (optional) The URI of the thumbnail, used to load or create the file
   *   entity. If omitted, the default thumbnail URI will be used.
   *
   * @return \\Drupal\\file\\FileInterface
   *   The thumbnail file entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'loadThumbnail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0adf7bcc5bad6514bbc6f3253048e7a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileInterface $file */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'loadThumbnail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff0d0c64d1df893299c7624c5cd3a244' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URI of the default thumbnail.
   *
   * @return string
   *   The default thumbnail URI.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getDefaultThumbnailUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '584abe153d83b140d17698c6ce6e6559' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the queued thumbnail for the media item.
   *
   * @return \\Drupal\\media\\MediaInterface
   *   The updated media item.
   *
   * @internal
   *
   * @todo If the need arises in contrib, consider making this a public API,
   *   by adding an interface that extends MediaInterface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'updateQueuedThumbnail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d7d5614b9cb2268cf7074fc4c66366f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the URI for the thumbnail of a media item.
   *
   * If thumbnail fetching is queued, new media items will use the default
   * thumbnail, and existing media items will use the current thumbnail, until
   * the queue is processed and the updated thumbnail has been fetched.
   * Otherwise, the new thumbnail will be fetched immediately.
   *
   * @param bool $from_queue
   *   Specifies whether the thumbnail is being fetched from the queue.
   *
   * @return string
   *   The file URI for the thumbnail of the media item.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getThumbnailUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5319d50531dbc2bffa0707c5ddea3170' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the source field value has changed.
   *
   * @return bool
   *   TRUE if the source field value changed, FALSE otherwise.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'hasSourceFieldChanged',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ec4ea91d4354ff8aa0a103d2e70423c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the thumbnail should be updated for a media item.
   *
   * @param bool $is_new
   *   Specifies whether the media item is new.
   *
   * @return bool
   *   TRUE if the thumbnail should be updated, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'shouldUpdateThumbnail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80f3f308f8a35bd165014b525b7c701a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87242606f02373053d065833143eb057' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e54cbf08cc64751416c61df0000620d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'preSaveRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae148236e6cf1d30635f069ee697d50c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the media entity\'s field values from the source\'s metadata.
   *
   * Fetching the metadata could be slow (e.g., if requesting it from a remote
   * API), so this is called by \\Drupal\\media\\MediaStorage::save() prior to it
   * beginning the database transaction, whereas static::preSave() executes
   * after the transaction has already started.
   *
   * @internal
   *   Expose this as an API in
   *   https://www.drupal.org/project/drupal/issues/2992426.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'prepareSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bcfbc348f462c4b615aab85dc05d6e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8106d300dabf85ea1bf60e58a57828f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '842205e4b903c36fdd4c6751238c440c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'uid\' base field definition.
   *
   * @see ::baseFieldDefinitions()
   *
   * @deprecated The ::getCurrentUserId method is deprecated in 8.6.x and will
   *   be removed before 9.0.0.
   *
   * @return int[]
   *   An array of default values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getCurrentUserId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d640fe3c4b1172cc6b24f6149b92daf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourceentityconstraintsinterface' => 'Drupal\\media\\MediaSourceEntityConstraintsInterface',
          'mediasourcefieldconstraintsinterface' => 'Drupal\\media\\MediaSourceFieldConstraintsInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\media\\Entity\\Media',
         'functionName' => 'getRequestTime',
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