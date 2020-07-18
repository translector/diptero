<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/slick/src/Form/SlickAdmin.php-1588418758,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'ff1f9994da2b74f3589ef0dc5469ebd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides resusable admin functions, or form elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14ce5d74b2eb922cc07ce6dc949a82e4' => 
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
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad7a8fff165fb1d1ac88c220ad918c82' => 
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
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '934f508005fe9d4003ff837c150a29e3' => 
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
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05fa5e49fea813665eb6cf0538f6fc63' => 
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
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c68dca70eb3dce3a9530214e3a875071' => 
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
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5be5024853fb2e1228d34ae56cf1819f' => 
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
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8ff85c80664041c0ccf5ca709ddf688' => 
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
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67d8350ca7d41e6ec783ac6f5f714945' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The blazy admin service.
   *
   * @var \\Drupal\\blazy\\Dejavu\\BlazyAdminExtended
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d185c2048ebc37ab92d0752f819533a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The slick manager service.
   *
   * @var \\Drupal\\slick\\SlickManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22b4d5b8f131480e8f1c3c796bbe2c5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a SlickAdmin object.
   *
   * @param \\Drupal\\blazy\\Dejavu\\BlazyAdminExtended $blazy_admin
   *   The blazy admin service.
   * @param \\Drupal\\slick\\SlickManagerInterface $manager
   *   The slick manager service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4dd8cf8159b047107897db2b75c76fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fc723873a768abb6daf59178375b903' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the blazy admin formatter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'blazyAdmin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '060669033fc97c1928f689fb1f2f1b43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the slick manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'manager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2be52c97b00987dc0581d7d93d8d24bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the main form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'buildSettingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1116a842cf205b7ac871d5a46919e332' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the opening form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'openingForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b8decc6bf6f4c770e33f2b432c29f0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the image formatter form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'mediaSwitchForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06930b0bd6669026c4432b694f4e11ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the image formatter form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'imageStyleForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba58602dedd9ec772050e18451c6055a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns re-usable fieldable formatter form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'fieldableForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2c4dfdc2650435902375d720124c26b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns re-usable grid elements across Slick field formatter and Views.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'gridForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a715319951bfa725eca18b5019f4b127' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the closing ending form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'closingForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a07767da8ecfc319fa5c8d9a72bff0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns overridable options to re-use one optionset.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'getOverridableOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47c6f2ce23e3252ef0b41911e87a708d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns default layout options for the core Image, or Views.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'getLayoutOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a26b3596c32d8cc05ce453d1fa313316' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available slick optionsets by group.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'getOptionsetsByGroupOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb60121fe7a441401d3ebe3108d4dc0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available slick skins for select options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'getSkinsByGroupOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd2c59096c1d07f993544037c329110b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return the field formatter settings summary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'getSettingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f791b7a8446f08a32584b4595cacfb3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available fields for select options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
         'functionName' => 'getFieldOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '297e7392a2d00729cfe08dcbb1b356fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns re-usable logic, styling and assets across fields and Views.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'element' => 'Drupal\\Core\\Render\\Element',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazyadminextended' => 'Drupal\\blazy\\Dejavu\\BlazyAdminExtended',
          'slickmanagerinterface' => 'Drupal\\slick\\SlickManagerInterface',
        ),
         'className' => 'Drupal\\slick\\Form\\SlickAdmin',
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