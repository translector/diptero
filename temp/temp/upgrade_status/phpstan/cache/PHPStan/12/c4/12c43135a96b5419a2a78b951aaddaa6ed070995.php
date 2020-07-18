<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/src/Plugin/Filter/LinkitFilter.php-1586214306',
   'data' => 
  array (
    '53b5e54af9f8df8e92b786899d01eb30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a Linkit filter.
 *
 * @Filter(
 *   id = "linkit",
 *   title = @Translation("Linkit URL converter"),
 *   description = @Translation("Updates links inserted by Linkit to point to entity URL aliases."),
 *   settings = {
 *     "title" = TRUE,
 *   },
 *   type = Drupal\\filter\\Plugin\\FilterInterface::TYPE_TRANSFORM_REVERSIBLE
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Filter\\LinkitFilter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a06689e383d91b88d0880d8351696fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Filter\\LinkitFilter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56ee0cfa89e5fc1287c542c4144abb83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The substitution manager.
   *
   * @var \\Drupal\\linkit\\SubstitutionManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Filter\\LinkitFilter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b0aa334e1552980101dc4b9bdb86475' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a LinkitFilter object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository
   *   The entity repository service.
   * @param \\Drupal\\linkit\\SubstitutionManagerInterface $substitution_manager
   *   The substitution manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Filter\\LinkitFilter',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14ab50a66ca1cb801630239b77c43483' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Filter\\LinkitFilter',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7e51fc2eb8a4b3ee00374169ebf4e4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Filter\\LinkitFilter',
         'functionName' => 'process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c5e96d1a61aadacb62811145c65d242' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\GeneratedUrl $url */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Filter\\LinkitFilter',
         'functionName' => 'process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bdc2b32e81441d4a7b495641c055756a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'substitutionmanagerinterface' => 'Drupal\\linkit\\SubstitutionManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\linkit\\Plugin\\Filter\\LinkitFilter',
         'functionName' => 'settingsForm',
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