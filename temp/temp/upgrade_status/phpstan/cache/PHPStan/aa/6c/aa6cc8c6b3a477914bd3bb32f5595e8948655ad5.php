<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Entity/EntityReferenceSelection/SelectionPluginManagerInterface.php-1594234425',
   'data' => 
  array (
    '738642acb3e36f474a704315cfd95567' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for the entity reference selection plugin manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ac4a6ba25e3239f13aba30d3402d9fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the plugin ID for a given target entity type and base plugin ID.
   *
   * @param string $target_type
   *   The target entity type.
   * @param string $base_plugin_id
   *   The base plugin ID (e.g. \'default\' or \'views\').
   *
   * @return string
   *   The plugin ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
         'functionName' => 'getPluginId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6820c88aee04a6073910e08e573281a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the selection plugins that can reference a specific entity type.
   *
   * @param string $entity_type_id
   *   A Drupal entity type ID.
   *
   * @return array
   *   An array of selection plugins grouped by selection group.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
         'functionName' => 'getSelectionGroups',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73a4e3d5cec076975a13100400358c7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the selection handler for a given entity_reference field.
   *
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition for the operation.
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   (optional) The entity for the operation. Defaults to NULL.
   *
   * @return \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface
   *   The selection plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface',
         'functionName' => 'getSelectionHandler',
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