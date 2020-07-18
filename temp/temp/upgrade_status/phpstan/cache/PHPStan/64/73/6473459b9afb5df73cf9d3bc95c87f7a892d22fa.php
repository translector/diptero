<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/Plugin/migrate/process/ParagraphsProcessOnValue.php-1590060906',
   'data' => 
  array (
    '3fb87e41a13dcfa12ea93f63b4f9c9c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Runs a migration process on a value if a condition is met.
 *
 * The process will run if a source value is equal to an expected value.
 * Otherwise returns the original value unchanged.
 *
 * Configuration Keys:
 *
 * source_value: (required) string. The source property to check against.
 * expected_value: (required) string. The value to check against.  If the
 *   source property described by source_value matches this value, the process
 *   will be executed.
 * process: (required) array.  The process array to execute if the source
 *   property matches the expected value.
 *
 * @see \\Drupal\\migrate\\Plugin\\MigrateProcessInterface
 *
 * @MigrateProcessPlugin(
 *   id = "paragraphs_process_on_value"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\process',
         'uses' => 
        array (
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\process\\ParagraphsProcessOnValue',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c3d6dfe2d43fbc97293563fd0e19c3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\process',
         'uses' => 
        array (
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\process\\ParagraphsProcessOnValue',
         'functionName' => 'transform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6dd5859de0b931c0e751cd08179b0107' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Plugin\\migrate\\process',
         'uses' => 
        array (
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\paragraphs\\Plugin\\migrate\\process\\ParagraphsProcessOnValue',
         'functionName' => 'defaultConfiguration',
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