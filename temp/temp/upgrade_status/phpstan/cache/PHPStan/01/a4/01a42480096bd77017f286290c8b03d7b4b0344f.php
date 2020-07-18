<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_access/src/Breadcrumb/WebformAccessBreadcrumbBuilder.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'ce40ad21bb4e271845f32c7709e8be16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform access breadcrumb builder.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80c1fd2c38d559f656475f9ca97ce4e9' => 
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
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f8d02de34f0d245bfe1e71bed3f4a00' => 
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
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '426227b10371713291f7cf1abdab89d6' => 
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
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2d2448db903219e7393542790c748ae' => 
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
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6dd7c5c959b1b6527a0e80b080a084c' => 
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
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13c507634d16f6e7f9b6776295deadde' => 
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
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3170d5d93cb81ef3a3618d05493396d7' => 
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
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd0308f63691409a82cc1d713b33184d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current route\'s entity or plugin type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66ea7d1b61ff2639595d941dc12f3c0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformAccessBreadcrumbBuilder object.
   *
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
   *   The string translation service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5377fdf992adc893adfa0c2f1db7d67c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => 'applies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f338f1c0a4f7afd34fd79350770c5235' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Breadcrumb',
         'uses' => 
        array (
          'breadcrumbbuilderinterface' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
          'breadcrumb' => 'Drupal\\Core\\Breadcrumb\\Breadcrumb',
          'link' => 'Drupal\\Core\\Link',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform_access\\Breadcrumb\\WebformAccessBreadcrumbBuilder',
         'functionName' => 'build',
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