<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformEntityElementsValidator.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '14af9c5b4da7f3d46c50845c9a9fcdcb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform elements validator.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba1e6d970d1aa4671c0fa31cbb36b007' => 
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
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '157b3eb78771f3c3067cc3707b601dc4' => 
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
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be74e577f5ed99f1e320b849c2d8a428' => 
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
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4412662a7081fe0d2eaa2ecb534acf27' => 
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
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f0e996c498737d04b46f9002b60c5a4' => 
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
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3a8e88ac01ed2c2b215e2b2be95b77a' => 
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
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1b84f84417a9d9bac529a2798c2a00f' => 
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
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a727557d3610ac6d94ada01c8c7ca036' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform being validated.
   *
   * @var \\Drupal\\webform\\WebformInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8945ec75ff8709480a9e64ee788d4d94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The raw elements value.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1458afeda692286fa9aaf0b09351b426' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The raw original elements value.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c57556b5a47f015590f9c2e2b5f351ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The parsed elements array.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2edcb4f15dc3150c7381bbfe08a9853b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The parsed original elements array.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9199ee935a6ed54980fe716a9942d7d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of element keys.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3e4ab892693c4bd3db124bfbfb7de51' => 
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
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fce37a4bcaeec0ebaf77a99b6603d2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The \'renderer\' service.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc807ebf2e7bb4e0c625b7f61a492635' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The \'plugin.manager.webform.element\' service.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39f572bb0d9ce85a019dcb32ec304320' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The \'entity_type.manager\' service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a5d4b8ceb665c769a10218e2ab6446a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The \'form_builder\' service.
   *
   * @var \\Drupal\\Core\\Form\\FormBuilderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c9e9b599ce73920b0659f7125840e90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Element keys/names that are reserved.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76ff3a14bcf39c08f526469c801778ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformEntityElementsValidator object.
   *
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The \'renderer\' service.
   * @param \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager
   *   The \'plugin.manager.webform.element\' service.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The \'entity_type.manager\' service.
   * @param \\Drupal\\Core\\Form\\FormBuilderInterface $form_builder
   *   The \'form_builder\' service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4945b2fce872d1dd7925d356695328bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6d11948c22c191e575d4237a4e3a996' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate elements are required.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup|null
   *   If not valid an error message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateRequired',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '004618151a79776fee964c5ef116b922' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate elements is validate YAML.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup|null
   *   If not valid an error message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateYaml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc07fb504adc8edc6804e8dd2aca3643' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate elements are an array of elements.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup|null
   *   If not valid an error message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb82f74947bbfde7e989aadc4b433ec6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate elements names.
   *
   * @return array|null
   *   If not valid, an array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c085cc416982ace2eb9252b29fd46d45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate elements does not contain duplicate names.
   *
   * @return array|null
   *   If not valid, an array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateDuplicateNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '214fc10ef17b26fe3cb3bed6c4d064fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recurse through elements and collect an associative array keyed by name and number of duplicate instances.
   *
   * @param array $elements
   *   An array of elements.
   * @param array $names
   *   An associative array keyed by name and number of duplicate instances.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'getDuplicateNamesRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bc8eb647b9e8ebea77c0f2a0ec4b317' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate that elements are not using ignored properties.
   *
   * @return array|null
   *   If not valid, an array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18c778a7f0419dfbe35b0e0d2499237b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate that element are not deleted when the webform has submissions.
   *
   * @return array|null
   *   If not valid, an array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateSubmissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a92483a7b291568d972f0e91e7eed560' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate that element are not deleted when the webform has related variants.
   *
   * @return array|null
   *   If not valid, an array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateVariants',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94a821704d95a794b139634a262e92f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate element hierarchy.
   *
   * @return array|null
   *   If not valid, an array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateHierarchy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dfbffaa39d8260fe1c411b00e0f3ca70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementInterface $webform_element */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateHierarchy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77245a93391d0d68e4d8f14c5ae8d334' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate wizard/card pages.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup|string|null
   *   If not valid an error message.
   *
   * @see \\Drupal\\Core\\Entity\\EntityFormBuilder
   * @see \\Drupal\\webform\\Entity\\Webform::getSubmissionForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validatePages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be20cd3b9373ae8e278e58a3db74f6c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate that elements are a valid render array.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup|string|null
   *   If not valid an error message.
   *
   * @see \\Drupal\\Core\\Entity\\EntityFormBuilder
   * @see \\Drupal\\webform\\Entity\\Webform::getSubmissionForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateRendering',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84fa48321ff243085eac94e338e9fa26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'validateRendering',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4115f4bdd0a84b3d65fe3c7f23be6b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recurse through elements and collect an associative array of deleted element keys.
   *
   * @param array $elements
   *   An array of elements.
   * @param array $names
   *   An array tracking deleted element keys.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'getElementKeysRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82ab756cf2d8780b85b46f2701e6ffa0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the line numbers for given pattern in the webform\'s elements string.
   *
   * @param string $pattern
   *   A regular expression.
   *
   * @return array
   *   An array of line numbers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'url' => 'Drupal\\Core\\Url',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\WebformEntityElementsValidator',
         'functionName' => 'getLineNumbers',
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