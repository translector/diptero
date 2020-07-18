<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformSubmissionExporter.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425,/var/www/html/web/modules/contrib/webform/src/Element/WebformAjaxElementTrait.php-1594241402',
   'data' => 
  array (
    'a9c8da6619abeb3f5c306c055332363c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform submission exporter.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '390faf4291d7ac6706297584737cc990' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fbab433bffe225996c90502a540b171' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5164efaeca63bab40acabe5b2f7d7c78' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98b885797a3e07ee8d2ec8bbba57d2c8' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '093e9bf0a79e6edc7a14c02b849b736e' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70189897fdaa48ad15dddca74953b09e' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '574b2700053faa14d2c3e710be558a39' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65eaa475e4c5aed50d9491dfe0863277' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for ajax element support.
 *
 * @see \\Drupal\\webform_test_element\\Plugin\\WebformElement\\WebformTestElementProperties
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f24adbd0ff65005c6e99dca30c710f07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Ajax element wrapper id.
   *
   * @param string $id
   *   A unique element id.
   *
   * @return string
   *   The element id suffixed with *-wrapper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getAjaxElementWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81717aa2dcda80d83121fa98c51526ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Ajax element update name.
   *
   * @param string $id
   *   A unique element id.
   *
   * @return string
   *   The element update name suffixed with *-update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getAjaxElementUpdateName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b2ccaabce1fcfa3f58a4dc5334d4a6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Ajax element update class.
   *
   * @param string $id
   *   A unique element id.
   *
   * @return string
   *   The element update classes prefixed with js-* and suffixed with *-update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getAjaxElementUpdateClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b83540433de9ee1e008f68a782f22ca6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$wrapper_element
   *   The element to be update via Ajax.
   * @param array &$trigger_element
   *   The element to trigger the Ajax update.
   * @param array|null &$update_element
   *   The element to append the hidden Ajax submit button.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'buildAjaxElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4a658aadcecfe2ab2e1708ff355d375' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element\'s wrapper.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$element
   *   The element to be update via Ajax.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'buildAjaxElementWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08abd935b98f84eb97b696a1a3d5f9b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element\'s trigger.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$element
   *   The element to trigger the Ajax update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'buildAjaxElementTrigger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcff49acae8e96d7489ee00272f1b7a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element\'s update (submit) button.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$element
   *   The element to append the hidden Ajax submit button.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'buildAjaxElementUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3501de44e7da5806d6ca7a59f0d3792a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax element validate callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'validateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7cb929f02fc8b0fdf134461db24d33b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax element submit callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'submitAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25ad3e5bcf6a317030a25d468e857474' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax element update callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The properties element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'updateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc8cf3e451a2c0f06fcee259d48d411e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get ajax element wrapper.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array $element
   *   An element or form containing the Ajax wrapper.
   *
   * @return array|null
   *   The Ajax wrapper element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getAjaxElementWrapperRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '433531ad7229d1096d0acb854b0a5ace' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration object factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02a994da3d381d6caed21490422201c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The file system service.
   *
   * @var \\Drupal\\Core\\File\\FileSystemInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4b35d1d21f8c20512548aba22b17095' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission storage.
   *
   * @var \\Drupal\\webform\\WebformSubmissionStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bacc4250d8c90f4f3dde48440773d35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stream wrapper manager.
   *
   * @var \\Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da7ab6aac58071a424fd351a83de5a8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The archiver manager.
   *
   * @var \\Drupal\\Core\\Archiver\\ArchiverManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d590e2e81beb36cca0c9a5108cf442b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2f6b56413d1a3cfb3230054d8781a17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The results exporter manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformExporterManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd74dfac72f7f2febddb25d15401a720' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform.
   *
   * @var \\Drupal\\webform\\WebformInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'deb38574aec8d43318a156bda0383cab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source entity.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ae6b6d9e195f90e27c65dcbd1994b40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The results exporter.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformExporterInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b92490b4b2b346b0c9c0d962dbfce32b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default export options.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4cc74036275a6ee5fa85c34766a0464' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform element types.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04b7783a86d6278cecc1de977dd74046' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformSubmissionExporter object.
   *
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\File\\FileSystemInterface $file_system
   *   File system service.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface $stream_wrapper_manager
   *   The stream wrapper manager.
   * @param \\Drupal\\Core\\Archiver\\ArchiverManager $archiver_manager
   *   The archiver manager.
   * @param \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager
   *   The webform element manager.
   * @param \\Drupal\\webform\\Plugin\\WebformExporterManagerInterface $exporter_manager
   *   The results exporter manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e9eeb33d64c886e3ce82e3ca7c728d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'setWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a8f9e819a92355c37d048ea4a946b0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '856b86407663e33f8f0e3c63115d9322' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'setSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a50917f80114e1e548fc08e12607f7c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be72adc1840eedddd9865aca55198591' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getWebformOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '622ec5edd5634651e8a52fa7b45b0ad8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'setWebformOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fe5f4cf319eb5497072f6bbab357a16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'deleteWebformOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2b93768acc2be89581b99eec682d63f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get options name for current webform and source entity.
   *
   * @return string
   *   Settings name as \'webform.export.{entity_type}.{entity_id}\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getWebformOptionsName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4dec61430976a1c3ecd73d10004beefa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'setExporter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '154d2433ae1b57c06610d3cf90811ee4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getExporter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65313812e3cdec1ac7acf2856c0ea454' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getExportOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4f50069fd103964c06def04513db2a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getDefaultExportOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73615056539b4749590748f9fbd45614' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'buildExportOptionsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5733b607fd70d02e3139c54646d36d9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getValuesFromInput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73c30ada9a88352254f80385a0600409' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Append exporter plugin id to #states API array.
   *
   * @param array $states
   *   A #states API array.
   * @param string $plugin_id
   *   The exporter plugin id.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'appendExporterToStates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31c53cec76bb28b2fe564e8792cb9ad2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'generate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db13a971fcbc3edd7566593ed3b84e8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'writeHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32565a42f9faa3bfa6df123c4950b8de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'writeRecords',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c5ef420c556e61695c4455ccf14b99a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'writeFooter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50cb46d9af2bca5191f3d035c66df93f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'writeExportToArchive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82d0f41d9d62ce4ba6a39025c2d86cfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '008ed84950a98c2bc94dbdaf8ecc58bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get element types from a webform.
   *
   * @return array
   *   An array of element types from a webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getWebformElementTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afd3cf6244c151b13e7bf1fb1d5c4345' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getTotal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f2a8130cb62bdccee5a7f73396e0ebd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getBatchLimit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd69b6719bb79a2d17f559147561a4f28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'requiresBatch',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a583b8932b6a7f431afa9035d92909ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getFileTempDirectory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0955bb4d658428ec6b944d4e046d61ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getSubmissionBaseName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7d50f482fdc01ccc0a0d894d1df624a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getBaseFileName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ab742fc637fd5d83d77af925739eff4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getExportFilePath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bbc3b37b6e4af635f681d43c4354e258' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getExportFileName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79fc941a426d85632c89d876f8d1b8ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getArchiveFilePath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cad55c8c5dbd70cb224ae18adc1e3039' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'getArchiveFileName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b9e60c79f32eeace2d968d711c614bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'isArchive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '393fc5e1351725530e38d0dde38cf1d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'archivermanager' => 'Drupal\\Core\\Archiver\\ArchiverManager',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'streamwrappermanagerinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformexporterinterface' => 'Drupal\\webform\\Plugin\\WebformExporterInterface',
          'webformexportermanagerinterface' => 'Drupal\\webform\\Plugin\\WebformExporterManagerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionExporter',
         'functionName' => 'isBatch',
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