<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/MigrateSourcePluginManager.php-1594234425',
   'data' => 
  array (
    '970eb5440497e355ba8fa35986a14548' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin manager for migrate source plugins.
 *
 * @see \\Drupal\\migrate\\Plugin\\MigrateSourceInterface
 * @see \\Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase
 * @see \\Drupal\\migrate\\Annotation\\MigrateSource
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscoveryautomatedproviders' => 'Drupal\\migrate\\Plugin\\Discovery\\AnnotatedClassDiscoveryAutomatedProviders',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'providerfilterdecorator' => 'Drupal\\migrate\\Plugin\\Discovery\\ProviderFilterDecorator',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourcePluginManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d19dd6b90cc9f70bdef784b66031476' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * MigrateSourcePluginManager constructor.
   *
   * @param string $type
   *   The type of the plugin: row, source, process, destination, entity_field,
   *   id_map.
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
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscoveryautomatedproviders' => 'Drupal\\migrate\\Plugin\\Discovery\\AnnotatedClassDiscoveryAutomatedProviders',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'providerfilterdecorator' => 'Drupal\\migrate\\Plugin\\Discovery\\ProviderFilterDecorator',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourcePluginManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9689e3313072b5a0df74055feff164e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscoveryautomatedproviders' => 'Drupal\\migrate\\Plugin\\Discovery\\AnnotatedClassDiscoveryAutomatedProviders',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'providerfilterdecorator' => 'Drupal\\migrate\\Plugin\\Discovery\\ProviderFilterDecorator',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourcePluginManager',
         'functionName' => 'getDiscovery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa934ca7671f1ad3f8cddf0297342547' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds plugin definitions.
   *
   * @return array
   *   List of definitions to store in cache.
   *
   * @todo This is a temporary solution to the fact that migration source
   *   plugins have more than one provider. This functionality will be moved to
   *   core in https://www.drupal.org/node/2786355.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscoveryautomatedproviders' => 'Drupal\\migrate\\Plugin\\Discovery\\AnnotatedClassDiscoveryAutomatedProviders',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'providerfilterdecorator' => 'Drupal\\migrate\\Plugin\\Discovery\\ProviderFilterDecorator',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourcePluginManager',
         'functionName' => 'findDefinitions',
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