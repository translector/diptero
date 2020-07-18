<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Archiver/ArchiverInterface.php-1594234425',
   'data' => 
  array (
    '6d27744aed5c71867dc1f5b7d82cbfe5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the common interface for all Archiver classes.
 *
 * @see \\Drupal\\Core\\Archiver\\ArchiverManager
 * @see \\Drupal\\Core\\Archiver\\Annotation\\Archiver
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Archiver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Archiver\\ArchiverInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1311e121279cbc542ae74d0a269e1bc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds the specified file or directory to the archive.
   *
   * @param string $file_path
   *   The full system path of the file or directory to add. Only local files
   *   and directories are supported.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Archiver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Archiver\\ArchiverInterface',
         'functionName' => 'add',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e91f92b58131fd997264c2a6e26ef65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes the specified file from the archive.
   *
   * @param string $path
   *   The file name relative to the root of the archive to remove.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Archiver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Archiver\\ArchiverInterface',
         'functionName' => 'remove',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '291efd6d8a14d3bf00ff8be238596e62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extracts multiple files in the archive to the specified path.
   *
   * @param string $path
   *   A full system path of the directory to which to extract files.
   * @param array $files
   *   Optionally specify a list of files to be extracted. Files are
   *   relative to the root of the archive. If not specified, all files
   *   in the archive will be extracted.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Archiver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Archiver\\ArchiverInterface',
         'functionName' => 'extract',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1d5c6c9ad345ab575d11b0db5246d01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Lists all files in the archive.
   *
   * @return array
   *   An array of file names relative to the root of the archive.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Archiver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Archiver\\ArchiverInterface',
         'functionName' => 'listContents',
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