<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Path/AliasRepositoryInterface.php-1594234425',
   'data' => 
  array (
    '9733cb7edd9e2f9ed4082407166a420e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for path alias lookup operations.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
 * Use \\Drupal\\path_alias\\AliasRepositoryInterface.
 *
 * @see https://www.drupal.org/node/3092086
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepositoryInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14d531e0d62da8421412f4234913a542' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pre-loads path alias information for a given list of system paths.
   *
   * @param array $preloaded
   *   System paths that need preloading of aliases.
   * @param string $langcode
   *   Language code to search the path with. If there\'s no path defined for
   *   that language it will search paths without language.
   *
   * @return string[]
   *   System paths (keys) to alias (values) mapping.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepositoryInterface',
         'functionName' => 'preloadPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a90f6c9988831557b254d29a9cf9797' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Searches a path alias for a given Drupal system path.
   *
   * The default implementation performs case-insensitive matching on the
   * \'path\' and \'alias\' strings.
   *
   * @param string $path
   *   The system path to investigate for corresponding path aliases.
   * @param string $langcode
   *   Language code to search the path with. If there\'s no path defined for
   *   that language it will search paths without language.
   *
   * @return array|null
   *   An array containing the \'id\', \'path\', \'alias\' and \'langcode\' properties
   *   of a path alias, or NULL if none was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepositoryInterface',
         'functionName' => 'lookupBySystemPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b89b0bedde654bdd59413b9623dc699b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Searches a path alias for a given alias.
   *
   * The default implementation performs case-insensitive matching on the
   * \'path\' and \'alias\' strings.
   *
   * @param string $alias
   *   The alias to investigate for corresponding system paths.
   * @param string $langcode
   *   Language code to search the alias with. If there\'s no alias defined for
   *   that language it will search aliases without language.
   *
   * @return array|null
   *   An array containing the \'id\', \'path\', \'alias\' and \'langcode\' properties
   *   of a path alias, or NULL if none was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepositoryInterface',
         'functionName' => 'lookupByAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6e4eb22d526ee2487f79981d4095335' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if any alias exists starting with $initial_substring.
   *
   * @param string $initial_substring
   *   Initial system path substring to test against.
   *
   * @return bool
   *   TRUE if any alias exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepositoryInterface',
         'functionName' => 'pathHasMatchingAlias',
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