<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformThemeManager.php-1594241402,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'a95ef542d3567cc1ce3bbb3042a5224b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a class to manage webform theming.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b75330426d1293a79ec8f23d4858a4f8' => 
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
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00997fe6b6951c082e44a96ea3d58cf6' => 
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
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe5355f634110f5c922002f2b296f23c' => 
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
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd22db7116ec9d636e5dda2199ca7ea99' => 
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
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86edfce6385d208d7500cb1570a6ae7c' => 
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
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '184d34bd8577bc633fb2b5b4cb060f8e' => 
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
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '203e20b2e2b0fa45f75f14c225707d2d' => 
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
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '230adc33388b07240b0a5578845d80ab' => 
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
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4bbe27c2716cb551ffa53ee5e07574e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme manager.
   *
   * @var \\Drupal\\Core\\Theme\\ThemeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '021434dae255ae8e381e8575b97250d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme handler.
   *
   * @var \\Drupal\\Core\\Extension\\ThemeHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a183d03bb03d1e909475e0e3554923f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme initialization.
   *
   * @var \\Drupal\\Core\\Theme\\ThemeInitializationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb77618a581688e8add4ca68cab3ab9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '985511f97ae59a2e1d328e17037401d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current route match.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91ff3a57b36b838f45eb8f9b761f820d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Contains the current active theme.
   *
   * @var \\Drupal\\Core\\Theme\\ActiveTheme
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee2e5bbf4f1f6d7550155b408b98573c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformThemeManager object.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer.
   * @param \\Drupal\\Core\\Theme\\ThemeManagerInterface $theme_manager
   *   The theme manager.
   * @param \\Drupal\\Core\\Extension\\ThemeHandlerInterface $theme_handler
   *   The theme handler.
   * @param \\Drupal\\Core\\Theme\\ThemeInitializationInterface $theme_initialization
   *   The theme initialization.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c65fcd826bc8268f7c5ac62e5fc9dc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a theme\'s name.
   *
   * @return string
   *   A theme\'s name
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'getThemeName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '764bc6ca83b09b4bcde810e71daba05d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get themes as associative array.
   *
   * @return array
   *   An associative array containing theme name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'getThemeNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0e18f71bcbc261b6be00fa5054ff580' => 
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
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'getActiveThemeNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0782a8778df204dacdef4daf759386f8' => 
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
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'hasActiveTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '437d3e348cf4c49efaef826e5478f42c' => 
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
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'isActiveTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bcb1a7752b2de0f69bf48ea5549c6c7e' => 
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
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'setCurrentTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c082287e9cbe1a8ff4d3546f6e56d9e' => 
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
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'setActiveTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49304c5c54d75ee9e0f1db1b715fb918' => 
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
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'render',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0da4567f5d9cc09d4a5105361d9dad06' => 
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
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'themeinitializationinterface' => 'Drupal\\Core\\Theme\\ThemeInitializationInterface',
        ),
         'className' => 'Drupal\\webform\\WebformThemeManager',
         'functionName' => 'renderPlain',
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