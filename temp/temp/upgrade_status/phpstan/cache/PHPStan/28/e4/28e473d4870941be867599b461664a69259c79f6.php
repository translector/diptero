<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/Webform.php-1594241402',
   'data' => 
  array (
    '4a6db52667498927a0108dc88dbeaa37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a render element to display a webform.
 *
 * @RenderElement("webform")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'webformentity' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\Webform',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fdfbf562c2e46b9692a6d4a50364e73b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'webformentity' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\Webform',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd84824569f64dcc4b781d24bb0b86426' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform element pre render callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'webformentity' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\Webform',
         'functionName' => 'preRenderWebformElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '44e892f8d621bfb9b8a8cc2274028695' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build access denied message for a webform.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return array
   *   A renderable array containing thea access denied message for a webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'webformentity' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\Webform',
         'functionName' => 'buildAccessDenied',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6a019033c6ac12576b803e83b5c251e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformTokenManagerInterface $webform_token_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'webformentity' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\Webform',
         'functionName' => 'buildAccessDenied',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f446587ba2fc1ff713d924d07cd03014' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds webform.settings and webform as cache dependencies to a render array.
   *
   * @param array &$elements
   *   The render array to update.
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return array
   *   A render array with webform.settings and webform as cache dependencies.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'webformentity' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\Webform',
         'functionName' => 'addCacheableDependency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e178045ef185985c7caa15ac6d0d3c77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Render\\RendererInterface $renderer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'webformentity' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\Webform',
         'functionName' => 'addCacheableDependency',
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