<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Breadcrumb/BreadcrumbBuilderInterface.php-1594234425',
   'data' => 
  array (
    'c1ca4c5424887bb3f6d87b494f5a40f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for classes that build breadcrumbs.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Breadcrumb',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7eb925325ef0554cae4db007481474e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this breadcrumb builder should be used to build the breadcrumb.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match.
   *
   * @return bool
   *   TRUE if this builder should be used or FALSE to let other builders
   *   decide.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Breadcrumb',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
         'functionName' => 'applies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '696ccf88776d4cb22f64adb94ad107f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the breadcrumb.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match.
   *
   * @return \\Drupal\\Core\\Breadcrumb\\Breadcrumb
   *   A breadcrumb.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Breadcrumb',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\Core\\Breadcrumb\\BreadcrumbBuilderInterface',
         'functionName' => 'build',
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