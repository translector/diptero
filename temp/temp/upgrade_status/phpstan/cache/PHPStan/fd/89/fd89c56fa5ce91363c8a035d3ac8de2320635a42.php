<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php-1592341266',
   'data' => 
  array (
    'c624a063a91dc75411d6bd2dd3aa2cea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * HTTP Request exception
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '392c7af1e62b8fe44319311b8c003795' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var RequestInterface */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abdd85f484bd41dbf9963eeab9071046' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var ResponseInterface|null */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acf9b8f8103ac2f0a97db85aff91137f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var array */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4293ef0641309c0307866cd17ee1576' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Wrap non-RequestExceptions with a RequestException
     *
     * @param RequestInterface $request
     * @param \\Exception       $e
     *
     * @return RequestException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => 'wrapException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2d403efdc09859c7213df5c1d286b9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Factory method to create a new exception with a normalized error message
     *
     * @param RequestInterface  $request  Request
     * @param ResponseInterface $response Response received
     * @param \\Exception        $previous Previous exception
     * @param array             $ctx      Optional handler context.
     *
     * @return self
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb53bdff0607427b46f8e1d0f5b6b013' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a short summary of the response
     *
     * Will return `null` if the response is not printable.
     *
     * @param ResponseInterface $response
     *
     * @return string|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => 'getResponseBodySummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59e812b92872f16a751dd04295a3751c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Obfuscates URI if there is a username and a password present
     *
     * @param UriInterface $uri
     *
     * @return UriInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => 'obfuscateUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b22a21dbbdcb6094cdc8ce376497c1bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the request that caused the exception
     *
     * @return RequestInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => 'getRequest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31d21a37f5f529289f4b099a99299613' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the associated response
     *
     * @return ResponseInterface|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => 'getResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18a8e6548ef0824d8822b2fee765d529' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if a response was received
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => 'hasResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3372786955685e8980f90c9e76201fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get contextual information about the error from the underlying handler.
     *
     * The contents of this array will vary depending on which handler you are
     * using. It may also be just an empty array. Relying on this data will
     * couple you to a specific handler, but can give more debug information
     * when needed.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Exception',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'uriinterface' => 'Psr\\Http\\Message\\UriInterface',
        ),
         'className' => 'GuzzleHttp\\Exception\\RequestException',
         'functionName' => 'getHandlerContext',
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