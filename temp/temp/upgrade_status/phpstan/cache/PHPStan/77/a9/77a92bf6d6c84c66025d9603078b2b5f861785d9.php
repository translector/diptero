<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/hal/src/LinkManager/RelationLinkManagerInterface.php-1594234425',
   'data' => 
  array (
    'bf3036ffd496a8bac60aaa557a2cce30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the URI that corresponds to a field.
   *
   * When using hypermedia formats, this URI can be used to indicate which
   * field the data represents. Documentation about this field can also be
   * provided at this URI.
   *
   * @param string $entity_type
   *   The bundle\'s entity type.
   * @param string $bundle
   *   The bundle name.
   * @param string $field_name
   *   The field name.
   * @param array $context
   *   (optional) Optional serializer/normalizer context.
   *
   * @return string
   *   The corresponding URI (or IANA link relation type) for the field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\LinkManager',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\hal\\LinkManager\\RelationLinkManagerInterface',
         'functionName' => 'getRelationUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59ce9824f44d3ee028866059cfee7240' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a REST URI into internal IDs.
   *
   * @param string $relation_uri
   *   Relation URI (or IANA link relation type) to transform into internal IDs.
   *
   * @return array
   *   Array with keys \'entity_type_id\', \'bundle\' and \'field_name\'. For
   *   backwards compatibility, the entity_type key returns the full entity type
   *   object, this will be removed before Drupal 9.0.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\LinkManager',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\hal\\LinkManager\\RelationLinkManagerInterface',
         'functionName' => 'getRelationInternalIds',
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