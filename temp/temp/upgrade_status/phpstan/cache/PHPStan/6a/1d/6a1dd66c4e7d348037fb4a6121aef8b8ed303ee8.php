<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Datetime/FormattedDateDiff.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Cache/UnchangingCacheableDependencyTrait.php-1594234425',
   'data' => 
  array (
    '1e475005968c79ee8a307521f8aa6f4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Contains a formatted time difference.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'unchangingcacheabledependencytrait' => 'Drupal\\Core\\Cache\\UnchangingCacheableDependencyTrait',
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9d682ab85984e3c414438303e0eadad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait to implement CacheableDependencyInterface for unchanging objects.
 *
 * @see \\Drupal\\Core\\Cache\\CacheableDependencyInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a304c7558b1015c63aa32284effa754' => 
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
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => 'getCacheContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b63725b9438589e37fb0ff11f49f1b13' => 
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
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => 'getCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8aa6170d6ff8c686df171a70e10b88f' => 
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
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => 'getCacheMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97c9ae4a45b172532e3f0cc815f12f37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The actual formatted time difference.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'unchangingcacheabledependencytrait' => 'Drupal\\Core\\Cache\\UnchangingCacheableDependencyTrait',
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7b92204d6d692f478ad192fad219626' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The maximum time in seconds that this string may be cached.
   *
   * Let\'s say the time difference is 1 day 1 hour. In this case, we can cache
   * it until now + 1 hour, so maxAge is 3600 seconds.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'unchangingcacheabledependencytrait' => 'Drupal\\Core\\Cache\\UnchangingCacheableDependencyTrait',
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '166d7e3c4cb1c0745efdb3dbffe74d8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new FormattedDateDiff instance.
   *
   * @param string $string
   *   The formatted time difference.
   * @param int $max_age
   *   The maximum time in seconds that this string may be cached.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'unchangingcacheabledependencytrait' => 'Drupal\\Core\\Cache\\UnchangingCacheableDependencyTrait',
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4f800ba253c71a9db98dcf75ad66545' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'unchangingcacheabledependencytrait' => 'Drupal\\Core\\Cache\\UnchangingCacheableDependencyTrait',
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => 'getString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c512484dbfb5c9ee964c9a5b38d0e2c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'unchangingcacheabledependencytrait' => 'Drupal\\Core\\Cache\\UnchangingCacheableDependencyTrait',
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => 'getCacheMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57e281b73383e4d4a8b9ae5e573297a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The maximum age for which this object may be cached.
   *
   * @return int
   *   The maximum time in seconds that this object may be cached.
   *
   * @deprecated in drupal:8.1.9 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\Datetime\\FormattedDateDiff::getCacheMaxAge() instead.
   *
   * @see https://www.drupal.org/node/2783545
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'unchangingcacheabledependencytrait' => 'Drupal\\Core\\Cache\\UnchangingCacheableDependencyTrait',
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => 'getMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1999d2ce3350b5ed28e0fcb26806abbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'unchangingcacheabledependencytrait' => 'Drupal\\Core\\Cache\\UnchangingCacheableDependencyTrait',
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\FormattedDateDiff',
         'functionName' => 'toRenderable',
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