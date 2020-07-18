<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/tests/src/Kernel/EntityReferenceRevisionsCompositeTranslationTest.php-1583961090,/var/www/html/web/core/modules/node/tests/src/Traits/ContentTypeCreationTrait.php-1594234425,/var/www/html/web/core/modules/node/tests/src/Traits/NodeCreationTrait.php-1594234425',
   'data' => 
  array (
    'aab8b59bbbb7f6c2bc85ca18ff881126' => 
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
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f31001dabc238d33acc992e57da864c4' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90bd5badbe89cac6d4d199218a4f3ba2' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'createContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '768c1e5170b8ed508b4de1c3afab9c70' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48327a9e5a07b0cda1155d9cea5f17db' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'getNodeByTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7dd77b1d2b2d6340abea22778342ed6e' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d127ab39c839da54cfc94534463a42c' => 
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8dbf7fb79531e73407aa56aed2ca465e' => 
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
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a799a0e846f8b6dff39525958e34d86' => 
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
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8655068b8b7ec82ec56b57a606b8aad' => 
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
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c9a145787ff7f126159dce1f6e70446' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e75b79eecac8b6b7a63d24a3905c29c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the storage for handling pending revisions with translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '143ac85ec8d2ed5af5bbbd1796e05016' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeStorageInterface $node_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c74e83adcb57191a42552660a8d2b14a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef2525d7d9ba808bd5c4d64fbde0635c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node_de */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7af41703a76f5aa7b9cf05ac8c566c58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node_fr */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testCompositePendingRevisionTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c70d5667a943fbd6056fd5af6353eb95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that composite translations affects the host entity\'s translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testCompositeTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c407c668aaae54c7985c1961c3c03f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeStorageInterface $node_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testCompositeTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c5f9171cb4be0f65037adae1b841829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testCompositeTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f465aa08b818909c71a69aa0a8a0359' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that nested composite translations affects the host translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testNestedCompositeTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7127c256f8ed512f6d89b07bff5abdb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeStorageInterface $node_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testNestedCompositeTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f126bcd39eb37932b83cee2b4d9e665' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'testNestedCompositeTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c3f70f897516be6c147e21327fdc2ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the affected revision count of a certain entity.
   *
   * @param int $expected
   *   The expected count.
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
         'functionName' => 'assertAffectedRevisionCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '550d958c5d6d1c002e6e3a3473d0b62c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the revision count of an entity.
   *
   * @param int $expected
   *   The expected amount of revisions.
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
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
         'className' => 'Drupal\\Tests\\entity_reference_revisions\\Kernel\\EntityReferenceRevisionsCompositeTranslationTest',
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