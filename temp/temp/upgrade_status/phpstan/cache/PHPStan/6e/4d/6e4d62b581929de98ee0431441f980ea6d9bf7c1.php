<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Access/WebformEntityAccess.php-1594690523',
   'data' => 
  array (
    'f90558872e01514138a9f14c33ee5afe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom access control handler for the webform entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformEntityAccess',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43a1fe659484ac8702cb45270114d7f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the webform has drafts.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   The source entity.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformEntityAccess',
         'functionName' => 'checkDraftsAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '432619cd90171a23640efed49ecc231f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the webform has results.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   The source entity.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformEntityAccess',
         'functionName' => 'checkResultsAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fc26951aaf80e11dc162be36c81b033' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the webform has log.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $source_entity
   *   The source entity.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformEntityAccess',
         'functionName' => 'checkLogAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8cda2f59a21957c10f11b59060b02d27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether a webform setting is set to specified value.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param string $setting
   *   A webform setting.
   * @param string $value
   *   The setting value used to determine access.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformEntityAccess',
         'functionName' => 'checkWebformSettingValue',
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