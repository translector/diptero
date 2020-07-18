<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/MigrateProcessInterface.php-1594234425',
   'data' => 
  array (
    '8cbea7c66207231f3602c265b8648cf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * An interface for migrate process plugins.
 *
 * A process plugin will typically implement the transform() method to perform
 * its work. However, it is possible instead for a process plugin to use any
 * number of methods, thus offering different alternatives ways of processing.
 * In this case, the transform() method should not be implemented, and the
 * plugin configuration must provide the name of the method to be called via the
 * "method" key. Each method must have the same signature as transform().
 * The base class \\Drupal\\migrate\\ProcessPluginBase takes care of implementing
 * transform() and calling the configured method. See
 * \\Drupal\\migrate\\Plugin\\migrate\\process\\SkipOnEmpty and
 * d6_field_instance_widget_settings.yml for examples.
 *
 * @see \\Drupal\\migrate\\Plugin\\MigratePluginManager
 * @see \\Drupal\\migrate\\ProcessPluginBase
 * @see \\Drupal\\migrate\\Annotation\\MigrateProcessPlugin
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateProcessInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f74c371a31d2b97255073c52b384db7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs the associated process.
   *
   * @param mixed $value
   *   The value to be transformed.
   * @param \\Drupal\\migrate\\MigrateExecutableInterface $migrate_executable
   *   The migration in which this process is being executed.
   * @param \\Drupal\\migrate\\Row $row
   *   The row from the source to process. Normally, just transforming the value
   *   is adequate but very rarely you might need to change two columns at the
   *   same time or something like that.
   * @param string $destination_property
   *   The destination property currently worked on. This is only used together
   *   with the $row above.
   *
   * @return string|array
   *   The newly transformed value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateProcessInterface',
         'functionName' => 'transform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33b2e103f0d2fdd37627806853f2a9f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether the returned value requires multiple handling.
   *
   * @return bool
   *   TRUE when the returned value contains a list of values to be processed.
   *   For example, when the \'source\' property is a string and the value found
   *   is an array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateProcessInterface',
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