<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/MigrateExecutableInterface.php-1594234425',
   'data' => 
  array (
    '7b430a603982bfb7dcdfef2ce210123e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs an import operation - migrate items from source to destination.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutableInterface',
         'functionName' => 'import',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea38d234522d2b863afc18ef2a2d793c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs a rollback operation - remove previously-imported items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutableInterface',
         'functionName' => 'rollback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2ad1cf3856e70de7ed738219dfed1f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a row.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The $row to be processed.
   * @param array $process
   *   (optional) A process pipeline configuration. If not set, the top level
   *   process configuration in the migration entity is used.
   * @param mixed $value
   *   (optional) Initial value of the pipeline for the first destination.
   *   Usually setting this is not necessary as $process typically starts with
   *   a \'get\'. This is useful only when the $process contains a single
   *   destination and needs to access a value outside of the source. See
   *   \\Drupal\\migrate\\Plugin\\migrate\\process\\SubProcess::transformKey for an
   *   example.
   *
   * @throws \\Drupal\\migrate\\MigrateException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutableInterface',
         'functionName' => 'processRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96eeadcf14d36f105c306fa0f6cd41de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes messages through to the map class.
   *
   * @param string $message
   *   The message to record.
   * @param int $level
   *   (optional) Message severity (defaults to MESSAGE_ERROR).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutableInterface',
         'functionName' => 'saveMessage',
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