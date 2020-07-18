<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_scheduled_email/drush/webform_scheduled_email.drush.inc-1594241402',
   'data' => 
  array (
    '3c8fe7b81e6a9e5da2c0cb5178c64538' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_drush_command().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'scheduleemailwebformhandler' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
        ),
         'className' => NULL,
         'functionName' => 'webform_scheduled_email_drush_command',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a956e60b2f65c046d905c4f929417d7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_drush_help().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'scheduleemailwebformhandler' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
        ),
         'className' => NULL,
         'functionName' => 'webform_scheduled_email_help',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '005e9e6a1c6d666be239b60af8235c9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements drush_hook_COMMAND().
 *
 * NOTE:
 * Unable to use drush_hook_COMMAND_validate because we are using a custom
 * callback to prevent conflicts with webform_scheduled_email_cron().
 *
 * @see webform_scheduled_email_cron()
 * @see \\Drupal\\webform_scheduled_email\\Commands\\WebformScheduledEmailCommands::drush_webform_scheduled_email_cron_validate()
 * @see \\Drupal\\webform_scheduled_email\\Commands\\WebformScheduledEmailCommands::drush_webform_scheduled_email_cron()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'scheduleemailwebformhandler' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
        ),
         'className' => NULL,
         'functionName' => 'webform_scheduled_email_cron_process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c97e3de42d06b7036a74964849579d1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface $webform_scheduled_email_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'scheduleemailwebformhandler' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
        ),
         'className' => NULL,
         'functionName' => 'webform_scheduled_email_cron_process',
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