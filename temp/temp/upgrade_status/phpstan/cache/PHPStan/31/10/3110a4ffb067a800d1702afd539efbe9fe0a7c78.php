<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/tests/modules/blazy_test/src/Form/BlazyAdminTest.php-1588969110,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '6ec53120d9b84eed983cbaca8fc664ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides resusable admin functions or form elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90a8cc4e8602298935b39aea4498e713' => 
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
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc9cd1d26ddf899c252e67948662a295' => 
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
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f70af03f10db5807e71380479270cca7' => 
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
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6abc3122042b6a614fe4883ee1917a94' => 
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
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '681c6db165f0fde2181e47d430cd76a5' => 
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
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebe264e4ba225d1dc68bc71a862ced29' => 
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
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e04bb84879f08581b55f2006ca278542' => 
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
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c68185142fe49638c9622ac40c80f2a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The blazy admin service.
   *
   * @var \\Drupal\\blazy\\Form\\BlazyAdminInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e742a14e91984539554b47b80f87d68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The blazy_test manager service.
   *
   * @var \\Drupal\\blazy_test\\BlazyManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b8475e68b786e10ac3e341655b4383c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a GridStackAdmin object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4650fc0e89890f169d03ffa962648d3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a7f91f5e0da38f86d88dec113e508ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the blazy admin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'blazyAdmin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9aa819e47d8b4c1b47ef0253a4a4c6a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the blazy_test manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'manager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4f99af717719f24a2db0281976d52d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns all settings form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'buildSettingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e33310657a50910ddd12de4eae39d11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the opening form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'openingForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ffc8db4996eb59e594796d50892b554' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the main form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'mainForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c294a1974b76d16d29a886ddec0cdf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the closing form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'closingForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '969b362bbbd6fdbb88780662e2fe829f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns default layout options for the core Image, or Views.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'getLayoutOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c1fedc988d38b758946358b92ca9042' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return the field formatter settings summary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'getSettingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2540a2a1eeb3a19f5dc2612c9cee77f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available fields for select options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'getFieldOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47ac96c81f954e70469d2bc2ab96d0cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns re-usable logic, styling and assets across fields and Views.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy_test\\Form',
         'uses' => 
        array (
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadmininterface' => 'Drupal\\blazy\\Form\\BlazyAdminInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy_test\\Form\\BlazyAdminTest',
         'functionName' => 'finalizeForm',
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