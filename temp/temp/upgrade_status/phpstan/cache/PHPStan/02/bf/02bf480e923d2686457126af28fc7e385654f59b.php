<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/WebformTime.php-1594241402',
   'data' => 
  array (
    '371e54f499e93273c7233cda2e16db74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform element for time selection.
 *
 * @code
 * $form[\'time\'] = array(
 *   \'#type\' => \'webform_time\',
 *   \'#title\' => $this->t(\'Time\'),
 *   \'#default_value\' => \'12:00 AM\'
 * );
 * @endcode
 *
 * @FormElement("webform_time")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'dateformat' => 'Drupal\\Core\\Datetime\\Entity\\DateFormat',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTime',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63093b0c103d8fef24154b1cacebfd9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'dateformat' => 'Drupal\\Core\\Datetime\\Entity\\DateFormat',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTime',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5382daea26a0ce1e80c2f9fc556f2ab1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'dateformat' => 'Drupal\\Core\\Datetime\\Entity\\DateFormat',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTime',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '770595bb2de074a9a7c032adca01fd9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a time webform element.
   *
   * @param array $element
   *   The webform element to process. Properties used:
   *   - #time_format: The time format used in PHP formats.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete webform structure.
   *
   * @return array
   *   The processed element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'dateformat' => 'Drupal\\Core\\Datetime\\Entity\\DateFormat',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTime',
         'functionName' => 'processWebformTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '508952e9e334f0700db09d91d4bf9d28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform element validation handler for #type \'webform_time\'.
   *
   * Note that #required is validated by _form_valistatic::formatTime() already.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'dateformat' => 'Drupal\\Core\\Datetime\\Entity\\DateFormat',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTime',
         'functionName' => 'validateWebformTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fcbddf29676d1f70bab9ce38e882c7f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds form-specific attributes to a \'date\' #type element.
   *
   * @param array $element
   *   An associative array containing the properties of the element.
   *
   * @return array
   *   The $element with prepared variables ready for #theme \'input__time\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'dateformat' => 'Drupal\\Core\\Datetime\\Entity\\DateFormat',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTime',
         'functionName' => 'preRenderWebformTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c864b2bc64e4188b63a582e2ccc6499d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Format custom time.
   *
   * @param string $custom_format
   *   A PHP date format string suitable for input to date().
   * @param int $timestamp
   *   (optional) A UNIX timestamp to format.
   *
   * @return string
   *   Formatted time.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'dateformat' => 'Drupal\\Core\\Datetime\\Entity\\DateFormat',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTime',
         'functionName' => 'formatTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3746d5c24a5eb5e839459f36dc111efa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Datetime\\DateFormatterInterface $date_formatter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'dateformat' => 'Drupal\\Core\\Datetime\\Entity\\DateFormat',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformTime',
         'functionName' => 'formatTime',
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