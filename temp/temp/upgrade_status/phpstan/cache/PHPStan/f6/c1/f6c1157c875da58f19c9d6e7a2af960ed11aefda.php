<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/src/Plugin/Field/FieldType/EntityReferenceRevisionsItem.php-1583961090',
   'data' => 
  array (
    '90aad485ebf24aff46af85036a416ff1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the \'entity_reference_revisions\' entity field type.
 *
 * Supported settings (below the definition\'s \'settings\' key) are:
 * - target_type: The entity type to reference. Required.
 * - target_bundle: (optional): If set, restricts the entity bundles which may
 *   may be referenced. May be set to an single bundle, or to an array of
 *   allowed bundles.
 *
 * @FieldType(
 *   id = "entity_reference_revisions",
 *   label = @Translation("Entity reference revisions"),
 *   description = @Translation("An entity field containing an entity reference to a specific revision."),
 *   category = @Translation("Reference revisions"),
 *   no_ui = FALSE,
 *   class = "\\Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem",
 *   list_class = "\\Drupal\\entity_reference_revisions\\EntityReferenceRevisionsFieldItemList",
 *   default_formatter = "entity_reference_revisions_entity_view",
 *   default_widget = "entity_reference_revisions_autocomplete"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18048ab8e3e7226027e20b057ac1805f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'storageSettingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a17afb1d4a7c242a84f6c442a29a0e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'getPreconfiguredOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7688702284c0d6edfd3cb3f0d014317d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'getPreconfiguredOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '252c1f28ffcf08a7f8da5e9c61214b97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'propertyDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '557e87d26582d085643ece1274f98b3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'schema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a91e0ca5962c92491adfefb347bbc5f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'setValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0eb283c73ae6cb2792e2af946536683f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'getValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8432c6b8f412f06cee7beca168b5e23c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'onChange',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7b1e590abea02ef09e023f2eeeb440a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'isEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06ade1b3f7482b0760820aad8a8e3c5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a40942c1b50f0a1a48265424bab3c26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18ba45333d140b7afbdd54de556beb99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'deleteRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd842cb531d9b3f5379890fcd20170ad6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64e4d08ea5c8084bcc30b9bdd64eb9c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e8a71612d61c957fb5623f7459d7a0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'translatablerevisionableinterface' => 'Drupal\\Core\\Entity\\TranslatableRevisionableInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'preconfiguredfielduioptionsinterface' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datareferencedefinition' => 'Drupal\\Core\\TypedData\\DataReferenceDefinition',
          'datareferencetargetdefinition' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'entityneedssaveinterface' => 'Drupal\\entity_reference_revisions\\EntityNeedsSaveInterface',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\Field\\FieldType\\EntityReferenceRevisionsItem',
         'functionName' => 'generateSampleValue',
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