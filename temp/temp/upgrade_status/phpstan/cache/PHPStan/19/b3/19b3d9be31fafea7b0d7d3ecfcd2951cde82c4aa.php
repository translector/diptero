<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/FunctionalJavascriptTests/SortableTestTrait.php-1594234425',
   'data' => 
  array (
    '94bf50cc3892906e795eb555b175b0c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides functions for simulating sort changes.
 *
 * Selenium uses ChromeDriver for FunctionalJavascript tests, but it does not
 * currently support HTML5 drag and drop. These methods manipulate the DOM.
 * This trait should be deprecated when the Chromium bug is fixed.
 *
 * @see https://www.drupal.org/project/drupal/issues/3078152
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3937f1c4a24387687deaf65a7e8dceb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Define to provide any necessary callback following layout change.
   *
   * @param string $item
   *   The HTML selector for the element to be moved.
   * @param string $from
   *   The HTML selector for the previous container element.
   * @param null|string $to
   *   The HTML selector for the target container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
         'functionName' => 'sortableUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2793514d600d65f58dc3947e89b11626' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Simulates a drag on an element from one container to another.
   *
   * @param string $item
   *   The HTML selector for the element to be moved.
   * @param string $from
   *   The HTML selector for the previous container element.
   * @param null|string $to
   *   The HTML selector for the target container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
         'functionName' => 'sortableTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '546b06442f6948cc1b768d6521a2f9b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Simulates a drag moving an element after its sibling in the same container.
   *
   * @param string $item
   *   The HTML selector for the element to be moved.
   * @param string $target
   *   The HTML selector for the sibling element.
   * @param string $from
   *   The HTML selector for the element container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
         'functionName' => 'sortableAfter',
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