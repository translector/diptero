<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/src/Functional/WebformEditorTest.php-1594690523,/var/www/html/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1594234425',
   'data' => 
  array (
    '6b3de151ad1c13813ee2250e884b4f89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests for webform editor.
 *
 * @group webform
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '181dbbe7d838dba20fc7ab1eea098883' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de1d8135bda6f9aef36f5c3f1b647e97' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cdeeea4d74bf7f04db3a026ab8d58ba' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d9aff87a8b3fba16193634fbec74cf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8435aeab41efcf5502db6b6d27bdeca6' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'compareFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '209cd7ea163c74b2ead06f33995c696b' => 
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
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'generateFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63ef20af3aa04620eca7be07aca0cb54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e5f6c5cf8d28aaa3c3cd7b1bd4bf892' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The file usage service.
   *
   * @var \\Drupal\\file\\FileUsage\\FileUsageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba69017033dc6eae115da9d4afcc6e16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b10e21e402f4779ec4988ab0fd7e1552' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests webform entity settings files.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'testWebformSettingsFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20365d2fcde9e9c2b783faacc0a29cd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileInterface[] $images */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'testWebformSettingsFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '001965d48d132226632517d5d58bc37e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests webform configuration files.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'testWebformConfigurationFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58a03308b1481214120ab53cecdcf2f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileInterface[] $images */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'testWebformConfigurationFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b2c09d700b23d2e7d9312a845a72cf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reload images.
   *
   * @param array $images
   *   An array of image files.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\webform\\Functional',
         'uses' => 
        array (
          'file' => 'Drupal\\file\\Entity\\File',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\Tests\\webform\\Functional\\WebformEditorTest',
         'functionName' => 'reloadImages',
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