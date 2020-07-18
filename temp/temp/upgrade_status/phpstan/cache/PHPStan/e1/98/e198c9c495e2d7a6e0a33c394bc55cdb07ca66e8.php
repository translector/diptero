<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformTokenManager.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '0a91f8169abbdaad9ca368eaab30b61a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a class to manage token replacement.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9ec6b258eda23d9efe65538bc9c78d5' => 
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
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54bd670d313053625ce2b89a87f37d7a' => 
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
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bae86f548bd11f76d35579de7bb29bf7' => 
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
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87bc450f363423d9f52300436db8e065' => 
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
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a941e1b4784041e41d1db90540ae34e' => 
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
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c75757c4ca9ebe8099a0b9d9a96b61d' => 
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
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e66f83c6ad82fa51a55e5f99c126c46b' => 
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
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '256b23ca03ffc4839a2eeee228754ea7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81b7763a26aa78878987078fe5bcc570' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc83dfbc4a4e55652fe1af421b39309b' => 
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
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29216a4ce0aad2a82035cfac9ea8b733' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f9c632cc5dffa30f8eae902b6a066cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The token service.
   *
   * @var \\Drupal\\Core\\Utility\\Token
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f728bcea39307d6098012c0a19774932' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of support token suffixes.
   *
   * @var array
   *
   * @see webform_token_info_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3344ac8fec4b0143a9fc1885c55fab72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformTokenManager object.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Utility\\Token $token
   *   The token service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ac13a420d6a186acfed1e1e71736154' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'replace',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cae4ab774ffb5eb57242213414b6585d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'replaceNoRenderContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ee6f347902523d1771db282918b2af2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get token data based on an entity\'s type.
   *
   * @param array $data
   *   An array of token data.
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A Webform, Webform submission entity, or other entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'setTokenData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06ebf466926bf6012575c393586388d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set token option based on the entity.
   *
   * @param array $options
   *   An array of token data.
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A Webform or Webform submission entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'setTokenOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71b6295f87376674d6d998119cf35969' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'buildTreeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2816a8d6211be7df1b3961e144c80a0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'buildTreeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9d7779c854e7917a2f9662b20fd1654' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'elementValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '956ad0178452ec91dce370ea5e2d4c26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates an element\'s tokens.
   *
   * Note:
   * Element is not being based by reference since the #value is being altered.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'validateElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e0f5c0d05fd99917eec658b03ac97c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an array of supported token suffixes.
   *
   * @param array $options
   *   A keyed array of settings and flags to control the token
   *   replacement process.
   *
   * @return array
   *   An array of supported token suffixes,
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'getSuffixes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1831149ad968ab8b6330a6bab815f2b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepare token suffixes to be replaced and processed.
   *
   * Prepare token suffixes by wrapping them in temp
   * {webform-token-suffixes} tags.
   *
   * [webform:token:clear:urlencode] becomes
   * {webform-token-suffixes:clear:urlencode}[webform:token]{/webform-token-suffixes}.
   *
   * @param string|array $text
   *   A string of text that may contain tokens.
   * @param array $suffixes
   *   An array of supported suffixes.
   *
   * @return string
   *   A string of text with token suffixes wrapped in
   *   {webform-token-suffixes} tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'prepareSuffixes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f73cabc7bda071692f9d6d3ba85ef2fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process token suffixes after all tokens are replaced.
   *
   * @param string|array $text
   *   A string of text that may contain {webform-token-suffixes} tags.
   *
   * @return string
   *   String to text with all tokens suffixes processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManager',
         'functionName' => 'processSuffixes',
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