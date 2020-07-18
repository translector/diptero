<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElementBase.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Messenger/MessengerTrait.php-1594234425,/var/www/html/web/modules/contrib/webform/src/Element/WebformCompositeFormElementTrait.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformEntityInjectionTrait.php-1594690523',
   'data' => 
  array (
    'f2f8cf059168b155b3facff9d58aec29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for a webform element.
 *
 * @see \\Drupal\\webform\\Plugin\\WebformElementInterface
 * @see \\Drupal\\webform\\Plugin\\WebformElementManager
 * @see \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd80b1df2678b259ef97703ba96228412' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5cf3c7c26e8ef13d219233ed48dc655e' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bd2671401ff5b112eae71db111ab52f' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e3a3405965e3eb1dec088a6ed62a268' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5261abeb39f1a631ab6f5c76398adbec' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1a9d66e66fa18ce3747d89d8c3f30ec' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '274c80956fc0ffb33ecc73bb12bd98bf' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ffb118b20be1ac88a0b353ccf716a91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for the messenger service.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbbd79e1486a2c192a393568d192d0c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34c95144f7deb36426b99028476b28e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the messenger.
   *
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'setMessenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f89e86ce7c76776a59cd3026573a02ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the messenger.
   *
   * @return \\Drupal\\Core\\Messenger\\MessengerInterface
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'messenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8d37cde4b3e98281b66f9d5b4d70edb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for webform composite form elements.
 *
 * Any form element that is comprised of several distinct parts can use this
 * trait to add support for a composite title or description.
 *
 * The Webform overrides any element that is using the CompositeFormElementTrait
 * and applies the below pre renderer which adds support for
 * #wrapper_attributes and additional some classes.
 *
 * @see \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait
 * @see \\Drupal\\webform\\Plugin\\WebformElementBase::prepareCompositeFormElement
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'element' => 'Drupal\\Core\\Render\\Element',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbbffbcfb7370c0fa16a9737f63d6d29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds form element theming to an element if its title or description is set.
   *
   * This is used as a pre render function for checkboxes and radios.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'element' => 'Drupal\\Core\\Render\\Element',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2cdf36b54fc27bc0b97d71325579a5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'element' => 'Drupal\\Core\\Render\\Element',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2492ac527f69db86746175ebc6c18cfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an webform/webform submission entity inject trait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16b5b9cc47227917cdac4f1642fc5b84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform.
   *
   * @var \\Drupal\\webform\\WebformInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb5cd722b93097f0482cb59bfe8a73ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission.
   *
   * @var \\Drupal\\webform\\WebformSubmissionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e425991c2826620c28e8b3eb89e3418e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set the webform that this is handler is attached to.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return $this
   *   This webform handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'setWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3070d98cd29df1fc942cd84955fc5359' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the webform that this handler is attached to.
   *
   * @return \\Drupal\\webform\\WebformInterface
   *   A webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2dd3a3845a937096a8111cb0f7c8e1bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the webform submission that this handler is handling.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface
   *   A webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'setWebformSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da8c2c6247086bf426b3e7569529716f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set webform and webform submission entity.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface
   *   A webform submission.
   *
   * @throws \\Exception
   *   Throw exception if entity type is not a webform or webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getWebformSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51c18a89f71640aafc8db0258c158e8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'setEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22f2cf2fdaa923c1ea65dd7486ae8e50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reset webform and webform submission entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'resetEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1243e1ab55a4f99c24c067c32cc93239' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A logger instance.
   *
   * @var \\Psr\\Log\\LoggerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b41f870125d4afe67ed9627b5d1111c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e49431573f6bd5c5f84f2144e2b0958' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79f576a1644452c1a1a549e5df7fd24a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd773af4ca5785f6eb9673ee6c9218183' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2fb47e14af79f7a4dcd6a5fbea89178' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A element info manager.
   *
   * @var \\Drupal\\Core\\Render\\ElementInfoManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fed342f7b41cd5668bd21dc9fb82fd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26ac7802a8f5a35e0ad2153f10e908ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b7d5cdac7dce53b3fa677c8014483ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform libraries manager.
   *
   * @var \\Drupal\\webform\\WebformLibrariesManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9169762d98e1dc76b562558333a95104' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission storage.
   *
   * @var \\Drupal\\webform\\WebformSubmissionStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd01b3b2377cad59506519afb1eb10d98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An associative array of an element\'s default properties names and values.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d4e2fff9a31a9d5291d4fc8b1ade05c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An indexed array of an element\'s translated properties.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14cb958679f1e271d13b6febdb55fa15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a9987e033d1b675c432504b26e415ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Define an element\'s default properties.
   *
   * @return array
   *   An associative array contain an the element\'s default properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'defineDefaultProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5cbaf5370c9c60036ef4fefbb1e9c61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Define default multiple properties used by most elements.
   *
   * @return array
   *   An associative array containing default multiple properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'defineDefaultMultipleProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22b4ad39869887d0ee52c19d0ec349e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Define default base properties used by all elements.
   *
   * @return array
   *   An associative array containing base properties used by all elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'defineDefaultBaseProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ebe856063f8d88dd66ddddda8b546ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Define an element\'s translatable properties.
   *
   * @return array
   *   An array containing an element\'s translatable properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'defineTranslatableProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3f9b710ad2d431e56349e4567248b9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getDefaultProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41796c3a0915155b4be9a64cbb28863e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getTranslatableProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '724d07afee2386d51e87c4a353ed1517' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'hasProperty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1febd8671f078ab326ae4b48ca08b471' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getDefaultProperty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c65c39015265f5836a2ceb96c97e972e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getElementProperty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b6d2fd37fa2a81eabfe773aae83ff56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set element\'s default callback.
   *
   * This makes sure that an element\'s default callback is not clobbered by
   * any additional callbacks.
   *
   * @param array $element
   *   A render element.
   * @param string $callback_name
   *   A render element\'s callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'setElementDefaultCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fe9f05f5520efa9fa6b8d31166f7d78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a render element\'s default property.
   *
   * @param array $element
   *   A render element.
   * @param string $property_name
   *   An element\'s property name.
   *
   * @return mixed
   *   A render element\'s default value, or NULL if
   *   property does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getElementInfoDefaultProperty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a44d355fa34479609decb0649a29abc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getFormElementClassDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31fb3e1a8af317c806c3c1f9b2940c81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getPluginApiUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c3de71052dbfb2246501b70a892d745' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getPluginApiLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30d727b7b27f2a3416a29ded5b17d18a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getPluginLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bd51d580fc12e02716f15f7d3989aeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getPluginDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c37b290fb368a257b420765da4d0cd4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getPluginCategory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75bddf1f11b35a86f06dd10552e2d201' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getTypeName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '645f0df8e00653aa204f35a63d065b8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getDefaultKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5d4e3f6ba895e01b9485485653e7af9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isInput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c42c2071c993779fadceea707cc98be0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'hasWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f02fc9dc856adbf95e28b83019d088b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccb22c14ee5628e3c4d79dce61a8c355' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isRoot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '048d396b71b8b7ba1cc0004dbae153bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'hasManagedFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e46a8a5005979a4444ebda45a1cc34fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'supportsMultipleValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a67a0df60f771a6ad6ad3a0cb9302621' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'hasMultipleWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e943e30f377ecdfe95761c557fb26a7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'hasMultipleValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bd753b6d9dd255282788d6ba06d65e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isMultiline',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6604d7f4efb7012428c5a009f1f6f9d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isComposite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7038cd838b9b0061b50e1623314bd1a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isHidden',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '364ffe858f2d4b211a5269e194c1cb20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isExcluded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6384f3e1b4582d86ce29d46932db2b06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a870adbbe42ca9b3069e075c1f828a7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isDisabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ebcbe3d8607f564626a9e02b1f9e970' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd21404d90fca3595a4e5110ef7d2485e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getRelatedTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47d1041cb03de1b4e592b6efd042b6ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'initialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40a25606b955ae19d24da0760f8de33a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81736ecaa4b98d20ba64d6c8c08ad32a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'finalize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '405694f546e83209196205b5e5ac8a82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'alterForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2420c8e0571912dac64cffcfb09f8b66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform element #after_build callback.
   *
   * Wrap #element_validate so that we suppress element validation errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'hiddenElementAfterBuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e869cf44b7fe60da191a0f4f7ca9fee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'checkAccessRules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f38857d977497681b26c14673455a045' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks an access rule against a user account\'s roles and id.
   *
   * @param array $element
   *   The element.
   * @param string $operation
   *   The operation.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user session for which to check access.
   *
   * @return bool
   *   The access result. Returns a TRUE if access is allowed.
   *
   * @see \\Drupal\\webform\\Entity\\Webform::checkAccessRule
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'checkAccessRule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f8aa27d0552b66fda25d5f11ff65dd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'replaceTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '501fa1d5b610ea96c5b6c6d29e6fe599' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepare an element\'s validation callbacks.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'prepareElementValidateCallbacks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f3e92f68755f9e4b5903ae1a55611bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepare an element\'s pre render callbacks.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'prepareElementPreRenderCallbacks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52a2423cafded6a0ba2e8bc4aa969c92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replace Core\'s composite #pre_render with Webform\'s composite #pre_render.
   *
   * @param array $element
   *   An element.
   *
   * @see \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait
   * @see \\Drupal\\webform\\Element\\WebformCompositeFormElementTrait
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'prepareCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46208181eba1801f366b2f85223741ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set an elements #states and flexbox wrapper.
   *
   * @param array $element
   *   An element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'prepareWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d66b53742bc7f91950e420d1a547063' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fix state wrapper.
   *
   * Notes:
   * - Certain elements don\'t support #states so a workaround is to adds a
   *   wrapper that renders the #states in a #prefix and #suffix div tag.
   * - Composite elements tend not to properly handle #states.
   * - Composite elements need propagate a visible/hidden #states to
   *   sub-element required #state.
   *
   * @param array $element
   *   An element.
   *
   * @return array
   *   An element with #states added to the #prefix and #suffix.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'preRenderFixStatesWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68ca221dea9cad96a7205eb52503ace3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fix flexbox wrapper.
   *
   * @param array $element
   *   An element.
   *
   * @return array
   *   An element with flexbox wrapper added to the #prefix and #suffix.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'preRenderFixFlexboxWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69a90f9003fcd9ac0e980ae51e164714' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set multiple element wrapper.
   *
   * @param array $element
   *   An element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'prepareMultipleWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b32a691fd648b6aa7be555b52d8b08aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'displayDisabledWarning',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '434e352f93509065cecc6cc920b75ebe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'setDefaultValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbfafecec5bd5b316a28f4c7af59abce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd044b4ae0f40ee13ef7c1b8487d30079' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getAdminLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '535b8f389a02d4c0f8ff01c7efb40c89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4dad73b591c9b90c3494b1c4df680a21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'buildHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '883c748e955f1ed1a3fedb4eba4948a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'buildText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '016b23601e5dba92b2f62f4e12c5b79b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an element as text or HTML.
   *
   * @param string $format
   *   Format of the element, text or html.
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   An array of options.
   *
   * @return array
   *   A render array representing an element as text or HTML.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a995727852c496eb355d78415f0ab000' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a93b2b4ca72c45082807840113480b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fcae8d684dc5478723d70a05214dc3d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Format an element\'s value as HTML or plain text.
   *
   * @param string $type
   *   The format type, HTML or Text.
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   An array of options.
   *
   * @return array|string
   *   The element\'s value formatted as plain text or a render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be4f935496edd71ed15858ad27d0df9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Format an element\'s items using custom HTML or plain text.
   *
   * @param string $type
   *   The format type, HTML or Text.
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   An array of options.
   * @param array $context
   *   (optional) Context to be passed to inline Twig template.
   *
   * @return array|string
   *   The element\'s items formatted as plain text or a render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatCustomItems',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73f3d6ec85990bc9b59e77aa0302a66e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Format an element\'s items as HTML.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   An array of options.
   *
   * @return string|array
   *   The element\'s items as HTML.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatHtmlItems',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6503defcaf51e5a4a028676d2be659f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Format an element\'s items as text.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   An array of options.
   *
   * @return string
   *   The element\'s items as text.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatTextItems',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18a12f1e4d4709b49b427ad94ff41caa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Format an element\'s item using custom HTML or plain text.
   *
   * @param string $type
   *   The format type, HTML or Text.
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   An array of options.
   * @param array $context
   *   (optional) Context to be passed to inline Twig template.
   *
   * @return array|string
   *   The element\'s item formatted as plain text or a render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatCustomItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fda5af83e339dd49b28477eedd4bf182' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Format an element\'s value as HTML.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   An array of options.
   *
   * @return array|string
   *   The element\'s value formatted as HTML or a render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatHtmlItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d051df3f521507d62773fba86272dc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Format an element\'s value as text.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $options
   *   An array of options.
   *
   * @return string
   *   The element\'s value formatted as text.
   *
   * @see _webform_token_get_submission_value()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatTextItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '051b26675feba028fabe02d951e735a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'hasValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cd3aa159e24895a3ea4865c917aa1d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bee2f3a4a6c793423cddf8e9bf0d817' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getRawValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fdf03a8f463b01974094109a442f38a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getItemFormats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8d6e8e0359f7c5c0c7f44b90aed03c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getItemDefaultFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39d867088049128b25394d09d229b545' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getItemFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0762a26c89ded8c976f367b0effb17ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getItemsDefaultFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70181d473ad319e860cf2f27b179d867' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getItemsFormats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c31c65e5b7311010f0dde3544f08385b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getItemsFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '267f6113b263e2bcb3fd2c9ef9b71bed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'preview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '055c9aa0db742babe3e02e27b78ca8ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getTestValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bdba3b4d02e6f505246638b9c35ba9dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getTableColumn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0876c066c36a01c0ec5ad2bd9dcb4779' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'formatTableColumn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73a5af475331467a91c19a788d6e3ff9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'isEmptyExcluded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8da302a1fa5e964da3028763d30db04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getExportDefaultOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8caa21e42403eae7600e7842fb1202d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'buildExportOptionsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ceea4b1928700919472798b3c56b4ef2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'buildExportHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c14f965c08ef758b0016b69b4658dec9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prefix an element\'s export header.
   *
   * @param array $header
   *   An element\'s export header.
   * @param array $element
   *   An element.
   * @param array $export_options
   *   An associative array of export options.
   *
   * @return array
   *   An element\'s export header with prefix.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'prefixExportHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7388ee43f6cb32884afdd84e25e1ddda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'buildExportRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a562a3c255db696b4031c89c5bd9235' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form API callback. Validate element #minlength value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'validateMinlength',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '182ea2afb66be61ee99484e82af7446d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form API callback. Validate element #unique value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'validateUnique',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7564430335c07fd8e56b8b63acd74f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'validateUnique',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7785a0144aff0215d67ed957ff19487' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionForm $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'validateUnique',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '620f5c5abe1d1c1c2a035f721e6e1b42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'validateUnique',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f9d7c18dea34c2f49a5cb9bca8dd38e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form API callback. Validate element #unique multiple values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'validateUniqueMultiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf446c83e315cafaebf2b3ad43b12ab4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form API callback. Validate element #multiple > 1 value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'validateMultiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77b745147ad8ccca0f9188cef2949134' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getElementStateOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55eacced26596c69468bc2a2d9f76304' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getElementSelectorOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebf0b4da2687b2b103ae5c77eb84ac42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getElementSelectorSourceValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a8afcb5d810389afb2946d59689d1e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an element\'s (sub)inputs selectors as options.
   *
   * @param array $element
   *   An element.
   *
   * @return array
   *   An array of element (sub)input selectors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getElementSelectorInputsOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aeef7085e8f88c26e4d4d40835650626' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getElementSelectorInputValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b4e263b99df5ba6a36fc37f7017b3e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51a4f65927de267e0ba23df1008efa92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'postCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '006dc4f40588f4bbd569beb0eeeae291' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'postLoad',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7bd8b2295cc89a104fa65117a19dcaa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02c8cdbd37aad37968484b1ac218d260' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81df426123583c8eb6a627c92d2d64bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb1cb825463c581fc1d8a69f3601883c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70f854315e99c2eaa586f9a76e57fa1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b82d176bb2be25fe905f33607fa4c962' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform_ui\\Form\\WebformUiElementFormInterface $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fab97aeb7e8a71aa7b93202d7ef3d9cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6230c435b53a6f9004373531c1e6ea9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get form--inline container which is used for side-by-side element layout.
   *
   * @return array
   *   A container element with .form--inline class if inline help text is
   *   enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getFormInlineContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ad88a1925e260eb53451c8a79a82ef0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build configuration form tabs.
   *
   * @param array $form
   *   An associative array containing the initial structure of the plugin form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The plugin form with tabs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'buildConfigurationFormTabs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97a393ee0e3e571b86dd63c674b0def6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set configuration webform default values recursively.
   *
   * @param array $form
   *   A webform render array.
   * @param array $element_properties
   *   The element\'s properties without hash prefix. Any property that is found
   *   in the webform will be populated and unset from
   *   $element_properties array.
   *
   * @return bool
   *   TRUE is the webform has any inputs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'setConfigurationFormDefaultValueRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b605f65304b7cc8c36d5d6328420dd75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set an element\'s configuration webform element default value.
   *
   * @param array $form
   *   An element\'s configuration webform.
   * @param array $element_properties
   *   The element\'s properties without hash prefix.
   * @param array $property_element
   *   The webform input used to set an element\'s property.
   * @param string $property_name
   *   THe property\'s name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'setConfigurationFormDefaultValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6381a70b7a1112eef1640306cc73d4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3212c80c40f3adca81e4d6106d7ff3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c5217167c77685b89de966cece989c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getConfigurationFormProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aecff35bd930ca7a9537520dbeb0bf6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get configuration property value.
   *
   * @param array $properties
   *   An associative array of submitted properties.
   * @param string $property_name
   *   The property\'s name.
   * @param mixed $property_value
   *   The property\'s value.
   * @param array $element
   *   The element whose properties are being updated.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'getConfigurationFormProperty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f523a1180e34f727cdd27164858a8d9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the element has a composite field wrapper.
   *
   * @return bool
   *   TRUE if the element has a composite field wrapper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'hasCompositeFormElementWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d183af8b653c7e7fb1cf3fae9b65519' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritDoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'link' => 'Drupal\\Core\\Link',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'checkbox' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkbox',
          'checkboxes' => 'Drupal\\webform\\Plugin\\WebformElement\\Checkboxes',
          'containerbase' => 'Drupal\\webform\\Plugin\\WebformElement\\ContainerBase',
          'details' => 'Drupal\\webform\\Plugin\\WebformElement\\Details',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissionconditionsvalidator' => 'Drupal\\webform\\WebformSubmissionConditionsValidator',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementBase',
         'functionName' => 'trustedCallbacks',
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