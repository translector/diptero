<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Commands/WebformCommands.php-1594690523',
   'data' => 
  array (
    '11b9f36e1eea641abbe979c2d34cc79a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform commands for Drush 9.x.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06a58fa60ccdf1a5cc67ef39453a0365' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook validate webform:export
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_export_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82d5ba263a6c196839875f12749c0973' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Exports webform submissions to a file.
   *
   * @command webform:export
   * @param $webform The webform ID you want to export (required unless --entity-type and --entity-id are specified)
   * @option exporter The type of export. (delimited, table, yaml, or json)
   * @option delimiter Delimiter between columns (defaults to site-wide setting). This option may need to be wrapped in quotes. i.e. --delimiter="\\t".
   * @option multiple-delimiter Delimiter between an element with multiple values (defaults to site-wide setting).
   * @option file-name File name used to export submission and uploaded filed. You may use tokens.
   * @option archive-type Archive file type for submission file uploadeds and generated records. (tar or zip)
   * @option header-format Set to "label" (default) or "key"
   * @option options-item-format Set to "label" (default) or "key". Set to "key" to print select list values by their keys instead of labels.
   * @option options-single-format Set to "separate" (default) or "compact" to determine how single select list values are exported.
   * @option options-multiple-format Set to "separate" (default) or "compact" to determine how multiple select list values are exported.
   * @option entity-reference-items Comma-separated list of entity reference items (id, title, and/or url) to be exported.
   * @option excluded-columns Comma-separated list of component IDs or webform keys to exclude.
   * @option uuid  Use UUIDs for all entity references. (Only applies to CSV download)
   * @option entity-type The entity type to which this submission was submitted from.
   * @option entity-id The ID of the entity of which this webform submission was submitted from.
   * @option range-type Range of submissions to export: "all", "latest", "serial", "sid", or "date".
   * @option range-latest Integer specifying the latest X submissions will be downloaded. Used if "range-type" is "latest" or no other range options are provided.
   * @option range-start The submission ID or start date at which to start exporting.
   * @option range-end The submission ID or end date at which to end exporting.
   * @option order The submission order "asc" (default) or "desc".
   * @option state Submission state to be included: "completed", "draft" or "all" (default).
   * @option sticky Flagged/starred submission status.
   * @option files Download files: "1" or "0" (default). If set to 1, the exported CSV file and any submission file uploads will be download in a gzipped tar file.
   * @option destination The full path and filename in which the CSV or archive should be stored. If omitted the CSV file or archive will be outputted to the command line.
   * @aliases wfx,webform-export
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_export',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15e186f62738a5a520a792128f616417' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook validate webform:import
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_import_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e68e8405df4bdf2c7d4f99398c4b404' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Imports webform submissions from a CSV file.
   *
   * @command webform:import
   * @param $webform The webform ID you want to import (required unless --entity-type and --entity-id are specified)
   * @param $import_uri The path or URI for the CSV file to be imported.
   * @option skip_validation Skip form validation.
   * @option treat_warnings_as_errors Treat all warnings as errors.
   * @option entity-type The entity type to which this submission was submitted from.
   * @option entity-id The ID of the entity of which this webform submission was submitted from.
   * @aliases wfi,webform-import
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_import',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e211a4a93120d112d12365b5089d6799' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook validate webform:purge
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_purge_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c017bab104bf8a12fb0f3ee6adecec79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Purge webform submissions from the databases
   *
   * @command webform:purge
   * @param $webform_id A webform machine name. If not provided, user may choose from a list of names.
   * @option all Flush all submissions
   * @option entity-type The entity type for webform submissions to be purged
   * @option entity-id The ID of the entity for webform submissions to be purged
   * @usage drush webform:purge
   *   Pick a webform and then purge its submissions.
   * @usage drush webform:purge contact
   *   Delete \'Contact\' webform submissions.
   * @usage drush webform:purge ::all
   *   Purge all webform submissions.
   * @aliases wfp,webform-purge
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_purge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '895f5e5b2a608c483e8f14f4a1933a75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook validate webform:tidy
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_tidy_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf6afa5301a2d78865e863bcf1fbd129' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tidy export webform configuration files
   *
   * @command webform:tidy
   * @param $target The module (config/install), config directory (sync), or path (/some/path) that needs its YAML configuration files tidied. (Defaults to webform)
   * @option dependencies Add module dependencies to installed webform and options configuration entities.
   * @option prefix Prefix for file names to be tidied. (Defaults to webform)
   * @usage drush webform:tidy webform
   *   Tidies YAML configuration files in \'webform/config\' for the Webform module
   * @aliases wft,webform-tidy
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_tidy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82f3fb5e3288e774f64852f2fc716b76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Displays the status of third party libraries required by the Webform module.
   *
   * @command webform:libraries:status
   * @usage webform:libraries:status
   *   Displays the status of third party libraries required by the Webform module.
   * @aliases wfls,webform-libraries-status
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_libraries_status',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f578a92804507a8cc914c19d1a310a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates libraries YAML to be included in a drush.make.yml files.
   *
   * @command webform:libraries:make
   * @usage webform:libraries:make
   *   Generates libraries YAML to be included in a drush.make.yml file.
   * @aliases wflm,webform-libraries-make
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_libraries_make',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ab3a7061bb3117b087ebbf05ef6587e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates the Webform module\'s composer.json with libraries as repositories.
   *
   * @command webform:libraries:composer
   * @option disable-tls If set to true all HTTPS URLs will be tried with HTTP instead and no network level encryption is performed.
   * @usage webform:libraries:composer
   *   Generates the Webform module\'s composer.json with libraries as repositories.
   * @aliases wflc,webform-libraries-composer
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_libraries_composer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71118b08b7492e9e90dbe0dc4b50f74f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Download third party libraries required by the Webform module.
   *
   * @command webform:libraries:download
   * @usage webform:libraries:download
   *   Download third party libraries required by the Webform module.
   * @aliases wfld,webform-libraries-download
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_libraries_download',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9330834cec88930000280cb5269bf04a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes all downloaded third party libraries required by the Webform module.
   *
   * @command webform:libraries:remove
   * @usage webform:libraries:remove
   *   Removes all downloaded third party libraries required by the Webform module.
   * @aliases wflr,webform-libraries-remove
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_libraries_remove',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55cc375e4a037a261c89fb53d00abe61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook validate webform:generate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_generate_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9664847fc4fb5cc79b7ad6e2b33b8048' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create submissions in specified webform.
   *
   * @command webform:generate
   * @param $webform_id Webform id into which new submissions will be inserted.
   * @param $num Number of submissions to insert. Defaults to 50.
   * @option kill Delete all submissions in specified webform before generating.
   * @option feedback An integer representing interval for insertion rate logging. Defaults to 1000
   * @option entity-type The entity type to which this submission was submitted from.
   * @option entity-id The ID of the entity of which this webform submission was submitted from.
   * @aliases wfg,webform-generate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_generate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '300f7fbe440a3aea78cab90f086c2ec5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Makes sure all Webform admin configuration and webform settings are up-to-date.
   *
   * @command webform:repair
   * @usage webform:repair
   *   Repairs admin configuration and webform settings are up-to-date.
   * @aliases wfr,webform-repair
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_repair',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6dc6e5e5851280c3aece6a806cee622' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes orphaned submissions where the submission\'s webform was deleted.
   *
   * @command webform:remove:orphans
   * @usage webform:remove:orphans
   *   Removes orphaned submissions where the submission\'s webform was deleted.
   * @aliases wfro,webform-remove-orphans
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_remove_orphans',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c383d4abc1a043f8a612c59ded37f1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook validate webform:docs
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_docs_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba2a9fc390c8d5eb8f0f03ab34fa17b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates HTML documentation.
   *
   * @command webform:docs
   * @usage webform:repair
   *   Generates HTML documentation used by the Webform module\'s documentation pages.
   * @aliases wfd,webform-docs
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_docs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '975ddcb95385456fd39a6271ef139639' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook validate webform:composer:update
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_composer_update_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd87ff39ebdf15e117ff10cf74d8b022c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the Drupal installation\'s composer.json to include the Webform module\'s selected libraries as repositories.
   *
   * @command webform:composer:update
   * @option disable-tls If set to true all HTTPS URLs will be tried with HTTP instead and no network level encryption is performed.
   * @usage webform:composer:update
   *   Updates the Drupal installation\'s composer.json to include the Webform module\'s selected libraries as repositories.
   * @aliases wfcu,webform-composer-update
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_composer_update',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7dba0489e8d8a23c1c72e140403c430e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generate Drush commands from webform.drush.inc for Drush 8.x to WebformCommands for Drush 9.x.
   *
   * @command webform:generate:commands
   * @usage drush webform:generate:commands
   *   Generate Drush commands from webform.drush.inc for Drush 8.x to WebformCommands for Drush 9.x.
   * @aliases wfgc,webform-generate-commands
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformCommands',
         'functionName' => 'drush_webform_generate_commands',
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