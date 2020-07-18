<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/hal/src/LinkManager/LinkManagerInterface.php-1594234425',
   'data' => 
  array (
    '5da04eab7aa2976b9b2309f8d9fdf587' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface implemented by link managers.
 *
 * There are no explicit methods on the manager interface. Instead link managers
 * broker the interactions of the different components, and therefore must
 * implement each component interface, which is enforced by this interface
 * extending all of the component ones.
 *
 * While a link manager may directly implement these interface methods with
 * custom logic, it is expected to be more common for plugin managers to proxy
 * the method invocations to the respective components.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\LinkManager',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\hal\\LinkManager\\LinkManagerInterface',
         'functionName' => NULL,
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