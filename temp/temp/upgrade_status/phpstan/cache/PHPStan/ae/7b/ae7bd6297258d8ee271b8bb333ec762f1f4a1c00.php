<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/field_group/src/FieldGroupFormatterPluginManager.php-1591739040',
   'data' => 
  array (
    '52e24758879d139fc6a439e80ab7c9f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin type manager for all fieldgroup formatters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'defaultfactory' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterPluginManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7db24b1ab08fdb5ce37c044f58eee5f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new FieldGroupFormatterPluginManager object.
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
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'defaultfactory' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterPluginManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '439df23a28b0e5bae5bd85f0ed471e9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'defaultfactory' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterPluginManager',
         'functionName' => 'createInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0181f12cb4ee2818380b34f711f9780' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides PluginManagerBase::getInstance().
   *
   * @param array $options
   *   An array with the following key/value pairs:
   *   - format_type: The current format type.
   *   - group: The current group.
   *   - prepare: (bool, optional) Whether default values should get merged in
   *     the \'configuration\' array. Defaults to TRUE.
   *   - configuration: (array) the configuration for the formatter. The
   *     following key value pairs are allowed, and are all optional if
   *     \'prepare\' is TRUE:
   *     - label: (string) Position of the label. The default \'field\' theme
   *       implementation supports the values \'inline\', \'above\' and \'hidden\'.
   *       Defaults to \'above\'.
   *     - settings: (array) Settings specific to the formatter. Each setting
   *       defaults to the default value specified in the formatter definition.
   *
   * @return \\Drupal\\field_group\\FieldGroupFormatterInterface|null
   *   A formatter object or NULL when plugin is not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'defaultfactory' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterPluginManager',
         'functionName' => 'getInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '297125dae668b014db15f79bfdb17806' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges default values for formatter configuration.
   *
   * @param string $format_type
   *   The format type.
   * @param string $context
   *   The context to prepare configuration for.
   * @param array $configuration
   *   The configuration of the group.
   * @return array
   *   The display properties with defaults added.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'defaultfactory' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterPluginManager',
         'functionName' => 'prepareConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91ca0a87b0dea27c385922774a13e336' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default settings of a field_group formatter.
   *
   * @param string $type
   *   A formatter type name.
   * @param string $context
   *   The context to get default values for.
   *
   * @return array
   *   The formatter type\'s default settings, as provided by the plugin
   *   definition, or an empty array if type or settings are undefined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_group',
         'uses' => 
        array (
          'defaultfactory' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\field_group\\FieldGroupFormatterPluginManager',
         'functionName' => 'getDefaultSettings',
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