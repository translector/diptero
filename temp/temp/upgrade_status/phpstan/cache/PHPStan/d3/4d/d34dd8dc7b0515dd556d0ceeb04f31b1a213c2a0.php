<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-kernel/KernelEvents.php-1591959427',
   'data' => 
  array (
    '7dc9bd13ac670cbf5fd11e071d12049a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Contains all events thrown in the HttpKernel component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1150871be87926833787c180dbaa3ada' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The REQUEST event occurs at the very beginning of request
     * dispatching.
     *
     * This event allows you to create a response for a request before any
     * other code in the framework is executed.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3f6382ac10c419b6fdb8c67c82ef97f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The EXCEPTION event occurs when an uncaught exception appears.
     *
     * This event allows you to create a response for a thrown exception or
     * to modify the thrown exception.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b46b38e3ab02eed1b121a5672b18db9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The VIEW event occurs when the return value of a controller
     * is not a Response instance.
     *
     * This event allows you to create a response for the return value of the
     * controller.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\GetResponseForControllerResultEvent")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1e5e776620142792daeeec39dd483ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The CONTROLLER event occurs once a controller was found for
     * handling a request.
     *
     * This event allows you to change the controller that will handle the
     * request.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e1cb775a8fb8af2ab117bebfb9522cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The CONTROLLER_ARGUMENTS event occurs once controller arguments have been resolved.
     *
     * This event allows you to change the arguments that will be passed to
     * the controller.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\FilterControllerArgumentsEvent")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57105076dcfc59077fac7f1af48187b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The RESPONSE event occurs once a response was created for
     * replying to a request.
     *
     * This event allows you to modify or replace the response that will be
     * replied.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33feb5d12f4d737ec5b8bbdf2678cebd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The TERMINATE event occurs once a response was sent.
     *
     * This event allows you to run expensive post-response jobs.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\PostResponseEvent")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '484604c78291af08c096f1c2090f20f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The FINISH_REQUEST event occurs when a response was generated for a request.
     *
     * This event allows you to reset the global and environmental state of
     * the application, when it was changed during the request.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent")
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
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