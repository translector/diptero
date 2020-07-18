<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/EventSubscriber/AjaxResponseSubscriber.php-1594234425',
   'data' => 
  array (
    'fdd1d385e2292dfcd1252b7c8315c56e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Response subscriber to handle AJAX responses.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'attachmentsresponseprocessorinterface' => 'Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'getresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3fbfddd67f4574e24b3ee470b5714a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The AJAX response attachments processor service.
   *
   * @var \\Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'attachmentsresponseprocessorinterface' => 'Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'getresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '117228cf45519cdeb3316779fbcd205b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an AjaxResponseSubscriber object.
   *
   * @param \\Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface $ajax_response_attachments_processor
   *   The AJAX response attachments processor service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'attachmentsresponseprocessorinterface' => 'Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'getresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95b9768a0bc66415d31c869e3db71480' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Request parameter to indicate that a request is a Drupal Ajax request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'attachmentsresponseprocessorinterface' => 'Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'getresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0944855746ed4ae77ea7a122fda3412' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the AJAX parameter from the current request.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent $event
   *   The response event, which contains the current request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'attachmentsresponseprocessorinterface' => 'Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'getresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
         'functionName' => 'onRequest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65cf1a27dcd90cca7925764479b86188' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the ajax commands right before preparing the result.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent $event
   *   The response event, which contains the possible AjaxResponse object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'attachmentsresponseprocessorinterface' => 'Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'getresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
         'functionName' => 'onResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddaa7ccc63be9b79b59e0c725f6752aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\EventSubscriber',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'attachmentsresponseprocessorinterface' => 'Drupal\\Core\\Render\\AttachmentsResponseProcessorInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'filterresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
          'getresponseevent' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
        ),
         'className' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
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