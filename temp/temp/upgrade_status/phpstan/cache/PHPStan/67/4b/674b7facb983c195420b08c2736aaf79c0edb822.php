<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/field/tests/src/Kernel/FieldKernelTestBase.php-1594234425',
   'data' => 
  array (
    '0cb1207e8dc3115dcf0bbada6a26afe8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parent class for Field API unit tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Kernel',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Kernel\\FieldKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd873f6ebf49e18e3fc3a835d2e0e941d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Kernel',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Kernel\\FieldKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'adb8a14fc78a8d0d0fc04c5c67089943' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Bag of created field storages and fields.
   *
   * Allows easy access to test field storage/field names/IDs/objects via:
   * - $this->fieldTestData->field_name[suffix]
   * - $this->fieldTestData->field_storage[suffix]
   * - $this->fieldTestData->field_storage_uuid[suffix]
   * - $this->fieldTestData->field[suffix]
   * - $this->fieldTestData->field_definition[suffix]
   *
   * @see \\Drupal\\field\\Tests\\FieldUnitTestBase::createFieldWithStorage()
   *
   * @var \\ArrayObject
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Kernel',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Kernel\\FieldKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a02b8aa55f4163db9aae3c08ea1d3e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set the default field storage backend for fields created during tests.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Kernel',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Kernel\\FieldKernelTestBase',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d4d0b0405346994484f55a47af85882' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a field and an associated field storage.
   *
   * @param string $suffix
   *   (optional) A string that should only contain characters that are valid in
   *   PHP variable names as well.
   * @param string $entity_type
   *   (optional) The entity type on which the field should be created.
   *   Defaults to "entity_test".
   * @param string $bundle
   *   (optional) The entity type on which the field should be created.
   *   Defaults to the default bundle of the entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Kernel',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Kernel\\FieldKernelTestBase',
         'functionName' => 'createFieldWithStorage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7aa7b9e93a42546aecdfd88d3897657c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves and reloads an entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to save.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The entity, freshly reloaded from storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Kernel',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Kernel\\FieldKernelTestBase',
         'functionName' => 'entitySaveReload',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e4811f38ea28ef8e71b592459d1295b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate and save entity. Fail if violations are found.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to save.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Kernel',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Kernel\\FieldKernelTestBase',
         'functionName' => 'entityValidateAndSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f828986c0dc01e055e5d6c90c22d921' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generate random values for a field_test field.
   *
   * @param $cardinality
   *   Number of values to generate.
   *
   * @return
   *   An array of random values, in the format expected for field values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Kernel',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Kernel\\FieldKernelTestBase',
         'functionName' => '_generateTestFieldValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78041a205669a33d4eba5eea6bf1fa7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert that a field has the expected values in an entity.
   *
   * This function only checks a single column in the field values.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to test.
   * @param $field_name
   *   The name of the field to test
   * @param $expected_values
   *   The array of expected values.
   * @param $langcode
   *   (Optional) The language code for the values. Defaults to
   *   \\Drupal\\Core\\Language\\LanguageInterface::LANGCODE_NOT_SPECIFIED.
   * @param $column
   *   (Optional) The name of the column to check. Defaults to \'value\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Kernel',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\field\\Kernel\\FieldKernelTestBase',
         'functionName' => 'assertFieldValues',
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