<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/third_party_settings/webform.honeypot.inc-1594241402',
   'data' => 
  array (
    '8235a98e81c03ee60c835582910efbe2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Flag to indicate that a honeypot setting can be set.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eccd1d830bca5f721481318f96478642' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Flag to indicate that a honeypot setting is disabled for all webforms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b25e73ba3a05c818fef528e46dd573b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Flag to indicate that a honeypot setting is enabled for all webforms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03e4b087400a0a12266a2b7befa7bb52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Alter webform third party settings webforms to include Honeypot configuration.
 *
 * @param array $form
 *   An associative array containing the structure of the form.
 * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The current state of the form.
 * @param bool $honeypot
 *   TRUE if honeypot protection is enabled.
 * @param int $honeypot_state
 *   Flag that determines if honeypot protection is enabled, disabled, or can be
 *   set.
 * @param bool $time_restriction
 *   TRUE if honeypot time restriction is enabled.
 * @param int $time_restriction_state
 *   Flag that determines if honeypot time restriction is enabled, disabled,
 *   or can be set.
 * @param string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup $label
 *   The label to displayed within the checkbox titles.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => '_webform_honeypot_form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3790a4d354a357e352fed719deadacb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Validate callback; Checks if honeypot or time_restriction is disabled and removes them from the third party settings values.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => '_webform_honeypot_form_validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e6d169776d7a47fdc32a7401b43325e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_webform_admin_third_party_settings_form_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_webform_admin_third_party_settings_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'debd2b24c468423d530ecae4fea2b10a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformThirdPartySettingsManagerInterface $third_party_settings_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_webform_admin_third_party_settings_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18407251d2579ed8eeaee6d818ed41e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_webform_third_party_settings_form_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_webform_third_party_settings_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3efb160416c333f17d2b8dfd2a0fdb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformThirdPartySettingsManagerInterface $third_party_settings_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_webform_third_party_settings_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e53bfb3da622d233438091f445895b98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_webform_third_party_settings_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c339a548274fc4da1cae6e1428fc2594' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_webform_submission_form_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_webform_submission_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc0698532e2f4b92966868e2ee914136' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformThirdPartySettingsManagerInterface $third_party_settings_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_webform_submission_form_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55e2466816c9f07f2eebc99f335f73ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => NULL,
         'functionName' => 'honeypot_webform_submission_form_alter',
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