<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/image/src/Plugin/Field/FieldWidget/ImageWidget.php-1594234425',
   'data' => 
  array (
    'c2b288c00939856cad7bfcb105e1a3f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'image_image\' widget.
 *
 * @FieldWidget(
 *   id = "image_image",
 *   label = @Translation("Image"),
 *   field_types = {
 *     "image"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8804113319111174f8a29da6a772492a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The image factory service.
   *
   * @var \\Drupal\\Core\\Image\\ImageFactory
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b44ba59e289b2c5daea9ce56e9751cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an ImageWidget object.
   *
   * @param string $plugin_id
   *   The plugin_id for the widget.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the widget is associated.
   * @param array $settings
   *   The widget settings.
   * @param array $third_party_settings
   *   Any third party settings.
   * @param \\Drupal\\Core\\Render\\ElementInfoManagerInterface $element_info
   *   The element info manager service.
   * @param \\Drupal\\Core\\Image\\ImageFactory $image_factory
   *   The image factory service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f07f9d1edcdd8dc0a0c495ac05474f6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'defaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b66ea6780df9d9cd3a43f1d8177dc6c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a04efe431e25cf3bdec212ad5a13273a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d38dbe476d02adbeb251c03be037d85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides \\Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget::formMultipleElements().
   *
   * Special handling for draggable multiple widgets and \'add more\' button.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'formMultipleElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '851361c91f913ca1ef4bd99cc622c455' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'formElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e32f08c6b318265dd0685d7cb1b9523' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form API callback: Processes a image_image field element.
   *
   * Expands the image_image type to include the alt and title fields.
   *
   * This method is assigned as a #process callback in formElement() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73072997862dfc46780331b239c37838' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate callback for alt and title field, if the user wants them required.
   *
   * This is separated in a validate function instead of a #required flag to
   * avoid being validated on the process callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'validateRequiredFields',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12bdbb9b5eac4c4643fe98e961f66184' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84f72cf813e13cc1b2c8afb4d14120e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleInterface $style */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac2ee993c20b3d24d850333d890d220d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8304861428ccb8747940079c3118a961' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleInterface $style */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0433ae235fc2d3c0c3d93465de9f3d0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'imagefactory' => 'Drupal\\Core\\Image\\ImageFactory',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'filewidget' => 'Drupal\\file\\Plugin\\Field\\FieldWidget\\FileWidget',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldWidget\\ImageWidget',
         'functionName' => 'onDependencyRemoval',
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