<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformSourceEntityManager.php-1594241402',
   'data' => 
  array (
    '20969f9f5210fa1fd2573cd0ef95a0c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform source entity plugin manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d2d9b01841c7e7e97575196f95e1e6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformSourceEntityManager object.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c92834cd5aac2c6dac0f1bc433e352d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
         'functionName' => 'alterDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09e37bb1a107d1aa0208a01eec676c52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the main source entity. Applies to only paragraphs.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $source_entity
   *   A source entity.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The main source entity.
   *
   * @see \\Drupal\\webform\\Plugin\\Field\\FieldFormatter\\WebformEntityReferenceEntityFormatter::viewElements
   * @see \\Drupal\\webform\\Plugin\\WebformSourceEntity\\QueryStringWebformSourceEntity::getSourceEntity
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
         'functionName' => 'getMainSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3011a99fc4d00c5339cc2aa654d06d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
         'functionName' => 'getSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b997703766d601ba05a855ce3ba07634' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var WebformSourceEntityInterface $instance */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
         'functionName' => 'getSourceEntity',
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