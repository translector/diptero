<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/src/Commands/TokenCommands.php-1586203134',
   'data' => 
  array (
    '7700ff4c55deac96018bae137b08780f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * TokenCommands provides the Drush hook implementation for cache clears.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token\\Commands',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
        ),
         'className' => 'Drupal\\token\\Commands\\TokenCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b8feee8a29ba88764f0ad0df4d5ea2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module_handler service.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token\\Commands',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
        ),
         'className' => 'Drupal\\token\\Commands\\TokenCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ef63b67929a23348866ce345eadb200' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * TokenCommands constructor.
   *
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $moduleHandler
   *   The module_handler service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token\\Commands',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
        ),
         'className' => 'Drupal\\token\\Commands\\TokenCommands',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b4b288fc9d5fb9685290540f339dba1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a cache clear option for tokens.
   *
   * @param array $types
   *   The Drush clear types to make available.
   * @param bool $includeBootstrappedTypes
   *   Whether to include types only available in a bootstrapped Drupal or not.
   *
   * @hook on-event cache-clear
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token\\Commands',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
        ),
         'className' => 'Drupal\\token\\Commands\\TokenCommands',
         'functionName' => 'cacheClear',
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