<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Routing/RouteBuilderInterface.php-1594234425',
   'data' => 
  array (
    'c9e2e3c589f573e440acdee07f294aaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Rebuilds the route information and dumps it.
 *
 * Rebuilding the route information is the process of gathering all routing data
 * from .routing.yml files, creating a
 * \\Symfony\\Component\\Routing\\RouteCollection object out of it, and dispatching
 * that object as a \\Drupal\\Core\\Routing\\RouteBuildEvent to all registered
 * listeners. After that, the \\Symfony\\Component\\Routing\\RouteCollection object
 * is used to dump the data. Examples of a dump include filling up the routing
 * table, auto-generating Apache mod_rewrite rules, or auto-generating a PHP
 * matcher class.
 *
 * @see \\Drupal\\Core\\Routing\\MatcherDumperInterface
 * @see \\Drupal\\Core\\Routing\\RouteProviderInterface
 *
 * @ingroup routing
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteBuilderInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '513358796baf323536163d7bb1e583a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rebuilds the route information and dumps it.
   *
   * @return bool
   *   Returns TRUE if the rebuild succeeds, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteBuilderInterface',
         'functionName' => 'rebuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a293d52a0042dc6d182d651fc30d3dc2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rebuilds the route information if necessary, and dumps it.
   *
   * @return bool
   *   Returns TRUE if the rebuild occurs, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteBuilderInterface',
         'functionName' => 'rebuildIfNeeded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e03464675f324a0fdbfce8a523fbe96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the router to be rebuilt next time rebuildIfNeeded() is called.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteBuilderInterface',
         'functionName' => 'setRebuildNeeded',
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