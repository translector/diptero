<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_options_custom/src/Access/WebformOptionsCustomAccess.php-1594690523',
   'data' => 
  array (
    '57d45800b0a7c763dccb6da05529dcef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom access control handler for the webform options custom entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Access\\WebformOptionsCustomAccess',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88cabe4027227c2bfad4421bc16385e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that webform options custom source can be updated by a user.
   *
   * @param \\Drupal\\webform_options_custom\\WebformOptionsCustomInterface $webform_options_custom
   *   A webform options custome entity.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformoptionscustominterface' => 'Drupal\\webform_options_custom\\WebformOptionsCustomInterface',
        ),
         'className' => 'Drupal\\webform_options_custom\\Access\\WebformOptionsCustomAccess',
         'functionName' => 'checkOptionsCustomSourceAccess',
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