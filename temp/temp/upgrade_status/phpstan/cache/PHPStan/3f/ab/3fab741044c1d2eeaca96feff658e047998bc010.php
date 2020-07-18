<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/WebformComputedBase.php-1594241402',
   'data' => 
  array (
    'b7debc0d7d6f602e47adaede208cc4ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for \'webform_computed\' elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac0ce676d5817f11f1c548ad0ad753c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache of submissions being processed.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5386f744f9cc04dba79b1b28c744754' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee42b55f8eb678dde47d8ea657975cfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a Webform computed token element.
   *
   * @param array $element
   *   The element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'processWebformComputed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c84e902edf8b6b3f0e78b5f211635be3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'computeValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31f08c674e550333804d42f97d82ee5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates an computed element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'validateWebformComputed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5934fd14617e47961edc95e74a3d507' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set computed element\'s value.
   *
   * @param array $element
   *   A computed element.
   * @param string $value
   *   A computer value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'setWebformComputedElementValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe01514cd26bc76dd3114ca433ae13df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the current request is using Ajax.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69d2058e492a9001bafb6aa33ac3d506' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform computed element validate callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'validateWebformComputedCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98977f50d25b58e0f70a13754984fd7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform computed element submit callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'submitWebformComputedCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '915c70658e998475b60e8d530faf1289' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform computed element Ajax callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The computed element element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'ajaxWebformComputedCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23bdcd0ebb704d16406427b7ec171892' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an element\'s value mode/type.
   *
   * @param array $element
   *   The element.
   *
   * @return string
   *   The markup type (html or text).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'getMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b7e6290ce6e71a5d52b2368315c2ed3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the Webform submission for element.
   *
   * @param array $element
   *   The element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface|null
   *   A webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'getWebformSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48b9e9f500e434006aa80e349cfc59b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformhtmlhelper' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
          'webformxss' => 'Drupal\\webform\\Utility\\WebformXss',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformComputedBase',
         'functionName' => 'getWebformSubmission',
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