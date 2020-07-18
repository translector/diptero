<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/BlazyUtil.php-1588969110',
   'data' => 
  array (
    '120921d573c1127cf052a4ce33eb2449' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides Blazy utilities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\blazy\\BlazyUtil',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c93893db57f11f41008b21e18a6ac11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates an SVG Placeholder.
   *
   * @param string $width
   *   The image width.
   * @param string $height
   *   The image height.
   *
   * @return string
   *   Returns a string containing an SVG.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\blazy\\BlazyUtil',
         'functionName' => 'generatePlaceholder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9c9452d2551f7a798e6491608ab4bf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the sanitized attributes for user-defined (UGC Blazy Filter).
   *
   * When IMG and IFRAME are allowed for untrusted users, trojan horses are
   * welcome. Hence sanitize attributes relevant for BlazyFilter. The rest
   * should be taken care of by HTML filters after Blazy.
   *
   * @param array $attributes
   *   The given attributes to sanitize.
   *
   * @return array
   *   The sanitized $attributes suitable for UGC, such as Blazy filter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\blazy\\BlazyUtil',
         'functionName' => 'sanitize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d607f7092c001a12096f09288129c71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URI from the given image URL, relevant for unmanaged files.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\blazy\\BlazyUtil',
         'functionName' => 'buildUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5368acbeec9772d9fd8179e7e818d937' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the URI has a valid scheme for file API operations.
   *
   * @param string $uri
   *   The URI to be tested.
   *
   * @return bool
   *   TRUE if the URI is valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\blazy\\BlazyUtil',
         'functionName' => 'isValidUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7671b659fb20eb6239563cd1f786c7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides image url based on the given settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\blazy\\BlazyUtil',
         'functionName' => 'imageUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '976887bd83a72861ec571dd78c72e314' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides image dimensions based on the given image item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\blazy\\BlazyUtil',
         'functionName' => 'imageDimensions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba5b44c3e25679438c31250a5755116d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A wrapper for ImageStyle::transformDimensions().
   *
   * @param object $style
   *   The given image style.
   * @param array $data
   *   The data settings: _width, _height, _uri, width, height, and uri.
   * @param bool $initial
   *   Whether particularly transforms once for all, or individually.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\blazy\\BlazyUtil',
         'functionName' => 'transformDimensions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8ff6fa4cc76d1e1a4861b96f3c5e59f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A wrapper for file_url_transform_relative() to pass tests anywhere else.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\blazy\\BlazyUtil',
         'functionName' => 'transformRelative',
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