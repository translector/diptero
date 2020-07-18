<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/system/tests/modules/entity_test/src/Entity/EntityTest.php-1594234425',
   'data' => 
  array (
    'a262be195e9b37e57fad13e688641faa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the test entity class.
 *
 * @ContentEntityType(
 *   id = "entity_test",
 *   label = @Translation("Test entity"),
 *   handlers = {
 *     "list_builder" = "Drupal\\entity_test\\EntityTestListBuilder",
 *     "view_builder" = "Drupal\\entity_test\\EntityTestViewBuilder",
 *     "access" = "Drupal\\entity_test\\EntityTestAccessControlHandler",
 *     "form" = {
 *       "default" = "Drupal\\entity_test\\EntityTestForm",
 *       "delete" = "Drupal\\entity_test\\EntityTestDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *     "views_data" = "Drupal\\entity_test\\EntityTestViewsData"
 *   },
 *   base_table = "entity_test",
 *   admin_permission = "administer entity_test content",
 *   persistent_cache = FALSE,
 *   list_cache_contexts = { "entity_test_view_grants" },
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *   },
 *   links = {
 *     "canonical" = "/entity_test/{entity_test}",
 *     "add-form" = "/entity_test/add",
 *     "edit-form" = "/entity_test/manage/{entity_test}/edit",
 *     "delete-form" = "/entity_test/delete/entity_test/{entity_test}",
 *   },
 *   field_ui_base_route = "entity.entity_test.admin_form",
 * )
 *
 * Note that this entity type annotation intentionally omits the "create" link
 * template. See https://www.drupal.org/node/2293697.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03d1c609bbe22e5d6cd17e165af5e1dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88755ecce65cc8c6d960218b36b9f6ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => 'baseFieldDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a7a39d6839cae0b63a0c63143c9b311' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => 'getOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5da4d27fd34e15a07eca83eca97fa43b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => 'getOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3155d3ea18dbb410a091d674b1e2ff8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => 'setOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c0147335d1f22ab78edf4ad22d1a774' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => 'setOwner',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33c23b1ebb85bd18a4164bca1c1e0b22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the name.
   *
   * @param string $name
   *   Name of the entity.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => 'setName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28b26260c70fe0a88b4c0b64a94e6ca6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the name.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => 'getName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7af377d6b998cd9bad08489f1aaf04c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_test\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\entity_test\\Entity\\EntityTest',
         'functionName' => 'getEntityKey',
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