<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Unit/Plugin/WebformSourceEntity/QueryStringWebformSourceEntityTest.php-1594690523',
   'data' => 
  array (
    '89d1dca3190ae0637d6e887dd7d5f2e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the "query_string" webform source entity plugin.
 *
 * @group webform
 *
 * @coversDefaultClass \\Drupal\\webform\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntity
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity',
         'uses' => 
        array (
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'querystringwebformsourceentity' => 'Drupal\\webform\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntity',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntityTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8762f0c9e374631e82a0f1e213bcc40d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests detection of source entity via query string.
   *
   * @param array $options
   *   see ::providerGetCurrentSourceEntity.
   * @param bool $expect_source_entity
   *   Whether we expect the tested method to return the source entity.
   * @param string $assert_message
   *   Assert message to use.
   *
   * @see QueryStringWebformSourceEntity::getSourceEntity()
   *
   * @dataProvider providerGetCurrentSourceEntity
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity',
         'uses' => 
        array (
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'querystringwebformsourceentity' => 'Drupal\\webform\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntity',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntityTest',
         'functionName' => 'testGetCurrentSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7a86a7050fea5de3d1af20a91113de0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get mock webform entity.
   *
   * @param array $options
   *   Mock webform options.
   *
   * @return \\PHPUnit\\Framework\\MockObject\\MockObject
   *   A mocked webform entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity',
         'uses' => 
        array (
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'querystringwebformsourceentity' => 'Drupal\\webform\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntity',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntityTest',
         'functionName' => 'getMockWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '320b2c94e9f7b8f4350d4391b14418ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get mocked source entity.
   *
   * @param array $options
   *   Mock source entity options.
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A mocked webform.
   *
   * @return array
   *   An array containing a mocked source entity and its
   *   translated source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity',
         'uses' => 
        array (
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'querystringwebformsourceentity' => 'Drupal\\webform\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntity',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntityTest',
         'functionName' => 'getMockSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a33b52f99840dec448231fcaa2a0a45e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for testGetCurrentSourceEntity().
   *
   * @see testGetCurrentSourceEntity()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity',
         'uses' => 
        array (
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'querystringwebformsourceentity' => 'Drupal\\webform\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntity',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'webformentityreferencemanagerinterface' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntityTest',
         'functionName' => 'providerGetCurrentSourceEntity',
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