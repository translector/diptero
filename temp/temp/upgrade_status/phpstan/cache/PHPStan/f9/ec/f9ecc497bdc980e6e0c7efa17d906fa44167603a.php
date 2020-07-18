<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformEntityReferenceManager.php-1594241402',
   'data' => 
  array (
    'e9d188f0e3838940dcb2f8e83b113396' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform entity reference (field) manager.
 *
 * The webform entity reference (field) manager is used to track webforms that
 * are attached to entities, specifically webform nodes. Generally, only one
 * webform is attached to a single node. Field API does allow multiple
 * webforms to be attached to any entity and this services helps handle this
 * edge case.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ef809a520ccf0ecc1bef8644c55b86d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current route match.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba6d123c0e406585e19887f546e52d49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3b6b753f1c1961e8218c0ac38055e58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The user data service.
   *
   * @var \\Drupal\\user\\UserDataInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7a2f4f5eea51c37e3033082a3b338fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache of source entity webforms.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9605731ac5e94d207d32758c3c5be0b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache of source entity field names.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79b6ff84aeacd9d3950cf7e5ccd993b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WebformEntityReferenceManager object.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\user\\UserDataInterface $user_data
   *   The user data service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3859b18c55780fc9e0e10e2532082faa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'isUserWebformRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d7a10d1afca660c7d9ad8e89594bb64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'setUserWebformId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c87a3cd342d01acf376f53f8aa55e890' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'getUserWebformId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '855208c4619031280afd5e46d4ea120d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'deleteUserWebformId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa92dead79cce508c63fb246665c390d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'hasField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6bdee1b3471956136bf59e15be488161' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'getFieldName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffd7b708fafa7971ba83f5be55b8b291' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'getFieldNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b39faa10fb5dee8b24bb185320bc7cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07a7f944ae256c8ab9ebe6a2d0883048' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'getWebforms',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15523cfb1448649d257c28cd69b93c8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'getTableNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47cb8a85ef39015f7475f5d712bf5f4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\field\\FieldStorageConfigInterface[] $field_storage_configs */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'userdatainterface' => 'Drupal\\user\\UserDataInterface',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
        ),
         'className' => 'Drupal\\webform\\WebformEntityReferenceManager',
         'functionName' => 'getTableNames',
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