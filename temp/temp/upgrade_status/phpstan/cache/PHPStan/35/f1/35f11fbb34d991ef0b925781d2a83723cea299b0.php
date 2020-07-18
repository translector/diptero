<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformExporter/JsonWebformExporter.php-1594690523',
   'data' => 
  array (
    'e5db0048cc57b6a8856da4cb8de39eb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a JSON document exporter.
 *
 * @WebformExporter(
 *   id = "json",
 *   label = @Translation("JSON documents"),
 *   description = @Translation("Exports results as JSON documents."),
 *   archive = TRUE,
 *   options = FALSE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformExporter\\JsonWebformExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78a7898834f5745eceac7498eda46af0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformExporter\\JsonWebformExporter',
         'functionName' => 'writeSubmission',
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