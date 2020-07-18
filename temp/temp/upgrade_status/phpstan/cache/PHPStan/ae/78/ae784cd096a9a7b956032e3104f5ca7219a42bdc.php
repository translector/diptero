<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/serialization/src/Normalizer/FieldableEntityNormalizerTrait.php-1594234425',
   'data' => 
  array (
    '28062f5bd170dc161559d791e9450835' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A trait for providing fieldable entity normalization/denormalization methods.
 *
 * @todo Move this into a FieldableEntityNormalizer in Drupal 9. This is a trait
 *   used in \\Drupal\\serialization\\Normalizer\\EntityNormalizer to maintain BC.
 *   @see https://www.drupal.org/node/2834734
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba38078311cc1735044b5fe36d91270f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity field manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd125e3bc97bdeaa83e24742c722ea494' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '181d53ee6a4bddabb4ac5b30a4dac55a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff46c4a7cfa6bbfc7e8cf7d408689857' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the entity type ID to denormalize as.
   *
   * @param string $class
   *   The entity type class to be denormalized to.
   * @param array $context
   *   The serialization context data.
   *
   * @return string
   *   The entity type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => 'determineEntityTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a08d025e57dd45636981c09f751696d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type definition.
   *
   * @param string $entity_type_id
   *   The entity type ID to load the definition for.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeInterface
   *   The loaded entity type definition.
   *
   * @throws \\Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => 'getEntityTypeDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7aab1bc16194a457c6852d549653dd8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type_definition */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => 'getEntityTypeDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da64e2fefde2af6608f375ad811b40df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Denormalizes the bundle property so entity creation can use it.
   *
   * @param array $data
   *   The data being denormalized.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type_definition
   *   The entity type definition.
   *
   * @throws \\Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException
   *
   * @return string
   *   The valid bundle name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => 'extractBundleData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c482379f30d513124162e1ae71516331' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Denormalizes entity data by denormalizing each field individually.
   *
   * @param array $data
   *   The data to denormalize.
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The fieldable entity to set field values for.
   * @param string $format
   *   The serialization format.
   * @param array $context
   *   The context data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => 'denormalizeFieldData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '174207fb114407a195e9c630fa48d946' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity type repository.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeRepositoryInterface
   *   The entity type repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => 'getEntityTypeRepository',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5277ba48c271c2de6e10d3a358d20750' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity field manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
   *   The entity field manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => 'getEntityFieldManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8914e8e2602b4c0a6a5a8013e7ae6e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity type manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => 'getEntityTypeManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '491f0fa1e67afd2f00b5f16e1e1c3f0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the field item value using the incoming data.
   *
   * Most normalizers that extend this class can simply use this method to
   * construct the denormalized value without having to override denormalize()
   * and reimplementing its validation logic or its call to set the field value.
   *
   * It\'s recommended to not override this and instead provide a (de)normalizer
   * at the DataType level.
   *
   * @param mixed $data
   *   The incoming data for this field item.
   * @param array $context
   *   The context passed into the Normalizer.
   *
   * @return mixed
   *   The value to use in Entity::setValue().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemdatadefinitioninterface' => 'Drupal\\Core\\Field\\TypedData\\FieldItemDataDefinitionInterface',
          'unexpectedvalueexception' => 'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
         'functionName' => 'constructValue',
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