<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/modules/video_embed_media/src/Plugin/media/Source/VideoEmbedField.php-1587685827',
   'data' => 
  array (
    '6cc506cd25237cb56bfebc7651482258' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides media source plugin for video embed field.
 *
 * @MediaSource(
 *   id = "video_embed_field",
 *   label = @Translation("Video embed field"),
 *   description = @Translation("Enables video_embed_field integration with media."),
 *   allowed_field_types = {"video_embed_field"},
 *   default_thumbnail_filename = "video.png"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c51fd19cc87773d003fe16456a205873' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The video provider manager.
   *
   * @var \\Drupal\\video_embed_field\\ProviderManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '006a74585d860718ab9b81a770fffec7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The media settings.
   *
   * @var \\Drupal\\Core\\Config\\Config
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '339104dba0b5aa07a3ea8f2a82f53122' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new class instance.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   Entity type manager service.
   * @param \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager
   *   Entity field manager service.
   * @param \\Drupal\\Core\\Field\\FieldTypePluginManagerInterface $field_type_manager
   *   Config field type manager service.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   Config factory service.
   * @param \\Drupal\\video_embed_field\\ProviderManagerInterface $provider_manager
   *   The video provider manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bca34e3b502fab1613fcb033d66f7f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '406033c0a66759dbfe72d0564d3a8107' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3be4c98bff9ec808bb2787b1310b8e55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => 'getMetadata',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69b57d9aaaebd6f03cce6f734ad04cc3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => 'getMetadataAttributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c83dd9d8bcc2041a348d0f341afa477' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the video URL from a media entity.
   *
   * @param \\Drupal\\media\\MediaInterface $media
   *   The media entity.
   *
   * @return string|bool
   *   A video URL or FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => 'getVideoUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5390a6a3cc5ae3ea3d5f9d2e5f7dfce4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => 'createSourceField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f15e1a3b0203cc259a0412a545350e23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_media\\Plugin\\media\\Source',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'mediainterface' => 'Drupal\\media\\MediaInterface',
          'mediasourcebase' => 'Drupal\\media\\MediaSourceBase',
          'mediatypeinterface' => 'Drupal\\media\\MediaTypeInterface',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\video_embed_media\\Plugin\\media\\Source\\VideoEmbedField',
         'functionName' => 'getSourceFieldDefinition',
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