<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/Plugin/Filter/BlazyFilter.php-1588969110',
   'data' => 
  array (
    '77a14ad8c9749321368b613c5ee63810' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a filter to lazyload image, or iframe elements.
 *
 * Best after Align images, caption images.
 *
 * @Filter(
 *   id = "blazy_filter",
 *   title = @Translation("Blazy"),
 *   description = @Translation("Lazyload inline images, or video iframes using Blazy."),
 *   type = Drupal\\filter\\Plugin\\FilterInterface::TYPE_TRANSFORM_REVERSIBLE,
 *   settings = {
 *     "filter_tags" = {"img" = "img", "iframe" = "iframe"},
 *     "media_switch" = "",
 *     "use_data_uri" = "0",
 *   },
 *   weight = 3
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d67b560628d804f132a09fb9690338b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The app root.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50c9e0502d4213dac65e7dbeaee64470' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity field manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53ca1a9063e2d65f4a9da4549aa3c383' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The blazy manager service.
   *
   * @var \\Drupal\\blazy\\BlazyManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36cdc35e1d48f0dc8d79f675cda900a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5be9e69dd9e2e266f8547e33e3d304d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9048ac81b428978d13feb7e44373c446' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1e6f41b2f9adfb86cc2d94c467082e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'buildSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b07b4f12d46ee7bd5cc63b8a2128e05a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return valid nodes based on the allowed tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'validNodes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55b5a0a0da8adf584713abadb9eaf391' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes nodes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'removeNodes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '541e25774822a51f1e156c368aa541b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'cleanupNodes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4506171983fbcb9d401a7f528a97e54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'buildGrid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09de4103114be256f72637066cd05b19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'buildImageItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c91bc460fa2714d3c1ddd8d6c28bc7bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'buildImageCaption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ba16356b5a17624b6f3cd8fe7e85f84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'getImageItemFromImageSrc',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70f45a5e81227016d3698bf975bcd523' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'getImageItemFromIframeSrc',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7594da1e29d5e07ab41fa5ed60fa9b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'buildItemSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '328e1dd81f0cca5391e1f258d06ecac7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'tips',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e095f17ecca55d44b729fd13224f701' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Filter',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'filterprocessresult' => 'Drupal\\filter\\FilterProcessResult',
          'filterbase' => 'Drupal\\filter\\Plugin\\FilterBase',
          'blazy' => 'Drupal\\blazy\\Blazy',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazyoembedinterface' => 'Drupal\\blazy\\BlazyOEmbedInterface',
          'blazyutil' => 'Drupal\\blazy\\BlazyUtil',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Filter\\BlazyFilter',
         'functionName' => 'settingsForm',
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