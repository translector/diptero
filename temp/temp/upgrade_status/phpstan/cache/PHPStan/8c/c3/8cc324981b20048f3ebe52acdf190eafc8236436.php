<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Datetime/Element/Datelist.php-1594234425',
   'data' => 
  array (
    '544cfe09cb4fd2444afcb860ec042498' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a datelist element.
 *
 * @FormElement("datelist")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\Datelist',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a80b7a5d84fd40187f6a4a92fbb42e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\Datelist',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6579fd3aa4b5f7443f6328c7f9a7f5ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Validates the date type to adjust 12 hour time and prevent invalid dates.
   * If the date is valid, the date is set in the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\Datelist',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94c7547ef8becf4bdd42f56e8d737df2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Expands a date element into an array of individual elements.
   *
   * Required settings:
   *   - #default_value: A DrupalDateTime object, adjusted to the proper local
   *     timezone. Converting a date stored in the database from UTC to the local
   *     zone and converting it back to UTC before storing it is not handled here.
   *     This element accepts a date as the default value, and then converts the
   *     user input strings back into a new date object on submission. No timezone
   *     adjustment is performed.
   * Optional properties include:
   *   - #date_part_order: Array of date parts indicating the parts and order
   *     that should be used in the selector, optionally including \'ampm\' for
   *     12 hour time. Default is array(\'year\', \'month\', \'day\', \'hour\', \'minute\').
   *   - #date_text_parts: Array of date parts that should be presented as
   *     text fields instead of drop-down selectors. Default is an empty array.
   *   - #date_date_callbacks: Array of optional callbacks for the date element.
   *   - #date_year_range: A description of the range of years to allow, like
   *     \'1900:2050\', \'-3:+3\' or \'2000:+3\', where the first value describes the
   *     earliest year and the second the latest year in the range. A year
   *     in either position means that specific year. A +/- value describes a
   *     dynamic value that is that many years earlier or later than the current
   *     year at the time the form is displayed. Defaults to \'1900:2050\'.
   *   - #date_increment: The increment to use for minutes and seconds, i.e.
   *     \'15\' would show only :00, :15, :30 and :45. Defaults to 1 to show every
   *     minute.
   *   - #date_timezone: The Time Zone Identifier (TZID) to use when displaying
   *     or interpreting dates, i.e: \'Asia/Kolkata\'. Defaults to the value
   *     returned by date_default_timezone_get().
   *
   * Example usage:
   * @code
   *   $form = array(
   *     \'#type\' => \'datelist\',
   *     \'#default_value\' => new DrupalDateTime(\'2000-01-01 00:00:00\'),
   *     \'#date_part_order\' => array(\'month\', \'day\', \'year\', \'hour\', \'minute\', \'ampm\'),
   *     \'#date_text_parts\' => array(\'year\'),
   *     \'#date_year_range\' => \'2010:2020\',
   *     \'#date_increment\' => 15,
   *     \'#date_timezone\' => \'Asia/Kolkata\'
   *   );
   * @endcode
   *
   * @param array $element
   *   The form element whose value is being processed.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\Datelist',
         'functionName' => 'processDatelist',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd44b8a0017428e5b68de30cdee798303' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validation callback for a datelist element.
   *
   * If the date is valid, the date object created from the user input is set in
   * the form for use by the caller. The work of compiling the user input back
   * into a date object is handled by the value callback, so we can use it here.
   * We also have the raw input available for validation testing.
   *
   * @param array $element
   *   The element being processed.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\Datelist',
         'functionName' => 'validateDatelist',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '863f736ba2c00b51ea7f09175cc663d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks the input array for empty values.
   *
   * Input array keys are checked against values in the parts array. Elements
   * not in the parts array are ignored. Returns an array representing elements
   * from the input array that have no value. If no empty values are found,
   * returned array is empty.
   *
   * @param array $input
   *   Array of individual inputs to check for value.
   * @param array $parts
   *   Array to check input against, ignoring elements not in this array.
   *
   * @return array
   *   Array of keys from the input array that have no value, may be empty.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\Datelist',
         'functionName' => 'checkEmptyInputs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a42d944342544d80a0af4bd22b23874' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rounds minutes and seconds to nearest requested value.
   *
   * @param $date
   * @param $increment
   *
   * @return
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Datetime\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Datetime\\Element\\Datelist',
         'functionName' => 'incrementRound',
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