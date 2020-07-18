<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/guzzlehttp/psr7/src/Response.php-1562023294,/var/www/html/vendor/guzzlehttp/psr7/src/MessageTrait.php-1562023294',
   'data' => 
  array (
    'cd53bfd983c81e425c0dbc3a6a291f8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * PSR-7 response implementation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f94fb7f927bab11c3a33765e5093b5e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait implementing functionality common to requests and responses.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4b56dfb479c312ea2cd119c9c352241' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var array Map of all registered headers, as original name => array of values */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba823dceb22bc69d4298790424fe576f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var array Map of lowercase header name => original name at registration */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48df8a36ba7dff106779e2d4ca0dff39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var string */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c816c4d110f61670e3eceb0cf67b1c4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var StreamInterface */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4736e02ca7f691a33fa19f98a19694ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Trims whitespace from the header values.
     *
     * Spaces and tabs ought to be excluded by parsers when extracting the field value from a header field.
     *
     * header-field = field-name ":" OWS field-value OWS
     * OWS          = *( SP / HTAB )
     *
     * @param string[] $values Header values
     *
     * @return string[] Trimmed header values
     *
     * @see https://tools.ietf.org/html/rfc7230#section-3.2.4
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => 'trimHeaderValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1460a2bc762b8d5bf79778b783f23993' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var array Map of standard HTTP status code/reason phrases */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '827474dca1b2b9d060b4d43073deb347' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var string */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e91b40defa90a7c7f84d7af73653cc07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var int */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d9707a8ad9312fae8aa020487936bac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int                                  $status  Status code
     * @param array                                $headers Response headers
     * @param string|null|resource|StreamInterface $body    Response body
     * @param string                               $version Protocol version
     * @param string|null                          $reason  Reason phrase (when empty a default will be used based on the status code)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'GuzzleHttp\\Psr7',
         'uses' => 
        array (
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'streaminterface' => 'Psr\\Http\\Message\\StreamInterface',
        ),
         'className' => 'GuzzleHttp\\Psr7\\Response',
         'functionName' => '__construct',
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