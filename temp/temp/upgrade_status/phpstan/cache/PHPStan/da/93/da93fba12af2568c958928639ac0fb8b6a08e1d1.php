<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Unit/Plugin/WebformSourceEntity/RouteParametersWebformSourceEntityTest.php-1594690523',
   'data' => 
  array (
    '6cb6236dd018cc1e534e25ce55a4bd46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the "route_parameters" webform source entity plugin.
 *
 * @group webform
 *
 * @coversDefaultClass \\Drupal\\webform\\Plugin\\WebformSourceEntity\\RouteParametersWebformSourceEntity
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity',
         'uses' => 
        array (
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeparameterswebformsourceentity' => 'Drupal\\webform\\Plugin\\WebformSourceEntity\\RouteParametersWebformSourceEntity',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity\\RouteParametersWebformSourceEntityTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fbf7dbee314bcd12bbf344d33b601e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests detection of source entity via route parameters.
   *
   * @param array $route_parameters
   *   Route parameters array to inject. You may use the following magic values:
   *   - source_entity: to denote that this parameter should contain source
   *     entity
   *   - another_entity: to denote that this parameter should contain some other
   *     entity.
   * @param array $ignored_types
   *   Array of entity types that may not be source.
   * @param bool $expect_source_entity
   *   Whether we expect the tested method to return the source entity.
   * @param string $assert_message
   *   Assert message to use.
   *
   * @see RouteParametersWebformSourceEntity::getSourceEntity()
   *
   * @dataProvider providerGetCurrentSourceEntity
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity',
         'uses' => 
        array (
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeparameterswebformsourceentity' => 'Drupal\\webform\\Plugin\\WebformSourceEntity\\RouteParametersWebformSourceEntity',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity\\RouteParametersWebformSourceEntityTest',
         'functionName' => 'testGetCurrentSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '170107f447748e89627690fb07499f2a' => 
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
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeparameterswebformsourceentity' => 'Drupal\\webform\\Plugin\\WebformSourceEntity\\RouteParametersWebformSourceEntity',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
        ),
         'className' => 'Drupal\\Tests\\webform\\Unit\\Plugin\\WebformSourceEntity\\RouteParametersWebformSourceEntityTest',
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