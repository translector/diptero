<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformHandler/BrokenWebformHandler.php-1594690523',
   'data' => 
  array (
    '158e07202fa0cd5c8cea4345e0aa4f4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a fallback plugin for missing webform handler plugins.
 *
 * @WebformHandler(
 *   id = "broken",
 *   label = @Translation("Broken/Missing"),
 *   category = @Translation("Broken"),
 *   description = @Translation("Broken/missing webform handler plugin."),
 *   cardinality = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::RESULTS_IGNORED,
 *   submission = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::SUBMISSION_OPTIONAL,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\BrokenWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee2e01f7542781261b0791433d5c1367' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\BrokenWebformHandler',
         'functionName' => 'isEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd374ac7f81b3caa04dc602a04b34301' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\BrokenWebformHandler',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5708a2c3472c5801b8b176a5d248dd60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set a broken handler\'s plugin id.
   *
   * This allows broken handlers to preserve the original handler\'s plugin ID.
   *
   * @param string $plugin_id
   *   The original handler\'s plugin ID.
   *
   * @see \\Drupal\\webform\\Plugin\\WebformHandlerPluginCollection::initializePlugin
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\BrokenWebformHandler',
         'functionName' => 'setPluginId',
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