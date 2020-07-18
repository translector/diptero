<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/BlazyInterface.php-1588969110',
   'data' => 
  array (
    '202547e9687e43a9413d3018aec855ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines re-usable services and functions for blazy plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3aa10bbed4d58579970ba6765ce6e8c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines constant placeholder Data URI image.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad93eff58a24f26057a7b3e4ed57b680' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares variables for blazy.html.twig templates.
   *
   * Most heavy liftings are performed at BlazyManager::preRender().
   *
   * @param array $variables
   *   An associative array containing:
   *   - captions: An optional renderable array of inline or lightbox captions.
   *   - item: The image item containing alt, title, etc.
   *   - image: An optional renderable array of (Responsive) image element.
   *       Image is optional for CSS background, or iframe only displays.
   *   - settings: HTML related settings containing at least a required uri.
   *   - url: An optional URL the image can be linked to, can be any of
   *       audio/video, or entity URLs, when using Colorbox/Photobox, or Link to
   *       content options.
   *   - attributes: The container attributes (media, media--ratio etc.).
   *   - item_attributes: The image attributes (width, height, src, etc.).
   *   - url_attributes: An array of URL attributes, lightbox or content links.
   *   - noscript: The fallback image for non-js users.
   *   - postscript: Any extra content to put into blazy goes here. Use keyed or
   *       indexed array to not conflict with or nullify other providers, e.g.:
   *       postscript.cta, or postscript.widget. Avoid postscript = cta.
   *   - content: Various Media entities like Facebook, Instagram, local Video,
   *       etc. Basically content is the replacement for (Responsive) image
   *       and oEmbed video. This makes it possible to have a mix of Media
   *       entities, image and videos on a Blazy Grid, Slick, GridStack, etc.
   *       Regular Blazy features are still disabled by default at
   *       \\Drupal\\blazy\\BlazyDefault::richSettings() to avoid complication.
   *       However you can override them accordingly as needed, such as lightbox
   *       for local Video with/o a pre-configured poster image. The #settings
   *       are provided under content variables for more work. Originally
   *       content is a theme_field() output, trimmed down to bare minimum.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyInterface',
         'functionName' => 'preprocessBlazy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '993e490c0d70afcdd9a5e7a15fb0d935' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modifies variables for image and iframe.
   *
   * @param array $variables
   *   The variables being modified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyInterface',
         'functionName' => 'buildMedia',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a80cfa36ea4e15daa7f884ae9374aef6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modifies variables for responsive image.
   *
   * Responsive images with height and width save a lot of calls to
   * image.factory service for every image and breakpoint in
   * _responsive_image_build_source_attributes(). Very necessary for
   * external file system like Amazon S3.
   *
   * @param array $variables
   *   The variables being modified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyInterface',
         'functionName' => 'buildResponsiveImage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '843c69dc5b41f0dbcdadc622627a2de6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns common iframe attributes, including those not handled by blazy.
   *
   * @param array $settings
   *   The given settings.
   *
   * @return array
   *   The iframe attributes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyInterface',
         'functionName' => 'iframeAttributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6267271207d17cff586f0cb28e6f6d7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modifies variables for iframes, those only handled by theme_blazy().
   *
   * Prepares a media player, and allows a tiny video preview without iframe.
   * image : If iframe switch disabled, fallback to iframe, remove image.
   * player: If no colorbox/photobox, it is an image to iframe switcher.
   * data- : Gets consistent with colorbox to share JS manipulation.
   *
   * @param array $variables
   *   The variables being modified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyInterface',
         'functionName' => 'buildIframe',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5b5e448222383e4b2a3509e0224f12a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines attributes, builtin, or supported lazyload such as Slick.
   *
   * These attributes can be applied to either IMG or DIV as CSS background.
   * The [data-(src|lazy)] attributes are applivable for (Responsive) image.
   * While [data-src] is reserved by Blazy, [data-lazy] by Slick.
   *
   * @param array $attributes
   *   The attributes being modified.
   * @param array $settings
   *   The given settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyInterface',
         'functionName' => 'lazyAttributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5dda18f37293757a0c9a61ce1fe5bd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds URLs, cache tags, and dimensions for an individual image.
   *
   * Respects a few scenarios:
   * 1. Blazy Filter or unmanaged file with/ without valid URI.
   * 2. Hand-coded image_url with/ without valid URI.
   * 3. Respects first_uri without image_url such as colorbox/zoom-like.
   * 4. File API via field formatters or Views fields/ styles with valid URI.
   * If we have a valid URI, provides the correct image URL.
   * Otherwise leave it as is, likely hotlinking to external/ sister sites.
   * Hence URI validity is not crucial in regards to anything but #4.
   * The image will fail silently at any rate given non-expected URI.
   *
   * @param array $settings
   *   The given settings being modified.
   * @param object $item
   *   The image item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyInterface',
         'functionName' => 'urlAndDimensions',
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