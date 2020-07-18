<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/symfony/filesystem/Filesystem.php-1590860904',
   'data' => 
  array (
    'f9d01d55d32c13f1943eac6434aa38e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides basic utility to manipulate the file system.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bdc175a31a2ddb8f1b9e5f764bf514e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Copies a file.
     *
     * If the target file is older than the origin file, it\'s always overwritten.
     * If the target file is newer, it is overwritten only when the
     * $overwriteNewerFiles option is set to true.
     *
     * @param string $originFile          The original filename
     * @param string $targetFile          The target filename
     * @param bool   $overwriteNewerFiles If true, target files newer than origin files are overwritten
     *
     * @throws FileNotFoundException When originFile doesn\'t exist
     * @throws IOException           When copy fails
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'copy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b14e196439c25b05db61e84b2ffecf4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a directory recursively.
     *
     * @param string|iterable $dirs The directory path
     * @param int             $mode The directory mode
     *
     * @throws IOException On any directory creation failure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'mkdir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2adf1f2b8f2f4a41edb0381a36cee3c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks the existence of files or directories.
     *
     * @param string|iterable $files A filename, an array of files, or a \\Traversable instance to check
     *
     * @return bool true if the file exists, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'exists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f8ecaad8acc1dcfaa3b2badee6f3b4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets access and modification time of file.
     *
     * @param string|iterable $files A filename, an array of files, or a \\Traversable instance to create
     * @param int|null        $time  The touch time as a Unix timestamp, if not supplied the current system time is used
     * @param int|null        $atime The access time as a Unix timestamp, if not supplied the current system time is used
     *
     * @throws IOException When touch fails
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'touch',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18367ae1c1d744ead0aec4f854e06aa9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes files or directories.
     *
     * @param string|iterable $files A filename, an array of files, or a \\Traversable instance to remove
     *
     * @throws IOException When removal fails
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'remove',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9e29910cc81fa1a8708330091d78633' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Change mode for an array of files or directories.
     *
     * @param string|iterable $files     A filename, an array of files, or a \\Traversable instance to change mode
     * @param int             $mode      The new mode (octal)
     * @param int             $umask     The mode mask (octal)
     * @param bool            $recursive Whether change the mod recursively or not
     *
     * @throws IOException When the change fails
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'chmod',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '161ad8ef0f5b0115faa678ab3a0dec87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Change the owner of an array of files or directories.
     *
     * @param string|iterable $files     A filename, an array of files, or a \\Traversable instance to change owner
     * @param string|int      $user      A user name or number
     * @param bool            $recursive Whether change the owner recursively or not
     *
     * @throws IOException When the change fails
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'chown',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b17a39e855eff0618e3b4be79905ac89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Change the group of an array of files or directories.
     *
     * @param string|iterable $files     A filename, an array of files, or a \\Traversable instance to change group
     * @param string|int      $group     A group name or number
     * @param bool            $recursive Whether change the group recursively or not
     *
     * @throws IOException When the change fails
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'chgrp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22e3ea6b2ca2a91c376bb22b9bae0c8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Renames a file or a directory.
     *
     * @param string $origin    The origin filename or directory
     * @param string $target    The new filename or directory
     * @param bool   $overwrite Whether to overwrite the target if it already exists
     *
     * @throws IOException When target file or directory already exists
     * @throws IOException When origin cannot be renamed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'rename',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02063bf98a6fdfdb1334de12039d301d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Tells whether a file exists and is readable.
     *
     * @param string $filename Path to the file
     *
     * @return bool
     *
     * @throws IOException When windows path is longer than 258 characters
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'isReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e4e692b08d334a66be182034b1214ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a symbolic link or copy a directory.
     *
     * @param string $originDir     The origin directory path
     * @param string $targetDir     The symbolic link name
     * @param bool   $copyOnWindows Whether to copy files if on Windows
     *
     * @throws IOException When symlink fails
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'symlink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af858596dc24b4446c30e39bd17f0ee0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a hard link, or several hard links to a file.
     *
     * @param string          $originFile  The original file
     * @param string|string[] $targetFiles The target file(s)
     *
     * @throws FileNotFoundException When original file is missing or not a file
     * @throws IOException           When link fails, including if link already exists
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'hardlink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3296110d42c380c29ed735bea343475' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $origin
     * @param string $target
     * @param string $linkType Name of the link type, typically \'symbolic\' or \'hard\'
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'linkException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ae2dc99f0350c31c0e259ec48df8c86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resolves links in paths.
     *
     * With $canonicalize = false (default)
     *      - if $path does not exist or is not a link, returns null
     *      - if $path is a link, returns the next direct target of the link without considering the existence of the target
     *
     * With $canonicalize = true
     *      - if $path does not exist, returns null
     *      - if $path exists, returns its absolute fully resolved final version
     *
     * @param string $path         A filesystem path
     * @param bool   $canonicalize Whether or not to return a canonicalized path
     *
     * @return string|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'readlink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90317e53589f416cdbdc522af89018f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Given an existing path, convert it to a path relative to a given starting path.
     *
     * @param string $endPath   Absolute path of target
     * @param string $startPath Absolute path where traversal begins
     *
     * @return string Path of target relative to starting path
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'makePathRelative',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6098f0797adb226647e6b47768d86efe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mirrors a directory to another.
     *
     * Copies files and directories from the origin directory into the target directory. By default:
     *
     *  - existing files in the target directory will be overwritten, except if they are newer (see the `override` option)
     *  - files in the target directory that do not exist in the source directory will not be deleted (see the `delete` option)
     *
     * @param string            $originDir The origin directory
     * @param string            $targetDir The target directory
     * @param \\Traversable|null $iterator  Iterator that filters which files and directories to copy, if null a recursive iterator is created
     * @param array             $options   An array of boolean options
     *                                     Valid options are:
     *                                     - $options[\'override\'] If true, target files newer than origin files are overwritten (see copy(), defaults to false)
     *                                     - $options[\'copy_on_windows\'] Whether to copy files instead of links on Windows (see symlink(), defaults to false)
     *                                     - $options[\'delete\'] Whether to delete files that are not in the source directory (defaults to false)
     *
     * @throws IOException When file type is unknown
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'mirror',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d83f067b04d65874b37c36f0774545b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether the file path is an absolute path.
     *
     * @param string $file A file path
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'isAbsolutePath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2acdd9458dbcc70a235d83d142d7fd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a temporary file with support for custom stream wrappers.
     *
     * @param string $dir    The directory where the temporary filename will be created
     * @param string $prefix The prefix of the generated temporary filename
     *                       Note: Windows uses only the first three characters of prefix
     *
     * @return string The new temporary filename (with path), or throw an exception on failure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'tempnam',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '633974336430e104729bca2b9030b009' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Atomically dumps content into a file.
     *
     * @param string $filename The file to be written to
     * @param string $content  The data to write into the file
     *
     * @throws IOException if the file cannot be written to
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'dumpFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '975855f3b48ba3a9f1b616e17f158316' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Appends content to an existing file.
     *
     * @param string $filename The file to which to append content
     * @param string $content  The content to append
     *
     * @throws IOException If the file is not writable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'appendToFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '688f98be03004e5f1fa2b0f832c59c27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param mixed $files
     *
     * @return array|\\Traversable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'toIterable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac253a7eacb3150545d9a78fcaf3973a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a 2-tuple of scheme (may be null) and hierarchical part of a filename (e.g. file:///tmp -> [file, tmp]).
     *
     * @param string $filename The filename to be parsed
     *
     * @return array The filename scheme and hierarchical part
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'getSchemeAndHierarchy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fe66535bafaf4e8670deba4e742c30d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param callable $func
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'box',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53deaeace452c1692c869b3ab5aa3730' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Filesystem',
         'uses' => 
        array (
          'filenotfoundexception' => 'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException',
          'ioexception' => 'Symfony\\Component\\Filesystem\\Exception\\IOException',
        ),
         'className' => 'Symfony\\Component\\Filesystem\\Filesystem',
         'functionName' => 'handleError',
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