<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Plugin/Context/ContextAwarePluginManagerInterface.php-1594234425',
   'data' => 
  array (
    '6a5dd33184e64faf0d6526bff3725d48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for plugin managers that support context-aware plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextAwarePluginManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76291a471fd34899e9d26a837ba78cf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines plugins whose constraints are satisfied by a set of contexts.
   *
   * @todo Use context definition objects after
   *   https://www.drupal.org/node/2281635.
   *
   * @param \\Drupal\\Component\\Plugin\\Context\\ContextInterface[] $contexts
   *   An array of contexts.
   *
   * @return array
   *   An array of plugin definitions.
   *
   * @see \\Drupal\\Core\\Plugin\\FilteredPluginManagerInterface::getFilteredDefinitions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextAwarePluginManagerInterface',
         'functionName' => 'getDefinitionsForContexts',
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