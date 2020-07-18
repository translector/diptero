<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/Tests/UpdatePathTestTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/RequirementsPageTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/SchemaCheckTestTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Config/Schema/SchemaCheckTrait.php-1594234425',
   'data' => 
  array (
    '1ab0db037c4aca6be21e99ba389d0c90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait UpdatePathTestTrait
 *
 * For use on \\Drupal\\Tests\\BrowserTestBase tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86da1ec7e749c021d1df21b601a1c226' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods for the requirements page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b04b1b5b6ecdc2877e6a90076f0789c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handles the update requirements page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'updateRequirementsProblem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de9e0c9a6b20ece4775406450b01ff12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Continues installation when the expected warnings are found.
   *
   * This function is no longer called by any core test, but it is retained for
   * use by contrib/custom tests. It is not deprecated, because it remains the
   * recommended function to call for its purpose.
   *
   * @param string[] $expected_warnings
   *   A list of warning summaries to expect on the requirements screen (e.g.
   *   \'PHP\', \'PHP OPcode caching\', etc.). If only the expected warnings
   *   are found, the test will click the "continue anyway" link to go to the
   *   next screen of the installer. If an expected warning is not found, or if
   *   a warning not in the list is present, a fail is raised.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'continueOnExpectedWarnings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '749528d65bf76a38c202fccf119fe738' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert the given warning summaries are present on the page.
   *
   * If an expected warning is not found, or if a warning not in the list is
   * present, a fail is raised.
   *
   * @param string[] $warning_summaries
   *   A list of warning summaries to expect on the requirements screen (e.g.
   *   \'PHP\', \'PHP OPcode caching\', etc.).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'assertWarningSummaries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49591205ae38e52a5907f8767dcd2e2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a class for checking configuration schema.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'schemachecktrait' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca44cf93e68999786fcdf8f6ab92c5da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for checking configuration schema.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd59c7f5191d1ad409d931541c6a85e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config schema wrapper object for the configuration object under test.
   *
   * @var \\Drupal\\Core\\Config\\Schema\\Element
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a139b6cbf9d927a94e8ee14814b7498' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration object name under test.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fab37b11230b0615912fc1af9019797' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks the TypedConfigManager has a valid schema for the configuration.
   *
   * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config
   *   The TypedConfigManager.
   * @param string $config_name
   *   The configuration name.
   * @param array $config_data
   *   The configuration data, assumed to be data for a top-level config object.
   *
   * @return array|bool
   *   FALSE if no schema found. List of errors if any found. TRUE if fully
   *   valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'checkConfigSchema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7db4dadceb35b1e7dd649c0aaf7d992a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper method to check data type.
   *
   * @param string $key
   *   A string of configuration key.
   * @param mixed $value
   *   Value of given key.
   *
   * @return array
   *   List of errors found while checking with the corresponding schema.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'checkValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2991cb491be42021924611ab89d3e8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the TypedConfigManager has a valid schema for the configuration.
   *
   * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config
   *   The TypedConfigManager.
   * @param string $config_name
   *   The configuration name.
   * @param array $config_data
   *   The configuration data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'schemachecktrait' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'assertConfigSchema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a885dc3de624368a08ec197e0219155' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts configuration, specified by name, has a valid schema.
   *
   * @param string $config_name
   *   The configuration name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'schemachecktrait' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'assertConfigSchemaByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1bd094c39f0e6b27e0971665b161257' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fail the test if there are failed updates.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cdde58c6218820fadc145f826542f85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function to run pending database updates.
   *
   * @param string|null $update_url
   *   The update URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'runUpdates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b4f6067948b1362be0ebbedc1e10743' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'runUpdates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '804121c20f87ca96ddb8257406257d28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'runUpdates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '150fde4e5ff32f9f2798dce5743698d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the selection page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'doSelectionTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '814cb5fadc30a211b0c92383797e5510' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs the update_script_test module and makes an update available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\UpdatePathTestTrait',
         'functionName' => 'ensureUpdatesToRun',
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