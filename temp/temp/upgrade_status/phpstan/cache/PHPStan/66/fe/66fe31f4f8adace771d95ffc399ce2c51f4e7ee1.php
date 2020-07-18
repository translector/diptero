<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformEntityReferenceManagerInterface.php-1594241402',
   'data' => 
  array (
    'c070f9d3620ea16a7b2af358b6651424' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for webform entity manager classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1b952e50ba2d3595a6b912bc20b3424' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Is the current request a webform route where the user can specify a webform.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A fieldable content entity.
   *
   * @return bool
   *   TRUE if the current request a webform route where the user can
   *   specify a webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'isUserWebformRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fcd64167c203ccbc36632c47a68ba4b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set user specified webform for a source entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A fieldable content entity.
   * @param string $webform_id
   *   A webform id.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'setUserWebformId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7173c5f298bb83404f062cfcedb5bb41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get user specified webform for a source entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A fieldable content entity.
   *
   * @return string|null
   *   A webform id or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'getUserWebformId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a8f2246c2cddbe48952174ee3400b4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Delete user specified webform for a source entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A fieldable content entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'deleteUserWebformId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56bf837127c6450054fc113a7c40cba9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the entity has a webform entity reference field.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $entity
   *   A fieldable content entity.
   *
   * @return bool
   *   TRUE if the entity has a webform entity reference field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'hasField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25e7407945093f84daf19c1b6181ea4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an entity\'s webform field name.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A fieldable content entity.
   *
   * @return string
   *   The name of the webform field or an empty string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'getFieldName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48db2f5eb198e89d902f781405f6a353' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an entity\'s webform field names.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A fieldable content entity.
   *
   * @return array
   *   An array of webform fields associate with an entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'getFieldNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c45aefba2a035d8d1ccc966feb097406' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an entity\'s target webform.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A fieldable content entity.
   *
   * @return \\Drupal\\webform\\WebformInterface|null
   *   The entity\'s target webform or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d1d6d40c4ffcf4fa58b26fdff458737' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an entity\'s target webform.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   A fieldable content entity.
   *
   * @return array
   *   An array of webforms.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'getWebforms',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '583e9e629aa0b2a38c49dae90a5b78ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the table names for all webform field instances.
   *
   * @return array
   *   An associative array of webform field table names and webform field names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManagerInterface',
         'functionName' => 'getTableNames',
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