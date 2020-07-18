<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/Checkboxes.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Render/Element/CompositeFormElementTrait.php-1594234425',
   'data' => 
  array (
    '6f950ee71c8b2739b41face340c19cbe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a form element for a set of checkboxes.
 *
 * Properties:
 * - #options: An associative array whose keys are the values returned for each
 *   checkbox, and whose values are the labels next to each checkbox. The
 *   #options array cannot have a 0 key, as it would not be possible to discern
 *   checked and unchecked states.
 *
 * Usage example:
 * @code
 * $form[\'high_school\'][\'tests_taken\'] = array(
 *   \'#type\' => \'checkboxes\',
 *   \'#options\' => array(\'SAT\' => $this->t(\'SAT\'), \'ACT\' => $this->t(\'ACT\')),
 *   \'#title\' => $this->t(\'What standardized tests did you take?\'),
 *   ...
 * );
 * @endcode
 *
 * @see \\Drupal\\Core\\Render\\Element\\Radios
 * @see \\Drupal\\Core\\Render\\Element\\Checkbox
 *
 * @FormElement("checkboxes")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Checkboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7f3a70469fb2ee1be7c08f97b17a1945' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for radios, checkboxes, and similar composite form elements.
 *
 * Any form element that is comprised of several distinct parts can use this
 * trait to add support for a composite title or description.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Checkboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e13d78139708a7e9d415ef954720e6c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds form element theming to an element if its title or description is set.
   *
   * This is used as a pre render function for checkboxes and radios.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Checkboxes',
         'functionName' => 'preRenderCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f39eb0ea64db33fb6ade60b825231b8' => 
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
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Checkboxes',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '478b1ae6fc7d90b83e385f7c4b077d1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a checkboxes form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Checkboxes',
         'functionName' => 'processCheckboxes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9fa33df9216f0adfa55691fc2bc3c222' => 
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
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Checkboxes',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8d3245c38fcd12f70156f4be1768e4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines which checkboxes were checked when a form is submitted.
   *
   * @param array $input
   *   An array returned by the FormAPI for a set of checkboxes.
   *
   * @return array
   *   An array of keys that were checked.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Checkboxes',
         'functionName' => 'getCheckedCheckboxes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9f8394d82d0484d913dd398677ab8dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if all checkboxes in a set are unchecked.
   *
   * @param array $input
   *   An array returned by the FormAPI for a set of checkboxes.
   *
   * @return bool
   *   TRUE if all options are unchecked. FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Checkboxes',
         'functionName' => 'detectEmptyCheckboxes',
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