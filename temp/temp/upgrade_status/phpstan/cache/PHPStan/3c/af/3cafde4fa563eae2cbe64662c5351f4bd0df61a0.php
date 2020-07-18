<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony-cmf/routing/PagedRouteProviderInterface.php-1494317441',
   'data' => 
  array (
    'f8fe940f56b11db2cdabbafb4f7a3870' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for a provider which allows to retrieve a limited amount of routes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Cmf\\Component\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66482aae105881228ceea200caf48508' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Find an amount of routes with an offset and possible a limit.
     *
     * In case you want to iterate over all routes, you want to avoid to load
     * all routes at once.
     *
     * @param int $offset
     *                    The sequence will start with that offset in the list of all routes.
     * @param int $length [optional]
     *                    The sequence will have that many routes in it. If no length is
     *                    specified all routes are returned.
     *
     * @return \\Symfony\\Component\\Routing\\Route[]
     *                                            Routes keyed by the route name.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Cmf\\Component\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
         'functionName' => 'getRoutesPaged',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c2f53ade553733acdeb4d729494803a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines the total amount of routes.
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Cmf\\Component\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
         'functionName' => 'getRoutesCount',
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