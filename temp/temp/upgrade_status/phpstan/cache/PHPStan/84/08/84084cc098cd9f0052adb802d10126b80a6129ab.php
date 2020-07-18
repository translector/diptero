<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/video_embed_field/tests/src/Functional/FieldConfigurationTest.php-1587685827,/var/www/html/web/modules/contrib/video_embed_field/tests/src/Functional/EntityDisplaySetupTrait.php-1587685827,/var/www/html/web/core/modules/node/tests/src/Traits/ContentTypeCreationTrait.php-1594234425,/var/www/html/web/core/modules/node/tests/src/Traits/NodeCreationTrait.php-1594234425,/var/www/html/web/modules/contrib/video_embed_field/tests/src/Functional/AdminUserTrait.php-1587685827,/var/www/html/web/core/modules/user/tests/src/Traits/UserCreationTrait.php-1594234425',
   'data' => 
  array (
    '43c9ed172085970400776f3eaf7ec28a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Integration test for the field configuration form.
 *
 * @group video_embed_field
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6617da78048976b475af76e8efc114d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A trait for manipulating entity display.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b92e89c1ab0aee7e1735002ffe4795f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create content type from given values.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4c5b5c02649d7b68f4cda1e9230ba4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a custom content type based on default settings.
   *
   * @param array $values
   *   An array of settings to change from the defaults.
   *   Example: \'type\' => \'foo\'.
   *
   * @return \\Drupal\\node\\Entity\\NodeType
   *   Created content type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'createContentType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58953b8877a52fc653d3145f081936bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create node based on default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5312bb16f4271e67beeceea6ed9fe00f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a node from the database based on its title.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $title
   *   A node title, usually generated by $this->randomMachineName().
   * @param $reset
   *   (optional) Whether to reset the entity cache.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   A node entity matching $title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'getNodeByTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ab219f09cbbdbd8bedc70e33f45cd01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a node based on default settings.
   *
   * @param array $values
   *   (optional) An associative array of values for the node, as used in
   *   creation of entity. Override the defaults by specifying the key and value
   *   in the array, for example:
   *
   *   @code
   *     $this->drupalCreateNode(array(
   *       \'title\' => t(\'Hello, world!\'),
   *       \'type\' => \'article\',
   *     ));
   *   @endcode
   *   The following defaults are provided:
   *   - body: Random string using the default filter format:
   *     @code
   *       $values[\'body\'][0] = array(
   *         \'value\' => $this->randomMachineName(32),
   *         \'format\' => filter_default_format(),
   *       );
   *     @endcode
   *   - title: Random string.
   *   - type: \'page\'.
   *   - uid: The currently logged in user, or anonymous.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   The created node entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b328b6e71ef1be65c69fd5491f3d80f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $user */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'createNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1bb860e98307b4d81cb2558f555d0d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field name.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5e74d0cc152adef08efee4e384e091e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the content type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e9224f1f34176f2c117816b93f28e39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity display.
   *
   * @var \\Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c15a36af5e8835d25799b3c82f850e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The form display.
   *
   * @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4886d4c12a64eb9da7fd840951e56c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Setup the entity displays with required fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'setupEntityDisplays',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0d757f563fb21c91c672fc0af59cb2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set component settings for the display.
   *
   * @param string $type
   *   The component to change settings for.
   * @param array $settings
   *   The settings to use.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'setDisplayComponentSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63bac566a58912c05496463a21631c3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set component settings for the form.
   *
   * @param string $type
   *   The component to change settings for.
   * @param array $settings
   *   The settings to use.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'setFormComponentSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c131afd9f8f2b1a6ca211fdd72fc792' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a video node using the video field.
   *
   * @param string $value
   *   The video URL to use for the field value.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   A node.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'createVideoNode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af40d8b3d2084671602602fd03e0d36a' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecf3cd4ee60fdc31bb1735a141c44778' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f791f6150550200a9f643dd678f3f8e1' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'setUpCurrentUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b97b8d06a4cb989ce8485acc6c04801' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'setCurrentUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98499a5956fe4905415a2ca2cd9773e1' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'createUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5259400e9116d8b7d494af46650084a2' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'createAdminRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1c9ac753039bb0851a25a6a84686fe4' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'createAdminRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f54747f64511f65ce322861d066e23d0' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'createRole',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1c00daef8c99263803853b9fd53de2b' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'checkPermissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a09c69a90503a39c1630db105cd0c233' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'grantPermissions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6841a655c7c094c78faadc31b2f95634' => 
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
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'createAdminUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3169f029005e6adc9ddc28ea464ca17e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e5a444720d7b74da1406146092ca3e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test the field configuration form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\video_embed_field\\Functional',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\video_embed_field\\Functional\\FieldConfigurationTest',
         'functionName' => 'testFieldConfiguration',
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