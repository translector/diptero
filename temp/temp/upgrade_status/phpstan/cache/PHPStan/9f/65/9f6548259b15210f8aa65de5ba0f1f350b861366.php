<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/MigrateException.php-1594234425',
   'data' => 
  array (
    '0a1252b6a0b48f4ef84a0456a6d6d8d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the migrate exception class.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ba6c37c2390bb3ff53ff8dcdc53d21b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The level of the error being reported.
   *
   * The value is a Migration::MESSAGE_* constant.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5652a7cf66af951c212d9728ad6346d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The status to record in the map table for the current item.
   *
   * The value is a MigrateMap::STATUS_* constant.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ed17c66be2d9e80519c6c8cc470748c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a MigrateException object.
   *
   * @param string $message
   *   The message for the exception.
   * @param int $code
   *   The Exception code.
   * @param \\Exception $previous
   *   The previous exception used for the exception chaining.
   * @param int $level
   *   The level of the error, a Migration::MESSAGE_* constant.
   * @param int $status
   *   The status of the item for the map table, a MigrateMap::STATUS_*
   *   constant.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateException',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26a07f8c4e7ae08ae8eeeb0744a9e2bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the level.
   *
   * @return int
   *   An integer status code. @see Migration::MESSAGE_*
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateException',
         'functionName' => 'getLevel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1dfd991aa22d08b301289b1ec074ee6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the status of the current item.
   *
   * @return int
   *   An integer status code. @see MigrateMap::STATUS_*
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateException',
         'functionName' => 'getStatus',
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