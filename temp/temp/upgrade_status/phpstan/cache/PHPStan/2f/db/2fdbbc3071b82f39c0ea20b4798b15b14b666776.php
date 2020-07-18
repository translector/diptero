<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/focal_point/src/Controller/FocalPointPreviewController.php-1586383018',
   'data' => 
  array (
    '04a615ea497f2bd5e374bd1b022078fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Class FocalPointPreviewController.
 *
 * @package Drupal\\focal_point\\Controller
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffa93e4c08e8560662695a7de0ee8e62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The image factory service.
   *
   * @var \\Drupal\\Core\\Image\\ImageFactory
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25e9198319e2114f54f92d027c6446bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request service.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57b3ba26c8e40e9b405b075f3bd94076' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The file storage service.
   *
   * @var \\Drupal\\file\\FileStorage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9276a64e4aeb31bbd59abd914d1435c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer service.
   *
   * @var Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f566819cbb9d1c7da85c7e98dbca9c0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @param \\Drupal\\Core\\Image\\ImageFactory $image_factory
   *   The image_factory parameter.
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   The request parameter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '375168d66fa4218f351bafef0f7aa435' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9fadca252de8913f254f1da761cd7e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @throws \\Symfony\\Component\\Validator\\Exception\\InvalidArgumentException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => 'content',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a888dc35264c5120e3a455453bcfcb86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Define access control for the preview page.
   *
   * Deny users access to the preview page unless they have permission to edit
   * an entity (any entity) that references the current image being previewed or
   * if they\'ve provide a valid token as a query string. The later is needed so
   * preview will work when creating a new entity that has not yet been saved.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The current user.
   * @param int $fid
   *   The file id for the image being previewed from the URL.
   *
   * @return \\Drupal\\Core\\Access\\AccessResult
   *   An AccessResult object defining if permission is granted or not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => 'access',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e85d345790fc2e316d11ae74ed76e14c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build a list of image styles that include an effect defined by focal point.
   *
   * @return array
   *   An array of machine names of image styles that use a focal point effect.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => 'getFocalPointImageStyles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '722cb03c1a787574fa7472e5eedb7f25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create the URL for a preview image including a query parameter.
   *
   * @param \\Drupal\\image\\Entity\\ImageStyle $style
   *   The image style being previewed.
   * @param \\Drupal\\file\\Entity\\File $image
   *   The image being previewed.
   * @param string $focal_point_value
   *   The focal point being previewed in the format XxY where x and y are the
   *   left and top offsets in percentages.
   *
   * @return \\Drupal\\Core\\GeneratedUrl|string
   *   The URL of the preview image.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => 'buildUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4e266769f9c23dca7776673212accda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Was a valid token found?
   *
   * Determine if a valid focal point token was provided in the query string of
   * the current request. If no token is provided in the query string then this
   * method will return FALSE.
   *
   * @return bool
   *   Indicates if a valid token was provided in the query string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\focal_point\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'focalpointimagewidget' => 'Drupal\\focal_point\\Plugin\\Field\\FieldWidget\\FocalPointImageWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'file' => 'Drupal\\file\\Entity\\File',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'url' => 'Drupal\\Core\\Url',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'openmodaldialogcommand' => 'Drupal\\Core\\Ajax\\OpenModalDialogCommand',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\focal_point\\Controller\\FocalPointPreviewController',
         'functionName' => 'validTokenProvided',
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