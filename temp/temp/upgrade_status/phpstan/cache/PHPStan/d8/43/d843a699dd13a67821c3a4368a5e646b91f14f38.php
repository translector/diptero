<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/tests/src/Functional/EntityReferenceRevisionsAdminTest.php-1583961090,/var/www/html/web/core/modules/field_ui/tests/src/Traits/FieldUiTestTrait.php-1594234425',
   'data' => 
  array (
    '59961b47a92a050970dc81345da0f870' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the entity_reference_revisions configuration.
 *
 * @group entity_reference_revisions
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0dfb5db02ba08307d6e1767645be4079' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common functionality for the Field UI test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_ui\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5554e89c4e2d8dc996e9e06d511f1d39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new field through the Field UI.
   *
   * @param string $bundle_path
   *   Admin path of the bundle that the new field is to be attached to.
   * @param string $field_name
   *   The field name of the new field storage.
   * @param string $label
   *   (optional) The label of the new field. Defaults to a random string.
   * @param string $field_type
   *   (optional) The field type of the new field storage. Defaults to
   *   \'test_field\'.
   * @param array $storage_edit
   *   (optional) $edit parameter for drupalPostForm() on the second step
   *   (\'Storage settings\' form).
   * @param array $field_edit
   *   (optional) $edit parameter for drupalPostForm() on the third step (\'Field
   *   settings\' form).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_ui\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => 'fieldUIAddNewField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd17acd81f3678d32b0fb4bf147f54e48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an existing field through the Field UI.
   *
   * @param string $bundle_path
   *   Admin path of the bundle that the field is to be attached to.
   * @param string $existing_storage_name
   *   The name of the existing field storage for which we want to add a new
   *   field.
   * @param string $label
   *   (optional) The label of the new field. Defaults to a random string.
   * @param array $field_edit
   *   (optional) $edit parameter for drupalPostForm() on the second step
   *   (\'Field settings\' form).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_ui\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => 'fieldUIAddExistingField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d05703051d2ac2efed122567688c5df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes a field through the Field UI.
   *
   * @param string $bundle_path
   *   Admin path of the bundle that the field is to be deleted from.
   * @param string $field_name
   *   The name of the field.
   * @param string $label
   *   The label of the field.
   * @param string $bundle_label
   *   The label of the bundle.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field_ui\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => 'fieldUIDeleteField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25baa86035a72ccacb19b851ff7afaa2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd50728798996af84cc29ca2c64cbc89e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24ae3549e3f941b16e6789325e4dc52c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07de5cbcb1951fa277172e576e1713da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the entity reference revisions configuration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => 'testEntityReferenceRevisions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e2154090ba60a2efde87728252b28be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests target bundle settings for an entity reference revisions field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAdminTest',
         'functionName' => 'testMultipleTargetBundles',
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