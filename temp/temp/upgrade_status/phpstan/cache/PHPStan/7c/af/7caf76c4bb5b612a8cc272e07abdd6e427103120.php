<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformEntityStorageInterface.php-1594241402',
   'data' => 
  array (
    '5f5f3586df9b8f75f9848f9ed6848480' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for Webform storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityStorageInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38c5d5e63886bee331a061a594b2469a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the names of all categories.
   *
   * @param null|bool $template
   *   If TRUE only template categories will be returned.
   *   If FALSE only webform categories will be returned.
   *   If NULL all categories will be returned.
   *
   * @return string[]
   *   An array of translated categories, sorted alphabetically.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityStorageInterface',
         'functionName' => 'getCategories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '813802d9dd6d2eaf400d404c0a77c292' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all webforms grouped by category.
   *
   * @param null|bool $template
   *   If TRUE only template categories will be returned.
   *   If FALSE only webform categories will be returned.
   *   If NULL all categories will be returned.
   *
   * @return string[]
   *   An array of options grouped by category.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityStorageInterface',
         'functionName' => 'getOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd50191bf27422f1cfb1d51666d5c5e39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the next serial number.
   *
   * @return int
   *   The next serial number.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityStorageInterface',
         'functionName' => 'getNextSerial',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0596fef7a4c8c7e1bc1e9d03c548f40f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set the next serial number.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param int $next_serial
   *   The next serial number.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityStorageInterface',
         'functionName' => 'setNextSerial',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8576202aee28a731d84d4772660012a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the next serial number for a webform\'s submission.
   *
   * @return int
   *   The next serial number for a webform\'s submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityStorageInterface',
         'functionName' => 'getSerial',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48b7929635917cc8e4a8dcaf0cbcf1e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a webform\'s max serial number.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return int
   *   The next serial number.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityStorageInterface',
         'functionName' => 'getMaxSerial',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5280772e9cd9989222b36de9dfb61f9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get total results for all webforms.
   *
   * @return array
   *   An associative array keyed by webform id contains total results for
   *   all webforms.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'configentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
          'importableentitystorageinterface' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
        ),
         'className' => 'Drupal\\webform\\WebformEntityStorageInterface',
         'functionName' => 'getTotalNumberOfResults',
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