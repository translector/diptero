<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/WebformCodeMirror.php-1594241402',
   'data' => 
  array (
    '5db7bfa2d3ef7d0f2940a775758d4c89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform element for using CodeMirror.
 *
 * Known Issues/Feature Requests:
 *
 * - Mixed Twig Mode #3292
 *   https://github.com/codemirror/CodeMirror/issues/3292
 *
 * @FormElement("webform_codemirror")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72438376bf03cb1db03fbd31a9a5ae5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An associative array of supported CodeMirror modes by type and mime-type.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0dbccdb3603ba7b2c7b43851e0e10fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f6f8d0a1b7f512fb4db13e6cc0eb4d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3e8566223184923a216241cc73228c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a \'webform_codemirror\' element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'processWebformCodeMirror',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4d9c00ea55919a0c9e0eaf2cbdf52b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a #type \'webform_code\' render element for theme_element().
   *
   * @param array $element
   *   An associative array containing the properties of the element.
   *   Properties used: #title, #value, #description, #size, #maxlength,
   *   #placeholder, #required, #attributes.
   *
   * @return array
   *   The $element with prepared variables ready for theme_element().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'preRenderWebformCodeMirror',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e47b2d3f5d5342c55bafecbf4504a455' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform element validation handler for #type \'webform_codemirror\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'validateWebformCodeMirror',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23dbd8188140fb4c5507c209a634b76d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get validation errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'getErrors',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e9daca500237c8addfc2175da9e59920' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an element\'s title.
   *
   * @param array $element
   *   An element.
   *
   * @return string
   *   The element\'s title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'getTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '524a119bd2b5c4ce30747a7bbe391df6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the CodeMirror mode for specified type.
   *
   * @param string $mode
   *   Mode (text, html, or yaml).
   *
   * @return string
   *   The CodeMirror mode (aka mime type).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'getMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93fbc97288973623bdc92fcaab826fae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate HTML.
   *
   * @param array $element
   *   The form element whose value is being validated.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array|null
   *   An array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'validateHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3105684f6d8968364a9f9d14dfcb0775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate Twig.
   *
   * @param array $element
   *   The form element whose value is being validated.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array|null
   *   An array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'validateTwig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f49783084646c8d8bc89a3ae4032f30f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'validateTwig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e93e03bca877a1bcfe29c88f43419e48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionGenerateInterface $webform_submission_generate */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'validateTwig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '963e72ab5b8a14e0b573060131fe7970' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate YAML.
   *
   * @param array $element
   *   The form element whose value is being validated.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array|null
   *   An array of error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'textarea' => 'Drupal\\Core\\Render\\Element\\Textarea',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCodeMirror',
         'functionName' => 'validateYaml',
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