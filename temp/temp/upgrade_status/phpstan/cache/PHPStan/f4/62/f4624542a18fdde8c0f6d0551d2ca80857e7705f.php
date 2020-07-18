<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/system/tests/modules/entity_test/src/Entity/EntityTestMul.php-1594234425',
   'data' => 
  array (
    'b55ff2f4b12fb881e3fd03c36458c5b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the test entity class.
 *
 * @ContentEntityType(
 *   id = "entity_test_mul",
 *   label = @Translation("Test entity - data table"),
 *   handlers = {
 *     "view_builder" = "Drupal\\entity_test\\EntityTestViewBuilder",
 *     "access" = "Drupal\\entity_test\\EntityTestAccessControlHandler",
 *     "form" = {
 *       "default" = "Drupal\\entity_test\\EntityTestForm",
 *       "delete" = "Drupal\\entity_test\\EntityTestDeleteForm"
 *     },
 *     "views_data" = "Drupal\\views\\EntityViewsData",
 *     "route_provider" = {
 *       "html" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   base_table = "entity_test_mul",
 *   data_table = "entity_test_mul_property_data",
 *   admin_permission = "administer entity_test content",
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *   },
 *   links = {
 *     "add-page" = "/entity_test_mul/add",
 *     "add-form" = "/entity_test_mul/add/{type}",
 *     "canonical" = "/entity_test_mul/manage/{entity_test_mul}",
 *     "edit-form" = "/entity_test_mul/manage/{entity_test_mul}/edit",
 *     "delete-form" = "/entity_test/delete/entity_test_mul/{entity_test_mul}",
 *   },
 *   field_ui_base_route = "entity.entity_test_mul.admin_form",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ced4aa4f5baf50529417b93c7d5c410' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTestMul',
         'functionName' => 'baseFieldDefinitions',
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