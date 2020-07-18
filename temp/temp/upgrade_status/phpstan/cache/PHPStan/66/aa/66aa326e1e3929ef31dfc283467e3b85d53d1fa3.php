<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Entity/WebformOptions.php-1594241402,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'ab138f3f4debef08c9e05f7337d9c538' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the webform options entity.
 *
 * @ConfigEntityType(
 *   id = "webform_options",
 *   label = @Translation("Webform options"),
 *   label_collection = @Translation("Webform options"),
 *   label_singular = @Translation("webform options"),
 *   label_plural = @Translation("webform options"),
 *   label_count = @PluralTranslation(
 *     singular = "@count webform options",
 *     plural = "@count webform options",
 *   ),
 *   handlers = {
 *     "storage" = "\\Drupal\\webform\\WebformOptionsStorage",
 *     "access" = "Drupal\\webform\\WebformOptionsAccessControlHandler",
 *     "list_builder" = "Drupal\\webform\\WebformOptionsListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\webform\\WebformOptionsForm",
 *       "edit" = "Drupal\\webform\\WebformOptionsForm",
 *       "duplicate" = "Drupal\\webform\\WebformOptionsForm",
 *       "delete" = "Drupal\\webform\\WebformOptionsDeleteForm",
 *     }
 *   },
 *   admin_permission = "administer webform",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/webform/options/manage/add",
 *     "edit-form" = "/admin/structure/webform/options/manage/{webform_options}/edit",
 *     "duplicate-form" = "/admin/structure/webform/options/manage/{webform_options}/duplicate",
 *     "delete-form" = "/admin/structure/webform/options/manage/{webform_options}/delete",
 *     "collection" = "/admin/structure/webform/options/manage",
 *   },
 *   config_export = {
 *     "id",
 *     "uuid",
 *     "label",
 *     "category",
 *     "likert",
 *     "options",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16d1986d6ab9aaffe8917b5c363a0a7a' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eeea04831c0e182d45c5c250d428a6a3' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8a59d8427a83d63ec8583e84679a237' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21c8d71a0ed0a43aa76581847632e306' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d717299038903cdb3ed5265ab39a10c' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '018dafaeb491dceca64bf345fc33ed10' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0eb4aa48b0a1825564d01d794339b83' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c320618551d9d22ffe4f5d386ad9c09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform options ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60c56453b0294cccba2208359fc561e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform options UUID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '473cb17e194ea11820979d4265a23489' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform options label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b6dac9835f3ea88bf18a099d886e3ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform options category.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a687b2a890abf6dc5efe6cf04673c00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag to used options as likert answers.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3745da7f4c5d35aaaea9001d82667c50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform options options.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb047060194f07debd951c00c7a264f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform options decoded.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81bedc45863f688be4dca83d7b4fc842' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'isLikert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11f0498a0e61e0dc143c576d082891b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8797cb0eec05dd74a517266e6b6e007' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c97cfad42b21f052222339c68b56985b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '421031a12012a8e0215266bf25111512' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'hasAlterHooks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af66d2118662678f34c178ca15f47c94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffac785e8e733995a0c86299645abc63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '482da1b14e44d41cb7b8aedb61efd682' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'sort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '931f55648331750f194a6e990ad6059e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformOptions',
         'functionName' => 'getElementOptions',
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