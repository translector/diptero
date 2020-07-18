<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Form/AdminConfig/WebformAdminConfigBaseForm.php-1594241402',
   'data' => 
  array (
    '8678b25ca9248ab948a7b76bce901189' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base webform admin settings form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form\\AdminConfig',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'configformbase' => 'Drupal\\Core\\Form\\ConfigFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformhandlermanager' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
        ),
         'className' => 'Drupal\\webform\\Form\\AdminConfig\\WebformAdminConfigBaseForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88e68a052e8b8372a6a9b630d0d6907a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form\\AdminConfig',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'configformbase' => 'Drupal\\Core\\Form\\ConfigFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformhandlermanager' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
        ),
         'className' => 'Drupal\\webform\\Form\\AdminConfig\\WebformAdminConfigBaseForm',
         'functionName' => 'getEditableConfigNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa0294ad4ded67dcaff70d5f1cc68550' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form\\AdminConfig',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'configformbase' => 'Drupal\\Core\\Form\\ConfigFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformhandlermanager' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
        ),
         'className' => 'Drupal\\webform\\Form\\AdminConfig\\WebformAdminConfigBaseForm',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5636e08af16d463e77b5b39b14b59f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build excluded plugins element.
   *
   * @param \\Drupal\\Component\\Plugin\\PluginManagerInterface $plugin_manager
   *   A webform element, handler, or exporter plugin manager.
   * @param array $excluded_ids
   *   An array of excluded ids.
   *
   * @return array
   *   A table select element used to excluded plugins by id.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form\\AdminConfig',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'configformbase' => 'Drupal\\Core\\Form\\ConfigFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformhandlermanager' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
        ),
         'className' => 'Drupal\\webform\\Form\\AdminConfig\\WebformAdminConfigBaseForm',
         'functionName' => 'buildExcludedPlugins',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '041931b62d766a18842acb5d265adfd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Convert included ids returned from table select element to excluded ids.
   *
   * @param \\Drupal\\Component\\Plugin\\PluginManagerInterface $plugin_manager
   *   A webform element, handler, or exporter plugin manager.
   * @param array $included_ids
   *   An array of included_ids.
   *
   * @return array
   *   An array of excluded ids.
   *
   * @see \\Drupal\\webform\\Form\\WebformAdminSettingsForm::buildExcludedPlugins
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form\\AdminConfig',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'configformbase' => 'Drupal\\Core\\Form\\ConfigFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformhandlermanager' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
        ),
         'className' => 'Drupal\\webform\\Form\\AdminConfig\\WebformAdminConfigBaseForm',
         'functionName' => 'convertIncludedToExcludedPluginIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ef59b3680160d8a7d1ea4a9ed047ed9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get plugin definitions.
   *
   * @param \\Drupal\\Component\\Plugin\\PluginManagerInterface $plugin_manager
   *   A webform element, handler, or exporter plugin manager.
   *
   * @return array
   *   Plugin definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form\\AdminConfig',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'configformbase' => 'Drupal\\Core\\Form\\ConfigFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelementmanagerinterface' => 'Drupal\\webform\\Plugin\\WebformElementManagerInterface',
          'webformhandlermanager' => 'Drupal\\webform\\Plugin\\WebformHandlerManager',
        ),
         'className' => 'Drupal\\webform\\Form\\AdminConfig\\WebformAdminConfigBaseForm',
         'functionName' => 'getPluginDefinitions',
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