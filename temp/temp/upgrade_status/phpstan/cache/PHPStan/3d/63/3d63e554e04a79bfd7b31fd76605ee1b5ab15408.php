<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Path/AliasStorageInterface.php-1594234425',
   'data' => 
  array (
    '1c9f749cc135bb1e25fbfd89247f9b3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a class for CRUD operations on path aliases.
 *
 * @deprecated \\Drupal\\Core\\Path\\AliasStorage is deprecated in drupal:8.8.0 and
 *   is removed from drupal:9.0.0. Use the "path_alias.repository" service
 *   instead, or the entity storage handler for the "path_alias" entity type
 *   for CRUD methods.
 *
 * @see https://www.drupal.org/node/3013865
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd086eed12eb226f13303f8a545fae778' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves a path alias to the database.
   *
   * @param string $source
   *   The internal system path.
   * @param string $alias
   *   The URL alias.
   * @param string $langcode
   *   (optional) The language code of the alias.
   * @param int|null $pid
   *   (optional) Unique path alias identifier.
   *
   * @return array|false
   *   FALSE if the path could not be saved or an associative array containing
   *   the following keys:
   *   - source (string): The internal system path with a starting slash.
   *   - alias (string): The URL alias with a starting slash.
   *   - pid (int): Unique path alias identifier.
   *   - langcode (string): The language code of the alias.
   *   - original: For updates, an array with source, alias and langcode with
   *     the previous values.
   *
   * @thrown \\InvalidArgumentException
   *   Thrown when either the source or alias has not a starting slash.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => 'save',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dffabc9d7c6bf5b4bcd5b785dc3369ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fetches a specific URL alias from the database.
   *
   * The default implementation performs case-insensitive matching on the
   * \'source\' and \'alias\' strings.
   *
   * @param array $conditions
   *   An array of query conditions.
   *
   * @return array|false
   *   FALSE if no alias was found or an associative array containing the
   *   following keys:
   *   - source (string): The internal system path with a starting slash.
   *   - alias (string): The URL alias with a starting slash.
   *   - pid (int): Unique path alias identifier.
   *   - langcode (string): The language code of the alias.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => 'load',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c21e7ee724ff16e5647b606c3ecd0eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes a URL alias.
   *
   * The default implementation performs case-insensitive matching on the
   * \'source\' and \'alias\' strings.
   *
   * @param array $conditions
   *   An array of criteria.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8169810e5ebf118817eed120e40e850' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pre-loads path alias information for a given list of source paths.
   *
   * @param array $preloaded
   *   Paths that need preloading of aliases.
   * @param string $langcode
   *   Language code to search the path with. If there\'s no path defined for
   *   that language it will search paths without language.
   *
   * @return string[]
   *   Source (keys) to alias (values) mapping.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => 'preloadPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd35ea742ec6f00cdf13e6ade5825f647' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an alias of Drupal system URL.
   *
   * The default implementation performs case-insensitive matching on the
   * \'source\' and \'alias\' strings.
   *
   * @param string $path
   *   The path to investigate for corresponding path aliases.
   * @param string $langcode
   *   Language code to search the path with. If there\'s no path defined for
   *   that language it will search paths without language.
   *
   * @return string|false
   *   A path alias, or FALSE if no path was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => 'lookupPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24a878bf777a6aff75348cc9dec16576' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns Drupal system URL of an alias.
   *
   * The default implementation performs case-insensitive matching on the
   * \'source\' and \'alias\' strings.
   *
   * @param string $path
   *   The path to investigate for corresponding system URLs.
   * @param string $langcode
   *   Language code to search the path with. If there\'s no path defined for
   *   that language it will search paths without language.
   *
   * @return string|false
   *   A Drupal system path, or FALSE if no path was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => 'lookupPathSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6f129beabf49ad49239e5708fceca6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if alias already exists.
   *
   * The default implementation performs case-insensitive matching on the
   * \'source\' and \'alias\' strings.
   *
   * @param string $alias
   *   Alias to check against.
   * @param string $langcode
   *   Language of the alias.
   * @param string|null $source
   *   (optional) Path that alias is to be assigned to.
   *
   * @return bool
   *   TRUE if alias already exists and FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => 'aliasExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '367199968991b1beca7fd52bc4f156c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if there are any aliases with language defined.
   *
   * @return bool
   *   TRUE if aliases with language exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => 'languageAliasExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '386a1d4ba55063aebd400bd1dc98f1b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads aliases for admin listing.
   *
   * @param array $header
   *   Table header.
   * @param string|null $keys
   *   (optional) Search keyword that may include one or more \'*\' as wildcard
   *   values.
   *
   * @return array
   *   Array of items to be displayed on the current page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
         'functionName' => 'getAliasesForAdminListing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3244774a3b918fbf8aeefbbd4a9d85c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if any alias exists starting with $initial_substring.
   *
   * @param string $initial_substring
   *   Initial path substring to test against.
   *
   * @return bool
   *   TRUE if any alias exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasStorageInterface',
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