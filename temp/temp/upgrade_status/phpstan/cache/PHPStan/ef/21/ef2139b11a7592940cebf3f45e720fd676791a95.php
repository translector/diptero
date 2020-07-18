<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/includes/webform.install.update.inc-1594690523',
   'data' => 
  array (
    'eda0b9ae54563b266fd48eb4c766fdfa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_update_dependencies().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_dependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db6d4e42cdca994ae971ef048d4e0cb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2834203: Convert webform field target_id to 32 characters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8001',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e21d8f2a540d1c48272b0e7d9be9d150' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2834572: Refactor and improve token management.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8002',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d3f448990c0a6ae3b3d9b2cd698eb4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2834654: Add close button to messages.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8003',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1caaa557d7befc6c83ef833d03c3b37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2836948: Problem with autocomplete field. Change \'#autocomplete_options\' to \'#autocomplete_items\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8004',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8b62367563a335db2102cf81baae627' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2837090: Undefined function call webform_schema.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8005',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4aea92f8dedf651e8fcf141d671f6fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2837090: Undefined function call webform_schema.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8006',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eec21b117d745944c8b98e2d2d4ce66e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2840521: Add support for global CSS and JS.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8007',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5b26fa941f3c826f85b79df4898708b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2839615: Disabling message about viewing user\'s previous submissions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8008',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd0fbfafd226ca209c5191b824077381' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2844020: Add admin and form specific setting to allow submit button to be clicked only once.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8009',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dadb58ceb58ffb520676278613e9ddc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2843400: Automated purging of submissions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8010',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6793306a7a47daddfe5577a212d1d810' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2845028: Refactor and rework element formatting to better support multiple values.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8011',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53197b101baab301c6bc35972f00b422' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Move $element[\'#format\'] to $element[\'#format_items\'].
 *
 * Applies to ol, ul, comma, and semicolon.
 *
 * @param array $element
 *   A form element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_8011',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f99554b5de8dcb56adcda5c91fe64548' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_8011',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '773b66062e0de80fd6a343de6c17e812' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2845776: Improve #multiple handling.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8012',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2385748372d8e3d59a7de233bc1fb3a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2840858: Create Webform and Webform Submission Action plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8013',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70d72cc5d785c3506bf341e6874a1758' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2848042: Rework #type shorthand prefix handling.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8014',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '990fc020392798344aa6dea77465457c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Add \'webform_\' prefix to #type.
 *
 * @param array $element
 *   A form element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_8014',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b25ae2005dfff43e86fe63f0e632969' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_8014',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5949593583895b828c14d94037269d7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2850247: Experiment with system tray integration.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8015',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '431d40eea1b08fbb71e6a2814709ae37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2850455: Add lookup_keys to webform config entity. Flush cache entity definitions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8016',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f616df7c5f2b19d92af280f1f90d8c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2850455: Add lookup_keys to webform config entity. Update Webform lookup keys.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8017',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf01619fc081436971d5e2415f761f79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2850885: Add ability to disable autocomplete for form and/or element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8018',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03940df16024d3e88a0335f6cf937ff8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2853302: Allow confirmation page title to be customized.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8019',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ce15e2b8a8505bc6a8a26465587c3a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2845724: Add webform opening and closing date/time.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8020',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a54570dce242e24c39d79812dc0ad7c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2858139: Add OptGroup support to WebformOption entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8021',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c77e7dc7579a43157a73a4ce76c36a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2858246: Enhance checkboxes and radios using iCheck.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8022',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb49d68c467e9ec6a75b0c113a0ed5a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2854021: Send email based on element options selection.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8023',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '497e7541359658c1ca30cfbb08c89d3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2861651: Add Opened and Closed Messages.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8024',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '068bc29dfeb48edc48b25a599a9a3b82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2857417: Add support for open and close date/time to Webform nodes. Update database scheme.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8025',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '004398e2a8243c418e407026c5c139cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface $entity_reference_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8025',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '609d06f45923ce04d29a37301235a9ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2857417: Add support for open and close date/time to Webform nodes. Update entity definitions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8026',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '827388fe96d748206337ae0aebec0310' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2857417: Add support for open and close date/time to Webform nodes. Update field config settings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8027',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ff6fa1b24c6a211b140995047fddf5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2859528: Add reply-to and return-path to email handler.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8028',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a02b98315960cc520bd2a137a6f18007' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2856842: Allow emails to be sent to selected roles.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8029',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e608749e62fb2f9fb2d8c9471f27fffa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2838423: Drafts for anonymous users.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8030',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c9c446614b1612adcd0993c0b89e607' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2854021: Send email based on element options selection.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8031',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1aa4931726677d5708ed11c3a8abeb6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2854020: Provide a mechanism to log submission transactions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8032',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af20852936fe0a050f88cf88102d76a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2864851: Allow form builder to opt-in to converting anonymous drafts/submissions to authenticated drafts/submissions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8033',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c1f3d65a7353ed137d1993ce2ab85f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2865353: Improve submission log integration.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8034',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7411219ba08bd7718b4fc6763d50e9e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2867529: Email handler states setting should be index array.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8035',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36e1ebc69f0baf66b066403e0ed93e5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2867855: Add category support to webform config entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8036',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcfa2e787944c1013ac4ca58017767c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface[] $webforms */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8036',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bd164ed0740e48f74c6df14a817fdb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2868075: Token types are not defined but have tokens.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8037',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe25da9c402da0eb026e8003a04ee514' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2870218: Improve External Library Management.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8038',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e6b959f71e032b3f2367a0d20b64c16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2871215: Copied webform templates should not have dependencies.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8039',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '892e698e5efc2001a3722a9d1a2e281b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #286655: Add Quick Edit off canvas form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8040',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7ec9df2f00047301e40fa4038983f13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2871606: Add (optional) support for Chosen.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8041',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5131383897588bf4ca5d54aeb17252c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2875371: Can\'t Add Email Handler w/Select "Send To".
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8042',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '037d23e88eadc4ee3f78ab28a6054d92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2874555: Add "How can we help you?" link to the Webform module admin pages.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8043',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35e6f2b0f291b10608399e485951db1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2872464: MultiStep Preview Page - change the Page Title and Progress Bar Title.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8044',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1024c3f1862b27d3e7dae5feb3e4745b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2878307: webform example module disable causes a customized webform deleted.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8045',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1aaacd13f65e883b5b41473f80d4e3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Check if config is from a Webform submodule.
 *
 * @param string $webform_config_name
 *   Webform config file name.
 *
 * @return bool
 *   TRUE if config is from a Webform submodule.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_8045_is_submodule_config',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa91053c41935f94ba2e22277e07773e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2878193: Allow actions (aka submit buttons) to be placed anywhere on a webform.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8046',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30f41d241f2dc8a7bc66ceb105b4d10a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Convert webform config data from settings.buttons to use the \'webform_actions\' element.
 *
 * @param array $data
 *   Webform config data.
 *
 * @return array
 *   Webform config data with \'webform_actions\' element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_8046_convert_data',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e7a240026c12e5015edaac10c97b59b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2879217: Allow WebformHandlers and WebformExporters to be excluded.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8047',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4cc86f66c49b30e72341b5fff8a8069d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2879421: Cleanup webform.settings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8048',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46752885247000085333068df673d1e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2864843: Create a new computed_value element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8049',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e498c80360c7329a772e03d07b672661' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2856472: Allow multiple drafts per users.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8050',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c65e0ce1d698caabb7eac9518fc97e20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2885183: Add support for customized webform submission labels.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8051',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f5c68f72af7e0f0bc72bc4592c6b022' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2886173: Ability to have no empty option on a select element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8052',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f2395546c8735576eec79e4ac3774de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2757491: Allow Webforms to be submitted using AJAX.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8053',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f985a192d6d83fb246fc9e0dd4207ef2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2886853: Ability to customize user draft and submission columns.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8054',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3b40f3f5fa4fb6b5e9f94ec39a49d12d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2887078: Allows preview page to customized.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8055',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9af8cf38ebae3363e896b6dbe0018472' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2887443: Default to and from email settings missing and not used.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8056',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '34510a788ba139ebde6b190f75e8925b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2854021: Send email based on element options selection.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8057',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'deb69b59f909093efb34f664f7bbf716' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2888076: Redirect users to login page when trying to access a protected webform file.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8058',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b376cbec08d000b134fa9fcf25080c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2888850: Validate source entity that passed as URL parameters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8059',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '833f504c7ebb7a6c25edf5b1260d365f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2888615: Allow preview to exclude elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8060',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4ceb48ce1fb0ec2f9fea05a667fba5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2871207: Random Multiple Submissions. Create webform table.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8061',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '606c024c8610a12b9ba0f4c73f930f56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2871207: Random Multiple Submissions. Populate next serial in webform table.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8062',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48c5bbd71679492f8e60b4f0611eebe8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface[] $webforms */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8062',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2c084d1b8e6a885e2dc95cd9bc69bf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2891108: Recreating deleted webform with same name results in error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8063',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd207076ac2c6dc85d1a10703334ee3f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2878193: Allow actions (aka submit buttons) to be placed anywhere on a webform.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8064',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d64229773273f406bcc3cb0112e3011' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2888717: Option to include empty components in [webform_submission:values] token.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8065',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ef2eee9dbdfdea4d3cff1bd1acc04a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2893111: Add permissions to form and element access controls.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8066',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edb4dd0ddf2a3084fa1101772912016b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2893147: Allow empty element label to be customized.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8067',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26c97981c8ebf7bc0bda863ce456df43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2896667: Add Reset button.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8068',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '692b5abe1fa37a576432f45b94967b5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2895140: Email handler field(s) convert special chars to HTML code.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8069',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '975cc274f3189a85c048a45283b1140a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2895809: Promote partnerships within the Webform module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8070',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '701c231d5bde75875b03f5e3551d65c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2898424: Improve Remote Post.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8071',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f59d136be20331b34dc86f1c50154243' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface[] $webforms */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8071',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8722627c59d15abe1b09c51a8c47809a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2901738: Add support conditions to WebformHandler.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8072',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1b9e87307a87363376140e87bb866e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface[] $webforms */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8072',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '428c857832d275d78978047e7c18b1d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2905955: Update hook webform_update_8048 is broken.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8073',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd7d2eb6e94f16e1bcea2c15b3045b95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2906292: Display element description as help text (tooltip).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8074',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b202e06052b206cd2f31919f5b9a379' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2895671: Entity reference format.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8075',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2396461c9f926f389e51494999f75ec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface[] $webforms */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8075',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fbe0c8f65246091c60eb1f7d44376e3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2908080: Allow options single and multiple format to be specified during export.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8076',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15d41519f18b5cd8e86069a366ac2398' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface[] $webforms */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8076',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d6795f90105213ebc894dae81930cf9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2909723: Improve hook requirements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8077',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75933458f4ade69a387fb1406404aca7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2906792: Sender and Return-path headers are not used correctly.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8078',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdcc524d8691b64e547f5935c4ce5f2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2911329: Create \'About\' tab.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8079',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bff9cba7c871b06950d082f6d2c6f5c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2914153: Add \'More\' hide/show text support to elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8080',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eafce4bfcabb8af826948eb038cdeb86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2913215: Remote Post handler add GET method support.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8081',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6811f168c99dfb2672ed7b838fc1bd16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2912672: Mismatch entity Webform submission caused by langcode changes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8082',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc394752ad4f6bab0e955c05ac793826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2914904: Add section element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8083',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'faa78c6cdf9b0e34d7f840171d98d6a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2917174: Improve "Webform Scheduled Email Handler".
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8084',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2e0ab7465b6ab390fc93080c1137a67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2908882: Loading next or previous page with AJAX should scroll to top of the window.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8085',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18acf9d657f0b6aa40047bb8479dd084' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2918860: Webform MultiStep URL Params.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8086',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a786554592d0100d3eb0d9ae30296ffa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2918860: Webform MultiStep URL Params.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8087',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6abbc776439ef15657b3dc14636b264e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2919989: Add horizontal rule element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8088',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd448234d3152e51b4a9ffabac002fafc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2920762: Typo in update 8087: "wizard_comfirmation_label".
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8089',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28fbc03741830f848c27e06c1b276025' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2920443: Browser Back Button to submit to previous wizard page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8090',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'abbc8fd2c23f8a334db47bda6d5c9d4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2923047: Redirect to user login when Access Denied for a Webform.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8091',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9307e7fe2eca2997b5347cc31fa82e73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2915653: Remote post error handling.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8092',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c22c12ea678cbc997bbaedcfa3006960' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2924551: Move the WebformComposite element to WebformCustomComposite.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8093',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9945f1cd7a0d07e4ee8b25c9ae0edba7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2929665: Permit one webform submission per day based on email entered.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8094',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26d10c45cce0705a7e0e9bc4892664b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2918721: Access controlling Webform administration.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8095',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2f3f5be06fb49305c47436a929176388' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2931888: Add a boolean flag \'use as likert\' for options list and remove the machine name pattern matching in likert element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8096',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08ecc9241ae944929a6ec2fe48c8dd74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2932607: Add Twig support to email body.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8097',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e79199ffe1b96746ff1d95dfc4442221' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2933705: Element Range.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8098',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2347781965c44fddb137e7a7de8ec3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2888862: Provide a mechanism to lock a webform submission.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8099',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a0f7b0d4eb27218721275cfd0dc3c20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2888862: Provide a mechanism to lock a webform submission. Update handlers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8100',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd563ac54a979f99ee4eb38b8abb5df4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface[] $webforms */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8100',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0095a2c3d558c4ca7227aa9a8c812358' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2935697: Add support for new Off-Canvas dialog tray. Remove quickedit links.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8101',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '322390dfdf9d19d3e69f67009dbd62f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2939828: Allow site builder to display required indicator on all webforms or a specified webform.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8102',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b378265ff9c62a1252bef43987a56c6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2939948: Date fields should respect #min and #max in test-mode. Remove hard-coded test date values.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8103',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64ebe3641c601aad598cf13a0a01d66a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2940490: Autofill webform with previous submission data.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8104',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2b42874e665293c8c3c802a7ed6e4c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2941174 Notice: Undefined index: administer in WebformEntitySettingsAccessForm.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8105',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f477cec4bf4209dcf355eca61f2636a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2934970: Fully support for inline error form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8107',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '512305faab7ec3165151a9505ca43170' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2944515: Report proper dependencies of a webform block.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8108',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e784aa4873db8b9e4a145f9d5e6891b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\block\\Entity\\Block $block */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8108',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2970391caf41f2aa0cffd0c94f69f4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2933909: Webform Image Select Element Improvements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8109',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0651c1c6e1c71ac0fd0ce152df210744' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2947991: Disable the password field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8110',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99177a27bd921e6b89e0ca851088c7fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2947991: Disable the password field. Fix webform_update_8110().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8111',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9d599495766b3de860f32b135bf9c55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2951368: Provide dedicated \'test\' webform operation and access rule.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8112',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cfe1d4056f5cb869f4ea8fcc2a9883a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2951001: Convert About section into Contribute section.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8113',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66d99c0837db21bfe041740973af4330' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2951921: The contribute module is missing from the file system.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8114',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a815a007fe33967a75e09c746e22176' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2955218: Allow query and token to be removed from confirmation URL.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8115',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a1da155ff18da79d5747f510607d687' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Stop #multiple__label and #multiple__labels from being saved with every element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8116',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d88fad6c7fb5f5764b915c0cbf09834' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2957192: Add postal_code to test data.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8117',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64aeacf15cf3338cbfc0dc63b3fff82c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2957074: Invalid Tokens in Email Handler.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8118',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1536b1ccd9c104dfec129b29e1ad2afd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2957002: Same webform multiple times on the same page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8119',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e0a90af3672cef6954bf5c669d073f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformHelpManagerInterface $help_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8119',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bfe757202fb74a2067aa14ed0054aa09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2953929: Remote handler does not display messages when HTTP status is different than 200.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8120',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ee89928e0f48219522d8aac85823ec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2953929: Remote handler does not display messages when HTTP status is different than 200.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8121',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '917c0bb29bf34f227df5aad60dbcfbde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2952419: Attached files are deleted without usage checking.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8122',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '149de16a2a1d63c369893bd27e5d4d18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2962442: Remove [webform-authenticated-user] token and use [current-user] token with clear value option.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8123',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50bdf18d173689026780a467b9fe1fe7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2971207: Hidden Field updated values not being captured on Submit.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8124',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90da7bcb3896e07455c846523c7532e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Recursively convert hidden elements #value to #default_value.
 *
 * @param array $element
 *   An element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_8124',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8a24a4453bfa1343f718dddf91f8e3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2966507: Start-to-finish documentation for showing Webforms in modals.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8125',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be3df6f77ecfed1a9d905501fc38a1e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2973377: Make the previously saved messages customizable.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8126',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '196f58c3ef15da4cfbfb0f6362b01ba9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2974597: Enable default publishing status of new webforms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8127',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02454d10ee0dda22c3aceccc8a568336' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2932893: Filter out closed forms in webform field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8128',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f0347f9bd6a15f3adf31bf08409c902' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2977378: Add \'exclude unselected checkboxes\' from email notification and preview.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8129',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7728e1a04bcad1fa7687304f4d9a562' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2974153: Non admin duplicate form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8130',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96c00c28fc6b6b388e030ac7b16b9440' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2980470: Convert email handler "default" settings to use "_default_" to prevent localization issues.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8131',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96b0bfb28f207a5fb4a451b42ab0439f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformHandlerManagerInterface $handler_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8131',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70b2d0100ff200aae30645346c6705b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2980276: Webform assumes the /tmp directory is always the same, but if there are multiple servers, each may have its own /tmp directory.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8132',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1af216dc88a6e77bebedf5efdac71208' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2890861: Webform toggle element is not accessible.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8133',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63683e5d8becc7aa01a60ca5817c4a76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2984348: Link to relevant wizard page on preview.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8134',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e90f2401b4432f2968d2605c76625b38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2984868: Allow to specify the text format for emails.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8135',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '091e321ed6c5265df5c799ccba199fae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2987174: Replace and improve word/character counter.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8136',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce3d695ed05c771a8238f047f31ac7fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update #counter_* attributes.
 *
 * Replace \'X\' in counter message with \'%d\' and
 * move \'#counter_message\' to \'#counter_maximum_message\'.
 *
 * @param array $element
 *   A form element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_8136',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f289e0d0e7423378bce1a99d95e7d82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2983137: WYSIWYG editor not saving inline images for advanced html/text editor.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8137',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b74db6cc36f4bc0462204f530491708a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2947303: Location element\'s geocomplete library is not supported.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8138',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4488fc362b292ef4113cf07f98543e8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2918669: Elements separated by conditional inside multistep wizard are both saved to submission.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8139',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '212f297be2700b74a24d4ef678f64155' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformHelpManagerInterface $help_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8139',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bcfdabb83a6194446cb5cc0bf5e5422' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2994411: Allow help to be hidden.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8140',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47f412ae80974fac4aacab4ce8c7fc15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2993327: Provide Default View to Override Submission Results Tab.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8141',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f68c9b570a5f4f58e5d1fe126dfffacb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2995413: Allow email handler theme to be customized.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8142',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fa8d6e2997941b9e160b4aff5835c40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2943879: How to display alternate text when the user is not allowed to create a Webform?
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8143',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86e040008ee0e35770a8441aaf91be5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2998239: Swift Mailer no longer working after custom email handler theme option was added.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8144',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '460c94405fb053b56b89af749a221b4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3002183: Upload Total Limit instead of Upload File limit.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8145',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9800904179fcc6d371cdb41ee2d4c7e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3000542: Remove webform_devel.module logger debugging.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8146',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8ff5fd45da3eea16ab562873668f754' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3006468: Hide empty fields on on submission page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8147',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ff9dea8953a7941df6cd63c1fa8f7cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3007215: Option to retain webform title when source entity is provided.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8148',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4dacf1542f0ac9cd732a8d1bc4de55b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3007247: Custom composite fields appear as block elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8149',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98eb90437308530f0dc00d3f4b99945b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2980032: SUBMISSION BEHAVIORS: Allow edit the previous submission.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8150',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68c4963e6ecd17b2079dfbf5ff2cb46c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3013767: Computed twig element is not working on multi-step form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8151',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b726638cabc4b93530fcfc6732fde0c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3014933: Webform paths not being removed when a webform is deleted.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8153',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06ccd1451c3bfc91698fd589dab162fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\path_alias\\PathAliasInterface $path_alias */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8153',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '599726ef17230e2021fd4fa99fd1a2e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3015990: Option not to store the IP address for logged-in users.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8154',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eea9a134af15880549fbca9fa3cc9ff3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3017679: 2 different validation range modes for date/time field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8155',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b12fc74d93dfff790cda168d88927249' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3015180: Add \'webform_submission_log\' submodule.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8156',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee601789f56445c16d0f79d8e738ac97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3022398: Possible modification to update hook and/or documentation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8157',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4de850960b2a0fa94877202e762e8d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3023863: Typo in State/Province codes options.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8158',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d70646616d1954c80b256954d2a2e8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformOptionsInterface $webform_options */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8158',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '546a76581fb356fe4ba5025876c1f2dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3023223: Remove unused fields settings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8159',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b95fa2468851a156c7a5eec01f20cf4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\field\\FieldStorageConfigInterface[] $field_storage_configs */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8159',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b650a8ff87402fb4e6b1642bdd8213b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3019987: Fatal error: Allowed memory size after updating to rc29.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8160',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f62c89778bd7c9fe6e4f7a0d0ee2e6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3026068: Ensure the webform submission has the langcode entity key set.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8161',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ba1a053ba53c9ecfec1e00320330250' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3035054: Captcha challenge still visible after \'close time\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8162',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1325c562894f766ae2d4ad6abac31384' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #2902977: Provide tool for importing submissions from a CSV document.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8163',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd58eab5e06e62429f8475deeb3f1a319' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3050884: Allow draft(s) previous message to be customized.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8164',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9de45af73cc4615b7c3af58f8c3b174a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3053420: Allows Ajax visual effects to be customized.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8165',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '351b9473ed8974df66c7ff65182f814e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3049023: All Webforms are listed on Content languages form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8166',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37acbc2058118f7d7f473906c8589668' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3026111: Create a logo and header for the Webform module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8167',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14b2e96963678159fcf55a5ab701941a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3033726: Provide option to redirect to a URL if Remote Post fails.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8168',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7e0fc1e5ca94121664d2917a43a29f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3062308: Add the ability to use admin theme for a webform\'s canonical route.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8169',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc9d28311420e17438b6d952ade67f03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3064070: Split STATE_DRAFT into STATE_DRAFT_CREATED and STATE_DRAFT_UPDATE.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8170',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50f637820354108429f76ddf5b6c3179' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3066994: Form elements keys (machine name) to be in all cases not just lowercase.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8171',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cef32cba71d0e6495b6ecae8e8b778a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3073995: Setting to enable ajax on all webforms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8172',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e651ef3e4b16fbc6ed9e8d9cc6fc88e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3076086: Allow confirm email to use flexbox.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8173',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5cb5aa63c489613839ffc3ab6799b7f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Recursively add flexbox: \'0\' to email confirm elements.
 *
 * @param array $element
 *   An element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => '_webform_update_8173',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c0b9e195d25f86d5c5f6041384822ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3084531: Allow Email handler add additional parameters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8174',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e846b45d6b14f02c3b597dae3162ec35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3087865: Webform email handler default subject is missing title.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8175',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10d259cfb56096c7f3e3746f7b2a706e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3086507: Allow wizard pages / bar to be updated based on states API.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8176',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90f9ef9467d35bdbc7b237ce231749fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3082822: Anonymous role view submission via secure token.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8177',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e91b3805d2081e78feacc6e123bb33e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3095275: Allow webform management category/state to be customized.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8178',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5dbc2b33d2c7777d267810f4d32d28d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3101300: Allow \'Save\' (update) action label to be customized.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8179',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce887455927de79db1aaeaccac1b44f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3103171: Move deprecated jQuery UI buttons element into a sub-module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8180',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26f6e0aafedfff294c9d792030ed8d23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3103032: Move deprecated geocomplete element into a sub-module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8181',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf5cce836cda95125176afdab12be459' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3102996: Move deprecated toggles elements into a sub-module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8182',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8db023488278ac24925d2740d729cc5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3103571: Move deprecated icheck support into a dedicated sub-module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8183',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fcc09034312bfc54f5bcfce0bcde4846' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3094270: Add webform variants support.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8184',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5415efafb6f4fe76a0424dbf7ec827a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3104049: Exclude attached files from email submission values.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8185',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a657b582725bbeaf042efafb27cbca7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3108150: Save numeric properties as numbers instead of strings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8186',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c13807270c3429c6b947ab7a3854d80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8186',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bec0452768eeb2007b2d2d0a80aba86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3108266: Update external libraries. Display warning about InputMask.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8187',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '862b59472177f24f640c94308e128bd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformHelpManagerInterface $help_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8187',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b05e3470a324b2b6c848df04441e228c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3097101: Remote Post cast boolean and number values.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8188',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af92de6d363c0caefa820a9acf615e98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3108433: Allow users to personalize the submission list.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8189',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02c4715de79f931a6af2a8d5b545c068' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3121814: Webform submission check taking a long time.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8191',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf087a465f4dc41bc5d2d3e54a6fbe7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Unsafe HMAC construction.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8192',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '741b741afcb8a7b24250076ee9dc5901' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3137964: Make it easier to embed/share a webform.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8193',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '791d5b6b4ea5ef9dc402298e35165bbe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3144962: Webform cards.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8195',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48eaa813abfe6169cc07c2ff9b8bcb3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3153184: Allow a webform displayed as a page to have a custom theme.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8196',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70514203faa8010fd5959a8efda9c437' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3144962: Webform cards.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8197',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f86f06403d844ad36c8afe60ee42194' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3156982: Fix empty \'#option_all_value\' and \'#option_all_text\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8198',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74edf745a26f5900932457158da22b80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3087699: JQuery UI is being phased out from Drupal core.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8600',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e9cf9668ff3859ff8a85e47250d40fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3106961: [Webform 8.x-6.x] Improve token naming conventions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8601',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f9ca5e90e6afb92c7f01ecbdb23600a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3104392: Webform URL aliases should begin with a forward slash.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8602',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f41304e617ab7798a289af3414f77990' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3088780: Add the ability to disable user IP tracking for all forms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8603',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2960247f19997bffba10ad99cff3f673' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3144019: Move webform_editorial to webform_test_editorial.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8604',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48283a8e5c9b8af5f7f1d3adcca46714' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3144962: Webform cards.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8605',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43e78c0a24410179cbfee412501c0677' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3104392: Webform URL aliases should begin with a forward slash.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8606',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53e80bfc14265d9e6422dda1a51c4fa8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8606',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0404df6a329a12a9cc6bd2d314b6d9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Issue #3156982: Fix empty \'#option_all_value\' and \'#option_all_text\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'uuid' => 'Drupal\\Component\\Uuid\\Php',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'database' => 'Drupal\\Core\\Database\\Database',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'view' => 'Drupal\\views\\Entity\\View',
          'webformsignatureelement' => 'Drupal\\webform\\Element\\WebformSignature',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'emailwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'remotepostwebformhandler' => 'Drupal\\webform\\Plugin\\WebformHandler\\RemotePostWebformHandler',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformreflectionhelper' => 'Drupal\\webform\\Utility\\WebformReflectionHelper',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => NULL,
         'functionName' => 'webform_update_8607',
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