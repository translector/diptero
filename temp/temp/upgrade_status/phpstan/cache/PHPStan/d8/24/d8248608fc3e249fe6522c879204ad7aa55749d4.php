<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/responsive_image/src/ResponsiveImageStyleInterface.php-1594234425',
   'data' => 
  array (
    '32f9e5e238d3da6929e5a3e62e6c9d76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a responsive_image mapping entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a78736f2970226f00070cfffca8d1017' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The machine name for the empty image breakpoint image style option.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8af17e8afd502ee3757b3f960639c542' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The machine name for the original image breakpoint image style option.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e130bbb2f12121b4b39f47fd228187ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if there is at least one mapping defined.
   *
   * @return bool
   *   Whether the entity has any image style mappings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'hasImageStyleMappings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1acb8dd5933f130aacd7f7ce124c18c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the mappings of breakpoint ID and multiplier to image style.
   *
   * @return array[]
   *   The image style mappings. Keyed by breakpoint ID then multiplier.
   *   The value is the image style mapping array with following keys:
   *     - image_mapping_type: Either \'image_style\' or \'sizes\'.
   *     - image_mapping:
   *       - If image_mapping_type is \'image_style\', the image style ID.
   *       - If image_mapping_type is \'sizes\', an array with following keys:
   *         - sizes: The value for the \'sizes\' attribute.
   *         - sizes_image_styles: The image styles to use for the \'srcset\'
   *           attribute.
   *     - breakpoint_id: The breakpoint ID for this mapping.
   *     - multiplier: The multiplier for this mapping.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'getKeyedImageStyleMappings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '384e74a25a1cca6d6b2a0766508f4477' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the image style mappings for the responsive image style.
   *
   * @return array[]
   *   An array of image style mappings. Each image style mapping array
   *   contains the following keys:
   *   - breakpoint_id
   *   - multiplier
   *   - image_mapping_type
   *   - image_mapping
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'getImageStyleMappings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7db47ff4b9313c4e6b12cdce287d244e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the breakpoint group for the responsive image style.
   *
   * @param string $breakpoint_group
   *   The responsive image style breakpoint group.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'setBreakpointGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e3ba28d4d6dd3977172598107f89943' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the breakpoint group for the responsive image style.
   *
   * @return string
   *   The breakpoint group.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'getBreakpointGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3af62d58445d30219a0237f1549c46d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the fallback image style for the responsive image style.
   *
   * @param string $fallback_image_style
   *   The fallback image style ID.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'setFallbackImageStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56b489508d177eb9aba73222569988f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the fallback image style ID for the responsive image style.
   *
   * @return string
   *   The fallback image style ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'getFallbackImageStyle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af95b18f72301ef88be0d8d94ed8b6f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the image style mapping for a breakpoint ID and multiplier.
   *
   * @param string $breakpoint_id
   *   The breakpoint ID.
   * @param string $multiplier
   *   The multiplier.
   *
   * @return array|null
   *   The image style mapping. NULL if the mapping does not exist.
   *   The image style mapping has following keys:
   *     - image_mapping_type: Either \'image_style\' or \'sizes\'.
   *     - image_mapping:
   *       - If image_mapping_type is \'image_style\', the image style ID.
   *       - If image_mapping_type is \'sizes\', an array with following keys:
   *         - sizes: The value for the \'sizes\' attribute.
   *         - sizes_image_styles: The image styles to use for the \'srcset\'
   *           attribute.
   *     - breakpoint_id: The breakpoint ID for this image style mapping.
   *     - multiplier: The multiplier for this image style mapping.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'getImageStyleMapping',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8d02a2dce11869d895ba83c2818e9ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if there is at least one image style mapping defined.
   *
   * @param array $image_style_mapping
   *   The image style mapping.
   *
   * @return bool
   *   Whether the image style mapping is empty.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'isEmptyImageStyleMapping',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9e49e9a16be3b99c7a9e840abffe2d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a image style mapping to the responsive image configuration entity.
   *
   * @param string $breakpoint_id
   *   The breakpoint ID.
   * @param string $multiplier
   *   The multiplier.
   * @param array $image_style_mapping
   *   The mapping image style mapping.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'addImageStyleMapping',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba96c8ebdb5bf3822f9f74ba5b50263e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes all image style mappings from the responsive image style.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'removeImageStyleMappings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60ca2f1237739d7391b6fa86f773b31c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all the image styles IDs involved in the responsive image mapping.
   *
   * @return string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_image',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
         'functionName' => 'getImageStyleIds',
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