<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-kernel/Event/KernelEvent.php-1591959427',
   'data' => 
  array (
    '3b024cac201abe3a41d4232232a6a0d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for events thrown in the HttpKernel component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\KernelEvent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a37b7a65cc6c538810dc2de43d18c992' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param HttpKernelInterface $kernel      The kernel in which this event was thrown
     * @param Request             $request     The request the kernel is currently processing
     * @param int                 $requestType The request type the kernel is currently processing; one of
     *                                         HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\KernelEvent',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '202d2c58caf934a020cc52fb11f13ed6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the kernel in which this event was thrown.
     *
     * @return HttpKernelInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\KernelEvent',
         'functionName' => 'getKernel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab1be27e560f5db76d5a67eb3e03b0ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the request the kernel is currently processing.
     *
     * @return Request
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\KernelEvent',
         'functionName' => 'getRequest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a752f1e04c8c0fc4b00d280a2bbfd3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the request type the kernel is currently processing.
     *
     * @return int One of HttpKernelInterface::MASTER_REQUEST and
     *             HttpKernelInterface::SUB_REQUEST
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\KernelEvent',
         'functionName' => 'getRequestType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7b31dd8e8d537cf7fae10f76e20efe5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if this is a master request.
     *
     * @return bool True if the request is a master request
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\KernelEvent',
         'functionName' => 'isMasterRequest',
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