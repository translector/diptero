<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/Form/BlazyAdminBase.php-1588969110,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'a78135082e3a12d4f19a8b23279695e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A base for blazy admin integration to have re-usable methods in one place.
 *
 * @see \\Drupal\\gridstack\\Form\\GridStackAdmin
 * @see \\Drupal\\mason\\Form\\MasonAdmin
 * @see \\Drupal\\slick\\Form\\SlickAdmin
 * @see \\Drupal\\blazy\\Form\\BlazyAdminFormatterBase
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bc45297bbbf029438b3ae66901d5e37' => 
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
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f4832df4de4a9574253569c6ed7c3d1' => 
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
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67df505f898f1c3ffbab61f3d927728d' => 
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
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '009e0849fe02b41a14adf08781477485' => 
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
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9450438f6bf4206f625a7fc74f90022' => 
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
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7035a66893237dad2b22089f4109afb3' => 
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
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4276148c0a4d789b08fe16aaaf61506' => 
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
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e4556d3aad68c508caff6531c4e39dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A state that represents the responsive image style is disabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1cd8b0cf0ccf2f33e4b116d9a17de592' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A state that represents the media switch lightbox is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4499a9df276880fabc559456feb788d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A state that represents the media switch iframe is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79a6e63efedf0d43663250af0067fcbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A state that represents the thumbnail style is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7873687f8840626868de0d4a7ba7eb23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A state that represents the custom lightbox caption is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c47f188ce1e60bac8b7e190106f45d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A state that represents the image rendered switch is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32c1a975416a091528fb03031406344b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed8992927dbdc48fcbc491e9a27c8f0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The typed config manager service.
   *
   * @var \\Drupal\\Core\\Config\\TypedConfigManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c158d25ff92256262e11a3fa92cfa575' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The date formatter service.
   *
   * @var \\Drupal\\Core\\Datetime\\DateFormatterInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '160a245ad04f1a14dc44f97ece978c08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The blazy manager service.
   *
   * @var \\Drupal\\blazy\\BlazyManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28923a8b95f2afd7659bb7035c43f49b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a BlazyAdminBase object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface $entity_display_repository
   *   The entity display repository.
   * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config
   *   The typed config service.
   * @param \\Drupal\\Core\\Datetime\\DateFormatterInterface $date_formatter
   *   The date formatter service.
   * @param \\Drupal\\slick\\BlazyManagerInterface $blazy_manager
   *   The blazy manager service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cef81c8388a6a60b1b6344162ae15cab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8ce50794840c56a9dc55822c312e5bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity display repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getEntityDisplayRepository',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '118b5ea6e433bfd3fd18717526fd2d55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the typed config.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getTypedConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ede067967bcd065959820aa7e6a383ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the blazy manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'blazyManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f52b1abb13af1b9558a99f117cf98db4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns shared form elements across field formatter and Views.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'openingForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '846e7dd260c66f62bfdfa2d909bdb5da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns re-usable grid elements across field formatter and Views.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'gridForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b20f9a61700cac637e492f0e74cc1853' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns shared ending form elements across field formatter and Views.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'closingForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dbf915940493272c0211830ceff96f57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns simple form elements common for Views field, EB widget, formatters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'baseForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0b71f08ec191140e5c030c928d0c092' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns re-usable media switch form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'mediaSwitchForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d52216e2c86764c2221a3ad31d120fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns re-usable logic, styling and assets across fields and Views.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'finalizeForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86b63c4976ee389f7550ed51408c3c9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns time in interval for select options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getCacheOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17ce6f12dbd84bde8e37342c8b6f81e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available entities for select options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getEntityAsOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26d079123f3cdc6505cc9f9ea243af2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available optionsets for select options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getOptionsetOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71c9b897bef51d953928e1de8d7f449a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available view modes for select options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getViewModeOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af2e6b22519c83d5a39d1d5893883061' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns Responsive image for select options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getResponsiveImageOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '424d1e7b386c189ed740820585cb297f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get one of the pre-defined states used in this form.
   *
   * Thanks to SAM152 at colorbox.module for the little sweet idea.
   *
   * @param string $state
   *   The state to get that matches one of the state class constants.
   * @param array $definition
   *   The foem definitions or settings.
   *
   * @return array
   *   A corresponding form API state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'getState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7486dc3f89f4e56b47b34daf9425e05d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deprecated method to remove.
   *
   * @todo remove once sub-modules remove this method.
   * @see https://www.drupal.org/node/3105243
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\blazy\\Form\\BlazyAdminBase',
         'functionName' => 'breakpointsForm',
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