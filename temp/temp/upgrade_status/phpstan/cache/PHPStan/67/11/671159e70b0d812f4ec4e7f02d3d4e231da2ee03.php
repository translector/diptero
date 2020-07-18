<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/image/src/ImageStyleStorageInterface.php-1594234425',
   'data' => 
  array (
    'e768066594be39dcee8dd5d4a269e72c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for storage controller for "image style" configuration entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\image\\ImageStyleStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a98dc5ba2d4743eaabc0ca891c2aefef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores a replacement ID for an image style being deleted.
   *
   * The method stores a replacement style to be used by the configuration
   * dependency system when a image style is deleted. The replacement style is
   * replacing the deleted style in other configuration entities that are
   * depending on the image style being deleted.
   *
   * @param string $name
   *   The ID of the image style to be deleted.
   * @param string $replacement
   *   The ID of the image style used as replacement.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\image\\ImageStyleStorageInterface',
         'functionName' => 'setReplacementId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53b36777476a21f5e8a0b88abfe657cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the replacement ID of a deleted image style.
   *
   * The method is retrieving the value stored by ::setReplacementId().
   *
   * @param string $name
   *   The ID of the image style to be replaced.
   *
   * @return string|null
   *   The ID of the image style used as replacement, if there\'s any, or NULL.
   *
   * @see \\Drupal\\image\\ImageStyleStorageInterface::setReplacementId()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\image\\ImageStyleStorageInterface',
         'functionName' => 'getReplacementId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4bbf5b792b7e35c5dc598a526c8b1e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears a replacement ID from the storage.
   *
   * The method clears the value previously stored with ::setReplacementId().
   *
   * @param string $name
   *   The ID of the image style to be replaced.
   *
   * @see \\Drupal\\image\\ImageStyleStorageInterface::setReplacementId()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\image\\ImageStyleStorageInterface',
         'functionName' => 'clearReplacementId',
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