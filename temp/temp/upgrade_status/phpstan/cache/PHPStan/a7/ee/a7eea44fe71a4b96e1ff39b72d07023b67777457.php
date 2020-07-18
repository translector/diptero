<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/OEmbed/ResourceFetcherInterface.php-1594234425',
   'data' => 
  array (
    '7675d43c9297c358ff388d6741b94bb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for an oEmbed resource fetcher service.
 *
 * The resource fetcher\'s only responsibility is to retrieve oEmbed resource
 * data from an endpoint URL (i.e., as returned by
 * \\Drupal\\media\\OEmbed\\UrlResolverInterface::getResourceUrl()) and return a
 * \\Drupal\\media\\OEmbed\\Resource value object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcherInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce3ae26c038feab0269468527fb405ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fetches an oEmbed resource.
   *
   * @param string $url
   *   Endpoint-specific URL of the oEmbed resource.
   *
   * @return \\Drupal\\media\\OEmbed\\Resource
   *   A resource object built from the oEmbed resource data.
   *
   * @see https://oembed.com/#section2
   *
   * @throws \\Drupal\\media\\OEmbed\\ResourceException
   *   If the oEmbed endpoint is not reachable or the response returns an
   *   unexpected Content-Type header.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\ResourceFetcherInterface',
         'functionName' => 'fetchResource',
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