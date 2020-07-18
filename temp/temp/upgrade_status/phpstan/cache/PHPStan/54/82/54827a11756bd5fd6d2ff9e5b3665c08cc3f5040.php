<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformExporter/YamlWebformExporter.php-1594690523',
   'data' => 
  array (
    '3e2c27afcf379c197e8a58c801b2ffde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a YAML document exporter.
 *
 * @WebformExporter(
 *   id = "yaml",
 *   label = @Translation("YAML documents"),
 *   description = @Translation("Exports results as YAML documents."),
 *   archive = TRUE,
 *   options = FALSE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformExporter\\YamlWebformExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf6a3d90eae252b9780423209ac58f0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformExporter\\YamlWebformExporter',
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