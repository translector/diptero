<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/IFrameUrlHelper.php-1594234425',
   'data' => 
  array (
    '5c95b82456502e46fad2147bf2b45d97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Providers helper functions for displaying oEmbed resources in an iFrame.
 *
 * @internal
 *   This is an internal part of the oEmbed system and should only be used by
 *   oEmbed-related code in Drupal core.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'requestcontext' => 'Drupal\\Core\\Routing\\RequestContext',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\media\\IFrameUrlHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79f2ea60bde810c071d0a16f905b61b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request context service.
   *
   * @var \\Drupal\\Core\\Routing\\RequestContext
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'requestcontext' => 'Drupal\\Core\\Routing\\RequestContext',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\media\\IFrameUrlHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7aec77605c57277a06dc2a69ec59abe7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The private key service.
   *
   * @var \\Drupal\\Core\\PrivateKey
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'requestcontext' => 'Drupal\\Core\\Routing\\RequestContext',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\media\\IFrameUrlHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df7b760f3d62a9bd84c0e40d30ff492e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * IFrameUrlHelper constructor.
   *
   * @param \\Drupal\\Core\\Routing\\RequestContext $request_context
   *   The request context service.
   * @param \\Drupal\\Core\\PrivateKey $private_key
   *   The private key service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'requestcontext' => 'Drupal\\Core\\Routing\\RequestContext',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\media\\IFrameUrlHelper',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ea3b4dcaab8e676963a3d7754dab7c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Hashes an oEmbed resource URL.
   *
   * @param string $url
   *   The resource URL.
   * @param int $max_width
   *   (optional) The maximum width of the resource.
   * @param int $max_height
   *   (optional) The maximum height of the resource.
   *
   * @return string
   *   The hashed URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'requestcontext' => 'Drupal\\Core\\Routing\\RequestContext',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\media\\IFrameUrlHelper',
         'functionName' => 'getHash',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9714d64aac17a1c5ea5d30adc26fcb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if an oEmbed URL can be securely displayed in an frame.
   *
   * @param string $url
   *   The URL to check.
   *
   * @return bool
   *   TRUE if the URL is considered secure, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'privatekey' => 'Drupal\\Core\\PrivateKey',
          'requestcontext' => 'Drupal\\Core\\Routing\\RequestContext',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\media\\IFrameUrlHelper',
         'functionName' => 'isSecure',
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