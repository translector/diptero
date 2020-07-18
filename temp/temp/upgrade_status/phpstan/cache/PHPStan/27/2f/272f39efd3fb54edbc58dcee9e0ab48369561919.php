<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Path/AliasManagerInterface.php-1594234425',
   'data' => 
  array (
    '56cc1e99ff15ca12159262694dc10851' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Find an alias for a path and vice versa.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
 * Use \\Drupal\\path_alias\\AliasManagerInterface.
 *
 * @see https://www.drupal.org/node/3092086
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\AliasManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d94b1aced8a2abbf0bafb4be0bd7091' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Given the alias, return the path it represents.
   *
   * @param string $alias
   *   An alias.
   * @param string $langcode
   *   An optional language code to look up the path in.
   *
   * @return string
   *   The path represented by alias, or the alias if no path was found.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the path does not start with a slash.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\AliasManagerInterface',
         'functionName' => 'getPathByAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8312731b3463426386bb7fe880097390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Given a path, return the alias.
   *
   * @param string $path
   *   A path.
   * @param string $langcode
   *   An optional language code to look up the path in.
   *
   * @return string
   *   An alias that represents the path, or path if no alias was found.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the path does not start with a slash.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\AliasManagerInterface',
         'functionName' => 'getAliasByPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fa04a39f25015f6c75a88e2df5d0adb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clear internal caches in alias manager.
   *
   * @param $source
   *   Source path of the alias that is being inserted/updated. Can be omitted
   *   if entire cache needs to be flushed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Path\\AliasManagerInterface',
         'functionName' => 'cacheClear',
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