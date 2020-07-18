<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Access/WebformSourceEntityAccess.php-1594690523',
   'data' => 
  array (
    'a1c657edba80b1175f337c364dcdc1c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom access control handler for the webform source entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformSourceEntityAccess',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2804a3ee167d7ec4f713fa9308734f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the user can access an entity\'s webform results.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   An entity.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformSourceEntityAccess',
         'functionName' => 'checkEntityResultsAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66d2e98f610b399a1b023770f6455a85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformSourceEntityAccess',
         'functionName' => 'checkEntityResultsAccess',
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