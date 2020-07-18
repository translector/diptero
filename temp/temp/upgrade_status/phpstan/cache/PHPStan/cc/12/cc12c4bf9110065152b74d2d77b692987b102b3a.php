<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Extension/ModuleInstaller.php-1594234425',
   'data' => 
  array (
    'c782431b18f2a376b58e79f116be2ebc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default implementation of the module installer.
 *
 * It registers the module in config, installs its own configuration,
 * installs the schema, updates the Drupal kernel and more.
 *
 * We don\'t inject dependencies yet, as we would need to reload them after
 * each installation or uninstallation of a module.
 * https://www.drupal.org/project/drupal/issues/2350111 for example tries to
 * solve this dilemma.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97d10bb925b2dd156d3cd2257b38f27e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d0359a585498d790290a3ad73991f54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The drupal kernel.
   *
   * @var \\Drupal\\Core\\DrupalKernelInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e4cb28882e0e64c17001913f9f7e5a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The app root.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aec42a5f1ccf0d2055ef46d83dcb1dba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The uninstall validators.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleUninstallValidatorInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca71b755257de89cae7191a2ef683b75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ModuleInstaller instance.
   *
   * @param string $root
   *   The app root.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\DrupalKernelInterface $kernel
   *   The drupal kernel.
   *
   * @see \\Drupal\\Core\\DrupalKernel
   * @see \\Drupal\\Core\\CoreServiceProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31ceb0f1940caec4d2d399dd6d8cc91e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'addUninstallValidator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '739763a7393b0d424c792f5d915b0c71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'install',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9c9a90541a0554097e0380e2684fd1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Config\\ConfigInstaller $config_installer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'install',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2420b303ec0a608282909461bc54caec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'install',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '721583a69ebdeb5192a9ed052897690c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Update\\UpdateRegistry $post_update_registry */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'install',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82ea57f78d533275a8d034981c2d1fd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'uninstall',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ead2821ba2a13e296b34e25d5dcde8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'uninstall',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2adfa7dec4b6d73014dfb0ea01bb69b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Update\\UpdateRegistry $post_update_registry */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'uninstall',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c57a5488d8d3af6fe090961f4ee0361d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper method for removing all cache bins registered by a given module.
   *
   * @param string $module
   *   The name of the module for which to remove all registered cache bins.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'removeCacheBins',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '910ab9cf35028e7937cac3247e42089b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the kernel module list.
   *
   * @param string $module_filenames
   *   The list of installed modules.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'updateKernel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad7d6b1854fa8fa9da0a047db6c55eab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'drupalkernelinterface' => 'Drupal\\Core\\DrupalKernelInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleInstaller',
         'functionName' => 'validateUninstall',
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