<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-kernel/Event/GetResponseEvent.php-1591959427',
   'data' => 
  array (
    '31dbd1a13e2a9066337d0858fc4b62c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows to create a response for a request.
 *
 * Call setResponse() to set the response that will be returned for the
 * current request. The propagation of this event is stopped as soon as a
 * response is set.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54a3fe56860834e0ba837aeeb8ea153a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the response object.
     *
     * @return Response|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
         'functionName' => 'getResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8af490028a6a77db4bf68cf3ef5c1caa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a response and stops event propagation.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
         'functionName' => 'setResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4939cbaf9e30f6b68da34215ae1f93e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether a response was set.
     *
     * @return bool Whether a response was set
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent',
         'functionName' => 'hasResponse',
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