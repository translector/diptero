<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/EventSubscriber/WebformDefaultExceptionHtmlSubscriber.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '6e37f8f20afe386e4d720bb29395c2ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Event subscriber to redirect to login form when webform settings instruct to.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6710b8fae8941f69c7045b7f8a0ffd3b' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f40dc0a21263cc29b322c6c952b1d9fd' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7ecafcf1f36d55ae2424b8c0e008467' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fc7db3318f9e1acfba98e78aead8458' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a17bee7f9cace061c35dc7bb88bdbc9a' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b36d6f2bf8038237cac009f1e409569' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a39965c711021e4244c665bfad05c40' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9dc91e9f1c608183778ebaecf3dafcae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current account.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b70aac967bd5de86a0edf28508b10c04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration object factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '584bd181533c63ef2fdcd3975b832ab3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bb04e85365ab7bf2654ac5f15d5d60e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1c31a87fbd25498a5aea3ec7212221a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e06111393ade932be6986d1b266953f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformDefaultExceptionHtmlSubscriber object.
   *
   * @param \\Symfony\\Component\\HttpKernel\\HttpKernelInterface $http_kernel
   *   The HTTP kernel.
   * @param \\Psr\\Log\\LoggerInterface $logger
   *   The logger service.
   * @param \\Drupal\\Core\\Routing\\RedirectDestinationInterface $redirect_destination
   *   The redirect destination service.
   * @param \\Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface $access_unaware_router
   *   A router implementation which does not check access.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The current user.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration object factory.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   * @param \\Drupal\\webform\\WebformTokenManagerInterface $token_manager
   *   The webform token manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '004a781a0b79758c35a2c3ed51f92869' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'getPriority',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f59081884daa709394e37e0aa941ab73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handles a 403 error for HTML.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent $event
   *   The event to process.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'on403',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22af9d655801600d8ecacf0a23fb5117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Redirect to user login when access is denied to private webform file.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent $event
   *   The event to process.
   *
   * @see webform_file_download()
   * @see \\Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase::accessFileDownload
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'on403RedirectPrivateFileAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab064a0ea341e4fd2f4256ff7d24155e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Redirect to user login when access is denied for webform or submission.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent $event
   *   The event to process.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'on403RedirectEntityAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a7882f6df2540f10a3889a3cc5067d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'getHandledFormats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3223708a6ae8c5f5418970a625e5ad6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'onException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd427572240cf08824add42af67d2d57b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get 403 path from system.site config.
   *
   * @return string
   *   The custom 403 path or Drupal\'s default 403 path.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'getSystemSite403Path',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8fcebf6298306ea2469cfe75a08ca94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Redirect to user login with destination and display custom message.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent $event
   *   The event to process.
   * @param null|string $message
   *   (Optional) Message to be display on user login.
   * @param null|\\Drupal\\Core\\Entity\\EntityInterface $entity
   *   (Optional) Entity to be used when replacing tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'redirectToLogin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c072fbe7e6f41f0c10a90363bf4b8e44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Display custom message.
   *
   * @param null|string $message
   *   (Optional) Message to be display on user login.
   * @param null|\\Drupal\\Core\\Entity\\EntityInterface $entity
   *   (Optional) Entity to be used when replacing tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\EventSubscriber',
         'uses' => 
        array (
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'defaultexceptionhtmlsubscriber' => 'Drupal\\Core\\EventSubscriber\\DefaultExceptionHtmlSubscriber',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'redirectdestinationinterface' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformtokenmanagerinterface' => 'Drupal\\webform\\WebformTokenManagerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformDefaultExceptionHtmlSubscriber',
         'functionName' => 'setMessage',
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