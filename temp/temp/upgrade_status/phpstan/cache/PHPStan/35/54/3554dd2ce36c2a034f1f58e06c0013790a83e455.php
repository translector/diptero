<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/audiofield/src/Commands/AudiofieldCommands.php-1553712462',
   'data' => 
  array (
    'c8268d96e362d79bddb3328d63c0f50d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Drush commandfile for Audiofield module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\audiofield\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'finder' => 'Symfony\\Component\\Finder\\Finder',
          'client' => 'GuzzleHttp\\Client',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'audiofieldplayermanager' => 'Drupal\\audiofield\\AudioFieldPlayerManager',
        ),
         'className' => 'Drupal\\audiofield\\Commands\\AudiofieldCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5758b2f1af87acecd7808c981427ab4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Library discovery service.
   *
   * @var Drupal\\audiofield\\AudioFieldPlayerManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\audiofield\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'finder' => 'Symfony\\Component\\Finder\\Finder',
          'client' => 'GuzzleHttp\\Client',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'audiofieldplayermanager' => 'Drupal\\audiofield\\AudioFieldPlayerManager',
        ),
         'className' => 'Drupal\\audiofield\\Commands\\AudiofieldCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab7c8d3d581cb2738f3a28812bb0a21a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\audiofield\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'finder' => 'Symfony\\Component\\Finder\\Finder',
          'client' => 'GuzzleHttp\\Client',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'audiofieldplayermanager' => 'Drupal\\audiofield\\AudioFieldPlayerManager',
        ),
         'className' => 'Drupal\\audiofield\\Commands\\AudiofieldCommands',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f0144959167a7cf19aed85dbec64855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Downloads the suggested Audiofield libraries from their remote repos.
   *
   * @param string $installLibrary
   *   The name of the library. If omitted, all libraries will be installed.
   * @param bool $print_messages
   *   Flag indicating if messages should be displayed.
   *
   * @command audiofield:download
   * @aliases audiofield-download
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\audiofield\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'finder' => 'Symfony\\Component\\Finder\\Finder',
          'client' => 'GuzzleHttp\\Client',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'audiofieldplayermanager' => 'Drupal\\audiofield\\AudioFieldPlayerManager',
        ),
         'className' => 'Drupal\\audiofield\\Commands\\AudiofieldCommands',
         'functionName' => 'download',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2db34cb015d11012ad7a9f54edba16ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates Audiofield libraries from their remote repos if out of date.
   *
   * @param string $updateLibrary
   *   The name of the library. If omitted, all libraries will be updated.
   * @param bool $print_messages
   *   Flag indicating if messages should be displayed.
   *
   * @command audiofield:update
   * @aliases audiofield-update
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\audiofield\\Commands',
         'uses' => 
        array (
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'finder' => 'Symfony\\Component\\Finder\\Finder',
          'client' => 'GuzzleHttp\\Client',
          'requestexception' => 'GuzzleHttp\\Exception\\RequestException',
          'audiofieldplayermanager' => 'Drupal\\audiofield\\AudioFieldPlayerManager',
        ),
         'className' => 'Drupal\\audiofield\\Commands\\AudiofieldCommands',
         'functionName' => 'update',
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