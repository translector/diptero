<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/chosen/modules/chosen_lib/src/Commands/ChosenLibCommands.php-1576067425',
   'data' => 
  array (
    '3eac4db363cf7ab0e05ad0955d19c10d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The Chosen plugin URI.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\chosen_lib\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'loglevel' => 'Psr\\Log\\LogLevel',
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
    '06c105c60834dacce833c7ecb82f8c4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Drush commandfile.
 *
 * In addition to this file, you need a drush.services.yml
 * in root of your module, and a composer.json file that provides the name
 * of the services file to use.
 *
 * See these files for an example of injecting Drupal services:
 *   - http://cgit.drupalcode.org/devel/tree/src/Commands/DevelCommands.php
 *   - http://cgit.drupalcode.org/devel/tree/drush.services.yml
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\chosen_lib\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\chosen_lib\\Commands\\ChosenLibCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fdc6ff0fcc18a1a5f2d50f75a95dc42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Download and install the Chosen plugin.
   *
   * @param string $path
   *   Optional. A path where to install the Chosen plugin. If omitted Drush
   *   will use the default location.
   *
   * @command chosen:plugin
   * @aliases chosenplugin,chosen-plugin
   *
   * @throws \\Exception
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\chosen_lib\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\chosen_lib\\Commands\\ChosenLibCommands',
         'functionName' => 'plugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '214104096de396473073acb044df92e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logs with an arbitrary level.
   *
   * @param string $message
   *   The log message.
   * @param mixed $type
   *   The log type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\chosen_lib\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\chosen_lib\\Commands\\ChosenLibCommands',
         'functionName' => 'drush_log',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b29129435faceae1be3eab5b709673e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @param string $url
   *   The download url.
   * @param mixed $destination
   *   The destination path.
   * @return bool|string
   *   The destination file.
   * @throws \\Exception
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\chosen_lib\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\chosen_lib\\Commands\\ChosenLibCommands',
         'functionName' => 'drush_download_file',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'deb620457f707be67863530929f0708f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @param string $src
   *   The origin filename or directory.
   * @param string $dest
   *   The new filename or directory.
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\chosen_lib\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\chosen_lib\\Commands\\ChosenLibCommands',
         'functionName' => 'drush_move_dir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f25dbed5b1d83fd4f55d008cb15f0f32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @param string $path
   *   The make directory path.
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\chosen_lib\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\chosen_lib\\Commands\\ChosenLibCommands',
         'functionName' => 'drush_mkdir',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61da879f5d0beaebae6e45db1a1bab97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @param string $path
   *   The filename or directory.
   * @param bool $destination
   *   The destination path.
   * @return mixed
   * @throws \\Exception
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\chosen_lib\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\chosen_lib\\Commands\\ChosenLibCommands',
         'functionName' => 'drush_tarball_extract',
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