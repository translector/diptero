<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/migrate/process/Get.php-1594234425',
   'data' => 
  array (
    '63e35d6214e7e70f90f26f29800fe074' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets the source value.
 *
 * Available configuration keys:
 * - source: Source property.
 *
 * The get plugin returns the value of the property given by the "source"
 * configuration key.
 *
 * Examples:
 *
 * @code
 * process:
 *   bar:
 *     plugin: get
 *     source: foo
 * @endcode
 *
 * This copies the source value of foo to the destination property "bar".
 *
 * Since get is the default process plugin, it can be shorthanded like this:
 *
 * @code
 * process:
 *   bar: foo
 * @endcode
 *
 * Get also supports a list of source properties.
 *
 * Example:
 *
 * @code
 * process:
 *   bar:
 *     plugin: get
 *     source:
 *       - foo1
 *       - foo2
 * @endcode
 *
 * This copies the array of source values [foo1, foo2] to the destination
 * property "bar".
 *
 * If the list of source properties contains an empty element then the current
 * value will be used. This makes it impossible to reach a source property with
 * an empty string as its name.
 *
 * Get also supports copying destination values. These are indicated by a
 * starting @ sign. Values using @ must be wrapped in quotes.
 *
 * @code
 * process:
 *   foo:
 *     plugin: machine_name
 *     source: baz
 *   bar:
 *     plugin: get
 *     source: \'@foo\'
 * @endcode
 *
 * This will simply copy the destination value of foo to the destination
 * property bar. foo configuration is included for illustration purposes.
 *
 * Because of this, if the source or destination property actually starts with a
 * "@", that character must be escaped with "@@". The referenced property
 * becomes, for example, "@@@foo".
 *
 * @code
 * process:
 *   \'@foo\':
 *     plugin: machine_name
 *     source: baz
 *   bar:
 *     plugin: get
 *     source: \'@@@foo\'
 * @endcode
 *
 * This should occur extremely rarely.
 *
 * @see \\Drupal\\migrate\\Plugin\\MigrateProcessInterface
 *
 * @MigrateProcessPlugin(
 *   id = "get"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\process',
         'uses' => 
        array (
          'processpluginbase' => 'Drupal\\migrate\\ProcessPluginBase',
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\process\\Get',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a0656d1471fb1a259df8a376595e181' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag indicating whether there are multiple values.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\process',
         'uses' => 
        array (
          'processpluginbase' => 'Drupal\\migrate\\ProcessPluginBase',
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\process\\Get',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8d93933c5db7b003e3be3c5bb4e652a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\process',
         'uses' => 
        array (
          'processpluginbase' => 'Drupal\\migrate\\ProcessPluginBase',
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\process\\Get',
         'functionName' => 'transform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '877c8104e0573f662d107305398ac102' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\process',
         'uses' => 
        array (
          'processpluginbase' => 'Drupal\\migrate\\ProcessPluginBase',
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\process\\Get',
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