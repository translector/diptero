<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/slick/src/SlickSkinManager.php-1588418758,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'a4a58d0edfe2a27bb1968607ecf57637' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements SlickSkinManagerInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24598be849afd9c002647a9105d27ced' => 
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
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '261a5d62f293e496dd445f59a097a2fd' => 
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
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd0b0a2274a20a18f93ce2732ff11047' => 
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
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7112be6ea4f8e0b1eed582583999c2f4' => 
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
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a50c2a2dbd19ba40872b76d6e7c4700' => 
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
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9efeed348f423eb56a3cefc2ebf850a2' => 
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
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fa313747bf8b0ca35a23c3d5fa807fd' => 
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
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c23670bf2929e749f00a5eecf94c240c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The app root.
   *
   * @var \\SplString
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd54d7e89dc9b16084f27d1fbb274937' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a39333206f8e9145f940f7a92848c12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Static cache for the skin definition.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '560e47f5bd72268b03ab43cf77daa55e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Static cache for the skins by group.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f4dc005f711703ba8a89dd76b7a5704' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The library info definition.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fb69823b114e458c9b727121000556b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The easing library path.
   *
   * @var string|bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32e7cc2e6c9bbc96c9953a111d48e78e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The slick library path.
   *
   * @var string|bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '908fbe9a573b93f529c5c8bf4d6c40a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '292f268a7db953880bf9b409fbf2bff2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the supported skins.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'getConstantSkins',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e44b41f02037a7e4e7c0fc4961120b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns slick config shortcut.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'config',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7e0c4bd6f3116e1c8b32a6955f3b371' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns cache backend service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'getCache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4a95680e8bf54103fd7016122305e4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns app root.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'root',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42470efaba8898b8a56b208ebe07c350' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'load',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01bc42b7bdf199a2c3ffbd2f17db7b57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'loadMultiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '246ee7bd36cf1efce710f162a9fa2718' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns slick skins registered via SlickSkin plugin and or defaults.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'getSkins',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a73cb0e3bb0fcbc11cff617f7de1e0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available slick skins by group.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'getSkinsByGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc4aee7453da629cc7b7b8a8e78b419d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements hook_library_info_build().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'libraryInfoBuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '996233765c43d4d8921543d7427bf256' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides slick skins and libraries.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'attach',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5e8707c8e981fcaa53aae9d75bad59f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides skins only if required.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'attachSkin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67631b04849a925571051c817ae3c5b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns easing library path if available, else FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'getEasingPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '090b7dcc0b5bb343b72687024f6f0ff3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns slick library path if available, else FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'getSlickPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '525275c07d05739b6cced2c456c95745' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements hook_library_info_alter().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'libraryInfoAlter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '481f837258329d7f9488b7d504d1cd99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Collects defined skins as registered via hook_MODULE_NAME_skins_info().
   *
   * This deprecated is adopted from BlazyManager to allow its removal anytime.
   *
   * @todo deprecate and remove at slick:3.x+.
   * @see https://www.drupal.org/node/2233261
   * @see https://www.drupal.org/node/3105670
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'slick' => 'Drupal\\slick\\Entity\\Slick',
        ),
         'className' => 'Drupal\\slick\\SlickSkinManager',
         'functionName' => 'buildSkins',
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