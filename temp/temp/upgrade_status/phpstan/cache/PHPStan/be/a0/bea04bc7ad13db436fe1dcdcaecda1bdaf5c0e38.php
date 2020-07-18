<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_options_limit/src/Plugin/WebformHandler/OptionsLimitWebformHandler.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Element/WebformAjaxElementTrait.php-1594241402',
   'data' => 
  array (
    '407693a8d7e43abb9d7184c50fb1c841' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform options and boolean (boolean) limit handler.
 *
 * @WebformHandler(
 *   id = "options_limit",
 *   label = @Translation("Options/Checkbox limit"),
 *   category = @Translation("Options"),
 *   description = @Translation("Define options or checkbox submission limits."),
 *   cardinality = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::RESULTS_IGNORED,
 *   submission = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::SUBMISSION_REQUIRED,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78c7544450289f9470f6e3eb28c9d699' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for ajax element support.
 *
 * @see \\Drupal\\webform_test_element\\Plugin\\WebformElement\\WebformTestElementProperties
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c30dce152066a19d421c6e9f03027d05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Ajax element wrapper id.
   *
   * @param string $id
   *   A unique element id.
   *
   * @return string
   *   The element id suffixed with *-wrapper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getAjaxElementWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ccad8b0c1a1dbadbd5fe544a646b00e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Ajax element update name.
   *
   * @param string $id
   *   A unique element id.
   *
   * @return string
   *   The element update name suffixed with *-update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getAjaxElementUpdateName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55610bab9a033f4d2dfdee0a91a29db5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Ajax element update class.
   *
   * @param string $id
   *   A unique element id.
   *
   * @return string
   *   The element update classes prefixed with js-* and suffixed with *-update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getAjaxElementUpdateClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8154b41ebe09b45ea4d35a785b46df58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$wrapper_element
   *   The element to be update via Ajax.
   * @param array &$trigger_element
   *   The element to trigger the Ajax update.
   * @param array|null &$update_element
   *   The element to append the hidden Ajax submit button.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'buildAjaxElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79a1b75e6685aaa91a9fd808e4d30079' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element\'s wrapper.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$element
   *   The element to be update via Ajax.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'buildAjaxElementWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f432f06d1d026b1288f804a29b4d98d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element\'s trigger.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$element
   *   The element to trigger the Ajax update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'buildAjaxElementTrigger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '145e0a6a0522fa18fdfbfc9e2c113caa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an Ajax element\'s update (submit) button.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array &$element
   *   The element to append the hidden Ajax submit button.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'buildAjaxElementUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4b08e733873f492be87c0b8a14f4df1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax element validate callback.
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
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5bc7b5d9e2d119d109db1a5fe1409e2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax element submit callback.
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
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'submitAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3cbb207402057884a53b85defe1f07d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax element update callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The properties element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'updateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '767f7ebf0e075d35eeadb39e0929fb46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get ajax element wrapper.
   *
   * @param string $id
   *   The id used to create the Ajax wrapper and trigger.
   * @param array $element
   *   An element or form containing the Ajax wrapper.
   *
   * @return array|null
   *   The Ajax wrapper element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getAjaxElementWrapperRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17b5a3dde42dce9eae7b8005df29de14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database object.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95c1ca592e4a4c2f2a4b998f1953b29a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e0aa304580eacd8815f55ac1b116c30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a29396599160a3b3fb41c49baedcf28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element plugin manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32fee7406bc3beb3713bbdb97575c569' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source entity.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78bf67f4c34f36f0ac367f3bacd2396e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11c6bec6c37659678a10dc21ccda7b4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'hasAnonymousSubmissionTracking',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a01c4835c78e552f01ee005264e786e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'setSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7cd4a8b0be1f0701b6cc90fe5e94a8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2027ecac11b700d8a5f509c850f2bb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b4bfc7e9ead102484cb4d53ca242ba9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37b9db6e02ca7d7240eacfd37d003484' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c8c9704d969595fb24e5b3e13109ca0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6a55baedd8d2271d4fe4d3a871fc6d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'alterElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a64b73dcfbd1227db8ac2bf147a162fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionForm $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'alterElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '759e58fa0c9bbbf34e8888fa755a812a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'alterElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6462ab7096cd9816332f75a5d47fa4da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate webform element limit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a924f940ed14f93d15a6fe78e983422' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionForm $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76c6a383e4a5631e73e08e13acffeb2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46fd53481168425987c29e48c43b211b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set element\'s limit reached message.
   *
   * @param array $element
   *   An element with limits.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'setElementLimitReachedMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2b5e51ae1e9b634742e152ff481b47a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set an options element\'s default value.
   *
   * @param array $element
   *   An options element with limits.
   * @param array $limits
   *   An options element\'s option limits.
   * @param array $reached
   *   An options element\'s reached options.
   * @param string $operation
   *   The form\'s current operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'setOptionsElementDefaultValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7be60256bd9b7125bb06571ddb5dd2ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alter an options element.
   *
   * @param array $element
   *   An options element with limits.
   * @param array $limits
   *   An options element\'s option limits.
   * @param array $reached
   *   An options element\'s reached options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'alterOptionsElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf4fd7aa5b319cbc952c2e5e8929135a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alter an options element\'s option labels recursively.
   *
   * @param array $options
   *   An options element with limits.
   * @param array $limits
   *   An options element\'s option limits.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'alterOptionsElementLabels',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b86b433fa27c94fd241257b1a3c6878b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Disable options element\'s reached options.
   *
   * @param array $element
   *   An options element with limits.
   * @param array $reached
   *   An options element\'s reached options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'disableOptionsElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eff4ccc2d99d881016f027023ac3db19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Remove options element\'s reached options.
   *
   * @param array $element
   *   An options element with limits.
   * @param array $reached
   *   An options element\'s reached options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'removeOptionsElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10b10334fc54bb459de3b5a9d228c1a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Remove options element\'s reached options.
   *
   * @param array $options
   *   An array options (and optgroups).
   * @param array $reached
   *   An options element\'s reached options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'removeOptionsElementRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06a3cdab36106471e1fb0cf5cb9087dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate an options element with limit(s).
   *
   * @param array $element
   *   An options element with limits.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @internal
   *   This method should only called by
   *   OptionsLimitWebformHandler::validateElementLimit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateOptionsElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85d041db558737c2a29669f7b7be8e4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionForm $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateOptionsElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecad0d38a5bcd8ae201fad0dc1b5bc27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateOptionsElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13cfbe282e7651a48fe6bd2a614e6f6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set a boolean element\'s default value.
   *
   * @param array $element
   *   A boolean element with limits.
   * @param array $limit
   *   A boolean element\'s limit information.
   * @param string $operation
   *   The form\'s current operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'setBooleanElementDefaultValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28e6dc9186195fd030698617ecc222b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alter a boolean element\'s.
   *
   * @param array $element
   *   An boolean element.
   * @param array $limit
   *   A webform boolean element\'s limit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'alterBooleanElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee67d8fe8860306c6f21660d4e7c0205' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate a boolean element with limit(s).
   *
   * Please note that this should never be called because disabled checkbox
   * elements do not post back any value. This code would be executed if
   * some one manually triggers for validation.
   *
   * @param array $element
   *   A boolean element with limits.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @internal
   *   This method should only called by
   *   OptionsLimitWebformHandler::validateElementLimit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateBooleanElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93eae40ebb60f3364a0573fb03e65586' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionForm $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateBooleanElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04ef69ac9d303249c39edd06421b5335' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'validateBooleanElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee4bdc77d7986625654d594e2370a6e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0784cd6669c9abf83cdd1741a6258a97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build summary table.
   *
   * @return array
   *   A renderable containing the options limit summary table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'buildSummaryTable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a688acee79fccfd98650211df95ff533' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get element.
   *
   * @return array
   *   Selected element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab1149fb8b8f11ebccd8d6b7ee9fb81f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get selected webform element plugin.
   *
   * @return \\Drupal\\webform\\Plugin\\WebformElementInterface|null
   *   A webform element plugin instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getWebformElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '840e648166339fd50d6b8038ec3891cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if options element.
   *
   * @return string
   *   TRUE if options element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'isOptionsElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '799f5b6d551aa501da6bcc6a68574d42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if boolean element.
   *
   * @return string
   *   TRUE if boolean element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'isBooleanElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ff05028f349966a049a95bf0e834f21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if table select  element.
   *
   * @return string
   *   TRUE if table select element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'isTableSelectElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ee557234ff9beb10c33ce230f54b788' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get selected webform element label.
   *
   * @return string
   *   A webform element label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getElementLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '103cdbb3fbfd0927be3ae79d33ee39c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get key/value array of webform options or boolean elements.
   *
   * @return array
   *   A key/value array of webform options or boolean elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c710babc197a70a4136fe3fe9dc0cf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get table select elements.
   *
   * @return array
   *   An array containing table select elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getTableSelectElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e516d2f723c1bf59ebf1d4f4a8a16fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get selected element\'s options.
   *
   * @return array
   *   A key/value array of options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getElementOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fbc73372a6329f507f0b3863f1b2480' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an associative array of options limits.
   *
   * @param array $values
   *   Optional array of values to get options limit.
   *
   * @return array
   *   An associative array of options limits keyed by option value and
   *   including the option\'s limit, total, remaining, and status.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getOptionsLimits',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d2954ddca9f2a8b60bf9771f2a8d345' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an associative array of boolean limits.
   *
   * @return array
   *   An associative array of boolean limits keyed by boolean key and
   *   includes the boolean\'s limit, total, remaining, and status.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getBooleanLimits',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '410b069903247f8f5a71e30045639503' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get limit information including label, limit, total, remaining, and status.
   *
   * @param string $label
   *   The element or option label.
   * @param int $limit
   *   The limit.
   * @param int $total
   *   The total.
   *
   * @return array
   *   The limit information including label, limit, total,
   *   remaining, and status.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getLimitInformation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eeb51b6b4012e7054ffa9610fcca5720' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get value array of options reached.
   *
   * @param array $limits
   *   An associative array of options limits.
   *
   * @return array
   *   A value array of disabled options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getOptionsReached',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cbb068df9bc00b361e267e5c6d48b5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get options submission totals for the current webform and source entity.
   *
   * @param array $values
   *   Optional array of values to get totals.
   *
   * @return array
   *   A key/value array of options totals.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getOptionsTotals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f002fd1ea5abafd0b447822eea36964a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get boolean submission total for the current webform and source entity.
   *
   * @return int
   *   Boolean totals.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getBooleanTotal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b90e83b97add23bb07a324477f32c0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get base query for options and boolean limit totals.
   *
   * @return bool|\\Drupal\\Core\\Database\\Query\\SelectInterface
   *   The base query for options and boolean limit totals.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getTotalQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3ba31660cb13fb578705b2618745b78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Database\\StatementInterface $result */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getTotalQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c80f2742e9c1f80cd845f1d28aaaa911' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an options or boolean element\'s limit status message.
   *
   * @param string $type
   *   Type of message.
   * @param array $limit
   *   Associative array containing limit, total, remaining, and label.
   *
   * @return \\Drupal\\Component\\Render\\FormattableMarkup|string
   *   A limit status message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getElementLimitStatusMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f3c03bb3cb750a2a3e6da6c04d944a63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get option limit label.
   *
   * @param string $label
   *   An option\'s label.
   * @param array $limit
   *   The option\'s limit information.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup|string
   *   An option\'s limit label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'booleanbase' => 'Drupal\\webform\\Plugin\\WebformElement\\BooleanBase',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'tableselect' => 'Drupal\\webform\\Plugin\\WebformElement\\TableSelect',
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'webformoptionslimithandlerinterface' => 'Drupal\\webform_options_limit\\Plugin\\WebformOptionsLimitHandlerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_options_limit\\Plugin\\WebformHandler\\OptionsLimitWebformHandler',
         'functionName' => 'getOptionsLimitLabel',
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