<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/src/Plugin/QueueWorker/OrphanPurger.php-1583961090',
   'data' => 
  array (
    'aeccdfa2b97418a16cae00969a22783e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Removes composite revisions that are no longer used.
 *
 * @QueueWorker(
 *   id = "entity_reference_revisions_orphan_purger",
 *   title = @Translation("Entity Reference Revisions Orphan Purger"),
 *   cron = {"time" = 60}
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'entityreferencerevisionsorphanpurger' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker\\OrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d44e749147996c6adb2dc00280e85d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'entityreferencerevisionsorphanpurger' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker\\OrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25994a456d1014a899383f8e85a0b662' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The purger.
   *
   * @var \\Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'entityreferencerevisionsorphanpurger' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker\\OrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a0f53a74a9e0c37e5772581c91075a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'entityreferencerevisionsorphanpurger' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker\\OrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6dc51a753335a41543c27cb4172366df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new OrphanPurger instance.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager service.
   * @param \\Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger $purger
   *   The purger service.
   * @param \\Drupal\\Core\\Database\\Connection $database
   *   The database service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'entityreferencerevisionsorphanpurger' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker\\OrphanPurger',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e8f4154c20c6bebe03b80d7e8661e17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'entityreferencerevisionsorphanpurger' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker\\OrphanPurger',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41be245a532d9f33ae8e86d31c56dafa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'entityreferencerevisionsorphanpurger' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker\\OrphanPurger',
         'functionName' => 'processItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5706f82f840893779e699fba5a57cf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityInterface $composite_revision */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'entityreferencerevisionsorphanpurger' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\QueueWorker\\OrphanPurger',
         'functionName' => 'processItem',
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