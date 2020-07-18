<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/crop/src/CropInterface.php-1585251611',
   'data' => 
  array (
    '6bcb60c5aaca68b96335902dd300741f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining the crop entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62d976a720c1cb256de12bf9fa5d2dec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets position of crop\'s center.
   *
   * @return array
   *   Array with two keys (x, y) and center coordinates as values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'position',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18ccc00cb2c8f58bca57ce86ea042eea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets position of crop\'s center.
   *
   * @param int $x
   *   X coordinate of the crop\'s center.
   * @param int $y
   *   Y coordinate of the crop\'s center.
   *
   * @return \\Drupal\\crop\\CropInterface
   *   Crop object this is being called on.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'setPosition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96a16f9f480ce09aa56afe28e8a685ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets crop\'s size.
   *
   * @return array
   *   Array with two keys (width, height) each side dimensions as values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'size',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31d297e2190ac3740b28c57c83f4f82d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets crop\'s size.
   *
   * @param int $width
   *   Crop\'s width.
   * @param int $height
   *   Crop\'s height.
   *
   * @return \\Drupal\\crop\\CropInterface
   *   Crop object this is being called on.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'setSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5abb6c3f865bb6ddcc8e7fc8cc7c733b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets crop anchor (top-left corner of crop area).
   *
   * @return array
   *   Array with two keys (x, y) and anchor coordinates as values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'anchor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64fc4d9d964e5a07e93dceca719abfc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets entity provider for the crop.
   *
   * @return \\Drupal\\crop\\EntityProviderInterface
   *   Entity provider.
   *
   * @throws \\Drupal\\crop\\EntityProviderNotFoundException
   *   Thrown if entity provider not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'provider',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77403c66ad050f4d3304d9364542266b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether crop exists for an image.
   *
   * @param string $uri
   *   URI of image to check for.
   * @param string $type
   *   (Optional) Type of crop. Function will check across all available types
   *   if omitted.
   *
   * @return bool
   *   Boolean TRUE if crop exists and FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'cropExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91918d15f8c2a4d9974cd80b79762189' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads crop based on image URI and crop type.
   *
   * @param string $uri
   *   URI of the image.
   * @param string $type
   *   Crop type.
   *
   * @return \\Drupal\\crop\\CropInterface|null
   *   Crop entity or NULL if crop doesn\'t exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'findCrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e10b11abe67fa08c023eb18307c51d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieve crop from given image style.
   *
   * @param string $uri
   *   URI of the image.
   * @param \\Drupal\\image\\ImageStyleInterface $image_style
   *   The image style.
   *
   * @return \\Drupal\\crop\\CropInterface|null
   *   Crop entity used by effect \'crop_crop\' or NULL if crop doesn\'t exist.
   *
   * @deprecated use getCropFromImageStyleId instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'getCropFromImageStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86738a6ca033fafccc6b724892d8e2f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieve crop from given image style.
   *
   * @param string $uri
   *   URI of the image.
   * @param string $image_style_id
   *   The image style id.
   *
   * @return \\Drupal\\crop\\CropInterface|null
   *   Crop entity used by effect \'crop_crop\' or NULL if crop doesn\'t exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\crop',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
        ),
         'className' => 'Drupal\\crop\\CropInterface',
         'functionName' => 'getCropFromImageStyleId',
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