<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_scheduled_email/src/WebformScheduledEmailManager.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'd1505ed7867009c8f81a1e6f8d302d66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the webform scheduled email manager.
 *
 * @see \\Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89f81e9047664d4cfc352aa39b628d8d' => 
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
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0cd81d766dfa4324879d6ec1174311a7' => 
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
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc5396a4a0a5e165f1293c60ed548de1' => 
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
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99ba172daddd66001963351568ae811e' => 
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
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fd3869d8fd943220fdd26a56de054a2' => 
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
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '621a029908a0315bfbcef6d26cb5fcb1' => 
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
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7df11bd2ebebc74eba4a334f04013e63' => 
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
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f56eca2a16d55eeb75f036f3d4c50f02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The time service.
   *
   * @var \\Drupal\\Component\\Datetime\\TimeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03230dcbde07b82190e05bc9164df876' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database connection.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ad90693634eee61f3c832f68fb2cd0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26ff9b88c7e47b5eeab275434aa90480' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger factory.
   *
   * @var \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc6d07123acf42e160c8ce138db82380' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration object factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11fc18e12cc59633ed456711507d2ed4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform storage.
   *
   * @var \\Drupal\\webform\\WebformEntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed460d1bd512220940fcea0d7d4d063e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission storage.
   *
   * @var \\Drupal\\webform\\WebformSubmissionStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c660d0e029424f0cd2c29171ecc79629' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc02ef6c859003391958aa495cffd4cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform entity reference manager.
   *
   * @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d5bc2bb9596dcfe49820a188c997054' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformScheduledEmailManager object.
   *
   * @param \\Drupal\\Component\\Datetime\\TimeInterface $time
   *   The time service.
   * @param \\Drupal\\Core\\Database\\Connection $database
   *   The database connection.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface $logger_factory
   *   The logger factory.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\webform\\WebformTokenManagerInterface $token_manager
   *   The webform token manager.
   * @param \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager
   *   The webform entity reference manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '162d61edd71fd42b23a75689fac90ded' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getDateType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b596844f82b5f7bed3824e6c9653612' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getDateTypeLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25a765850c6799c6985176a3b69ba2f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getDateFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f8b2b25d8166b052a40726f4bce95ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getDateFormatLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6758b99e0a126b3f3ba9ff903aadb454' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'hasScheduledEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a47aa25c18bc9f1ccb2cb1c8cf0c4828' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'load',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23b7ef30dfeec8cdab416ad098a2af48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getSendDate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50b5a8f497274ca59bd4b7609786afdb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getSendDate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73b945b3c8e10c75d70544219acbe7c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'schedule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db1f0fea3d1d4c15225bcb764cc76eb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'schedule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e549b16550592933b77c0fa5476d595d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'unschedule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad81d41b8fbd2a7d3b268804b6805813' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'reschedule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1b15a8f7f985059240a80a61518ac87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d5407c0f144ac9fe24fdf0e7ef9a78d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'cron',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8975d5f1836d45ff58bfec48c52a4593' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Schedule emails.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A webform or webform submission.
   * @param string|null $handler_id
   *   A webform handler id.
   * @param int $limit
   *   The maximum number of schedule emails to be scheduled per request.
   *
   * @return array
   *   An associative array containing stats.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'cronSchedule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5aaaff77358ea3ab11930d48dbaece99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sending schedule emails.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A webform or webform submission.
   * @param string|null $handler_id
   *   A webform handler id.
   * @param int $limit
   *   The maximum number of schedule emails to be sent per request.
   *
   * @return array
   *   An associative array containing stats.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'cronSend',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d4a95921c237f79b1ed2c782a3d8786' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'cronSend',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d643ccfacff7fb5a5dec6741def9cf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'cronSend',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee58d46b31f6e4f3f3924538d14b5d71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'stats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c3dde91cba4c8c9145dd9a64029620a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'waiting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5feda7c792f3d3d6ac06745050f9f6e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'queued',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77011236de35c3a4c515ee09cc603815' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'ready',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a8d875480d89b49c033c749fa10d959' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'total',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '790b02732a32d6eaa431d90158262287' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform or webform_submission logger.
   *
   * @param string $channel
   *   The logger channel. Defaults to \'webform\'.
   *
   * @return \\Drupal\\Core\\Logger\\LoggerChannelInterface
   *   Webform logger
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getLogger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a679a2e1ef8f3089348cfb984d31c16a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Inspects an entity and returns the associates webform, webform submission, and/or source entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $entity
   *   A webform, webform submission, or source entity.
   *
   * @return array
   *   An array containing webform, webform submission, and source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'getEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '853f642213a1000ce273a6aed3d5ac18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add condition to scheduled email query.
   *
   * @param \\Drupal\\Core\\Database\\Query\\AlterableInterface|\\Drupal\\Core\\Database\\Query\\Delete $query
   *   The query instance.
   * @param \\Drupal\\webform\\WebformInterface|null $webform
   *   A webform.
   * @param \\Drupal\\webform\\WebformSubmissionInterface|null $webform_submission
   *   A webform submission.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   A source entity.
   * @param string|null $handler_id
   *   A webform handler id.
   * @param string|null $state
   *   The state of the scheduled emails.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'querydelete' => 'Drupal\\Core\\Database\\Query\\Delete',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManager',
         'functionName' => 'addQueryConditions',
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