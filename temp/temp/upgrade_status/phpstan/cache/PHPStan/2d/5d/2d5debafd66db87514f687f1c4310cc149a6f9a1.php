<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/DependencyInjection/ClassResolverInterface.php-1594234425',
   'data' => 
  array (
    'bd1210e473c8d640d6d27fc674aaee9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface to get a instance of a class with dependency injection.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1716eea4f58a9ade8ffe5ffee45cf422' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a class instance with a given class definition.
   *
   * In contrast to controllers you don\'t specify a method.
   *
   * @param string $definition
   *   A class name or service name.
   *
   * @return object
   *   The instance of the class.
   *
   * @throws \\InvalidArgumentException
   *   If $class is not a valid service identifier and the class does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
         'functionName' => 'getInstanceFromDefinition',
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