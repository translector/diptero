<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/audiofield/drush/audiofield.drush.inc-1553712462',
   'data' => 
  array (
    'a081c9d2c9c79ba6af5837b1135625e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_drush_command().
 *
 * Defining a drush command to install the Audiofield external libraries.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'audiofield_drush_command',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a039d2974a8d00f0abab0803f9398c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_drush_help().
 *
 * Help description for the audiofield drush command.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'audiofield_drush_help',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a43cc9f5b723be2d9394ed77765d848' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drush command callback.
 *
 * Updates the external libraries required for Audiofield plugins.
 *
 * @param string $updateLibrary
 *   The name of the library to be updated, or blank for all libraries.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'audiofield_drush_lib_update',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f187eb2575c12bbab16b6f30be9b08e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drush command callback.
 *
 * Installs the external libraries required for Audiofield plugins.
 *
 * @param string $installLibrary
 *   The name of the library to be installed, or blank for all libraries.
 * @param bool $print_messages
 *   Flag to indicate if messages should be printed.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'audiofield_drush_lib_download',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98be1457ccad49e3af33c3e9b8910544' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements drush_MODULE_post_COMMAND().
 *
 * This is used to install libraries after the module is enabled in drush.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'drush_audiofield_post_pm_enable',
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