<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/src/Plugin/DataType/EntityReferenceRevisions.php-1583961090',
   'data' => 
  array (
    '8ff58babb576bde0a06dffdeea5295a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an \'entity_reference_revisions\' data type.
 *
 * This serves as \'entity\' property of entity reference field items and gets
 * its value set from the parent, i.e. LanguageItem.
 *
 * The plain value of this reference is the entity object, i.e. an instance of
 * \\Drupal\\Core\\Entity\\EntityInterface. For setting the value the entity object
 * or the entity ID may be passed.
 *
 * Note that the definition of the referenced entity\'s type is required, whereas
 * defining referencable entity bundle(s) is optional. A reference defining the
 * type and bundle of the referenced entity can be created as following:
 * @code
 * $definition = \\Drupal\\Core\\Entity\\EntityDefinition::create($entity_type)
 *   ->addConstraint(\'Bundle\', $bundle);
 * \\Drupal\\Core\\TypedData\\DataReferenceDefinition::create(\'entity_revision\')
 *   ->setTargetDefinition($definition);
 * @endcode
 *
 * @DataType(
 *   id = "entity_revision_reference",
 *   label = @Translation("Entity reference revisions"),
 *   definition_class = "\\Drupal\\Core\\TypedData\\DataReferenceDefinition"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType\\EntityReferenceRevisions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebd691e46bd269428c4e7bcdaf47c20a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity revision ID.
   *
   * @var integer|string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType\\EntityReferenceRevisions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bfb77b14b4e6b93f5bbcb34e81c3611' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity ID.
   *
   * @var integer|string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType\\EntityReferenceRevisions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48e634e5a39fcb472dafb5cc816169f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the definition of the referenced entity.
   *
   * @return \\Drupal\\Core\\Entity\\TypedData\\EntityDataDefinitionInterface
   *   The reference target\'s definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType\\EntityReferenceRevisions',
         'functionName' => 'getTargetDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3486fe58061f2831e162a89cc43d870e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the target entity has not been saved yet.
   *
   * @return bool
   *   TRUE if the entity is new, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType\\EntityReferenceRevisions',
         'functionName' => 'isTargetNew',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dbcd22f4e2a2771d81c8d95033be6657' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType\\EntityReferenceRevisions',
         'functionName' => 'getTarget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bd14f6a73c729e491c84870555574df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType\\EntityReferenceRevisions',
         'functionName' => 'getTargetIdentifier',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67fc15db54172b4a07c783921ae02d4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType\\EntityReferenceRevisions',
         'functionName' => 'setValue',
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