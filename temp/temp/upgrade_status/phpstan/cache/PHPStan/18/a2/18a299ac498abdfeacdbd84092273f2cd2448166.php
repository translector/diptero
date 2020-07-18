<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_submission_export_import/webform_submission_export_import.module-1594241402',
   'data' => 
  array (
    '0a7eb4011b6bfa2e51a0c6ad22d41b45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_webform_help_info().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'file' => 'Drupal\\file\\Entity\\File',
        ),
         'className' => NULL,
         'functionName' => 'webform_submission_export_import_webform_help_info',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '688061651d4b2e7ddd8d1078f6a92b61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_local_tasks_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'file' => 'Drupal\\file\\Entity\\File',
        ),
         'className' => NULL,
         'functionName' => 'webform_submission_export_import_local_tasks_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c64c8f14cec704b03c27b4fc6edfcdf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Saves a file upload to a new location.
 *
 * @param \\SplFileInfo $file_info
 *   The file upload to save.
 * @param string $form_field_name
 *   A string that is the associative array key of the upload form element in
 *   the form array.
 * @param array $validators
 *   (optional) An associative array of callback functions used to validate the
 *   file.
 * @param bool $destination
 *   (optional) A string containing the URI that the file should be copied to.
 * @param int $replace
 *   (optional) The replace behavior when the destination file already exists.
 *
 * @return \\Drupal\\file\\FileInterface|false
 *   The created file entity or FALSE if the uploaded file not saved.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *
 * @internal
 *   This method should only be called from file_save_upload(). Use that method
 *   instead.
 *
 * @see file_save_upload()
 * @see file_save_upload_single()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'file' => 'Drupal\\file\\Entity\\File',
        ),
         'className' => NULL,
         'functionName' => '_webform_submission_export_import_file_save_upload_single',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '385664a2f55a2d4560ed344210774f4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'file' => 'Drupal\\file\\Entity\\File',
        ),
         'className' => NULL,
         'functionName' => '_webform_submission_export_import_file_save_upload_single',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1026a8e5db99ff97c0976ace7148fe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface $stream_wrapper_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'file' => 'Drupal\\file\\Entity\\File',
        ),
         'className' => NULL,
         'functionName' => '_webform_submission_export_import_file_save_upload_single',
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