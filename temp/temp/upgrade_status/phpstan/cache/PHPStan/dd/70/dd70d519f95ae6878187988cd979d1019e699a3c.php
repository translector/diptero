<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_examples_accessibility/webform_examples_accessibility.module-1594241402',
   'data' => 
  array (
    '94ceba72f98ab2b2f1a0f834f548aaf3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_page_attachments().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
        ),
         'className' => NULL,
         'functionName' => 'webform_examples_accessibility_page_attachments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bae66fe2bd295dc3be61d549beaea8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_webform_submission_form_alter().
 *
 * Adds button to disable/enable HTML client-side validation without have
 * to change any webform settings.
 *
 * The link is only applicable to webform ids that are prefix with examples_accessibility_*.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
        ),
         'className' => NULL,
         'functionName' => 'webform_examples_accessibility_webform_submission_form_alter',
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