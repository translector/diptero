<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/guzzlehttp/guzzle/src/ClientInterface.php-1592341266',
   'data' => 
  array (
    '4473509b9f8ae7b3221d61ef2ca01cd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Client interface for sending HTTP requests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\ClientInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '289a21c503ac83dcc1cf637aaf981c76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @deprecated Will be removed in Guzzle 7.0.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\ClientInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5230c00faf83779a11ca14ea23e56eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array            $options Request options to apply to the given
     *                                  request and to the transfer.
     *
     * @return ResponseInterface
     * @throws GuzzleException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\ClientInterface',
         'functionName' => 'send',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52535f70d8a7770ca9b55f17576adc3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asynchronously send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array            $options Request options to apply to the given
     *                                  request and to the transfer.
     *
     * @return PromiseInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\ClientInterface',
         'functionName' => 'sendAsync',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d301490da6b83387f6902d068d4ea95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create and send an HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string              $method  HTTP method.
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @return ResponseInterface
     * @throws GuzzleException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\ClientInterface',
         'functionName' => 'request',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97c8870153fa50de7c9ae1e3f22ce04a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create and send an asynchronous HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string              $method  HTTP method
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @return PromiseInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\ClientInterface',
         'functionName' => 'requestAsync',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ba1682e98afe55583a17e670979bfa5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a client configuration option.
     *
     * These options include default request options of the client, a "handler"
     * (if utilized by the concrete client), and a "base_uri" if utilized by
     * the concrete client.
     *
     * @param string|null $option The config option to retrieve.
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\ClientInterface',
         'functionName' => 'getConfig',
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