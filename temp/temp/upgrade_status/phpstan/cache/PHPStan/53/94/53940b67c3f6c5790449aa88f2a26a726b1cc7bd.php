<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Asset/LibraryDiscoveryInterface.php-1594234425',
   'data' => 
  array (
    '25da101d01246312b5fecc417795c010' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Discovers information for asset (CSS/JavaScript) libraries.
 *
 * Library information is statically cached. Libraries are keyed by extension
 * for several reasons:
 * - Libraries are not unique. Multiple extensions might ship with the same
 *   library in a different version or variant. This registry cannot (and does
 *   not attempt to) prevent library conflicts.
 * - Extensions implementing and thereby depending on a library that is
 *   registered by another extension can only rely on that extension\'s library.
 * - Two (or more) extensions can still register the same library and use it
 *   without conflicts in case the libraries are loaded on certain pages only.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb0f6f69643c065832a5e94b64866c1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all libraries defined by an extension.
   *
   * @param string $extension
   *   The name of the extension that registered a library.
   *
   * @return array
   *   An associative array of libraries registered by $extension is returned
   *   (which may be empty).
   *
   * @see self::getLibraryByName()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
         'functionName' => 'getLibrariesByExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03bf3459463936817d1e3449532d5e7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a single library defined by an extension by name.
   *
   * @param string $extension
   *   The name of the extension that registered a library.
   * @param string $name
   *   The name of a registered library to retrieve.
   *
   * @return array|false
   *   The definition of the requested library, if $name was passed and it
   *   exists, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
         'functionName' => 'getLibraryByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0a0d0b99214ab5a3e967187e8aedf40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears static and persistent library definition caches.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Asset',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Asset\\LibraryDiscoveryInterface',
         'functionName' => 'clearCachedDefinitions',
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