<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-kernel/Event/GetResponseForExceptionEvent.php-1591959427',
   'data' => 
  array (
    '8c3f707ee70ce1e0248e6686e60ce5c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows to create a response for a thrown exception.
 *
 * Call setResponse() to set the response that will be returned for the
 * current request. The propagation of this event is stopped as soon as a
 * response is set.
 *
 * You can also call setException() to replace the thrown exception. This
 * exception will be thrown if no response is set during processing of this
 * event.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ec4da954b4771fa8170d9ec1b97f986' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The exception object.
     *
     * @var \\Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '745618e3e99008cddb7694c02e4fa62f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d9cd4bcbda499880a984d22becb5690' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the thrown exception.
     *
     * @return \\Exception The thrown exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
         'functionName' => 'getException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae644f99e9ac97cb0b9bfe509532a284' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Replaces the thrown exception.
     *
     * This exception will be thrown if no response is set in the event.
     *
     * @param \\Exception $exception The thrown exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
         'functionName' => 'setException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f82d38e42905ae585cfd5b985e6b0375' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mark the event as allowing a custom response code.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
         'functionName' => 'allowCustomResponseCode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd71e00e6a930abd50c649f198cf0d12c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the event allows a custom response code.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent',
         'functionName' => 'isAllowingCustomResponseCode',
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