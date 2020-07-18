<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformHandlerManager.php-1594241402,/var/www/html/web/core/lib/Drupal/Core/Plugin/CategorizingPluginManagerTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '6bd08a192b82cdf0f75d83f8b227304e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages webform handler plugins.
 *
 * @see hook_webform_handler_info_alter()
 * @see \\Drupal\\webform\\Annotation\\WebformHandler
 * @see \\Drupal\\webform\\Plugin\\WebformHandlerInterface
 * @see \\Drupal\\webform\\Plugin\\WebformHandlerBase
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c5aa1d2ae77b5a1c50138d119addbd4' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4e3d1d4f84777f54a7966da6bf4d68b' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fbc2bd4e857ac8b65a24199843922d3' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cee4db08da9c4e4a38d030dcceba5a5d' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c620b197541e77e1cc21e07b8fdc7f69' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d212bb52d72e32dec8e773509e804d1' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd68051a794ba50b433c04cf3651d9c4d' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c91a156ac20d29ab1f22c8a9ed1eb3f8' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '44237a8dd8fd31158c697c263e261c02' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'processDefinitionCategory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42f6dbc755bf21790538172e0b56caa2' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getProviderName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2739fb265e636b8ccc482d95463e0f81' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getModuleHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8186502c1fe47bc4b6c869af3ff84e58' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a36a0c7f78c8bbec1e63d05954c6f22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '563aff1a55aaa806ddf5c355db776eed' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8631daeb8db4df507dc8a79a807b3510' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94a0f64315d04014e1e27562029ce30e' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getGroupedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd91ca8f68c8a27200067a02629b15ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getGroupedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0b7964f18e0186242ff83a8ac82cdd0' => 
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
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b31b8a2cb6a9e861e11d1cd35bd33059' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformHandlerManager object.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a56b717259c781a8b9249eb54bdcf627' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f5d5455a2221e392872930d54f4d781' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getGroupedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '637a44fccfc1f370aff92f460603db1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'removeExcludeDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a1b4b26d1498d5f8fe93b33c8b5fae5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'categorizingpluginmanagertrait' => 'Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
         'functionName' => 'getFallbackPluginId',
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