<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/KernelTests/Core/Entity/EntityKernelTestBase.php-1594234425,/var/www/html/web/core/modules/user/tests/src/Traits/UserCreationTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/DependencyInjection/DeprecatedServicePropertyTrait.php-1594234425',
   'data' => 
  array (
    '81858551a4d00903c6870b4b0dfc5b78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an abstract test base for entity kernel tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc94317bf1ef48f52fdec7a43b2698a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create additional test users and switch the currently
 * logged in one.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4b0a151e486afda6a2a7a3bfe947bd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a random user account and sets it as current user.
   *
   * Unless explicitly specified by setting the user ID to 1, a regular user
   * account will be created and set as current, after creating user account 1.
   * Additionally, this will ensure that at least the anonymous user account
   * exists regardless of the specified user ID.
   *
   * @param array $values
   *   (optional) An array of initial user field values.
   * @param array $permissions
   *   (optional) Array of permission names to assign to user. Note that the
   *   user always has the default permissions derived from the "authenticated
   *   users" role.
   * @param bool $admin
   *   (optional) Whether the user should be an administrator with all the
   *   available permissions.
   *
   * @return \\Drupal\\user\\UserInterface
   *   A user account object.
   *
   * @throws \\LogicException
   *   If attempting to assign additional roles to the anonymous user account.
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   If the user could not be saved.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'setUpCurrentUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e89e67a38f8654e5ccb54eb76b9eec34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Switch the current logged in user.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user account object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'setCurrentUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a7fc98e09352787710eeda8d1b33754' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a user with a given set of permissions.
   *
   * @param array $permissions
   *   Array of permission names to assign to user. Note that the user always
   *   has the default permissions derived from the "authenticated users" role.
   * @param string $name
   *   The user name.
   * @param bool $admin
   *   (optional) Whether the user should be an administrator
   *   with all the available permissions.
   * @param array $values
   *   (optional) An array of initial user field values.
   *
   * @return \\Drupal\\user\\Entity\\User|false
   *   A fully loaded user object with pass_raw property, or FALSE if account
   *   creation fails.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   If the user creation fails.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'createUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09fb24ea906e3832759ac52e3b5e32a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an administrative role.
   *
   * @param string $rid
   *   (optional) The role ID (machine name). Defaults to a random name.
   * @param string $name
   *   (optional) The label for the role. Defaults to a random string.
   * @param int $weight
   *   (optional) The weight for the role. Defaults to NULL which sets the
   *   weight to maximum + 1.
   *
   * @return string
   *   Role ID of newly created role, or FALSE if role creation failed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'createAdminRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5aeba4ed933db39041ef6fea31b5b9db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\RoleInterface $role */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'createAdminRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f8d529ff3c70592d32f7e9c3058fc31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a role with specified permissions.
   *
   * @param array $permissions
   *   Array of permission names to assign to role.
   * @param string $rid
   *   (optional) The role ID (machine name). Defaults to a random name.
   * @param string $name
   *   (optional) The label for the role. Defaults to a random string.
   * @param int $weight
   *   (optional) The weight for the role. Defaults to NULL which sets the
   *   weight to maximum + 1.
   *
   * @return string
   *   Role ID of newly created role, or FALSE if role creation failed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'createRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6909f20d65f3a3b04efdc8e0b3d7c415' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a given list of permission names is valid.
   *
   * @param array $permissions
   *   The permission names to check.
   *
   * @return bool
   *   TRUE if the permissions are valid, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'checkPermissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7af67852b631520a8b11dce263be081' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Grant permissions to a user role.
   *
   * @param \\Drupal\\user\\RoleInterface $role
   *   The user role entity to alter.
   * @param array $permissions
   *   (optional) A list of permission names to grant.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'grantPermissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f567edc613711ad3841176ab8d360e48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a standard way to announce deprecated properties.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0ec20e9dd9f30496d861fc95db975c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alows to access deprecated/removed properties.
   *
   * This method must be public.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => '__get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '802b8395512dc742bcaa71c6fb04fb6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a39da1cfa8c46b411bf15dceb15cbeee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The list of deprecated services.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f329285085be6f6f03edd8d07c4afc6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ab4ee6899890faad3e858c48d84eeff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A list of generated identifiers.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff521525a1ef35dba26684e027e0f7f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The state service.
   *
   * @var \\Drupal\\Core\\State\\StateInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03b65585b48cb422328cdaed24a95983' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a user.
   *
   * @param array $values
   *   (optional) The values used to create the entity.
   * @param array $permissions
   *   (optional) Array of permission names to assign to user.
   *
   * @return \\Drupal\\user\\Entity\\User
   *   The created user entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'createUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b42b3373cc836f134102ce4b884c3ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reloads the given entity from the storage and returns it.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to be reloaded.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The reloaded entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'reloadEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd33519f4d6bc43821ae8ae30c161e7b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity_test hook invocation info.
   *
   * @return array
   *   An associative array of arbitrary hook data keyed by hook name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'getHooksInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4913e581188bfa47ab0146aef8ef0ef4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs a module and refreshes services.
   *
   * @param string $module
   *   The module to install.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'installModule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eeea590bb82eb4c8e143d0745b68e8cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Uninstalls a module and refreshes services.
   *
   * @param string $module
   *   The module to uninstall.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'uninstallModule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9aa5f46854fced137306053716b32cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Refresh services.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'refreshServices',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52d7a3ba8445d90675ff053c4254be08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a random ID avoiding collisions.
   *
   * @param bool $string
   *   (optional) Whether the id should have string type. Defaults to FALSE.
   *
   * @return int|string
   *   The entity identifier.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests\\Core\\Entity',
         'uses' => 
        array (
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
         'functionName' => 'generateRandomEntityId',
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