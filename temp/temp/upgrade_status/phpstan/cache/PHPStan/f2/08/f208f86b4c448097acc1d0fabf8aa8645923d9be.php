<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Entity/Plugin/DataType/EntityAdapter.php-1594234425',
   'data' => 
  array (
    '251e00670c87ec883af3d013a9ad413d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the "entity" data type.
 *
 * Instances of this class wrap entity objects and allow to deal with entities
 * based upon the Typed Data API.
 *
 * In addition to the "entity" data type, this exposes derived
 * "entity:$entity_type" and "entity:$entity_type:$bundle" data types.
 *
 * @DataType(
 *   id = "entity",
 *   label = @Translation("Entity"),
 *   description = @Translation("All kind of entities, e.g. nodes, comments or users."),
 *   deriver = "\\Drupal\\Core\\Entity\\Plugin\\DataType\\Deriver\\EntityDeriver",
 *   definition_class = "\\Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd46c555582d743ff29a541c536c6ed04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The wrapped entity object.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08c8bc16f16439c67a9ffbf28914fc5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an instance wrapping the given entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $entity
   *   The entity object to wrap.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'createFromEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '405d5c5ab80b8decbbbdb0d6e8620a7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'getValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e1a3dddb8471fa4a0b53dbeca03eb29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'setValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40596d9fc5b33d770015d93e5918afa8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5196f4f4bd8c7630fbd6a7726eb2c426' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd56a3a8b22493671c60c50e3fc688764' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'getProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42632f4192dbd65747e48ff33c316627' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a2d7c3cb3a7401757eddd8d8efe9155' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'isEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4f34beb0f3e2c36b4054cad680669fc2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'onChange',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4bb509f6eb84b71b47aff25180f7865' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'getString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13ebc33dfc8bebfb5748e8fab91b2392' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'applyDefaultValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1719e693a1103b4d61e41d9648775b69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'getIterator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3396255d28421b593ced99b2a9634fb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the wrapped entity object.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The wrapped entity object. If the entity is translatable and a specific
   *   translation is required, always request it by calling ::getTranslation()
   *   or ::getUntranslated() as the language of the returned object is not
   *   defined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Plugin\\DataType',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitydatadefinition' => 'Drupal\\Core\\Entity\\TypedData\\EntityDataDefinition',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'missingdataexception' => 'Drupal\\Core\\TypedData\\Exception\\MissingDataException',
          'typeddata' => 'Drupal\\Core\\TypedData\\TypedData',
        ),
         'className' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
         'functionName' => 'getEntity',
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