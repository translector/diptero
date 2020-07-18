<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/guzzlehttp/guzzle/src/Client.php-1592341266',
   'data' => 
  array (
    'e24754f86ed0ba167350129123fed9e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @method ResponseInterface get(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface head(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface put(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface post(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface patch(string|UriInterface $uri, array $options = [])
 * @method ResponseInterface delete(string|UriInterface $uri, array $options = [])
 * @method Promise\\PromiseInterface getAsync(string|UriInterface $uri, array $options = [])
 * @method Promise\\PromiseInterface headAsync(string|UriInterface $uri, array $options = [])
 * @method Promise\\PromiseInterface putAsync(string|UriInterface $uri, array $options = [])
 * @method Promise\\PromiseInterface postAsync(string|UriInterface $uri, array $options = [])
 * @method Promise\\PromiseInterface patchAsync(string|UriInterface $uri, array $options = [])
 * @method Promise\\PromiseInterface deleteAsync(string|UriInterface $uri, array $options = [])
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83a2e04f7193efd6f4122b31d3239198' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var array Default request options */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '314df16c23d346a645ce5cc24df91561' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clients accept an array of constructor parameters.
     *
     * Here\'s an example of creating a client using a base_uri and an array of
     * default request options to apply to each request:
     *
     *     $client = new Client([
     *         \'base_uri\'        => \'http://www.foo.com/1.0/\',
     *         \'timeout\'         => 0,
     *         \'allow_redirects\' => false,
     *         \'proxy\'           => \'192.168.16.1:10\'
     *     ]);
     *
     * Client configuration settings include the following options:
     *
     * - handler: (callable) Function that transfers HTTP requests over the
     *   wire. The function is called with a Psr7\\Http\\Message\\RequestInterface
     *   and array of transfer options, and must return a
     *   GuzzleHttp\\Promise\\PromiseInterface that is fulfilled with a
     *   Psr7\\Http\\Message\\ResponseInterface on success.
     *   If no handler is provided, a default handler will be created
     *   that enables all of the request options below by attaching all of the
     *   default middleware to the handler.
     * - base_uri: (string|UriInterface) Base URI of the client that is merged
     *   into relative URIs. Can be a string or instance of UriInterface.
     * - **: any request option
     *
     * @param array $config Client configuration settings.
     *
     * @see \\GuzzleHttp\\RequestOptions for a list of available request options.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6288d4aeb88be24a3f36ab08a33e926e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $method
     * @param array  $args
     *
     * @return Promise\\PromiseInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => '__call',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '035b6bad68ab3650e71dac70eee51967' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asynchronously send an HTTP request.
     *
     * @param array $options Request options to apply to the given
     *                       request and to the transfer. See \\GuzzleHttp\\RequestOptions.
     *
     * @return Promise\\PromiseInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'sendAsync',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb982f23906c468d2976c52bf051481c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Send an HTTP request.
     *
     * @param array $options Request options to apply to the given
     *                       request and to the transfer. See \\GuzzleHttp\\RequestOptions.
     *
     * @return ResponseInterface
     * @throws GuzzleException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'send',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8669fcf788f606639d831e0246fdf59f' => 
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
     * @param array               $options Request options to apply. See \\GuzzleHttp\\RequestOptions.
     *
     * @return Promise\\PromiseInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'requestAsync',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7471861b425a5f2976fffc2f13242496' => 
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
     * @param array               $options Request options to apply. See \\GuzzleHttp\\RequestOptions.
     *
     * @return ResponseInterface
     * @throws GuzzleException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'request',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '304c130be53abc87f819a3802100dabe' => 
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
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'getConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '250be135ab91c5bba39aeaddfa028d59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param  string|null $uri
     *
     * @return UriInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'buildUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ed1c4886f6ff61c884ad471fa4404fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Configures the default options for a client.
     *
     * @param array $config
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'configureDefaults',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '209ab3f6e99373ec45f4b230ff9e9c07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Merges default options into the array.
     *
     * @param array $options Options to modify by reference
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'prepareDefaults',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f73345e8f248021a4d22163dc683d03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Transfers the given request and applies request options.
     *
     * The URI of the request is not modified and the request options are used
     * as-is without merging in default options.
     *
     * @param array $options See \\GuzzleHttp\\RequestOptions.
     *
     * @return Promise\\PromiseInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'transfer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7e3bbeb17bfdbb96fbf4c8a5b7a9794' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var HandlerStack $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'transfer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd1cbeba308d245ea8d16747672bbcce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Applies the array of request options to a request.
     *
     * @param RequestInterface $request
     * @param array            $options
     *
     * @return RequestInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'applyOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4038f27d1568059d57882970b6977d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Throw Exception with pre-set message.
     * @return void
     * @throws \\InvalidArgumentException Invalid body.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'guzzleexception' => 'GuzzleHttp\\Exception\\GuzzleException',
          'promise' => 'GuzzleHttp\\Promise',
          'psr7' => 'GuzzleHttp\\Psr7',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Client',
         'functionName' => 'invalidBody',
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