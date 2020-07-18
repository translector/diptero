<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Commands/WebformSanitizeSubmissionsCommands.php-1594690523',
   'data' => 
  array (
    '49b2397ff33abbdf497b0a32625ccaa5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drush sql-sanitize plugin for sanitizing (truncating) webform submissions.
 *
 * @see \\Drush\\Drupal\\Commands\\sql\\SanitizeSessionsCommands
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'sanitizeplugininterface' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformSanitizeSubmissionsCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cabc6dc6b1a3707d8552a8e6f783480d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database connection.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'sanitizeplugininterface' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformSanitizeSubmissionsCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2aad4660d191cfcd3cc6578e536b540' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'sanitizeplugininterface' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformSanitizeSubmissionsCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '655816745f29c29744209424e2d5504b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'sanitizeplugininterface' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformSanitizeSubmissionsCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b4ef924f579dc521ea070c222deeb8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * WebformSanitizeSubmissionsCommands constructor.
   *
   * @param \\Drupal\\Core\\Database\\Connection $database
   *   The database.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'sanitizeplugininterface' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformSanitizeSubmissionsCommands',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9cffde5b3c1db4e74fd7e7d103cc1d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sanitize webform submissions from the DB.
   *
   * @hook post-command sql-sanitize
   *
   * @inheritdoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'sanitizeplugininterface' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformSanitizeSubmissionsCommands',
         'functionName' => 'sanitize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d7b47da93ed30fe057c325ce8823baf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook option sql-sanitize
   * @option sanitize-webform-submissions
   *   By default, submissions are truncated. Specify \'no\' to disable that.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'sanitizeplugininterface' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformSanitizeSubmissionsCommands',
         'functionName' => 'options',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '896cb5e30d0390371160a793c0d711f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook on-event sql-sanitize-confirms
   *
   * @inheritdoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'sanitizeplugininterface' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformSanitizeSubmissionsCommands',
         'functionName' => 'messages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc1138d4299b70c907f6ac7809c60f1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test an option value to see if it is disabled.
   *
   * @param string $value
   *   The enabled options value.
   *
   * @return bool
   *   TRUE if santize websubmission is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'sanitizeplugininterface' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drupal\\webform\\Commands\\WebformSanitizeSubmissionsCommands',
         'functionName' => 'isEnabled',
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