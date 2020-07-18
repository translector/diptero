<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/file/src/Element/ManagedFile.php-1594234425',
   'data' => 
  array (
    'bd5af755280f7e6b0d3caff548661556' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an AJAX/progress aware widget for uploading and saving a file.
 *
 * @FormElement("managed_file")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\file\\Element\\ManagedFile',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43fef829dc488825433d64f1ef32d4fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\file\\Element\\ManagedFile',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94b3edc3fe3f349fa6c7049854a5e10f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\file\\Element\\ManagedFile',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2419b40bd691f0ed5e2d42410b6869a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * #ajax callback for managed_file upload forms.
   *
   * This ajax callback takes care of the following things:
   *   - Ensures that broken requests due to too big files are caught.
   *   - Adds a class to the response to be able to highlight in the UI, that a
   *     new file got uploaded.
   *
   * @param array $form
   *   The build form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   The ajax response of the ajax upload.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\file\\Element\\ManagedFile',
         'functionName' => 'uploadAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ad8764f32cf76deb1547d764e6ae7be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Render\\RendererInterface $renderer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\file\\Element\\ManagedFile',
         'functionName' => 'uploadAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a8aca0cb55132c9f6fc6000d7549acf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render API callback: Expands the managed_file element type.
   *
   * Expands the file type to include Upload and Remove buttons, as well as
   * support for a default value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\file\\Element\\ManagedFile',
         'functionName' => 'processManagedFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8ab3fa7b3cd2a5f7d0f675c78b5644c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render API callback: Hides display of the upload or remove controls.
   *
   * Upload controls are hidden when a file is already uploaded. Remove controls
   * are hidden when there is no file attached. Controls are hidden here instead
   * of in \\Drupal\\file\\Element\\ManagedFile::processManagedFile(), because
   * #access for these buttons depends on the managed_file element\'s #value. See
   * the documentation of \\Drupal\\Core\\Form\\FormBuilderInterface::doBuildForm()
   * for more detailed information about the relationship between #process,
   * #value, and #access.
   *
   * Because #access is set here, it affects display only and does not prevent
   * JavaScript or other untrusted code from submitting the form as though
   * access were enabled. The form processing functions for these elements
   * should not assume that the buttons can\'t be "clicked" just because they are
   * not displayed.
   *
   * @see \\Drupal\\file\\Element\\ManagedFile::processManagedFile()
   * @see \\Drupal\\Core\\Form\\FormBuilderInterface::doBuildForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\file\\Element\\ManagedFile',
         'functionName' => 'preRenderManagedFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '103f09df5f249d222852f12f59fbfd92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render API callback: Validates the managed_file element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\file\\Element\\ManagedFile',
         'functionName' => 'validateManagedFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc9fad9047a7000b938fd7fce6b73045' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the file usage service.
   *
   * @return \\Drupal\\file\\FileUsage\\FileUsageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Element',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'file' => 'Drupal\\file\\Entity\\File',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\file\\Element\\ManagedFile',
         'functionName' => 'fileUsage',
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