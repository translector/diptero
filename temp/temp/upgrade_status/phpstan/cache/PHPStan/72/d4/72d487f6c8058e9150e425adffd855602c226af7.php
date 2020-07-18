<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/focal_point/tests/src/Functional/FocalPointWidgetTest.php-1586383018,/var/www/html/web/core/modules/image/tests/src/Kernel/ImageFieldCreationTrait.php-1594234425,/var/www/html/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1594234425',
   'data' => 
  array (
    '5086a4d4cf7a0cdbc4e7e16ab7e248b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests that the Focal Point widget works properly.
 *
 * @group focal_point
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'imagefieldcreationtrait' => 'Drupal\\Tests\\image\\Kernel\\ImageFieldCreationTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8992731c7e2e1ab51f592fb07da44b87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a helper method for creating Image fields.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\image\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29958497a70e85dc9f830e0374e7ea17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a new image field.
   *
   * @param string $name
   *   The name of the new field (all lowercase), exclude the "field_" prefix.
   * @param string $type_name
   *   The node type that this field will be added to.
   * @param array $storage_settings
   *   (optional) A list of field storage settings that will be added to the
   *   defaults.
   * @param array $field_settings
   *   (optional) A list of instance settings that will be added to the instance
   *   defaults.
   * @param array $widget_settings
   *   (optional) Widget settings to be added to the widget defaults.
   * @param array $formatter_settings
   *   (optional) Formatter settings to be added to the formatter defaults.
   * @param string $description
   *   (optional) A description for the field. Defaults to \'\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\image\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => 'createImageField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69a1fbbbb2f763b6e6099b2c2e1e09ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface $display_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\image\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => 'createImageField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7336eed58e023f5abd710b664c82e3a' => 
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
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af7197bc5ff10540a44232765bd2e142' => 
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
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f54b6aa8c45fa7a24761f62e39db83f' => 
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
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '005293786f61b9760dfc9691b4a2e6b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48d4861f4450c4e0cac012b31bb79a5e' => 
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
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => 'compareFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09e20d4dc05b6ce2512e281123af2992' => 
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
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => 'generateFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9426ed16caa3544f7e19de442e5a30c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'imagefieldcreationtrait' => 'Drupal\\Tests\\image\\Kernel\\ImageFieldCreationTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8fc35a2a682e40065728562a99939d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'imagefieldcreationtrait' => 'Drupal\\Tests\\image\\Kernel\\ImageFieldCreationTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5458d59090a36f77521f9886dcb9a2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\focal_point\\FocalPointManagerInterface $focalPointManager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\focal_point\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'imagefieldcreationtrait' => 'Drupal\\Tests\\image\\Kernel\\ImageFieldCreationTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\focal_point\\Functional\\FocalPointWidgetTest',
         'functionName' => 'testResave',
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