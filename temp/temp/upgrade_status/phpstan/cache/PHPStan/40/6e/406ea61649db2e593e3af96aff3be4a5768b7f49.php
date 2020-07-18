<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/user/src/UserDataInterface.php-1594234425',
   'data' => 
  array (
    'f643cae5e10a875ae245080eb637038d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the user data service interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\UserDataInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4434617aeedb350948b7b30c1a024e73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns data stored for a user account.
   *
   * @param string $module
   *   The name of the module the data is associated with.
   * @param int $uid
   *   (optional) The user account ID the data is associated with.
   * @param string $name
   *   (optional) The name of the data key.
   *
   * @return mixed|array
   *   The requested user account data, depending on the arguments passed:
   *   - For $module, $name, and $uid, the stored value is returned, or NULL if
   *     no value was found.
   *   - For $module and $uid, an associative array is returned that contains
   *     the stored data name/value pairs.
   *   - For $module and $name, an associative array is returned whose keys are
   *     user IDs and whose values contain the stored values.
   *   - For $module only, an associative array is returned that contains all
   *     existing data for $module in all user accounts, keyed first by user ID
   *     and $name second.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\UserDataInterface',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '604e9328deb3e790b8a609820a7b0e33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores data for a user account.
   *
   * @param string $module
   *   The name of the module the data is associated with.
   * @param int $uid
   *   The user account ID the data is associated with.
   * @param string $name
   *   The name of the data key.
   * @param mixed $value
   *   The value to store. Non-scalar values are serialized automatically.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\UserDataInterface',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '926c3a789c5da1c704ffa1be261e3f81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes data stored for a user account.
   *
   * @param string|array $module
   *   (optional) The name of the module the data is associated with. Can also
   *   be an array to delete the data of multiple modules.
   * @param int|array $uid
   *   (optional) The user account ID the data is associated with. If omitted,
   *   all data for $module is deleted. Can also be an array of IDs to delete
   *   the data of multiple user accounts.
   * @param string $name
   *   (optional) The name of the data key. If omitted, all data associated with
   *   $module and $uid is deleted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\UserDataInterface',
         'functionName' => 'delete',
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