<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Datetime/Element/DateElementBase.php-1594234425',
   'data' => 
  array (
    '9a31151483b02dc11e88e1860efb3959' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for date elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\DateElementBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edc03e5bd4f92948932d762eae67d891' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Specifies the start and end year to use as a date range.
   *
   * Handles a string like -3:+3 or 2001:2010 to describe a dynamic range of
   * minimum and maximum years to use in a date selector.
   *
   * Centers the range around the current year, if any, but expands it far enough
   * so it will pick up the year value in the field in case the value in the field
   * is outside the initial range.
   *
   * @param string $string
   *   A min and max year string like \'-3:+1\' or \'2000:2010\' or \'2000:+3\'.
   * @param object $date
   *   (optional) A date object to test as a default value. Defaults to NULL.
   *
   * @return array
   *   A numerically indexed array, containing the minimum and maximum year
   *   described by this pattern.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\DateElementBase',
         'functionName' => 'datetimeRangeYears',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2d596df03cc3f52c3c6359cc25b0831' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the most relevant title of a datetime element.
   *
   * Since datetime form elements often consist of combined date and time fields
   * the element title might not be located on the element itself but on the
   * parent container element.
   *
   * @param array $element
   *   The element being processed.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return string
   *   The title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\DateElementBase',
         'functionName' => 'getElementTitle',
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