<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_group/src/WebformGroupManagerInterface.php-1594690523',
   'data' => 
  array (
    '79c14154b7c2acee958426d23cd836a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for the webform group manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_group',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_group\\WebformGroupManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '559c134e3cc3c0c54d878d098cc53ad8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the group owner token is enabled.
   *
   * @return bool
   *   TRUE if the group owner token is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_group',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_group\\WebformGroupManagerInterface',
         'functionName' => 'isGroupOwnerTokenEnable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2893b84504e438f5637660f2fcc79578' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the group role token is enabled.
   *
   * @return bool
   *   TRUE if the group role token is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_group',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_group\\WebformGroupManagerInterface',
         'functionName' => 'isGroupRoleTokenEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '269993d5e42f6f31a7445f82b6656b34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the current user\'s group roles.
   *
   * @return array|bool
   *   An array containing the current user\'s group roles.
   *   FALSE if no group content is found for the current request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_group',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_group\\WebformGroupManagerInterface',
         'functionName' => 'getCurrentUserGroupRoles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '522a343bf9c86569b72e49aabb04d89e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the group content for the current request.
   *
   * @return \\Drupal\\group\\Entity\\GroupContentInterface|bool
   *   The group content for the current request.
   *   FALSE if no group content is found for the current request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_group',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_group\\WebformGroupManagerInterface',
         'functionName' => 'getCurrentGroupContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c61ab6ed1d6ce9f29e25030ca89056b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the group webform for the current request.
   *
   * @return \\Drupal\\webform\\WebformInterface|null
   *   The group webform for the current request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_group',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_group\\WebformGroupManagerInterface',
         'functionName' => 'getCurrentGroupWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec0f86afcf91673c9b7d63115fcc8ff0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get group roles for a webform submission and a specified user account.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   A user account.
   *
   * @return \\Drupal\\group\\Entity\\GroupContentInterface|bool
   *   The group role  for the webform submission.
   *   FALSE if no group roles is found for the webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_group',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_group\\WebformGroupManagerInterface',
         'functionName' => 'getWebformSubmissionUserGroupRoles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5d83da8dc07e0867565526fbae10142' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get group content for a webform submission.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   *
   * @return \\Drupal\\group\\Entity\\GroupContentInterface|bool
   *   The group content for the webform submission.
   *   FALSE if no group roles is found for the webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_group',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_group\\WebformGroupManagerInterface',
         'functionName' => 'getWebformSubmissionGroupContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bf57e862bc63309e0863c6f41f97092' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a webform\'s access rules with group roles.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return array
   *   An associative array containiong a webform\'s access rules
   *   with group roles.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_group',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
        ),
         'className' => 'Drupal\\webform_group\\WebformGroupManagerInterface',
         'functionName' => 'getAccessRules',
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