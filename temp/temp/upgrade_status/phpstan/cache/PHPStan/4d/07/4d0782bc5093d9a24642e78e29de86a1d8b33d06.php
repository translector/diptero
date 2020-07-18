<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Routing/RoutingEvents.php-1594234425',
   'data' => 
  array (
    'e63cdd214d2be620f4749302446b27ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Contains all events thrown in the core routing component.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RoutingEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '291c3b8c2c3a0f4ee95314d19b5ec3cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired during route collection to allow new routes.
   *
   * This event is used to add new routes based upon existing routes, giving
   * modules the opportunity to dynamically generate additional routes. The
   * event listener method receives a \\Drupal\\Core\\Routing\\RouteBuildEvent
   * instance.
   *
   * @Event
   *
   * @see \\Drupal\\Core\\Routing\\RouteBuildEvent
   * @see \\Drupal\\Core\\EventSubscriber\\EntityRouteProviderSubscriber
   * @see \\Drupal\\Core\\Routing\\RouteBuilder::rebuild()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RoutingEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92886603c5c05bb20f85c2bc5d06d882' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired during route collection to allow changes to routes.
   *
   * This event is used to process new routes before they get saved, giving
   * modules the opportunity to alter routes provided by any other module. The
   * event listener method receives a \\Drupal\\Core\\Routing\\RouteBuildEvent
   * instance.
   *
   * @Event
   *
   * @see \\Symfony\\Component\\Routing\\RouteCollection
   * @see \\Drupal\\system\\EventSubscriber\\AdminRouteSubscriber
   * @see \\Drupal\\Core\\Routing\\RouteBuilder::rebuild()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RoutingEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1b383ca0d459ec18639b24da4f2fcf6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired to indicate route building has ended.
   *
   * This event gives modules the opportunity to perform some action after route
   * building has completed. The event listener receives a
   * \\Symfony\\Component\\EventDispatcher\\Event instance.
   *
   * @Event
   *
   * @see \\Symfony\\Component\\EventDispatcher\\Event
   * @see \\Drupal\\Core\\EventSubscriber\\MenuRouterRebuildSubscriber
   * @see \\Drupal\\Core\\Routing\\RouteBuilder::rebuild()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RoutingEvents',
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