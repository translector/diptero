<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/src/Functional/TokenUserTest.php-1586203134,/var/www/html/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1594234425',
   'data' => 
  array (
    'fae0eb4009404fe4ee9487326a7a0a3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests user tokens.
 *
 * @group token
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92841e9ce4d6d799578a402151941fd3' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd59f7ce59bef625bc8018165d3ce3ab5' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd6018c7d5b7fe1d899d429026e34377' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a064daef3f8b6bd64ff67473542c59f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1c435bb14a6bfbc85dc768d0b305c78' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => 'compareFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed179450401865a0b0ecc3fad481f8f4' => 
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
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => 'generateFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79de83a17e45a0e5511988f13c5e43e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The user account.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '953d41f05ed8604a8baea5a439a49651' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da836deda99d53ff6e874ce2c6304f7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60ff9713fc91b94423da6a6ecff54faa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the user releated tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => 'testUserTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2c4260513a3bfe3ed392d371ccd3369' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Render\\RendererInterface $renderer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => 'testUserTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7aacc55dd90b87276da3f9c8a71d536' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test user account settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenUserTest',
         'functionName' => 'testUserAccountSettings',
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