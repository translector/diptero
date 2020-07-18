<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/Plugin/migrate/destination/PerComponentEntityFormDisplay.php-1594234425',
   'data' => 
  array (
    '0e0a1368c3efda1172ae1dbbe4171fa2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * This class imports one component of an entity form display.
 *
 * Destination properties expected in the imported row:
 * - entity_type: The entity type ID.
 * - bundle: The entity bundle.
 * - form_mode: The machine name of the form mode.
 * - field_name: The machine name of the field to be imported into the display.
 * - options: (optional) An array of options for displaying the field in this
 *   form mode.
 *
 * Examples:
 *
 * @code
 * source:
 *   constants:
 *     entity_type: node
 *     field_name: comment
 *     form_mode: default
 *     options:
 *       type: comment_default
 *       weight: 20
 * process:
 *   entity_type: \'constants/entity_type\'
 *   field_name: \'constants/field_name\'
 *   form_mode: \'constants/form_mode\'
 *   options: \'constants/options\'
 *   bundle: node_type
 * destination:
 *   plugin: component_entity_form_display
 * @endcode
 *
 * This will add a "comment" field on the "default" form mode of the "node"
 * entity type with options defined by the "options" constant.
 *
 * @MigrateDestination(
 *   id = "component_entity_form_display"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\PerComponentEntityFormDisplay',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f56df8077850aa3138131c1407391f47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\destination',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\destination\\PerComponentEntityFormDisplay',
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