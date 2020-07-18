<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/nocurrent_pass/nocurrent_pass.module-1471976630',
   'data' => 
  array (
    '27beaf775b8db30ee804a832f8108917' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Adds a checkbox inside a fieldset to the Account settings page (Configuration > People > Account settings)
 * where we can disable or enable the Current Password field on user edit page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => NULL,
         'functionName' => 'nocurrent_pass_form_user_admin_settings_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21c4fb5e7fa093724ce4aeca2dc1ef85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Submit - "Save the Do not require current password" field\'s vale into configuration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => NULL,
         'functionName' => 'nocurrent_pass_form_user_admin_settings_submit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '126b04d26d92104bf875022892648c2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_FORM_ID_alter().
 * Remove the current password field from the user_profile_form form (user/%/edit).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => NULL,
         'functionName' => 'nocurrent_pass_form_user_form_alter',
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