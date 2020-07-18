<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/honeypot/honeypot.module-1588104569',
   'data' => 
  array (
    '1982e877362701acff69d426e5383b89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_help().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_help',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc987e6e213e085f0753f902e1c0474d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_cron().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_cron',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9af200f08ab0dc585eea31b6b1d73f6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_alter().
 *
 * Add Honeypot features to forms enabled in the Honeypot admin interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a78e062ee8cc25874b8127b1eac3fdb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Build an array of all the protected forms on the site, by form_id.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_get_protected_forms',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21a675b4f931876297a5bb6a853a3dc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Form builder function to add different types of protection to forms.
 *
 * @param array $options
 *   Array of options to be added to form. Currently accepts \'honeypot\' and
 *   \'time_restriction\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_add_form_protection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e2552407bc39372231964f73df7c28b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Validate honeypot field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => '_honeypot_honeypot_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45320c928420b91d2c1e65a2fdbcbd6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Validate honeypot\'s time restriction field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => '_honeypot_time_restriction_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8055c916dc295d35f1b7e8fe6079743c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Log blocked form submissions.
 *
 * @param string $form_id
 *   Form ID for the form on which submission was blocked.
 * @param string $type
 *   String indicating the reason the submission was blocked. Allowed values:
 *     - honeypot: If honeypot field was filled in.
 *     - honeypot_time: If form was completed before the configured time limit.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => '_honeypot_log',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c266e48e5755cfe05eb6d6dc0ce1478' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Look up the time limit for the current user.
 *
 * @param array $form_values
 *   Array of form values (optional).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_get_time_limit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45c23ec789b2683790adbe55e610337a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Log the failed submission with timestamp and hostname.
 *
 * @param string $form_id
 *   Form ID for the rejected form submission.
 * @param string $type
 *   String indicating the reason the submission was blocked. Allowed values:
 *     - honeypot: If honeypot field was filled in.
 *     - honeypot_time: If form was completed before the configured time limit.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_log_failure',
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