<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony-cmf/routing/VersatileGeneratorInterface.php-1494317441',
   'data' => 
  array (
    'd462fe31d53c49083da048fe61049138' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * This generator is able to handle more than string route names as symfony
 * core supports them.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Cmf\\Component\\Routing',
         'uses' => 
        array (
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
        ),
         'className' => 'Symfony\\Cmf\\Component\\Routing\\VersatileGeneratorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60da85893b5016a467306c567dd6fce9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Whether this generator supports the supplied $name.
     *
     * This check does not need to look if the specific instance can be
     * resolved to a route, only whether the router can generate routes from
     * objects of this class.
     *
     * @param mixed $name The route "name" which may also be an object or anything
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Cmf\\Component\\Routing',
         'uses' => 
        array (
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
        ),
         'className' => 'Symfony\\Cmf\\Component\\Routing\\VersatileGeneratorInterface',
         'functionName' => 'supports',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4793811578354d2955378f1896dc21ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Convert a route identifier (name, content object etc) into a string
     * usable for logging and other debug/error messages.
     *
     * @param mixed $name
     * @param array $parameters which should contain a content field containing
     *                          a RouteReferrersReadInterface object
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Cmf\\Component\\Routing',
         'uses' => 
        array (
          'urlgeneratorinterface' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
        ),
         'className' => 'Symfony\\Cmf\\Component\\Routing\\VersatileGeneratorInterface',
         'functionName' => 'getRouteDebugMessage',
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