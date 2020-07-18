<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_devel/src/WebformDevelSchema.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '2a1783b71a038e88a80c0e6fe75193b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform schema generator.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'emailelement' => 'Drupal\\Core\\Render\\Element\\Email',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'datebase' => 'Drupal\\webform\\Plugin\\WebformElement\\DateBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'textarea' => 'Drupal\\webform\\Plugin\\WebformElement\\Textarea',
          'textfield' => 'Drupal\\webform\\Plugin\\WebformElement\\TextField',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd99010f49c2d524bdc2c8f73312da79' => 
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
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98950c7a4f94e4d9b3556fe50b8422cd' => 
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
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12a8cb1b223b2df603911ae7eeb629ae' => 
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
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a38be8423848b1e08d86c276b9efb676' => 
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
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4dd03429f3c1c3b390e9c1ad40f73af' => 
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
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ea7ba8ef61c5ad89e7dc6c9660cbd09' => 
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
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac883188209cd42e895785ae30df7747' => 
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
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '703570874e623ae637e9dabfd3ed250b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The element info manager.
   *
   * @var \\Drupal\\Core\\Render\\ElementInfoManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'emailelement' => 'Drupal\\Core\\Render\\Element\\Email',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'datebase' => 'Drupal\\webform\\Plugin\\WebformElement\\DateBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'textarea' => 'Drupal\\webform\\Plugin\\WebformElement\\Textarea',
          'textfield' => 'Drupal\\webform\\Plugin\\WebformElement\\TextField',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf58f952fd46f4c34a02cf00410f3c3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'emailelement' => 'Drupal\\Core\\Render\\Element\\Email',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'datebase' => 'Drupal\\webform\\Plugin\\WebformElement\\DateBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'textarea' => 'Drupal\\webform\\Plugin\\WebformElement\\Textarea',
          'textfield' => 'Drupal\\webform\\Plugin\\WebformElement\\TextField',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '802b2df0e84f45fcc8f2df998e45e0bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformDevelSchema object.
   *
   * @param \\Drupal\\Core\\Render\\ElementInfoManagerInterface $element_info
   *   The element info manager.
   * @param \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager
   *   The webform element manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'emailelement' => 'Drupal\\Core\\Render\\Element\\Email',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'datebase' => 'Drupal\\webform\\Plugin\\WebformElement\\DateBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'textarea' => 'Drupal\\webform\\Plugin\\WebformElement\\Textarea',
          'textfield' => 'Drupal\\webform\\Plugin\\WebformElement\\TextField',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db801112972405f962c5193dab7370e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform scheme columns.
   *
   * @return array
   *   Associative array container webform scheme columns
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'emailelement' => 'Drupal\\Core\\Render\\Element\\Email',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'datebase' => 'Drupal\\webform\\Plugin\\WebformElement\\DateBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'textarea' => 'Drupal\\webform\\Plugin\\WebformElement\\Textarea',
          'textfield' => 'Drupal\\webform\\Plugin\\WebformElement\\TextField',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => 'getColumns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0cb8a301d9bf9f4ae5bc7d34f990e95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a webform\'s scheme elements.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return array
   *   An associative containing a webform\'s scheme elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'emailelement' => 'Drupal\\Core\\Render\\Element\\Email',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'datebase' => 'Drupal\\webform\\Plugin\\WebformElement\\DateBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'textarea' => 'Drupal\\webform\\Plugin\\WebformElement\\Textarea',
          'textfield' => 'Drupal\\webform\\Plugin\\WebformElement\\TextField',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => 'getElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d3b8a66b2dcea9b2f98a8993c7659ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform element schema.
   *
   * @param string $element_key
   *   The webform element key.
   * @param array $element
   *   The webform element.
   *
   * @return array
   *   An array containing the schema for the webform element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'emailelement' => 'Drupal\\Core\\Render\\Element\\Email',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'datebase' => 'Drupal\\webform\\Plugin\\WebformElement\\DateBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'textarea' => 'Drupal\\webform\\Plugin\\WebformElement\\Textarea',
          'textfield' => 'Drupal\\webform\\Plugin\\WebformElement\\TextField',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => 'getElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19cad162f5c64b34a3c493b82c2460b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get element options maxlength from option values.
   *
   * @param array $element
   *   An element.
   *
   * @return int
   *   An element options maxlength from option values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel',
         'uses' => 
        array (
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'emailelement' => 'Drupal\\Core\\Render\\Element\\Email',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'datebase' => 'Drupal\\webform\\Plugin\\WebformElement\\DateBase',
          'numericbase' => 'Drupal\\webform\\Plugin\\WebformElement\\NumericBase',
          'textarea' => 'Drupal\\webform\\Plugin\\WebformElement\\Textarea',
          'textfield' => 'Drupal\\webform\\Plugin\\WebformElement\\TextField',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_devel\\WebformDevelSchema',
         'functionName' => 'getOptionsMaxlength',
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