<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/src/Controllers/EntityBrowserController.php-1588013888',
   'data' => 
  array (
    'f3fb7b14cfceac87de4b8252ee253eac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns responses for entity browser routes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Controllers',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'opendialogcommand' => 'Drupal\\Core\\Ajax\\OpenDialogCommand',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'valueupdatedcommand' => 'Drupal\\entity_browser\\Ajax\\ValueUpdatedCommand',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'alertcommand' => 'Drupal\\Core\\Ajax\\AlertCommand',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
        ),
         'className' => 'Drupal\\entity_browser\\Controllers\\EntityBrowserController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81feb8ae260e968836e64959c4673e10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return an Ajax dialog command for editing a referenced entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   An entity being edited.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The currently processing request.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   An Ajax response with a command for opening or closing the dialog
   *   containing the edit form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_browser\\Controllers',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'opendialogcommand' => 'Drupal\\Core\\Ajax\\OpenDialogCommand',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'valueupdatedcommand' => 'Drupal\\entity_browser\\Ajax\\ValueUpdatedCommand',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'alertcommand' => 'Drupal\\Core\\Ajax\\AlertCommand',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
        ),
         'className' => 'Drupal\\entity_browser\\Controllers\\EntityBrowserController',
         'functionName' => 'entityBrowserEdit',
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