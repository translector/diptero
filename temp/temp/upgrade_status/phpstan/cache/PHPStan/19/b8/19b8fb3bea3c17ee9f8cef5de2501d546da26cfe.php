<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/MigratePluginManagerInterface.php-1594234425',
   'data' => 
  array (
    'c62f30197e58ed01fa75be069cd67520' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a pre-configured instance of a migration plugin.
   *
   * A specific createInstance method is necessary to pass the migration on.
   *
   * @param string $plugin_id
   *   The ID of the plugin being instantiated.
   * @param array $configuration
   *   An array of configuration relevant to the plugin instance.
   * @param \\Drupal\\migrate\\Plugin\\MigrationInterface $migration
   *   The migration context in which the plugin will run.
   *
   * @return object
   *   A fully configured plugin instance.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If the instance cannot be created, such as if the ID is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigratePluginManagerInterface',
         'functionName' => 'createInstance',
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