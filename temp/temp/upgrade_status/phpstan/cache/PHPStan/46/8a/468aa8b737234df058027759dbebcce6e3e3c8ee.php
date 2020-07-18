<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/modules/video_embed_wysiwyg/src/Plugin/Filter/VideoEmbedWysiwyg.php-1587685827',
   'data' => 
  array (
    'a7024da883bf18037d169d2ab84063cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The filter to turn tokens inserted into the WYSIWYG into videos.
 *
 * @Filter(
 *   title = @Translation("Video Embed WYSIWYG"),
 *   id = "video_embed_wysiwyg",
 *   description = @Translation("Enables the use of video_embed_wysiwyg."),
 *   type = Drupal\\filter\\Plugin\\FilterInterface::TYPE_MARKUP_LANGUAGE
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'video' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter\\VideoEmbedWysiwyg',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b30b4dca5b2493cacfd10ae95f7e27a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The video provider manager.
   *
   * @var \\Drupal\\video_embed_field\\ProviderManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'video' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter\\VideoEmbedWysiwyg',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e27f59d5238c1effaa44a5a6f3aeb90b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'video' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter\\VideoEmbedWysiwyg',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '265719d83ebf660e86bb8ccfb832a834' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountProxyInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'video' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter\\VideoEmbedWysiwyg',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bca0fc6d6393ee7aa5275325c0deb30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * VideoEmbedWysiwyg constructor.
   *
   * @param array $configuration
   *   Plugin configuration.
   * @param string $plugin_id
   *   Plugin ID.
   * @param mixed $plugin_definition
   *   Plugin definition.
   * @param \\Drupal\\video_embed_field\\ProviderManagerInterface $provider_manager
   *   The video provider manager.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer.
   * @param \\Drupal\\Core\\Session\\AccountProxyInterface $current_user
   *   The current user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'video' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter\\VideoEmbedWysiwyg',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f7790850271602aa28f321b6bf6092c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'video' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter\\VideoEmbedWysiwyg',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08286501eb08895fa02160e4b2f35cc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'video' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter\\VideoEmbedWysiwyg',
         'functionName' => 'process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cc418f8058f4a06f29fce5d48c0b846' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all valid matches in the WYSIWYG.
   *
   * @param string $text
   *   The text to check for WYSIWYG matches.
   *
   * @return array
   *   An array of data from the text keyed by the text content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'video' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter\\VideoEmbedWysiwyg',
         'functionName' => 'getValidMatches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '042828030ce69898fce1866e168b4fa2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if the given settings are valid.
   *
   * @param array $settings
   *   Settings to validate.
   *
   * @return bool
   *   If the required settings are present.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountproxyinterface' => 'Drupal\\Core\\Session\\AccountProxyInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'video' => 'Drupal\\video_embed_field\\Plugin\\Field\\FieldFormatter\\Video',
          'providermanagerinterface' => 'Drupal\\video_embed_field\\ProviderManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
        ),
         'className' => 'Drupal\\video_embed_wysiwyg\\Plugin\\Filter\\VideoEmbedWysiwyg',
         'functionName' => 'isValidSettings',
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