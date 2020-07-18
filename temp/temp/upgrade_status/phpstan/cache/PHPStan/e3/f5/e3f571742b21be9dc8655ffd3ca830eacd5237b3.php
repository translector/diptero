<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/EventSubscriber/WebformExceptionHtmlSubscriber.php-1594241402,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'be0258d3363011f9ebf908921b26cf28' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fe3ad432cdffef6138c8008a49a8afe' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03acaff0019790bd4fce51a5b5812efe' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8ea717f9396fa999c1b281346471438' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73fbb7ef515057fe59066d282a796650' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '339601948ae92ff9e2dfd09feae33285' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a4aed561a1495a4b985e350c45e0176' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d156a027892fc6e9a5700464ac11b68' => 
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
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5df220e1e6139abb5a7111cc6994b5d7' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '367fd0bc007d8eaaa557a8718f9a79fd' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5275d7cb1bfcb45dd98b0c955909851' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee1a4ea26561e8a88dd01de710d50d35' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1de6402fe60465c14eaaab23053e0bee' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abcf52b1ab450593075111f2e09e1787' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformExceptionHtmlSubscriber object.
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ddce12193bafac5f1286a5910717024' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'getPriority',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3dd4f9245ba647a08291a279567b59b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handles a 403 error for HTML.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent $event
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'on403',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '360c1a80232931d9e254668ae581932e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Redirect to user login when access is denied to private webform file.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent $event
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'on403RedirectPrivateFileAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40c5c7f2a01d451ece612350de37b051' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Redirect to user login when access is denied for webform or submission.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent $event
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'on403RedirectEntityAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0516efa71355245ed7b0c99b819228be' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'getHandledFormats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4450ef1cf716fac38e9e6a8ab4952103' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'onException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0c94c20940a3d472b08b51a032d3f7e' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'getSystemSite403Path',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7716562caa61232617d9096ad9b528e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Redirect to user login with destination and display custom message.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent $event
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
         'functionName' => 'redirectToLogin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df7c9ad70a7c4dd5a86e7449daa15000' => 
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
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
          'urlmatcherinterface' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
        ),
         'className' => 'Drupal\\webform\\EventSubscriber\\WebformExceptionHtmlSubscriber',
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