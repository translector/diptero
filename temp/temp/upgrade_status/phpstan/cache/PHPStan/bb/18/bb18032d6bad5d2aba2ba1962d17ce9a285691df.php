<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_share/src/EventSubscriber/WebformShareEventSubscriber.php-1594690523',
   'data' => 
  array (
    '94d184200073a8279df8cc9b984aa6fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Event subscriber to allow webform to be shared via an iframe.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_share\\EventSubscriber',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'webformsharehelper' => 'Drupal\\webform_share\\WebformShareHelper',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\webform_share\\EventSubscriber\\WebformShareEventSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80b0224507518f0d324e5fad77eaf1d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current route match.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_share\\EventSubscriber',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'webformsharehelper' => 'Drupal\\webform_share\\WebformShareHelper',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\webform_share\\EventSubscriber\\WebformShareEventSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01ab4c6a081d34bda8d4d2546c55ab2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformShareEventSubscriber object.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_share\\EventSubscriber',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'webformsharehelper' => 'Drupal\\webform_share\\WebformShareHelper',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\webform_share\\EventSubscriber\\WebformShareEventSubscriber',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9688ccc5e845afcc2a06bedaf4de9e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Remove \'X-Frame-Options\' from the response header for shared webforms.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent $event
   *   The response event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_share\\EventSubscriber',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'webformsharehelper' => 'Drupal\\webform_share\\WebformShareHelper',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\webform_share\\EventSubscriber\\WebformShareEventSubscriber',
         'functionName' => 'onResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '751d9fd7f91c26a273f1e154c1ef3bc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_share\\EventSubscriber',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'webformsharehelper' => 'Drupal\\webform_share\\WebformShareHelper',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\webform_share\\EventSubscriber\\WebformShareEventSubscriber',
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