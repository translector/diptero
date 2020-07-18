<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/Select.php-1594234425',
   'data' => 
  array (
    'b9a9a2967d2813a3fd186c8f14a107b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a form element for a drop-down menu or scrolling selection box.
 *
 * Properties:
 * - #options: An associative array of options for the select. Do not use
 *   placeholders that sanitize data in any labels, as doing so will lead to
 *   double-escaping. Each array value can be:
 *   - A single translated string representing an HTML option element, where
 *     the outer array key is the option value and the translated string array
 *     value is the option label. The option value will be visible in the HTML
 *     and can be modified by malicious users, so it should not contain
 *     sensitive information and should be treated as possibly malicious data in
 *     processing.
 *   - An array representing an HTML optgroup element. The outer array key
 *     should be a translated string, and is used as the label for the group.
 *     The inner array contains the options for the group (with the keys as
 *     option values, and translated string values as option labels). Nesting
 *     option groups is not supported.
 *   - An object with an \'option\' property. In this case, the outer array key
 *     is ignored, and the contents of the \'option\' property are interpreted as
 *     an array of options to be merged with any other regular options and
 *     option groups found in the outer array.
 * - #sort_options: (optional) If set to TRUE (default is FALSE), sort the
 *   options by their labels, after rendering and translation is complete.
 *   Can be set within an option group to sort that group.
 * - #sort_start: (optional) Option index to start sorting at, where 0 is the
 *   first option. Can be used within an option group. If an empty option is
 *   being added automatically (see #empty_option and #empty_value properties),
 *   this defaults to 1 to keep the empty option at the top of the list.
 *   Otherwise, it defaults to 0.
 * - #empty_option: (optional) The label to show for the first default option.
 *   By default, the label is automatically set to "- Select -" for a required
 *   field and "- None -" for an optional field.
 * - #empty_value: (optional) The value for the first default option, which is
 *   used to determine whether the user submitted a value or not.
 *   - If #required is TRUE, this defaults to \'\' (an empty string).
 *   - If #required is not TRUE and this value isn\'t set, then no extra option
 *     is added to the select control, leaving the control in a slightly
 *     illogical state, because there\'s no way for the user to select nothing,
 *     since all user agents automatically preselect the first available
 *     option. But people are used to this being the behavior of select
 *     controls.
 *     @todo Address the above issue in Drupal 8.
 *   - If #required is not TRUE and this value is set (most commonly to an
 *     empty string), then an extra option (see #empty_option above)
 *     representing a "non-selection" is added with this as its value.
 * - #multiple: (optional) Indicates whether one or more options can be
 *   selected. Defaults to FALSE.
 * - #default_value: Must be NULL or not set in case there is no value for the
 *   element yet, in which case a first default option is inserted by default.
 *   Whether this first option is a valid option depends on whether the field
 *   is #required or not.
 * - #required: (optional) Whether the user needs to select an option (TRUE)
 *   or not (FALSE). Defaults to FALSE.
 * - #size: The number of rows in the list that should be visible at one time.
 *
 * Usage example:
 * @code
 * $form[\'example_select\'] = [
 *   \'#type\' => \'select\',
 *   \'#title\' => $this->t(\'Select element\'),
 *   \'#options\' => [
 *     \'1\' => $this->t(\'One\'),
 *     \'2\' => [
 *       \'2.1\' => $this->t(\'Two point one\'),
 *       \'2.2\' => $this->t(\'Two point two\'),
 *     ],
 *     \'3\' => $this->t(\'Three\'),
 *   ],
 * ];
 * @endcode
 *
 * @FormElement("select")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Select',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1c010868f7303bb59deb72f8d5ef533' => 
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
         'className' => 'Drupal\\Core\\Render\\Element\\Select',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50fc7f853c1b236644de00367f6ded5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a select list form element.
   *
   * This process callback is mandatory for select fields, since all user agents
   * automatically preselect the first available option of single (non-multiple)
   * select lists.
   *
   * @param array $element
   *   The form element to process.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed element.
   *
   * @see _form_validate()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Select',
         'functionName' => 'processSelect',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7357c10ba21674a501281f50f39428e' => 
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
         'className' => 'Drupal\\Core\\Render\\Element\\Select',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cfae8e760246939c9a33aa12203e7ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a select render element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Select',
         'functionName' => 'preRenderSelect',
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