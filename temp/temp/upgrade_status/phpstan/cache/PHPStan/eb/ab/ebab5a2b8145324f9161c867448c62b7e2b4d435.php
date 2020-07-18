<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/Dejavu/BlazyVideoTrait.php-1588969110',
   'data' => 
  array (
    '3e06cb2b50dd0d41565f678d1c8a5012' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Trait common for Media integration.
 *
 * @see Drupal\\blazy\\Plugin\\views\\field\\BlazyViewsFieldPluginBase
 * @see Drupal\\slick_browser\\SlickBrowser::widgetEntityBrowserFileFormAlter()
 * @see Drupal\\slick_browser\\Plugin\\EntityBrowser\\FieldWidgetDisplay\\...
 * @todo deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
 *   Drupal\\blazy\\BlazyOEmbed instead.
 * @see https://www.drupal.org/node/3103018
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a0fc2d738e7e5f73975c742d182641f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The blazy oembed service.
   *
   * @var \\Drupal\\blazy\\BlazyOEmbedInterface
   * @todo remove default null post Blazy 8.2.x full release.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58ebebc5cf2c55c4bffa80ff9c4c41ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Core Media oEmbed url resolver.
   *
   * @var \\Drupal\\Core\\Image\\ImageFactory
   * @todo remove default null post Blazy 8.2.x full release.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5eb052d7a22621d781e7bdad4e769227' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the blazy oEmbed service.
   *
   * @todo remove null check post Blazy 8.2.x full release.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
         'functionName' => 'blazyOembed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e3f20b523486635fc5bbafc13e4a5bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the image factory.
   *
   * @todo remove null check post Blazy 8.2.x full release.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
         'functionName' => 'imageFactory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c500d9c360843af7b83568c1ac4a431c' => 
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
   * @todo enable post RC before release release.
   * @todo deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
   *   BlazyOEmbed::getImageItem() instead.
   * @see https://www.drupal.org/node/3103018
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
         'functionName' => 'getImageItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '642fbc5d0cfc61b976caf290afe71c84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the Media item thumbnail, or re-associate the file entity to ME.
   *
   * @param array $data
   *   An array of data containing settings, and potential video thumbnail item.
   * @param object $media
   *   The core Media entity.
   *
   * @todo remove post Blazy 8.2.x when blazy-plugins use core Media.
   *
   * @deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
   *   BlazyOEmbed::getMediaItem() instead.
   * @see https://www.drupal.org/node/3103018
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
         'functionName' => 'getMediaItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9fa47a055e5c11454694d73ee57524b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds relevant Media settings based on the given media url.
   *
   * @param array $settings
   *   An array of settings to be passed into theme_blazy().
   * @param string $external_url
   *   A video URL.
   *
   * @todo remove post Blazy 8.2.x full release. This is still kept to
   * allow changing from video_embed_field into media field without breaking it,
   * and to allow transition from blazy-related modules to depend on media.
   * Currently this is only required by deprecated SlickVideoFormatter.
   *
   * @deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
   *   BlazyOEmbed::build() instead.
   * @see https://www.drupal.org/node/3103018
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
         'functionName' => 'buildVideo',
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