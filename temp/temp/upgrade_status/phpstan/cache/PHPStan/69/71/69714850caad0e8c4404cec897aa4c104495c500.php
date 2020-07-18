<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_scheduled_email/src/Commands/WebformScheduledEmailCommands.php-1594690523',
   'data' => 
  array (
    '3adb0e944bd9ecec3a36dfe4f1592a66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform scheduled email commands for Drush 9.x.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'scheduleemailwebformhandler' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Commands\\WebformScheduledEmailCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6e5935b8ccb5d4f93e079c8b989dddf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform scheduled email manager.
   *
   * @var \\Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'scheduleemailwebformhandler' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Commands\\WebformScheduledEmailCommands',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18fa1b33c6eda4de021794e5ed25e202' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformScheduledEmailController object.
   *
   * @param \\Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface $manager
   *   The webform scheduled email manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'scheduleemailwebformhandler' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Commands\\WebformScheduledEmailCommands',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd58e94b8c77abb35ae63e6d4b02302a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @hook validate webform:scheduled-email:cron
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'scheduleemailwebformhandler' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Commands\\WebformScheduledEmailCommands',
         'functionName' => 'drush_webform_scheduled_email_cron_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d55283d1adb1039eef89032103b0f92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes cron task for webform scheduled emails.
   *
   * @command webform:scheduled-email:cron
   * @param $webform_id (optional)
   *   The webform ID you want the cron task to be executed for
   * @param $handler_id (optional)
   *   The handler ID you want the cron task to be executed for
   * @option schedule_limit
   *   The maximum number of emails to be scheduled. If set to 0 no emails will be scheduled. (Default 1000)
   * @option send_limit
   *   The maximum number of emails to be sent. If set to 0 no emails will be sent. (Default 500)
   * @aliases wfsec,webform-scheduled-email-cron
   *
   * @see webform_scheduled_email_cron_process()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Commands',
         'uses' => 
        array (
          'commanddata' => 'Consolidation\\AnnotatedCommand\\CommandData',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'scheduleemailwebformhandler' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Commands\\WebformScheduledEmailCommands',
         'functionName' => 'drush_webform_scheduled_email_cron',
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