<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/twig_tweak/tests/src/Functional/TwigTweakTest.php-1589991902,/var/www/html/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1594234425',
   'data' => 
  array (
    '336c880cdc3848854a6b2ecadb0394bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A test for Twig extension.
 *
 * @group twig_tweak
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Functional',
         'uses' => 
        array (
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'media' => 'Drupal\\media\\Entity\\Media',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92f77e0fea23061a92122f490132a0ce' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f4abd7b564e35739c4bd3f651db652f' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32a83c25bcbf5ddbeea0802a2615c296' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c62aa25f0be41d73b6089f811faa849' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => 'getTestFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0037b2db38856405e3ed2d07b967a38' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => 'compareFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '665cab12296d0e26a062f3b8c906312e' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => 'generateFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b91c6e505d0b0689c7eb5137c4c2c10f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Functional',
         'uses' => 
        array (
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'media' => 'Drupal\\media\\Entity\\Media',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8392591f63f944889666f0e40c157c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Functional',
         'uses' => 
        array (
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'media' => 'Drupal\\media\\Entity\\Media',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b9b5f5511837bc9461e193caa1aa3eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests output produced by the Twig extension.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Functional',
         'uses' => 
        array (
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'media' => 'Drupal\\media\\Entity\\Media',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => 'testOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52111b570cdadd967ddd53d0968c077e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\RoleInterface $role */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Functional',
         'uses' => 
        array (
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'media' => 'Drupal\\media\\Entity\\Media',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => 'testOutput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e297654a000184a0450966b5baee1db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that an element specified by a the xpath exists on the current page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Functional',
         'uses' => 
        array (
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'media' => 'Drupal\\media\\Entity\\Media',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => 'assertByXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2db628153e98afa7a1cf3d0df43a8656' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Functional',
         'uses' => 
        array (
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'media' => 'Drupal\\media\\Entity\\Media',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Functional\\TwigTweakTest',
         'functionName' => 'initFrontPage',
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