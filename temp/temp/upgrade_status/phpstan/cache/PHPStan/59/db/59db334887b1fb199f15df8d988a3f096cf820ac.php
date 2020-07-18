<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/modules/video_embed_media/modules/vem_migrate_oembed/src/Commands/VemCommands.php-1587685827',
   'data' => 
  array (
    '556a8301998394f270a1f728e9060a4b' => 
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
         'namespace' => 'Drupal\\vem_migrate_oembed\\Commands',
         'uses' => 
        array (
          'vemmigrate' => 'Drupal\\vem_migrate_oembed\\VemMigrate',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
        ),
         'className' => 'Drupal\\vem_migrate_oembed\\Commands\\VemCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ce153c887afc78e3ba63ac58654bab8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The migrate service.
   *
   * @var \\Drupal\\vem_migrate_oembed\\VemMigrate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\vem_migrate_oembed\\Commands',
         'uses' => 
        array (
          'vemmigrate' => 'Drupal\\vem_migrate_oembed\\VemMigrate',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
        ),
         'className' => 'Drupal\\vem_migrate_oembed\\Commands\\VemCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d84e76ce6da453a12b4f2885a2681d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * VemCommands constructor.
   *
   * @param \\Drupal\\vem_migrate_oembed\\VemMigrate $migrator
   *   The migrate service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\vem_migrate_oembed\\Commands',
         'uses' => 
        array (
          'vemmigrate' => 'Drupal\\vem_migrate_oembed\\VemMigrate',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
        ),
         'className' => 'Drupal\\vem_migrate_oembed\\Commands\\VemCommands',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ea6f188ab08ce343299c610da367a90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Migrates from VEF to core media.
   *
   * @usage drush vemmo
   *   Migrates from VEF to core media.
   *
   * @command vem:migrate_oembed
   * @aliases vemmo
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\vem_migrate_oembed\\Commands',
         'uses' => 
        array (
          'vemmigrate' => 'Drupal\\vem_migrate_oembed\\VemMigrate',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
        ),
         'className' => 'Drupal\\vem_migrate_oembed\\Commands\\VemCommands',
         'functionName' => 'migrate',
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