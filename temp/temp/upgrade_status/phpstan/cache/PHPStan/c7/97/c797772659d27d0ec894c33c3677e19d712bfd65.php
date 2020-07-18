<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/focal_point/src/FocalPointManagerInterface.php-1586383018',
   'data' => 
  array (
    '5220e249eb131671d9a4915f7d923b87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for focal point manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point',
         'uses' => 
        array (
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
        ),
         'className' => 'Drupal\\focal_point\\FocalPointManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f2c792153e660482a893d3058f96927' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates focal point string representation.
   *
   * @param string $focal_point
   *   Focal point as submitted in the form. For example: 23,64 is valid while
   *   123,942 and foo,bar are not.
   *
   * @return bool
   *   TRUE if valid and FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point',
         'uses' => 
        array (
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
        ),
         'className' => 'Drupal\\focal_point\\FocalPointManagerInterface',
         'functionName' => 'validateFocalPoint',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '037d212487f24504a11b023e7d5c80b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts relative focal point coordinates to absolute coordinates.
   *
   * Absolute coordinates are always specified in the context of the original
   * image. Relative coordinates are percentages from the top left of the image
   * so that using 50 for both x and y would mean to put the focal point in the
   * center of the image.
   *
   * @param float $x
   *   Relative X coordinate of the focal point. Maximum is 100.
   * @param float $y
   *   Relative Y coordinate of the focal point. Maximum is 100.
   * @param int $width
   *   Width of the original image.
   * @param int $height
   *   Height of the original image.
   *
   * @return array
   *   The absolute coordinates of the focal point on the original image. \'x\'
   *   and \'y\' are used for array keys and corresponding coordinates as values.
   *
   * @see absoluteToRelative
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point',
         'uses' => 
        array (
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
        ),
         'className' => 'Drupal\\focal_point\\FocalPointManagerInterface',
         'functionName' => 'relativeToAbsolute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf1f395e3aae269411e6dec1be50112b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts absolute focal point coordinates to relative coordinates.
   *
   * @param int $x
   *   Absolute X coordinate of the focal point on the original image.
   * @param int $y
   *   Absolute Y coordinate of the focal point on the original image.
   * @param int $width
   *   Width of the original image.
   * @param int $height
   *   Height of the original image.
   *
   * @return array
   *   The relative coordinates of the focal point where each coordinate is a
   *   percentage. \'x\' and \'y\' are used for array keys and corresponding
   *   coordinates as values.
   *
   * @see relativeToAbsolute
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point',
         'uses' => 
        array (
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
        ),
         'className' => 'Drupal\\focal_point\\FocalPointManagerInterface',
         'functionName' => 'absoluteToRelative',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03408ef0cfd6a31408c57741cabc7b16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a crop entity for the given file.
   *
   * If an existing crop entity is not found then a new one is created.
   *
   * @param \\Drupal\\file\\FileInterface $file
   *   File this focal point applies to.
   * @param string $crop_type
   *   Crop type to be used.
   *
   * @return \\Drupal\\crop\\CropInterface
   *   Created crop entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point',
         'uses' => 
        array (
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
        ),
         'className' => 'Drupal\\focal_point\\FocalPointManagerInterface',
         'functionName' => 'getCropEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c574e745bcd372c419fb2d4392808f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates (or updates) a crop entity using relative focal point coordinates.
   *
   * Relative coordinates are percentages from the top left of the image
   * so that using 50 for both x and y would mean to put the focal point in the
   * center of the image.
   *
   * @param float $x
   *   Relative X coordinate of the focal point. Maximum is 100.
   * @param float $y
   *   Relative Y coordinate of the focal point. Maximum is 100.
   * @param int $width
   *   Width of the original image.
   * @param int $height
   *   Height of the original image.
   * @param \\Drupal\\crop\\CropInterface $crop
   *   Crop entity for the given file.
   *
   * @return \\Drupal\\crop\\CropInterface
   *   Saved crop entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point',
         'uses' => 
        array (
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'cropinterface' => 'Drupal\\crop\\CropInterface',
        ),
         'className' => 'Drupal\\focal_point\\FocalPointManagerInterface',
         'functionName' => 'saveCropEntity',
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