<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Component/Plugin/FallbackPluginManagerInterface.php-1594234425',
   'data' => 
  array (
    '0f2814698b345dd65d2aa2f85e9ac88a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * An interface implemented by plugin managers with fallback plugin behaviors.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa0363703b756ff856f612638bf0d4ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a fallback id for a missing plugin.
   *
   * @param string $plugin_id
   *   The ID of the missing requested plugin.
   * @param array $configuration
   *   An array of configuration relevant to the plugin instance.
   *
   * @return string
   *   The id of an existing plugin to use when the plugin does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\FallbackPluginManagerInterface',
         'functionName' => 'getFallbackPluginId',
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