<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/Number.php-1594234425',
   'data' => 
  array (
    '742e6730bdaf38a490cfac7d8c50e4bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a form element for numeric input, with special numeric validation.
 *
 * Properties:
 * - #default_value: A valid floating point number.
 * - #min: Minimum value.
 * - #max: Maximum value.
 * - #step: Ensures that the number is an even multiple of step, offset by #min
 *   if specified. A #min of 1 and a #step of 2 would allow values of 1, 3, 5,
 *   etc.
 *
 * Usage example:
 * @code
 * $form[\'quantity\'] = array(
 *   \'#type\' => \'number\',
 *   \'#title\' => $this->t(\'Quantity\'),
 * );
 * @endcode
 *
 * @see \\Drupal\\Core\\Render\\Element\\Range
 * @see \\Drupal\\Core\\Render\\Element\\Textfield
 *
 * @FormElement("number")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'numberutility' => 'Drupal\\Component\\Utility\\Number',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Number',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '865e4a7b668512910644ca1bc47a4845' => 
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
          'numberutility' => 'Drupal\\Component\\Utility\\Number',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Number',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30d6bbb4123aa9c87451f9b0478ac22c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form element validation handler for #type \'number\'.
   *
   * Note that #required is validated by _form_validate() already.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'numberutility' => 'Drupal\\Component\\Utility\\Number',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Number',
         'functionName' => 'validateNumber',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77f6ea57aa7a2255dc8413b2886fce04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a #type \'number\' render element for input.html.twig.
   *
   * @param array $element
   *   An associative array containing the properties of the element.
   *   Properties used: #title, #value, #description, #min, #max, #placeholder,
   *   #required, #attributes, #step, #size.
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
          'numberutility' => 'Drupal\\Component\\Utility\\Number',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Number',
         'functionName' => 'preRenderNumber',
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