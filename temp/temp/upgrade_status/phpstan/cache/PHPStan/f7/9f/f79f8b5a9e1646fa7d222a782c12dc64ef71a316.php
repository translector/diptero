<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Utility/WebformAccessibilityHelper.php-1594690523',
   'data' => 
  array (
    '1656bdffa6781976514c788e858ebd78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper class webform accessibility methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformAccessibilityHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75a5352af61103c07073cae49ac73f4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Visually hide text using .visually-hidden class.
   *
   * The .visually-hidden class is used to render invisible content just for
   * screen reader users.
   *
   * @param string|array $title
   *   Text or #markup that should be visually hidden.
   *
   * @return array
   *   A renderable array with the text wrapped in
   *   <span class="visually-hidden">
   *
   * @see https://webaim.org/techniques/css/invisiblecontent/
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformAccessibilityHelper',
         'functionName' => 'buildVisuallyHidden',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d241e4ce156671d986a507deeb8100f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Aria hide text using aria-hidden attribute.
   *
   * The aria-hidden property tells screen-readers if they
   * should ignore the element.
   *
   * @param string|array $title
   *   Text or #markup that should be aria-hidden.
   *
   * @return array
   *   A renderable array with the text wrapped in
   *   <span aria-hidden="true">
   *
   * @see https://www.w3.org/TR/wai-aria-1.1/#aria-hidden
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformAccessibilityHelper',
         'functionName' => 'buildAriaHidden',
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