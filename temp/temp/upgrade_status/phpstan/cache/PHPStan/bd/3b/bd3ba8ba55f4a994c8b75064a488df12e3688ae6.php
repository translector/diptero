<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Entity/EntityLastInstalledSchemaRepositoryInterface.php-1594234425',
   'data' => 
  array (
    '151eb38c8b52dffc923c3d24297fa68b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for an installed entity definition repository.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5c033852740520ff9da692c165eca5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type definition in its most recently installed state.
   *
   * During the application lifetime, entity type definitions can change. For
   * example, updated code can be deployed. The getDefinition() method will
   * always return the definition as determined by the current codebase. This
   * method, however, returns what the definition was when the last time that
   * one of the \\Drupal\\Core\\Entity\\EntityTypeListenerInterface events was last
   * fired and completed successfully. In other words, the definition that
   * the entity type\'s handlers have incorporated into the application state.
   * For example, if the entity type\'s storage handler is SQL-based, the
   * definition for which database tables were created.
   *
   * Application management code can check if getDefinition() differs from
   * getLastInstalledDefinition() and decide whether to:
   * - Invoke the appropriate \\Drupal\\Core\\Entity\\EntityTypeListenerInterface
   *   event so that handlers react to the new definition.
   * - Raise a warning that the application state is incompatible with the
   *   codebase.
   * - Perform some other action.
   *
   * @param string $entity_type_id
   *   The entity type ID.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeInterface|null
   *   The installed entity type definition, or NULL if the entity type has
   *   not yet been installed via onEntityTypeCreate().
   *
   * @see \\Drupal\\Core\\Entity\\EntityTypeListenerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
         'functionName' => 'getLastInstalledDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a98d713b433ee4684138daf9e7c10c41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type definitions in their most recently installed state.
   *
   * During the application lifetime, entity type definitions can change. For
   * example, updated code can be deployed. The
   * \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getDefinitions() method
   * will always return the definitions as determined by the current codebase.
   * This method returns the definitions from the last time that a
   * \\Drupal\\Core\\Entity\\EntityTypeListener event was completed. In other words,
   * the definitions that the entity type\'s handlers have incorporated into the
   * application state. For example, if the entity type\'s storage handler is
   * SQL-based, the definition for which database tables were created.
   *
   * Application management code can check if
   * \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getDefinitions() differs
   * from getLastInstalledDefinitions() and decide whether to:
   * - Invoke the appropriate \\Drupal\\Core\\Entity\\EntityTypeListenerInterface
   *   event so that handlers react to the new definitions.
   * - Raise a warning that the application state is incompatible with the
   *   codebase.
   * - Perform some other action.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeInterface[]
   *   An array containing the installed definition for all entity types, keyed
   *   by the entity type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
         'functionName' => 'getLastInstalledDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08381c6f7e318310f184173389c3ff2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the entity type definition in the application state.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
         'functionName' => 'setLastInstalledDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34b3ecd714f82d4e11f97dcdd81d53fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the entity type definition from the application state.
   *
   * @param string $entity_type_id
   *   The entity type definition identifier.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
         'functionName' => 'deleteLastInstalledDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37968465268265808da566fcc21f6727' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type\'s most recently installed field storage definitions.
   *
   * During the application lifetime, field storage definitions can change. For
   * example, updated code can be deployed. The getFieldStorageDefinitions()
   * method will always return the definitions as determined by the current
   * codebase. This method, however, returns what the definitions were when the
   * last time that one of the
   * \\Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface events was last
   * fired and completed successfully. In other words, the definitions that
   * the entity type\'s handlers have incorporated into the application state.
   * For example, if the entity type\'s storage handler is SQL-based, the
   * definitions for which database tables were created.
   *
   * Application management code can check if getFieldStorageDefinitions()
   * differs from getLastInstalledFieldStorageDefinitions() and decide whether
   * to:
   * - Invoke the appropriate
   *   \\Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface
   *   events so that handlers react to the new definitions.
   * - Raise a warning that the application state is incompatible with the
   *   codebase.
   * - Perform some other action.
   *
   * @param string $entity_type_id
   *   The entity type ID.
   *
   * @return \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[]
   *   The array of installed field storage definitions for the entity type,
   *   keyed by field name.
   *
   * @see \\Drupal\\Core\\Entity\\EntityTypeListenerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
         'functionName' => 'getLastInstalledFieldStorageDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e1a663eabaf75d7db36ec50338805a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the entity type\'s field storage definitions in the application state.
   *
   * @param string $entity_type_id
   *   The entity type identifier.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $storage_definitions
   *   An array of field storage definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
         'functionName' => 'setLastInstalledFieldStorageDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7cc539f15059a87557c890c7185c6556' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the field storage definition in the application state.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
         'functionName' => 'setLastInstalledFieldStorageDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccc8813c319b9f31ee49aebc68b7c198' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the field storage definition from the application state.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
         'functionName' => 'deleteLastInstalledFieldStorageDefinition',
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