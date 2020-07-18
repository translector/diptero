<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/drush/drush/src/Drush.php-1593546225',
   'data' => 
  array (
    '18e845b8e1caaefacd6b3e4df60c43a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Static Service Container wrapper.
 *
 * This code is analogous to the \\Drupal class in Drupal 8.
 *
 * We would like to move Drush towards the model of using constructor
 * injection rather than globals. This class serves as a unified global
 * accessor to arbitrary services for use by legacy Drush code.
 *
 * Advice from Drupal 8\'s \'Drupal\' class:
 *
 * This class exists only to support legacy code that cannot be dependency
 * injected. If your code needs it, consider refactoring it to be object
 * oriented, if possible. When this is not possible, and your code is more
 * than a few non-reusable lines, it is recommended to instantiate an object
 * implementing the actual logic.
 *
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e31cbca49f6287b17ffe8b3e477911e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The version of Drush from the drush.info file, or FALSE if not read yet.
     *
     * @var string|FALSE
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecb3860408bca4441bf6132c29d18367' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The Robo Runner -- manages and constructs all commandfile classes
     *
     * @var \\Robo\\Runner
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c46792dd4074949b47bbb804295d2b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Number of seconds before timeout for subprocesses. Can be customized via setTimeout() method.
     *
     * @var int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a63fec63e5996d9a8afc3082d9337a1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'getTimeout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6b8166fceded4f9a636abb37494974f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the current Drush version.
     *
     * n.b. Called before the DI container is initialized.
     * Do not log, etc. here.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'getVersion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '332423d15189d2f0fd9936e98339390c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a new global container.
     *
     * @param \\League\\Container\\Container $container
     *   A new container instance to replace the current.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'setContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e08eed2aef6ac0656d1e22bf73672633' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Unsets the global container.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'unsetContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6824ba4572c06460abb0b9012a42da42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the currently active global container.
     *
     * @return \\League\\Container\\ContainerInterface|null
     *
     * @throws RuntimeException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'getContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66087c0ee0ae7c019e88cbe7fb3efe46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns TRUE if the container has been initialized, FALSE otherwise.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'hasContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48c874b835700a143d2b1d6de22c7d8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the current Symfony Console Application.
     *
     * @return Application
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'getApplication',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3dcc7200301ca00e0393d70e4a5bc829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the Robo runner.
     *
     * @return \\Robo\\Runner
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'runner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf632a9ffd4bdebbfce399c434831f02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Retrieves a service from the container.
     *
     * Use this method if the desired service is not one of those with a dedicated
     * accessor method below. If it is listed below, those methods are preferred
     * as they can return useful type hints.
     *
     * @param string $id
     *   The ID of the service to retrieve.
     *
     * @return mixed
     *   The specified service.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'service',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '012313b9d12d9c3f8428606d6599c1d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Indicates if a service is defined in the container.
     *
     * @param string $id
     *   The ID of the service to check.
     *
     * @return bool
     *   TRUE if the specified service exists, FALSE otherwise.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'hasService',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7464f0c5b2258393f325440076a4af8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return command factory
     *
     * @return \\Consolidation\\AnnotatedCommand\\AnnotatedCommandFactory
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'commandFactory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd99074ed65b56d54cee0784665c9d3e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the Drush logger object.
     *
     * @return LoggerInterface
     *
     * @deprecated Use injected logger instead.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'logger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21a94ad2d5b97d31b986ad0a8430ad10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the configuration object
     *
     * @return \\Drush\\Config\\DrushConfig
     *
     * @deprecated Use injected configuration instead.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'config',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dadd8b3488d19d48ed5a0ba6dd67607f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return SiteAliasManager
     *
     * @deprecated Use injected alias manager instead. @see Drush::drush()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'aliasManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c103cd29aebe087589564929677a77b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return ProcessManager
     *
     * @deprecated Use injected process manager instead. @see Drush::drush()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'processManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfdbd3d0a75c092c2e0d2d88ee95fd48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the input object
     *
     * @return InputInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'input',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5104f1929f9316598a0cf1b0a689abd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the output object
     *
     * @return OutputInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'output',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '583622c215240871ef3b09ba3a6ab5cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Run a Drush command on a site alias (or @self).
     *
     * Tip: Use injected process manager instead of this method. See below.
     *
     * A class should use ProcessManagerAwareInterface / ProcessManagerAwareTrait
     * in order to have the Process Manager injected by Drush\'s DI container.
     * For example:
     *
     *     use Consolidation\\SiteProcess\\ProcessManagerAwareTrait;
     *     use Consolidation\\SiteProcess\\ProcessManagerAwareInterface;
     *
     *     abstract class DrushCommands implements ProcessManagerAwareInterface ...
     *     {
     *         use ProcessManagerAwareTrait;
     *     }
     *
     * Since DrushCommands already uses ProcessManagerAwareTrait, all Drush
     * commands may use the process manager to call other Drush commands.
     * Other classes will need to ensure that the process manager is injected
     * as shown above.
     *
     * Note, however, that an alias record is required to use the `drush` method.
     * The alias manager will provide an alias record, but the alias manager is
     * not injected by default into Drush commands. In order to use it, it is
     * necessary to use SiteAliasManagerAwareTrait:
     *
     *     use Consolidation\\SiteAlias\\SiteAliasManagerAwareInterface;
     *     use Consolidation\\SiteAlias\\SiteAliasManagerAwareTrait;
     *
     *     class SiteInstallCommands extends DrushCommands implements SiteAliasManagerAwareInterface
     *     {
     *         use SiteAliasManagerAwareTrait;
     *
     *         public function install(array $profile, ...)
     *         {
     *             $selfRecord = $this->siteAliasManager()->getSelf();
     *             $args = [\'system.site\', ...];
     *             $options = [\'yes\' => true];
     *             $process = $this->processManager()->drush(selfRecord, \'config-set\', $args, $options);
     *             $process->mustRun();
     *         }
     *     }
     *
     * Objects that are fetched from the DI container, or any Drush command will
     * automatically be given a reference to the alias manager if SiteAliasManagerAwareTrait
     * is used. Other objects will need to be manually provided with a reference
     * to the alias manager once it is created (call $obj->setAliasManager($aliasManager);).
     *
     * Clients that are using Drush::drush(), and need a reference to the alias
     * manager may use Drush::aliasManager().
     *
     * @param SiteAliasInterface $siteAlias
     * @param string $command
     * @param array $args
     * @param array $options
     * @param array $options_double_dash
     * @return SiteProcess
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'drush',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fa3c531ecd516bfafbb4224c28a433c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Run a bash fragment on a site alias. U
     *
     * Use Drush::drush() instead of this method when calling Drush.
     * Tip: Consider using injected process manager instead of this method. @see \\Drush\\Drush::drush().
     *
     * @param SiteAliasInterface $siteAlias
     * @param array $args
     * @param array $options
     * @param array $options_double_dash
     * @return ProcessBase
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'siteProcess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a41fa799ef5e2c1af08deacd8553e6cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Run a bash fragment locally.
     *
     * The timeout parameter on this method doesn\'t work. It exists for compatibility with parent.
     * Call this method to get a Process and then call setters as needed.
     *
     * Tip: Consider using injected process manager instead of this method. @see \\Drush\\Drush::drush().
     *
     * @param string|array   $commandline The command line to run
     * @param string|null    $cwd         The working directory or null to use the working dir of the current PHP process
     * @param array|null     $env         The environment variables or null to use the same environment as the current PHP process
     * @param mixed|null     $input       The input as stream resource, scalar or \\Traversable, or null for no input
     * @param int|float|null $timeout     The timeout in seconds or null to disable
     * @param array          $options     An array of options for proc_open
     *
     * @return ProcessBase
     *   A wrapper around Symfony Process.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '743f4923d27f3f3c68276216b2a9adff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a Process instance from a commandline string.
     *
     * Tip: Consider using injected process manager instead of this method. @see \\Drush\\Drush::drush().
     *
     * @param string $command The commandline string to run
     * @param string|null $cwd     The working directory or null to use the working dir of the current PHP process
     * @param array|null $env     The environment variables or null to use the same environment as the current PHP process
     * @param mixed|null $input   The input as stream resource, scalar or \\Traversable, or null for no input
     * @param int|float|null $timeout The timeout in seconds or null to disable
     * @return Process
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'shell',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b3143779e3df317998e0c6b5da0d485' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return \'true\' if we are in simulated mode
     *
     * @deprecated Inject configuration and use $this->getConfig()->simulate().
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'simulate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea8136ee9173a440d20efad7c169dda0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return \'true\' if we are in affirmative mode
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'affirmative',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f01495ba23bce5d1f39dc85ce75e2ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return \'true\' if we are in negative mode
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'negative',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fa81fc1c3279d882d64be46b7328d9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return \'true\' if we are in verbose mode
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'verbose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd3bf924c9ad78b09d5f2435a7f2fc28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return \'true\' if we are in debug mode
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'debug',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7c5da328d50bfb48079f203f2514e95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the Bootstrap Manager.
     *
     * @return \\Drush\\Boot\\BootstrapManager
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'bootstrapManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b69d7bbdfc96d6a9f91fae85e4b10748' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the Bootstrap object.
     *
     * @return \\Drush\\Boot\\Boot
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'bootstrap',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b49d681987acac71ebe670608eecad4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Read the drush info file.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush',
         'uses' => 
        array (
          'sitealiasinterface' => 'Consolidation\\SiteAlias\\SiteAliasInterface',
          'sitealiasmanager' => 'Consolidation\\SiteAlias\\SiteAliasManager',
          'processbase' => 'Consolidation\\SiteProcess\\ProcessBase',
          'siteprocess' => 'Consolidation\\SiteProcess\\SiteProcess',
          'containerinterface' => 'League\\Container\\ContainerInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'application' => 'Symfony\\Component\\Console\\Application',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'preflightargs' => 'Drush\\Preflight\\PreflightArgs',
          'process' => 'Symfony\\Component\\Process\\Process',
        ),
         'className' => 'Drush\\Drush',
         'functionName' => 'drushReadDrushInfo',
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