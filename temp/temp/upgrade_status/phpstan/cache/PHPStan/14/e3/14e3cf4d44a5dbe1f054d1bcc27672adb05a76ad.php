<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/block_content/src/Access/RefinableDependentAccessInterface.php-1594234425',
   'data' => 
  array (
    'c0a023d7c928b57109873ddb8e021867' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * An interface to allow adding an access dependency.
 *
 * @internal
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
        ),
         'className' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ac600b63b121f8b7e7d49a368d2ed92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the access dependency.
   *
   * If an access dependency is already set this will replace the existing
   * dependency.
   *
   * @param \\Drupal\\Core\\Access\\AccessibleInterface $access_dependency
   *   The object upon which access depends.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
        ),
         'className' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
         'functionName' => 'setAccessDependency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2aa0fae1031c8a7c0a4920107a5d311' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an access dependency into the existing access dependency.
   *
   * If no existing dependency is currently set this will set the dependency
   * will be set to the new value.
   *
   * If there is an existing dependency and it is not an instance of
   * AccessGroupAnd the dependency will be set as a new AccessGroupAnd
   * instance with the existing and new dependencies as the members of the
   * group.
   *
   * If there is an existing dependency and it is a instance of AccessGroupAnd
   * the dependency will be added to the existing access group.
   *
   * @param \\Drupal\\Core\\Access\\AccessibleInterface $access_dependency
   *   The access dependency to merge.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
        ),
         'className' => 'Drupal\\block_content\\Access\\RefinableDependentAccessInterface',
         'functionName' => 'addAccessDependency',
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