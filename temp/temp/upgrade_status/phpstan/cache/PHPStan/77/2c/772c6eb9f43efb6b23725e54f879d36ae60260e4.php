<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformHandler/DebugWebformHandler.php-1594690523',
   'data' => 
  array (
    '9cb30d74ff073553eb5ac327e0ad8043' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform submission debug handler.
 *
 * @WebformHandler(
 *   id = "debug",
 *   label = @Translation("Debug"),
 *   category = @Translation("Development"),
 *   description = @Translation("Debug webform submission."),
 *   cardinality = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::CARDINALITY_SINGLE,
 *   results = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::SUBMISSION_OPTIONAL,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\DebugWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9a20874bb3e71cacccdd04f72edb60e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\DebugWebformHandler',
         'functionName' => 'submitForm',
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