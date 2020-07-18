<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformHelpManager.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '8c6f7e557a380988b18c7e6c161b4c6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform help manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acdc0684d4004f24df27a696d55e44ff' => 
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
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a3300f0427d9d32a482fc7741a95436' => 
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
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa586b99b34cef09893edf91067d59ce' => 
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
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '278b66efc3abc864450461f0e855a9d9' => 
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
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a39ed5a295f4ab65f79f2f7345eeb43' => 
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
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3c4c7e238b5b4c76392b5f01fdf11ad' => 
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
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12d5af7c9cfe38d833ad347daee7d9d2' => 
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
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '065752b5ced5447fd44372626949dd06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Groups applied to help and videos.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '396fcdcb8117405c1f34096b95a4fd93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Help for the Webform module.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb5a4bcdf07852f5a144a06c92a0fef3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Videos for the Webform module.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b482dec6b4141f2a59d8763fc0688f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current version number of the Webform module.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05e287b2133a78ec1486acabcce11a98' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b8b37c71fd18ee776b473168f5cae20' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e3d19de692ff25b7979e186e9af3b16' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76651266c89e92c47a1a8ac65393c691' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The state service.
   *
   * @var \\Drupal\\Core\\State\\StateInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9ce29b54f189a3a55a173b468811a8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The path matcher.
   *
   * @var \\Drupal\\Core\\Path\\PathMatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91cb6dfb1344b02572ae271bafe309cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform add-ons manager.
   *
   * @var \\Drupal\\webform\\WebformAddonsManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb13eed2d0088d05ab3e718fb791b935' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform libraries manager.
   *
   * @var \\Drupal\\webform\\WebformLibrariesManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4a4b22d41b64ff754476761d75b23b9' => 
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
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bdb64bb65d5fbde3292bf62a616a801' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformHelpManager object.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\State\\StateInterface $state
   *   The state service.
   * @param \\Drupal\\Core\\Path\\PathMatcherInterface $path_matcher
   *   The path matcher.
   * @param \\Drupal\\webform\\WebformAddOnsManagerInterface $addons_manager
   *   The webform add-ons manager.
   * @param \\Drupal\\webform\\WebformLibrariesManagerInterface $libraries_manager
   *   The webform libraries manager.
   * @param \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager
   *   The webform element manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f103d013fc2fe9621e03d8bff2958ee7' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'getGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '706cd6c5b11e2521de10b8c7ef14f810' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'getHelp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '669d5d73dcb3bf4429454330345e168e' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'getVideo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9ba77dfa97245ff8a757d777a9f8dcf' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'getVideoLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55b45d237a59019334368c509cc4ac8f' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'addNotification',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91f8c255cd48ea151f00dbabd62927d9' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'getNotifications',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1be3c752f23064a510c67f576d376f3' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'deleteNotification',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb8c54c58b63371548214be92c502230' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'buildHelp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '360c25fe154fdfd87ad42486cdcbc3a6' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'buildIndex',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a40241c0a5a77f4ab6cb9da11d324002' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'buildVideos',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd96b690ec1480e9e5899973b60e3eb5' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'buildVideoLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bd6378c489e7e416aa04bb0d68109cd' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'buildAddOns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd279e627bc91057a470be0fef173ed4' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'buildLibraries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d761043dc956ed0cc349f590cab4a7f' => 
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
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'buildComparison',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09106245b4ac32226850675c0c0de560' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the current version number of the Webform module.
   *
   * @return string
   *   The current version number of the Webform module.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'getVersion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70204f9384f3f88652c07a68bdc70af7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the Webform module has been updated.
   *
   * @return bool
   *   TRUE if the Webform module has been updated.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'isUpdated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f42e726f3bad7ab45164e5d80454f326' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize group.
   *
   * @return array
   *   An associative array containing groups.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'initGroups',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1350e1b17bdb0bf774d2ed9a9cb33dc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize videos.
   *
   * @return array
   *   An associative array containing videos.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'initVideos',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c42924877d7edad3efdd39ea994833e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize help.
   *
   * @return array
   *   An associative array containing help.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'pathmatcherinterface' => 'Drupal\\Core\\Path\\PathMatcherInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform\\WebformHelpManager',
         'functionName' => 'initHelp',
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