<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Entity/WebformSubmission.php-1594241402,/var/www/html/web/core/lib/Drupal/Core/Entity/EntityChangedTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'cf5500807e098ad413d1d55360bd6bb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the WebformSubmission entity.
 *
 * @ingroup webform
 *
 * @ContentEntityType(
 *   id = "webform_submission",
 *   label = @Translation("Webform submission"),
 *   label_collection = @Translation("Submissions"),
 *   label_singular = @Translation("submission"),
 *   label_plural = @Translation("submissions"),
 *   label_count = @PluralTranslation(
 *     singular = "@count submission",
 *     plural = "@count submissions",
 *   ),
 *   bundle_label = @Translation("Webform"),
 *   handlers = {
 *     "storage" = "Drupal\\webform\\WebformSubmissionStorage",
 *     "storage_schema" = "Drupal\\webform\\WebformSubmissionStorageSchema",
 *     "views_data" = "Drupal\\webform\\WebformSubmissionViewsData",
 *     "view_builder" = "Drupal\\webform\\WebformSubmissionViewBuilder",
 *     "list_builder" = "Drupal\\webform\\WebformSubmissionListBuilder",
 *     "access" = "Drupal\\webform\\WebformSubmissionAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\\webform\\WebformSubmissionForm",
 *       "edit" = "Drupal\\webform\\WebformSubmissionForm",
 *       "edit_all" = "Drupal\\webform\\WebformSubmissionForm",
 *       "api" = "Drupal\\webform\\WebformSubmissionForm",
 *       "test" = "Drupal\\webform\\WebformSubmissionForm",
 *       "notes" = "Drupal\\webform\\WebformSubmissionNotesForm",
 *       "duplicate" = "Drupal\\webform\\WebformSubmissionDuplicateForm",
 *       "delete" = "Drupal\\webform\\Form\\WebformSubmissionDeleteForm",
 *     },
 *   },
 *   bundle_entity_type = "webform",
 *   list_cache_contexts = { "user" },
 *   list_cache_tags = { "config:webform_list", "webform_submission_list" },
 *   base_table = "webform_submission",
 *   admin_permission = "administer webform",
 *   entity_keys = {
 *     "id" = "sid",
 *     "bundle" = "webform_id",
 *     "uuid" = "uuid",
 *     "langcode" = "langcode"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}",
 *     "access-denied" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}/access-denied",
 *     "table" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}/table",
 *     "text" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}/text",
 *     "yaml" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}/yaml",
 *     "edit-form" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}/edit",
 *     "notes-form" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}/notes",
 *     "resend-form" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}/resend",
 *     "duplicate-form" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}/duplicate",
 *     "delete-form" = "/admin/structure/webform/manage/{webform}/submission/{webform_submission}/delete",
 *     "collection" = "/admin/structure/webform/submissions/manage/list"
 *   },
 *   permission_granularity = "bundle"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6724fe4f3562ca350d47e979f5cd3a51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for accessing changed time.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3101d8b6a5a13abc7d130773ebe3bea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the timestamp of the last entity change across all translations.
   *
   * @return int
   *   The timestamp of the last entity save operation across all
   *   translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getChangedTimeAcrossTranslations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '430889c874b43ab795a3794425f717c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the timestamp of the last entity change for the current translation.
   *
   * @return int
   *   The timestamp of the last entity save operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getChangedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e95972c1f28db60a272b01f73912cf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the timestamp of the last entity change for the current translation.
   *
   * @param int $timestamp
   *   The timestamp of the last entity save operation.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setChangedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'feb52d874c59b23e363fdf6b8600091e' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '458c4ba40402e84c8652ae41968efed7' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea6b3a379b92d15a3926d0d6d96e7b02' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e06813a7ac1d62aa8b723bdbf859f72c' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31fe632f28cf0443eb638bb185bbf085' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79caf8511c5333f18277d2d475b40d5c' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51c675e3cb1e701a573e05434f9f7bd1' => 
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
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87f3b327b99a228c10ceeff86318eae1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Store a reference to the current temporary webform.
   *
   * @var \\Drupal\\webform\\WebformInterface
   *
   * @see \\Drupal\\webform\\WebformEntityElementsValidator::validateRendering()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '515f854bf66eeaf5dbff611ff5260701' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The data.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a3f0d51efb18fe7abc2022a672776f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reference to original data loaded before any updates.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67ea65277dc78e34f620a747295a3f68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The data with computed values.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9788a9407d8afd5682a0a9655e015ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag to indicated if submission is being converted from anonymous to authenticated.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd7450db48916ca19ce6a3e762f85717' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc231169a0c3a6ffe06f43f81c1886e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'serial',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd86ca14088828babe9648326b334e301' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb6d034ed3738f67b7ed8cd67b688591' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformTokenManagerInterface $token_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22c3cda78e43d12d5e53f5994ef1bfc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '195e3c88662ed4e5d03f61ed01c82152' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58fecd9301b8ca642437dced0ef7e099' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e91654ca4406ceb1bd128ca037b9327d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f0678ad73f0aca86b4fad7f9ee0d18f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getChangedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fdbe1247dc3fbe673b27697130460b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setChangedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50a52788d1cf70a27691602ef6a083ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getCompletedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63801f5e7ebd01663bef302d104b1f5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setCompletedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abb21ceac71436c914645e698800966f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getNotes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1de36e3a015b9cb925150cf7ec2773fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setNotes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72ccb408a4a95108546c9debd996bd16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getSticky',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab36e1283bef4b964822626a97df9c17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setSticky',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ada8bca884ad3670408214d0c52ca56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setLocked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2bde05d9319167105eaaa54843c4713' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getRemoteAddr',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb81dbcf9e27573e615d2e225847bffd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setRemoteAddr',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b429c06a0a7bb585198808416e353cfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85fe98e81760cdf130c3eb9058ec5030' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '459eee02edb295260a0b76408a888a47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getCurrentPageTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3f1d62bf5b3db4c7e5d9f63e458a57c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getElementData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f5a3221c41bd61f6949dad07991d4a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setElementData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '262556929850ab3633866e609e07a4a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getRawData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e34184b3a0b63389aaadfb78f5cecb80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aedb4dabeb0d364d0cf1d0f487ec4fde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformThemeManagerInterface $theme_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05cba899c766a0b5ce53010240e8cb1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6980d945077bd5c6653ab4da4a8ee711' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementComputedInterface $element_plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9906f08e40c2be367ff27ff9131582a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a25e7c58dea7e8bd88cd1998a2fa211' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getOriginalData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '707370c8fae0994f6770d364e87df287' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setOriginalData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f582e50154cb57784be7fdbbae556e60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getElementOriginalData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb6203c064e0c8335a899e09248d6cb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getToken',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9496ef0670cd2d1955b38842a7f8147' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45f6db06d394c4e4cb6181b31b4f937b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acc517991615b2975a530ff0274758ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getSourceUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b19b1498bea2c5e2e19ca40ea972f0bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getTokenUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3b627afdef0573b5fba139aae2df836' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformRequestInterface $request_handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getTokenUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81ba13559ae988dde6e1077b1e6af7ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'invokeWebformHandlers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19c0b6ae25fbae2ebfc9e26ebdd95667' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'invokeWebformElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fbd5bf2ed87a3f9fa871b59836aeee0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ae7281e0e7fc91f7bd6598049edbbab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80b6c2f0b5bae1dcb373f6f3acb9cc1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f37a8038a26646e6c7c6a3950740ee25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'setOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d014b9ffcd50d5a6f1033c54aa5cb94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'isDraft',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '047d2ff6271a9dfd564c8accee72c95b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'isConverting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dbbf1e728a7b3a781f5cab12a4172a60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'isCompleted',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '967b1cad3b593b7e9d6b54eb01a6618e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'isLocked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce01a5d9147a43cd99299837a5e5a457' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'isSticky',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dfed49069adb8d47061803b6283677b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'isOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24631eb984260380cbf57f56d33a92d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'hasNotes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66a26d09d072a77cc4dc0ee623175469' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9a6e0b42150cab8cbbac242668270e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'urlRouteParameters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecd58edf30bef7587ffde7f61f128c4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'createDuplicate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c74c02b31dc5333c74a3836943425b1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $duplicate */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'createDuplicate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f934dc206aa3a1875dab2a09137ec3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6352215b081f5e9d21867df802d82529' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3520731ea74d416f0580f86a105ce9e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformRequestInterface $request_handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4700e4be1ea6b27ed44ccd83694ac0c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8903395855fe1033181c82bfbbf173b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8eb456c49b66e86e4930fc691e7d4485' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9049b3845fc84b1e284379ce6ef88ee7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'save',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe4b713f48fd2cceba9ebd5d2a0b3a38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'resave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a949d345937fb67b6550513703cfaa3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'access',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a0adbce733c9b799a7a41feea59f0e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'convert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8adb0e28b9c6510b78d3e1ea4d5303ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08caf9097c49bf3c112335d4c7c10850' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'uid\' base field definition.
   *
   * @see ::baseFieldDefinitions()
   *
   * @return array
   *   An array of default values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Entity',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Entity\\WebformSubmission',
         'functionName' => 'getCurrentUserId',
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