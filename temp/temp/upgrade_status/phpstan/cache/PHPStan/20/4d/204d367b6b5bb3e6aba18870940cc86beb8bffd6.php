<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Plugin/Context/EntityContext.php-1594234425',
   'data' => 
  array (
    '9f84f407890ced8feda3f44f14027355' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Class to provide a specific entity context.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ae5726b3a351730fe5ac7b66b080d61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a context from an entity type ID.
   *
   * @param string $entity_type_id
   *   Entity type ID from which a definition will be derived.
   * @param string $label
   *   (optional) The label of the context.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
         'functionName' => 'fromEntityTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '359596e2ee1ae9f37c8b39dda841e7a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a context from an entity type.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   Entity type from which a definition will be derived.
   * @param string $label
   *   (optional) The label of the context.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
         'functionName' => 'fromEntityType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ca3a97d3f57e526e7bcbd696cd5824e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a context object from an entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   Entity that provides a context.
   * @param string $label
   *   (optional) The label of the context.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
         'functionName' => 'fromEntity',
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