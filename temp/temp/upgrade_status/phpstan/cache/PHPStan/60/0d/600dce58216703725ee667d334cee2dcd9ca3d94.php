<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/MigrateSkipRowException.php-1594234425',
   'data' => 
  array (
    '51e940c6c5702613bd2c62cd36099dd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * This exception is thrown when a row should be skipped.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\MigrateSkipRowException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b83d3ad40875daf6253d94a5ca9c9b3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether to record the skip in the map table, or skip silently.
   *
   * @var bool
   *   TRUE to record as STATUS_IGNORED in the map, FALSE to skip silently.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\MigrateSkipRowException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c076f2df5f2f88bb5db812899993a86a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a MigrateSkipRowException object.
   *
   * @param string $message
   *   The message for the exception.
   * @param bool $save_to_map
   *   TRUE to record as STATUS_IGNORED in the map, FALSE to skip silently.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\MigrateSkipRowException',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14f7cedb077d8bf3ab78214bb58fca67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the thrower wants to record this skip in the map table.
   *
   * @return bool
   *   TRUE to record as STATUS_IGNORED in the map, FALSE to skip silently.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\MigrateSkipRowException',
         'functionName' => 'getSaveToMap',
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