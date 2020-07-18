<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformSubmissionConditionsValidator.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '0b4ae7f75440e916f04d92f993a47f5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform submission conditions (#states) validator.
 *
 * @see \\Drupal\\webform\\Element\\WebformElementStates
 * @see \\Drupal\\Core\\Form\\FormHelper::processStates
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e70ec7c687f8a057fbb6053b23cd24c' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53140b493f46d0f8b409c7dc8316cac8' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff462ace900c8c668ef7a0fd03f29f5f' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '986115fe89c519c2b3b5842e1f88738c' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06d4b73a5368f0383255a0c4b999f0bb' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fabc9d9206ab74893952d2b6f171689a' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c415d51c4b80e07e935eab9c5b54b446' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b2294ae444dfd6a1718981c4fa44652' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * State aliases.
   *
   * @var array
   *
   * @see Drupal.states.State.aliases
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66e9f49b690f18a20183601143f2dc02' => 
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
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd259b3fc82ca44565b351579cd92bd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformSubmissionConditionsValidator object.
   *
   * @param \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager
   *   The webform element manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38d413bb1997c34afcb28a54a515391c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'buildPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd7b6b96b7930d3428f69baa1d62967e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e271e8686b446305015e1c1d7b25d1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ca9f9f834c9640e3580d24f5e6d7e00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replace hidden cross page targets with hidden inputs.
   *
   * @param array $conditions
   *   An element\'s conditions.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $targets
   *   An array of hidden target selectors.
   * @param array $form
   *   A form.
   *
   * @return array
   *   The conditions with cross page targets replaced with hidden inputs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'replaceCrossPageTargets',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73a91d3d279cac87beff477e49e86c39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\webform\\WebformSubmissionForm::validateForm
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'validateForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4081afba1e3b1da833fda4701ede053' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recurse through a form and validate visible elements.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'validateFormRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d3b53303e8b91a50d68b863ee0b1603' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate a form element.
   *
   * @param array $element
   *   A form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'validateFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33c66875c2f04c7e6c7ea0e109c79950' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'validateFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '742ae200660365cd5ce4a0ab3910786b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b9e193ce491904c3b11d605de017673' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f16a8f20d2b2e018dc8f41e7c471358' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recursively unset submission data for form elements that are hidden.
   *
   * @param array $elements
   *   An array of form elements.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $data
   *   A webform submission\'s data.
   * @param bool $visible
   *   Flag that determine if the currrent form elements are visible.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'submitFormRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cbc6fa8224001ca19cd7e182ce10f39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform element #after_build callback: Wrap #element_validate so that we suppress element validation errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'elementAfterBuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cc5f777630e2f8b794dd280f96618c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform conditional #element_validate callback: Execute #element_validate and suppress errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'elementValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2322f0fefce931ab106cc373143fe61c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionForm $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'elementValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b77e9426e107b8704d830d224328f52f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionConditionsValidatorInterface $conditions_validator */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'elementValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd2326d6cca7db5faabc56b015a54b79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'isElementVisible',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8560b3ccac03c424364f52eed0d18e14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'isElementEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5010e542bd12ae1e9e3948e45eca302' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'validateState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '493335d9bc69a3e0592420ed8406efbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'validateConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e4af44994ef0bbb2743ab558278afb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate #state condition.
   *
   * @param string $selector
   *   The #state condition selector.
   * @param array $condition
   *   A condition.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   *
   * @return bool|null
   *   TRUE if the condition validates. NULL if condition can\'t be processed.
   *   NULL is returned when there is invalid selector and missing element
   *   in the conditions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'validateCondition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fd6b0da8fbf62c22841d86af21620d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check a condition.
   *
   * @param array $element
   *   An element.
   * @param string $selector
   *   The element\'s selector.
   * @param array $condition
   *   The condition.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   *
   * @return bool|null
   *   TRUE if condition is validated. NULL if the condition can\'t be evaluated.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'checkCondition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd5947ab214a56ff3546ae17da5bc209' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process state by mapping aliases and negation.
   *
   * @param string $state
   *   A state.
   *
   * @return array
   *   An array containing state and negate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'processState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd49c575e1ddc6eeb163f3364855b1e7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build and get visible elements from a form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   *
   * @return array
   *   Visible elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'getBuildElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3de885b3b784cb34f478c88a3027548f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recurse through a form, review #states/#required, and get visible elements.
   *
   * @param array $elements
   *   Visible elements with #states property.
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param array $parent_states
   *   An associative array containing \'required\'/\'optional\' states from parent
   *   container to be set on the element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'getBuildElementsRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95418cd5a88a9c5f4d9733b93eddd5e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the visibility state for all of conditions targets.
   *
   * @param array $conditions
   *   An associative array containing conditions.
   * @param array $elements
   *   An associative array of visible elements.
   *
   * @return array
   *   An associative array keyed by target selectors with a boolean state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'getConditionTargetsVisibility',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a47567f9654315b76caf4d4871d1a224' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recursively collect a conditions targets.
   *
   * @param array $conditions
   *   An associative array containing conditions.
   * @param array $targets
   *   An associative array keyed by target selectors with a boolean state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'getConditionTargetsVisibilityRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6877e0917bccfb37e6b79d60f972553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add .js-webform-states-hidden to an element.
   *
   * @param array $element
   *   An element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'addStatesHiddenToElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e255ac4e664d5427882ec91678c1f94e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get input name from CSS :input[name="*"] selector.
   *
   * @param string $selector
   *   A CSS :input[name="*"] selector.
   *
   * @return string|null
   *   The input name or NULL if selector can not be parsed
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'getSelectorInputName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e142b13ebb08f48cacfbbb5f415844b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parse input name which can container nested elements defined using #tree.
   *
   * Converts \'input[subkey]\' into [\'input\', \'subkey\'].
   *
   * @param string $name
   *   The input name.
   * @param int $index
   *   A specific input name index to be returned.
   *
   * @return array|string
   *   An array containing the input name and keys or specific input name.
   *
   * @see http://php.net/manual/en/faq.html.php#faq.html.arrays
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'textbase' => 'Drupal\\webform\\Plugin\\WebformElement\\TextBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
         'functionName' => 'getInputNameAsArray',
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