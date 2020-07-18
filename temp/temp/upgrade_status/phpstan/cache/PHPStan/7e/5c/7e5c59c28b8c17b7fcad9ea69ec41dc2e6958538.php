<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/file/src/FileStorageInterface.php-1594234425',
   'data' => 
  array (
    'fe9898dc9bbd7442302f7f67f09f8bc3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for file entity storage classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\file\\FileStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3d93db499f146ccc20c54e468e9cb51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines total disk space used by a single user or the whole filesystem.
   *
   * @param int $uid
   *   Optional. A user id, specifying NULL returns the total space used by all
   *   non-temporary files.
   * @param int $status
   *   (Optional) The file status to consider. The default is to only
   *   consider files in status FILE_STATUS_PERMANENT.
   *
   * @return int
   *   An integer containing the number of bytes used.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\file\\FileStorageInterface',
         'functionName' => 'spaceUsed',
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