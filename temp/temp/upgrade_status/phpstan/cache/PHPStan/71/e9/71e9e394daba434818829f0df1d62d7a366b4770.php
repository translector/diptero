<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/OEmbed/UrlResolverInterface.php-1594234425',
   'data' => 
  array (
    '8e7e5909e028ba44c8b66e6acbd242a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for the oEmbed URL resolver service.
 *
 * The URL resolver is responsible for converting oEmbed-compatible media asset
 * URLs into canonical resource URLs, at which an oEmbed representation of the
 * asset can be retrieved.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolverInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e507097adf75d15ba4deed9e0e204cd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tries to determine the oEmbed provider for a media asset URL.
   *
   * @param string $url
   *   The media asset URL.
   *
   * @return \\Drupal\\media\\OEmbed\\Provider
   *   The oEmbed provider for the asset.
   *
   * @throws \\Drupal\\media\\OEmbed\\ResourceException
   *   If the provider cannot be determined.
   * @throws \\Drupal\\media\\OEmbed\\ProviderException
   *   If tne oEmbed provider causes an error.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolverInterface',
         'functionName' => 'getProviderByUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0846148819cf8d9f7d9c66849080a455' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the resource URL for a media asset URL.
   *
   * @param string $url
   *   The media asset URL.
   * @param int $max_width
   *   (optional) Maximum width of the oEmbed resource, in pixels.
   * @param int $max_height
   *   (optional) Maximum height of the oEmbed resource, in pixels.
   *
   * @return string
   *   Returns the resource URL corresponding to the given media item URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\UrlResolverInterface',
         'functionName' => 'getResourceUrl',
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