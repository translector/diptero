<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/Migration.php-1594234425',
   'data' => 
  array (
    'ca11063843af166689e6d6fec5c001dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the Migration plugin.
 *
 * The migration process plugin represents one single migration and acts like a
 * container for the information about a single migration such as the source,
 * process and destination plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86a2ef71a866f61a3721e33acfc2ab10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The migration ID (machine name).
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '159dfc3342acca6e6252174bf7de1a21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The human-readable label for the migration.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb2e42d7e061a735b154c2b5b65ce097' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin ID for the row.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16a006e0b568b33a24fa549e5af0aafb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source configuration, with at least a \'plugin\' key.
   *
   * Used to initialize the $sourcePlugin.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '784fd1b1767d3fc4f31a7540dbd9d9bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source plugin.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrateSourceInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3021d3017a973481844ec96dd186e4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration describing the process plugins.
   *
   * This is a strictly internal property and should not returned to calling
   * code, use getProcess() instead.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7cacf8e85bb1c7129d311feeeff32e51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cached process plugins.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76c5c4933e6c48edabb764e860fc3118' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The destination configuration, with at least a \'plugin\' key.
   *
   * Used to initialize $destinationPlugin.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6fd23330ce471459a38d7905c91ddc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The destination plugin.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrateDestinationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dbb756e3b230ffcb0b4087d529c3b9bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The identifier map data.
   *
   * Used to initialize $idMapPlugin.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56b8dff133d01ab6e1a7728f3208bdf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The identifier map.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrateIdMapInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f53c906ff959aba3de862a7d03fb4b73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source identifiers.
   *
   * An array of source identifiers: the keys are the name of the properties,
   * the values are dependent on the ID map plugin.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c955041c9d4476742b005b52804bfea6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The destination identifiers.
   *
   * An array of destination identifiers: the keys are the name of the
   * properties, the values are dependent on the ID map plugin.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c23893b8598133ccaeef77be879ea491' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Specify value of source_row_status for current map row. Usually set by
   * MigrateFieldHandler implementations.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6dc438927d14aae32c27febc1ab1e8eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Track time of last import if TRUE.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f32581f580a3e1cf546dca03e219c0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * These migrations must be already executed before this migration can run.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed31d37940fd6c536141172ab8df8634' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An optional list of tags, used by the plugin manager for filtering.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b48bb258846b50773645a1325fda99c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the migration is auditable.
   *
   * If set to TRUE, the migration\'s IDs will be audited. This means that, if
   * the highest destination ID is greater than the highest source ID, a warning
   * will be displayed that entities might be overwritten.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '031cd75fa25fa28c57c1e60f63f79ad4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * These migrations, if run, must be executed before this migration.
   *
   * These are different from the configuration dependencies. Migration
   * dependencies are only used to store relationships between migrations.
   *
   * The migration_dependencies value is structured like this:
   * @code
   * array(
   *   \'required\' => array(
   *     // An array of migration IDs that must be run before this migration.
   *   ),
   *   \'optional\' => array(
   *     // An array of migration IDs that, if they exist, must be run before
   *     // this migration.
   *   ),
   * );
   * @endcode
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68eca3b45ad6e6053ce7c6feb4422d80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The migration\'s configuration dependencies.
   *
   * These store any dependencies on modules or other configuration (including
   * other migrations) that must be available before the migration can be
   * created.
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2884b3d495d791105dea4cb1772193f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The migration plugin manager for loading other migration plugins.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba9d3bb88d56260ea63c3417048cbd0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source plugin manager.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigratePluginManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9dd1a2e8a917157405285f533bc41068' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The process plugin manager.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigratePluginManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cc8fb3e02e7b8867bf71a6579de3896' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The destination plugin manager.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79acfdfd7cbd9c70bc7443a207b649ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ID map plugin manager.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigratePluginManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ea0af4c81d83675a67916277f5303fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Labels corresponding to each defined status.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f65293e9e9543f633e2dfead1760232' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a Migration.
   *
   * @param array $configuration
   *   Plugin configuration.
   * @param string $plugin_id
   *   The plugin ID.
   * @param mixed $plugin_definition
   *   The plugin definition.
   * @param \\Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface $migration_plugin_manager
   *   The migration plugin manager.
   * @param \\Drupal\\migrate\\Plugin\\MigratePluginManagerInterface $source_plugin_manager
   *   The source migration plugin manager.
   * @param \\Drupal\\migrate\\Plugin\\MigratePluginManagerInterface $process_plugin_manager
   *   The process migration plugin manager.
   * @param \\Drupal\\migrate\\Plugin\\MigrateDestinationPluginManager $destination_plugin_manager
   *   The destination migration plugin manager.
   * @param \\Drupal\\migrate\\Plugin\\MigratePluginManagerInterface $idmap_plugin_manager
   *   The ID map migration plugin manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fd128fc17afd39174500869dc669df4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07c6bf3c495ccb905e07208ccdd8f993' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'id',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca8b23b5cd84ec8bd682044cb7bf9512' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a67308bb62335becedaa08cb07cc4c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets any arbitrary property\'s value.
   *
   * @param string $property
   *   The property to retrieve.
   *
   * @return mixed
   *   The value for that property, or NULL if the property does not exist.
   *
   * @deprecated in drupal:8.1.0 and is removed from drupal:9.0.0. Use
   *   more specific getters instead.
   *
   * @see https://www.drupal.org/node/2873795
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce29cb1456dd7baae919fe64ef2bfcff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the ID map plugin.
   *
   * @return \\Drupal\\migrate\\Plugin\\MigrateIdMapInterface
   *   The ID map plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getIdMapPlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12a6d785e1b154545802fc793540cb40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getSourcePlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28cd48883830e4ba897ef3925f6315c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getProcessPlugins',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b43a1d6dff2926a641b963246f4f9217' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resolve shorthands into a list of plugin configurations.
   *
   * @param array $process
   *   A process configuration array.
   *
   * @return array
   *   The normalized process configuration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getProcessNormalized',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffdc1d6f2ec3446005d6ac57a95ff8e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getDestinationPlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69a5d768d21efc4c14931f75ef9ce7e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getIdMap',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abe0bf87d78d03068c7b95f43bf11317' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'checkRequirements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bac1ab9a606fd8214b1e45343f67173e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\migrate\\Plugin\\MigrationInterface[] $required_migrations */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'checkRequirements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3587a954effa22b987adb14d980a5f83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the migration plugin manager.
   *
   * @return \\Drupal\\migrate\\Plugin\\MigratePluginManager
   *   The plugin manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getMigrationPluginManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b9f35ad12d42cfe39dbce1f3605d0da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'setStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd93daaf5d8aef4b92bf1b1df87a65e1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73941624c835f9526fcfc1bedf2ee8ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getStatusLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a556ff1ee2ef363fceb34593f414b5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getInterruptionResult',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00c420ca802a367c3af9e9cb8c84bbe3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'clearInterruptionResult',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acee6ef64388d25a8ee99a49c8b86289' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'interruptMigration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd44416ad08cdc5a97e89dde411a04c94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'allRowsProcessed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8984faee4456ce9c86db02c6113669b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '673786017f97c09d9ff7595d5fd2504f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getProcess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '635fcd41a15dfcdc265cad2dde571a7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'setProcess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '630be30d75f9b6eef45ff8b0cc03cc2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'setProcessOfProperty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd87bb27308896612023ff1d211d32ec9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'mergeProcessOfProperty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf1343ae2c47d8d69f356f3c91327e5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'isTrackLastImported',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e7db0394fbbd1a7d3f5cca925937a7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'setTrackLastImported',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a043ab864c532cba5d6f97c1ad064182' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getMigrationDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d23dcb1a96244418e785c51801daac2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Find migration dependencies from migration_lookup and sub_process plugins.
   *
   * @param array $process
   *   A process configuration array.
   *
   * @return array
   *   The migration dependencies.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'findMigrationDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd90d5b08916879780c6a9810e906f3aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getPluginDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c50a9c86130105d10b4fc36434a54775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getDestinationConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37d3551d51940b075750d0e32f15abb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getSourceConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd287fefb6410b853110e6210a16401c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getTrackLastImported',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15c52863a0c8fd8ddff90902114997e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getDestinationIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f96c633bcf2040dfd511604d609219a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'getMigrationTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15f16d787b7bdc9b957d68b3ed942bee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\Migration',
         'functionName' => 'isAuditable',
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