<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/ProcessPluginBase.php-1594234425',
   'data' => 
  array (
    'd1aebea29ff8a83d0469e20ceb0f19fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The base class for all migrate process plugins.
 *
 * Migrate process plugins are taking a value and transform them. For example,
 * transform a human provided name into a machine name, look up an identifier
 * in a previous migration and so on.
 *
 * @see https://www.drupal.org/node/2129651
 * @see \\Drupal\\migrate\\Plugin\\MigratePluginManager
 * @see \\Drupal\\migrate\\Plugin\\MigrateProcessInterface
 * @see \\Drupal\\migrate\\Annotation\\MigrateProcessPlugin
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrateprocessinterface' => 'Drupal\\migrate\\Plugin\\MigrateProcessInterface',
        ),
         'className' => 'Drupal\\migrate\\ProcessPluginBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2217b034df0121d6a66275f0f9151cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrateprocessinterface' => 'Drupal\\migrate\\Plugin\\MigrateProcessInterface',
        ),
         'className' => 'Drupal\\migrate\\ProcessPluginBase',
         'functionName' => 'transform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e70e404c4db568cdf16217cf948df0c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrateprocessinterface' => 'Drupal\\migrate\\Plugin\\MigrateProcessInterface',
        ),
         'className' => 'Drupal\\migrate\\ProcessPluginBase',
         'functionName' => 'multiple',
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