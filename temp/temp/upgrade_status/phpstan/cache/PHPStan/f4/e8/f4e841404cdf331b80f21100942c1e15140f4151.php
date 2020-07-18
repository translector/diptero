<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/src/Token.php-1586203134',
   'data' => 
  array (
    'ec619e56f3d27d420d229ba27434bea4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Service to retrieve token information.
 *
 * This service replaces the core\'s token service and provides the same
 * functionality by extending it. It also provides additional functionality
 * commonly required by the additional support provided by token module and
 * other modules.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f091a0c3e01b9301a69164d833e783b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Token definitions.
   *
   * @var array[]|null
   *   An array of token definitions, or NULL when the definitions are not set.
   *
   * @see self::resetInfo()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd82cf1ce6a9cb12b15dd980e1e84f829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e24c6b717ee662f97e9ce27e240ac52a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extracts data from the token data for use in array_multisort().
   *
   * @param array $token_info
   *   List of tokens or token types, each element must have a name key.
   *
   * @return string[]
   *   List of the names keyed by the token key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => 'prepareMultisort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8067a6a7d785c63e50d04cea812a293d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => 'getTokenInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bca1cd7042fb85465e6bc16a67cf468' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => 'getTypeInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ac32db86ea1c38f16cbae167f1c74e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => 'getGlobalTokenTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cab5b6a074c1072702eab320440fbfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => 'getInvalidTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b19f81038410c20bdf9aca839c10d73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => 'getInvalidTokensByContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f93243515fdd64ec3a8fc33304a08b18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'tokenbase' => 'Drupal\\Core\\Utility\\Token',
        ),
         'className' => 'Drupal\\token\\Token',
         'functionName' => 'resetInfo',
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