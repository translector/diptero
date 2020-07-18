<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformVariant/BrokenWebformVariant.php-1594690523',
   'data' => 
  array (
    '103ee015dca11b5068b803f76dd941d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a fallback plugin for missing webform variant plugins.
 *
 * @WebformVariant(
 *   id = "broken",
 *   label = @Translation("Broken/Missing"),
 *   category = @Translation("Broken"),
 *   description = @Translation("Broken/missing webform variant plugin.")
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformVariant',
         'uses' => 
        array (
          'webformvariantbase' => 'Drupal\\webform\\Plugin\\WebformVariantBase',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformVariant\\BrokenWebformVariant',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86ecfdd2ce9a98f6aac10392f3dc1b4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformVariant',
         'uses' => 
        array (
          'webformvariantbase' => 'Drupal\\webform\\Plugin\\WebformVariantBase',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformVariant\\BrokenWebformVariant',
         'functionName' => 'isEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9aa4a3cdc4b4cc8de57fab4af7f54f3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformVariant',
         'uses' => 
        array (
          'webformvariantbase' => 'Drupal\\webform\\Plugin\\WebformVariantBase',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformVariant\\BrokenWebformVariant',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36b3f6280ef9425c870721a676a74c8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set a broken handler\'s plugin id.
   *
   * This allows broken handlers to preserve the original handler\'s plugin ID.
   *
   * @param string $plugin_id
   *   The original handler\'s plugin ID.
   *
   * @see \\Drupal\\webform\\Plugin\\WebformVariantPluginCollection::initializePlugin
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformVariant',
         'uses' => 
        array (
          'webformvariantbase' => 'Drupal\\webform\\Plugin\\WebformVariantBase',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformVariant\\BrokenWebformVariant',
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