<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElementManager.php-1594241402,/var/www/html/web/core/lib/Drupal/Core/Plugin/CategorizingPluginManagerTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'acad1a50bd68375e4584f7d09fa2241a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a plugin manager for webform element plugins.
 *
 * @see hook_webform_element_info_alter()
 * @see \\Drupal\\webform\\Annotation\\WebformElement
 * @see \\Drupal\\webform\\Plugin\\WebformElementInterface
 * @see \\Drupal\\webform\\Plugin\\WebformElementBase
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d1ac33355225068aa92dba688077a23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for the CategorizingPluginManagerInterface.
 *
 * The trait provides methods for categorizing plugin definitions based on a
 * \'category\' key. The plugin manager should make sure there is a default
 * category. For that the trait\'s processDefinitionCategory() method can be
 * invoked from the processDefinition() method.
 *
 * @see \\Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bc247e93c6ad3e7d516cc0f7498e12a' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8882e30c0016600b760c713bcd9b9b78' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97d9fc5579be4d1a047114db846a7c1e' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e0a94d61b874b1182b94cda8348751a' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a878cd7e8544e782ecfa2d57624e2f3c' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0053d297958b4a670f4959fa219d7f83' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6df9b8f8e157279dfa74eb885fedcdab' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb2388536aca6f9d074d5ad426f9e873' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a plugin definition to ensure there is a category.
   *
   * If the definition lacks a category, it defaults to the providing module.
   *
   * @param array $definition
   *   The plugin definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'processDefinitionCategory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0675dffb12b7140915acfea8c5ab3c99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of a provider.
   *
   * @param string $provider
   *   The machine name of a plugin provider.
   *
   * @return string
   *   The human-readable module name if it exists, otherwise the
   *   machine-readable name passed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getProviderName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '754b6ad440923be1cbd3ae010e010a98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the module handler used.
   *
   * @return \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   *   The module handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getModuleHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fa5049231acb5d6f98272b875a9e8df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a380f7e90c07a8dbecc0b2a72dce3258' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd304ea344b26b9d0911977746862f985' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38e8b1ecc41395d31c4c1632b2c60713' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba67ec31cfe8a77a7afd076a8937f043' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getGroupedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bcff0f9d263d01711d507e720a2578c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getGroupedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6595fee6c5515af59fab9c91287f8efe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme handler.
   *
   * @var \\Drupal\\Core\\Extension\\ThemeHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f57b79fbc3fc17267e2e346fbe63e97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration object factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a32e9537faa0afd7e4cd9d6900c71fea' => 
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
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5f94d05c7ee833b53ec1e8d166328b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of already instantiated webform element plugins.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ceae550f89c8d546b9bb167458b4fe2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformElementManager object.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Extension\\ThemeHandlerInterface $theme_handler
   *   The theme handler.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\Render\\ElementInfoManagerInterface $element_info
   *   The element info manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09d77ca8f52cc669d894f327016562fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'alterDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae5f2a685cfeb8eeeec751e63f216f3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getFallbackPluginId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5907c8aed66aec62191543d595eb1551' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'createInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63fa78e189672f6572e4da7706def448' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getInstances',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25373fd8f1b35c4aeb081ac1bbe16bed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'initializeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e86fa162513f3c5971da0f7d80828e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'buildElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd09efe970f4c609fed4f46caa11f356' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'buildElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4df4b4c67b6d4692518a2b13f23cda70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'processElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b42325780df4ca02cb99f1d8a5ba6abd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'processElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b9b81fa8d89194e90f12658834d2d22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'invokeMethod',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f468470e3a6a0a9cdf4d774df8cc07b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementInterface $webform_element */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'invokeMethod',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec7a75b690ce4a1f5ad120be2ea1f254' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getElementPluginId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4269630a6d15268f5f9f51ca7029e097' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getElementInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0949192a31e17227f11e51b91894b0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementInterface $element_plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getElementInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb3b88412d396b017981664bf24b6645' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7987e4b70e88812683e9955184425a83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getGroupedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c423b2deb7ff8e21c4582056b8aae06d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getGroupedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a1595c9f8803dc80cf8728297b68aed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'removeExcludeDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07c7a1b1f8cfffd6b3200ae36edcc021' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getTranslatableProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a5f4822885adc52437599d623f62793' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'getAllProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a35924218ed6c4d05f6122ea59d2d04e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'fallbackpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElementManager',
         'functionName' => 'isExcluded',
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