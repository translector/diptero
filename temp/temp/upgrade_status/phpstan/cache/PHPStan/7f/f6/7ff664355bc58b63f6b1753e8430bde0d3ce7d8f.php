<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/BlazyManager.php-1588969110',
   'data' => 
  array (
    '6f2ac81a27ef61dd2541d99a29ccc5be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements a public facing blazy manager.
 *
 * A few modules re-use this: GridStack, Mason, Slick...
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17cbe562101243a40d222b1ffe086c1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'trustedCallbacks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3395f63754516a8e8fb41a68c66ca67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the enforced rich media content, or media using theme_blazy().
   *
   * @param array $build
   *   The array containing: item, content, settings, or optional captions.
   *
   * @return array
   *   The alterable and renderable array of enforced content, or theme_blazy().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'getBlazy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14c884b0b0debdb81d1ae533a2556448' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the Blazy image as a structured array ready for ::renderer().
   *
   * @param array $element
   *   The pre-rendered element.
   *
   * @return array
   *   The renderable array of pre-rendered element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'preRenderBlazy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65ba299d2ff96eca3cbf857126d4e367' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the Blazy output as a structured array ready for ::renderer().
   *
   * @param array $element
   *   The renderable array being modified.
   * @param array $build
   *   The array of information containing the required Image or File item
   *   object, settings, optional container attributes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'prepareBlazy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df5fdd61a8ccbe9974d1b4c3f277d68e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build out (Responsive) image.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'buildMedia',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd8788c55f3afc185abcc0653c0359bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build out Responsive image.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'buildResponsiveImage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f14103fa595731f4e012cfab87503d0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build out image, or anything related, including cache, CSS background, etc.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'buildImage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43ee57cecfeb14d2741a153bf9938079' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares CSS background image.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'backgroundImage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ef919733627bf15649233839ed622e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build captions for both old image, or media entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'buildCaption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '642d460ee5ac6f7038725aeaa7731d9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build thumbnails, also to provide placeholder for blur effect.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'thumbnailAndPlaceholder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65ef2fa1275488f10fb6362ec7179d4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build thumbnails, also to provide placeholder for blur effect.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'createPlaceholder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '076aab81c6425df3c9b5282fb26d67a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the contents using theme_field(), or theme_item_list().
   *
   * Blazy outputs can be formatted using either flat list via theme_field(), or
   * a grid of Field items or Views rows via theme_item_list().
   *
   * @param array $build
   *   The array containing: settings, children elements, or optional items.
   *
   * @return array
   *   The alterable and renderable array of contents.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb5b65f11bf319400358bd6f7455a3b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the Blazy outputs as a structured array ready for ::renderer().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'preRenderBuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a8371017c45ad5e29efe61bb42ea463' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares Blazy settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'getSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e2087d2cb9a28dc071c2f207336e9a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares Blazy outputs, extract items as indices.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'prepareBuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d5d42f839737663a0c1433119fb61cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deprecated method.
   *
   * @deprecated in blazy:8.x-2.0 and is removed from blazy:8.x-3.0. Use
   *   self::getBlazy() instead.
   * @see https://www.drupal.org/node/3103018
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\blazy\\BlazyManager',
         'functionName' => 'getImage',
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