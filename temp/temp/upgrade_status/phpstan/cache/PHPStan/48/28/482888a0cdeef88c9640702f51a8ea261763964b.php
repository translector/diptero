<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformAccessRulesManagerInterface.php-1594241402',
   'data' => 
  array (
    '8e33be2d27649700532dcb36f2c7005d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface of webform access rules manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f080712383607f84509e98592b1da725' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if operation is allowed through access rules for a given webform.
   *
   * @param string $operation
   *   Operation to check.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Account who is requesting the operation.
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   Webform on which the operation is requested.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   Access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
         'functionName' => 'checkWebformAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccda6a2c550b97c2150597e5edaee2b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if operation is allowed through access rules for a submission.
   *
   * @param string $operation
   *   Operation to check.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Account who is requesting the operation.
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   Webform submission on which the operation is requested.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   Access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
         'functionName' => 'checkWebformSubmissionAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45384e044218d0e8872d35e82f4ce61e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the webform default access rules.
   *
   * @return array
   *   A structured array containing all the webform default access rules.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
         'functionName' => 'getDefaultAccessRules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8781b303465503c4ad4a1d178361f790' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieve a list of access rules from a webform.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   Webform whose access rules to retrieve.
   *
   * @return array
   *   Associative array of access rules contained in the provided webform. Keys
   *   are operation names whereas values are sub arrays with the following
   *   structure:
   *   - roles: (array) Array of roles that should have access to this operation
   *   - users: (array) Array of UIDs that should have access to this operation
   *   - permissions: (array) Array of permissions that should grant access to
   *     this operation
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
         'functionName' => 'getAccessRules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f69558c7c2045a92fd1313a4737e953' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check access for a given operation and set of access rules.
   *
   * @param string $operation
   *   Operation that is being requested.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   Account that is requesting access to the operation.
   * @param array $access_rules
   *   A set of access rules to check against.
   *
   * @return bool
   *   TRUE if access is allowed and FALSE is access is denied.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
         'functionName' => 'checkAccessRules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '907bc4ffe318a173efc590a6d43be852' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Collect metadata on known access rules.
   *
   * @return array
   *   Array that describes all known access rules. It will be keyed by access
   *   rule machine-name and will contain sub arrays with the following
   *   structure:
   *   - title: (string) Human-friendly translated string that describes the
   *     meaning of this access rule.
   *   - description: (array) Renderable array that explains what this access rule
   *     stands for. Defaults to an empty array.
   *   - roles: (string[]) Array of role IDs that should be granted this access
   *     rule by default. Defaults to an empty array.
   *   - permissions: (string[]) Array of permissions that should be granted this
   *     access rule by default. Defaults to an empty array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
         'functionName' => 'getAccessRulesInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23021022fd4bbbc4f61d977ee892ba6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if access rules should be cached per user.
   *
   * @param array $access_rules
   *   A set of access rules.
   *
   * @return bool
   *   TRUE if access rules should be cached per user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\webform\\WebformAccessRulesManagerInterface',
         'functionName' => 'cachePerUser',
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