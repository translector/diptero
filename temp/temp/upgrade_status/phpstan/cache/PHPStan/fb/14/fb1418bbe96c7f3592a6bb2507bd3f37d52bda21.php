<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_submission_export_import/src/Plugin/WebformExporter/WebformSubmissionExportImportWebformExporter.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformExporter/FileHandleTraitWebformExporter.php-1594690523',
   'data' => 
  array (
    '7dcc0d70b77309778cc1ae6ea4aad08e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a machine readable CSV export that can be imported back into the current webform.
 *
 * @WebformExporter(
 *   id = "webform_submission_export_import",
 *   label = @Translation("CSV download"),
 *   description = @Translation("Exports results in CSV that can be imported back into the current webform."),
 *   archive = FALSE,
 *   files = FALSE,
 *   options = FALSE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'filehandletraitwebformexporter' => 'Drupal\\webform\\Plugin\\WebformExporter\\FileHandleTraitWebformExporter',
          'webformexporterbase' => 'Drupal\\webform\\Plugin\\WebformExporterBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3d4180d2bd0300dd4a1e62f0b87f256' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines file handle exporter trait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformExporter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92710473276ef96678bd8b2105a9ffa6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A file handler resource.
   *
   * @var resource
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformExporter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05c80e5ed623f7c1badee27d01794ae6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformExporter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'createExport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '111ea342bc59a8ae1366df4d44879448' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformExporter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'openExport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d03445ed07ad2a50565bc734d2e7d8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformExporter',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'closeExport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cece00fbcab45d332a7e24efc3d195c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission export importer service.
   *
   * @var \\Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporterInterface $importer
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'filehandletraitwebformexporter' => 'Drupal\\webform\\Plugin\\WebformExporter\\FileHandleTraitWebformExporter',
          'webformexporterbase' => 'Drupal\\webform\\Plugin\\WebformExporterBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f7b9466a15c54d61b20ce93472108d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'filehandletraitwebformexporter' => 'Drupal\\webform\\Plugin\\WebformExporter\\FileHandleTraitWebformExporter',
          'webformexporterbase' => 'Drupal\\webform\\Plugin\\WebformExporterBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c692de75c3ddaaf6b57e801dbb53db9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'filehandletraitwebformexporter' => 'Drupal\\webform\\Plugin\\WebformExporter\\FileHandleTraitWebformExporter',
          'webformexporterbase' => 'Drupal\\webform\\Plugin\\WebformExporterBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07db8f92bf8e79dd0ccd03af2f732c41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'filehandletraitwebformexporter' => 'Drupal\\webform\\Plugin\\WebformExporter\\FileHandleTraitWebformExporter',
          'webformexporterbase' => 'Drupal\\webform\\Plugin\\WebformExporterBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78d0ad4b0edcb07cf6c01cf2ec184556' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'filehandletraitwebformexporter' => 'Drupal\\webform\\Plugin\\WebformExporter\\FileHandleTraitWebformExporter',
          'webformexporterbase' => 'Drupal\\webform\\Plugin\\WebformExporterBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'getFileExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b55e75f03640bf89ce36db39f0093e63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'filehandletraitwebformexporter' => 'Drupal\\webform\\Plugin\\WebformExporter\\FileHandleTraitWebformExporter',
          'webformexporterbase' => 'Drupal\\webform\\Plugin\\WebformExporterBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'writeHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ebd29f0020c37959c78e3d70f128a28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'filehandletraitwebformexporter' => 'Drupal\\webform\\Plugin\\WebformExporter\\FileHandleTraitWebformExporter',
          'webformexporterbase' => 'Drupal\\webform\\Plugin\\WebformExporterBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'writeSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c802c71fad685f365ce6a1af239398f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the submission importer.
   *
   * @return \\Drupal\\webform_submission_export_import\\WebformSubmissionExportImportImporterInterface
   *   The submission importer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'filehandletraitwebformexporter' => 'Drupal\\webform\\Plugin\\WebformExporter\\FileHandleTraitWebformExporter',
          'webformexporterbase' => 'Drupal\\webform\\Plugin\\WebformExporterBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_submission_export_import\\Plugin\\WebformExporter\\WebformSubmissionExportImportWebformExporter',
         'functionName' => 'getImporter',
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