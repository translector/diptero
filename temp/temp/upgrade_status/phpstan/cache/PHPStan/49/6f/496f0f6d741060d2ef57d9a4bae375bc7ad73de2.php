<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/image/src/ImageEffectInterface.php-1594234425',
   'data' => 
  array (
    'd852c5124fc06a3525591e7435b4514f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for image effects.
 *
 * @see \\Drupal\\image\\Annotation\\ImageEffect
 * @see \\Drupal\\image\\ImageEffectBase
 * @see \\Drupal\\image\\ConfigurableImageEffectInterface
 * @see \\Drupal\\image\\ConfigurableImageEffectBase
 * @see \\Drupal\\image\\ImageEffectManager
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
        ),
         'className' => 'Drupal\\image\\ImageEffectInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ff8f871726e5b1aa437adfc44aa7986' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies an image effect to the image object.
   *
   * @param \\Drupal\\Core\\Image\\ImageInterface $image
   *   An image file object.
   *
   * @return bool
   *   TRUE on success. FALSE if unable to perform the image effect on the image.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
        ),
         'className' => 'Drupal\\image\\ImageEffectInterface',
         'functionName' => 'applyEffect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd60795a15dd278c584f9e959fa73409f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the dimensions of the styled image.
   *
   * @param array &$dimensions
   *   Dimensions to be modified - an array with the following keys:
   *   - width: the width in pixels, or NULL if unknown
   *   - height: the height in pixels, or NULL if unknown
   *   When either of the dimensions are NULL, the corresponding HTML attribute
   *   will be omitted when an image style using this image effect is used.
   * @param string $uri
   *   Original image file URI. It is passed in to allow an effect to
   *   optionally use this information to retrieve additional image metadata
   *   to determine dimensions of the styled image.
   *   ImageEffectInterface::transformDimensions key objective is to calculate
   *   styled image dimensions without performing actual image operations, so
   *   be aware that performing IO on the URI may lead to decrease in
   *   performance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
        ),
         'className' => 'Drupal\\image\\ImageEffectInterface',
         'functionName' => 'transformDimensions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f4a09294d8ad89896bcdaa757c0fd95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the extension of the derivative after applying this image effect.
   *
   * @param string $extension
   *   The file extension the derivative has before applying.
   *
   * @return string
   *   The file extension after applying.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
        ),
         'className' => 'Drupal\\image\\ImageEffectInterface',
         'functionName' => 'getDerivativeExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33e7425e51775f085214b0df50adba15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a render array summarizing the configuration of the image effect.
   *
   * @return array
   *   A render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
        ),
         'className' => 'Drupal\\image\\ImageEffectInterface',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '570d8a23317546e41db932c0be240821' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the image effect label.
   *
   * @return string
   *   The image effect label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
        ),
         'className' => 'Drupal\\image\\ImageEffectInterface',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '088db55cd8243b99cf82c3735d327c17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the unique ID representing the image effect.
   *
   * @return string
   *   The image effect ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
        ),
         'className' => 'Drupal\\image\\ImageEffectInterface',
         'functionName' => 'getUuid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f60c442eadfb4fbb92aa64fb16445b79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the weight of the image effect.
   *
   * @return int|string
   *   Either the integer weight of the image effect, or an empty string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
        ),
         'className' => 'Drupal\\image\\ImageEffectInterface',
         'functionName' => 'getWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd73bc1ce32ae380fc3a232b11b7cea9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the weight for this image effect.
   *
   * @param int $weight
   *   The weight for this image effect.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'imageinterface' => 'Drupal\\Core\\Image\\ImageInterface',
        ),
         'className' => 'Drupal\\image\\ImageEffectInterface',
         'functionName' => 'setWeight',
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