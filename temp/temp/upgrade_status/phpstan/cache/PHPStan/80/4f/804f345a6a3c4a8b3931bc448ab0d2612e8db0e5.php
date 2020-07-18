<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/KernelTests/KernelTestBase.php-1594234425,/var/www/html/web/core/tests/Drupal/KernelTests/AssertLegacyTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/KernelTests/AssertContentTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/AssertHelperTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/RandomGeneratorTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/ConfigTestTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Config/StorageCopyTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/TestRequirementsTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/PhpunitCompatibilityTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/TestTools/PhpUnitCompatibility/PhpUnit7/TestCompatibilityTrait.php-1594234425',
   'data' => 
  array (
    'e0ae4c3f085a3b98b005a1d543c1cfac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for functional integration tests.
 *
 * This base class should be useful for testing some types of integrations which
 * don\'t require the overhead of a fully-installed Drupal instance, but which
 * have many dependencies on parts of Drupal which can\'t or shouldn\'t be mocked.
 *
 * This base class partially boots a fixture Drupal. The state of the fixture
 * Drupal is comparable to the state of a system during the early part of the
 * installation process.
 *
 * Tests extending this base class can access services and the database, but the
 * system is initially empty. This Drupal runs in a minimal mocked filesystem
 * which operates within vfsStream.
 *
 * Modules specified in the $modules property are added to the service container
 * for each test. The module/hook system is functional. Additional modules
 * needed in a test should override $modules. Modules specified in this way will
 * be added to those specified in superclasses.
 *
 * Unlike \\Drupal\\Tests\\BrowserTestBase, the modules are not installed. They are
 * loaded such that their services and hooks are available, but the install
 * process has not been performed.
 *
 * Other modules can be made available in this way using
 * KernelTestBase::enableModules().
 *
 * Some modules can be brought into a fully-installed state using
 * KernelTestBase::installConfig(), KernelTestBase::installSchema(), and
 * KernelTestBase::installEntitySchema(). Alternately, tests which need modules
 * to be fully installed could inherit from \\Drupal\\Tests\\BrowserTestBase.
 *
 * @see \\Drupal\\Tests\\KernelTestBase::$modules
 * @see \\Drupal\\Tests\\KernelTestBase::enableModules()
 * @see \\Drupal\\Tests\\KernelTestBase::installConfig()
 * @see \\Drupal\\Tests\\KernelTestBase::installEntitySchema()
 * @see \\Drupal\\Tests\\KernelTestBase::installSchema()
 * @see \\Drupal\\Tests\\BrowserTestBase
 *
 * @ingroup testing
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04b7b8b5694af232efec4012cf0edae8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Translates Simpletest assertion methods to PHPUnit.
 *
 * Protected methods are custom. Public static methods override methods of
 * \\PHPUnit\\Framework\\Assert.
 *
 * Deprecated Scheduled for removal in Drupal 10.0.0. Use PHPUnit\'s native
 *   assert methods instead.
 *
 * @todo https://www.drupal.org/project/drupal/issues/3031580 Note that
 *   deprecations in this file do not use the @ symbol in Drupal 8 because this
 *   will be removed in Drupal 10.0.0.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '686efc7faa59842d15b8c0e948a4d419' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assert()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertTrue()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1b917463b11facc0bf9298f112257c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertEqual()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertEquals()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '734cbc370693697af6895e025de7be96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertNotEqual()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use
   *   self::assertNotEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNotEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0d87f9c5af7c91c044e66ee34be0c79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertIdentical()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertSame()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertIdentical',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98e5a1dbdbc114f390b48b3c37aed486' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertNotIdentical()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use
   *   self::assertNotSame() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNotIdentical',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3601feac4ac3a71164526e17bb388888' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertIdenticalObject()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertEquals()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertIdenticalObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a103bfbb73041a649138fa74921122d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::pass()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertTrue()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'pass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b6d82c2d2be0bded69f710b381d93f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::verbose()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'verbose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efe44fd63629ac52c8c82adc8bf3a266' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides test methods to assert content.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a649a88706083dffbd3fec7e4cdee942' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current raw content.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41e23a88f9dcbb6e4a3579560cab778e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plain-text content of raw $content (text nodes).
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34c39446d45ba30235ae842eb0335c31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The drupalSettings value from the current raw $content.
   *
   * Variable drupalSettings refers to the drupalSettings JavaScript variable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '844de999f10de15fa7965e2533619d46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The XML structure parsed from the current raw $content.
   *
   * @var \\SimpleXMLElement
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c36489d00109699521f677384fe16c62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current raw content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getRawContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57d9b8e5d6ce2cbce046f96dc688ff5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the raw content (e.g. HTML).
   *
   * @param string $content
   *   The raw content to set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'setRawContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8403789cd21ebebd32d6238f6c4c43b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the plain-text content from the current raw content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getTextContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad290856a61332b7c222110c1dac84ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes all white-space between HTML tags from the raw content.
   *
   * White-space is only removed if there are no non-white-space characters
   * between HTML tags.
   *
   * Use this (once) after performing an operation that sets new raw content,
   * and when you want to use e.g. assertText() but ignore potential white-space
   * caused by HTML output templates.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'removeWhiteSpace',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6785a86100746f9f32a1c879cd747d8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value of drupalSettings for the currently-loaded page.
   *
   * Variable drupalSettings refers to the drupalSettings JavaScript variable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getDrupalSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e94fee19b5fa4e3eaf8118ac52c57906' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value of drupalSettings for the currently-loaded page.
   *
   * Variable drupalSettings refers to the drupalSettings JavaScript variable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'setDrupalSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea2cc9b2a23eaf60f6eeee4318f16440' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parse content returned from curlExec using DOM and SimpleXML.
   *
   * @return \\SimpleXMLElement|false
   *   A SimpleXMLElement or FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'parse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd4b269755348a0279628611c0d3aaca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the current URL from the cURL handler.
   *
   * @return string
   *   The current URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f029e52fdf250122954669a3fea68669' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an XPath query.
   *
   * Builds an XPath query by replacing placeholders in the query by the value
   * of the arguments.
   *
   * XPath 1.0 (the version supported by libxml2, the underlying XML library
   * used by PHP) doesn\'t support any form of quotation. This function
   * simplifies the building of XPath expression.
   *
   * @param string $xpath
   *   An XPath query, possibly with placeholders in the form \':name\'.
   * @param array $args
   *   An array of arguments with keys in the form \':name\' matching the
   *   placeholders in the query. The values may be either strings or numeric
   *   values.
   *
   * @return string
   *   An XPath query with arguments replaced.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'buildXPathQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02a1ac271d58164372a1486ec2bdad66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs an xpath search on the contents of the internal browser.
   *
   * The search is relative to the root element (HTML tag normally) of the page.
   *
   * @param string $xpath
   *   The xpath string to use in the search.
   * @param array $arguments
   *   An array of arguments with keys in the form \':name\' matching the
   *   placeholders in the query. The values may be either strings or numeric
   *   values.
   *
   * @return \\SimpleXMLElement[]|bool
   *   The return value of the xpath search or FALSE on failure. For details on
   *   the xpath string format and return values see the SimpleXML
   *   documentation.
   *
   * @see http://php.net/manual/function.simplexml-element-xpath.php
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'xpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd77d5f2a5c9635a88c4efa32ada887cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Searches elements using a CSS selector in the raw content.
   *
   * The search is relative to the root element (HTML tag normally) of the page.
   *
   * @param string $selector
   *   CSS selector to use in the search.
   *
   * @return \\SimpleXMLElement[]
   *   The return value of the XPath search performed after converting the CSS
   *   selector to an XPath selector.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'cssSelect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b711eb6a5ac7ea764f8836afde2a602' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all option elements, including nested options, in a select.
   *
   * @param \\SimpleXMLElement $element
   *   The element for which to get the options.
   *
   * @return \\SimpleXmlElement[]
   *   Option elements in select.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getAllOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fba77254d40a2c071740049c3b0c3ffc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is found.
   *
   * An optional link index may be passed.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   * @param int $index
   *   Link position counting from zero.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use strtr() to embed variables in the message text, not
   *   t(). If left blank, a default message will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b4b647272b386ffb8f0675cbae6f20f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is not found.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f3e3a61ddd3e8e6a8787b003fabe902' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param string $index
   *   Link position counting from zero.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertLinkByHref',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '547ebd0b98816a7016e0ad32aa6d4491' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is not found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoLinkByHref',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '478fb095d1f3fa43c0998261b63b3cfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href is not found in the main region.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoLinkByHrefInMainRegion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd7e0bab2506936a65e35df2d201a4c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS found on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dabea4abdc681a95b752f9195f6fb2ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text is NOT found on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6ec6963836e7d4bbd6cd943a70e2060' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS found escaped on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8068877c61d35d103e7ae410cd4fb12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS NOT found escaped on the loaded page, fail
   * otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '568083103891bdae94ca7581be13497e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the page (with HTML stripped) contains the text.
   *
   * Note that stripping HTML tags also removes their attributes, such as
   * the values of text fields.
   *
   * @param string $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   *
   * @see \\Drupal\\simpletest\\AssertContentTrait::assertRaw()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6078f78f8d12496e0c531658faa60e4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the page (with HTML stripped) does not contains the text.
   *
   * Note that stripping HTML tags also removes their attributes, such as
   * the values of text fields.
   *
   * @param string $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   *
   * @see \\Drupal\\simpletest\\AssertContentTrait::assertNoRaw()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7601f0c1b96a5167d06be122490ce247' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper for assertText and assertNoText.
   *
   * It is not recommended to call this function directly.
   *
   * @param string $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default. Defaults to \'Other\'.
   * @param bool $not_exists
   *   (optional) TRUE if this text should not exist, FALSE if it should.
   *   Defaults to TRUE.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertTextHelper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d57d6fc972a9cde58b809fa54f7bbe8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the text is found ONLY ONCE on the text version of the page.
   *
   * The text version is the equivalent of what a user would see when viewing
   * through a web browser. In other words the HTML has been filtered out of
   * the contents.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertUniqueText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b908dd8d62921a808190d0c21b086cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the text is found MORE THAN ONCE on the text version of the page.
   *
   * The text version is the equivalent of what a user would see when viewing
   * through a web browser. In other words the HTML has been filtered out of
   * the contents.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoUniqueText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '453204999dc01de54921831624b142c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper for assertUniqueText and assertNoUniqueText.
   *
   * It is not recommended to call this function directly.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default. Defaults to \'Other\'.
   * @param bool $be_unique
   *   (optional) TRUE if this text should be found only once, FALSE if it
   *   should be found more than once. Defaults to FALSE.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertUniqueTextHelper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05f2c864a1f88091f7386d368590215a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Triggers a pass if the Perl regex pattern is found in the raw content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '590bd8c85b2a31e11363740d04cc4cdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Triggers a pass if the perl regex pattern is not found in raw content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84dc257a45ca1bc4ded4baad8b1102d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a Perl regex pattern is found in the plain-text content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   * @param string $message
   *   (optional) A message to display with the assertion.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertTextPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88dda3f13c6fb82e99b29a0a43caa847' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pass if the page title is the given string.
   *
   * @param string $title
   *   The string the title should be.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '051eca1a25e06c72218f0b3393632127' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pass if the page title is not the given string.
   *
   * @param string $title
   *   The string the title should not be.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d776863f95a43c78dfe752ba6971955' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts themed output.
   *
   * @param string $callback
   *   The name of the theme hook to invoke; e.g. \'links\' for links.html.twig.
   * @param string $variables
   *   An array of variables to pass to the theme function.
   * @param string $expected
   *   The expected themed output string.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertThemeOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09e06bd5b619541360a5352ad2709569' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Render\\RendererInterface $renderer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertThemeOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da2e8d20c50c09b795110246277efb44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists in the current page with a given Xpath result.
   *
   * @param \\SimpleXmlElement[] $fields
   *   Xml elements.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default) to skip
   *   checking the actual value, while still checking that the field exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertFieldsByValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e921b12c9f5293d083e33fd66c067e5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists in the current page by the given XPath.
   *
   * @param string $xpath
   *   XPath used to find the field.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default)
   *   to skip checking the actual value, while still checking that the field
   *   exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertFieldByXPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b111de7c485ea4e17f2fddba84072135' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the selected value from a select field.
   *
   * @param \\SimpleXmlElement $element
   *   SimpleXMLElement select element.
   *
   * @return bool
   *   The selected value or FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getSelectedItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57494cfb684a9f01ad5f45fda0a88a8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist or its value does not match, by XPath.
   *
   * @param string $xpath
   *   XPath used to find the field.
   * @param string $value
   *   (optional) Value of the field, to assert that the field\'s value on the
   *   page does not match it.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoFieldByXPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c74bbaf22d63762dbb1f90c8ce9c9f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given name and value.
   *
   * @param string $name
   *   Name of field to assert.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default)
   *   to skip checking the actual value, while still checking that the field
   *   exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertFieldByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c5864a43769d7bc40ee38af4f513052' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given name and value.
   *
   * @param string $name
   *   Name of field to assert.
   * @param string $value
   *   (optional) Value for the field, to assert that the field\'s value on the
   *   page doesn\'t match it. You may pass in NULL to skip checking the
   *   value, while still checking that the field doesn\'t exist. However, the
   *   default value (\'\') asserts that the field value is not an empty string.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoFieldByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffdf9a9639cb879b7de7c01e6098538c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given ID and value.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $value
   *   (optional) Value for the field to assert. You may pass in NULL to skip
   *   checking the value, while still checking that the field exists.
   *   However, the default value (\'\') asserts that the field value is an empty
   *   string.
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertFieldById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86338fb3987c10ce00e4bdb47c2160af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given ID and value.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string $value
   *   (optional) Value for the field, to assert that the field\'s value on the
   *   page doesn\'t match it. You may pass in NULL to skip checking the value,
   *   while still checking that the field doesn\'t exist. However, the default
   *   value (\'\') asserts that the field value is not an empty string.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoFieldById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e8c64902b823c705ca02835542635bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a checkbox field in the current page is checked.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertFieldChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5f7f23f04fa4e662ddef54dea2dfd8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a checkbox field in the current page is not checked.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoFieldChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7238932a1da335dbf85e42d0c3b67dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page exists.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edbb6f48c01b0ae457e0b967f1a406cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option with the visible text exists.
   *
   * @param string $id
   *   The ID of the select field to assert.
   * @param string $text
   *   The text for the option tag to assert.
   * @param string $message
   *   (optional) A message to display with the assertion.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertOptionByText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3695f67097da8cde46522b8661702ba3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page exists.
   *
   * @param string $drupal_selector
   *   The data drupal selector of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertOptionWithDrupalSelector',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21fb5d65b92eb3ab3accc68024e6a756' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page does not exist.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afc039075824a760adc3464f752f6fd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page is checked.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   *
   * @todo $id is unusable. Replace with $name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertOptionSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dbd7820811fb0270f13eb9133693adb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page is checked.
   *
   * @param string $drupal_selector
   *   The data drupal selector of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   *
   * @todo $id is unusable. Replace with $name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertOptionSelectedWithDrupalSelector',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2111e5c93b4f2a5897024dbb0c77444' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page is not checked.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoOptionSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9445c03eb5cad01c3d7866396b57f4d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given name or ID.
   *
   * @param string $field
   *   Name or ID of field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd896949933ff393db99dc2c76a372c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given name or ID.
   *
   * @param string $field
   *   Name or ID of field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bb1ff9cdad383200ede4581b64d31b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that each HTML ID is used for just a single element.
   *
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   * @param array $ids_to_skip
   *   An optional array of ids to skip when checking for duplicates. It is
   *   always a bug to have duplicate HTML IDs, so this parameter is to enable
   *   incremental fixing of core code. Whenever a test passes this parameter,
   *   it should add a "todo" comment above the call to this function explaining
   *   the legacy bug that the test wishes to ignore and including a link to an
   *   issue that is working to fix that legacy bug.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertNoDuplicateIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f376dc7bf6d3b745cccf8271fbdf20b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper: Constructs an XPath for the given set of attributes and value.
   *
   * @param string $attribute
   *   Field attributes.
   * @param string $value
   *   Value of field.
   *
   * @return string
   *   XPath for specified values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'constructFieldXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93ae9588e6917666861ab42bcd95926b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods for assertions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91b87cf4f674886378f5f2bc80990513' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Casts MarkupInterface objects into strings.
   *
   * @param string|array $value
   *   The value to act on.
   *
   * @return mixed
   *   The input value, with MarkupInterface objects casted to string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'castSafeStrings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c8098e1f70093a8bccd7a231ee7eccb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides random generator utility methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bdf7f68ee25d005efe8c123c1fa5949' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The random generator.
   *
   * @var \\Drupal\\Component\\Utility\\Random
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '697971b3a05443bffb58ac6e7d57588d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a pseudo-random string of ASCII characters of codes 32 to 126.
   *
   * Do not use this method when special characters are not possible (e.g., in
   * machine or file names that have already been validated); instead, use
   * \\Drupal\\simpletest\\TestBase::randomMachineName(). If $length is greater
   * than 3 the random string will include at least one ampersand (\'&\') and
   * at least one greater than (\'>\') character to ensure coverage for special
   * characters and avoid the introduction of random test failures.
   *
   * @param int $length
   *   Length of random string to generate.
   *
   * @return string
   *   Pseudo-randomly generated unique string including special characters.
   *
   * @see \\Drupal\\Component\\Utility\\Random::string()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'randomString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '827d5b7e78a119056b8138d07096a127' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Callback for random string validation.
   *
   * @see \\Drupal\\Component\\Utility\\Random::string()
   *
   * @param string $string
   *   The random string to validate.
   *
   * @return bool
   *   TRUE if the random string is valid, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'randomStringValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51c5cdb7959c7d84a309c14a67765605' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a unique random string containing letters and numbers.
   *
   * Do not use this method when testing unvalidated user input. Instead, use
   * \\Drupal\\simpletest\\TestBase::randomString().
   *
   * @param int $length
   *   Length of random string to generate.
   *
   * @return string
   *   Randomly generated unique string.
   *
   * @see \\Drupal\\Component\\Utility\\Random::name()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'randomMachineName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e3141f63122a26c6e558b950a149b10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a random PHP object.
   *
   * @param int $size
   *   The number of random keys to add to the object.
   *
   * @return object
   *   The generated object, with the specified number of random keys. Each key
   *   has a random string value.
   *
   * @see \\Drupal\\Component\\Utility\\Random::object()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'randomObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ae5f2fd3a6db21327f07c8e6429db9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the random generator for the utility methods.
   *
   * @return \\Drupal\\Component\\Utility\\Random
   *   The random generator.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getRandomGenerator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0878cfd7cd96124ddef67fbe1e21dd63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods to deal with config system objects in tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25fa0854ba7c29d308980f4c43514a17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Utility trait to copy configuration from one storage to another.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2257e8781bc6908609f66d8385b05670' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copy the configuration from one storage to another and remove stale items.
   *
   * This method empties target storage and copies all collections from source.
   * Configuration is only copied and not imported, should not be used
   * with the active storage as the target.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $source
   *   The configuration storage to copy from.
   * @param \\Drupal\\Core\\Config\\StorageInterface $target
   *   The configuration storage to copy to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'replaceStorageContents',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3827513722743269c3c02e615630d97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a ConfigImporter object to import test configuration.
   *
   * @return \\Drupal\\Core\\Config\\ConfigImporter
   *   The config importer object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'configImporter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c69cd995d81040ab631e27a64818c815' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies configuration objects from source storage to target storage.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $source_storage
   *   The source config storage service.
   * @param \\Drupal\\Core\\Config\\StorageInterface $target_storage
   *   The target config storage service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'copyConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37cd5ef516435e323f0fc5d7bfd4a99c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows test classes to require Drupal modules as dependencies.
 *
 * This trait is assumed to be on a subclass of \\PHPUnit\\Framework\\TestCase, and
 * overrides \\PHPUnit\\Framework\\TestCase::checkRequirements(). This allows the
 * test to be marked as skipped before any kernel boot processes have happened.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'test' => 'PHPUnit\\Util\\Test',
          'skippedtesterror' => 'PHPUnit\\Framework\\SkippedTestError',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a62b369e88153fbaadcbf2223580448' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the Drupal root directory.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'test' => 'PHPUnit\\Util\\Test',
          'skippedtesterror' => 'PHPUnit\\Framework\\SkippedTestError',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getDrupalRoot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52c9fdeca17f7d72cf4c3852978717bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check module requirements for the Drupal use case.
   *
   * This method is assumed to override
   * \\PHPUnit\\Framework\\TestCase::checkRequirements().
   *
   * @throws \\PHPUnit\\Framework\\SkippedTestError
   *   Thrown when the requirements are not met, and this test should be
   *   skipped. Callers should not catch this exception.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'test' => 'PHPUnit\\Util\\Test',
          'skippedtesterror' => 'PHPUnit\\Framework\\SkippedTestError',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'checkRequirements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '177c20bc446a030d9960c1df4ce5c39f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks missing module requirements.
   *
   * Iterates through a list of requires annotations and looks for missing
   * modules. The test will be skipped if any of the required modules is
   * missing.
   *
   * @param string $root
   *   The path to the root of the Drupal installation to scan.
   * @param string[] $annotations
   *   A list of requires annotations from either a method or class annotation.
   *
   * @throws \\PHPUnit\\Framework\\SkippedTestError
   *   Thrown when the requirements are not met, and this test should be
   *   skipped. Callers should not catch this exception.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'test' => 'PHPUnit\\Util\\Test',
          'skippedtesterror' => 'PHPUnit\\Framework\\SkippedTestError',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'checkModuleRequirements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aff7240a533b54efbe7ad9432cbb2b3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Makes Drupal\'s test API forward compatible with multiple versions of PHPUnit.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'runnerversion' => 'Drupal\\TestTools\\PhpUnitCompatibility\\RunnerVersion',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3680a6d6bf901d7bd1a4f1cdc79fc2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a mock object for the specified class using the available method.
   *
   * The getMock method does not exist in PHPUnit 6. To provide backward
   * compatibility this trait provides the getMock method and uses createMock if
   * this method is available on the parent class.
   *
   * @param string $originalClassName
   *   Name of the class to mock.
   * @param array|null $methods
   *   When provided, only methods whose names are in the array are replaced
   *   with a configurable test double. The behavior of the other methods is not
   *   changed. Providing null means that no methods will be replaced.
   * @param array $arguments
   *   Parameters to pass to the original class\' constructor.
   * @param string $mockClassName
   *   Class name for the generated test double class.
   * @param bool $callOriginalConstructor
   *   Can be used to disable the call to the original class\' constructor.
   * @param bool $callOriginalClone
   *   Can be used to disable the call to the original class\' clone constructor.
   * @param bool $callAutoload
   *   Can be used to disable __autoload() during the generation of the test
   *   double class.
   * @param bool $cloneArguments
   *   Enables the cloning of arguments passed to mocked methods.
   * @param bool $callOriginalMethods
   *   Enables the invocation of the original methods.
   * @param object $proxyTarget
   *   Sets the proxy target.
   *
   * @see https://github.com/sebastianbergmann/phpunit/wiki/Release-Announcement-for-PHPUnit-5.4.0
   *
   * @return \\PHPUnit\\Framework\\MockObject\\MockObject
   *
   * @deprecated in drupal:8.5.0 and is removed from drupal:9.0.0.
   *   Use \\Drupal\\Tests\\PhpunitCompatibilityTrait::createMock() instead.
   *
   * @see https://www.drupal.org/node/2907725
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'runnerversion' => 'Drupal\\TestTools\\PhpUnitCompatibility\\RunnerVersion',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getMock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '998a75b749f98494b4593916a9b2fbac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compatibility layer for PHPUnit 6 to support PHPUnit 4 code.
   *
   * @param mixed $class
   *   The expected exception class.
   * @param string $message
   *   The expected exception message.
   * @param int $exception_code
   *   The expected exception code.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
   *   Backward compatibility for PHPUnit 4 will no longer be supported.
   *
   * @see https://www.drupal.org/node/3056869
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'runnerversion' => 'Drupal\\TestTools\\PhpUnitCompatibility\\RunnerVersion',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'setExpectedException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf2dd0c0eb7c7aceab2214816ec3cc96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Back up and restore any global variables that may be changed by tests.
   *
   * @see self::runTestInSeparateProcess
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fb10144b5fc09de836f11517261229b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Kernel tests are run in separate processes because they allow autoloading
   * of code from extensions. Running the test in a separate process isolates
   * this behavior from other tests. Subclasses should not override this
   * property.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80f4b7f7f2585209bfbb956a8b18378d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Back up and restore static class properties that may be changed by tests.
   *
   * @see self::runTestInSeparateProcess
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df1cc174a24d5c716298d6bc6ff879ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Contains a few static class properties for performance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c4bf890d56e213285b944053f8318e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Do not forward any global state from the parent process to the processes
   * that run the actual tests.
   *
   * @see self::runTestInSeparateProcess
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cd30568c6a0cfbc455f6ea0aadd4a0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var \\Composer\\Autoload\\Classloader
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0af71b596bae3b5c7d1f572812a09ef2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d8d802884a65df34d76b6afdc9687f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var \\Drupal\\Core\\DependencyInjection\\ContainerBuilder
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0c61a39712c05159eec1ff6f36b95e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * The test runner will merge the $modules lists from this class, the class
   * it extends, and so on up the class hierarchy. It is not necessary to
   * include modules in your list that a parent class has already declared.
   *
   * The Path Alias module is always installed because the functionality has
   * moved from core to a required module in Drupal 8.8.0. If a kernel test
   * requires path alias functionality it is recommended to add the module to
   * the test\'s own $modules property for Drupal 9 compatibility.
   *
   * @see \\Drupal\\Tests\\KernelTestBase::enableModules()
   * @see \\Drupal\\Tests\\KernelTestBase::bootKernel()
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2a3f4258e34aceef4abb477b1390afd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The virtual filesystem root directory.
   *
   * @var \\org\\bovigo\\vfs\\vfsStreamDirectory
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63b93a9d22b99f5147694cd567f43473' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @todo Move into Config test base class.
   * @var \\Drupal\\Core\\Config\\ConfigImporter
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ea27d696a87fd4899cbd58b1d02395f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The app root.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eed0a21448a684e128b753b98076dbc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set to TRUE to strict check all configuration saved.
   *
   * @see \\Drupal\\Core\\Config\\Development\\ConfigSchemaChecker
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3952a8dc136980e9d8b420b5a6d349f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of config object names that are excluded from schema checking.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c68afaabcf9afe4dec305146a61a6f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'setUpBeforeClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24cb6632e4027d8a838f117f07d78c68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68963e9b5c8289137470156bcfba26db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Bootstraps a basic test environment.
   *
   * Should not be called by tests. Only visible for DrupalKernel integration
   * tests.
   *
   * @see \\Drupal\\KernelTests\\Core\\DrupalKernel\\DrupalKernelTest
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'bootEnvironment',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4baf0ca6f2a28c0543d92dfa4d15b6ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets up the filesystem, so things like the file directory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'setUpFilesystem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9a69556499c43a775cf6a1e96d4e849' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getDatabasePrefix',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39823d3cb65d18f675d3fc526ed0d35b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Bootstraps a kernel for a test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'bootKernel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56cfb62aecbcb6b148ddb16cc7f49312' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Configuration accessor for tests. Returns non-overridden configuration.
   *
   * @param string $name
   *   The configuration name.
   *
   * @return \\Drupal\\Core\\Config\\Config
   *   The configuration object with original configuration data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'config',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6c7d20e4a14a220ebf2d79fa66c1de9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the Database connection info to be used for this test.
   *
   * This method only exists for tests of the Database component itself, because
   * they require multiple database connections. Each SQLite :memory: connection
   * creates a new/separate database in memory. A shared-memory SQLite file URI
   * triggers PHP open_basedir/allow_url_fopen/allow_url_include restrictions.
   * Due to that, Database tests are running against a SQLite database that is
   * located in an actual file in the system\'s temporary directory.
   *
   * Other tests should not override this method.
   *
   * @return array
   *   A Database connection info array.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getDatabaseConnectionInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d98dba767cd528e291f1df41b427ab4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes the FileCache component.
   *
   * We can not use the Settings object in a component, that\'s why we have to do
   * it here instead of \\Drupal\\Component\\FileCache\\FileCacheFactory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'initFileCache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6697606ecf76da8758a325cfa2e9302' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns Extension objects for $modules to enable.
   *
   * @param string[] $modules
   *   The list of modules to enable.
   *
   * @return \\Drupal\\Core\\Extension\\Extension[]
   *   Extension objects for $modules, keyed by module name.
   *
   * @throws \\PHPUnit\\Framework\\Exception
   *   If a module is not available.
   *
   * @see \\Drupal\\Tests\\KernelTestBase::enableModules()
   * @see \\Drupal\\Core\\Extension\\ModuleHandler::add()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getExtensionsForModules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e15328d06d4d8fc1f13cdd396f4c18fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Registers test-specific services.
   *
   * Extend this method in your test to register additional services. This
   * method is called whenever the kernel is rebuilt.
   *
   * @param \\Drupal\\Core\\DependencyInjection\\ContainerBuilder $container
   *   The service container to enhance.
   *
   * @see \\Drupal\\Tests\\KernelTestBase::bootKernel()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'register',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a98dd8cfbeb88d6f80ac7e30bb3b184c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the config schema exclusions for this test.
   *
   * @return string[]
   *   An array of config object names that are excluded from schema checking.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getConfigSchemaExclusions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1f7d97d6dabd3bec3fce493fb2f2c62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'assertPostConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a5b12ea29b6f142728f200124431b01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'tearDown',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a18030284d9ae3551c744c075e037ed6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @after
   *
   * Additional tear down method to close the connection at the end.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'tearDownCloseDatabaseConnection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62a8498be17f2c821e810b78d56f4d29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs default configuration for a given list of modules.
   *
   * @param string|string[] $modules
   *   A module or list of modules for which to install default configuration.
   *
   * @throws \\LogicException
   *   If any module in $modules is not enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'installConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd51978689cac4d9c1d9404742076ea63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs database tables from a module schema definition.
   *
   * @param string $module
   *   The name of the module that defines the table\'s schema.
   * @param string|array $tables
   *   The name or an array of the names of the tables to install.
   *
   * @throws \\LogicException
   *   If $module is not enabled or the table schema cannot be found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'installSchema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bdb3c3d10503d2c1593b02b511ceb622' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs the storage schema for a specific entity type.
   *
   * @param string $entity_type_id
   *   The ID of the entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'installEntitySchema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cee38b8a8dd09f8b6a6d9f084359fac6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enables modules for this test.
   *
   * This method does not install modules fully. Services and hooks for the
   * module are available, but the install process is not performed.
   *
   * To install test modules outside of the testing environment, add
   * @code
   * $settings[\'extension_discovery_scan_tests\'] = TRUE;
   * @endcode
   * to your settings.php.
   *
   * @param string[] $modules
   *   A list of modules to enable. Dependencies are not resolved; i.e.,
   *   multiple modules have to be specified individually. The modules are only
   *   added to the active module list and loaded; i.e., their database schema
   *   is not installed. hook_install() is not invoked. A custom module weight
   *   is not applied.
   *
   * @throws \\LogicException
   *   If any module in $modules is already enabled.
   * @throws \\RuntimeException
   *   If a module is not enabled after enabling it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'enableModules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25e113cdf39d4c4c343daa76647eccaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Disables modules for this test.
   *
   * @param string[] $modules
   *   A list of modules to disable. Dependencies are not resolved; i.e.,
   *   multiple modules have to be specified with dependent modules first.
   *   Code of previously enabled modules is still loaded. The modules are only
   *   removed from the active module list.
   *
   * @throws \\LogicException
   *   If any module in $modules is already disabled.
   * @throws \\RuntimeException
   *   If a module is not disabled after disabling it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'disableModules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2fe743e956852bbd2862b5bce57ef8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders a render array.
   *
   * @param array $elements
   *   The elements to render.
   *
   * @return string
   *   The rendered string output (typically HTML).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'render',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9742a4bdd90908cff0529c1872376bb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets an in-memory Settings variable.
   *
   * @param string $name
   *   The name of the setting to set.
   * @param bool|string|int|array|null $value
   *   The value to set. Note that array values are replaced entirely; use
   *   \\Drupal\\Core\\Site\\Settings::get() to perform custom merges.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'setSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f34de849a567c23b7b4a72ca10656136' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the install profile and rebuilds the container to update it.
   *
   * @param string $profile
   *   The install profile to set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'setInstallProfile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eef52c6b7a6e4a4da52e6c98944a2b0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stops test execution.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'stop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cc1454c8c2da82bb03f17443671be3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Dumps the current state of the virtual filesystem to STDOUT.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'vfsDump',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6f0c4cf757faf953928ae0c75a82f02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the modules to enable for this test.
   *
   * @param string $class
   *   The fully-qualified class name of this test.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'getModulesToEnable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8ae10d81ea46cb7662c714e1cc5b782' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'prepareTemplate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc37b6a0289553f12a3f6269349aecc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the current test method is running in a separate process.
   *
   * Note that KernelTestBase will run in a separate process by default.
   *
   * @return bool
   *
   * @see \\Drupal\\KernelTests\\KernelTestBase::$runTestInSeparateProcess
   * @see https://github.com/sebastianbergmann/phpunit/pull/1350
   *
   * @deprecated in drupal:8.4.0 and is removed from drupal:9.0.0.
   *   KernelTestBase tests are always run in isolated processes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => 'isTestInIsolation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c545f9c0d084acf2f7144dd3e7abaa38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * BC: Automatically resolve former KernelTestBase class properties.
   *
   * Test authors should follow the provided instructions and adjust their tests
   * accordingly.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => '__get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f95515e96a7190c3710f3a057decb53b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prevents serializing any properties.
   *
   * Kernel tests are run in a separate process. To do this PHPUnit creates a
   * script to run the test. If it fails, the test result object will contain a
   * stack trace which includes the test object. It will attempt to serialize
   * it. Returning an empty array prevents it from serializing anything it
   * should not.
   *
   * @return array
   *   An empty array.
   *
   * @see vendor/phpunit/phpunit/src/Util/PHP/Template/TestCaseMethod.tpl.dist
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'apcufilecachebackend' => 'Drupal\\Component\\FileCache\\ApcuFileCacheBackend',
          'filecache' => 'Drupal\\Component\\FileCache\\FileCache',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'sqlentitystorageinterface' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'asserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'phpunitcompatibilitytrait' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'testrequirementstrait' => 'Drupal\\Tests\\TestRequirementsTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'exception' => 'PHPUnit\\Framework\\Exception',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'vfsstream' => 'org\\bovigo\\vfs\\vfsStream',
          'vfsstreamprintvisitor' => 'org\\bovigo\\vfs\\visitor\\vfsStreamPrintVisitor',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\KernelTests\\KernelTestBase',
         'functionName' => '__sleep',
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