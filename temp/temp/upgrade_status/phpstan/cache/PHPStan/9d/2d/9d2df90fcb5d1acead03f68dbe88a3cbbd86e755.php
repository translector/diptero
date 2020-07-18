<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/tests/src/FunctionalJavascript/ColorboxFormatterTest.php-1587685827,/var/www/html/web/modules/contrib/video_embed_field/tests/src/Functional/EntityDisplaySetupTrait.php-1587685827,/var/www/html/web/core/modules/node/tests/src/Traits/ContentTypeCreationTrait.php-1594234425,/var/www/html/web/core/modules/node/tests/src/Traits/NodeCreationTrait.php-1594234425',
   'data' => 
  array (
    '320fded15fbdfb8607d0ad60d57f66f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test the colorbox formatter.
 *
 * @group video_embed_field
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'entitydisplaysetuptrait' => 'Drupal\\Tests\\video_embed_field\\Functional\\EntityDisplaySetupTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f08f6adc419b32a77cc028f5dfd48183' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A trait for manipulating entity display.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca2215df0074fbfba1fc9350bb65e7f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create content type from given values.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e5eda44cccfb69f437732266eedc76e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a custom content type based on default settings.
   *
   * @param array $values
   *   An array of settings to change from the defaults.
   *   Example: \'type\' => \'foo\'.
   *
   * @return \\Drupal\\node\\Entity\\NodeType
   *   Created content type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'createContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b634f281392c11c3a4f985f8ae6be660' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create node based on default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebba481e10a7b6f69a546137de606f9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a node from the database based on its title.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $title
   *   A node title, usually generated by $this->randomMachineName().
   * @param $reset
   *   (optional) Whether to reset the entity cache.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   A node entity matching $title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'getNodeByTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f28a507c59ba3cea6a728efee01a5434' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a node based on default settings.
   *
   * @param array $values
   *   (optional) An associative array of values for the node, as used in
   *   creation of entity. Override the defaults by specifying the key and value
   *   in the array, for example:
   *
   *   @code
   *     $this->drupalCreateNode(array(
   *       \'title\' => t(\'Hello, world!\'),
   *       \'type\' => \'article\',
   *     ));
   *   @endcode
   *   The following defaults are provided:
   *   - body: Random string using the default filter format:
   *     @code
   *       $values[\'body\'][0] = array(
   *         \'value\' => $this->randomMachineName(32),
   *         \'format\' => filter_default_format(),
   *       );
   *     @endcode
   *   - title: Random string.
   *   - type: \'page\'.
   *   - uid: The currently logged in user, or anonymous.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   The created node entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0bf26cddffd21f6ad8790d99aaf933f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $user */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c08dbc3e945a37d3f40ec614c473cbe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field name.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cf9dad900aa09a66f0d4cd0809eadfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the content type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cbf5b9e5b4f934fc4825d6a660c23e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity display.
   *
   * @var \\Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd457f1113555cd2a3a9a5791ec6b5ab6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The form display.
   *
   * @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd451a5eeb6ed7d0fa61ed8601691616' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Setup the entity displays with required fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'setupEntityDisplays',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0e71ec66d4f5646625430bb3ad73052' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set component settings for the display.
   *
   * @param string $type
   *   The component to change settings for.
   * @param array $settings
   *   The settings to use.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'setDisplayComponentSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1a24f8788d1fceb5f5bca51d41db919' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set component settings for the form.
   *
   * @param string $type
   *   The component to change settings for.
   * @param array $settings
   *   The settings to use.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'setFormComponentSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62288c40be6d131857d1a4233e04c002' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a video node using the video field.
   *
   * @param string $value
   *   The video URL to use for the field value.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   A node.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'createVideoNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62abdc6a826e0d79a695dea39cc9cee0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'entitydisplaysetuptrait' => 'Drupal\\Tests\\video_embed_field\\Functional\\EntityDisplaySetupTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5d8cb6e0fce188f8ef38310bae11553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * How long it takes for colorbox to open.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'entitydisplaysetuptrait' => 'Drupal\\Tests\\video_embed_field\\Functional\\EntityDisplaySetupTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba29639077e69f43bf7da58868da1423' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'entitydisplaysetuptrait' => 'Drupal\\Tests\\video_embed_field\\Functional\\EntityDisplaySetupTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73d5ff2bc923f233875f033ddb1298c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the colorbox formatter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'entitydisplaysetuptrait' => 'Drupal\\Tests\\video_embed_field\\Functional\\EntityDisplaySetupTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\FunctionalJavascript\\ColorboxFormatterTest',
         'functionName' => 'testColorboxFormatter',
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