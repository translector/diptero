<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformSourceEntityInterface.php-1594241402',
   'data' => 
  array (
    'dbffddf9e12c8b7e6db20f9f2518d88f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface of a webform source entity plugin.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformSourceEntityInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c661afb002e43abe596491a78603d64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Detect and return a source entity from current context.
   *
   * @param string[] $ignored_types
   *   Entity types that may not be used as a source entity.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface|null
   *   Source entity or NULL when no source entity is found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformSourceEntityInterface',
         'functionName' => 'getSourceEntity',
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