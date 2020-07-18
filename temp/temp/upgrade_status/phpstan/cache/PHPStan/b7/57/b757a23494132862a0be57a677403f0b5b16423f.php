<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Path/AliasRepository.php-1594234425',
   'data' => 
  array (
    'deefd3d99a2380f850228a0325bb2b72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the default path alias lookup operations.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\path_alias\\AliasRepository instead.
 *
 * @see https://www.drupal.org/node/3092086
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepository',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe4595b7863dc87182a6725a86c4b2c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database connection.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepository',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7cdb16252a65e26cae1f7d5e7b3d3f74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an AliasRepository object.
   *
   * @param \\Drupal\\Core\\Database\\Connection $connection
   *   A database connection for reading and writing path aliases.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepository',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7301b2e74210e40200a1e48a13cb3430' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepository',
         'functionName' => 'preloadPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '056ea7706a5158d1d63b4c11950c827d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepository',
         'functionName' => 'lookupBySystemPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37fc0eae455a071e79b1bc0b5bebeec9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepository',
         'functionName' => 'lookupByAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f30cddcc4c51ec6b81e8a2a1e308e98b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepository',
         'functionName' => 'pathHasMatchingAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2e1f0e4b2d2a558e2d02aac61b46144' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a SELECT query for the path_alias base table.
   *
   * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
   *   A Select query object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepository',
         'functionName' => 'getBaseQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fefb0432cf5a8be6324218e32e13a43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds path alias language fallback conditions to a select query object.
   *
   * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $query
   *   A Select query object.
   * @param string $langcode
   *   Language code to search the path with. If there\'s no path defined for
   *   that language it will search paths without language.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Path',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Core\\Path\\AliasRepository',
         'functionName' => 'addLanguageFallback',
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