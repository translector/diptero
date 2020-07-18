<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Entity/Entity/EntityViewMode.php-1594234425',
   'data' => 
  array (
    '9fcaa11d0beaed4ebf871099f29f27e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the entity view mode configuration entity class.
 *
 * View modes let entities be displayed differently depending on the context.
 * For instance, a node can be displayed differently on its own page (\'full\'
 * mode), on the home page or taxonomy listings (\'teaser\' mode), or in an RSS
 * feed (\'rss\' mode). Modules taking part in the display of the entity (notably
 * the Field API) can adjust their behavior depending on the requested view
 * mode. An additional \'default\' view mode is available for all entity types.
 * This view mode is not intended for actual entity display, but holds default
 * display settings. For each available view mode, administrators can configure
 * whether it should use its own set of field display settings, or just
 * replicate the settings of the \'default\' view mode, thus reducing the amount
 * of display configurations to keep track of.
 *
 * @see \\Drupal\\Core\\Entity\\EntityManagerInterface::getAllViewModes()
 * @see \\Drupal\\Core\\Entity\\EntityManagerInterface::getViewModes()
 * @see hook_entity_view_mode_info_alter()
 *
 * @ConfigEntityType(
 *   id = "entity_view_mode",
 *   label = @Translation("View mode"),
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "targetEntityType",
 *     "cache",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entitydisplaymodebase' => 'Drupal\\Core\\Entity\\EntityDisplayModeBase',
          'entityviewmodeinterface' => 'Drupal\\Core\\Entity\\EntityViewModeInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewMode',
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