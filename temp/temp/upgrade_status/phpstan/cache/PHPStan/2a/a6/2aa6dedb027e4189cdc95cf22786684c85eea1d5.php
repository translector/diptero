<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_ui/src/Access/WebformUiAccess.php-1594690523',
   'data' => 
  array (
    '52fc61953bb9e89a75dbfd7efd4ee9ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom access control handler for the webform UI.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Access\\WebformUiAccess',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00a14dc9ac303892e8ce0dd45960c76d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that webform source can be updated by a user.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Access\\WebformUiAccess',
         'functionName' => 'checkWebformSourceAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e13ea1bb2523482b96a1039ac56f1ead' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that webform option source can be updated by a user.
   *
   * @param \\Drupal\\webform\\WebformOptionsInterface $webform_options
   *   A webform options entity.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Access\\WebformUiAccess',
         'functionName' => 'checkWebformOptionSourceAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e852e9fb55d21fcc648dc490d2a5e34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that webform can be updated by a user.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Access\\WebformUiAccess',
         'functionName' => 'checkWebformEditAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64b03659f5bc2ff6e6b48e53c5133c7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that webform element type can be added by a user.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param string $type
   *   An element type.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Access\\WebformUiAccess',
         'functionName' => 'checkWebformElementAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb5afecfc500efe97cf07dee85c07d54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformoptionsinterface' => 'Drupal\\webform\\WebformOptionsInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Access\\WebformUiAccess',
         'functionName' => 'checkWebformElementAccess',
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