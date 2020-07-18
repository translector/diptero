<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/field_ui/src/FieldUI.php-1594234425',
   'data' => 
  array (
    'b3ad6250ab991a5ebd9aa0becfbd7bd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Static service container wrapper for Field UI.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_ui',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\field_ui\\FieldUI',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '870a3c742ea5ad516a4de8f279c64a7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the route info for the field overview of a given entity bundle.
   *
   * @param string $entity_type_id
   *   An entity type.
   * @param string $bundle
   *   The entity bundle.
   *
   * @return \\Drupal\\Core\\Url
   *   A URL object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_ui',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\field_ui\\FieldUI',
         'functionName' => 'getOverviewRouteInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92f3893377760c1f83afa371d8eab4db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the next redirect path in a multipage sequence.
   *
   * @param array $destinations
   *   An array of destinations to redirect to.
   *
   * @return \\Drupal\\Core\\Url|null
   *   The next destination to redirect to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_ui',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\field_ui\\FieldUI',
         'functionName' => 'getNextDestination',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28420a4dc349956f9ba1b332833a1dda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the route parameter that should be used for Field UI routes.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The actual entity type, not the bundle (e.g. the content entity type).
   * @param string $bundle
   *   The bundle name.
   *
   * @return array
   *   An array that can be used a route parameter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field_ui',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\field_ui\\FieldUI',
         'functionName' => 'getRouteBundleParameter',
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