<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Entity/Plugin/DataType/EntityReference.php-1594234425',
   'data' => 
  array (
    'ac026e540262f99e98293021650a2621' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an \'entity_reference\' data type.
 *
 * This serves as \'entity\' property of entity reference field items and gets
 * its value set from the parent, i.e. LanguageItem.
 *
 * The plain value of this reference is the entity object, i.e. an instance of
 * \\Drupal\\Core\\Entity\\EntityInterface. For setting the value the entity object
 * or the entity ID may be passed.
 *
 * Note that the definition of the referenced entity\'s type is required, whereas
 * defining referenceable entity bundle(s) is optional. A reference defining the
 * type and bundle of the referenced entity can be created as following:
 * @code
 * $definition = \\Drupal\\Core\\Entity\\EntityDefinition::create($entity_type)
 *   ->addConstraint(\'Bundle\', $bundle);
 * \\Drupal\\Core\\TypedData\\DataReferenceDefinition::create(\'entity\')
 *   ->setTargetDefinition($definition);
 * @endcode
 *
 * @DataType(
 *   id = "entity_reference",
 *   label = @Translation("Entity reference"),
 *   definition_class = "\\Drupal\\Core\\TypedData\\DataReferenceDefinition"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'datareferencebase' => 'Drupal\\Core\\TypedData\\DataReferenceBase',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec051b4ef7e1a7afb2eac06dd177c5f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity ID.
   *
   * @var int|string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'datareferencebase' => 'Drupal\\Core\\TypedData\\DataReferenceBase',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '986f6a7695886341690c2ff0055ef067' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the definition of the referenced entity.
   *
   * @return \\Drupal\\Core\\Entity\\TypedData\\EntityDataDefinitionInterface
   *   The reference target\'s definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'datareferencebase' => 'Drupal\\Core\\TypedData\\DataReferenceBase',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
         'functionName' => 'getTargetDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b35e6101a49be9d73034b908c33eb811' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the target entity has not been saved yet.
   *
   * @return bool
   *   TRUE if the entity is new, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'datareferencebase' => 'Drupal\\Core\\TypedData\\DataReferenceBase',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
         'functionName' => 'isTargetNew',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddd330dca9817ec2ea6437fd49afe985' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'datareferencebase' => 'Drupal\\Core\\TypedData\\DataReferenceBase',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
         'functionName' => 'getTarget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c252619dea5268ddb23a8b4b09d473f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'datareferencebase' => 'Drupal\\Core\\TypedData\\DataReferenceBase',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
         'functionName' => 'getTargetIdentifier',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5df81b061ba78ba1bed2abdde5d579c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'datareferencebase' => 'Drupal\\Core\\TypedData\\DataReferenceBase',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
         'functionName' => 'setValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '963715f60af2a74108d5856d5a7d350e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'datareferencebase' => 'Drupal\\Core\\TypedData\\DataReferenceBase',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
         'functionName' => 'getString',
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