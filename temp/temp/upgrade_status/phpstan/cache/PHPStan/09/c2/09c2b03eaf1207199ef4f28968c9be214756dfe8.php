<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Entity/Webform.php-1594241402,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '1b3affe043584e3f055e5d592c3955ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the webform entity.
 *
 * @ConfigEntityType(
 *   id = "webform",
 *   label = @Translation("Webform"),
 *   label_collection = @Translation("Webforms"),
 *   label_singular = @Translation("webform"),
 *   label_plural = @Translation("webforms"),
 *   label_count = @PluralTranslation(
 *     singular = "@count webform",
 *     plural = "@count webforms",
 *   ),
 *   handlers = {
 *     "storage" = "\\Drupal\\webform\\WebformEntityStorage",
 *     "view_builder" = "Drupal\\webform\\WebformEntityViewBuilder",
 *     "list_builder" = "Drupal\\webform\\WebformEntityListBuilder",
 *     "access" = "Drupal\\webform\\WebformEntityAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\\webform\\WebformEntityAddForm",
 *       "duplicate" = "Drupal\\webform\\WebformEntityAddForm",
 *       "delete" = "Drupal\\webform\\WebformEntityDeleteForm",
 *       "edit" = "Drupal\\webform\\WebformEntityElementsForm",
 *       "export" = "Drupal\\webform\\WebformEntityExportForm",
 *       "settings" = "Drupal\\webform\\EntitySettings\\WebformEntitySettingsGeneralForm",
 *       "settings_form" = "Drupal\\webform\\EntitySettings\\WebformEntitySettingsFormForm",
 *       "settings_submissions" = "Drupal\\webform\\EntitySettings\\WebformEntitySettingsSubmissionsForm",
 *       "settings_confirmation" = "Drupal\\webform\\EntitySettings\\WebformEntitySettingsConfirmationForm",
 *       "settings_assets" = "Drupal\\webform\\EntitySettings\\WebformEntitySettingsAssetsForm",
 *       "settings_access" = "Drupal\\webform\\EntitySettings\\WebformEntitySettingsAccessForm",
 *       "handlers" = "Drupal\\webform\\WebformEntityHandlersForm",
 *       "variants" = "Drupal\\webform\\WebformEntityVariantsForm",
 *     }
 *   },
 *   admin_permission = "administer webform",
 *   bundle_of = "webform_submission",
 *   static_cache = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "title",
 *   },
 *   links = {
 *     "canonical" = "/webform/{webform}",
 *     "access-denied" = "/webform/{webform}/access-denied",
 *     "submissions" = "/webform/{webform}/submissions",
 *     "add-form" = "/webform/{webform}",
 *     "edit-form" = "/admin/structure/webform/manage/{webform}/elements",
 *     "test-form" = "/webform/{webform}/test",
 *     "duplicate-form" = "/admin/structure/webform/manage/{webform}/duplicate",
 *     "delete-form" = "/admin/structure/webform/manage/{webform}/delete",
 *     "export-form" = "/admin/structure/webform/manage/{webform}/export",
 *     "settings" = "/admin/structure/webform/manage/{webform}/settings",
 *     "settings-form" = "/admin/structure/webform/manage/{webform}/settings/form",
 *     "settings-submissions" = "/admin/structure/webform/manage/{webform}/settings/submissions",
 *     "settings-confirmation" = "/admin/structure/webform/manage/{webform}/settings/confirmation",
 *     "settings-assets" = "/admin/structure/webform/manage/{webform}/settings/assets",
 *     "settings-access" = "/admin/structure/webform/manage/{webform}/settings/access",
 *     "handlers" = "/admin/structure/webform/manage/{webform}/handlers",
 *     "variants" = "/admin/structure/webform/manage/{webform}/variants",
 *     "results-submissions" = "/admin/structure/webform/manage/{webform}/results/submissions",
 *     "results-export" = "/admin/structure/webform/manage/{webform}/results/download",
 *     "results-log" = "/admin/structure/webform/manage/{webform}/results/log",
 *     "results-clear" = "/admin/structure/webform/manage/{webform}/results/clear",
 *     "collection" = "/admin/structure/webform",
 *   },
 *   config_export = {
 *     "status",
 *     "open",
 *     "close",
 *     "weight",
 *     "uid",
 *     "template",
 *     "archive",
 *     "id",
 *     "uuid",
 *     "title",
 *     "description",
 *     "category",
 *     "elements",
 *     "css",
 *     "javascript",
 *     "settings",
 *     "access",
 *     "handlers",
 *     "variants",
 *     "third_party_settings",
 *   },
 *   lookup_keys = {
 *     "status",
 *     "template",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc481bea0bcdafa818cc877aa03cfca6' => 
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
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c681cff739d2c5c7885ab03a0db22de' => 
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
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8197d248b0f2356dadabeeec605a30ef' => 
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
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bcbf4818ec856178b24433cdb0b1f834' => 
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
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf68763f23102a76d3448a991f9b8608' => 
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
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da63857f4e8fb23d3fb9ff87638d6d4d' => 
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
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '978568382a2d91979266d1e69a33467e' => 
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
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0277440b4fcdd06c2dbe6ce34fee96a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12556f2ff13d18be7c249e2f888be628' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform UUID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98273676371e6c631a1d2d25cefba34d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform\'s current operation.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '138e99a6bdd7226e19c53fd0da91191c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform override state.
   *
   * When set to TRUE the webform can\'t not be saved.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00e00b78e0c2f8991a14a25221933586' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform status.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df963935d48d8a22b109b932e4e680a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform open date/time.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de98b8ff088c55b98fc4b5fee1c8271a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform close date/time.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '197b051ab3423a78e4f63cd3f28a3cfa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform weight.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '493c5f2d7bd46e88499fe3c0e8b218a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform template indicator.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be32602fa54beeef3be86644c2656222' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform archive indicator.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8b2fab2995b7d2f6b511660d3221b27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform title.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a4b93e16a822e87f1ce4af3a08efc35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform description.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a46bdcc59c4cd190b13a17df3a029c92' => 
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
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd0e7a490beb6b829866912a8587a647' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The owner\'s uid.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84e1ab61060b8ce5e960ce9e6e6fac23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform settings.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7776c0042daf89f38c02fb696934a99d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform settings original.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f018fdb810aa70e168714d50f3a5173f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access controls.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ebdb81c7c7b037f3069589f9e774fc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform elements.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28ee3d3f7b4160caa43ecc4693480262' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The CSS style sheet.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd886f41a799e99633b36c4bce5b6b236' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The JavaScript.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cae2b33e02a23e5a86571d6ace28fe11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The array of webform handlers for this webform.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fe3dbac42ebcf764aa52b604a2dc8d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the collection of webform handlers that are used by this webform.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformHandlerPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ce24bd048073fcac26e1cb414bad330' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The array of webform variants for this webform.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efeb9cac60c3a4ba74333138a2aa4a33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the collection of webform variants that are used by this webform.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformVariantsPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f1adad185ac3ce1f0e667bc1d8e0836' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform elements original.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15a0d9eb6a1ec7e2c1acdb3a8f8e3036' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform elements decoded.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '128ab811a258a3239da946488be8c314' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform elements initializes (and decoded).
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51aaea519227db30e9a56f273a8b567a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform elements decoded and flattened.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '669659ed539a2027f670fe95e31e5468' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform elements initialized and flattened.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70e8d32cc496641e2f6a85f7fc250855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform elements initialized, flattened, and has value.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '109332fa41941d367d4bdb9719814075' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform elements translations.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1aa54b50d9a426021291fa01ffb189f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track the elements that are prepopulated.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c15ded47b8644b082c1a77bd97cb70ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track the elements that are \'webform_actions\' (aka submit buttons).
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7dbdc6ea5f30706d18752571e0989e50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track the elements that are \'webform_pages\' (aka Wizard pages).
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04171b63afb0c6f666e77cf36b3efcda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track managed file elements.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '158b2afc0143fd943efba44f3b26fa68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track attachment elements.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6540ad4c2cef94104bff5eec4cee847c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track computed elements.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66eecc30fb268e9dc9da0e0434d1eb1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track variant elements.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0e2218af3d4912f29e5ea8643841ef9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track elements CSS.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f582d4633e9101249e3e78e4c0806639' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track elements JavaScript.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad8d2be13609e392e2c456b84438d2a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A webform\'s default data extracted from each element\'s default value or value.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60753a0852c76ffc01c2ff89980e0617' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform pages.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '389f11aed7430f0dfebc13cd923c4488' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track if the webform is using a flexbox layout.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa990c6580f1226fb12d592775011903' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track if the webform has container.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4198ab02cf29fadaf983838531b82843' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track if the webform has conditions (i.e. #states).
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19a71637d319e9f3e148c8eb4495601b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track if the webform has required elements.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a44b90a27b4e2f0483412adbe1ea2b3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track if the webform has translations.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e297aa525ff14dfcb767ab00d7b46088' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track if the webform has message handler.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9f47ce7e749d41f976dfc5498d77735' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track if a webform handler requires anonymous submission tracking .
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '240d8b57edb0f8d9bd52d695d10603fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e53190b764a6a6911d63f02d3b16fb22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afed1b299348119aa1c1d2c98a5bd5b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8545178c061b0a822723602d38d71b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the entity owner\'s user entity.
   *
   * @param \\Drupal\\user\\UserInterface $account
   *   The owner user entity.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb3eab80429fc7e15c3d775a8e118aa4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32b64cec4d08c852163ccb183ffa1c60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab5b2b028ae501314142ec2af64a6ee8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getOperation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e1bba49de0b8634206794e60196ef6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setOperation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7261d925da8df039e0f8873779b15ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a2e285e3369af5a56f33fc192e2c416' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setOverride',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '872e359480ddc77e97c410eafe89b34f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isOverridden',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a71250930c079503c321eb2150e88f59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4f07313c3498e781e16097314ad6e27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'status',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f001f52d94c9b16000c9f51e85216f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isOpen',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4e6a13c040ca0be41c318daf34d8798' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isClosed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3babb1b716787f079755cab00f4a6ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isScheduled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cdf0bec89d0506e288d2748176c02eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isOpening',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16536018a548e9a4a22f295ee755971d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isTemplate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23d004dbe2c1a0a198abae10bd66ec0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isArchived',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2ddd9367ce038aa5ac304c068c6501b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isConfidential',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c46827b2426b7a04b5cc8a393679979' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasRemoteAddr',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55efee5b81f43491e61362df3b4a4315' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isResultsDisabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b827015825c42eaf4727e0833184454b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasSubmissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3124b91802dbc848d6bae835126e558f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionStorageInterface $submission_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasSubmissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fc7e54b96f9a3e73614c4c11931a6ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasSubmissionLog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a574c437303052d45c43c62e375ecf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasTranslations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aec69e9228eb96b8654207fa31549503' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\locale\\LocaleConfigManager $local_config_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasTranslations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f5ab10b842febac0d95759ec038341e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4b3c3bea8040ebb8b3e826a0f2a0a63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasManagedFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '003a7b1523f1e6c354ba5f8ce5d05d91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasAttachments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e338aaea867803ff4cc058bc3b6a8d6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasComputed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ce2eefd3cd5ef6bacbd55a9ace80244' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasVariants',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2f2a71ecf8324e6c7a24ecf6eecd3be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasFlexboxLayout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2c60f080a93f1e0f85657d1ddb60b7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7006db2c79795124a5983917273181f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '302eec784ae40903381f9bc3812a96cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasRequired',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3cbbb0c78eb6a66d6d92558f9b7cfce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasActions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20549511881bd81b57d652e80094eff0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getNumberOfActions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '654c550260aad7cf7072d5082f1f8e17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasPreview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69a3ddf3c32fdd35fe1e8e8d4d417974' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasWizardPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fc6bfd36866d2d73cab5fcd9f977633' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getNumberOfWizardPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d1f0cf3d16d1d8f5aa6bfd6630fafa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d16d50e1d84725a134892ca909f53cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '486e231a54f3d2ccfb90d955b1f4f648' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getAssets',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a387e3d8f854acc6cfb4848526a4da8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getCss',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2d1157b513cfde688e5838ec905a266' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setCss',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac6d2f32d760d3562bba001ab97258c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getJavaScript',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76f0cda186de9227e0530f59ba747f4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setJavaScript',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6373c2af45a97dcc3d4aed05df224cda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7b3b4fbe302e70da2d5934d3c27c092' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eea140c6ed4e0480c86faf2f0ccc535c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af0c17b362562ea647257b9a81df9c59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cef1bd0a6485a61be7ac03d5b9e4d7f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'resetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8648f2ccac3adb1cdfd9d0597e0bb4d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setSettingsOverride',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c8fd64411d36f2ff4db0c2e8899d3be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setSettingOverride',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ede58e7b072e9c20f6a5d5223055fec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setPropertyOverride',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '050fb8ad504e5da278a6fbcd96a67cb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getAccessRules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16f947ddfc1699d810688b81ca6a7b08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setAccessRules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '781b9fd05cd52ab5fe07086ce27a7481' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getDefaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96981e700d6ff831761deeeeb5debaf3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getSubmissionForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cb6a051a48bbd2b5242ead5664d98bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getSubmissionForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3aadd9e7fdf98e8e11b45410a5b80c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsOriginalRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '670cf01524f29814f69a536b4b0c243f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsOriginalDecoded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a023c9948a4b2697604c1549856297f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df5f749e21e267c332b6c391e3c49c02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsDecoded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6aa5681fe67cbad240697b189327bf11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsInitialized',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbd3ec9e32f32d016a63da631a59768c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsInitializedAndFlattened',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7fa26c8f9e257751ea2414e0101effa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsDecodedAndFlattened',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b8b1139fb4b9684fe0cc7f4cf8fcf83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsInitializedFlattenedAndHasValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05ebe74951d02d3e0663b1cfcbbbe594' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsManagedFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39b967b7a223409d182993a306c36bda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsAttachments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a93cad41d5298bfc196e4ee14a72899' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsComputed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b930129ef871a1afcfe61d7e1890999' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsVariant',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e30a87c1b635c8a8f333a386d686d4d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check operation access for each element.
   *
   * @param string $operation
   *   (optional) The operation that is to be performed on the element.
   * @param array $elements
   *   An associative array of flattened form elements.
   *
   * @return array
   *   An associative array of flattened form elements with each element\'s
   *   operation access checked.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'checkElementsFlattenedAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0eef5c328f7698b4972158bb594bb664' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'checkElementsFlattenedAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4598640363532e4cb04679595a9fb34e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsSelectorOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83a3d52012d28ce7a12a3b9cef3fa875' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsSelectorOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dfafbd58b56dffb18e38ed2c5c7e78f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsSelectorSourceValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '118ff923bb60f8ec93e95133981cea65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsSelectorSourceValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10019c2ed20dc329cd65628dd2e15a16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsPrepopulate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4775278cd05cb50ca3b5346962442b18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementsDefaultData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0123f4c866bbeb098361299741deff55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5368210c3c1530071aa83338446f67d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize parse webform elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'initElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '157c50194f8cefeab5f2236b9fb7ca02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformTranslationManagerInterface $translation_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'initElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6a732d7c740250633152cb3c780b19e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'initElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '820150af2528f9a334eaf39e0c0d0997' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reset parsed and cached webform elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'resetElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91b64051612f59c28b2ed7225551b698' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize webform elements into a flatten array.
   *
   * @param array $elements
   *   The webform elements.
   * @param string $parent
   *   The parent key.
   * @param int $depth
   *   The element\'s depth.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'initElementsRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83a14dfd0e30f28035f783c9eed24c81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'initElementsRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b3744a7a55426afc1dd68f950a01ec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53144f8673c86a2d252cde79cff751f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementDecoded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8892577efa56a3b7b076ed4679f0ef40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getElementInitialized',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4259127f4bd1dca6c9d9b136c4ed1a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setElementProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b619fb2f5889834cead286a4b0233fd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set element properties.
   *
   * @param array $elements
   *   An associative nested array of elements.
   * @param string $key
   *   The element\'s key.
   * @param array $properties
   *   An associative array of properties.
   * @param string $parent_key
   *   (optional) The element\'s parent key. Only used for new elements.
   *
   * @return bool
   *   TRUE when the element\'s properties has been set. FALSE when the element
   *   has not been found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setElementPropertiesRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7dbac5e31f38d1ab2b2fea39f6d5e74b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'deleteElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cf5aaee6c6608f6ad0a7c166559e1e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Remove an element by key from a render array.
   *
   * @param array $elements
   *   An associative nested array of elements.
   * @param string $key
   *   The element\'s key.
   *
   * @return bool|array
   *   An array containing the deleted element and sub element keys.
   *   FALSE is no sub elements are found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'deleteElementRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '882bf72b9728f2f22946c74f84504fd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Collect sub element keys from a render array.
   *
   * @param array $sub_element_keys
   *   An array to be populated with sub element keys.
   * @param array $elements
   *   A render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'collectSubElementKeysRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0dac43843392887e325b216096c0f966' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a71a8f5cff9453cb2472d82bec894f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionConditionsValidatorInterface $constraint_validator */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60868f5654c2b0ac434f685526cd7284' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build and cache a webform\'s wizard pages based on the current operation.
   *
   * @param string $operation
   *   The webform submission operation.
   *   Usually \'default\', \'add\', \'edit\', \'edit_all\', \'api\', or \'test\'.
   *
   * @return array
   *   An associative array of webform wizard pages.
   *
   * @see \\Drupal\\webform_cards\\WebformCardsManager::buildPages
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'buildPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae6d6b79870e1105e5d659cec8537296' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'buildPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a248e228e444b5eb37deff5f37bab57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementInterface $element_plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'buildPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '416dbd58e04f5f64fe787800da440a2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72acbe8e0269939bc4bc56be7e821a3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'createDuplicate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6734606735a5d633344daab69bc16553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $duplicate */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'createDuplicate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16028e5ec3ce37320f214e93b49b3449' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3da47be8748462902e6d52ab40bb6007' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformAccessRulesManagerInterface $access_rules_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cefc5047f88d37fadb3259eeee0dd29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'postLoad',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2bd914e908783322cc8e1940016efb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72534fcb217f880d2b086e18434570a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface[] $entities */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '330ae897ddae5742c24222a4bf9bc290' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserDataInterface $user_data */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23688ab76a9091d88bd30e28c4087449' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '919fa8fa49bb821ae450a6f2e40dd482' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getCacheContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8266239660511c829be86cb86ba5ea82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getCacheMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '998e6a32300d2bdec7bfc0f100f364e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28c3c3c195f69021bff68afdf657aa2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4453fb79abc2ea03893ea5939ae67a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e833e937a4e4201d47913ee768c7cde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'updatePaths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26d209428c2625bc0c56d5aa8ec420a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'deletePaths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c505168d27e47534c159c06a67d6594' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves a path alias to the database.
   *
   * @param string $source
   *   The internal system path.
   * @param string $alias
   *   The URL alias.
   * @param string $langcode
   *   (optional) The language code of the alias.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'updatePath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a695f80e53aa9dd8c06ba686e25f74f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\path_alias\\PathAliasInterface $path_alias */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'updatePath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18340bd8f26daeba9660f94742e5394e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getPluginCollections',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9cbb9b89eab56a73bcf28cac04231b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the webform handler plugin manager.
   *
   * @return \\Drupal\\Component\\Plugin\\PluginManagerInterface
   *   The webform handler plugin manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getWebformHandlerPluginManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02c1989464e152448cd783bd6264ddca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reset cached handler settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'resetHandlers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '655cf32b9199c810cd17d26726ac12d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasMessageHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf7a15035aea37ea803a98743617a8c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasAnonymousSubmissionTrackingHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '849ed016a537a7906624a5c63719a117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53c652b966aaf5b348f5fd85bac4c038' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getHandlers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db7690458f2b27556a38fe1ab69ce556' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformHandlerBase $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getHandlers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efebfc83664b11e807096e61e2e4a268' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformHandlerPluginCollection $handlers */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getHandlers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6bc20906e21f6088891008820940116' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'addWebformHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab85426dd1590bdf8ddd2dc4acc82d7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'updateWebformHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8a98ec51d7bb701fc2eb3db98aaf5fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'deleteWebformHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f76fc1b8355083cddee6448e5c0df88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'invokeHandlers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68be68552bab309e2800d58f2c46cb8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Access\\AccessResultInterface $result */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'invokeHandlers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '784ebf4b8bd3f5e171b768fb4cba6c53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if a webform handler is enabled.
   *
   * @param \\Drupal\\webform\\Plugin\\WebformHandlerInterface $handler
   *   A webform handler.
   * @param \\Drupal\\webform\\WebformSubmissionInterface|null $webform_submission
   *   A webform submission.
   *
   * @return bool
   *   TRUE if a webform handler is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isHandlerEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ec6330438eab209b5bb6435b502a273' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alter a webform handler when it is invoked.
   *
   * @param \\Drupal\\webform\\Plugin\\WebformHandlerInterface $handler
   *   A webform handler.
   * @param string $method_name
   *   The handler method to be invoked.
   * @param array $args
   *   Array of arguments being passed to the handler\'s method.
   *
   * @see hook_webform_handler_invoke_alter()
   * @see hook_webform_handler_invoke_METHOD_NAME_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'invokeHandlerAlter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dda1a9006881e3f773077879a9a530d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'invokeElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5224c6e7bb16e05ab6251d82f812ee4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'invokeElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e7fb0885ae574ff0d6b55fe057ad862' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the webform variant plugin manager.
   *
   * @return \\Drupal\\Component\\Plugin\\PluginManagerInterface
   *   The webform variant plugin manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getWebformVariantPluginManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca3ecdff4b7c48ffd236d8f937da182e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasVariant',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd62d792e782209af229ff07679ffa93f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getVariant',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd358c3297d96aeed2082a82dc0b5dfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getVariants',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b58f984d7ac72b74d71a295b5d741108' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformVariantBase $variant */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getVariants',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b0fc5dfc4a860809136b99d9c9a199a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformVariantPluginCollection $variants */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getVariants',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '977c365ef5b449fd016b8b917a847d80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'addWebformVariant',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1b2fbddd84c02664137ddbabb14ea1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'updateWebformVariant',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b85e95b1b4a601d65a8944085be6087e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'deleteWebformVariant',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d990f0fee480d61295ecee25a77adef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'applyVariants',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c34241009a7bcc325976caa9a82387e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getVariantsData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52466238ef0dcccd7b713102f3b8e4d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Apply webform variant.
   *
   * @param string $element_key
   *   The variant element key.
   * @param string $instance_id
   *   The variant instance id.
   * @param bool $force
   *   Apply disabled variants. Defaults to FALSE.
   *
   * @return bool
   *   Return TRUE is variant was applied.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'applyVariant',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc65f924b64587bfc26ee13c806ec7dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Overriding so that URLs pointing to webform default to \'canonical\'
   * submission webform and not the back-end \'edit-form\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'url',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6c37d6e5d0f11812a67e98cddb9cb02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Overriding so that URLs pointing to webform default to \'canonical\'
   * submission webform and not the back-end \'edit-form\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'toUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3556772a44443bc2d178100df802a6d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Overriding so that URLs pointing to webform default to \'canonical\'
   * submission webform and not the back-end \'edit-form\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'urlInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49669bf3b75b6475378b8af8b3051653' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Overriding so that links to webform default to \'canonical\' submission
   * webform and not the back-end \'edit-form\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'toLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df086371fec601eaa71f76f6f624af68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Overriding so that links to webform default to \'canonical\' submission
   * webform and not the back-end \'edit-form\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'link',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f15a0978c3fb84dd307b6300f86e5da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'isDefaultRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed7aa1b418fe082e333ef8f924aba8ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6efed0e17478dbf7301b62a0ee5d034' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b090612939baec02d5f2bc916202a5fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'deleteState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d693993b2eb84718153e7c2d3f5b2fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a69a35e40f8ef325b9429fd278763ba6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getUserData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81fac989243dc02900dfa3ec1c71fcd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserDataInterface $user_data */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getUserData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2b7604219432cf58bd73e2cbdd22a53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setUserData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a1d3c523b3ec60852bc70ae5f27af91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserDataInterface $user_data */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'setUserData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2371556fc3e0f2aed91ebbaccdd334da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'deleteUserData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad420ad92319ea0ff6cdf1c23f93e33d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserDataInterface $user_data */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'deleteUserData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc76f36e7b41eb67d073aecd7cce9efd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasUserData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a402a60e7e4b24fee20faab734797233' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserDataInterface $user_data */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'hasUserData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53d65dea2438ac87202596aaf11ea9d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56f53d5163bcf5dfacf6baa3b79a493c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'sort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '333bef32b21b7e6632f743fec0b24b3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Define empty array iterator.
   *
   * See: Issue #2759267: Undefined method Webform::getIterator().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => 'getIterator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf30c5d0b605715188d4d39738c7787c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Define empty to string method.
   *
   * See: Issue #2926903: Devel Tokens tab Broken when Webform Embedded in Node.
   *
   * @see https://www.drupal.org/project/webform/issues/2926903
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'configentitybundlebase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBundleBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webformactions' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformActions',
          'webformwizardpage' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformWizardPage',
          'webformelementassetinterface' => 'Drupal\\webform\\Plugin\\WebformElementAssetInterface',
          'webformelementattachmentinterface' => 'Drupal\\webform\\Plugin\\WebformElementAttachmentInterface',
          'webformelementcomputedinterface' => 'Drupal\\webform\\Plugin\\WebformElementComputedInterface',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformvariantinterface' => 'Drupal\\webform\\Plugin\\WebformVariantInterface',
          'webformvariantplugincollection' => 'Drupal\\webform\\Plugin\\WebformVariantPluginCollection',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformhandlerplugincollection' => 'Drupal\\webform\\Plugin\\WebformHandlerPluginCollection',
          'webformtexthelper' => 'Drupal\\webform\\Utility\\WebformTextHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformexception' => 'Drupal\\webform\\WebformException',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\Webform',
         'functionName' => '__toString',
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