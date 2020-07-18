<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Unit/WebformEntityAccessControlHandlerTest.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '3ff2023f83f71dac814f88e927fa8d20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests webform access handler.
 *
 * @coversDefaultClass \\Drupal\\webform\\WebformEntityAccessControlHandler
 *
 * @group webform
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitytype' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityType',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformaccessrulesmanagerinterface' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
          'webformsourceentitymanagerinterface' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManagerInterface',
          'webformentityaccesscontrolhandler' => 'Drupal\\webform\\WebformEntityAccessControlHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e96ad95ad9e68a20d3ad190a737585b2' => 
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
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03a57c2d650f0cc5a7807eadce02b91c' => 
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
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05cc58c4754176febf8c42177bea9bff' => 
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
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b052d5ef92bcefed0fc1e450272e581' => 
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
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '763c16294cbd81904a3f7d6a7b607726' => 
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
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e32d44ec5a8eebde7188d0c75343ae98' => 
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
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd96ccff85abda49350341cc787a96157' => 
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
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1f8399048e532e644a43327d60662b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The test container.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitytype' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityType',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformaccessrulesmanagerinterface' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
          'webformsourceentitymanagerinterface' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManagerInterface',
          'webformentityaccesscontrolhandler' => 'Drupal\\webform\\WebformEntityAccessControlHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2635a791368bdf19afcf7e8b4976eb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitytype' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityType',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformaccessrulesmanagerinterface' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
          'webformsourceentitymanagerinterface' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManagerInterface',
          'webformentityaccesscontrolhandler' => 'Drupal\\webform\\WebformEntityAccessControlHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '553acb1fa5e31eeed297098f3128d24b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the access logic.
   *
   * @param string $operation
   *   Operation to request from ::checkAccess() method.
   * @param array $options
   *   Array of extra options.
   * @param array $expected
   *   Expected data from the tested class.
   * @param string $assert_message
   *   Assertion message to use for this test case.
   *
   * @see WebformEntityAccessControlHandler::checkAccess()
   *
   * @dataProvider providerCheckAccess
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitytype' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityType',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformaccessrulesmanagerinterface' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
          'webformsourceentitymanagerinterface' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManagerInterface',
          'webformentityaccesscontrolhandler' => 'Drupal\\webform\\WebformEntityAccessControlHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => 'testCheckAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e60ae95950e89a655480a2b4b9014b60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testCheckAccess().
   *
   * @see testCheckAccess()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitytype' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityType',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformaccessrulesmanagerinterface' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
          'webformsourceentitymanagerinterface' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManagerInterface',
          'webformentityaccesscontrolhandler' => 'Drupal\\webform\\WebformEntityAccessControlHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformsubmissionstorageinterface' => 'Drupal\\webform\\WebformSubmissionStorageInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\WebformEntityAccessControlHandlerTest',
         'functionName' => 'providerCheckAccess',
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