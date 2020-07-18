<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_options_custom/src/Entity/WebformOptionsCustom.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'fcb84b6876e33d4c17ad911cdabb38fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the webform options custom entity.
 *
 * @ConfigEntityType(
 *   id = "webform_options_custom",
 *   label = @Translation("Webform options custom"),
 *   label_collection = @Translation("Custom options"),
 *   label_singular = @Translation("custom options"),
 *   label_plural = @Translation("custom options"),
 *   label_count = @PluralTranslation(
 *     singular = "@count custom options",
 *     plural = "@count custom options",
 *   ),
 *   handlers = {
 *     "storage" = "\\Drupal\\webform_options_custom\\WebformOptionsCustomStorage",
 *     "access" = "Drupal\\webform_options_custom\\WebformOptionsCustomAccessControlHandler",
 *     "list_builder" = "Drupal\\webform_options_custom\\WebformOptionsCustomListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\webform_options_custom\\WebformOptionsCustomForm",
 *       "edit" = "Drupal\\webform_options_custom\\WebformOptionsCustomForm",
 *       "source" = "Drupal\\webform_options_custom\\WebformOptionsCustomForm",
 *       "preview" = "Drupal\\webform_options_custom\\WebformOptionsCustomForm",
 *       "duplicate" = "Drupal\\webform_options_custom\\WebformOptionsCustomForm",
 *       "delete" = "Drupal\\webform_options_custom\\WebformOptionsCustomDeleteForm",
 *     }
 *   },
 *   admin_permission = "administer webform",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/webform/options/custom/manage/add",
 *     "edit-form" = "/admin/structure/webform/options/custom/manage/{webform_options_custom}/edit",
 *     "source-form" = "/admin/structure/webform/options/custom/manage/{webform_options_custom}/source",
 *     "duplicate-form" = "/admin/structure/webform/options/custom/manage/{webform_options_custom}/duplicate",
 *     "delete-form" = "/admin/structure/webform/options/custom/manage/{webform_options_custom}/delete",
 *     "collection" = "/admin/structure/webform/options/custom/manage",
 *   },
 *   config_export = {
 *     "id",
 *     "uuid",
 *     "label",
 *     "description",
 *     "help",
 *     "category",
 *     "type",
 *     "template",
 *     "url",
 *     "css",
 *     "javascript",
 *     "options",
 *     "value_attributes",
 *     "text_attributes",
 *     "fill",
 *     "zoom",
 *     "tooltip",
 *     "show_select",
 *     "element",
 *     "entity_reference",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc544bfeae3b6512db6a52e94f943c84' => 
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
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0f24c6e5f367abddb045444151252f5' => 
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
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b6a2e639c9f1cfbdf997d68967f4b1c' => 
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
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2172a363cbc118fd89890ea99954a861' => 
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
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1331e9a4761ab19848d193dc091221ad' => 
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
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36255f165d19c387404ff0e3f6ae60cd' => 
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
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d89b5c00c0eb73109a01e406442c83c' => 
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
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c93b263828737a410938e2f7da4a1e74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom options ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ad15d080fdcfac928b1208eb4c5aed6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom options UUID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c62935867471321751833b1542672f32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom options label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'baad61afb8a6eb3b1900f17b93adc4a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom options description.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '814136def3d6d94edbd77485594ff004' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom options help.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99f9ce6d47fea580dc17dedc6db175b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom options category.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '840da4eb7234c79d96203c9843c11b4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The type of custom options.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e35da9c0ee06d6d5fdc69ec654c8f38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom HTML/SVG markup.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a9eb9603094b4b68c44b98228f470b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom HTML/SVG URL.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bfacc3a49056abab8e0485d8fae4d30b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The option value attribute names.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3214dca14e6a2187ac6fbe96edfbd1c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The option text attribute names.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '185ae2457190385e99c313ff3ddc612e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allow SVG to be filled using CSS.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9f2dac975db93721156d10c0fc5d992' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enable SVG pan and zoom.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fba907c1c3b7c178ad6c25816808a418' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Display text and description in a tooltip.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b33a4dd26e1a6e15d5d67f36990d7b40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Hide select menu.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a61073770866b422ced1350ae8bce011' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Use custom options as a webform select element.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd644b8a2599925324fa5c2090d54f4c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Use custom options as a webform entity reference element.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c1dafcc98b3b35ea4c122b2aec61a48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The CSS style sheet.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c9b415a3f41ffd2e70d86d919ebef2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The JavaScript.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '839f242ed6558f0131f4734a9b8f6eb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom options.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88b0de5b00d86dd729b2771b50fee922' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom options decoded.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '820c4db521d5a1f5af2019c06c4af57a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a43d114f80b55c59eb62532dba8e5f26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2594e94d3770fdacee7e6ec55f64756b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set a custom options element HTML/SVG template.
   *
   * @return string
   *   A custom options element HTML/SVG template.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'getTemplate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22073d4436aaceabc070cd4576af48c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set a custom options element template URL.
   *
   * @return string
   *   A custom options element template URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'getUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d1a27ae4607412ea53724d202a9d415' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'getElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56d59c876338fa54727e781bf0ce39a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'getPreview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a16f9d688302b67a83af6fb37248026' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get template custom options.
   *
   * @return array
   *   A templates custom options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'getTemplateOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8076f9d1d20ddd22cfe61e03e5a1416e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0eebb90feded05fa71fdcbd0cc6ead66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd6b1d7f731b9ddc7f21750a60af0907' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionscustomelement' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
         'functionName' => 'sort',
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