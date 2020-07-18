<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/FunctionalJavascript/ParagraphsExperimentalClientsideButtonsTest.php-1590060906,/var/www/html/web/modules/contrib/paragraphs/tests/src/FunctionalJavascript/LoginAdminTrait.php-1590060906,/var/www/html/web/core/modules/field_ui/tests/src/Traits/FieldUiTestTrait.php-1594234425,/var/www/html/web/modules/contrib/paragraphs/tests/src/FunctionalJavascript/ParagraphsTestBaseTrait.php-1590060906,/var/www/html/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1594234425,/var/www/html/web/modules/contrib/paragraphs/tests/src/Traits/ParagraphsCoreVersionUiTestTrait.php-1590060906,/var/www/html/web/modules/contrib/paragraphs/tests/src/Traits/ParagraphsLastEntityQueryTrait.php-1590060906',
   'data' => 
  array (
    '098b7f5f4383879e6367d396705d0bb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test paragraphs user interface.
 *
 * @group paragraphs
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ef6cc403d73ab1eae27bea32027f437' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test trait for logging admin in JS tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4903d05cbe96c295cd671fbe086d9287' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an user with admin permissions and log in.
   *
   * @param array $additional_permissions
   *   Additional permissions that will be granted to admin user.
   * @param bool $reset_permissions
   *   Flag to determine if default admin permissions will be replaced by
   *   $additional_permissions.
   *
   * @return object
   *   Newly created and logged in user object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'loginAsAdmin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59ea7556c27439c6280bddf1447b346c' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81bb8dc077ba30bfc7b0fefec5045c6a' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'fieldUIAddNewField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83a8cac693bf7f631d46fa4b5a3e571c' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'fieldUIAddExistingField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62004c40bace949b5425c83f54f451cd' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'fieldUIDeleteField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ace8be2499026d91962b8594a8e76789' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test trait for Paragraphs JS tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd88b3c1e0f138e6f06cfb1498648b226' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create test files from given values.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf714b1e9ed02237448ada82103cb78f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the files were copied to the test files directory.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9dab1166c055479f707ce26b20b14939' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of files that can be used in tests.
   *
   * The first time this method is called, it will call
   * $this->generateFile() to generate binary and ASCII text files in the
   * public:// directory. It will also copy all files in
   * core/tests/fixtures/files to public://. These contain image, SQL, PHP,
   * JavaScript, and HTML files.
   *
   * All filenames are prefixed with their type and have appropriate extensions:
   * - text-*.txt
   * - binary-*.txt
   * - html-*.html and html-*.txt
   * - image-*.png, image-*.jpg, and image-*.gif
   * - javascript-*.txt and javascript-*.script
   * - php-*.txt and php-*.php
   * - sql-*.txt and sql-*.sql
   *
   * Any subsequent calls will not generate any new files, or copy the files
   * over again. However, if a test class adds a new file to public:// that
   * is prefixed with one of the above types, it will get returned as well, even
   * on subsequent calls.
   *
   * @param $type
   *   File type, possible values: \'binary\', \'html\', \'image\', \'javascript\',
   *   \'php\', \'sql\', \'text\'.
   * @param $size
   *   (optional) File size in bytes to match. Defaults to NULL, which will not
   *   filter the returned list by size.
   *
   * @return array[]
   *   List of files in public:// that match the filter(s).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c366719a01806ce3106b69a172210d23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea9b5680da43bf921fb020ea07655a71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compares two files based on size and file name.
   *
   * Callback for uasort() within \\TestFileCreationTrait::getTestFiles().
   *
   * @param object $file1
   *   The first file.
   * @param object $file2
   *   The second class.
   *
   * @return int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'compareFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16d17a1b04d7206bd1bebfc86343ab05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a test file.
   *
   * @param string $filename
   *   The name of the file, including the path. The suffix \'.txt\' is appended
   *   to the supplied file name and the file is put into the public:// files
   *   directory.
   * @param int $width
   *   The number of characters on one line.
   * @param int $lines
   *   The number of lines in the file.
   * @param string $type
   *   (optional) The type, one of:
   *   - text: The generated file contains random ASCII characters.
   *   - binary: The generated file contains random characters whose codes are
   *     in the range of 0 to 31.
   *   - binary-text: The generated file contains random sequence of \'0\' and \'1\'
   *     values.
   *
   * @return string
   *   The name of the file, including the path.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'generateFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e18b47b54a93c52abb38212abf21511' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The workflow entity.
   *
   * @var \\Drupal\\workflows\\WorkflowInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03514a4b0efbfc1a77d27e94fa8cc117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a content type with a Paragraphs field.
   *
   * @param string $content_type_name
   *   Content type name to be used.
   * @param string $paragraphs_field_name
   *   (optional) Field name to be used. Defaults to \'field_paragraphs\'.
   * @param string $widget_type
   *   (optional) Declares if we use experimental or classic widget.
   *   Defaults to \'paragraphs\' for experimental widget.
   *   Use \'entity_reference_paragraphs\' for classic widget.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'addParagraphedContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebace5dbdd11188bc3af6b7b812c346e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a Paragraphs field to a given entity type.
   *
   * @param string $bundle
   *   bundle to be used.
   * @param string $paragraphs_field_name
   *   Paragraphs field name to be used.
   * @param string $entity_type
   *   Entity type where to add the field.
   * @param string $widget_type
   *   (optional) Declares if we use experimental or classic widget.
   *   Defaults to \'paragraphs\' for experimental widget.
   *   Use \'entity_reference_paragraphs\' for classic widget.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'addParagraphsField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61911d091fb2017d73b39077a18b2d7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a Paragraphs type.
   *
   * @param string $paragraphs_type_name
   *   Paragraph type name used to create.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'addParagraphsType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7c51fd16798280eefe016b86a2edc44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an icon to a paragraphs type.
   *
   * @param string $paragraphs_type
   *   Machine name of the paragraph type to add the icon to.
   *
   * @return \\Drupal\\file\\Entity\\File
   *   The file entity used as the icon.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b3853f583cb948dbb1edacb6553b0ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8496ecbb968189ec6174807bf83d21c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a field to a given paragraph type.
   *
   * @param string $paragraph_type_id
   *   Paragraph type ID to be used.
   * @param string $field_name
   *   Field name to be used.
   * @param string $field_type
   *   Type of the field.
   * @param array $storage_settings
   *   Settings for the field storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'addFieldtoParagraphType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05b15f253fe56b7f8a69622a269196d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets some of the settings of a paragraphs field widget.
   *
   * @param string $bundle
   *   Machine name of the bundle (e.g., a content type for nodes, a paragraphs
   *   type for paragraphs, etc.) with a paragraphs field.
   * @param string $paragraphs_field
   *   Machine name of the paragraphs field whose widget (settings) to change.
   * @param array $settings
   *   New setting values keyed by names of settings that are to be set.
   * @param string|null $field_widget
   *   (optional) Machine name of the paragraphs field widget to use. NULL to
   *   keep the current widget.
   * @param string $entity_type
   *   (optional) Machine name of the content entity type that the bundle
   *   belongs to. Defaults to "node".
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3c07ead6d2114ef0ebeefd604a748fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $default_form_display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '134ee6bd989ea9a254e41fc3954ea118' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\WidgetInterface $class */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cca7405d6f66854b746b91a642b12b60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a workflow entity.
   *
   * @param string $bundle
   *   The node bundle.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'file' => 'Drupal\\file\\Entity\\File',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'paragraphstype' => 'Drupal\\paragraphs\\Entity\\ParagraphsType',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'workflow' => 'Drupal\\workflows\\Entity\\Workflow',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'createEditorialWorkflow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc37b8ffe45d9dc8dd570260ccac8a4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods for Drupal 8.3.x and 8.4.x versions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c1f7169a98a254ef3ce245c87a040af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An adapter for 8.3 > 8.4 Save (and (un)publish) node button change.
   *
   * Arguments are the same as WebTestBase::drupalPostForm.
   *
   * @see \\Drupal\\simpletest\\WebTestBase::drupalPostForm
   * @see https://www.drupal.org/node/2847274
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   Location of the post form.
   * @param array $edit
   *   Field data in an associative array.
   * @param mixed $submit
   *   Value of the submit button whose click is to be emulated. For example,
   * @param array $options
   *   (optional) Options to be forwarded to the url generator.
   * @param array $headers
   *   (optional) An array containing additional HTTP request headers.
   * @param string $form_html_id
   *   (optional) HTML ID of the form to be submitted.
   * @param string $extra_post
   *   (optional) A string of additional data to append to the POST submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'paragraphsPostNodeForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21908fc11edb89af5a81f8760bc3a991' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test trait providing helpers to query latest entities created.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b5956a8175d5f47659895421c45b6c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the latest entity created of a given type.
   *
   * Will fail the test if there is no entity of that type.
   *
   * @param string $entity_type_id
   *   The storage name of the entity.
   * @param bool $load
   *   (optional) Whether or not the return thould be the loaded entity.
   *   Defaults to FALSE.
   *
   * @return mixed
   *   The ID of the latest created entity of that type. If $load is TRUE, will
   *   use ::loadUnchanged() to get a fresh version of the entity object and
   *   return it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'getLastEntityOfType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63c71bcf1fdc58f9abcea978128235e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4807b786e5d82d2ed8bc507d6d6d207' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b241a8b50793aca6c4b5da4c94e4fecd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the "Add above" button.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalClientsideButtonsTest',
         'functionName' => 'testAddParagraphAboveButton',
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