<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/field_group/src/Plugin/Derivative/FieldGroupLocalAction.php-1591739040,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '036a785184784fba7c000ea234e080ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides local action definitions for all entity bundles.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group\\Plugin\\Derivative',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerderiverinterface' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDeriverInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'deriverbase' => 'Drupal\\Component\\Plugin\\Derivative\\DeriverBase',
        ),
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '614b6fc03a0dfbfe2c63810fe3fec93c' => 
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
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94a279bbcb61c753d1362cdc199c1954' => 
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
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4847ab8ed7238af7fa2ec04d7e8e1ad0' => 
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
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c4c52f1fc384bd579078e82bc47d288' => 
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
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ef68cda1a728087ab6a62757cec4a9c' => 
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
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd379dea805d63d66fe4b53b7cf60528' => 
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
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd16f446ca41307d8c408998a651c9fda' => 
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
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c4f3342f0d5fd4c6f452f87d4d46878' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The route provider.
   *
   * @var \\Drupal\\Core\\Routing\\RouteProviderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group\\Plugin\\Derivative',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerderiverinterface' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDeriverInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'deriverbase' => 'Drupal\\Component\\Plugin\\Derivative\\DeriverBase',
        ),
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70bfe9385bbbde85038061b99659124c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group\\Plugin\\Derivative',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerderiverinterface' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDeriverInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'deriverbase' => 'Drupal\\Component\\Plugin\\Derivative\\DeriverBase',
        ),
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9b97a949fa8763eee3226fe44fda44e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a FieldUiLocalAction object.
   *
   * @param \\Drupal\\Core\\Routing\\RouteProviderInterface $route_provider
   *   The route provider to load routes by name.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group\\Plugin\\Derivative',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerderiverinterface' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDeriverInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'deriverbase' => 'Drupal\\Component\\Plugin\\Derivative\\DeriverBase',
        ),
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5aa9b258c4e71e0154b66b5ee0c62ac4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group\\Plugin\\Derivative',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerderiverinterface' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDeriverInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'deriverbase' => 'Drupal\\Component\\Plugin\\Derivative\\DeriverBase',
        ),
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85d712085523ce2818b39d7731090a51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group\\Plugin\\Derivative',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerderiverinterface' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDeriverInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'deriverbase' => 'Drupal\\Component\\Plugin\\Derivative\\DeriverBase',
        ),
         'className' => 'Drupal\\field_group\\Plugin\\Derivative\\FieldGroupLocalAction',
         'functionName' => 'getDerivativeDefinitions',
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