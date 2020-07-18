<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/guzzlehttp/guzzle/src/HandlerStack.php-1592341266',
   'data' => 
  array (
    '7fff6e1e3447a426a0e80a878e897bf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Creates a composed Guzzle handler function by stacking middlewares on top of
 * an HTTP handler function.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53132546cf12ca82840a768a5fe22561' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var callable|null */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e21642e2449c5eb6098c56e1bbb573fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var array */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '663e792dae7e0d6f20dc5a72f7953167' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a default handler stack that can be used by clients.
     *
     * The returned handler will wrap the provided handler or use the most
     * appropriate default handler for your system. The returned HandlerStack has
     * support for cookies, redirects, HTTP error exceptions, and preparing a body
     * before sending.
     *
     * The returned handler stack can be passed to a client in the "handler"
     * option.
     *
     * @param callable $handler HTTP handler function to use with the stack. If no
     *                          handler is provided, the best handler for your
     *                          system will be utilized.
     *
     * @return HandlerStack
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4d8bb1215d0588c856cf1f82cf3e10d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param callable $handler Underlying HTTP handler.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a72c8d976d07a8fc1356fb8f7a863675' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Invokes the handler stack as a composed handler
     *
     * @param RequestInterface $request
     * @param array            $options
     *
     * @return ResponseInterface|PromiseInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => '__invoke',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97f2d73bee21f648c1cef60dbfe46ff7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dumps a string representation of the stack.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => '__toString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8e14384cab99cbe8990e20c3b8dd84b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the HTTP handler that actually returns a promise.
     *
     * @param callable $handler Accepts a request and array of options and
     *                          returns a Promise.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'setHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87b51f484825bb922421fe1f34e927ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the builder has a handler.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'hasHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79dbda0beb42d8fc143b004064e5d317' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Unshift a middleware to the bottom of the stack.
     *
     * @param callable $middleware Middleware function
     * @param string   $name       Name to register for this middleware.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'unshift',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a7709218a393fa016c5c8306ee84cbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Push a middleware to the top of the stack.
     *
     * @param callable $middleware Middleware function
     * @param string   $name       Name to register for this middleware.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'push',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1310f3567ec79d230fc82cab2e8be3f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a middleware before another middleware by name.
     *
     * @param string   $findName   Middleware to find
     * @param callable $middleware Middleware function
     * @param string   $withName   Name to register for this middleware.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'before',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c260e3bae95b5b51b59fac793ab34663' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a middleware after another middleware by name.
     *
     * @param string   $findName   Middleware to find
     * @param callable $middleware Middleware function
     * @param string   $withName   Name to register for this middleware.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'after',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a130f7a3f5b5544d3eed066cc184aa6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Remove a middleware by instance or name from the stack.
     *
     * @param callable|string $remove Middleware to remove by instance or name.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'remove',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95cffd50adc6fd034e2eecb8dbf8b667' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Compose the middleware and handler into a single callable function.
     *
     * @return callable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'resolve',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cccdb8ee0e339adc7e556f64631c775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $name
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'findByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25e2cfa5b7e4a759757cf4695fb5dcad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Splices a function into the middleware list at a specific position.
     *
     * @param string   $findName
     * @param string   $withName
     * @param callable $middleware
     * @param bool     $before
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'splice',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c638994f52b2aa6d2f4208c6371c241a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Provides a debug string for a given callable.
     *
     * @param array|callable $fn Function to write as a string.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'GuzzleHttp\\HandlerStack',
         'functionName' => 'debugCallable',
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