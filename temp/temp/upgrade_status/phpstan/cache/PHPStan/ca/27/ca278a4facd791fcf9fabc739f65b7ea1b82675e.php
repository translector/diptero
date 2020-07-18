<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/Textfield.php-1594234425',
   'data' => 
  array (
    '9dcac88de36fb24f5aa23e2a323b7d86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a one-line text field form element.
 *
 * Properties:
 * - #maxlength: Maximum number of characters of input allowed.
 * - #size: The size of the input element in characters.
 * - #autocomplete_route_name: A route to be used as callback URL by the
 *   autocomplete JavaScript library.
 * - #autocomplete_route_parameters: An array of parameters to be used in
 *   conjunction with the route name.
 * - #pattern: A string for the native HTML5 pattern attribute.
 *
 * Usage example:
 * @code
 * $form[\'title\'] = array(
 *   \'#type\' => \'textfield\',
 *   \'#title\' => $this->t(\'Subject\'),
 *   \'#default_value\' => $node->title,
 *   \'#size\' => 60,
 *   \'#maxlength\' => 128,
 *   \'#pattern\' => \'some-prefix-[a-z]+\',
 *   \'#required\' => TRUE,
 * );
 * @endcode
 *
 * @see \\Drupal\\Core\\Render\\Element\\Color
 * @see \\Drupal\\Core\\Render\\Element\\Email
 * @see \\Drupal\\Core\\Render\\Element\\MachineName
 * @see \\Drupal\\Core\\Render\\Element\\Number
 * @see \\Drupal\\Core\\Render\\Element\\Password
 * @see \\Drupal\\Core\\Render\\Element\\PasswordConfirm
 * @see \\Drupal\\Core\\Render\\Element\\Range
 * @see \\Drupal\\Core\\Render\\Element\\Tel
 * @see \\Drupal\\Core\\Render\\Element\\Url
 *
 * @FormElement("textfield")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Textfield',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0378e5c9287a7cec775c47a9dfa6ef7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Textfield',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aee9f771e29c43892a45a5c6a1019b6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Textfield',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2cc9b3b0656221f58eb3d2efb8357798' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a #type \'textfield\' render element for input.html.twig.
   *
   * @param array $element
   *   An associative array containing the properties of the element.
   *   Properties used: #title, #value, #description, #size, #maxlength,
   *   #placeholder, #required, #attributes.
   *
   * @return array
   *   The $element with prepared variables ready for input.html.twig.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Textfield',
         'functionName' => 'preRenderTextfield',
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