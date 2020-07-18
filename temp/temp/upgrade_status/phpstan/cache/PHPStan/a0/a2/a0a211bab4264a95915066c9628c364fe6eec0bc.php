<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/VerticalTabs.php-1594234425',
   'data' => 
  array (
    'bbc7351451de931de4940a4de75aaf06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a render element for vertical tabs in a form.
 *
 * Formats all child and non-child details elements whose #group is assigned
 * this element\'s name as vertical tabs.
 *
 * Properties:
 * - #default_tab: The HTML ID of the rendered details element to be used as
 *   the default tab. View the source of the rendered page to determine the ID.
 *
 * Usage example:
 * @code
 * $form[\'information\'] = array(
 *   \'#type\' => \'vertical_tabs\',
 *   \'#default_tab\' => \'edit-publication\',
 * );
 *
 * $form[\'author\'] = array(
 *   \'#type\' => \'details\',
 *   \'#title\' => $this->t(\'Author\'),
 *   \'#group\' => \'information\',
 * );
 *
 * $form[\'author\'][\'name\'] = array(
 *   \'#type\' => \'textfield\',
 *   \'#title\' => $this->t(\'Name\'),
 * );
 *
 * $form[\'publication\'] = array(
 *   \'#type\' => \'details\',
 *   \'#title\' => $this->t(\'Publication\'),
 *   \'#group\' => \'information\',
 * );
 *
 * $form[\'publication\'][\'publisher\'] = array(
 *   \'#type\' => \'textfield\',
 *   \'#title\' => $this->t(\'Publisher\'),
 * );
 * @endcode
 *
 * @FormElement("vertical_tabs")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\VerticalTabs',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c35545d27c257d188ecc6828582ea6fc' => 
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
         'className' => 'Drupal\\Core\\Render\\Element\\VerticalTabs',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39e7c82baa44fdc12aa25107ef908f69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a vertical_tabs element for rendering.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   vertical tabs element.
   *
   * @return array
   *   The modified element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\VerticalTabs',
         'functionName' => 'preRenderVerticalTabs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '463bc8d381d879db6acd4c5b98e84fbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a group formatted as vertical tabs.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   details element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\VerticalTabs',
         'functionName' => 'processVerticalTabs',
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