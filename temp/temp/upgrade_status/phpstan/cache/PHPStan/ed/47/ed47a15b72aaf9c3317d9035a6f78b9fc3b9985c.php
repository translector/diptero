<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/user/src/PermissionHandlerInterface.php-1594234425',
   'data' => 
  array (
    'd9c7e617427673e8adf85b0678755235' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface to list available permissions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\PermissionHandlerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e27468d2ed09a364c80e2f1ba950cc04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all available permissions.
   *
   * @return array
   *   An array whose keys are permission names and whose corresponding values
   *   are arrays containing the following key-value pairs:
   *   - title: The human-readable name of the permission, to be shown on the
   *     permission administration page. This should be wrapped in the t()
   *     function so it can be translated.
   *   - description: (optional) A description of what the permission does. This
   *     should be wrapped in the t() function so it can be translated.
   *   - restrict access: (optional) A boolean which can be set to TRUE to
   *     indicate that site administrators should restrict access to this
   *     permission to trusted users. This should be used for permissions that
   *     have inherent security risks across a variety of potential use cases
   *     (for example, the "administer filters" and "bypass node access"
   *     permissions provided by Drupal core). When set to TRUE, a standard
   *     warning message defined in user_admin_permissions() will be displayed
   *     with the permission on the permission administration page. Defaults
   *     to FALSE.
   *   - warning: (optional) A translated warning message to display for this
   *     permission on the permission administration page. This warning
   *     overrides the automatic warning generated by \'restrict access\' being
   *     set to TRUE. This should rarely be used, since it is important for all
   *     permissions to have a clear, consistent security warning that is the
   *     same across the site. Use the \'description\' key instead to provide any
   *     information that is specific to the permission you are defining.
   *   - provider: (optional) The provider name of the permission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\PermissionHandlerInterface',
         'functionName' => 'getPermissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee3fbf8a75bd57357a18534ce8d067fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether a module provides some permissions.
   *
   * @param string $module_name
   *   The module name.
   *
   * @return bool
   *   Returns TRUE if the module provides some permissions, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\PermissionHandlerInterface',
         'functionName' => 'moduleProvidesPermissions',
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