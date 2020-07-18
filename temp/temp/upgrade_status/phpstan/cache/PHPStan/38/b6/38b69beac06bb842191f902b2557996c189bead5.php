<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/modules/paragraphs_library/tests/src/FunctionalJavascript/ParagraphsContentModerationTest.php-1590060906,/var/www/html/web/modules/contrib/paragraphs/tests/src/FunctionalJavascript/ParagraphsTestBaseTrait.php-1590060906,/var/www/html/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1594234425,/var/www/html/web/core/modules/field_ui/tests/src/Traits/FieldUiTestTrait.php-1594234425,/var/www/html/web/modules/contrib/paragraphs/tests/src/Traits/ParagraphsLastEntityQueryTrait.php-1590060906',
   'data' => 
  array (
    'c7c2e1be181184a5490774e677237154' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests Paragraphs, Paragraphs Library and Content Moderation integration.
 *
 * @group paragraphs_library
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ca2a85787e07b2d6395f73040ac1d99' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ed7e674146d347b943532e656aecc33' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '052e53adf2f13ed669a2867d2b275276' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a4be1d83c71ffc6305c0075d94fed4d' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98a208ade5b696a4b821731971486833' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73ebd7069f25f2cef57bd874a94e326c' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'compareFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff752c7e150ad2d34cda1bbfcd2ed958' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'generateFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78b0040a5c172b94e44e5c513c7227c3' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2469c3abccd6ef7dfea779ee5e34be67' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'addParagraphedContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1afbd302c8aec557d3ce00a187104f4e' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'addParagraphsField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf856d2f0a76022d623a1eb60a2fd90d' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'addParagraphsType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b52cfe6cefe13e533d6d16e3dccb41d3' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63335f212187ee571744cf4ae0ba9914' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1154c2feda98435dba4e671906a86ed5' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'addFieldtoParagraphType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cbd0899bdff7ff00945023c72fcd643' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c46babb560ead02a2b1f24566af024d' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97144b81ca589008e8bb27b69b6fd6b0' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd0055ba442a079a326deccb97d309ff' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'createEditorialWorkflow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '896425ea88372214bb13421c6c9c49ec' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90745451378f1863df2b64415d8805ce' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'fieldUIAddNewField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '171930ccd0dbba3fdbfb4520faac305d' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'fieldUIAddExistingField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6f53295598afab521d2cf75737d0d77' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'fieldUIDeleteField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71a9b39ac537f5470bf7bbb5b4761beb' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83f25104c6749dccec6288d4be1fc797' => 
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
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'getLastEntityOfType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ede72e99bcb75cfe2540af9a94c3f532' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A user with permission to bypass access content.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc7bba07a2379a60ca2d4d1f12c206e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A user with permission to see content.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e6de49214b2cc9f805c65b21b1e446b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A user with basic permissions to edit and moderate content.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1cd591dce7d2996ab33f7c63113b0b5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c73b16ac945f0976bdfe4f6e855e82e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55e18f1eaaab5617392b7c1c253409c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the moderated paragraphed content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'testModeratedParagraphedContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3290e77ba718a8410b4fa8a1a0461e91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the moderated content that includes nested paragraphs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'testModeratedContentNestedParagraphs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6796d7ca3db4433c1433d59dd09c03a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieve a table row containing specified text from a given element.
   *
   * @param \\Behat\\Mink\\Element\\Element $table
   *   The table element.
   * @param string $search
   *   The text to search for in the table row.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement
   *   The row element.
   *
   * @throws \\Exception
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript',
         'uses' => 
        array (
          'element' => 'Behat\\Mink\\Element\\Element',
          'fielduitesttrait' => 'Drupal\\Tests\\field_ui\\Traits\\FieldUiTestTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs_library\\FunctionalJavascript\\ParagraphsContentModerationTest',
         'functionName' => 'getTableRowWithText',
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