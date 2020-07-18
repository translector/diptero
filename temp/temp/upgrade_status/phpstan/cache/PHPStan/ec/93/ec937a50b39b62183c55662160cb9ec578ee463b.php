<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/ContextProvider/WebformSubmissionRouteContext.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '9f6baf2a87d393420921168033b30c21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sets the current webform submission as a context on webform submission routes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\ContextProvider',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5d1c0e744fa642dbee861beb5776da2' => 
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
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e5bdaa300940c2657f46799ede3a8d1' => 
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
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20173ebd3cc100e4f8d3b3c7641d6290' => 
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
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a56200570511a6a16e5af80be67da6f5' => 
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
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f95b601718c4278bfdff0dcf0be508ad' => 
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
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '542cf37ec3447e0e2f6af598f45b2fc8' => 
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
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc2f09a653068de48e838fb3e4cb2cf9' => 
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
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f45504005a466dc9deb347acf7c20642' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The route match object.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\ContextProvider',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b3b935fc37664277bbf35fe2bd14be5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformSubmissionRouteContext object.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\ContextProvider',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e20375ee6582861a7ca40b9136586c84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\ContextProvider',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => 'getRuntimeContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bad7d7e44ee6bfffbb6493e2cd57e739' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\ContextProvider',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\webform\\ContextProvider\\WebformSubmissionRouteContext',
         'functionName' => 'getAvailableContexts',
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