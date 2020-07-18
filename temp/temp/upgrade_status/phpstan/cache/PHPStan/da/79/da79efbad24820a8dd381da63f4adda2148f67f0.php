<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/Kernel/ParagraphsEntityMethodsTest.php-1590060906,/var/www/html/web/modules/contrib/paragraphs/tests/src/FunctionalJavascript/ParagraphsTestBaseTrait.php-1590060906,/var/www/html/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1594234425',
   'data' => 
  array (
    'dbf4e1a9a4be3eb0759904ccb37c1c8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests some methods from the Paragraph entity.
 *
 * @group paragraphs
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel',
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7333a426adf74569704254f99ea717ba' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f658f819477afe927c46af30719e1e7e' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae914179a038876fdccd24e5642bb43a' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0eab935883e924746e11139ee7c824f' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb43c4715277bc682b568e51a6eb9af5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88874f397c888b0f718b5d5f72717e97' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'compareFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a7119cf1bcccf1a880a3201d311c9bb' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'generateFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '090eefc2f605a5ef4159bc9456595df8' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf55325dd3e15077bb8748c6014ce51a' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'addParagraphedContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b85d7fa509b08b2217a8445713a72dd' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'addParagraphsField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c37304effeced70ea7ebb9fbef729df8' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'addParagraphsType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85dbbf8bfb5d9c6eafb44bbc2eb6e219' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a82253d2bee7b1182330a856bd9905f' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa19ae6fad15f083008df7ee7b9dea49' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'addFieldtoParagraphType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0fc68a760ba6e3eaa6e61cbfc8155bf' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c6e35eed41d5ad2097c57117fa23b9d' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a12a5351acb5710960da32e556eb40e' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e26198832bbead05d309b24f22cac3ad' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'createEditorialWorkflow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8964be39a6b0169c44b3c568149d2b50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel',
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b976d4e959429c0d434f12360e46595' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel',
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c686a5d97f94b361a9a06d6cf1404d35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the ::label() behavior on the paragraph entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel',
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'testParagraphLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd671ef45fa8cbf3179c7670e338fa6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Kernel',
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Kernel\\ParagraphsEntityMethodsTest',
         'functionName' => 'testParagraphLabel',
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