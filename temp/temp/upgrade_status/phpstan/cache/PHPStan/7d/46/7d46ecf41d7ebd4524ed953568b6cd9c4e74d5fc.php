<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/bg_image_formatter/src/Plugin/Field/FieldFormatter/BgImageFormatter.php-1585044232,/var/www/html/web/core/lib/Drupal/Core/Ajax/AjaxHelperTrait.php-1594234425',
   'data' => 
  array (
    'a76f829c3ef3a3c57b4bb5f529bd7168' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Class BgImageFormatter.
 *
 * @FieldFormatter(
 *     id="bg_image_formatter",
 *     label=@Translation("Background Image"),
 *     field_types={"image"}
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57d17625e3675ea886d79b1f553a0bd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a helper to determine if the current request is via AJAX.
 *
 * @internal
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de32726187104020e0192575ed39de9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the current request is via AJAX.
   *
   * @return bool
   *   TRUE if the current request is via AJAX, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ec44d1e6a6fbf94a216f0005627cf7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the wrapper format of the current request.
   *
   * @string
   *   The wrapper format.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Ajax',
         'uses' => 
        array (
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => 'getRequestWrapperFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b538d45408d57ddbd582888132a275f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer service.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a08b769653ba69597746a6c2e561e7e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current request.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\Request
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '027173c27325f62c63406a524ea20b1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * BgImageFormatter constructor.
   *
   * @param string $plugin_id
   *   The plugin_id for the formatter.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the formatter is associated.
   * @param array $settings
   *   The formatter settings.
   * @param string $label
   *   The formatter label display setting.
   * @param string $view_mode
   *   The view mode.
   * @param array $third_party_settings
   *   Any third party settings settings.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $image_style_storage
   *   The image style storage.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer service.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f983e83e513f66940918be59cebd3a14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12f620aef9e9958e8defc3d6d85746c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => 'defaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61ae9a6d52f21dc1d197e779bb17a2c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Function taken from the module \'bg_image\'.
   *
   * Adds a background image to the page using the
   * css \'background\' property.
   *
   * @param string $image_path
   *   The path of the image to use. This can be either
   *      - A relative path e.g. sites/default/files/image.png
   *      - A uri: e.g. public://image.png.
   * @param array $css_settings
   *   An array of css settings to use. Possible values are:
   *      - bg_image_selector: The css selector to use
   *      - bg_image_color: The background color
   *      - bg_image_x: The x offset
   *      - bg_image_y: The y offset
   *      - bg_image_attachment: The attachment property (scroll or fixed)
   *      - bg_image_repeat: The repeat settings
   *      - bg_image_background_size: The background size property if necessary
   *    Default settings will be used for any values not provided.
   * @param string $image_style
   *   Optionally add an image style to the image before applying it to the
   *   background.
   *
   * @return array
   *   The array containing the CSS.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => 'getBackgroundImageCss',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '933e54f803b0ee9ea093dee2e5cc3baf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a36f3d0b1f451e6300ac773e395aa2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f342256691764f10b5b3b07091f74603' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => 'viewElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fe0f0ad7738d76e200e3a415953b624' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges default settings values into $settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'ajaxhelpertrait' => 'Drupal\\Core\\Ajax\\AjaxHelperTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imageformatter' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'arrayutils' => 'Zend\\Stdlib\\ArrayUtils',
        ),
         'className' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
         'functionName' => 'mergeDefaults',
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