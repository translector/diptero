<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/block_content/src/Access/DependentAccessInterface.php-1594234425',
   'data' => 
  array (
    '1d4eabc82a2bb330a7971dc705ca32c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for AccessibleInterface objects that have an access dependency.
 *
 * Objects should implement this interface when their access depends on access
 * to another object that implements \\Drupal\\Core\\Access\\AccessibleInterface.
 * This interface simply provides the getter method for the access
 * dependency object. Objects that implement this interface are responsible for
 * checking access of the access dependency because the dependency may not take
 * effect in all cases. For instance an entity may only need the access
 * dependency set when it is embedded within another entity and its access
 * should be dependent on access to the entity in which it is embedded.
 *
 * To check the access to the dependency the object implementing this interface
 * can use code like this:
 * @code
 * $accessible->getAccessDependency()->access($op, $account, TRUE);
 * @endcode
 *
 * @internal
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\block_content\\Access\\DependentAccessInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05f6d9b0b71e272cdddceabef6e0109e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the access dependency.
   *
   * @return \\Drupal\\Core\\Access\\AccessibleInterface|null
   *   The access dependency or NULL if none has been set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_content\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\block_content\\Access\\DependentAccessInterface',
         'functionName' => 'getAccessDependency',
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