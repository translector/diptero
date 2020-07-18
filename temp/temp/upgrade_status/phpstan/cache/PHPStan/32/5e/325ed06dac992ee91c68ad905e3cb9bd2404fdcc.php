<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/tests/src/Kernel/EntityReferenceRevisionsCompositeTranslatableFieldTest.php-1583961090,/var/www/html/web/core/modules/node/tests/src/Traits/ContentTypeCreationTrait.php-1594234425,/var/www/html/web/core/modules/node/tests/src/Traits/NodeCreationTrait.php-1594234425',
   'data' => 
  array (
    '0537d945d88d672b711607b8deaa2699' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests entity_reference_revisions composites with a translatable field.
 *
 * @group entity_reference_revisions
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f3d37a3d65be651a922f4c5d3a1336b' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4906ea02d3efee4b83c831346f1980ea' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'createContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9d37006ff02545b390ddab1d737b16c' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70096b26a4cfcd57eb61e678428e3615' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'getNodeByTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c50e71f2b0954015a9664938b7caa25' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d0a6fcd1a5ea1e8f9c44924d726abdc' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e599564b2d939ef75eace4112a4b16f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '050332d6ecc7607acb23e166401de487' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current database connection.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2bd066f621fcae6bd0d963251fd0443' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   *
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51ec9bbf9d680a9c54beb6ff39dbf556' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c682fbd3403266d6b9bf72e2cedbf596' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the storage for handling pending revisions with translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abcd614a53034a4ffbd199ba4fd94159' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeStorageInterface $node_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54b561082b9124561f72addb7127ec8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '129235a5229983ae93b63ea1db0c88d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node_de */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0028faa84023fc198b87a9c09aef53a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node_revision */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80ca2f11f63590982e3ff2d0e9d255c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node_fr */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21c714934bd65c3ebadf8c0ca1e84f95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the revision count of a certain entity.
   *
   * @param int $expected
   *   The expected count.
   * @param string $entity_type_id
   *   The entity type ID, e.g. node.
   * @param int $entity_id
   *   The entity ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entitytestcompositerelationship' => 'Drupal\\entity_composite_relationship_test\\Entity\\EntityTestCompositeRelationship',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslatableFieldTest',
         'functionName' => 'assertRevisionCount',
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