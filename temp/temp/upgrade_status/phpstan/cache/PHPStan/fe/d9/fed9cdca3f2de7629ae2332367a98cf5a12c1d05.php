<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_node/src/Access/WebformNodeAccess.php-1594690523',
   'data' => 
  array (
    'ea7131c06c5fa87a876ba00964e50dc2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the custom access control handler for the webform node.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63401e6c1ed7fee46bb36949d3444e4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the user can access a node\'s webform drafts.
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
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkWebformDraftsAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9677e561c6e2500876caef15a707132' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkWebformDraftsAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28bf6a8591fcc674d0e695f8dffb711d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the user can access a node\'s webform results.
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
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkWebformResultsAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a49070817d2dd704ae4d096d8d1f573e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkWebformResultsAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c99621e4b486ee9bee0764ab3a72fc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the user can access a node\'s webform log.
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
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkWebformLogAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab7e45fb29b8295dbfb5e1e544be7dee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkWebformLogAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45df6b430a5355243d9f7ae732f85671' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the user can access a node\'s webform.
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
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkWebformAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fd5cf2e8f1777f4e45b1056587376b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the user can access a node\'s webform submission.
   *
   * @param string $operation
   *   Operation being performed.
   * @param string $entity_access
   *   Entity access rule that needs to be checked.
   * @param \\Drupal\\node\\NodeInterface $node
   *   A node.
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
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkWebformSubmissionAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fac0cb3341ea26d9d436a3316400c77d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkWebformSubmissionAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '848024a3fecf3cd74eafbf701b71ee08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether the user can access a node\'s webform and/or submission.
   *
   * @param string $operation
   *   Operation being performed.
   * @param string $entity_access
   *   Entity access rule that needs to be checked.
   * @param \\Drupal\\node\\NodeInterface $node
   *   A node.
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
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '342a7d3ca225a93a4ab589cc53af5d20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_node\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'webformentityaccess' => 'Drupal\\webform\\Access\\WebformEntityAccess',
          'webformsubmissionaccess' => 'Drupal\\webform\\Access\\WebformSubmissionAccess',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform_node\\Access\\WebformNodeAccess',
         'functionName' => 'checkAccess',
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