<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Audit/HighestIdInterface.php-1594234425',
   'data' => 
  array (
    '6371215e8dd6159b3406d82ff0231430' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for destination and ID maps which track a highest ID.
 *
 * When implemented by destination plugins, getHighestId() should return the
 * highest ID of the destination entity type that exists in the system. So, for
 * example, the entity:node plugin should return the highest node ID that
 * exists, regardless of whether it was created by a migration.
 *
 * When implemented by an ID map, getHighestId() should return the highest
 * migrated ID of the destination entity type.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Audit',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '034b1ff7aaaf56a7e02241c101f75178' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the highest ID tracked by the implementing plugin.
   *
   * @return int
   *   The highest ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Audit',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Audit\\HighestIdInterface',
         'functionName' => 'getHighestId',
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