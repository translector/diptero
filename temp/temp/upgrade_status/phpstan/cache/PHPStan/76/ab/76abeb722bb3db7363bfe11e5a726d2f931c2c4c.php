<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/BlazyFormatterInterface.php-1588969110',
   'data' => 
  array (
    'e24dd9095af4db826aae3f2cdaeb50b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines common field formatter-related methods: Blazy, Slick.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyFormatterInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fb6f41484f5f6d47e0891fb7b21c322' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modifies the field formatter settings inherited by child elements.
   *
   * @param array $build
   *   The array containing: settings, or potential optionset for extensions.
   * @param object $items
   *   The Drupal\\Core\\Field\\FieldItemListInterface items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyFormatterInterface',
         'functionName' => 'buildSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4b1956f823f9a20ef044252b4cbcd4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modifies the field formatter settings inherited by child elements.
   *
   * @param array $build
   *   The array containing: settings, or potential optionset for extensions.
   * @param object $items
   *   The Drupal\\Core\\Field\\FieldItemListInterface items.
   * @param array $entities
   *   The optional entities array, not available for non-entities: text, image.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyFormatterInterface',
         'functionName' => 'preBuildElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '025c07b1eda338f07c918765b7d2e0a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modifies the field formatter settings not inherited by child elements.
   *
   * @param array $build
   *   The array containing: items, settings, or a potential optionset.
   * @param object $items
   *   The Drupal\\Core\\Field\\FieldItemListInterface items.
   * @param array $entities
   *   The optional entities array, not available for non-entities: text, image.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyFormatterInterface',
         'functionName' => 'postBuildElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '985fab2a6dadbd890af84eb9dabd79ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extract the first image item to build colorbox/zoom-like gallery.
   *
   * @param array $settings
   *   The $settings array being modified.
   * @param object $item
   *   The Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem item.
   * @param object $entity
   *   The optional media entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyFormatterInterface',
         'functionName' => 'extractFirstItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e2f1e143e39818285616991ef0f4189' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if an image style contains crop effect.
   *
   * @param string $style
   *   The image style to check for.
   *
   * @return object|bool
   *   Returns the image style instance if it contains crop effect, else FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\BlazyFormatterInterface',
         'functionName' => 'isCrop',
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