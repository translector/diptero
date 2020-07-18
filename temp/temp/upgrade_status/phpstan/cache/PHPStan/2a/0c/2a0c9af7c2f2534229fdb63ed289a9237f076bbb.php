<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/Functional/Experimental/ParagraphsExperimentalTestBase.php-1590060906,/var/www/html/web/modules/contrib/paragraphs/tests/src/FunctionalJavascript/ParagraphsTestBaseTrait.php-1590060906,/var/www/html/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1594234425',
   'data' => 
  array (
    'a889c2b48d9d6ea5b0f91a654976c8fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'paragraphstestbase' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd31c383d1f10c26c7c17e3b289742ee5' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4258d5c998772663813c132e01fec7cb' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89cbb7ca2bafe5b9612665ff9fc59895' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'daf332da0ff927edcc44a5bd882dbe6f' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0b57bdf0dec68ce4f6fa996d684a65e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fca150c0981766959119f33dc472b42' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'compareFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4970a7b2c315b8ff10786ad7d7065936' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'generateFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efe4a5fb6cd3bebcfc8518dafc2a41ca' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30d61882c9d286cfebe885252a18de37' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'addParagraphedContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d4ee098f6a6377cb07839e1c5523d4b' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'addParagraphsField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5947b6db238e48b4cf60e25638967e16' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'addParagraphsType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e265b8b778dc5b7074bd67dd78f90cc0' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e11044b669f72778ebbe9ffac815fbd' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'addParagraphsTypeIcon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e735cd8aac70ff4dc1e61e805150c2b5' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'addFieldtoParagraphType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c9309e2edd122c2b7c4ef44b2488d16' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37955598e8e7f3d5b4d26fc47579a89e' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab5c7e768e139ca0aef5187dce9c09bd' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'setParagraphsWidgetSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0ffd43b594faa0ca8698c4fddee0786' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'createEditorialWorkflow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f433be85f6d6aa555dac994f00fe5f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the Paragraphs widget add mode.
   *
   * @param string $content_type
   *   Content type name where to set the widget mode.
   * @param string $paragraphs_field
   *   Paragraphs field to change the mode.
   * @param string $mode
   *   Mode to be set. (\'dropdown\', \'select\' or \'button\').
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'paragraphstestbase' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'setAddMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c903c9a5d88ec09f83066bf9a94013b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes the default paragraph type.
   *
   * @param $content_type
   *   Content type name that contains the paragraphs field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'paragraphstestbase' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsTestBase',
          'paragraphstestbasetrait' => 'Drupal\\Tests\\paragraphs\\FunctionalJavascript\\ParagraphsTestBaseTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTestBase',
         'functionName' => 'removeDefaultParagraphType',
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