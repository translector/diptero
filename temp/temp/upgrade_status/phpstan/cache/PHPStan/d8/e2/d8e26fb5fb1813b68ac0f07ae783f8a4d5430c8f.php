<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/FunctionalJavascript/ParagraphsExperimentalAddWidgetTest.php-1590060906,/var/www/html/web/modules/contrib/paragraphs/tests/src/FunctionalJavascript/LoginAdminTrait.php-1590060906,/var/www/html/web/core/modules/field_ui/tests/src/Traits/FieldUiTestTrait.php-1594234425,/var/www/html/web/modules/contrib/paragraphs/tests/src/FunctionalJavascript/ParagraphsTestBaseTrait.php-1590060906,/var/www/html/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1594234425,/var/www/html/web/modules/contrib/paragraphs/tests/src/Traits/ParagraphsCoreVersionUiTestTrait.php-1590060906',
   'data' => 
  array (
    '5d64c778975b79d8df634cf3ceb568a7' => 
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
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f695959f46d38ff6f8f80a5746aa2b40' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7a0274acd81f0256e454b752bfe9983' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'loginAsAdmin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a953af1ea7b076d30b1667af628a4996' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '057acaf0790f12eee569c6b47fe0b017' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'fieldUIAddNewField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9023b99bf441ff4a2435d18b9f12a427' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'fieldUIAddExistingField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed8c44cadbcb40d1f7545fa090c7d46a' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'fieldUIDeleteField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd414625b67ca80ffbb67a71b693cc548' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd97ee3935659d2a93285b98123a6d869' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78a937f35df16d318a6ada80fe9904da' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83fe46c83258b086b33594283a23fbcb' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47948a6825106edac47c70f00ef83601' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a70ca3da88a0c5246f77efd4741860d' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'compareFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4aefe8b6a43faaa513224256ada34d94' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'generateFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88f42cbc53f6e284ff53ddb407e41e6e' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edd1c2dd7c6dcc8f5f56ce64e335d428' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'addParagraphedContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2a9f52dac76d8c7c4bceff290796767' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'addParagraphsField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ed2ea7d5f727ef369dc5e33a4f4647f' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'addParagraphsType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1893dcb5388429d4e5d27da270e9ba9' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75816b287c869de656b9b97f189a6730' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f91a4c6b561ec6968e24361923308383' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'addFieldtoParagraphType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f4bd19403597452f32328960ab6873c' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '510352047c1069e4ba930d13bd5ee3d3' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01cca4504e2fdbf670e2fcb78c68b754' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bbfe0f65529959a0a54bbf23ed6e985a' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'createEditorialWorkflow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32b9e901c0ee95cdbe46469fe5b69469' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3df42c37581b767821fce3a8b43bc895' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'paragraphsPostNodeForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86165c1a8f0b082b2d071f7f4523b861' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6a1f3b8b7b0b1608e2e87917023a515' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89d5df8b9f68af3dc954dc94d31c4d6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '076297481e533465fa4e89f5bb8d8f25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the add widget button with modal form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'testAddWidgetButton',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f01d447e8950f3f4e92b596a48912cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test Modal add widget with hidden delta field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'paragraphscoreversionuitesttrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsCoreVersionUiTestTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsExperimentalAddWidgetTest',
         'functionName' => 'testModalAddWidgetDelta',
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