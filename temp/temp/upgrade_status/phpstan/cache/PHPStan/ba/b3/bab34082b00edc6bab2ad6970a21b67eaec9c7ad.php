<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Mail/MailManager.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Messenger/MessengerTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'b48a54b15788f8b01bc455973c87ba8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a Mail plugin manager.
 *
 * @see \\Drupal\\Core\\Annotation\\Mail
 * @see \\Drupal\\Core\\Mail\\MailInterface
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'mailhelper' => 'Drupal\\Component\\Utility\\Mail',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '200b5378b847688e9b0e762baae5004a' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1ac2d5c8355cc722454defaf1f87800' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '276d678d338fd6c4ca097177a000fe23' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 'setMessenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b240b44beb815365cf3276576bb606e3' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 'messenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0360e8d47d8ab3dec17e8440348b6ce' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '670fe6e3dc10ca68f962443e80f43747' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4b9177b0a5006d2c0eddc2b1de64b07' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77a5d30f799e430d1fa5795716ac095f' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75b1db642bc52b174a746a74b69add48' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '261752638d76033f19cdc382ae5715f3' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfbd2225b158b4ddbf2f3b01791421c1' => 
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
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77e6d66ea5b54f289417f73b462afd8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'mailhelper' => 'Drupal\\Component\\Utility\\Mail',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c6cbd3574c863ede21146864ad2d2e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger factory.
   *
   * @var \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'mailhelper' => 'Drupal\\Component\\Utility\\Mail',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f50a62c082547f9eca17bb85bf45a9de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'mailhelper' => 'Drupal\\Component\\Utility\\Mail',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '173b4b9cb23fad54fa26adabeb1542b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of already instantiated mail plugins.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'mailhelper' => 'Drupal\\Component\\Utility\\Mail',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0327ab7b5e237a0e6b5cb3e71535ff6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs the MailManager object.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration factory.
   * @param \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface $logger_factory
   *   The logger channel factory.
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
   *   The string translation service.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'mailhelper' => 'Drupal\\Component\\Utility\\Mail',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cda1824d8dcac11446bf217af4252695' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides PluginManagerBase::getInstance().
   *
   * Returns an instance of the mail plugin to use for a given message ID.
   *
   * The selection of a particular implementation is controlled via the config
   * \'system.mail.interface\', which is a keyed array.  The default
   * implementation is the mail plugin whose ID is the value of \'default\' key. A
   * more specific match first to key and then to module will be used in
   * preference to the default. To specify a different plugin for all mail sent
   * by one module, set the plugin ID as the value for the key corresponding to
   * the module name. To specify a plugin for a particular message sent by one
   * module, set the plugin ID as the value for the array key that is the
   * message ID, which is "${module}_${key}".
   *
   * For example to debug all mail sent by the user module by logging it to a
   * file, you might set the variable as something like:
   *
   * @code
   * array(
   *   \'default\' => \'php_mail\',
   *   \'user\' => \'devel_mail_log\',
   * );
   * @endcode
   *
   * Finally, a different system can be specified for a specific message ID (see
   * the $key param), such as one of the keys used by the contact module:
   *
   * @code
   * array(
   *   \'default\' => \'php_mail\',
   *   \'user\' => \'devel_mail_log\',
   *   \'contact_page_autoreply\' => \'null_mail\',
   * );
   * @endcode
   *
   * Other possible uses for system include a mail-sending plugin that actually
   * sends (or duplicates) each message to SMS, Twitter, instant message, etc,
   * or a plugin that queues up a large number of messages for more efficient
   * bulk sending or for sending via a remote gateway so as to reduce the load
   * on the local server.
   *
   * @param array $options
   *   An array with the following key/value pairs:
   *   - module: (string) The module name which was used by
   *     \\Drupal\\Core\\Mail\\MailManagerInterface->mail() to invoke hook_mail().
   *   - key: (string) A key to identify the email sent. The final message ID
   *     is a string represented as {$module}_{$key}.
   *
   * @return \\Drupal\\Core\\Mail\\MailInterface
   *   A mail plugin instance.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'mailhelper' => 'Drupal\\Component\\Utility\\Mail',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 'getInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0878e182a0027b0ff761d2c5be8d3188' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'mailhelper' => 'Drupal\\Component\\Utility\\Mail',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 'mail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54192b5156b5bbc77026953d0382f52c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Composes and optionally sends an email message.
   *
   * @param string $module
   *   A module name to invoke hook_mail() on. The {$module}_mail() hook will be
   *   called to complete the $message structure which will already contain
   *   common defaults.
   * @param string $key
   *   A key to identify the email sent. The final message ID for email altering
   *   will be {$module}_{$key}.
   * @param string $to
   *   The email address or addresses where the message will be sent to. The
   *   formatting of this string will be validated with the
   *   @link http://php.net/manual/filter.filters.validate.php PHP email validation filter. @endlink
   *   Some examples are:
   *   - user@example.com
   *   - user@example.com, anotheruser@example.com
   *   - User <user@example.com>
   *   - User <user@example.com>, Another User <anotheruser@example.com>
   * @param string $langcode
   *   Language code to use to compose the email.
   * @param array $params
   *   (optional) Parameters to build the email. Use the key \'_error_message\'
   *   to provide translatable markup to display as a message if an error
   *   occurs, or set this to false to disable error display.
   * @param string|null $reply
   *   Optional email address to be used to answer.
   * @param bool $send
   *   If TRUE, call an implementation of
   *   \\Drupal\\Core\\Mail\\MailInterface->mail() to deliver the message, and
   *   store the result in $message[\'result\']. Modules implementing
   *   hook_mail_alter() may cancel sending by setting $message[\'send\'] to
   *   FALSE.
   *
   * @return array
   *   The $message array structure containing all details of the message. If
   *   already sent ($send = TRUE), then the \'result\' element will contain the
   *   success indicator of the email, failure being already written to the
   *   watchdog. (Success means nothing more than the message being accepted at
   *   php-level, which still doesn\'t guarantee it to be delivered.)
   *
   * @see \\Drupal\\Core\\Mail\\MailManagerInterface::mail()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Mail',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'mailhelper' => 'Drupal\\Component\\Utility\\Mail',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Mail\\MailManager',
         'functionName' => 'doMail',
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