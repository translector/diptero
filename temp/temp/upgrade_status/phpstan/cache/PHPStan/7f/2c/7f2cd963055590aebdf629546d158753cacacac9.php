<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Image/ImageFactory.php-1594234425',
   'data' => 
  array (
    'ef7024ef77f32341e71151753ebd5ce8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a factory for image objects.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Image',
         'uses' => 
        array (
          'imagetoolkitmanager' => 'Drupal\\Core\\ImageToolkit\\ImageToolkitManager',
        ),
         'className' => 'Drupal\\Core\\Image\\ImageFactory',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba395f62b7d5231e0f58f37ab97fb21d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The image toolkit plugin manager.
   *
   * @var \\Drupal\\Core\\ImageToolkit\\ImageToolkitManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Image',
         'uses' => 
        array (
          'imagetoolkitmanager' => 'Drupal\\Core\\ImageToolkit\\ImageToolkitManager',
        ),
         'className' => 'Drupal\\Core\\Image\\ImageFactory',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9185f05e0e6097973f1e7ac8b946754b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The image toolkit ID to use for this factory.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Image',
         'uses' => 
        array (
          'imagetoolkitmanager' => 'Drupal\\Core\\ImageToolkit\\ImageToolkitManager',
        ),
         'className' => 'Drupal\\Core\\Image\\ImageFactory',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6c72378d48c5a8fb95a1a7f14f58646' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ImageFactory object.
   *
   * @param \\Drupal\\Core\\ImageToolkit\\ImageToolkitManager $toolkit_manager
   *   The image toolkit plugin manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Image',
         'uses' => 
        array (
          'imagetoolkitmanager' => 'Drupal\\Core\\ImageToolkit\\ImageToolkitManager',
        ),
         'className' => 'Drupal\\Core\\Image\\ImageFactory',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7a3d16f0c5a88dd286bfd03f01db798' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the ID of the image toolkit.
   *
   * @param string $toolkit_id
   *   The ID of the image toolkit to use for this image factory.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Image',
         'uses' => 
        array (
          'imagetoolkitmanager' => 'Drupal\\Core\\ImageToolkit\\ImageToolkitManager',
        ),
         'className' => 'Drupal\\Core\\Image\\ImageFactory',
         'functionName' => 'setToolkitId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77380e4c905541ea1f3bb520c85e740d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the ID of the image toolkit currently in use.
   *
   * @return string
   *   The ID of the image toolkit in use by the image factory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Image',
         'uses' => 
        array (
          'imagetoolkitmanager' => 'Drupal\\Core\\ImageToolkit\\ImageToolkitManager',
        ),
         'className' => 'Drupal\\Core\\Image\\ImageFactory',
         'functionName' => 'getToolkitId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb930b32622abad144aaaf3a14a7b9e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new Image object.
   *
   * Normally, the toolkit set as default in the admin UI is used by the
   * factory to create new Image objects. This can be overridden through
   * \\Drupal\\Core\\Image\\ImageInterface::setToolkitId() so that any new Image
   * object created will use the new toolkit specified. Finally, a single
   * Image object can be created using a specific toolkit, regardless of the
   * current factory settings, by passing its plugin ID in the $toolkit_id
   * argument.
   *
   * @param string|null $source
   *   (optional) The path to an image file, or NULL to construct the object
   *   with no image source.
   * @param string|null $toolkit_id
   *   (optional) The ID of the image toolkit to use for this image, or NULL
   *   to use the current toolkit.
   *
   * @return \\Drupal\\Core\\Image\\ImageInterface
   *   An Image object.
   *
   * @see ImageFactory::setToolkitId()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Image',
         'uses' => 
        array (
          'imagetoolkitmanager' => 'Drupal\\Core\\ImageToolkit\\ImageToolkitManager',
        ),
         'className' => 'Drupal\\Core\\Image\\ImageFactory',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81865877798613cc1d52c2b9ebffb510' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the image file extensions supported by the toolkit.
   *
   * @param string|null $toolkit_id
   *   (optional) The ID of the image toolkit to use for checking, or NULL
   *   to use the current toolkit.
   *
   * @return array
   *   An array of supported image file extensions (e.g. png/jpeg/gif).
   *
   * @see \\Drupal\\Core\\ImageToolkit\\ImageToolkitInterface::getSupportedExtensions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Image',
         'uses' => 
        array (
          'imagetoolkitmanager' => 'Drupal\\Core\\ImageToolkit\\ImageToolkitManager',
        ),
         'className' => 'Drupal\\Core\\Image\\ImageFactory',
         'functionName' => 'getSupportedExtensions',
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