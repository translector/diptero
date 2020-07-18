<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/src/Plugin/Field/FieldFormatter/Video.php-1587685827',
   'data' => 
  array (
    '658eef31e111b4a00b582da2384bd62c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the video field formatter.
 *
 * @FieldFormatter(
 *   id = "video_embed_field_video",
 *   label = @Translation("Video"),
 *   field_types = {
 *     "video_embed_field"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ae499df5f5e808cae7f8e2c79503df8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The embed provider plugin manager.
   *
   * @var \\Drupal\\video_embed_field\\ProviderManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '388ce2c09a062baa99739a4233c7a4cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logged in user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb9d54732b0b1979709ce963231b8a02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new instance of the plugin.
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
   *   Third party settings.
   * @param \\Drupal\\video_embed_field\\ProviderManagerInterface $provider_manager
   *   The video embed provider manager.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The logged in user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d55c61efafe484b2e49bb6a831deeae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3472630385f82e4ad04d070836742f59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => 'viewElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bed05e7594924ecaf1cb1f3147f929cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => 'defaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d6ab3fdd241645e3bbce68676489acb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e674b38b1ec509c401e0bef18e0317d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b37548daf7dc412e3432dfd864c0564' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an instance of the Video field formatter plugin.
   *
   * This is useful because there is a lot of overlap to the configuration and
   * display of a video in a WYSIWYG and configuring a field formatter. We
   * get an instance of the plugin with our own WYSIWYG settings shimmed in,
   * as well as a fake field_definition because one in this context doesn\'t
   * exist. This allows us to reuse aspects such as the form and settings
   * summary for the WYSIWYG integration.
   *
   * @param array $settings
   *   The settings to pass to the plugin.
   *
   * @return static
   *   The formatter plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
         'functionName' => 'mockInstance',
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