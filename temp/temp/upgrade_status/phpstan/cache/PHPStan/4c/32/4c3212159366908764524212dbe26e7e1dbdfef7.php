<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/EventSubscriber/HttpExceptionSubscriberBase.php-1594234425',
   'data' => 
  array (
    '151bdda82e3ba861a2de7579ecd68eb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Utility base class for exception subscribers.
 *
 * A subscriber may extend this class and implement getHandledFormats() to
 * indicate which request formats it will respond to. Then implement an on*()
 * method for any error code (HTTP response code) that should be handled. For
 * example, to handle a specific error code like 404 Not Found messages add the
 * method:
 *
 * @code
 * public function on404(GetResponseForExceptionEvent $event) {}
 * @endcode
 *
 * To implement a fallback for the entire 4xx class of codes, implement the
 * method:
 *
 * @code
 * public function on4xx(GetResponseForExceptionEvent $event) {}
 * @endcode
 *
 * That method should then call $event->setResponse() to set the response object
 * for the exception. Alternatively, it may opt not to do so and then other
 * listeners will have the opportunity to handle the exception.
 *
 * Note: Core provides several important exception listeners by default. In most
 * cases, setting the priority of a contrib listener to the default of 0 will
 * do what you expect and handle the exceptions you\'d expect it to handle.
 * If a custom priority is set, be aware of the following core-registered
 * listeners.
 *
 * - Fast404ExceptionHtmlSubscriber: 200. This subscriber will return a
 *     minimalist, high-performance 404 page for HTML requests. It is not
 *     recommended to have a priority higher than this one as it will only slow
 *     down that use case.
 * - ExceptionLoggingSubscriber: 50.  This subscriber logs all exceptions but
 *     does not handle them. Do not register a listener with a higher priority
 *     unless you want exceptions to not get logged, which makes debugging more
 *     difficult.
 * - DefaultExceptionSubscriber: -256. The subscriber of last resort, this will
 *     provide generic handling for any exception. A listener with a lower
 *     priority will never get called.
 *
 * All other core-provided exception handlers have negative priorities so most
 * module-provided listeners will naturally take precedence over them.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\HttpExceptionSubscriberBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e3fc4f62f7bfe0d13e9be29c688abe3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Specifies the request formats this subscriber will respond to.
   *
   * @return array
   *   An indexed array of the format machine names that this subscriber will
   *   attempt to process, such as "html" or "json". Returning an empty array
   *   will apply to all formats.
   *
   * @see \\Symfony\\Component\\HttpFoundation\\Request
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\HttpExceptionSubscriberBase',
         'functionName' => 'getHandledFormats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47dd2e77a053362ce2e05df9408e53b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Specifies the priority of all listeners in this class.
   *
   * The default priority is 1, which is very low. To have listeners that have
   * a "first attempt" at handling exceptions return a higher priority.
   *
   * @return int
   *   The event priority of this subscriber.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\HttpExceptionSubscriberBase',
         'functionName' => 'getPriority',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3581d6ac64e565f7c17d675f7da91a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handles errors for this subscriber.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent $event
   *   The event to process.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\HttpExceptionSubscriberBase',
         'functionName' => 'onException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f34cac7cda60e28d17650b016bbd6a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Registers the methods in this class that should be listeners.
   *
   * @return array
   *   An array of event listener definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'getresponseforexceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\HttpExceptionSubscriberBase',
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