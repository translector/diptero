<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/tests/src/Kernel/EntityReferenceRevisionsCompositeTest.php-1583961090,/var/www/html/web/core/modules/node/tests/src/Traits/ContentTypeCreationTrait.php-1594234425,/var/www/html/web/core/modules/node/tests/src/Traits/NodeCreationTrait.php-1594234425',
   'data' => 
  array (
    'e074fc1bda0328369f54b88d59cd53f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the entity_reference_revisions composite relationship.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32bebd28c061fdb09d8f54e1582bf64f' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f60f2ca4fe606d80a4c06cd2da25084' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'createContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca4689b6940a0c712d94ebc7c69ceedc' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '963ffae3458b0bdc0a1b60c408cfdf81' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'getNodeByTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6472f9629bf03fc84ceb49951318e086' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af61a60788651de63cd9bbb35ea9510b' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87faec752de46d67492abc90aad66380' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6ce3e94d3a5cc60300c701a05d9dd4a' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03d35d6aeb3cbc296944bafc81333bbe' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4aec75cead993c543e4c3bed42674c7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cron service.
   *
   * @var \\Drupal\\Core\\Cron
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91f27118f990334e8f605a6814bff8f4' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8213967c53ee44e2b2d57da15425f03b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test for maintaining composite relationship.
   *
   * Tests that the referenced entity saves the parent type and id when saving.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testEntityReferenceRevisionsCompositeRelationship',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d6dd94aa7cd363eeda356faaa234d33' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testEntityReferenceRevisionsCompositeRelationship',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43c2c95cd0b9f5231658d7b77edf9152' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests composite relationship with translations and an untranslatable field.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeRelationshipWithTranslationNonTranslatableField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f48f9301d15da7c8c260e3d2f5bdb54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests composite relationship with translations and a translatable field.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeRelationshipWithTranslationTranslatableField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '086e498091bd193cac5a6dfb26cd2a0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests composite relationship with revisions.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeRelationshipWithRevisions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '182406dfdb2af0ee0c2175d56faafe7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that the composite revision is not deleted if it is the default one.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeRelationshipDefaultRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ca5aaeff5d8135912d7a7a023a9cd8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that the composite revision is not deleted if it is still in use.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeRelationshipDuplicatedRevisions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee28c96094f4ad48a8900f2b326bf798' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the composite entity is deleted after removing its reference.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeDeleteAfterRemovingReference',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64086094e5b67f02ec0285b60b0a38ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the composite entity is deleted after removing its reference.
   *
   * Includes revisions on the host entity.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeDeleteAfterRemovingReferenceWithRevisions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd242b80e193856d3a88e37f69527566' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the composite entity is not deleted when changing parents.
   *
   * Includes revisions on the host entity.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeDeleteAfterChangingParent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eeb053aae6abda01fe22bde65fef117b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Composite entity with revisions isn\'t deleted when changing parents.
   *
   * Includes revisions on the host entity.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeDeleteRevisionAfterChangingParent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c556bc8d72206fcd3a0fc3ff869acc5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the composite entity is not deleted when duplicating host entity.
   *
   * Includes revisions on the host entity.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'testCompositeDeleteAfterDuplicatingParent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e10f5b478bafc6e79eceb13a6aef814' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'assertRevisionCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '752214906f9ad1f29a145ce22b33041d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates and assigns the composite entity to a node.
   *
   * @param string $node_type
   *   The node type.
   *
   * @return array
   *   An array containing a composite and a node entity.
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTest',
         'functionName' => 'assignCompositeToNode',
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