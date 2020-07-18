<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/tests/src/Functional/EntityReferenceRevisionsAutocompleteTest.php-1583961090,/var/www/html/web/core/modules/field_ui/tests/src/Traits/FieldUiTestTrait.php-1594234425',
   'data' => 
  array (
    '8c1989a2a1a30235349969ae3ef1cc61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the entity_reference_revisions autocomplete.
 *
 * @group entity_reference_revisions
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'blockcontent' => 'Drupal\\block_content\\Entity\\BlockContent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7425807a51a105647167b4c7ef360b43' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ddca5e3b7b480381ea9083b4d0e0b0c' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => 'fieldUIAddNewField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2121b150e6691c5b3108c17220a9d9ee' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => 'fieldUIAddExistingField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e443ba5ba8549759f6e8a9ad8f72fab' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => 'fieldUIDeleteField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '160afc1fbb04b464d2471b23b86380b1' => 
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
          'blockcontent' => 'Drupal\\block_content\\Entity\\BlockContent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '517d5a42d9c0ce1d02401e0b959f3af6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'blockcontent' => 'Drupal\\block_content\\Entity\\BlockContent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6645f9b37f56a91410f3e3fb37f65824' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'blockcontent' => 'Drupal\\block_content\\Entity\\BlockContent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cb71431b08b04afcb7a1df192b34a8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test for autocomplete processing.
   *
   * Tests that processing does not crash when the entity types of the
   * referenced entity and of the entity the field is attached to are different.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'blockcontent' => 'Drupal\\block_content\\Entity\\BlockContent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => 'testEntityReferenceRevisionsAutocompleteProcessing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b363a0a0ae7307946e3cfdaaebbe83a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a custom block from the database based on its title.
   *
   * @param $info
   *   A block title, usually generated by $this->randomMachineName().
   * @param $reset
   *   (optional) Whether to reset the entity cache.
   *
   * @return \\Drupal\\block\\BlockInterface
   *   A block entity matching $info.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'blockcontent' => 'Drupal\\block_content\\Entity\\BlockContent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => 'drupalGetBlockByInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '699e6a469d8a92db6b31a7c0ffc1d180' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a block_content bundle.
   *
   * @param $parameters
   *   An assoc array with name (human readable) and type (bundle machine name)
   *   as keys.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Functional',
         'uses' => 
        array (
          'blockcontent' => 'Drupal\\block_content\\Entity\\BlockContent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'node' => 'Drupal\\node\\Entity\\Node',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Functional\\EntityReferenceRevisionsAutocompleteTest',
         'functionName' => 'createBlockContentType',
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