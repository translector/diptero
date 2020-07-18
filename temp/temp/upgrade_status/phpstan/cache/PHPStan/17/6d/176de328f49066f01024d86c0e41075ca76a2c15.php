<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformExporterManager.php-1594241402,/var/www/html/web/core/lib/Drupal/Core/Plugin/CategorizingPluginManagerTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '19c9226fe72e6e2a28041230d1d1ce36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages results exporter plugins.
 *
 * @see hook_webform_exporter_info_alter()
 * @see \\Drupal\\webform\\Annotation\\WebformExporter
 * @see \\Drupal\\webform\\Plugin\\WebformExporterInterface
 * @see \\Drupal\\webform\\Plugin\\WebformExporterBase
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1575a68f59ff9250b7034d4263d35e0' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '016eb76cfc35e8a2abe9a827b15cefe4' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a42665af4a735d87e598f68bf7fcc83' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e11c7c975eae96d9cb38cf70c595205' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c7af00e598581ef7cac844a0e052653' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3784496b7f94f31e2f04398027d01108' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4720a6548308aa032541e17d0709caf4' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb11ccf287e38569586f06cd03f2e9af' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd55d4837a1a4de89f8728c44e41401f' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'processDefinitionCategory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '867a9ffbc41872885d64f15811635bfa' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getProviderName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bc53140e3f7c63fd2acab6368896f10' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getModuleHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f1791ea066d333120fb983daee33df7' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23f5c0099fd190156607332f9fc78b9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4184d6ac72a22db872ea5cd48f07222e' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8f4af9e8247c070cc261f4e36bfbb3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '241c8762d73a3bab327894cc2bb27161' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getGroupedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a5e62054eeec25ecbc8eb2e73fb5e7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Plugin\\CategorizingPluginManagerTrait|\\Drupal\\Component\\Plugin\\PluginManagerInterface $this */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getGroupedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99f46ee2a37d7c7c2cd4ce84a1a78c47' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c94b22a6d6a00c62871d3e30abc78a14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformExporterManager object.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_exporter
   *   The module exporter.
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dbdc08dddff9d428c0a9392aa48c69d2' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '374c5448152cb7ce443f5c662717e5e7' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'removeExcludeDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2de5d69df9a145d44339cbb05c4dafc5' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getInstances',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14dd33aecc56c81391dd72864ded89f1' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc7ce847715c10ff737cfa5e3cf897cf' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformExporterManager',
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