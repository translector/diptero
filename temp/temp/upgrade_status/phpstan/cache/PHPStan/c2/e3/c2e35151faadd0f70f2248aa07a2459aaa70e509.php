<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformMessageManager.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '431d79207066eee1004a898714421b89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the webform message (and login) manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04d9ced0e73b4e36348e3ff2459ba4c6' => 
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
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df73d89530d82ea1226d1e533c277797' => 
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
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3261a95677f7d028018bc1ea483000c' => 
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
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b9f53e1fcaad809030410dcfe0e6694' => 
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
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56c45cee36949a135457b13e42c0bd2b' => 
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
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00db180ce958d7c70ca957e917711c16' => 
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
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28dff87bec9f561d65a2af4ed041b228' => 
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
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f977b893231fc7be1d6a43181e0c74e3' => 
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
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7042f89eb0c5f3770e792bd4a79bf904' => 
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
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bc7e1625e8415dcb29e0b7512fed2e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission storage.
   *
   * @var \\Drupal\\webform\\WebformSubmissionStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1feb9bd0393a9f39225dba54d7ada526' => 
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
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1664059b57753df056c7cd6c3f318cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger service.
   *
   * @var \\Drupal\\Core\\Logger\\LoggerChannelInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd13892bc169ed2652a83b1b126095c00' => 
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
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b69e66ef000173e35ee7ac79b6e26425' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform request handler.
   *
   * @var \\Drupal\\webform\\WebformRequestInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81ecb2a09914cf8f025a263a8858d6e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fdb82380245b69b9a04f541faa51692' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A webform.
   *
   * @var \\Drupal\\webform\\WebformInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e389561ef0206a2069f10e5e54db96eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source entity.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00564b369bfcb73943b67d27cee9ac70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A webform submission.
   *
   * @var \\Drupal\\webform\\WebformSubmissionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1162e38203806c1228c52a360cd196b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b1c70c81c655e11c50811f726c09235' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformMessageManager object.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Psr\\Log\\LoggerInterface $logger
   *   A logger instance.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   * @param \\Drupal\\webform\\WebformRequestInterface $request_handler
   *   The webform request handler.
   * @param \\Drupal\\webform\\WebformTokenManagerInterface $token_manager
   *   The webform token manager.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57c370e001a8f62528ac8e80fb728bb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'setWebformSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a9f208ed199c1ad36626c76d2836208' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'setWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d25d720517d94bbcbcedbf5237b9fab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'setSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac3f44c470c751e0055e7a22bc26bc19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'append',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddc2d3086232b2148db9249ae1533db3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'display',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4929aeb50e453e39a854394dd16630f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'render',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b9399e8f9e85d83ce8f5b8e570e55c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4191fdbd2bd86e5b3fe2d70f91116d38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c966fe05caed83b35fab554901703d1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'log',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54c446cdc961b162f8342ba9c6e2fb89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get message from webform specific setting or global setting.
   *
   * @param string $key
   *   The name of webform settings message to be displayed.
   *
   * @return string|bool
   *   A message or FALSE when no message is found or the message
   *   is set to [none].
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'getSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebd9d258fc4eb0c30b615dadc0a00aa9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get custom message.
   *
   * @param string $key
   *   Message key.
   * @param array $arguments
   *   An array with placeholder replacements, keyed by placeholder.
   *
   * @return array|bool
   *   Renderable array or FALSE if custom message does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\webform\\WebformMessageManager',
         'functionName' => 'getCustomMessage',
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