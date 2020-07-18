<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_scheduled_email/src/Plugin/WebformHandler/ScheduleEmailWebformHandler.php-1594690523',
   'data' => 
  array (
    '12bd872cbc5941338788c694988eb293' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Schedules a webform submission\'s email.
 *
 * @WebformHandler(
 *   id = "scheduled_email",
 *   label = @Translation("Scheduled email"),
 *   category = @Translation("Notification"),
 *   description = @Translation("Sends a webform submission via a scheduled email."),
 *   cardinality = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::SUBMISSION_REQUIRED,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd033f79a2ec2e53bd4c8fe0b2a07a3b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current request.
   *
   * @var null|\\Symfony\\Component\\HttpFoundation\\Request
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c415d983ac998508738590bbd5c1ffc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform scheculed email manager.
   *
   * @var \\Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30e2466ad3cd612384341ad43f55b3f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58439316dcd4d945f530664736c805f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '174f0464eb3b72c9e020cda4906b3451' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b872f8d73c46d5f0aace9aa4c6ef7c0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b56ae99e6917e4c2e2314ad963da693a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '936e4c2a2e0e1cc1f19f5c3d682827b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4e93a46994e448ad1ece6decb099dba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'alterForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd4c4756a3adcf626c59b94db5b200ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8488c2c328e9519ef7234d03cbc63f52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bdf0b09c574c17f585b279d03df0843' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'updateHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac14cd0c972094a2cb6dee0afa4e9baf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'deleteHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae8590b92a5d9b3063f3b000efadcc2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Schedule the sending of an email.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   *
   * @return bool|string
   *   The status of scheduled email. FALSE is email was not scheduled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'scheduleMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b237c3b6d6c4517e364bcf5abb1f7183' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unschedule the sending of an email.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformotherbase' => 'Drupal\\webform\\Element\\WebformOtherBase',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webformdatehelper' => 'Drupal\\webform\\Utility\\WebformDateHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformscheduledemailmanagerinterface' => 'Drupal\\webform_scheduled_email\\WebformScheduledEmailManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_scheduled_email\\Plugin\\WebformHandler\\ScheduleEmailWebformHandler',
         'functionName' => 'unscheduleMessage',
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