<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Routing/AdminContext.php-1594234425',
   'data' => 
  array (
    '07c790ebc471477b8103f2bae3a3d041' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a helper class to determine whether the route is an admin one.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Core\\Routing\\AdminContext',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7c6578993e2c3d235e6989769bd68c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The route match.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Core\\Routing\\AdminContext',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '577ea67a2e76eb2f54e9becf9ad04c1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Construct a new admin context helper instance.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Core\\Routing\\AdminContext',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a035387fad4c4764937633782edb3bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the active route is an admin one.
   *
   * @param \\Symfony\\Component\\Routing\\Route $route
   *   (optional) The route to determine whether it is an admin one. Per default
   *   this falls back to the route object on the active request.
   *
   * @return bool
   *   Returns TRUE if the route is an admin one, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Core\\Routing\\AdminContext',
         'functionName' => 'isAdminRoute',
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