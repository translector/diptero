<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/tests/src/Functional/EntityReferenceRevisionsNormalizerTest.php-1583961090,/var/www/html/web/core/modules/field_ui/tests/src/Traits/FieldUiTestTrait.php-1594234425',
   'data' => 
  array (
    'dc8c8e2884b6a5188c19a53982c3a741' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsNormalizerTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c20330a709fc02e91ae6c559149ab79f' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsNormalizerTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a2fd502bc8e772094b54b7d6453c93a' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsNormalizerTest',
         'functionName' => 'fieldUIAddNewField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28b70f191e144da2622860381863372b' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsNormalizerTest',
         'functionName' => 'fieldUIAddExistingField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba4bc1c3f109d36b36f80b05bd919833' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsNormalizerTest',
         'functionName' => 'fieldUIDeleteField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '917d5e6cff084802892e6c7b4436efb9' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsNormalizerTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1f21b4e224719d993f0a462edc61a17' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsNormalizerTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '835da34ce5996390c415480d861045a4' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsNormalizerTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ae01700702d72620307ce96e8b1d7e4' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsNormalizerTest',
         'functionName' => 'testEntityReferenceRevisions',
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