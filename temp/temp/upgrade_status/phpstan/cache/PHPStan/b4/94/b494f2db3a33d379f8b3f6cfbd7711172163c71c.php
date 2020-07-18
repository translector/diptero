<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Routing/TrustedRedirectResponse.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Routing/LocalAwareRedirectResponseTrait.php-1594234425',
   'data' => 
  array (
    '33ac301b0589bc64d8a086df78e6b5da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a redirect response which contains trusted URLs.
 *
 * Use this class in case you know that you want to redirect to an external URL.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c737d5d33fc204808ccbcffc8995533' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait which ensures that a URL is safe to redirect to.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40ed5bb716da724909c645a77ec8589d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request context.
   *
   * @var \\Drupal\\Core\\Routing\\RequestContext
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50274cf89bc65b4876ae7d6d5aac5e20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether a path is local.
   *
   * @param string $url
   *   The internal path or external URL being linked to, such as "node/34" or
   *   "http://example.com/foo".
   *
   * @return bool
   *   TRUE or FALSE, where TRUE indicates a local path.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => 'isLocal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f34bce35e0dc3c832786e1df5730150c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the request context.
   *
   * @return \\Drupal\\Core\\Routing\\RequestContext
   *   The request context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => 'getRequestContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a31ea4995fd6cceeaee58881c7354e9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the request context.
   *
   * @param \\Drupal\\Core\\Routing\\RequestContext $request_context
   *   The request context.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => 'setRequestContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48470f2b52a6648cdacf2438ecf63cf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A list of trusted URLs, which are safe to redirect to.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f170dc8b4368e74d1bc3324b748f1d45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f75123077c8a01b299671925fef131ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the target URL to a trusted URL.
   *
   * @param string $url
   *   A trusted URL.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => 'setTrustedTargetUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5258d289365649f67a53e05c2a304048' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
         'functionName' => 'isSafe',
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