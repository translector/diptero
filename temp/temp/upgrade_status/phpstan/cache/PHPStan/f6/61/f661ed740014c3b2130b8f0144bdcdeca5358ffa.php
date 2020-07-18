<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/slick/src/SlickSkinPluginInterface.php-1588418758',
   'data' => 
  array (
    '78936a8fb8ec1a605698e84fbd2f83ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining Slick skins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\SlickSkinPluginInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '240139dc6c88fed4e4bbd695418ee708' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the plugin label.
   *
   * @return string
   *   The plugin label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\SlickSkinPluginInterface',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '556ff4afbf9dab03c458f711f2e9e272' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the Slick skins.
   *
   * This can be used to register skins for the Slick. Skins will be
   * available when configuring the Optionset, Field formatter, or Views style,
   * or custom coded slicks.
   *
   * Slick skins get a unique CSS class to use for styling, e.g.:
   * If your skin name is "my_module_slick_carousel_rounded", the CSS class is:
   * slick--skin--my-module-slick-carousel-rounded
   *
   * A skin can specify CSS and JS files to include when Slick is displayed,
   * except for a thumbnail skin which accepts CSS only.
   *
   * Each skin supports a few keys:
   * - name: The human readable name of the skin.
   * - description: The description about the skin, for help and manage pages.
   * - css: An array of CSS files to attach.
   * - js: An array of JS files to attach, e.g.: image zoomer, reflection, etc.
   * - group: A string grouping the current skin: main, thumbnail, arrows, dots.
   * - dependencies: SImilar to how core library dependencies constructed.
   * - provider: A module name registering the skins.
   * - options: Extra JavaScript (Slicebox, 3d carousel, etc) options merged
   *     into existing [data-slick] attribute to be consumed by custom JS.
   *
   * @return array
   *   The array of the main and thumbnail skins.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\SlickSkinPluginInterface',
         'functionName' => 'skins',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1501aa5fde0a3f136c2983839c3d5ff7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the plugin arrow skins.
   *
   * @return array
   *   The plugin arrow skins.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\SlickSkinPluginInterface',
         'functionName' => 'arrows',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a437d81fd2046b268877e7d3534f918' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the plugin dot skins.
   *
   * @return array
   *   The plugin dot skins.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\SlickSkinPluginInterface',
         'functionName' => 'dots',
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