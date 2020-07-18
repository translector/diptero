<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/EventSubscriber/MainContentViewSubscriber.php-1594234425',
   'data' => 
  array (
    '3a0044fd67bec0a13604cfafeaf437f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * View subscriber rendering main content render arrays into responses.
 *
 * Additional target rendering formats can be defined by adding another service
 * that implements \\Drupal\\Core\\Render\\MainContent\\MainContentRendererInterface
 * and tagging it as a @code render.main_content_renderer @endcode, then
 * \\Drupal\\Core\\Render\\MainContent\\MainContentRenderersPass will detect it and
 * use it when appropriate.
 *
 * @see \\Drupal\\Core\\Render\\MainContent\\MainContentRendererInterface
 * @see \\Drupal\\Core\\Render\\MainContentControllerPass
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforcontrollerresultevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a87f97f80c04954bd52575967850ab79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The class resolver service.
   *
   * @var \\Drupal\\Core\\Controller\\ControllerResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforcontrollerresultevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '297246f951c69831c2095c66dfab2647' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current route match.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforcontrollerresultevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b56fa805a772a70f19e66f971da028a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The available main content renderer services, keyed per format.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforcontrollerresultevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e612fd162bb192652b65ae48447d54e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * URL query attribute to indicate the wrapper used to render a request.
   *
   * The wrapper format determines how the HTML is wrapped, for example in a
   * modal dialog.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforcontrollerresultevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a571d67091bd70b616aff9937b62f40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new MainContentViewSubscriber object.
   *
   * @param \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface $class_resolver
   *   The class resolver service.
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match.
   * @param array $main_content_renderers
   *   The available main content renderer service IDs, keyed by format.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforcontrollerresultevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4858e3c4169b546398863f4d8593cd0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a response given a (main content) render array.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent $event
   *   The event to process.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforcontrollerresultevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
         'functionName' => 'onViewRenderArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51569f85b9ee3006732dcd72e30d10d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cacheableresponseinterface' => 'Drupal\\Core\\Cache\\CacheableResponseInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforcontrollerresultevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
         'functionName' => 'getSubscribedEvents',
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