<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/includes/webform.install.inc-1594690523',
   'data' => 
  array (
    '53508b9f4769a8d183c14ffaf5eb5925' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update admin settings to reflect changes in the default settings.
 *
 * If you are moving or updating any admin settings this must be explicitly
 * done via an update hook.
 *
 * @param bool $reset
 *   If set TRUE old admin settings will be completely deleted.
 *
 * @see drush_webform_repair()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_admin_settings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66aa21d3dbcbe60c2f4c05fcce1dea19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update webform settings to reflect changes in the default settings.
 *
 * This function can be used to apply new webform settings to all existing
 * webforms.
 *
 * @see \\Drupal\\webform\\Entity\\Webform::setSettings
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_webform_settings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '926dece5ce4746554d610767a992a291' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update webform setting to reflect changes in the default settings.
 *
 * @param array $data
 *   A webform\'s raw configuration data from webform.webform.*.yml.
 *
 * @return array
 *   Updated raw configuration data.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_webform_setting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a9d05311bdc676a6fcec80c5e2323b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformAccessRulesManagerInterface $access_rules_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_webform_setting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '915a5c508d8fde6892d088998f82e1b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Make sure outdated webform settings are up-to-date.
 *
 * @param array $settings
 *   An associative array of webform settings.
 *
 * @return array
 *   Updated webform settings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_webform_setting_settings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8afb836b9228820c5faec02beeb37204' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update webform handler settings to reflect changes in a handler\'s default configuration.
 *
 * @see \\Drupal\\webform\\Plugin\\WebformHandlerInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_webform_handler_settings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '135b18c0fb8110263c93e519ad0f9378' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformHandlerManagerInterface $handler_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_webform_handler_settings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d6e3b92ed14660c8c35d93cf820c83c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update webform options setting to reflect changes in the default settings.
 *
 * This function can be used to apply new webform options configuration to
 * all existing webforms options.
 *
 * @see \\Drupal\\webform\\Entity\\WebformOptions
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_options_settings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16dd9e35577d824f7431220e18f304ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update or install any new system.actions.* config entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_actions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e863351cb74fd14da1a65f7fc4fc322' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update webform field storage definitions.
 *
 * @see \\Drupal\\webform\\Plugin\\Field\\FieldType\\WebformEntityReferenceItem::schema
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_field_storage_definitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '393c95f609068b69e8537bbaeed129f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\field\\FieldStorageConfigInterface[] $fields */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_field_storage_definitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cca526be38d62f23681481e0bf71e11b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update webform submission storage schema.
 *
 * @see \\Drupal\\webform\\WebformSubmissionStorageSchema
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_webform_submission_storage_schema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b5a3485e73c65a1d24e26015fc87aa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update webform submission translations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_webform_submission_translation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e10c35baa666556f252e1fa5f6689366' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Replace string in webform.settings.yml and webform.webform.*.yml.
 *
 * @param string $search
 *   String to be search for.
 * @param string $replace
 *   String to be replace with.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_string_replace',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31d35d503dccd1274b21ca49ca2f28f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Clear/remove selected webform element properties.
 *
 * @param array $properties
 *   An associative array of webform element properties.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_elements_clear_properties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b515bc0a927a47ddc40e5e2d6de3aee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Recursively clear/remove selected webform element properties.
 *
 * @param array $element
 *   An element.
 * @param array $properties
 *   An associative array of webform element properties.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'action' => 'Drupal\\system\\Entity\\Action',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_elements_clear_properties_recursive',
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