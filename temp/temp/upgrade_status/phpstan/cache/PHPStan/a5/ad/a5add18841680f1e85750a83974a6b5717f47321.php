<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/twig_tweak/tests/src/Kernel/AccessTest.php-1589991902,/var/www/html/web/core/modules/user/tests/src/Traits/UserCreationTrait.php-1594234425',
   'data' => 
  array (
    'bf9dc6aeea110d2dfd7250aba9c9c51e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests for the Twig Tweak access control.
 *
 * @group twig_tweak
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a7a3f7196c994605eae2a4f6b52d92a2' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '82b8da6e1e316692ff2085575066d6ac' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'setUpCurrentUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4d64b6a0a66ce1607fb8026afa8e5f2' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'setCurrentUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bafe2fe397674c114081cf98c7d514fb' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'createUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '055a92e6f21a281b11f63ef85cdfdd82' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'createAdminRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60eee4883c3d351c913aa8dc042f455f' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'createAdminRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06b00d309c7c78e760effe967fddcc61' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'createRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fd195c0f207142490f980e45cc77533' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'checkPermissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a49ed0c660ba75331fc4e5f87dc795f' => 
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
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'grantPermissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9807432ff365ff0489e3174e419efd0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A node for testing.
   *
   * @var \\Drupal\\node\\NodeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '301a4955515172933562e982568e1f16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The Twig extension.
   *
   * @var \\Drupal\\twig_tweak\\TwigExtension
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0223a06c6bb3f324309071a96ea8f887' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9cbfaf78e6907faf95d39c5f08902a69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91073c05af8814e4693f59ae3adca97d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'testDrupalEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4c82b3c5bc21eed66efd2498ea2483b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'testDrupalField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc72ecd99f94a34165e7bad67270f40e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'testDrupalEntityEditForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '460ab6c07f299e75d204e23af8c00228' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'testDrupalEntityAddForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d98e242e1f9e9dd3281b1d3d35f280b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test callback.
   *
   * @see \\Drupal\\twig_tweak_test\\Plugin\\Block\\FooBlock
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'testDrupalBlock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05a5009519ee247d8efddd26f23ac224' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'testDrupalRegion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7261f44d7954d88d344f1386d5ff79b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'testDrupalImage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63596a2c259ef48ffc79236966ff921a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\twig_tweak\\Kernel',
         'uses' => 
        array (
          'blockviewbuilder' => 'Drupal\\block\\BlockViewBuilder',
          'block' => 'Drupal\\block\\Entity\\Block',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'file' => 'Drupal\\file\\Entity\\File',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'nodeinterface' => 'Drupal\\node\\NodeInterface',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\twig_tweak\\Kernel\\AccessTest',
         'functionName' => 'testView',
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