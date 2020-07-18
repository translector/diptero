<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/audiofield/src/AudioFieldPlayerManager.php-1553712462',
   'data' => 
  array (
    '09bd5cda4b4bef61b5e566903b7c8665' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages audio player plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\audiofield',
         'uses' => 
        array (
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\audiofield\\AudioFieldPlayerManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4241be891d74dcad70e2f4c0889892d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new AudioFieldPlayerManager.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\audiofield',
         'uses' => 
        array (
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
        ),
         'className' => 'Drupal\\audiofield\\AudioFieldPlayerManager',
         'functionName' => '__construct',
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