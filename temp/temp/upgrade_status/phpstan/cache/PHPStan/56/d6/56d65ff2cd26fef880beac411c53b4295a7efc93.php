<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Plugin/EntityBrowser/Display/Modal.php-1588013888',
   'data' => 
  array (
    'fad40045c17feb0207d9b7262426bb29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Presents entity browser in an Modal.
 *
 * @EntityBrowserDisplay(
 *   id = "modal",
 *   label = @Translation("Modal"),
 *   description = @Translation("Displays the entity browser in a modal window."),
 *   uses_route = TRUE
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'opendialogcommand' => 'Drupal\\Core\\Ajax\\OpenDialogCommand',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\Modal',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc04e77cb0858d288bede799b5cb2364' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'opendialogcommand' => 'Drupal\\Core\\Ajax\\OpenDialogCommand',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\Modal',
         'functionName' => 'displayEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c19a96794b62b1c7701f669f953462d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates the content and opens the modal.
   *
   * @param array $form
   *   The form array.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state object.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   An ajax response.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'opendialogcommand' => 'Drupal\\Core\\Ajax\\OpenDialogCommand',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\Modal',
         'functionName' => 'openModal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8636e594e3fd6b16969468ffb07e1eb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'opendialogcommand' => 'Drupal\\Core\\Ajax\\OpenDialogCommand',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\Modal',
         'functionName' => '__sleep',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '507cc5c1b9a96fac63033e2083f9f35d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'opendialogcommand' => 'Drupal\\Core\\Ajax\\OpenDialogCommand',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\Modal',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fad0d6e3013b7483690380ceec7d8697' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'opendialogcommand' => 'Drupal\\Core\\Ajax\\OpenDialogCommand',
          'url' => 'Drupal\\Core\\Url',
          'displaybase' => 'Drupal\\entity_browser\\DisplayBase',
          'events' => 'Drupal\\entity_browser\\Events\\Events',
          'registerjscallbacks' => 'Drupal\\entity_browser\\Events\\RegisterJSCallbacks',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'alterentitybrowserdisplaydata' => 'Drupal\\entity_browser\\Events\\AlterEntityBrowserDisplayData',
        ),
         'className' => 'Drupal\\entity_browser\\Plugin\\EntityBrowser\\Display\\Modal',
         'functionName' => 'validateConfigurationForm',
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