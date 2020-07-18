<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Path/PathValidatorInterface.php-1594234425',
   'data' => 
  array (
    '90a1ef2628cd341c73a377abfebd79ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for url path validators.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\PathValidatorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1c4be9f8a2e022b6fd288f24f020efc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a URL object, if the path is valid and accessible.
   *
   * @param string $path
   *   The path to check.
   *
   * @return \\Drupal\\Core\\Url|false
   *   The url object, or FALSE if the path is not valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\PathValidatorInterface',
         'functionName' => 'getUrlIfValid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e817b915453502a7c8fdca1b3347d9d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a URL object, if the path is valid.
   *
   * Unlike getUrlIfValid(), access check is not performed. Do not use this
   * method if the $path is about to be presented to a user.
   *
   * @param string $path
   *   The path to check.
   *
   * @return \\Drupal\\Core\\Url|false
   *   The url object, or FALSE if the path is not valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\PathValidatorInterface',
         'functionName' => 'getUrlIfValidWithoutAccessCheck',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6f9911b9c662b6f5eae0e0e1bd22937' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the URL path is valid and accessible by the current user.
   *
   * @param string $path
   *   The path to check.
   *
   * @return bool
   *   TRUE if the path is valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\PathValidatorInterface',
         'functionName' => 'isValid',
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