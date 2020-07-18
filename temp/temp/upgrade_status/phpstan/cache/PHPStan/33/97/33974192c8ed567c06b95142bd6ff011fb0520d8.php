<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Utility/WebformFormHelper.php-1594690523',
   'data' => 
  array (
    '1c163861fe61f66aed00b9dffc4fb1d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper class webform based methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformFormHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64688ba670d637830a9fdf45c0194642' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds JavaScript to change the state of an element based on another element.
   *
   * @param array $elements
   *   A renderable array element having a #states property as described above.
   * @param string $key
   *   The element property to add the states attribute to.
   *
   * @see \\Drupal\\Core\\Form\\FormHelper::processStates
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformFormHelper',
         'functionName' => 'processStates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81bb29178e3edc98984f3b682937064b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build form jQuery UI tabs.
   *
   * @param array $form
   *   A form.
   * @param array $tabs
   *   An associative array contain tabs.
   * @param string $active_tab
   *   The active tab name.
   *
   * @return array
   *   The form with tabs.
   *
   * @see \\Drupal\\webform\\Form\\WebformHandlerFormBase::buildForm
   * @see \\Drupal\\webform\\Plugin\\WebformElementBase::buildConfigurationFormTabs
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformFormHelper',
         'functionName' => 'buildTabs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da6d4a3e8386e36cb15cbb2e66b53f94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cleanup webform state values.
   *
   * @param array $values
   *   An array of webform state values.
   * @param array $keys
   *   (optional) An array of custom keys to be removed.
   *
   * @return array
   *   The values without default keys like
   *   \'form_build_id\', \'form_token\', \'form_id\', \'op\', \'actions\', etc…
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformFormHelper',
         'functionName' => 'cleanupFormStateValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '695fd271952706e8cd1da9b75001182a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Traverse a render array and collect references to all elements in an associative array keyed by element key.
   *
   * @param array $build
   *   An render array.
   *
   * @return array
   *   An associative array of elements by reference.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformFormHelper',
         'functionName' => 'flattenElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c98ee6603db39cf32c981aa28558d495' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Traverse a render array and collect references to all elements in an associative array keyed by element key.
   *
   * @param array $build
   *   An render array.
   * @param array $elements
   *   An empty array that will be populated with references to all elements.
   * @param array $duplicate_element_keys
   *   An array used to track elements with duplicate keys.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformFormHelper',
         'functionName' => 'flattenElementsRecursive',
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