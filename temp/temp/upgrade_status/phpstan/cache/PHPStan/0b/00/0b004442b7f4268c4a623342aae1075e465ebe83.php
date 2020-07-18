<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/tests/modules/webform_test/webform_test.module-1594690523',
   'data' => 
  array (
    '06e8f645aa3ad89e416a4c687dd6d1e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test element callback that should be ignored.
 *
 * @param array $element
 *   An element.
 *
 * @return array
 *   An element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'url' => 'Drupal\\Core\\Url',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => NULL,
         'functionName' => 'webform_test_ignored_element_callback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bcbeda9eaf77c806ddb205f0f76667d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_preprocess_HOOK().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'url' => 'Drupal\\Core\\Url',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => NULL,
         'functionName' => 'webform_test_preprocess_page',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a4fd56f7893d1474389c0e5c8361d93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_webform_load().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'url' => 'Drupal\\Core\\Url',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => NULL,
         'functionName' => 'webform_test_webform_load',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6514ebac9d04d12eb834d397a74bee8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Load webform test include file.
 *
 * @param string $id
 *   The webform ID.
 *
 * @return string|bool
 *   The webform test generating name or FALSE if the webform has not test
 *   include file.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'url' => 'Drupal\\Core\\Url',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => NULL,
         'functionName' => '_webform_test_load_include',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2a5a50ec936e71b9dd924df6e035cb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get a preview/example element for a specified element type.
 *
 * @param string $type
 *   An element type.
 * @param array $options
 *   Options for generating the example element.
 *
 * @return array|bool
 *   An example element or FALSE if the element type can\'t have an example.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'url' => 'Drupal\\Core\\Url',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => NULL,
         'functionName' => '_webform_test_get_element_preview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bbdbc1049903caef337bfd2f3958f246' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'url' => 'Drupal\\Core\\Url',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => NULL,
         'functionName' => '_webform_test_get_element_preview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bbd6c53620e472b8a49e568bcce4873' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get issues related to elements #states API.
 *
 * @return array
 *   Associative array containing issues related to elements #states API.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'url' => 'Drupal\\Core\\Url',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => NULL,
         'functionName' => '_webform_test_issues',
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