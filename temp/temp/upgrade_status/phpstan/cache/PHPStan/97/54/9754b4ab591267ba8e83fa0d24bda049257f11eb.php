<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/drush/drush/src/Drupal/Commands/sql/SanitizePluginInterface.php-1593546225',
   'data' => 
  array (
    'fb2c6ecbf6f47a550d9bc3c2ef920ae9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implement this interface when building a Drush sql-sanitize plugin.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush\\Drupal\\Commands\\sql',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76bd841b9c586193722194617673acab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Run your sanitization logic using standard Drupal APIs.
     *
     * @param $result Exit code from the main operation for sql-sanitize.
     * @param CommandData $commandData Information about the current request.
     *
     * @hook post-command sql-sanitize
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush\\Drupal\\Commands\\sql',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
         'functionName' => 'sanitize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06a0366c3e21a657aabe3cd6cb5ff65a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @hook on-event sql-sanitize-confirms
     *
     * @param array $messages An array of messages to show during confirmation.
     * @param InputInterface $input The effective commandline input for this request.
     *
     * @return String[]
     *   An array of messages.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush\\Drupal\\Commands\\sql',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
        ),
         'className' => 'Drush\\Drupal\\Commands\\sql\\SanitizePluginInterface',
         'functionName' => 'messages',
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