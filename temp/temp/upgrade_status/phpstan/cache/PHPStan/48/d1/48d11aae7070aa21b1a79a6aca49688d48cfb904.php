<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/image/src/Plugin/Field/FieldType/ImageItem.php-1594234425',
   'data' => 
  array (
    '9dc17aa30c3c3799bcf8c78e70f3c305' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'image\' field type.
 *
 * @FieldType(
 *   id = "image",
 *   label = @Translation("Image"),
 *   description = @Translation("This field stores the ID of an image file as an integer value."),
 *   category = @Translation("Reference"),
 *   default_widget = "image_image",
 *   default_formatter = "image",
 *   column_groups = {
 *     "file" = {
 *       "label" = @Translation("File"),
 *       "columns" = {
 *         "target_id", "width", "height"
 *       },
 *       "require_all_groups_for_translation" = TRUE
 *     },
 *     "alt" = {
 *       "label" = @Translation("Alt"),
 *       "translatable" = TRUE
 *     },
 *     "title" = {
 *       "label" = @Translation("Title"),
 *       "translatable" = TRUE
 *     },
 *   },
 *   list_class = "\\Drupal\\file\\Plugin\\Field\\FieldType\\FileFieldItemList",
 *   constraints = {"ReferenceAccess" = {}, "FileValidation" = {}}
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fd6e209ff67119e816758ccdb425801' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e05e8be923145271c9ed9f727a99f63a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'defaultStorageSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b233cf7171283cd3b408b3d8748e4aee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'defaultFieldSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '739b47b1d124f2c655acb4334c0f2901' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'schema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20fa8b6a0e20708af1e796f4412c6d8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'propertyDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b931f65ae0ac097bc36f950831302512' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'storageSettingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b64310f9f0f95bfc908f40641291231' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'fieldSettingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76a23c73fbc7afdd949d3d8287c44ec6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e25f1456ea21852657003d501da491b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'generateSampleValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3229645febdbb89927d3be4e08c7c600' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'generateSampleValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a95ad71478872b9e887f5a03c8c837b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Element validate function for resolution fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'validateResolution',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cbe6598b5cce13fde87a3f2411979dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the default_image details element.
   *
   * @param array $element
   *   The form associative array passed by reference.
   * @param array $settings
   *   The field settings array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'defaultImageForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f7b693bcdafda38aa36dbd24ad6729a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the managed_file element for the default Image form.
   *
   * This function ensures the fid is a scalar value and not an array. It is
   * assigned as a #element_validate callback in
   * \\Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem::defaultImageForm().
   *
   * @param array $element
   *   The form element to process.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'validateDefaultImageForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ba602ceda50a71a4a19a4b66bade10a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'isDisplayed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c389a7b293bbce75e6b794ea96cec2f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityManagerInterface
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal::entityTypeManager() instead in most cases. If the needed method
   *   is not on \\Drupal\\Core\\Entity\\EntityTypeManagerInterface, see the
   *   deprecated \\Drupal\\Core\\Entity\\EntityManager to find the correct
   *   interface or service.
   *
   * @see https://www.drupal.org/node/2549139
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'file' => 'Drupal\\file\\Entity\\File',
          'fileitem' => 'Drupal\\file\\Plugin\\Field\\FieldType\\FileItem',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
         'functionName' => 'getEntityManager',
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