<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/ElementInfoManager.php-1594234425',
   'data' => 
  array (
    'ceb80fbdcca6433cb57f4354185a475e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a plugin manager for element plugins.
 *
 * @see \\Drupal\\Core\\Render\\Annotation\\RenderElement
 * @see \\Drupal\\Core\\Render\\Annotation\\FormElement
 * @see \\Drupal\\Core\\Render\\Element\\RenderElement
 * @see \\Drupal\\Core\\Render\\Element\\FormElement
 * @see \\Drupal\\Core\\Render\\Element\\ElementInterface
 * @see \\Drupal\\Core\\Render\\Element\\FormElementInterface
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '806850bf72daab8c5538fdeb997aa119' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the available element information.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffb50d973476eac0fea4462383876dcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme manager.
   *
   * @var \\Drupal\\Core\\Theme\\ThemeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd595f879b54882be4adf2989475a78d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache tag invalidator.
   *
   * @var \\Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '680db2450885acde35023a477ae3dec9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a ElementInfoManager object.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface $cache_tag_invalidator
   *   The cache tag invalidator.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   * @param \\Drupal\\Core\\Theme\\ThemeManagerInterface $theme_manager
   *   The theme manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aed1a3cb0516e6a75686900b08c1460a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41cd34ff058270d70578fde84e5f072b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => 'getInfoProperty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d84be2932636cf413a9f5d4f37d3ee8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds up all element information.
   *
   * @param string $theme_name
   *   The theme name.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => 'buildInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0d27bbc39e58ba396a693765a5b4556' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @return \\Drupal\\Core\\Render\\Element\\ElementInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => 'createInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '198be0aba66a96b3f3204e86dadd9272' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => 'clearCachedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd237e8f79d13c9d08b52f4b0e75d8cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the CID used to cache the element info.
   *
   * @param string $theme_name
   *   The theme name.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'formelementinterface' => 'Drupal\\Core\\Render\\Element\\FormElementInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManager',
         'functionName' => 'getCid',
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