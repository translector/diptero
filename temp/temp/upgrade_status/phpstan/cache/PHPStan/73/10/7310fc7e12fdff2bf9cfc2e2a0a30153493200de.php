<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_image_select/src/Entity/WebformImageSelectImages.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'c2d313f0f673763da9ec5d836403429f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the webform image select images entity.
 *
 * @ConfigEntityType(
 *   id = "webform_image_select_images",
 *   label = @Translation("Webform images"),
 *   label_collection = @Translation("Images"),
 *   label_singular = @Translation("images"),
 *   label_plural = @Translation("images"),
 *   label_count = @PluralTranslation(
 *     singular = "@count images",
 *     plural = "@count images",
 *   ),
 *   handlers = {
 *     "storage" = "\\Drupal\\webform_image_select\\WebformImageSelectImagesStorage",
 *     "access" = "Drupal\\webform_image_select\\WebformImageSelectImagesAccessControlHandler",
 *     "list_builder" = "Drupal\\webform_image_select\\WebformImageSelectImagesListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\webform_image_select\\WebformImageSelectImagesForm",
 *       "edit" = "Drupal\\webform_image_select\\WebformImageSelectImagesForm",
 *       "source" = "Drupal\\webform_image_select\\WebformImageSelectImagesForm",
 *       "duplicate" = "Drupal\\webform_image_select\\WebformImageSelectImagesForm",
 *       "delete" = "Drupal\\webform_image_select\\WebformImageSelectImagesDeleteForm",
 *     }
 *   },
 *   admin_permission = "administer webform",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/webform/options/images/manage/add",
 *     "edit-form" = "/admin/structure/webform/options/images/manage/{webform_image_select_images}/edit",
 *     "source-form" = "/admin/structure/webform/options/images/manage/{webform_image_select_images}/source",
 *     "duplicate-form" = "/admin/structure/webform/options/images/manage/{webform_image_select_images}/duplicate",
 *     "delete-form" = "/admin/structure/webform/options/images/manage/{webform_image_select_images}/delete",
 *     "collection" = "/admin/structure/webform/options/images/manage",
 *   },
 *   config_export = {
 *     "id",
 *     "uuid",
 *     "label",
 *     "category",
 *     "images",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a76f775209ade1a95d0237ac96a522d9' => 
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
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9da8307ef2eb5c51feb39c8cca7c05a1' => 
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
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c6f3145d218c694cb2fd16e8a665d56' => 
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
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3100f32f85f59b2a48fb786de55e0a90' => 
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
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2531658b169981649d88dd7df7c44a62' => 
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
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6dd76261faa7d13dbe5135367e639b2f' => 
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
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '234cc41bd434a1f58469e1219d01e6c3' => 
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
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bad8221cabaede608fb0dd66f7e592f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The images ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a974d80dab2544ff8d1ac4074a4f3c01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The images UUID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f23e056890455cc33bd479b94fc1700b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The images label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71bf884fb918f52dec7d22151c2de2dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The images category.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '974952b9cb36df7a3da965c5cda592b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The images.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18f2af4f7875d7f627b83841c2e6b530' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The images decoded.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '798ae009918821e6fbfef71ff31adc59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 'getImages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c2362231f814d9e8fca96ab5d29a2e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 'setImages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e9020edb0356feecabc62c95a3601c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85aed22f2bdc5610cebf9aa0229d4a16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 'sort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e466519596dce51ca40828b16c39875' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Entity\\WebformImageSelectImages',
         'functionName' => 'getElementImages',
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