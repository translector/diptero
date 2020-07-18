<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/slick/src/Plugin/Field/FieldFormatter/SlickFileFormatter.php-1588418758,/var/www/html/web/modules/contrib/blazy/src/Dejavu/BlazyVideoTrait.php-1588969110',
   'data' => 
  array (
    '3c11a43f2c0c5f962fc247a5cb7c45ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'Slick File\' formatter to get ME within images.
 *
 * This is not \'Slick Media\', instead a simple mix of image and optional video.
 *
 * @todo TBD; deprecate for core Media and remove post/ prior to 3.x release.
 * @todo deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
 *   \\Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickMediaFormatter instead.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'blazyvideotrait' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bdbdc33991949837b60a3a8db320c5d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Trait common for Media integration.
 *
 * @see Drupal\\blazy\\Plugin\\views\\field\\BlazyViewsFieldPluginBase
 * @see Drupal\\slick_browser\\SlickBrowser::widgetEntityBrowserFileFormAlter()
 * @see Drupal\\slick_browser\\Plugin\\EntityBrowser\\FieldWidgetDisplay\\...
 * @todo deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
 *   Drupal\\blazy\\BlazyOEmbed instead.
 * @see https://www.drupal.org/node/3103018
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4d91c4cd3f69e84f402197d50140c57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The blazy oembed service.
   *
   * @var \\Drupal\\blazy\\BlazyOEmbedInterface
   * @todo remove default null post Blazy 8.2.x full release.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7510001a87f70ec452328251be54241e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Core Media oEmbed url resolver.
   *
   * @var \\Drupal\\Core\\Image\\ImageFactory
   * @todo remove default null post Blazy 8.2.x full release.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c1ddce753174b045b367e61d433e796' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the blazy oEmbed service.
   *
   * @todo remove null check post Blazy 8.2.x full release.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'blazyOembed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94eb44ef26455cf71dc8bac889dee4e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the image factory.
   *
   * @todo remove null check post Blazy 8.2.x full release.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'imageFactory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ece2103c4a9a3fd5efa17cc5a9722b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the faked image item out of file entity, or ER, if applicable.
   *
   * @param object $file
   *   The expected file entity, or ER, to get image item from.
   *
   * @return array
   *   The array of image item and settings if a file image, else empty.
   *
   * @todo enable post RC before release release.
   * @todo deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
   *   BlazyOEmbed::getImageItem() instead.
   * @see https://www.drupal.org/node/3103018
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'getImageItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fc5de5b78433c7604d5d38ecc5939dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the Media item thumbnail, or re-associate the file entity to ME.
   *
   * @param array $data
   *   An array of data containing settings, and potential video thumbnail item.
   * @param object $media
   *   The core Media entity.
   *
   * @todo remove post Blazy 8.2.x when blazy-plugins use core Media.
   *
   * @deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
   *   BlazyOEmbed::getMediaItem() instead.
   * @see https://www.drupal.org/node/3103018
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'getMediaItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '964593805bcdf8300c728e9d6ebb84c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds relevant Media settings based on the given media url.
   *
   * @param array $settings
   *   An array of settings to be passed into theme_blazy().
   * @param string $external_url
   *   A video URL.
   *
   * @todo remove post Blazy 8.2.x full release. This is still kept to
   * allow changing from video_embed_field into media field without breaking it,
   * and to allow transition from blazy-related modules to depend on media.
   * Currently this is only required by deprecated SlickVideoFormatter.
   *
   * @deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
   *   BlazyOEmbed::build() instead.
   * @see https://www.drupal.org/node/3103018
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'buildVideo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b137f3b8468ff9d3873b5f03b9f8ed64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'blazyvideotrait' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18924ec4b0bb9f05158b1a8613d1d721' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'blazyvideotrait' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'buildElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe57dcf2ed6dc98d9de936056d1eb6d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem $item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'blazyvideotrait' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'buildElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8dcf73643523adda97e6bb05c1ca7456' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'blazyvideotrait' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'buildSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bcd82cad24f47d0c93fed803697ab2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'blazyvideotrait' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'getScopedFormElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0a2382596b280c80fde45a728e667af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'blazyvideotrait' => 'Drupal\\blazy\\Dejavu\\BlazyVideoTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\slick\\Plugin\\Field\\FieldFormatter\\SlickFileFormatter',
         'functionName' => 'isApplicable',
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