<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/Functional/Experimental/ParagraphsExperimentalAccessTest.php-1590060906,/var/www/html/web/core/modules/field_ui/tests/src/Traits/FieldUiTestTrait.php-1594234425',
   'data' => 
  array (
    '0ffec599db32709572ecae501866c8a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the access check of paragraphs.
 *
 * @group paragraphs
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalAccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8696a940c15bb4ba7016dbfcd4ae1e73' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalAccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9c3304a023483fd56a6359465c126b6' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalAccessTest',
         'functionName' => 'fieldUIAddNewField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f2e040376b2d740170e525c15abb29b' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalAccessTest',
         'functionName' => 'fieldUIAddExistingField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ffd201c735810b44d9be2e591509eaa' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalAccessTest',
         'functionName' => 'fieldUIDeleteField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d134ac2017e65c9138242a42831bd43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalAccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a33b83a826bf389d70cf3df7b2d7ffb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalAccessTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79f72cf8eef0778971c60976e131ef1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the Paragraph access and permissions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalAccessTest',
         'functionName' => 'testParagraphAccessCheck',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '582bccc41aa99f2f8ed7aec4f99a1137' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the Paragraph validation with filter access.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalAccessTest',
         'functionName' => 'testParagraphsTextFormatValidation',
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