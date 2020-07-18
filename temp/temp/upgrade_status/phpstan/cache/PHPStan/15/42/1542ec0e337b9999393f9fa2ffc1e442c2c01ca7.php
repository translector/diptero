<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/Plugin/Field/FieldFormatter/BlazyOEmbedFormatter.php-1588969110,/var/www/html/web/modules/contrib/blazy/src/Dejavu/BlazyDependenciesTrait.php-1588969110,/var/www/html/web/modules/contrib/blazy/src/Plugin/Field/FieldFormatter/BlazyFormatterTrait.php-1588969110,/var/www/html/web/modules/contrib/blazy/src/Plugin/Field/FieldFormatter/BlazyFormatterViewTrait.php-1588969110',
   'data' => 
  array (
    '3bce8ba9bb87e00b29a33f2f099ea140' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin for blazy oembed formatter.
 *
 * @FieldFormatter(
 *   id = "blazy_oembed",
 *   label = @Translation("Blazy"),
 *   field_types = {
 *     "link",
 *     "string",
 *     "string_long",
 *   }
 * )
 *
 * @see \\Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyMediaFormatterBase
 * @see \\Drupal\\media\\Plugin\\Field\\FieldFormatter\\OEmbedFormatter
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'oembedinterface' => 'Drupal\\media\\Plugin\\media\\Source\\OEmbedInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazydependenciestrait' => 'Drupal\\blazy\\Dejavu\\BlazyDependenciesTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e982a79aeb9099656dc6b6a14e7602a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Trait common for file, image or media to handle dependencies.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca23338fd8f8117c9f62a89a10beb505' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2eda88f6d326961ba3e9a25bdcc9ed8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleInterface $style */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c61db88cfe6a101dd9a75910e1ba7c5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\responsive_image\\ResponsiveImageStyleInterface $style */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a8e78abee52067cb43cbff763a9e7ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff505ad748bbaff2345719fc6ece8182' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleInterface $style */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Dejavu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2faacba5492fa8d476dce46ebb6a2b41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Trait common for all blazy formatters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c22f0607a8917a970fb353e2dbfc9879' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The blazy manager service.
   *
   * @var \\Drupal\\blazy\\BlazyFormatterManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '313228b1feac9bb8858c4f18ad301f1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The blazy manager service.
   *
   * @var \\Drupal\\blazy\\BlazyManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e14d8a343bb62533975ef8a0c74d8630' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the blazy formatter manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'formatter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d7588492d6920430d609be568ffaa1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the blazy manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'blazyManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba7ae9b511a76c65d89290f603b41133' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the blazy admin service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'admin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad92af1bb78b2a6907986eb7bc5d07a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Injects DI services.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'injectServices',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97bc1b20f72890aa73f857c66c46eaac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a15045abae77f7a9750c409f0008a445' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'buildSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '830baa40122cd561f28c37a200343e97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines the common scope for both front and admin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'getCommonFieldDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ae6d3c804fd38269668fc7fea1898c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines the common scope for the form elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'getCommonScopedFormElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a7e9f89070d9cbfb541af209a78af53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Trait common for all blazy formatters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e4a274eebd9d6c92d6b986447db2711' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns similar view elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'commonViewElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2f5d7b9312e93eda9e86b70e600e572' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'oembedinterface' => 'Drupal\\media\\Plugin\\media\\Source\\OEmbedInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazydependenciestrait' => 'Drupal\\blazy\\Dejavu\\BlazyDependenciesTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64515a98e8fb7017040523ccedfaf2b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'oembedinterface' => 'Drupal\\media\\Plugin\\media\\Source\\OEmbedInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazydependenciestrait' => 'Drupal\\blazy\\Dejavu\\BlazyDependenciesTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'defaultSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76e96d504bb4ae37bbccb1d583d836c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'oembedinterface' => 'Drupal\\media\\Plugin\\media\\Source\\OEmbedInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazydependenciestrait' => 'Drupal\\blazy\\Dejavu\\BlazyDependenciesTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'viewElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e38a73359afffb94d202103c2b514755' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the blazy elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'oembedinterface' => 'Drupal\\media\\Plugin\\media\\Source\\OEmbedInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazydependenciestrait' => 'Drupal\\blazy\\Dejavu\\BlazyDependenciesTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'buildElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e39f62b202246fd927d6a6f9ebe9d2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'oembedinterface' => 'Drupal\\media\\Plugin\\media\\Source\\OEmbedInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazydependenciestrait' => 'Drupal\\blazy\\Dejavu\\BlazyDependenciesTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f265cf6361fa779f2d73cc294bbc7d22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'oembedinterface' => 'Drupal\\media\\Plugin\\media\\Source\\OEmbedInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazydependenciestrait' => 'Drupal\\blazy\\Dejavu\\BlazyDependenciesTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'getScopedFormElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cd68a50a9999162eef51817dc5c2ecd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
          'oembedinterface' => 'Drupal\\media\\Plugin\\media\\Source\\OEmbedInterface',
          'blazydefault' => 'Drupal\\blazy\\BlazyDefault',
          'blazydependenciestrait' => 'Drupal\\blazy\\Dejavu\\BlazyDependenciesTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\blazy\\Plugin\\Field\\FieldFormatter\\BlazyOEmbedFormatter',
         'functionName' => 'isApplicable',
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