<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/user/src/RoleStorageInterface.php-1594234425',
   'data' => 
  array (
    '9eadb35f96cd4ddfaa9fa424ba02e969' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for role entity storage classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        ),
         'className' => 'Drupal\\user\\RoleStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02ac094ee15302f53558fc500acec47b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether a permission is in one of the passed in roles.
   *
   * @param string $permission
   *   The permission.
   * @param array $rids
   *   The list of role IDs to check.
   *
   * @return bool
   *   TRUE is the permission is in at least one of the roles. FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
        ),
         'className' => 'Drupal\\user\\RoleStorageInterface',
         'functionName' => 'isPermissionInRoles',
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