<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/src/Plugin/DataType/EntityRevisionsAdapter.php-1583961090',
   'data' => 
  array (
    'd73619b8c0854c9452883fa46119a3bd' => 
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
 *   id = "entity_revision",
 *   label = @Translation("Entity Revision"),
 *   description = @Translation("All kind of entities with revision information, e.g. nodes, comments or users."),
 *   deriver = "\\Drupal\\Core\\Entity\\Plugin\\DataType\\Deriver\\EntityDeriver",
 *   definition_class = "\\Drupal\\entity_reference_revisions\\TypedData\\EntityRevisionDataDefinition"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType',
         'uses' => 
        array (
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
          'entityadapter' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityAdapter',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\Plugin\\DataType\\EntityRevisionsAdapter',
         'functionName' => NULL,
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