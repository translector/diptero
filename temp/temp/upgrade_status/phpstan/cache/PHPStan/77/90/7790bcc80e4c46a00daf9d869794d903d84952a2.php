<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformLibrariesManagerInterface.php-1594690523',
   'data' => 
  array (
    '36d9d6f9eacfd789f40f044a2beddee2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for libraries classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformLibrariesManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bca11a73e90882d60da6edf03fbb087' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get third party libraries status for hook_requirements and drush.
   *
   * @return array
   *   An associative array of third party libraries keyed by library name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformLibrariesManagerInterface',
         'functionName' => 'requirements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fefb2a3a78c9aade79393b9324a0d41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get library information.
   *
   * @param string $name
   *   The name of the library.
   *
   * @return array
   *   An associative array containing an library.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformLibrariesManagerInterface',
         'functionName' => 'getLibrary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32da93c7cd5d959b991890d31c8cd8f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get libraries.
   *
   * @param bool|null $included
   *   Optionally filter by include (TRUE) or excluded (FALSE)
   *
   * @return array
   *   An associative array of libraries.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformLibrariesManagerInterface',
         'functionName' => 'getLibraries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18fbf9c513b6b068bdf48688d485c5fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get excluded libraries.
   *
   * @return array
   *   A keyed array of excluded libraries.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformLibrariesManagerInterface',
         'functionName' => 'getExcludedLibraries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13cde636b58c86927bd7e9b5f9c4da55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if library is excluded.
   *
   * @param string $name
   *   The name of the library.
   *
   * @return bool
   *   TRUE if library is excluded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformLibrariesManagerInterface',
         'functionName' => 'isExcluded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fef0690278ba4c19543b433c6283c945' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if library is included.
   *
   * @param string $name
   *   The name of the library.
   *
   * @return bool
   *   TRUE if library is included.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\WebformLibrariesManagerInterface',
         'functionName' => 'isIncluded',
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