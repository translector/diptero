<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/PhpunitCompatibilityTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/TestTools/PhpUnitCompatibility/PhpUnit7/TestCompatibilityTrait.php-1594234425',
   'data' => 
  array (
    '71596334fd97080f3ff477868bda8824' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class and helpers for Drupal unit tests.
 *
 * @ingroup testing
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd21c296a6d6cac11ecebd5295d90d61f' => 
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
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11e44c6cdf84f8dbcdc2e006cef74a0a' => 
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
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'getMock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '883d66ceaa84fa91eb41fa9135356ee0' => 
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
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'setExpectedException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48917bb6ad95bfc2ee58b0596f935201' => 
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
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec0a2bc230aac14fce4dd602753a0924' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The app root.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebccd83ca979ce9a64eb673affee8102' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb738c2be1cb555e558b907bf2fc296a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a unique random string containing letters and numbers.
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
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'randomMachineName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6b6c7ff06511bf7057a9c97bc870d0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the random generator for the utility methods.
   *
   * @return \\Drupal\\Component\\Utility\\Random
   *   The random generator
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'getRandomGenerator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48ae292e4133056a5da61a47d77667cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts if two arrays are equal by sorting them first.
   *
   * @param array $expected
   * @param array $actual
   * @param string $message
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'assertArrayEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf4d2cdf6762a4323827513f77f18f51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a stub config factory that behaves according to the passed array.
   *
   * Use this to generate a config factory that will return the desired values
   * for the given config names.
   *
   * @param array $configs
   *   An associative array of configuration settings whose keys are
   *   configuration object names and whose values are key => value arrays for
   *   the configuration object in question. Defaults to an empty array.
   *
   * @return \\PHPUnit\\Framework\\MockObject\\MockBuilder
   *   A MockBuilder object for the ConfigFactory with the desired return
   *   values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'getConfigFactoryStub',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b76cedb7e34e1b006b1597b2d2801f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a stub config storage that returns the supplied configuration.
   *
   * @param array $configs
   *   An associative array of configuration settings whose keys are
   *   configuration object names and whose values are key => value arrays
   *   for the configuration object in question.
   *
   * @return \\Drupal\\Core\\Config\\StorageInterface
   *   A mocked config storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'getConfigStorageStub',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e09c54a35a76d80f2566efd00a379f11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Mocks a block with a block plugin.
   *
   * @param string $machine_name
   *   The machine name of the block plugin.
   *
   * @return \\Drupal\\block\\BlockInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
   *   The mocked block.
   *
   * @deprecated in drupal:8.5.0 and is removed from drupal:9.0.0. Unit test
   *   base classes should not have dependencies on extensions. Set up mocks in
   *   individual tests.
   *
   * @see https://www.drupal.org/node/2896072
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'getBlockMockWithMachineName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '635aa6c82fdec4311261abe9dc8289ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a stub translation manager that just returns the passed string.
   *
   * @return \\PHPUnit\\Framework\\MockObject\\MockObject|\\Drupal\\Core\\StringTranslation\\TranslationInterface
   *   A mock translation object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'getStringTranslationStub',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f1cbd71471e1646bba85e94565e9fde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets up a container with a cache tags invalidator.
   *
   * @param \\Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface $cache_tags_validator
   *   The cache tags invalidator.
   *
   * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
   *   The container with the cache tags invalidator service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'getContainerWithCacheTagsInvalidator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b47e0123e08da11ae2515e8036991c5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a stub class resolver.
   *
   * @return \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
   *   The class resolver stub.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'random' => 'Drupal\\Component\\Utility\\Random',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'pluraltranslatablemarkup' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\UnitTestCase',
         'functionName' => 'getClassResolverStub',
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