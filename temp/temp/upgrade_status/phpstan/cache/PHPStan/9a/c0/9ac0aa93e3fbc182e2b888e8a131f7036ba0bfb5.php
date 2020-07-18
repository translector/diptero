<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/responsive_image/responsive_image.module-1594234425',
   'data' => 
  array (
    '6c023640e46c84cbce609edb943416c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_help().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => 'responsive_image_help',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5bc0e9b9ff5870b5322a7ac1ac6d311' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => 'responsive_image_theme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39f16d08f8c30d50ee10e8ea7e380fea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for responsive image formatter templates.
 *
 * Default template: responsive-image-formatter.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - item: An ImageItem object.
 *   - item_attributes: An optional associative array of HTML attributes to be
 *     placed in the img tag.
 *   - responsive_image_style_id: A responsive image style.
 *   - url: An optional \\Drupal\\Core\\Url object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_responsive_image_formatter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb0c94b6923f1e74e5eb3bdc7af099e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for a responsive image.
 *
 * Default template: responsive-image.html.twig.
 *
 * @param $variables
 *   An associative array containing:
 *   - uri: The URI of the image.
 *   - width: The width of the image (if known).
 *   - height: The height of the image (if known).
 *   - attributes: Associative array of attributes to be placed in the img tag.
 *   - responsive_image_style_id: The ID of the responsive image style.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_responsive_image',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '756280c17bce03080fe2e45035f2fc90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for template_preprocess_responsive_image().
 *
 * @param \\Drupal\\Core\\Image\\ImageInterface $image
 *   The image to build the <source> tags for.
 * @param array $variables
 *   An array with the following keys:
 *     - responsive_image_style_id: The \\Drupal\\responsive_image\\Entity\\ResponsiveImageStyle
 *       ID.
 *     - width: The width of the image (if known).
 *     - height: The height of the image (if known).
 *     - uri: The URI of the image file.
 * @param \\Drupal\\breakpoint\\BreakpointInterface $breakpoint
 *   The breakpoint for this source tag.
 * @param array $multipliers
 *   An array with multipliers as keys and image style mappings as values.
 *
 * @return \\Drupal\\Core\\Template\\Attribute[]
 *   An array of attributes for the source tag.
 *
 * @deprecated in drupal:8.3.0 and is removed from drupal:9.0.0.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => 'responsive_image_build_source_attributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1237604746df2dd194602a3f7308c371' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for template_preprocess_responsive_image().
 *
 * Builds an array of attributes for <source> tags to be used in a <picture>
 * tag. In other words, this function provides the attributes for each <source>
 * tag in a <picture> tag.
 *
 * In a responsive image style, each breakpoint has an image style mapping for
 * each of its multipliers. An image style mapping can be either of two types:
 * \'sizes\' (meaning it will output a <source> tag with the \'sizes\' attribute) or
 * \'image_style\' (meaning it will output a <source> tag based on the selected
 * image style for this breakpoint and multiplier). A responsive image style
 * can contain image style mappings of mixed types (both \'image_style\' and
 * \'sizes\'). For example:
 * @code
 * $responsive_img_style = ResponsiveImageStyle::create(array(
 *   \'id\' => \'style_one\',
 *   \'label\' => \'Style One\',
 *   \'breakpoint_group\' => \'responsive_image_test_module\',
 * ));
 * $responsive_img_style->addImageStyleMapping(\'responsive_image_test_module.mobile\', \'1x\', array(
 *   \'image_mapping_type\' => \'image_style\',
 *   \'image_mapping\' => \'thumbnail\',
 * ))
 * ->addImageStyleMapping(\'responsive_image_test_module.narrow\', \'1x\', array(
 *   \'image_mapping_type\' => \'sizes\',
 *   \'image_mapping\' => array(
 *     \'sizes\' => \'(min-width: 700px) 700px, 100vw\',
 *     \'sizes_image_styles\' => array(
 *       \'large\' => \'large\',
 *       \'medium\' => \'medium\',
 *     ),
 *   ),
 * ))
 * ->save();
 * @endcode
 * The above responsive image style will result in a <picture> tag like this:
 * @code
 * <picture>
 *   <source media="(min-width: 0px)" srcset="sites/default/files/styles/thumbnail/image.jpeg" />
 *   <source media="(min-width: 560px)" sizes="(min-width: 700px) 700px, 100vw" srcset="sites/default/files/styles/large/image.jpeg 480w, sites/default/files/styles/medium/image.jpeg 220w" />
 *   <img src="fallback.jpeg" />
 * </picture>
 * @endcode
 *
 * When all the images in the \'srcset\' attribute of a <source> tag have the same
 * MIME type, the source tag will get a \'mime-type\' attribute as well. This way
 * we can gain some front-end performance because browsers can select which
 * image (<source> tag) to load based on the MIME types they support (which, for
 * instance, can be beneficial for browsers supporting WebP).
 * For example:
 * A <source> tag can contain multiple images:
 * @code
 * <source [...] srcset="image1.jpeg 1x, image2.jpeg 2x, image3.jpeg 3x" />
 * @endcode
 * In the above example we can add the \'mime-type\' attribute (\'image/jpeg\')
 * since all images in the \'srcset\' attribute of the <source> tag have the same
 * MIME type.
 * If a <source> tag were to look like this:
 * @code
 * <source [...] srcset="image1.jpeg 1x, image2.webp 2x, image3.jpeg 3x" />
 * @endcode
 * We can\'t add the \'mime-type\' attribute (\'image/jpeg\' vs \'image/webp\'). So in
 * order to add the \'mime-type\' attribute to the <source> tag all images in the
 * \'srcset\' attribute of the <source> tag need to be of the same MIME type. This
 * way, a <picture> tag could look like this:
 * @code
 * <picture>
 *   <source [...] mime-type="image/webp" srcset="image1.webp 1x, image2.webp 2x, image3.webp 3x"/>
 *   <source [...] mime-type="image/jpeg" srcset="image1.jpeg 1x, image2.jpeg 2x, image3.jpeg 3x"/>
 *   <img src="fallback.jpeg" />
 * </picture>
 * @endcode
 * This way a browser can decide which <source> tag is preferred based on the
 * MIME type. In other words, the MIME types of all images in one <source> tag
 * need to be the same in order to set the \'mime-type\' attribute but not all
 * MIME types within the <picture> tag need to be the same.
 *
 * For image style mappings of the type \'sizes\', a width descriptor is added to
 * each source. For example:
 * @code
 * <source media="(min-width: 0px)" srcset="image1.jpeg 100w" />
 * @endcode
 * The width descriptor here is "100w". This way the browser knows this image is
 * 100px wide without having to load it. According to the spec, a multiplier can
 * not be present if a width descriptor is.
 * For example:
 * Valid:
 * @code
 * <source media="(min-width:0px)" srcset="img1.jpeg 50w, img2.jpeg=100w" />
 * @endcode
 * Invalid:
 * @code
 * <source media="(min-width:0px)" srcset="img1.jpeg 50w 1x, img2.jpeg=100w 1x" />
 * @endcode
 *
 * Note: Since the specs do not allow width descriptors and multipliers combined
 * inside one \'srcset\' attribute, we either have to use something like
 * @code
 * <source [...] srcset="image1.jpeg 1x, image2.webp 2x, image3.jpeg 3x" />
 * @endcode
 * to support multipliers or
 * @code
 * <source [...] sizes"(min-width: 40em) 80vw, 100vw" srcset="image1.jpeg 300w, image2.webp 600w, image3.jpeg 1200w" />
 * @endcode
 * to support the \'sizes\' attribute.
 *
 * In theory people could add an image style mapping for the same breakpoint
 * (but different multiplier) so the array contains an entry for breakpointA.1x
 * and breakpointA.2x. If we would output those we will end up with something
 * like
 * @code
 * <source [...] sizes="(min-width: 40em) 80vw, 100vw" srcset="a1.jpeg 300w 1x, a2.jpeg 600w 1x, a3.jpeg 1200w 1x, b1.jpeg 250w 2x, b2.jpeg 680w 2x, b3.jpeg 1240w 2x" />
 * @endcode
 * which is illegal. So the solution is to merge both arrays into one and
 * disregard the multiplier. Which, in this case, would output
 * @code
 * <source [...] sizes="(min-width: 40em) 80vw, 100vw" srcset="b1.jpeg 250w, a1.jpeg 300w, a2.jpeg 600w, b2.jpeg 680w, a3.jpeg 1200w,  b3.jpeg 1240w" />
 * @endcode
 * See http://www.w3.org/html/wg/drafts/html/master/embedded-content.html#image-candidate-string
 * for further information.
 *
 * @param array $variables
 *   An array with the following keys:
 *     - responsive_image_style_id: The \\Drupal\\responsive_image\\Entity\\ResponsiveImageStyle
 *       ID.
 *     - width: The width of the image (if known).
 *     - height: The height of the image (if known).
 *     - uri: The URI of the image file.
 * @param \\Drupal\\breakpoint\\BreakpointInterface $breakpoint
 *   The breakpoint for this source tag.
 * @param array $multipliers
 *   An array with multipliers as keys and image style mappings as values.
 *
 * @return \\Drupal\\Core\\Template\\Attribute[]
 *   An array of attributes for the source tag.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => '_responsive_image_build_source_attributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1ff15d607bcaa855201672a974df266' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Determines the dimensions of an image.
 *
 * @param string $image_style_name
 *   The name of the style to be used to alter the original image.
 * @param array $dimensions
 *   An associative array containing:
 *   - width: The width of the source image (if known).
 *   - height: The height of the source image (if known).
 * @param string $uri
 *   The URI of the image file.
 *
 * @return array
 *   Dimensions to be modified - an array with components width and height, in
 *   pixels.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => 'responsive_image_get_image_dimensions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd60e8a1bf2046fc04afe9eeb1422018e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Determines the MIME type of an image.
 *
 * @param string $image_style_name
 *   The image style that will be applied to the image.
 * @param string $extension
 *   The original extension of the image (without the leading dot).
 *
 * @return string
 *   The MIME type of the image after the image style is applied.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => 'responsive_image_get_mime_type',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c20fb60e8c449fcfb8fe129801c2ce79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper around image_style_url() so we can return an empty image.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => '_responsive_image_image_style_url',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20034aa18ed3d187f31810af6ae62bd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_library_info_alter().
 *
 * Load responsive_image.js whenever ajax is added.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'responsiveimagestyleinterface' => 'Drupal\\responsive_image\\ResponsiveImageStyleInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
          'breakpointinterface' => 'Drupal\\breakpoint\\BreakpointInterface',
        ),
         'className' => NULL,
         'functionName' => 'responsive_image_library_info_alter',
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