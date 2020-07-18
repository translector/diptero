<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/Plugin/Filter/BlazyFilterInterface.php-1588969110',
   'data' => 
  array (
    'e244861fc98605cb83dddacd6d7acb95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines re-usable services and functions for blazy plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilterInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6dc9259635536e4cd35a1b6d18b1dd51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the main settings.
   *
   * @param string $text
   *   The provided text.
   *
   * @return array
   *   The main settings for current filter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilterInterface',
         'functionName' => 'buildSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a743d55dbf2433ca710d0d034995f33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cleanups invalid nodes or those of which their contents are moved.
   *
   * @param \\DOMDocument $dom
   *   The HTML DOM object being modified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilterInterface',
         'functionName' => 'cleanupNodes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc9abc2285ab42c4cda2e7d2ff8bbe3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the grid.
   *
   * @param \\DOMDocument $dom
   *   The HTML DOM object being modified.
   * @param array $settings
   *   The settings array.
   * @param array $elements
   *   The renderable array of blazy item.
   * @param array $grid_nodes
   *   The grid nodes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilterInterface',
         'functionName' => 'buildGrid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6879113372bb4d613b8ef3362f28460' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the faked image item for the image, uploaded or hard-coded.
   *
   * @param array $build
   *   The content array being modified.
   * @param object $node
   *   The HTML DOM object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilterInterface',
         'functionName' => 'buildImageItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9208257757c5d6658c3ae1910905c6d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the caption if available.
   *
   * @param array $build
   *   The content array being modified.
   * @param object $node
   *   The HTML DOM object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilterInterface',
         'functionName' => 'buildImageCaption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20d54f1130c91d1634aa0741970d36e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the faked image item from SRC.
   *
   * @param array $settings
   *   The content array being modified.
   * @param object $node
   *   The HTML DOM object.
   * @param string $src
   *   The corrected SRC value.
   *
   * @return object
   *   The faked or file entity image item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilterInterface',
         'functionName' => 'getImageItemFromImageSrc',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48ddab7c0bc4e65cc5d98abf4d4dd82f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the faked image item from SRC.
   *
   * @param array $settings
   *   The content array being modified.
   * @param object $node
   *   The HTML DOM object.
   * @param string $src
   *   The corrected SRC value.
   *
   * @return object
   *   The faked or file entity image item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilterInterface',
         'functionName' => 'getImageItemFromIframeSrc',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80520f6e91e50d382ff62758eba6a4f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the item settings for the current $node.
   *
   * @param array $settings
   *   The settings being modified.
   * @param object $node
   *   The HTML DOM object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilterInterface',
         'functionName' => 'buildItemSettings',
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