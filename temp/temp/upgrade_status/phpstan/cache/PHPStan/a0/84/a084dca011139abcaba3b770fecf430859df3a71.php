<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Utility/WebformDateHelper.php-1594690523',
   'data' => 
  array (
    '953b132e2964b39aca39d14912ed4af7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper class webform date helper methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecef8a5a8e8cb955ccbfcde69f135bb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cached interval options.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce72915a317b3904bb2542f9dcbdcbec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cached interval options flattened.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67035a4983d5b1c18785b8e0aeb426e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wrapper for DateFormatter that return an empty string for empty timestamps.
   *
   * @param int $timestamp
   *   A UNIX timestamp to format.
   * @param string $type
   *   (optional) The data format to use.
   * @param string $format
   *   (optional) If $type is \'custom\', a PHP date format string suitable for
   *   element to date(). Use a backslash to escape ordinary text, so it does
   *   not get interpreted as date format characters.
   * @param string|null $timezone
   *   (optional) Time zone identifier, as described at
   *   http://php.net/manual/timezones.php Defaults to the time zone used to
   *   display the page.
   * @param string|null $langcode
   *   (optional) Language code to translate to. NULL (default) means to use
   *   the user interface language for the page.
   *
   * @return string
   *   A translated date string in the requested format. An empty string will be
   *   returned for empty timestamps.
   *
   * @see \\Drupal\\Core\\Datetime\\DateFormatterInterface::format
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '851fdb0d998701d12a39e6ce540ae254' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Datetime\\DateFormatterInterface $date_formatter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6c19e8e06805c0c5a1968f3baa5a227' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Format date/time object to be written to the database using \'Y-m-d\\TH:i:s\'.
   *
   * @param \\Drupal\\Core\\Datetime\\DrupalDateTime $date
   *   A DrupalDateTime object.
   *
   * @return string
   *   The date/time object format as \'Y-m-d\\TH:i:s\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'formatStorage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '703381a60fda9c5bf7080092d3d9e984' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get days of the week.
   *
   * @return array
   *   Associative array of days of the week.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'getDaysOfWeek',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0d355b63fe2f7f768af66a30560a61e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a date object from an input format with a translated date string.
   *
   * @param string $format
   *   PHP date() type format for parsing the input.
   * @param mixed $time
   *   A date string.
   * @param mixed $timezone
   *   PHP DateTimeZone object, string or NULL allowed.
   * @param array $settings
   *   An array of settings.
   *
   * @return \\Drupal\\Core\\Datetime\\DrupalDateTime|bool
   *   A new DateTimePlus object or FALSE if invalid date string.
   *
   * @see \\Drupal\\Core\\Datetime\\DrupalDateTime::__construct
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'createFromFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e68569a50db16cd3a061bc2dae09110f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get interval options used by submission limits.
   *
   * @return array
   *   An associative array of interval options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'getIntervalOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13df92c10e06f130c802590e08b7468d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get interval options used by submission limits.
   *
   * @return array
   *   An associative array of interval options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'getIntervalOptionsFlattened',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2c5da2a1eab9e3f021deae5c9531782' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get interval text.
   *
   * @param int|null $interval
   *   An interval.
   *
   * @return string
   *   An intervals\' text.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'getIntervalText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5000d09c3e2c5e8e24cd38ed8da38eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize interval options used by submission limits.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'initIntervalOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48eecc17dc1c9f27ac55406cb753e734' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Convert date string to English so that it can be parsed.
   *
   * @param string $format
   *   PHP date() type format for parsing the input.
   * @param string $value
   *   A date string.
   *
   * @return string
   *   A date string translated to English.
   *
   * @see https://stackoverflow.com/questions/36498186/php-datetimecreatefromformat-and-multi-languages
   * @see core/modules/locale/locale.datepicker.js
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'datehelper' => 'Drupal\\Core\\Datetime\\DateHelper',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDateHelper',
         'functionName' => 'convertDateStringToEnglish',
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