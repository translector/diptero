<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_access/src/Access/WebformAccessGroupAccess.php-1594690523',
   'data' => 
  array (
    'b4affbbc6e3710b8800423eed1792cf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom access control handler for the webform access groups.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform_access\\Access\\WebformAccessGroupAccess',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'daf50f11333d5b03a575e33ef3de1a31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the current user is a administor or assign admin access.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform_access\\Access\\WebformAccessGroupAccess',
         'functionName' => 'checkAdminAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d5e42c0805a069f48da8a8027484d88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if a user account is am administrator for any access group.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   A user account.
   *
   * @return bool
   *   TRUE if a user account is am administrator for any access group.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform_access\\Access\\WebformAccessGroupAccess',
         'functionName' => 'isAdmin',
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