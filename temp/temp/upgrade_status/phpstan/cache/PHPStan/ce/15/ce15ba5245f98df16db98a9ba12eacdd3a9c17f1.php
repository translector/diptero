<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/block_field/src/BlockFieldSelectionManager.php-1588279618',
   'data' => 
  array (
    'fa9118f0d2215210cf0f1be58e5b8ed9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the Block field selection plugin manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_field',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\block_field\\BlockFieldSelectionManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04284b70381269c468aedb1f37b2d664' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new BlockFieldSelectionManager object.
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
         'namespace' => 'Drupal\\block_field',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\block_field\\BlockFieldSelectionManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1823266ad4b6535f95dfac349a6cdf63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads all definitions and returns key => value array.
   *
   * @return array
   *   Array of options from definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_field',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\block_field\\BlockFieldSelectionManager',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab1704a00b2877431f2c99abf7e8cc83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an instance of BlockFieldSelectionInterface from $field.
   *
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field
   *   The \'block_field\' field definition.
   *
   * @return \\Drupal\\block_field\\BlockFieldSelectionInterface
   *   The BlockFieldSelectionInterface instance.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_field',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\block_field\\BlockFieldSelectionManager',
         'functionName' => 'getSelectionHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17c43f152e0088be82d0565d2bfa3fb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an key => value array based on allowed referenceable blocks.
   *
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field
   *   The \'block_field\' field definition.
   *
   * @return array
   *   Array of options from definitions.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_field',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\block_field\\BlockFieldSelectionManager',
         'functionName' => 'getWidgetOptions',
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