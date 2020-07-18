<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/src/ProviderPluginInterface.php-1587685827',
   'data' => 
  array (
    '82677ff53673f1400536630b048ebf22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Providers an interface for embed providers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderPluginInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7857a5fb40849f412a9bf1e4cd35dd81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if the plugin is applicable to the user input.
   *
   * @param string $input
   *   User input to check if it\'s a URL for the given provider.
   *
   * @return bool
   *   If the plugin works for the given URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderPluginInterface',
         'functionName' => 'isApplicable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01b94aedc4dcf00e3f38509ae190bf87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render a thumbnail.
   *
   * @param string $image_style
   *   The quality of the thumbnail to render.
   * @param string $link_url
   *   Where the thumbnail should be linked to.
   *
   * @return array
   *   A renderable array of a thumbnail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderPluginInterface',
         'functionName' => 'renderThumbnail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aaac9588f267d9d26e63f6f46ba816db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the URL of the remote thumbnail.
   *
   * This is used to download the remote thumbnail and place it on the local
   * file system so that it can be rendered with image styles. This is only
   * called if no existing file is found for the thumbnail and should not be
   * called unnecessarily, as it might query APIs for video thumbnail
   * information.
   *
   * @return string
   *   The URL to the remote thumbnail file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderPluginInterface',
         'functionName' => 'getRemoteThumbnailUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d8715fba3a52597bda45c8fcb9a59b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the URL to the local thumbnail.
   *
   * This method does not gartunee that the file will exist, only that it will
   * be the location of the thumbnail after the download thumbnail method has
   * been called.
   *
   * @return string
   *   The URI for the local thumbnail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderPluginInterface',
         'functionName' => 'getLocalThumbnailUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f68ff48f03ffd8f6d2c529791eae8d27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Download the remote thumbnail URL to the local thumbnail URI.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderPluginInterface',
         'functionName' => 'downloadThumbnail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a25326e6a0d2a9f7f4df70135cf1aa99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render embed code.
   *
   * @param string $width
   *   The width of the video player.
   * @param string $height
   *   The height of the video player.
   * @param bool $autoplay
   *   If the video should autoplay.
   *
   * @return mixed
   *   A renderable array of the embed code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderPluginInterface',
         'functionName' => 'renderEmbedCode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b873c0deb440fcb57aedc7e76a63fa4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the ID of the video from user input.
   *
   * @param string $input
   *   Input a user would enter into a video field.
   *
   * @return string
   *   The ID in whatever format makes sense for the provider.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderPluginInterface',
         'functionName' => 'getIdFromInput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9235dd5cdba3b035c838a94bcf59d6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the name of the video.
   *
   * @return string
   *   A name to represent the video for the given plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\video_embed_field',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\video_embed_field\\ProviderPluginInterface',
         'functionName' => 'getName',
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