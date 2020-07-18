<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/hal/src/Normalizer/FieldItemNormalizer.php-1594234425,/var/www/html/web/core/modules/serialization/src/Normalizer/FieldableEntityNormalizerTrait.php-1594234425,/var/www/html/web/core/modules/serialization/src/Normalizer/SerializedColumnNormalizerTrait.php-1594234425',
   'data' => 
  array (
    'b40723d4ca441fc3cbe87e3185370505' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts the Drupal field item object structure to HAL array structure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'typeddatainternalpropertieshelper' => 'Drupal\\Core\\TypedData\\TypedDataInternalPropertiesHelper',
          'fieldableentitynormalizertrait' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
          'serializedcolumnnormalizertrait' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c612a4508ddc9fe8aa3587ea3d0da519' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b60d1dea4605b0ff72b4c1cf688f1f98' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07fe1a1720e0559b6de35f9fbccc9e11' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '882d2093c43a0c4e18f687700e57d363' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05ccec73b2de3b713d98183a38b1eb0d' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'determineEntityTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4913127941a6b6972a81960975dfbc07' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'getEntityTypeDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f8ad3cb1ab394383337552c0b0729ab' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'getEntityTypeDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa43f72d15d7d404aa886bb78acc85a9' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'extractBundleData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f30f4fd222a79e16b4acfdde0cac41a' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'denormalizeFieldData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff0ac060d3d5efff74b2bdef753b0792' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'getEntityTypeRepository',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '731657817aa8247315cdbdbf988c496b' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'getEntityFieldManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aec8fc47994e38ebef82b94d89365040' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'getEntityTypeManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a8efd589111dc27b4336730e4672016' => 
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
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'constructValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '518c852f2e027f7ccb9e4086cdec5e84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A trait providing methods for serialized columns.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5601ecbe66c508f99345b477af7b6341' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if there is a serialized string for a column.
   *
   * @param mixed $data
   *   The field item data to denormalize.
   * @param string $class
   *   The expected class to instantiate.
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $field_item
   *   The field item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'checkForSerializedStrings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e21a982b1e8be2226d64c86e00fee93e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the data contains string value for serialize column.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $field_item
   *   The field item.
   * @param array $data
   *   The data being denormalized.
   *
   * @return bool
   *   TRUE if there is a string value for serialize column, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'dataHasStringForSerializeColumn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7bea8b477567ddfe54728fad962583cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the names of all serialized properties.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $field_item
   *   The field item.
   *
   * @return string[]
   *   The property names for serialized properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'getSerializedPropertyNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a82837a3c66d531e9dc2e0d152a7b61a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the names of all properties the plugin treats as serialized data.
   *
   * This allows the field storage definition or entity type to provide a
   * setting for serialized properties. This can be used for fields that
   * handle serialized data themselves and do not rely on the serialized schema
   * flag.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $field_item
   *   The field item.
   *
   * @return string[]
   *   The property names for serialized properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'getCustomSerializedPropertyNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f68a26fed40f763822ae8fa921a59461' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'typeddatainternalpropertieshelper' => 'Drupal\\Core\\TypedData\\TypedDataInternalPropertiesHelper',
          'fieldableentitynormalizertrait' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
          'serializedcolumnnormalizertrait' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e8d424acc336fa8e5646d03ae268f2e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'typeddatainternalpropertieshelper' => 'Drupal\\Core\\TypedData\\TypedDataInternalPropertiesHelper',
          'fieldableentitynormalizertrait' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
          'serializedcolumnnormalizertrait' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'normalize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ffd45c76e4fa355f54d9642681e19ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'typeddatainternalpropertieshelper' => 'Drupal\\Core\\TypedData\\TypedDataInternalPropertiesHelper',
          'fieldableentitynormalizertrait' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
          'serializedcolumnnormalizertrait' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'denormalize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c918300d22d166018143fda2260d5dfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Normalizes field values for an item.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $field_item
   *   The field item instance.
   * @param string|null $format
   *   The normalization format.
   * @param array $context
   *   The context passed into the normalizer.
   *
   * @return array
   *   An array of field item values, keyed by property name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'typeddatainternalpropertieshelper' => 'Drupal\\Core\\TypedData\\TypedDataInternalPropertiesHelper',
          'fieldableentitynormalizertrait' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
          'serializedcolumnnormalizertrait' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'normalizedFieldValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c5102e71c5e6f1fd49fceeed0e5995b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\TypedData\\TypedDataInterface $property */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'typeddatainternalpropertieshelper' => 'Drupal\\Core\\TypedData\\TypedDataInternalPropertiesHelper',
          'fieldableentitynormalizertrait' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
          'serializedcolumnnormalizertrait' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'normalizedFieldValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50a04cfdb5ca1b426e85c1f54436d429' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a translated version of the field item instance.
   *
   * To indicate that a field item applies to one translation of an entity and
   * not another, the property path must originate with a translation of the
   * entity. This is the reason for using target_instances, from which the
   * property path can be traversed up to the root.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $item
   *   The untranslated field item instance.
   * @param $langcode
   *   The langcode.
   *
   * @return \\Drupal\\Core\\Field\\FieldItemInterface
   *   The translated field item instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\hal\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'typeddatainternalpropertieshelper' => 'Drupal\\Core\\TypedData\\TypedDataInternalPropertiesHelper',
          'fieldableentitynormalizertrait' => 'Drupal\\serialization\\Normalizer\\FieldableEntityNormalizerTrait',
          'serializedcolumnnormalizertrait' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
        ),
         'className' => 'Drupal\\hal\\Normalizer\\FieldItemNormalizer',
         'functionName' => 'createTranslatedInstance',
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