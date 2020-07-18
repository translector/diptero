<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/guzzlehttp/promises/src/PromiseInterface.php-1482228431',
   'data' => 
  array (
    '3aab088ff94dfa4ce916bba129944ee4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A promise represents the eventual result of an asynchronous operation.
 *
 * The primary way of interacting with a promise is through its then method,
 * which registers callbacks to receive either a promise’s eventual value or
 * the reason why the promise cannot be fulfilled.
 *
 * @link https://promisesaplus.com/
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Promise',
         'uses' => 
        array (
        ),
         'className' => 'GuzzleHttp\\Promise\\PromiseInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c024348376f2203f7e88d67d5f13f30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Appends fulfillment and rejection handlers to the promise, and returns
     * a new promise resolving to the return value of the called handler.
     *
     * @param callable $onFulfilled Invoked when the promise fulfills.
     * @param callable $onRejected  Invoked when the promise is rejected.
     *
     * @return PromiseInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Promise',
         'uses' => 
        array (
        ),
         'className' => 'GuzzleHttp\\Promise\\PromiseInterface',
         'functionName' => 'then',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ec9f1742c4b3ecd1956ec1d708e989c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Appends a rejection handler callback to the promise, and returns a new
     * promise resolving to the return value of the callback if it is called,
     * or to its original fulfillment value if the promise is instead
     * fulfilled.
     *
     * @param callable $onRejected Invoked when the promise is rejected.
     *
     * @return PromiseInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Promise',
         'uses' => 
        array (
        ),
         'className' => 'GuzzleHttp\\Promise\\PromiseInterface',
         'functionName' => 'otherwise',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cd529b0dd28ab91c37e209315e39b77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the state of the promise ("pending", "rejected", or "fulfilled").
     *
     * The three states can be checked against the constants defined on
     * PromiseInterface: PENDING, FULFILLED, and REJECTED.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Promise',
         'uses' => 
        array (
        ),
         'className' => 'GuzzleHttp\\Promise\\PromiseInterface',
         'functionName' => 'getState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38259e6b667fd3ac2b25db4c7c072f3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resolve the promise with the given value.
     *
     * @param mixed $value
     * @throws \\RuntimeException if the promise is already resolved.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Promise',
         'uses' => 
        array (
        ),
         'className' => 'GuzzleHttp\\Promise\\PromiseInterface',
         'functionName' => 'resolve',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33576cfdd12e223fc5346b1e9fa0c992' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reject the promise with the given reason.
     *
     * @param mixed $reason
     * @throws \\RuntimeException if the promise is already resolved.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Promise',
         'uses' => 
        array (
        ),
         'className' => 'GuzzleHttp\\Promise\\PromiseInterface',
         'functionName' => 'reject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7faae246d8ad05db6225e2c9ec54b3a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Cancels the promise if possible.
     *
     * @link https://github.com/promises-aplus/cancellation-spec/issues/7
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Promise',
         'uses' => 
        array (
        ),
         'className' => 'GuzzleHttp\\Promise\\PromiseInterface',
         'functionName' => 'cancel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a757da88f9ef6fe0a8c9a3f5bb8f94aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Waits until the promise completes if possible.
     *
     * Pass $unwrap as true to unwrap the result of the promise, either
     * returning the resolved value or throwing the rejected exception.
     *
     * If the promise cannot be waited on, then the promise will be rejected.
     *
     * @param bool $unwrap
     *
     * @return mixed
     * @throws \\LogicException if the promise has no wait function or if the
     *                         promise does not settle after waiting.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Promise',
         'uses' => 
        array (
        ),
         'className' => 'GuzzleHttp\\Promise\\PromiseInterface',
         'functionName' => 'wait',
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