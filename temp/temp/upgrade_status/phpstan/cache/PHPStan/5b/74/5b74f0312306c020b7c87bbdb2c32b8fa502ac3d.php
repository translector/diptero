<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Controller/WebformResultsExportController.php-1594241402',
   'data' => 
  array (
    'aaf22ac90a61e6cbe82a366f6f6b8c82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Controller routines for webform submission export.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eaadcf9d688a33d27e60e6006f7c6a99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The MIME type guesser.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4138f4d5b8201fc1b63c7014a20304c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission exporter.
   *
   * @var \\Drupal\\webform\\WebformSubmissionExporterInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57e7c022e47508edefc7f6fda0f02797' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform request handler.
   *
   * @var \\Drupal\\webform\\WebformRequestInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59922b9b7beab4f4dff2dc0fda991ea5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b090168c29591a6d559a38593c57cac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns webform submission as a CSV.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request.
   *
   * @return array|null|\\Symfony\\Component\\HttpFoundation\\RedirectResponse|\\Symfony\\Component\\HttpFoundation\\Response
   *   A response that renders or redirects to the CSV file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'index',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1724d4c4b3fd23317afbf87a9b3338e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns webform submission results as CSV file.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request.
   * @param string $filename
   *   CSV file name.
   *
   * @return array|\\Symfony\\Component\\HttpFoundation\\Response
   *   A response that renders or redirects to the CSV file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'file',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67866e5de9a602bbd8dd7e07444c3d21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Download generated CSV file.
   *
   * @param string $file_path
   *   The paths the generate CSV file.
   * @param bool $download
   *   Download the generated CSV file. Default to TRUE.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Response
   *   A response object containing the CSV file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'downloadFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a5c15aa94b14fe49989111869ca8af8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Batch API; Initialize batch operations.
   *
   * @param \\Drupal\\webform\\WebformInterface|null $webform
   *   A webform.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   A webform source entity.
   * @param array $export_options
   *   An array of export options.
   *
   * @see http://www.jeffgeerling.com/blogs/jeff-geerling/using-batch-api-build-huge-csv
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchSet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '572f60f8c37240ee4aa4a7813f37795a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionExporterInterface $submission_exporter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchSet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59a3f8122f60d60253ccabdd218ae0a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Batch API callback; Write the header and rows of the export to the export file.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   The webform.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   A webform source entity.
   * @param array $export_options
   *   An associative array of export options.
   * @param mixed|array $context
   *   The batch current context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchProcess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68e3b5d86d127c4273f0523650a2972c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionExporterInterface $submission_exporter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchProcess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '763dbb298e795900e687b3d22ea72bc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Batch API callback; Completed export.
   *
   * @param bool $success
   *   TRUE if batch successfully completed.
   * @param array $results
   *   Batch results.
   * @param array $operations
   *   An array of function calls (not used in this function).
   *
   * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
   *   Redirect to download the exported results.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchFinish',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '285df6094f5225d60813408504b0e71c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchFinish',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'effaee72bf3413df4a77f631f2a521af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchFinish',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c24abd50ff66ee0796f426e305998d24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var array $export_options */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchFinish',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8305deecae85ad470efb8963faa38f5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionExporterInterface $submission_exporter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchFinish',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '833f6c0c7e6b360d4ca806a6840da30f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformRequestInterface $request_handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'binaryfileresponse' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformResultsExportController',
         'functionName' => 'batchFinish',
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