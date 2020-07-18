<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/media/src/OEmbed/Resource.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Cache/CacheableDependencyTrait.php-1594234425',
   'data' => 
  array (
    '52905a927385902084932e1c62890256' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Value object representing an oEmbed resource.
 *
 * Data received from an oEmbed provider could be insecure. For example,
 * resources of the \'rich\' type provide an HTML representation which is not
 * sanitized by this object in any way. Any values you retrieve from this object
 * should be treated as potentially dangerous user input and carefully validated
 * and sanitized before being displayed or otherwise manipulated by your code.
 *
 * Valid resource types are defined in the oEmbed specification and represented
 * by the TYPE_* constants in this class.
 *
 * @see https://oembed.com/#section2
 *
 * @internal
 *   This class is an internal part of the oEmbed system and should only be
 *   instantiated by
 *   \\Drupal\\media\\OEmbed\\ResourceFetcherInterface::fetchResource().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0dc888cc8f98b9fa8108855a0aaa9793' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for \\Drupal\\Core\\Cache\\CacheableDependencyInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a0888fe02af62de3a6894acfd78abb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache contexts.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '134dcfa8614a3199243363244d844cd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache tags.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fe10da8bf1bbb0ab6294b46b90274e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache max-age.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b9675b8f5b40fabb21b22f450cdcaf6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets cacheability; useful for value object constructors.
   *
   * @param \\Drupal\\Core\\Cache\\CacheableDependencyInterface $cacheability
   *   The cacheability to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'setCacheability',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '260e7f1e5c5f226329565b75316b5262' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'affb38f425919a5b143713842c8b207f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getCacheContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf342403a0166d6fd39bd31d4295cb4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getCacheMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c29e922e7524ef113156996152eb8b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The resource type for link resources.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c78bb1b71d523b5ae78940ca172ae241' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The resource type for photo resources.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3be04659b9e51af0a84619de8989c138' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The resource type for rich resources.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc14d6d2edce4c6b08291ff7c6cdec7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The resource type for video resources.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8344edc82696d8c3ca38cf1b2b547531' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The resource type. Can be one of the static::TYPE_* constants.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21f5023d2fd25d90062d1bae68303dab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The resource provider.
   *
   * @var \\Drupal\\media\\OEmbed\\Provider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0f0e5c794c481ae5f6e3a88495704ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A text title, describing the resource.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '317135eec8c2c71f915fd4eddf451a63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the author/owner of the resource.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '683fd391665ab9c7a5d898f20c15184b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A URL for the author/owner of the resource.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a30cce6973299b85b8539f2dc8354bd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A URL to a thumbnail image representing the resource.
   *
   * The thumbnail must respect any maxwidth and maxheight parameters passed
   * to the oEmbed endpoint. If this parameter is present, thumbnail_width and
   * thumbnail_height must also be present.
   *
   * @var string
   *
   * @see \\Drupal\\media\\OEmbed\\UrlResolverInterface::getResourceUrl()
   * @see https://oembed.com/#section2
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ed14c9027adcb455689a4e175fc6e9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The width of the thumbnail, in pixels.
   *
   * If this parameter is present, thumbnail_url and thumbnail_height must also
   * be present.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bbb2cb8bb06f7e4c7ca5ac1173a6488f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The height of the thumbnail, in pixels.
   *
   * If this parameter is present, thumbnail_url and thumbnail_width must also
   * be present.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b66ad9a2643151ffc64084bcd7d46c9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The width of the resource, in pixels.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4613fe839868dee59402e4956f330231' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The height of the resource, in pixels.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a633e846ce5bd6e68d370ba0c560fa7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The resource URL. Only applies to \'photo\' and \'link\' resources.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6568d82c849704e6b1e8d99989fc739' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The HTML representation of the resource.
   *
   * Only applies to \'rich\' and \'video\' resources.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '277e7e132672a99e6981eb868a924b2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resource constructor.
   *
   * @param \\Drupal\\media\\OEmbed\\Provider $provider
   *   (optional) The resource provider.
   * @param string $title
   *   (optional) A text title, describing the resource.
   * @param string $author_name
   *   (optional) The name of the author/owner of the resource.
   * @param string $author_url
   *   (optional) A URL for the author/owner of the resource.
   * @param int $cache_age
   *   (optional) The suggested cache lifetime for this resource, in seconds.
   * @param string $thumbnail_url
   *   (optional) A URL to a thumbnail image representing the resource. If this
   *   parameter is present, $thumbnail_width and $thumbnail_height must also be
   *   present.
   * @param int $thumbnail_width
   *   (optional) The width of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_height must also be present.
   * @param int $thumbnail_height
   *   (optional) The height of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_width must also be present.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1024e40806bcd3695324cbe28c9343db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a link resource.
   *
   * @param string $url
   *   (optional) The URL of the resource.
   * @param \\Drupal\\media\\OEmbed\\Provider $provider
   *   (optional) The resource provider.
   * @param string $title
   *   (optional) A text title, describing the resource.
   * @param string $author_name
   *   (optional) The name of the author/owner of the resource.
   * @param string $author_url
   *   (optional) A URL for the author/owner of the resource.
   * @param int $cache_age
   *   (optional) The suggested cache lifetime for this resource, in seconds.
   * @param string $thumbnail_url
   *   (optional) A URL to a thumbnail image representing the resource. If this
   *   parameter is present, $thumbnail_width and $thumbnail_height must also be
   *   present.
   * @param int $thumbnail_width
   *   (optional) The width of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_height must also be present.
   * @param int $thumbnail_height
   *   (optional) The height of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_width must also be present.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'link',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '041dc7e20515cbec42d089cba5229d16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a photo resource.
   *
   * @param string $url
   *   The URL of the photo.
   * @param int $width
   *   The width of the photo, in pixels.
   * @param int $height
   *   The height of the photo, in pixels.
   * @param \\Drupal\\media\\OEmbed\\Provider $provider
   *   (optional) The resource provider.
   * @param string $title
   *   (optional) A text title, describing the resource.
   * @param string $author_name
   *   (optional) The name of the author/owner of the resource.
   * @param string $author_url
   *   (optional) A URL for the author/owner of the resource.
   * @param int $cache_age
   *   (optional) The suggested cache lifetime for this resource, in seconds.
   * @param string $thumbnail_url
   *   (optional) A URL to a thumbnail image representing the resource. If this
   *   parameter is present, $thumbnail_width and $thumbnail_height must also be
   *   present.
   * @param int $thumbnail_width
   *   (optional) The width of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_height must also be present.
   * @param int $thumbnail_height
   *   (optional) The height of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_width must also be present.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'photo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '781e54ffb8abde887bc0f4b6e2454e1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a rich resource.
   *
   * @param string $html
   *   The HTML representation of the resource.
   * @param int $width
   *   The width of the resource, in pixels.
   * @param int $height
   *   The height of the resource, in pixels.
   * @param \\Drupal\\media\\OEmbed\\Provider $provider
   *   (optional) The resource provider.
   * @param string $title
   *   (optional) A text title, describing the resource.
   * @param string $author_name
   *   (optional) The name of the author/owner of the resource.
   * @param string $author_url
   *   (optional) A URL for the author/owner of the resource.
   * @param int $cache_age
   *   (optional) The suggested cache lifetime for this resource, in seconds.
   * @param string $thumbnail_url
   *   (optional) A URL to a thumbnail image representing the resource. If this
   *   parameter is present, $thumbnail_width and $thumbnail_height must also be
   *   present.
   * @param int $thumbnail_width
   *   (optional) The width of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_height must also be present.
   * @param int $thumbnail_height
   *   (optional) The height of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_width must also be present.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'rich',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2a8fd4a8532f68be276bc14e98be5bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a video resource.
   *
   * @param string $html
   *   The HTML required to display the video.
   * @param int $width
   *   The width of the video, in pixels.
   * @param int $height
   *   The height of the video, in pixels.
   * @param \\Drupal\\media\\OEmbed\\Provider $provider
   *   (optional) The resource provider.
   * @param string $title
   *   (optional) A text title, describing the resource.
   * @param string $author_name
   *   (optional) The name of the author/owner of the resource.
   * @param string $author_url
   *   (optional) A URL for the author/owner of the resource.
   * @param int $cache_age
   *   (optional) The suggested cache lifetime for this resource, in seconds.
   * @param string $thumbnail_url
   *   (optional) A URL to a thumbnail image representing the resource. If this
   *   parameter is present, $thumbnail_width and $thumbnail_height must also be
   *   present.
   * @param int $thumbnail_width
   *   (optional) The width of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_height must also be present.
   * @param int $thumbnail_height
   *   (optional) The height of the thumbnail, in pixels. If this parameter is
   *   present, $thumbnail_url and $thumbnail_width must also be present.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'video',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '203d759f7bcfd0bcf4fb590b60850ccc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the resource type.
   *
   * @return string
   *   The resource type. Will be one of the self::TYPE_* constants.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83f0861fef6dbfdf18f1ca69fd4e7608' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the title of the resource.
   *
   * @return string|null
   *   The title of the resource, if known.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '482065cbc75e724d63f445724c522339' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the name of the resource author.
   *
   * @return string|null
   *   The name of the resource author, if known.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getAuthorName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77a8600d0ae2c2545f92da79009d98c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URL of the resource author.
   *
   * @return \\Drupal\\Core\\Url|null
   *   The absolute URL of the resource author, or NULL if none is provided.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getAuthorUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32bd1956412b37378a5d04cbbda9fc9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the resource provider, if known.
   *
   * @return \\Drupal\\media\\OEmbed\\Provider|null
   *   The resource provider, or NULL if the provider is not known.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getProvider',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '902f5038dcfc819f4cd31f181c217b56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URL of the resource\'s thumbnail image.
   *
   * @return \\Drupal\\Core\\Url|null
   *   The absolute URL of the thumbnail image, or NULL if there isn\'t one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getThumbnailUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e191ef74b4c48626f25f711ce8a8b119' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the width of the resource\'s thumbnail image.
   *
   * @return int|null
   *   The thumbnail width in pixels, or NULL if there is no thumbnail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getThumbnailWidth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e18ee551e9e014a426919f1fd4fc9e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the height of the resource\'s thumbnail image.
   *
   * @return int|null
   *   The thumbnail height in pixels, or NULL if there is no thumbnail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getThumbnailHeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80880ebe64f1770770927b650328e0d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the width of the resource.
   *
   * @return int|null
   *   The width of the resource in pixels, or NULL if the resource has no
   *   width.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getWidth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f19605ba2634bffa9ea5f0561800e07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the height of the resource.
   *
   * @return int|null
   *   The height of the resource in pixels, or NULL if the resource has no
   *   height.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getHeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fe4d2075c295892fe2980900dd3a61d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URL of the resource. Only applies to \'photo\' resources.
   *
   * @return \\Drupal\\Core\\Url|null
   *   The resource URL, if it has one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '353b20d48ec6012d71da1fe64229f344' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the HTML representation of the resource.
   *
   * Only applies to \'rich\' and \'video\' resources.
   *
   * @return string|null
   *   The HTML representation of the resource, if it has one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'getHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ab0253b1394e80df74bbcdf0cbe9c1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the thumbnail dimensions.
   *
   * @param int $width
   *   The width of the resource.
   * @param int $height
   *   The height of the resource.
   *
   * @throws \\InvalidArgumentException
   *   If either $width or $height are not numbers greater than zero.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'setThumbnailDimensions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0283df7cecccc4a0dc9fdb0209f53d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the dimensions.
   *
   * @param int|null $width
   *   The width of the resource.
   * @param int|null $height
   *   The height of the resource.
   *
   * @throws \\InvalidArgumentException
   *   If either $width or $height are not numbers greater than zero.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\media\\OEmbed',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cacheabledependencytrait' => 'Drupal\\Core\\Cache\\CacheableDependencyTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\media\\OEmbed\\Resource',
         'functionName' => 'setDimensions',
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