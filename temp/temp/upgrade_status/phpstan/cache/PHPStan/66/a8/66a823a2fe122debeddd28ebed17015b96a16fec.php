<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformHandler/SettingsWebformHandler.php-1594690523',
   'data' => 
  array (
    '217bf847147a0e1a977cfee498011eac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform submission settings handler.
 *
 * @WebformHandler(
 *   id = "settings",
 *   label = @Translation("Settings"),
 *   category = @Translation("Settings"),
 *   description = @Translation("Allows Webform settings to be overridden based on submission data, source entity fields, and conditions."),
 *   cardinality = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::SUBMISSION_OPTIONAL,
 *   tokens = TRUE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c96a0df7de0532272920ac538ee0e2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The typed config manager.
   *
   * @var \\Drupal\\Core\\Config\\TypedConfigManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6f3189b00b48e7cc64443a067006d86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c41ec4e64ee4d05186c82d445974bbbe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31d0bb0a77f740dfaee9eef12c92ec7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90fdedb446ea4532e30c0a2f14782fbe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b40f6b711533c4632c4d8819be6ff93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7614a3b8f498b76c7e763af717173a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c696427038b1fa862f2976f100686c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2101db822ca3deeebcdb64b14d89f97e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'overrideSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cbe0d2c0be08296482daac86deacf3a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Display debugging information about the current action.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'displayDebug',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5501eeca61dff9413f567c694df769d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform setting definitions.
   *
   * @return array
   *   Webform setting definitions defined in webform.entity.webform.schema.yml
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'getSettingsDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '649913caa4d6ace8ed1fdcc8e3f9701f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get overridden settings.
   *
   * @return array
   *   An associative array containing overridden settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'getSettingsOverride',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe8b1d30d538118487d224b67dce0d92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform submission\'s overridden settings.
   *
   * Replaces submissions token values and cast booleans and integers.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   *
   * @return array
   *   An associative array containing overridden settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\SettingsWebformHandler',
         'functionName' => 'getSubmissionSettingsOverride',
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