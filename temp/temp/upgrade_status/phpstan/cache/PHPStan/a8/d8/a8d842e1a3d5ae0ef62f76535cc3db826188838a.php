<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/routing/Generator/UrlGeneratorInterface.php-1590868206',
   'data' => 
  array (
    'cc01dcb69b9251451da6385e32b3c1ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * UrlGeneratorInterface is the interface that all URL generator classes must implement.
 *
 * The constants in this interface define the different types of resource references that
 * are declared in RFC 3986: http://tools.ietf.org/html/rfc3986
 * We are using the term "URL" instead of "URI" as this is more common in web applications
 * and we do not need to distinguish them as the difference is mostly semantical and
 * less technical. Generating URIs, i.e. representation-independent resource identifiers,
 * is also possible.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Routing\\Generator',
         'uses' => 
        array (
          'invalidparameterexception' => 'Symfony\\Component\\Routing\\Exception\\InvalidParameterException',
          'missingmandatoryparametersexception' => 'Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'requestcontextawareinterface' => 'Symfony\\Component\\Routing\\RequestContextAwareInterface',
        ),
         'className' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68f62b18e90135e0c75ffae93c307843' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Generates an absolute URL, e.g. "http://example.com/dir/file".
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Routing\\Generator',
         'uses' => 
        array (
          'invalidparameterexception' => 'Symfony\\Component\\Routing\\Exception\\InvalidParameterException',
          'missingmandatoryparametersexception' => 'Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'requestcontextawareinterface' => 'Symfony\\Component\\Routing\\RequestContextAwareInterface',
        ),
         'className' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a1f7e39c1b7e532550a2f37209c454b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Generates an absolute path, e.g. "/dir/file".
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Routing\\Generator',
         'uses' => 
        array (
          'invalidparameterexception' => 'Symfony\\Component\\Routing\\Exception\\InvalidParameterException',
          'missingmandatoryparametersexception' => 'Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'requestcontextawareinterface' => 'Symfony\\Component\\Routing\\RequestContextAwareInterface',
        ),
         'className' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24a5259fbd409c552392551d98c1fc8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Generates a relative path based on the current request path, e.g. "../parent-file".
     *
     * @see UrlGenerator::getRelativePath()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Routing\\Generator',
         'uses' => 
        array (
          'invalidparameterexception' => 'Symfony\\Component\\Routing\\Exception\\InvalidParameterException',
          'missingmandatoryparametersexception' => 'Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'requestcontextawareinterface' => 'Symfony\\Component\\Routing\\RequestContextAwareInterface',
        ),
         'className' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd26a7e9f0066bcf9c03b2a9929f11561' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Generates a network path, e.g. "//example.com/dir/file".
     * Such reference reuses the current scheme but specifies the host.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Routing\\Generator',
         'uses' => 
        array (
          'invalidparameterexception' => 'Symfony\\Component\\Routing\\Exception\\InvalidParameterException',
          'missingmandatoryparametersexception' => 'Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'requestcontextawareinterface' => 'Symfony\\Component\\Routing\\RequestContextAwareInterface',
        ),
         'className' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c55edf036fd021ec7247b8c8a82297c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Generates a URL or path for a specific route based on the given parameters.
     *
     * Parameters that reference placeholders in the route pattern will substitute them in the
     * path or host. Extra params are added as query string to the URL.
     *
     * When the passed reference type cannot be generated for the route because it requires a different
     * host or scheme than the current one, the method will return a more comprehensive reference
     * that includes the required params. For example, when you call this method with $referenceType = ABSOLUTE_PATH
     * but the route requires the https scheme whereas the current scheme is http, it will instead return an
     * ABSOLUTE_URL with the https scheme and the current host. This makes sure the generated URL matches
     * the route in any case.
     *
     * If there is no route with the given name, the generator must throw the RouteNotFoundException.
     *
     * The special parameter _fragment will be used as the document fragment suffixed to the final URL.
     *
     * @param string  $name          The name of the route
     * @param mixed[] $parameters    An array of parameters
     * @param int     $referenceType The type of reference to be generated (one of the constants)
     *
     * @return string The generated URL
     *
     * @throws RouteNotFoundException              If the named route doesn\'t exist
     * @throws MissingMandatoryParametersException When some parameters are missing that are mandatory for the route
     * @throws InvalidParameterException           When a parameter value for a placeholder is not correct because
     *                                             it does not match the requirement
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Routing\\Generator',
         'uses' => 
        array (
          'invalidparameterexception' => 'Symfony\\Component\\Routing\\Exception\\InvalidParameterException',
          'missingmandatoryparametersexception' => 'Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'requestcontextawareinterface' => 'Symfony\\Component\\Routing\\RequestContextAwareInterface',
        ),
         'className' => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
         'functionName' => 'generate',
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