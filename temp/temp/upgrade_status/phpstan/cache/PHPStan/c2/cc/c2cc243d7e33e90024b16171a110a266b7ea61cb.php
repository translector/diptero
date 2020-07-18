<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/modules/video_embed_media/tests/src/Functional/BundleTest.php-1587685827,/var/www/html/web/modules/contrib/video_embed_field/tests/src/Functional/AdminUserTrait.php-1587685827,/var/www/html/web/core/modules/user/tests/src/Traits/UserCreationTrait.php-1594234425',
   'data' => 
  array (
    '716f15f6beca2d0cce50631f3179bbc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test the video_embed_field media integration.
 *
 * @group video_embed_media
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_media\\Functional',
         'uses' => 
        array (
          'mediafunctionaltestbase' => 'Drupal\\Tests\\media\\Functional\\MediaFunctionalTestBase',
          'adminusertrait' => 'Drupal\\Tests\\video_embed_field\\Functional\\AdminUserTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b3b3191543d5423814d23562e4b899c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Create admin users.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd267f2ba4791e9762ecd5a28be996825' => 
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
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92b14fb9c03e676f542b64f1c2f921b7' => 
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
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'setUpCurrentUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01d924fb303bd5b608b953bf8a23a81f' => 
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
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'setCurrentUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92eceea1f58b106e0afce1728edd1d7a' => 
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
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'createUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4e64f7b4917e719fd96ebd48dad8b8e' => 
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
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'createAdminRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39078e5320358f4bd8d13c9fe69323be' => 
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
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'createAdminRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61dda1bf9960b920d9a3f47d770a91fc' => 
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
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'createRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49f0c59dc8493e00d9c51c370aec4164' => 
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
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'checkPermissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e88ae33216a55013f713d1d115fd30d1' => 
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
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'grantPermissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7026810a19862c3f82f64fc48f874995' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create an admin user.
   *
   * @return \\Drupal\\user\\UserInterface
   *   A user with all permissions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'createAdminUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d30439a72c9dfaa4bdcddb5afb583d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_media\\Functional',
         'uses' => 
        array (
          'mediafunctionaltestbase' => 'Drupal\\Tests\\media\\Functional\\MediaFunctionalTestBase',
          'adminusertrait' => 'Drupal\\Tests\\video_embed_field\\Functional\\AdminUserTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be8769747923c84e1e2074e98790c0ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to install.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_media\\Functional',
         'uses' => 
        array (
          'mediafunctionaltestbase' => 'Drupal\\Tests\\media\\Functional\\MediaFunctionalTestBase',
          'adminusertrait' => 'Drupal\\Tests\\video_embed_field\\Functional\\AdminUserTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0412787be4544c79c50a2dfc481a323b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the dialog form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_media\\Functional',
         'uses' => 
        array (
          'mediafunctionaltestbase' => 'Drupal\\Tests\\media\\Functional\\MediaFunctionalTestBase',
          'adminusertrait' => 'Drupal\\Tests\\video_embed_field\\Functional\\AdminUserTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_media\\Functional\\BundleTest',
         'functionName' => 'testMediaBundleCreation',
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