<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/src/SubstitutionInterface.php-1586214306',
   'data' => 
  array (
    '7a518ee06c7fa379f22e35a8c728ebe4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for substitution plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\linkit\\SubstitutionInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '416c441ff0520d1a2a91041dc6b50da8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the URL associated with a given entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to get a URL for.
   *
   * @return \\Drupal\\Core\\GeneratedUrl
   *   A url to replace.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\linkit\\SubstitutionInterface',
         'functionName' => 'getUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad4a015f35b607f35099928e7aa74976' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if this substitution plugin is applicable for the given entity type.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   An entity type object.
   *
   * @return bool
   *   If the plugin is applicable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\linkit\\SubstitutionInterface',
         'functionName' => 'isApplicable',
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