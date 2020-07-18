<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_share/src/Access/WebformShareAccess.php-1594690523',
   'data' => 
  array (
    '3e5b8bdbe774ae8dfa25cb491412d9e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom access control handler for webform sharing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_share\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformnodeaccess' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
        ),
         'className' => 'Drupal\\webform_share\\Access\\WebformShareAccess',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1487df0b5afb37a23c88ca5c155ebc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the webform can be shared and it is not a template.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_share\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformnodeaccess' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
        ),
         'className' => 'Drupal\\webform_share\\Access\\WebformShareAccess',
         'functionName' => 'checkAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68136315c5278b55d52c06092540d842' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the webform node can be shared.
   *
   * @param string $operation
   *   Operation being performed.
   * @param string $entity_access
   *   Entity access rule that needs to be checked.
   * @param \\Drupal\\node\\NodeInterface $node
   *   A node.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_share\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformnodeaccess' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
        ),
         'className' => 'Drupal\\webform_share\\Access\\WebformShareAccess',
         'functionName' => 'checkNodeAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d72ca74e752499f8c2569aaaec67333' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_share\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformnodeaccess' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
        ),
         'className' => 'Drupal\\webform_share\\Access\\WebformShareAccess',
         'functionName' => 'checkNodeAccess',
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