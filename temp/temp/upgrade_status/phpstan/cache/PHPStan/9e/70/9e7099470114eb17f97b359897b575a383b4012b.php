<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/slick/src/SlickManagerInterface.php-1588418758',
   'data' => 
  array (
    'b4ebb80c05f6fbafa6d144ea936e4124' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines re-usable services and functions for slick plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\slick\\SlickManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '239e7952a60d7c9e389c4eeec1c30d79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a cacheable renderable array of a single slick instance.
   *
   * @param array $build
   *   An associative array containing:
   *   - items: An array of slick contents: text, image or media.
   *   - options: An array of key:value pairs of custom JS overrides.
   *   - optionset: The cached optionset object to avoid multiple invocations.
   *   - settings: An array of key:value pairs of HTML/layout related settings.
   *
   * @return array
   *   The cacheable renderable array of a slick instance, or empty array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\slick\\SlickManagerInterface',
         'functionName' => 'slick',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '704fd6794b3123b89947db5ff907cbb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a renderable array of both main and thumbnail slick instances.
   *
   * @param array $build
   *   An associative array containing:
   *   - items: An array of slick contents: text, image or media.
   *   - options: An array of key:value pairs of custom JS overrides.
   *   - optionset: The cached optionset object to avoid multiple invocations.
   *   - settings: An array of key:value pairs of HTML/layout related settings.
   *   - thumb: An associative array of slick thumbnail following the same
   *     structure as the main display: $build[\'thumb\'][\'items\'], etc.
   *
   * @return array
   *   The renderable array of both main and thumbnail slick instances.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'blazymanagerinterface' => 'Drupal\\blazy\\BlazyManagerInterface',
        ),
         'className' => 'Drupal\\slick\\SlickManagerInterface',
         'functionName' => 'build',
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