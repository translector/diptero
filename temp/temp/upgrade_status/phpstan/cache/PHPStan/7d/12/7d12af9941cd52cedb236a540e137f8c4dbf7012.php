<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/Details.php-1594234425',
   'data' => 
  array (
    '652c8227538f7fb1a8a37db2cd020ef0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a render element for a details element, similar to a fieldset.
 *
 * Fieldsets can only be used in forms, while details elements can be used
 * outside of forms. Users click on the title to open or close the details
 * element, showing or hiding the contained elements.
 *
 * Properties:
 * - #title: The title of the details container. Defaults to "Details".
 * - #open: Indicates whether the container should be open by default.
 *   Defaults to FALSE.
 * - #summary_attributes: An array of attributes to apply to the <summary>
 *   element.
 *
 * Usage example:
 * @code
 * $form[\'author\'] = array(
 *   \'#type\' => \'details\',
 *   \'#title\' => $this->t(\'Author\'),
 * );
 *
 * $form[\'author\'][\'name\'] = array(
 *   \'#type\' => \'textfield\',
 *   \'#title\' => $this->t(\'Name\'),
 * );
 * @endcode
 *
 * @see \\Drupal\\Core\\Render\\Element\\Fieldset
 * @see \\Drupal]Core\\Render\\Element\\VerticalTabs
 *
 * @RenderElement("details")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Details',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7bf1f55eedb2804db2541d99804a645' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Details',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fa04f14ba4ded10bab6b99d69b414bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds form element theming to details.
   *
   * @param $element
   *   An associative array containing the properties and children of the
   *   details.
   *
   * @return
   *   The modified element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Details',
         'functionName' => 'preRenderDetails',
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