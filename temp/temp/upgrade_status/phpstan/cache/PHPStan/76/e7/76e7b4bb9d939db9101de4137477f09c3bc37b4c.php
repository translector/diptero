<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/includes/webform.editor.inc-1594241402',
   'data' => 
  array (
    '1ec6a4972003897b047e8ecb5f083f33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_webform_insert().
 *
 * @see editor_entity_insert()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => 'webform_webform_insert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '463827e0d095c6f29f1be3aba7c3882a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_webform_update().
 *
 * @see editor_entity_update()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => 'webform_webform_update',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '042176ae0c38fea44dd2cdb6aad7117a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_webform_delete().
 *
 * @see editor_entity_delete()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => 'webform_webform_delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f280b4a97fcc593447594d0f4f5a8c9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update config editor file references.
 *
 * @param \\Drupal\\Core\\Config\\Config $config
 *   An editable configuration object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_config_update',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f1a9e4c69698d93982c2e7ef766fab9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Delete config editor file references.
 *
 * @param \\Drupal\\Core\\Config\\Config $config
 *   An editable configuration object.
 *
 * @see webform_uninstall()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_config_delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fb9ea98f56c5390aaebc57d76f1874c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Finds all files referenced (data-entity-uuid) by config entity.
 *
 * @param \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface $entity
 *   An entity whose fields to analyze.
 *
 * @return array
 *   An array of file entity UUIDs.
 *
 * @see _editor_get_file_uuids_by_field()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_get_config_entity_file_uuids',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '951295f3f3a0fd9f8d19c3f7efde3ce5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Finds all files referenced (data-entity-uuid) in an associative array.
 *
 * @param array $data
 *   An associative array.
 *
 * @return array
 *   An array of file entity UUIDs.
 *
 * @see _editor_get_file_uuids_by_field()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_get_array_file_uuids',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00b0255b8e1ff50e283d0d662d7f08c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Records file usage of files referenced by formatted text fields.
 *
 * Every referenced file that does not yet have the FILE_STATUS_PERMANENT state,
 * will be given that state.
 *
 * @param array $uuids
 *   An array of file entity UUIDs.
 * @param string $type
 *   The type of the object that contains the referenced file.
 * @param string $id
 *   The unique ID of the object containing the referenced file.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *
 * @see _editor_record_file_usage()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_record_file_usage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20fde995053b28f081db6ddb229b6df7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_record_file_usage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5ee9badbced5460da961b02d9c298c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileUsage\\FileUsageInterface $file_usage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_record_file_usage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7adfccd117ad6583e9c7ee0ed8818fc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deletes file usage of files referenced by formatted text fields.
 *
 * @param array $uuids
 *   An array of file entity UUIDs.
 * @param string $type
 *   The type of the object that contains the referenced file.
 * @param string $id
 *   The unique ID of the object containing the referenced file.
 * @param int $count
 *   The number of references to delete. Should be 1 when deleting a single
 *   revision and 0 when deleting an entity entirely.
 *
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *
 * @see \\Drupal\\file\\FileUsage\\FileUsageInterface::delete()
 * @see _editor_delete_file_usage()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_delete_file_usage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '423d292799e26cca7dc88b377ea43cc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_delete_file_usage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '491c07452296d38f9de5b762d999f1f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileUsage\\FileUsageInterface $file_usage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_delete_file_usage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad5c219bc4b3b75578c49ad2870d6dd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parse an HTML snippet for any linked file with data-entity-uuid attributes.
 *
 * @param string $text
 *   The partial (X)HTML snippet to load. Invalid markup will be corrected on
 *   import.
 *
 * @return array
 *   An array of all found UUIDs.
 *
 * @see _editor_parse_file_uuids()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => NULL,
         'functionName' => '_webform_parse_file_uuids',
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