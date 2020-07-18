<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/BlazyManagerInterface.php-1588969110',
   'data' => 
  array (
    'e6f4d36dd48241728776de7141c79850' => 
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
         'className' => 'Drupal\\blazy\\BlazyManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0dc0d9f56b25056ccf1383df938a526' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns array of needed assets suitable for #attached property.
   *
   * @param array $attach
   *   The settings which determine what library to attach.
   *
   * @return array
   *   The supported libraries.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyManagerInterface',
         'functionName' => 'attach',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd19d50310d2a34c39bc7b5fe30fc68c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns drupalSettings for IO.
   *
   * @param array $attach
   *   The settings which determine what library to attach.
   *
   * @return array
   *   The supported IO drupalSettings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyManagerInterface',
         'functionName' => 'getIoSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ef99f7868d2b99dd3dea8caef5d5bdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the supported lightboxes.
   *
   * @return array
   *   The supported lightboxes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyManagerInterface',
         'functionName' => 'getLightboxes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '301ac2fb97599d4b46425cf4fe137cdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the supported image effects.
   *
   * @return array
   *   The supported image effects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyManagerInterface',
         'functionName' => 'getImageEffects',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b11cd97f442868200915a09996e1690' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks for Blazy formatter such as from within a Views style plugin.
   *
   * Ensures the settings traverse up to the container where Blazy is clueless.
   * The supported plugins can add [data-blazy] attribute into its container
   * containing $settings[\'blazy_data\'] converted into [data-blazy] JSON.
   * This allows Blazy Grid, or other Views styles, lacking of UI, to have
   * additional settings extracted from the first Blazy formatter found.
   * Such as media switch/ lightbox. This way the container can add relevant
   * attributes to its container, etc. Also applies to entity references where
   * Blazy is not the main formatter, instead embedded as part of the parent\'s.
   *
   * This fairly complex logic is intended to reduce similarly complex logic at
   * individual item. But rather than at individual item, it is executed once
   * at the container level. If you have 100 images, this method is executed
   * once, not 100x, as long as you have all image styles cropped, not scaled.
   *
   * This still needs improvements and a little more simplified version.
   *
   * @param array $settings
   *   The settings being modified.
   * @param array $item
   *   The first item containing settings or item keys.
   *
   * @see \\Drupal\\blazy\\BlazyManager::prepareBuild()
   * @see \\Drupal\\blazy\\Dejavu\\BlazyEntityBase::buildElements()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyManagerInterface',
         'functionName' => 'isBlazy',
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