<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/guzzlehttp/guzzle/src/functions.php-1592341266',
   'data' => 
  array (
    '89c21e3a98df3fe4fa087b0a6fba128d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Expands a URI template
 *
 * @param string $template  URI template
 * @param array  $variables Template variables
 *
 * @return string
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\uri_template',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ec125d40f658378b13b26cfdffa1f8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Debug function used to describe the provided value type and class.
 *
 * @param mixed $input
 *
 * @return string Returns a string containing the type of the variable and
 *                if a class is provided, the class name.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\describe_type',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66febfa37ad1fce7bd575df426c01452' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parses an array of header lines into an associative array of headers.
 *
 * @param iterable $lines Header lines array of strings in the following
 *                     format: "Name: Value"
 * @return array
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\headers_from_lines',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0493f5ac3e427ae011a63fbe0cf0f922' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a debug stream based on the provided variable.
 *
 * @param mixed $value Optional value
 *
 * @return resource
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\debug_resource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e98739d33bb35b39b7fcf7237ce11487' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Chooses and creates a default handler to use based on the environment.
 *
 * The returned handler is not wrapped by any default middlewares.
 *
 * @return callable Returns the best handler for the given system.
 * @throws \\RuntimeException if no viable Handler is available.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\choose_handler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e80db362cbad40e9b1cc5aa13ee11d88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get the default User-Agent string to use with Guzzle
 *
 * @return string
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\default_user_agent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a81bf64656fc1f7d65adedb32742be35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the default cacert bundle for the current system.
 *
 * First, the openssl.cafile and curl.cainfo php.ini settings are checked.
 * If those settings are not configured, then the common locations for
 * bundles found on Red Hat, CentOS, Fedora, Ubuntu, Debian, FreeBSD, OS X
 * and Windows are checked. If any of these file locations are found on
 * disk, they will be utilized.
 *
 * Note: the result of this function is cached for subsequent calls.
 *
 * @return string
 * @throws \\RuntimeException if no bundle can be found.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\default_ca_bundle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a74ff710ad802713aff933b39cb41211' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Creates an associative array of lowercase header names to the actual
 * header casing.
 *
 * @param array $headers
 *
 * @return array
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\normalize_header_keys',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48c9c67fcf6567710081d95287914233' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns true if the provided host matches any of the no proxy areas.
 *
 * This method will strip a port from the host if it is present. Each pattern
 * can be matched with an exact match (e.g., "foo.com" == "foo.com") or a
 * partial match: (e.g., "foo.com" == "baz.foo.com" and ".foo.com" ==
 * "baz.foo.com", but ".foo.com" != "foo.com").
 *
 * Areas are matched in the following cases:
 * 1. "*" (without quotes) always matches any hosts.
 * 2. An exact match.
 * 3. The area starts with "." and the area is the last part of the host. e.g.
 *    \'.mit.edu\' will match any host that ends with \'.mit.edu\'.
 *
 * @param string $host         Host to check against the patterns.
 * @param array  $noProxyArray An array of host patterns.
 *
 * @return bool
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\is_host_in_noproxy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4833490484d7be78a105403fee3e44a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper for json_decode that throws when an error occurs.
 *
 * @param string $json    JSON data to parse
 * @param bool $assoc     When true, returned objects will be converted
 *                        into associative arrays.
 * @param int    $depth   User specified recursion depth.
 * @param int    $options Bitmask of JSON decode options.
 *
 * @return mixed
 * @throws Exception\\InvalidArgumentException if the JSON cannot be decoded.
 * @link http://www.php.net/manual/en/function.json-decode.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\json_decode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bcdfed173a07a6ba9490657681bff99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper for JSON encoding that throws when an error occurs.
 *
 * @param mixed $value   The value being encoded
 * @param int    $options JSON encode option bitmask
 * @param int    $depth   Set the maximum depth. Must be greater than zero.
 *
 * @return string
 * @throws Exception\\InvalidArgumentException if the JSON cannot be encoded.
 * @link http://www.php.net/manual/en/function.json-encode.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp',
         'uses' => 
        array (
          'curlhandler' => 'GuzzleHttp\\Handler\\CurlHandler',
          'curlmultihandler' => 'GuzzleHttp\\Handler\\CurlMultiHandler',
          'proxy' => 'GuzzleHttp\\Handler\\Proxy',
          'streamhandler' => 'GuzzleHttp\\Handler\\StreamHandler',
        ),
         'className' => NULL,
         'functionName' => 'GuzzleHttp\\json_encode',
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