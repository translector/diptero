<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/http-kernel/Event/FilterResponseEvent.php-1591959427',
   'data' => 
  array (
    'f4d6d3c9467f89577c7f2f11feccdb7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows to filter a Response object.
 *
 * You can call getResponse() to retrieve the current response. With
 * setResponse() you can set a new response that will be returned to the
 * browser.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '449c0e77514c24d658d1eb35a72f3c24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the current response object.
     *
     * @return Response
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
         'functionName' => 'getResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88e3970b7731a8ddcce9437c7b77adbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a new response object.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent',
         'functionName' => 'setResponse',
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