<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_submission_export_import/src/WebformSubmissionExportImportImporter.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '0d868498a6fb91c02add6babc6d37096' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform submission export importer.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac1d80aba7d29d21f719f62aad733b1c' => 
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
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db49e057b060986ac7eecfd3241e4591' => 
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
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0a0acafbe1380c1eb1bb8d072f59d59' => 
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
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc4a2f598211b8e5aa6a3427d1db8f00' => 
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
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ac13aa7718777f9abdf2b11ca6d261a' => 
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
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55921584937b717fc314d77c6aa80791' => 
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
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af034e92f2fd0ed82cec09e7a2a120e1' => 
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
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ed72875eeef2c296e25cbad238c5abd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration object factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04a0cc8bd7f194f738e9dd2bb09250ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger factory.
   *
   * @var \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a959d76328d860410f0cb86fa01c503' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9a956b14129d8b5a8c82f08e93586dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission storage.
   *
   * @var \\Drupal\\webform\\WebformSubmissionStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e00c515b00365d3ee0f559e5b145597c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b354eaf2b9c9429ab9228895a1095c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform.
   *
   * @var \\Drupal\\webform\\WebformInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64a75cbecf24cc6b09e26ee0b51fcc13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source entity.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ea5c8bd4c2446072fe2e3bba8e97f91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The import file URI.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c54089a8961d2e3f3d3e5ac9cd0a94a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The total number of records being imported.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0d7975c1b171138fae1c7c4af1bb6a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Import options.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc378c2ccb1f10661729419c3ca73b68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array containing webform element names.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '120b64c63fe925a86d1650ef5284ff8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array containing a webform\'s field definition names.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7604e917ebe5afacf559c1743b33870d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The file system service.
   *
   * @var \\Drupal\\Core\\File\\FileSystemInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ec2a24f692c8993db6ca53763f260f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformSubmissionExportImport object.
   *
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface $logger_factory
   *   The logger factory.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager
   *   The webform element manager.
   * @param \\Drupal\\Core\\File\\FileSystemInterface $file_system
   *   The file system service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5cf12953f46f02d5ddf8d82ad62ecb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'setWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e4c40be8adb3fc6979072234af9839f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b17c816c0ac23c13807f9872b3b6a7de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'setSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b79b68ca298860e969ba2a9bb5e0c305' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13ef535518274ffd29fe7a29f8a463d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getImportUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac29815d894401c44678f9df5d28f464' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'setImportUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e57f735758fe0161a76db40f2a3386e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'deleteImportUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '389df7217aa92c93271936f9cf949877' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getImportOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5089759abf7d2b257a9a9e2dea51af18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'setImportOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d384ce3c0487ebd0c51d777a7027d80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getImportOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78bcfa6017723282ce5b8508e3af0d9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getDefaultImportOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f03ec41696df583c835951748db50dfd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b111b0fcd113096db37caa1e5cfa14b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d0f1f797cc77df810a1f6e380fad228' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'exportHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3af77d25692d656659fdb8f6be378c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'exportSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eab599c798102f12d63bd15b709bc860' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileInterface $files */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'exportSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fe6eacd7307d9b1031752b7cb1c09a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'import',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10d650433ce73d54bcb8c7b63983edd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Map source (CSV) record to destination (submission) records.
   *
   * @param array $record
   *   The source (CSV) record.
   *
   * @return array
   *   The destination (submission) records.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importMapRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c940fe825a0d6b191175356abe0207db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Load import submission record via UUID or token.
   *
   * @param array $record
   *   The import submission record.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface|null
   *   The existing webform submission or NULL if no existing submission found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importLoadSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d34f0416654e9367ba29f5fc2a3488d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepare import submission record.
   *
   * @param array $record
   *   The import submission record.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   The existing webform submission.
   *
   * @return array
   *   An array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importPrepareRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d7e1f4170ca4faf4bc53bcbc7210342' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Import element.
   *
   * @param array $element
   *   A managed file element.
   * @param mixed $value
   *   File URI(s) from CSV record.
   * @param \\Drupal\\webform\\WebformSubmissionInterface|null $webform_submission
   *   Existing submission or NULL if new submission.
   * @param array $errors
   *   An array of error messages.
   *
   * @return array|int|null
   *   An array of multiple files, single file id, or NULL if file could
   *   not be imported.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '331ff1ba0f80f9e226811b9d8849d2f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Import managed file element.
   *
   * @param array $element
   *   A managed file element.
   * @param mixed $value
   *   File URI(s) from CSV record.
   * @param \\Drupal\\webform\\WebformSubmissionInterface|null $webform_submission
   *   Existing submission or NULL if new submission.
   * @param array $errors
   *   An array of error messages.
   *
   * @return array|int|null
   *   An array of multiple files, single file id, or NULL if file could
   *   not be imported.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importManageFileElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc09dfdce79422f91d0f8fcec2a458b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Import entity reference element.
   *
   * @param array $element
   *   A managed file element.
   * @param mixed $value
   *   File URI(s) from CSV record.
   * @param \\Drupal\\webform\\WebformSubmissionInterface|null $webform_submission
   *   Existing submission or NULL if new submission.
   * @param array $errors
   *   An array of error messages.
   *
   * @return array|int|null
   *   An array of entity ids, a single entity id, or NULL if entity ids
   *   could not be imported.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importEntityReferenceElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2c2c368fd1d32e2b4c816f3c53578a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Import composite element.
   *
   * @param array $element
   *   A composite element.
   * @param mixed $value
   *   File URI(s) from CSV record.
   * @param \\Drupal\\webform\\WebformSubmissionInterface|null $webform_submission
   *   Existing submission or NULL if new submission.
   * @param array $errors
   *   An array of error messages.
   *
   * @return array
   *   An array of composite element data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importCompositeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b9c83f9044220bfd6c24b5f7c4c588b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Import multiple element.
   *
   * @param array $element
   *   An element with multiple values.
   * @param mixed $value
   *   File URI(s) from CSV record.
   * @param \\Drupal\\webform\\WebformSubmissionInterface|null $webform_submission
   *   Existing submission or NULL if new submission.
   * @param array $errors
   *   An array of error messages.
   *
   * @return array
   *   An array of multiple values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importMultipleElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75b2d0b9087809f2bb8909e92948f383' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate import record submission.
   *
   * @param array $record
   *   The record to be imported.
   *
   * @return array
   *   An array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importValidateRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffc2b8c95c38ff1cd25553e17a60c8f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Save import record submission.
   *
   * @param array $record
   *   The record to be imported.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   The existing webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importSaveSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0122ec0e3ec1a88286377efe8e7408cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Convert CSV records to entity values.
   *
   * @param array $record
   *   The record to be imported.
   *
   * @return array
   *   The CSV records converted to entity values.
   *
   * @see \\Drupal\\webform\\Entity\\WebformSubmission::preCreate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'importConvertRecordToValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9867b58405f539bcc0552cb3bbc0335' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getTotal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8dbbc6f55d56e365574d6fbf2b84069' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getSourceColumns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f01c64d54f8b4f4efa9b1fc1705cebf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getDestinationColumns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a333643fc3482b191b13918ad5ecf01a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getSourceToDestinationColumnMapping',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a17725c4f739953021db3fa1ad07ddaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getBatchLimit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd11acffee5a0adaceb1dd673f42c9f5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'requiresBatch',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2e90e44aea255bfb1fe302f20bcc17d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an entity\'s export id or UUID based on the export options.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   An entity.
   * @param array $export_options
   *   Export options.
   *
   * @return string|int
   *   The entity\'s id or UUID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getEntityExportId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cdc0b7c2b9649bfe64da5d450f1fb1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an entity\'s import internal id.
   *
   * @param string $entity_type
   *   The entity type.
   * @param string $entity_id
   *   The entity id or UUID.
   *
   * @return int|string|null
   *   An entity\'s internal id. NULL if an entity\'s internal id
   *   can\'t be determined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'getEntityImportId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54577a7d19ffa40dd5814b8f6eec1a49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Export value so that it can be editted in Excel and Google Sheets.
   *
   * @param string $value
   *   A value.
   *
   * @return string
   *   A value that it can be editted in Excel and Googl Sheets.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformlikert' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformLikert',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'uploadedfile' => 'Symfony\\Component\\HttpFoundation\\File\\UploadedFile',
          'dumper' => 'Symfony\\Component\\Yaml\\Dumper',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporter',
         'functionName' => 'exportValue',
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