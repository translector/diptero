<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_devel/src/Commands/WebformDevelCommands.php-1594690523',
   'data' => 
  array (
    '559aa61962ba059b0d49e1a3c07e47b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform devel commandfile.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel\\Commands',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'userabortexception' => 'Drush\\Exceptions\\UserAbortException',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\webform_devel\\Commands\\WebformDevelCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3907274cd1e5a420cc64a77a2b6b2b26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides the state system.
   *
   * @var \\Drupal\\Core\\State\\State
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel\\Commands',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'userabortexception' => 'Drush\\Exceptions\\UserAbortException',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\webform_devel\\Commands\\WebformDevelCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4021ad0bc38559ed56d604a4fff6527a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The user data service.
   *
   * @var \\Drupal\\user\\UserDataInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel\\Commands',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'userabortexception' => 'Drush\\Exceptions\\UserAbortException',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\webform_devel\\Commands\\WebformDevelCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d1c22e030532c9d9f15982257335549' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The construct method.
   *
   * @param \\Drupal\\Core\\State\\StateInterface $state
   *   Provides the state system.
   * @param \\Drupal\\user\\UserDataInterface $user_data
   *   The user data service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel\\Commands',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'userabortexception' => 'Drush\\Exceptions\\UserAbortException',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\webform_devel\\Commands\\WebformDevelCommands',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06685b799f3f4635e03448c59b2f1117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes devel export config.
   *
   * @command webform:devel:config:update
   * @aliases wfdcu,webform-devel-reset
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel\\Commands',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'userabortexception' => 'Drush\\Exceptions\\UserAbortException',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\webform_devel\\Commands\\WebformDevelCommands',
         'functionName' => 'drush_webform_devel_config_update',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5631226a9d45c00298adf31ab62e12cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes webform devel reset.
   *
   * @command webform:devel:reset
   * @aliases wfdr
   *
   * @see drush_webform_devel_reset()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_devel\\Commands',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'userabortexception' => 'Drush\\Exceptions\\UserAbortException',
          'loglevel' => 'Psr\\Log\\LogLevel',
        ),
         'className' => 'Drupal\\webform_devel\\Commands\\WebformDevelCommands',
         'functionName' => 'drush_webform_devel_reset',
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