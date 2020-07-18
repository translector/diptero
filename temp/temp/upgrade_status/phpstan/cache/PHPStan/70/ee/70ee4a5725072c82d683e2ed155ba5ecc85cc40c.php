<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Breadcrumb/WebformBreadcrumbBuilder.php-1594241402,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '2bb28bd17f36a2df21ffd248f5bf99f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform breadcrumb builder.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51073d955d389fbaf9da4442e1afb91e' => 
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
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e36c08add00480f1df957643f50d955e' => 
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
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b873f47a2267d7a20cfad9fbeac9a4b3' => 
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
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3fb3ea1bf096d114505061984cc9f86' => 
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
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '413e7bac4e4fcd79f983e31eac3bd567' => 
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
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7450d2127f87703fa703b26002d6822e' => 
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
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39b2499e5dddfa980c0fb63c685cab1f' => 
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
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '501fd543e9cd3edfa8a27d3995395c4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current route\'s entity or plugin type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '740b65aad4bd64b9e607bdc34fd60a1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform request handler.
   *
   * @var \\Drupal\\webform\\WebformRequestInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40b1895ea78803856449d46891e9551c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler service.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc0cda853625e9a352ffd084d0fc412d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformBreadcrumbBuilder object.
   *
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler service.
   * @param \\Drupal\\webform\\WebformRequestInterface $request_handler
   *   The webform request handler.
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
   *   The string translation service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ac788a38109bbcf1c30b0c33d60b360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'applies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c42932ceb8c8962365672f9ca91363b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'applies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a297d20767a11f11fbce6c369e85bd3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'applies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d7f1a21c474c278eb65f3265282ffca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f11d1232531aa8d947d1b93ede25a04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b72b6756b98d6f7e8786c3f35f5a8c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebaffa7ae352c2554c1ee3f74e69a3ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the type of webform breadcrumb.
   *
   * @return string
   *   The type of webform breadcrumb.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformrequestinterface' => 'Drupal\\webform\\WebformRequestInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Breadcrumb\\WebformBreadcrumbBuilder',
         'functionName' => 'getType',
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