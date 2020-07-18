<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/BlazyOEmbedInterface.php-1588969110',
   'data' => 
  array (
    '611b6e68c6dc45bc22859262be392fed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides OEmbed integration.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyOEmbedInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d6f6eb1888c94c7245a25fc97d9cbdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the oEmbed Resource based on the given media input url.
   *
   * @param string $input_url
   *   The video url.
   *
   * @return Drupal\\media\\OEmbed\\Resource[]
   *   The oEmbed resource.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyOEmbedInterface',
         'functionName' => 'getResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77166038be9ef5c697ae8086f9bebb33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds media-related settings based on the given media input url.
   *
   * @param array $settings
   *   The settings array being modified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyOEmbedInterface',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca2995caa30d3ce8ef46be1adbb56149' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides the autoplay url suitable for lightboxes, or custom video trigger.
   *
   * @param string $url
   *   The embed URL, not input URL.
   *
   * @return array
   *   The settings array containing autoplay URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyOEmbedInterface',
         'functionName' => 'getAutoPlayUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14cae5093049963cc719f0aa860ada1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the Media item thumbnail.
   *
   * @param array $data
   *   The modified array containing settings, and to be video thumbnail item.
   * @param object $media
   *   The core Media entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyOEmbedInterface',
         'functionName' => 'getMediaItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ff35993e28c0dc8e3274aa90ba7768f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the faked image item out of file entity, or ER, if applicable.
   *
   * @param object $file
   *   The expected file entity, or ER, to get image item from.
   *
   * @return array
   *   The array of image item and settings if a file image, else empty.
   *
   * @todo this is likely to be removed for anything Media, still kept for
   * BlazyFilter and few legacy file entity integrations such as Views file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyOEmbedInterface',
         'functionName' => 'getImageItem',
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