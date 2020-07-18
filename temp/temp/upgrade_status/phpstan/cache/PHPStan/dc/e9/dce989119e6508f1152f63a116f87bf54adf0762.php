<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/TypedData/DataReferenceTargetDefinition.php-1594234425',
   'data' => 
  array (
    '14418c45758edaf3d49dd70eb1d7e760' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A typed data definition class for the entity reference target_id property.
 *
 * The target_id property differs from other data definitions in that it is
 * required at the storage level, but not at the validation level. This is
 * because its value can be set just-in-time using the preSave() method.
 *
 * Validation for the target_id property is provided by the \'ValidReference\'
 * validation constraint.
 *
 * @see \\Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem::preSave()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '357b26600216a9d8dd8128203212f70e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataReferenceTargetDefinition',
         'functionName' => 'getConstraints',
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