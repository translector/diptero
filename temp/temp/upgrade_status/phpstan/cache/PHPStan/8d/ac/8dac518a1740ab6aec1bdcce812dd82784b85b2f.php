<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/system/tests/modules/entity_test/src/Entity/EntityTestRev.php-1594234425',
   'data' => 
  array (
    'd30f1e2788c11833bcfd6bd9f86e858d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the test entity class.
 *
 * @ContentEntityType(
 *   id = "entity_test_rev",
 *   label = @Translation("Test entity - revisions"),
 *   handlers = {
 *     "access" = "Drupal\\entity_test\\EntityTestAccessControlHandler",
 *     "view_builder" = "Drupal\\entity_test\\EntityTestViewBuilder",
 *     "form" = {
 *       "default" = "Drupal\\entity_test\\EntityTestForm",
 *       "delete" = "Drupal\\entity_test\\EntityTestDeleteForm",
 *       "delete-multiple-confirm" = "Drupal\\Core\\Entity\\Form\\DeleteMultipleForm"
 *     },
 *     "view_builder" = "Drupal\\entity_test\\EntityTestViewBuilder",
 *     "views_data" = "Drupal\\views\\EntityViewsData",
 *     "route_provider" = {
 *       "html" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   base_table = "entity_test_rev",
 *   revision_table = "entity_test_rev_revision",
 *   admin_permission = "administer entity_test content",
 *   show_revision_ui = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "revision" = "revision_id",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *   },
 *   links = {
 *     "add-form" = "/entity_test_rev/add",
 *     "canonical" = "/entity_test_rev/manage/{entity_test_rev}",
 *     "delete-form" = "/entity_test/delete/entity_test_rev/{entity_test_rev}",
 *     "delete-multiple-form" = "/entity_test_rev/delete_multiple",
 *     "edit-form" = "/entity_test_rev/manage/{entity_test_rev}/edit",
 *     "revision" = "/entity_test_rev/{entity_test_rev}/revision/{entity_test_rev_revision}/view",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTestRev',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efee60a33d77aea9b001e70148541473' => 
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
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTestRev',
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