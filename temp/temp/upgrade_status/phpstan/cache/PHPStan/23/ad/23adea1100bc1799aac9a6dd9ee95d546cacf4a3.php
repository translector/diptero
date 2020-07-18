<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/src/TokenEntityMapperInterface.php-1586203134',
   'data' => 
  array (
    '7cb0cdab1f1bcdff0b42966bbe490702' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return an array of entity type to token type mappings.
   *
   * @return array
   *   An array of mappings with entity type mapping to token type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TokenEntityMapperInterface',
         'functionName' => 'getEntityTypeMappings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41a4fe59e7a1d725a3728bceac6e44b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return the entity type of a particular token type.
   *
   * @param string $token_type
   *   The token type for which the mapping is returned.
   * @param bool $fallback
   *   (optional) Defaults to FALSE. If true, the same $value is returned in
   *   case the mapping was not found.
   *
   * @return string
   *   The entity type of the token type specified.
   *
   * @see token_entity_info_alter()
   * @see http://drupal.org/node/737726
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TokenEntityMapperInterface',
         'functionName' => 'getEntityTypeForTokenType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25add0534f1cdd97c2f55ec0f94faf23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return the token type of a particular entity type.
   *
   * @param string $entity_type
   *   The entity type for which the mapping is returned.
   * @param bool $fallback
   *   (optional) Defaults to FALSE. If true, the same $value is returned in
   *   case the mapping was not found.
   *
   * @return string
   *   The token type of the entity type specified.
   *
   * @see token_entity_info_alter()
   * @see http://drupal.org/node/737726
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TokenEntityMapperInterface',
         'functionName' => 'getTokenTypeForEntityType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65123c30b80488676653331ccf24d0ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets metadata describing token and entity mappings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TokenEntityMapperInterface',
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