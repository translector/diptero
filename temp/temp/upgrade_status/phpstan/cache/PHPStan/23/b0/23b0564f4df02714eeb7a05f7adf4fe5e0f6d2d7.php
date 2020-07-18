<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/src/SubstitutionManager.php-1586214306',
   'data' => 
  array (
    '880a4f7183eded2e7a8bb7d1aa6cb0ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A plugin manager for the substitution plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\linkit\\SubstitutionManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd806bde7384e4355b5c50a1f1625b0c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\linkit\\SubstitutionManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd91466db03efc383773b18d29695b32f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs the SubstitutionManager object.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\linkit\\SubstitutionManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b557eff136894237cd191247264922f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\linkit\\SubstitutionManager',
         'functionName' => 'getApplicablePluginsOptionList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80e5b1a956666b44d19e3c5188d52398' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filter the list of plugins by their applicability.
   *
   * @param array $definitions
   *   An array of plugin definitions.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type to get applicable plugins for.
   *
   * @return array
   *   The definitions appropriate for the given entity type.
   *
   * @see SubstitutionInterface::isApplicable()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\linkit\\SubstitutionManager',
         'functionName' => 'filterPlugins',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fb25a114a5c58c587b8bc7a50d9e60f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\linkit\\SubstitutionInterface $class */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\linkit\\SubstitutionManager',
         'functionName' => 'filterPlugins',
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