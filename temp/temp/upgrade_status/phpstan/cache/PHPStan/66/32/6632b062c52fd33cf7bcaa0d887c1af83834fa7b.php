<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Access/WebformSubmissionAccess.php-1594690523',
   'data' => 
  array (
    'aef7dc99ee817ebc2aa7648d81f358f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom access control handler for the webform submission entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eed7f0d6976f9b0298c8a986b98ee5c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether a webform submissions\' webform has wizard pages/cards.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
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
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
         'functionName' => 'checkEditAllAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9d08d8341c418b66a90c2a7773b8791' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that webform submission has (email) messages and the user can update any webform submission.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Run access checks for this account.
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
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
         'functionName' => 'checkResendAccess',
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