<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/migrate/destination/ComponentEntityDisplayBase.php-1594234425',
   'data' => 
  array (
    '4b030c269b3a1fd3711af2977444a977' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a destination plugin for migrating entity display components.
 *
 * Display modes provide different presentations for viewing (\'view modes\') or
 * editing (\'form modes\') content. This destination plugin is an abstract base
 * class for migrating fields and other components into view and form modes.
 *
 * @see \\Drupal\\migrate\\Plugin\\migrate\\destination\\PerComponentEntityDisplay
 * @see \\Drupal\\migrate\\Plugin\\migrate\\destination\\PerComponentEntityFormDisplay
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\ComponentEntityDisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e95acacd5e692b51f2e65643f84bb59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity display repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\ComponentEntityDisplayBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f035a6f312c137f0f8961fd94115631' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * PerComponentEntityDisplay constructor.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\migrate\\Plugin\\MigrationInterface $migration
   *   The migration.
   * @param \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface $entity_display_repository
   *   The entity display repository service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\ComponentEntityDisplayBase',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1d3c93b1b23b04e40d9d0c2616fe0ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\ComponentEntityDisplayBase',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ac8aaa42c720a2f673e80e3a65cd4e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\ComponentEntityDisplayBase',
         'functionName' => 'import',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '601e797461701376b83ba90018cdec43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\ComponentEntityDisplayBase',
         'functionName' => 'getIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '645ad5bac956d213ddc46a35e2b55c2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\ComponentEntityDisplayBase',
         'functionName' => 'fields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f49e060d0126e2cfa44b3f15244ebefd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity.
   *
   * @param string $entity_type
   *   The entity type to retrieve.
   * @param string $bundle
   *   The entity bundle.
   * @param string $mode
   *   The display mode.
   *
   * @return \\Drupal\\Core\\Entity\\Display\\EntityDisplayInterface
   *   The entity display object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'row' => 'Drupal\\migrate\\Row',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\ComponentEntityDisplayBase',
         'functionName' => 'getEntity',
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