<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/image/src/Plugin/Field/FieldFormatter/ImageFormatter.php-1594234425',
   'data' => 
  array (
    '489f4641d17b48674c0cfadaa69ecda6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'image\' formatter.
 *
 * @FieldFormatter(
 *   id = "image",
 *   label = @Translation("Image"),
 *   field_types = {
 *     "image"
 *   },
 *   quickedit = {
 *     "editor" = "image"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc9c0e0e6280d4927b91a273e6c382d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '933cf66868c7abdcd8c1f09dc35e72dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The image style entity storage.
   *
   * @var \\Drupal\\image\\ImageStyleStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74eb0ce68429550c21a129061ff25477' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an ImageFormatter object.
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
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4d0a0aeed8b8f4fed38bce7fa0fb4fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a33763ab7be5ced532e46f931e075e92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => 'defaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7949b813d55db18add107b369bfb827b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57456b940d18e956f51c349aa4152969' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cedff8bd8fbb583ff7dfa7227cff01d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => 'viewElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bf6c8217a67902314dd1c61eaa00e18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a26731760e00857b76bcb68a0a0efa24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleInterface $style */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76927d19c21666a56577b6e284aabd07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5304dad2b3d29fad60cad88974172387' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleInterface $style */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'imagestyle' => 'Drupal\\image\\Entity\\ImageStyle',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\image\\Plugin\\Field\\FieldFormatter\\ImageFormatter',
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