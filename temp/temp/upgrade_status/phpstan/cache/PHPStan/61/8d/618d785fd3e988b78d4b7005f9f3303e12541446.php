<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/Functional/Classic/ParagraphsAccessTest.php-1590060906,/var/www/html/web/core/modules/field_ui/tests/src/Traits/FieldUiTestTrait.php-1594234425',
   'data' => 
  array (
    '41145e1b1e4769ab31d353ab31fdb8a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the access check of paragraphs.
 *
 * @group paragraphs
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsAccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '130840c652b1a96fd5321b84e4a1952c' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsAccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fba40537b36c40175ffb573b562aa14' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsAccessTest',
         'functionName' => 'fieldUIAddNewField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4e21209754da9795d1a859d2451561f' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsAccessTest',
         'functionName' => 'fieldUIAddExistingField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bb92a5decacccad95e9d8950a1ccded' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsAccessTest',
         'functionName' => 'fieldUIDeleteField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8de9f7a7b0f21db8bfc852fe7d6f1506' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsAccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51a5ef7a0834c2dcfec4c2a7c580cd10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsAccessTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ed9e52a74e1e6e9ff25b7f3d4e041a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the paragraph translation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsAccessTest',
         'functionName' => 'testParagraphAccessCheck',
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