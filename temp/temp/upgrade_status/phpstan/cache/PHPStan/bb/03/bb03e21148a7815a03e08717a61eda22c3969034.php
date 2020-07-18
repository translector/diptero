<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/src/TokenInterface.php-1586203134',
   'data' => 
  array (
    'c7ff2ba34181328d3e775a4058c36f4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns metadata describing supported token types.
   *
   * @param $token_type
   *   The token type for which the metadata is required.
   *
   * @return array[]
   *   An array of token type information from hook_token_info() for the
   *   specified token type.
   *
   * @see hook_token_info()
   * @see hook_token_info_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TokenInterface',
         'functionName' => 'getTypeInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f42257849620b722b5d9676984674e83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns metadata describing supported a token.
   *
   * @param $token_type
   *   The token type for which the metadata is required.
   * @param $token
   *   The token name for which the metadata is required.
   *
   * @return array[]
   *   An array of information from hook_token_info() for the specified token.
   *
   * @see hook_token_info()
   * @see hook_token_info_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TokenInterface',
         'functionName' => 'getTokenInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d415f48424244c059e3effc92401609' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a list of token types that can be used without any context (global).
   *
   * @return array[]
   *   An array of global token types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TokenInterface',
         'functionName' => 'getGlobalTokenTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddb5051ae3747c7378e41f7cec02dfcb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate an array of tokens based on their token type.
   *
   * @param string $type
   *   The type of tokens to validate (e.g. \'node\', etc.)
   * @param string[] $tokens
   *   A keyed array of tokens, and their original raw form in the source text.
   *
   * @return string[]
   *   An array with the invalid tokens in their original raw forms.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TokenInterface',
         'functionName' => 'getInvalidTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c5d75326d12bf956a2e215dc41ea2c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate tokens in raw text based on possible contexts.
   *
   * @param string|string[] $value
   *   A string with the raw text containing the raw tokens, or an array of
   *   tokens from token_scan().
   * @param string[] $valid_types
   *   An array of token types that will be used when token replacement is
   *   performed.
   *
   * @return string[]
   *   An array with the invalid tokens in their original raw forms.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TokenInterface',
         'functionName' => 'getInvalidTokensByContext',
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