<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/drush/drush/includes/filesystem.inc-1593546225',
   'data' => 
  array (
    '31ff50d22d25816e873943a7e49b6cea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deletes the specified file or directory and everything inside it.
 *
 * Usually respects read-only files and folders. To do a forced delete use
 * drush_delete_tmp_dir() or set the parameter $forced.
 *
 * @param string $dir
 *   The file or directory to delete.
 * @param bool $force
 *   Whether or not to try everything possible to delete the directory, even if
 *   it\'s read-only. Defaults to FALSE.
 * @param bool $follow_symlinks
 *   Whether or not to delete symlinked files. Defaults to FALSE--simply
 *   unlinking symbolic links.
 *
 * @return bool
 *   FALSE on failure, TRUE if everything was deleted.
 *
 * @deprecated Use \\Symfony\\Component\\Filesystem\\Filesystem::remove.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_delete_dir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19739473b0b9057d6b6ac0fa56f502bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deletes the contents of a directory.
 *
 * @param string $dir
 *   The directory to delete.
 * @param bool $force
 *   Whether or not to try everything possible to delete the contents, even if
 *   they\'re read-only. Defaults to FALSE.
 *
 * @return bool
 *   FALSE on failure, TRUE if everything was deleted.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_delete_dir_contents',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '846510d1634de1a1d6ac5b97eb92e0f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Recursively create a directory tree.
 *
 * @param path
 *   Path to directory to create.
 *
 * @throws IOException On any directory creation failure
 * @deprecated See \\Symfony\\Component\\Filesystem\\Filesystem::mkdir.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_mkdir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a510f9796e787414c49268db2aadd459' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Save a string to a temporary file. Does not depend on Drupal\'s API.
 * The temporary file will be automatically deleted when drush exits.
 *
 * @param string $data
 * @param string $suffix
 *   Append string to filename. use of this parameter if is discouraged. @see
 *   drush_tempnam().
 * @return string
 *   A path to the file.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_save_data_to_temp_file',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9647804c2752188c5ae61a4d50414c5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the path to a temporary directory.
 *
 * @deprecated Use $this->getConfig()->tmp() in a ConfigAware command.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_find_tmp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e5516fa1c5eca60d4592bf26787b6ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Creates a temporary file, and registers it so that
 * it will be deleted when drush exits.  Whenever possible,
 * drush_save_data_to_temp_file() should be used instead
 * of this function.
 *
 * @param string $suffix
 *   Append this suffix to the filename. Use of this parameter is discouraged as
 *   it can break the guarantee of tempname(). See http://www.php.net/manual/en/function.tempnam.php#42052.
 *   Originally added to support Oracle driver.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_tempnam',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5066953a0d57fd8ba3ac5d1807c5cb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Creates a temporary directory and return its path.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_tempdir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f2479f37c51f7f8ec292ac4e3d40bb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Any file passed in to this function will be deleted
 * when drush exits.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_register_file_for_deletion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5718f5beb3caac6cc54dd030f4ee6400' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Delete all of the registered temporary files.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => '_drush_delete_registered_files',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ee85910a1df40a8500242a342b9ce15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test to see if a file exists and is not empty
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_file_not_empty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '995aab1a190286ee7cbed65583f84548' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return \'TRUE\' if one directory is located anywhere inside
 * the other.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => 'drush_is_nested_directory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28593860ffd959aa492ee42498163ac6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @} End of "defgroup filesystemfunctions".
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'drush' => 'Drush\\Drush',
          'sqlbase' => 'Drush\\Sql\\SqlBase',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'path' => 'Webmozart\\PathUtil\\Path',
        ),
         'className' => NULL,
         'functionName' => NULL,
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