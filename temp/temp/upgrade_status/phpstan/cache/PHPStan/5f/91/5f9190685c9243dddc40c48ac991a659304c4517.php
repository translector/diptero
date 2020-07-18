<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/tests/modules/entity_composite_relationship_test/src/Entity/EntityTestCompositeRelationship.php-1583961090,/var/www/html/web/modules/contrib/entity_reference_revisions/src/EntityNeedsSaveTrait.php-1583961090',
   'data' => 
  array (
    'e6b9868e11eb29504b02fae352a156f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the test entity class.
 *
 * @ContentEntityType(
 *   id = "entity_test_composite",
 *   label = @Translation("Test entity - composite relationship"),
 *   base_table = "entity_test_composite",
 *   revision_table = "entity_test_composite_revision",
 *   data_table = "entity_test_composite_field_data",
 *   revision_data_table = "entity_test_composite_field_revision",
 *   content_translation_ui_skip = TRUE,
 *   translatable = TRUE,
 *   entity_revision_parent_type_field = "parent_type",
 *   entity_revision_parent_id_field = "parent_id",
 *   entity_revision_parent_field_name_field = "parent_field_name",
 *   admin_permission = "administer entity_test composite relationship",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "revision" = "revision_id",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_composite_relationship_test\\Entity',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'entitytestmulrev' => 'Drupal\\entity_test\\Entity\\EntityTestMulRev',
        ),
         'className' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87f88b34349e86c10006fe94d835a232' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for EntityNeedsSaveInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46bf6fbb36b2db6426b3cebfcf84fd16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the entity needs to be saved or not.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '127e1d7f0c5fada32a32a7497cbab81e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
         'functionName' => 'needsSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '967893642bddc097fe5e44f697fd9f3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
         'functionName' => 'setNeedsSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38e2c29b7553d3f4b683091752de3781' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8d4df8238a5b78c1c6e65425c64b96a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_composite_relationship_test\\Entity',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
          'entityneedssavetrait' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveTrait',
          'entitytestmulrev' => 'Drupal\\entity_test\\Entity\\EntityTestMulRev',
        ),
         'className' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
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