<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Access/WebformAccessResult.php-1594690523',
   'data' => 
  array (
    '09e49b3a0d76fe9d35539ffc92bb357d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Value object indicating an allowed access result, with cacheability metadata.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformAccessResult',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1197c729869e7a5d4975a5a7d49c0d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an allowed or neutral access result.
   *
   * @param bool $condition
   *   The condition to evaluate.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $webform_entity
   *   A webform or webform submission.
   * @param bool $cache_per_user
   *   Cache per user.
   *
   * @return \\Drupal\\Core\\Access\\AccessResult
   *   If $condition is TRUE, isAllowed() will be TRUE, otherwise isNeutral()
   *   will be TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformAccessResult',
         'functionName' => 'allowedIf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdbc277c7a72efd86e88e38826ba08d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an AccessResultInterface object with isAllowed() === TRUE.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $webform_entity
   *   A webform or webform submission.
   * @param bool $cache_per_user
   *   Cache per user.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultAllowed
   *   isAllowed() will be TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformAccessResult',
         'functionName' => 'allowed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2215ff31995e7250bd3fa646fc54ed4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an AccessResultInterface object with isNeutral() === TRUE.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $webform_entity
   *   A webform or webform submission.
   * @param bool $cache_per_user
   *   Cache per user.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultForbidden
   *   isNeutral() will be TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformAccessResult',
         'functionName' => 'neutral',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93f1e9df8b44401fbacef774abbd09ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an AccessResultInterface object with isForbidden() === TRUE.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $webform_entity
   *   A webform or webform submission.
   * @param bool $cache_per_user
   *   Cache per user.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultForbidden
   *   isForbidden() will be TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformAccessResult',
         'functionName' => 'forbidden',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0e99b7b372dc8e54fef80691e350483' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds dependencies to an access result.
   *
   * @param \\Drupal\\Core\\Access\\AccessResult $access_result
   *   The access result.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $webform_entity
   *   A webform or webform submission.
   * @param bool $cache_per_user
   *   Cache per user.
   *
   * @return \\Drupal\\Core\\Access\\AccessResult
   *   The access result with dependencies.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformAccessResult',
         'functionName' => 'addDependencies',
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