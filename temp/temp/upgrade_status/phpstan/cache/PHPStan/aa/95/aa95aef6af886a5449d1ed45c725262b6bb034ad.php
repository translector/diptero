<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_image_select/src/Access/WebformImageSelectAccess.php-1594690523',
   'data' => 
  array (
    '5c5c6cb5fd7c8dd0dd76c22ee51d842b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom access control handler for the webform image select images entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Access\\WebformImageSelectAccess',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de5f1a68bbf543bf60e76e2023c3bf67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that webform image select images source can be updated by a user.
   *
   * @param \\Drupal\\webform_image_select\\WebformImageSelectImagesInterface $webform_image_select_images
   *   A webform image select image entity.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_image_select\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformimageselectimagesinterface' => 'Drupal\\webform_image_select\\WebformImageSelectImagesInterface',
        ),
         'className' => 'Drupal\\webform_image_select\\Access\\WebformImageSelectAccess',
         'functionName' => 'checkImagesSourceAccess',
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