<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Routing/RouteSubscriberBase.php-1594234425',
   'data' => 
  array (
    '0798859035d265991a5692287b589509' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base implementation for RouteSubscriber.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteSubscriberBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43e8f3235f858f4a1b742755cf75b59d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alters existing routes for a specific collection.
   *
   * @param \\Symfony\\Component\\Routing\\RouteCollection $collection
   *   The route collection for adding routes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteSubscriberBase',
         'functionName' => 'alterRoutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79e29fc90c548cf824b731f254d1fa26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteSubscriberBase',
         'functionName' => 'getSubscribedEvents',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9fbfa089b8bedfa863fec17d0d552c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Delegates the route altering to self::alterRoutes().
   *
   * @param \\Drupal\\Core\\Routing\\RouteBuildEvent $event
   *   The route build event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteSubscriberBase',
         'functionName' => 'onAlterRoutes',
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