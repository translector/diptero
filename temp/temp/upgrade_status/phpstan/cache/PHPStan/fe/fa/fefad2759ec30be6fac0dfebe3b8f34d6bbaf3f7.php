<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/FunctionalTests/Update/UpdatePathTestBase.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/UpdatePathTestTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/RequirementsPageTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/SchemaCheckTestTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Config/Schema/SchemaCheckTrait.php-1594234425',
   'data' => 
  array (
    '2ac4ab27fef09771ac6cade547661377' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for writing an update test.
 *
 * To write an update test:
 * - Write the hook_update_N() implementations that you are testing.
 * - Create one or more database dump files, which will set the database to the
 *   "before updates" state. Normally, these will add some configuration data to
 *   the database, set up some tables/fields, etc.
 * - Create a class that extends this class.
 * - Ensure that the test is in the legacy group. Tests can have multiple
 *   groups.
 * - In your setUp() method, point the $this->databaseDumpFiles variable to the
 *   database dump files, and then call parent::setUp() to run the base setUp()
 *   method in this class.
 * - In your test method, call $this->runUpdates() to run the necessary updates,
 *   and then use test assertions to verify that the result is what you expect.
 * - In order to test both with a "bare" database dump as well as with a
 *   database dump filled with content, extend your update path test class with
 *   a new test class that overrides the bare database dump. Refer to
 *   UpdatePathTestBaseFilledTest for an example.
 *
 * @ingroup update_api
 *
 * @see hook_update_N()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3859f83baac245755587bfa7bf6c7dd' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f6ad7614070ba8686170f226eb93726' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05c4a87d6876ae91cde99d5b8afbcfc0' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'updateRequirementsProblem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71041c9413a7ea921e0df844ec4762ec' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'continueOnExpectedWarnings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf4f629e48ba74c7d9468ae3d3eac1a5' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'assertWarningSummaries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa2fa31922bba89faf8c779ba4448d07' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a29ec688bd0d430b84f4aba6c1fb822' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ccddd948d8a1832b9a9d8c0551943ef' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '879915319d41205d11eaed0491d35dbf' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99fb820349596303c29a2056df787189' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'checkConfigSchema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '501daca1c23588216f338754efb8cc5a' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'checkValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60589dbcfcdaf0e16d3960d2f645ae27' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'assertConfigSchema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef63da76075bf68ffc268249e511bd86' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'assertConfigSchemaByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff17862decb888681216967c08a2e19c' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '648fbdaf6394c46de6f83463dc94b321' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'runUpdates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc7207af7b0fe00b24e47ff5b3cc55d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'runUpdates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bffc2de8e399bda8ea58c8af8d4a6457' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'runUpdates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f84fec23ebc82961c9effc713430ecd8' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'doSelectionTest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4868a3ca086b6b6f1f5c885de61ac4cb' => 
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
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'ensureUpdatesToRun',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cfa643cd27fa04c2208f8d9b4b45d7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable after the database is loaded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fe14e1e53decd9fab2278cbc490fc71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The file path(s) to the dumped database(s) to load into the child site.
   *
   * The file system/tests/fixtures/update/drupal-8.bare.standard.php.gz is
   * normally included first -- this sets up the base database from a bare
   * standard Drupal installation.
   *
   * The file system/tests/fixtures/update/drupal-8.filled.standard.php.gz
   * can also be used in case we want to test with a database filled with
   * content, and with all core modules enabled.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dec5c92d2e5b07a26a495414ed7da1a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The install profile used in the database dump file.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c81961bbaa47bccc98765267977f60ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag that indicates whether the child site has been updated.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '906b33e928b674e286af23bf440c0def' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Array of errors triggered during the update process.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd34c8c36c8c46b17505fbab9ffdf560' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Array of modules loaded when the test starts.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccf2491c2b5b5c2dc6ab8d10e181e05b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag to indicate whether zlib is installed or not.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5f117d885acac83006993d367505f79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag to indicate whether there are pending updates or not.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4e55f2848972a96972914241418ab72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The update URL.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b2d26a44f6e27d4915800c34cc1435a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Disable strict config schema checking.
   *
   * The schema is verified at the end of running the update.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a83e29c1fe88ffee8d356b2ed287257' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an UpdatePathTestCase object.
   *
   * @param $test_id
   *   (optional) The ID of the test. Tests with the same id are reported
   *   together.
   * @param array $data
   *   (optional) The test case data. Defaults to none.
   * @param string $data_name
   *   The test data name. Defaults to none.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edfac703cc9d7ab47b519bcf2b4b1a48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides WebTestBase::setUp() for update testing.
   *
   * The main difference in this method is that rather than performing the
   * installation via the installer, a database is loaded. Additional work is
   * then needed to set various things such as the config directories and the
   * container that would normally be done via the installer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92d4ebc7c096f2ead59e9704a9b04391' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'installDrupal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18ae7bd74cf4324147f491774cc72403' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'doInstall',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45ac52638099b4fd15cd12f1a4a4c8ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'initFrontPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f60a465ee5719396621f9d4460381cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set database dump files to be used.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'setDatabaseDumpFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b2d6d97be4b18465e2ffe66ce43757a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add settings that are missed since the installer isn\'t run.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'prepareSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6e8c09d2a314c41d6de90032bedfb02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function to run pending database updates.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'runUpdates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '595866aa35950a68dbe68930ca7338ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs the install database tasks for the driver used by the test runner.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'runDbTasks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df852ec5834fe5fbf8cd76076812abe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replace User 1 with the user created here.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'replaceUser1',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9179c487f85bb82e72bec03ca49d33aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $account */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests\\Update',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testrunnerkernel' => 'Drupal\\Core\\Test\\TestRunnerKernel',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'url' => 'Drupal\\Core\\Url',
          'updatepathtesttrait' => 'Drupal\\Tests\\UpdatePathTestTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\FunctionalTests\\Update\\UpdatePathTestBase',
         'functionName' => 'replaceUser1',
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