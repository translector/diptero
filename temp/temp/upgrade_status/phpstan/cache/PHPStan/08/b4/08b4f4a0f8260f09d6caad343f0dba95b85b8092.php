<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/MigrationPluginManagerInterface.php-1594234425',
   'data' => 
  array (
    'e5638949b3954d8bcb858fd5b2f46b63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Migration plugin manager interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40b091735deb12ba2e10c610aca11610' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create pre-configured instance of plugin derivatives.
   *
   * @param array $id
   *   Either the plugin ID or the base plugin ID of the plugins being
   *   instantiated. Also accepts an array of plugin IDs and an empty array to
   *   load all plugins.
   * @param array $configuration
   *   An array of configuration relevant to the plugin instances. Keyed by the
   *   plugin ID.
   *
   * @return \\Drupal\\migrate\\Plugin\\MigrationInterface[]
   *   Fully configured plugin instances.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If an instance cannot be created, such as if the ID is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
         'functionName' => 'createInstances',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f92da2f58ba3b54d2d14f05aca526a9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a stub migration plugin from a definition array.
   *
   * @param array $definition
   *   The migration definition. If an \'id\' key is set then this will be used as
   *   the migration ID, if not a random ID will be assigned.
   *
   * @return \\Drupal\\migrate\\Plugin\\Migration
   *   The stub migration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
         'functionName' => 'createStubMigration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a042a02fc40318cf4ab419a2063be43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create migrations given a tag.
   *
   * @param string $tag
   *   A migration tag we want to filter by.
   *
   * @return array|\\Drupal\\migrate\\Plugin\\MigrationInterface[]
   *   An array of migration objects with the given tag.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrationPluginManagerInterface',
         'functionName' => 'createInstancesByTag',
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