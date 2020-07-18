<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Asset/AttachedAssetsInterface.php-1594234425',
   'data' => 
  array (
    'c16bb41247bfb3fee8cfc1b130e5ee8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The attached assets collection for the current response.
 *
 * Allows for storage of:
 * - an ordered list of asset libraries (to be loaded for the current response)
 * - attached JavaScript settings (to be loaded for the current response)
 * - a set of asset libraries that the client already has loaded (as indicated
 *   in the request, to *not* be loaded for the current response)
 *
 * @see \\Drupal\\Core\\Asset\\AssetResolverInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '490372e4ff1b1cbbca6b261e28c45126' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an AttachedAssetsInterface object from a render array.
   *
   * @param array $render_array
   *   A render array.
   *
   * @return static
   *
   * @throws \\LogicException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
         'functionName' => 'createFromRenderArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68e2b7c60743fdc32ee787ed5434869a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the asset libraries attached to the current response.
   *
   * @param string[] $libraries
   *   A list of libraries, in the order they should be loaded.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
         'functionName' => 'setLibraries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae02f863abe70192fe5386ff7ab26664' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the asset libraries attached to the current response.
   *
   * @return string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
         'functionName' => 'getLibraries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83120507df095dd3cf8464433546891b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the JavaScript settings that are attached to the current response.
   *
   * @param array $settings
   *   The needed JavaScript settings.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
         'functionName' => 'setSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd17be53621bf94a8d7ffb49bf4947401' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the settings attached to the current response.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
         'functionName' => 'getSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88299bb70a75a6443183b9dd2a113717' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the asset libraries that the current request marked as already loaded.
   *
   * @param string[] $libraries
   *   The set of already loaded libraries.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
         'functionName' => 'setAlreadyLoadedLibraries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0415e4548e387231df8dd2810fef7b9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the set of already loaded asset libraries.
   *
   * @return string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
         'functionName' => 'getAlreadyLoadedLibraries',
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