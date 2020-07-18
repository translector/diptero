<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_access/src/WebformAccessGroupStorageInterface.php-1594690523',
   'data' => 
  array (
    'aef06f79b8f9c675090f0c7c982e9325' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for Webform Access Group storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_access\\WebformAccessGroupStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec7102502954c74c0dec89d08bcc7e62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Load webform access groups by their related entity references.
   *
   * @param \\Drupal\\webform\\WebformInterface|null $webform
   *   (optional) The webform that the submission token is associated with.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   (optional) A webform submission source entity.
   * @param \\Drupal\\Core\\Session\\AccountInterface|null $account
   *   (optional) A user account.
   * @param string $type
   *   (optional) Webform access type.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface[]
   *   An array of webform access group objects indexed by their ids.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_access\\WebformAccessGroupStorageInterface',
         'functionName' => 'loadByEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5ecf1fb7b0b3f8c2786bb1cbbc420e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get source entities associated with a user account.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   A user account.
   * @param string|null $entity_type
   *   Source entity type.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface[]
   *   Get source entities associated with a user account.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_access\\WebformAccessGroupStorageInterface',
         'functionName' => 'getUserEntities',
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